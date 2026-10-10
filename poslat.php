<?php
$success = false;
$error = '';
$values = array();
$fields = array('contact_name', 'contact_email', 'contact_phone', 'contact_message');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($fields as $field) {
        $values[$field] = isset($_POST[$field]) && is_string($_POST[$field])
            ? trim($_POST[$field]) : '';
    }
    if (in_array('', $values, true)) {
        $error = 'Vyplňte, prosím, všetky polia formulára.';
    } elseif (!filter_var($values['contact_email'], FILTER_VALIDATE_EMAIL)
        || preg_match('/[\r\n]/', $values['contact_email'])) {
        $error = 'Skontrolujte, prosím, svoju e-mailovú adresu.';
    } elseif (strlen($values['contact_name']) > 300
        || strlen($values['contact_email']) > 254
        || strlen($values['contact_phone']) > 100
        || strlen($values['contact_message']) > 20000) {
        $error = 'Niektoré údaje sú príliš dlhé. Skráťte ich, prosím, a skúste formulár odoslať znova.';
    } else {
        $subject = '=?UTF-8?B?' . base64_encode('Správa z kontaktného formulára – Sanarelax.sk') . '?=';
        $message = "Správa z kontaktného formulára:\n\n"
            . "Meno: " . $values['contact_name'] . "\n"
            . "E-mail: " . $values['contact_email'] . "\n"
            . "Telefón: " . $values['contact_phone'] . "\n\n"
            . "Správa:\n" . $values['contact_message'] . "\n";
        $headers = "From: Sanarelax <info@sanarelax.sk>\r\n"
            . "Reply-To: " . $values['contact_email'] . "\r\n"
            . "MIME-Version: 1.0\r\n"
            . "Content-Type: text/plain; charset=UTF-8\r\n";
        $success = @mail('info@sanarelax.sk', $subject, $message, $headers);
        if (!$success) {
            $error = 'Správu sa nepodarilo odoslať. Skúste to, prosím, neskôr alebo nás kontaktujte telefonicky či e-mailom.';
        }
    }
} else {
    $error = 'Najskôr, prosím, vyplňte kontaktný formulár na hlavnej stránke.';
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex">
  <title><?php echo $success ? 'Správa odoslaná' : 'Kontaktný formulár'; ?> – Sanarelax</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="response-page">
  <main>
    <header>
      <h1>Sanarelax</h1>
      <p class="subtitle">Proktologická ambulancia</p>
    </header>
    <section aria-labelledby="vysledok">
      <?php if ($success): ?>
        <div class="status" aria-hidden="true">✓</div>
        <h2 id="vysledok">Ďakujeme za vašu správu</h2>
        <p>Správa bola odoslaná. Ďakujeme, že ste nás kontaktovali.</p>
        <p class="note" id="redirect-note" hidden>O chvíľu budete presmerovaní na hlavnú stránku.</p>
        <progress id="progressBar" value="0" max="5" aria-label="Čas do návratu na hlavnú stránku" hidden></progress>
        <div class="actions"><a class="button" href="index.html">Späť na hlavnú stránku</a></div>
      <?php else: ?>
        <div class="status" aria-hidden="true">!</div>
        <h2 id="vysledok">Správa nebola odoslaná</h2>
        <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
        <div class="actions">
          <a class="button" href="index.html#kontakt">Späť na kontaktný formulár</a>
          <a href="tel:+421908612704">0908 612 704</a>
          <a href="mailto:info@sanarelax.sk">info@sanarelax.sk</a>
        </div>
      <?php endif; ?>
    </section>
    <footer>© <?php echo date('Y'); ?> Sanarelax, s.r.o.</footer>
  </main>
  <?php if ($success): ?>
  <script>
    const progress = document.getElementById('progressBar');
    progress.hidden = false;
    document.getElementById('redirect-note').hidden = false;
    const started = Date.now();
    const timer = setInterval(function () {
      const elapsed = (Date.now() - started) / 1000;
      progress.value = Math.min(elapsed, 5);
      if (elapsed >= 5) {
        clearInterval(timer);
        window.location.replace('index.html');
      }
    }, 100);
  </script>
  <?php endif; ?>
</body>
</html>