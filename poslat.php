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
  <style>
    :root { color-scheme: light; }
    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body { margin: 0; background: #edf5fb; color: #263e52; font: 17px/1.65 system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
    main { max-width: 960px; margin: auto; padding: 40px 24px 24px; }
    header { padding: 36px; margin-bottom: 24px; border-radius: 22px; background: linear-gradient(120deg, #d6eafb, #e8f4fd); border: 1px solid #c5deef; }
    h1 { margin: 0; color: #164b78; font-size: clamp(38px, 7vw, 54px); line-height: 1.15; letter-spacing: -.03em; font-weight: 650; }
    .subtitle { margin: 8px 0 24px; font-size: 23px; color: #416580; }
    h2 { margin: 0 0 16px; color: #164b78; font-size: 25px; line-height: 1.3; }
    h3 { margin: 0 0 8px; font-size: 21px; }
    p { margin: 0 0 14px; }
    section { margin-bottom: 20px; padding: 30px; border: 1px solid #d8e6f0; border-radius: 18px; background: #fff; box-shadow: 0 5px 20px #224e7510; scroll-margin-top: 20px; }
    a { color: #175e94; text-underline-offset: 4px; }
    a:hover { color: #103e62; }
    :focus-visible { outline: 3px solid #2379b9; outline-offset: 4px; }
    .button { display: inline-block; padding: 11px 20px; border: 0; border-radius: 9px; background: #206ca5; color: #fff; font: inherit; font-weight: 600; text-decoration: none; cursor: pointer; }
    .button:hover { background: #185582; color: #fff; }
    .doctor { display: flex; align-items: flex-start; gap: 22px; }
    .portrait { width: 96px; height: auto; flex: 0 0 96px; border-radius: 12px; }
    .label { color: #567187; margin-bottom: 4px; font-size: 15px; }
    ul { margin: 0; padding-left: 22px; }
    li { margin-bottom: 8px; padding-left: 4px; }
    li::marker { color: #4388b9; }
    .phone { text-decoration: none; display: inline-block; font-size: 28px; font-weight: 650; margin: 2px 0 10px; }
    .links { display: flex; flex-wrap: wrap; gap: 10px; margin: 24px 0 0; }
    .links a { display: inline-flex; align-items: center; gap: 9px; padding: 9px 12px; border: 1px solid #d3e3ef; border-radius: 10px; background: #f5f9fd; font-size: 15px; text-decoration: none; overflow-wrap: anywhere; }
    .links a:hover { background: #e4f0fa; border-color: #9ebfd7; }
    .links svg { width: 21px; height: 21px; flex: 0 0 21px; }
    address { font-style: normal; }
    .contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
    form { padding: 22px; border-radius: 12px; background: #f1f7fc; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    label { display: block; margin-bottom: 5px; font-size: 15px; font-weight: 600; }
    .field { margin-bottom: 14px; min-width: 0; }
    input, textarea { width: 100%; padding: 11px 12px; border: 1px solid #aabfce; border-radius: 8px; background: #fff; color: #263e52; font: inherit; }
    textarea { resize: vertical; min-height: 130px; }
    .location { padding: 0; overflow: hidden; }
    .location-info { padding: 26px 30px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
    .location-info h2 { margin-bottom: 8px; }
    .location iframe { display: block; width: 100%; height: 350px; border: 0; filter: grayscale(100%); }
    footer { padding: 8px 5px; color: #567187; font-size: 14px; }
    @media (max-width: 720px) { .contact-grid { grid-template-columns: 1fr; } .location-info { align-items: flex-start; flex-direction: column; } }
    @media (max-width: 480px) {
      main { padding: 18px 14px; }
      header, section { padding: 23px 20px; }
      .doctor { gap: 14px; }
      .portrait { width: 72px; flex-basis: 72px; }
      h2 { font-size: 22px; }
      h3 { font-size: 19px; }
      form { padding: 16px; }
      .location { padding: 0; }
      .location-info { padding: 23px 20px; }
      .location iframe { height: 300px; }
      .form-row { grid-template-columns: 1fr; gap: 0; }
    }
    @media (prefers-reduced-motion: reduce) { html { scroll-behavior: auto; } }
  
    main { max-width: 760px; }
    .status { width: 52px; height: 52px; display: grid; place-items: center; margin-bottom: 20px; border-radius: 50%; background: #e4f0fa; color: #175e94; font-size: 28px; }
    .actions { display: flex; flex-wrap: wrap; gap: 14px 22px; align-items: center; margin-top: 24px; }
    .note { color: #567187; font-size: 15px; }
    [hidden] { display: none !important; }
    progress { display: block; width: 100%; height: 8px; margin: 18px 0; accent-color: #206ca5; }
  </style>
</head>
<body>
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
        <div class="actions"><a class="button" href="index.php">Späť na hlavnú stránku</a></div>
      <?php else: ?>
        <div class="status" aria-hidden="true">!</div>
        <h2 id="vysledok">Správa nebola odoslaná</h2>
        <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
        <div class="actions">
          <a class="button" href="index.php#kontakt">Späť na kontaktný formulár</a>
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
        window.location.replace('index.php');
      }
    }, 100);
  </script>
  <?php endif; ?>
</body>
</html>