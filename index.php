<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sanarelax – proktologická ambulancia</title>
  <meta name="description" content="Proktologická ambulancia Sanarelax v Dlhom Poli. Odborný garant MUDr. Peter Dančík. Objednanie na telefónnom čísle 0908 612 704.">
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
  </style>
</head>
<body>
  <main>
    <header>
      <h1>Sanarelax</h1>
      <p class="subtitle">Proktologická ambulancia</p>
      <a class="button" href="#kontakt">Objednanie a kontakt</a>
    </header>

    <section aria-labelledby="lekar">
      <div class="doctor">
        <img class="portrait" src="img/MUDr_Peter_Dančík.jpg" alt="MUDr. Peter Dančík" width="96">
        <div>
          <p class="label">Odborný garant</p>
          <h2 id="lekar">MUDr. Peter Dančík</h2>
          <p>Chirurgická prax od roku 1976 v HNsP Trstená a od roku 1985 vo FNsP Žilina. Dve atestácie z chirurgie, špecializácia na chirurgickú endoskopiu.</p>
          <p>Od roku 2003 sa popri chirurgickej praxi venuje proktológii v súkromnej ambulancii.</p>
        </div>
      </div>
    </section>

    <section aria-labelledby="zameranie">
      <h2 id="zameranie">Zameranie</h2>
      <ul>
        <li>Proktologické vyšetrenie</li>
        <li>Poradenstvo o liečebnom postupe pri všetkých proktologických ochoreniach</li>
        <li>Neoperačná liečba ritnej trhliny</li>
        <li>Ošetrenie vonkajších trombotizovaných hemoroidov</li>
        <li>Neoperačná liečba krvácajúcich vnútorných hemoroidov prístrojom Hemoron</li>
        <li>Konzultácie o zdravotnom stave</li>
        <li>Edukačná činnosť v proktológii</li>
      </ul>
    </section>

    <section id="kontakt" aria-labelledby="kontakt-nadpis">
      <h2 id="kontakt-nadpis">Kontakt</h2>
      <div class="contact-grid">
      <div>
      <h3>Objednanie proktologického vyšetrenia</h3>
      <a class="phone" href="tel:+421908612704">0908 612 704</a>
      <p>Telefonicky denne od 10.00 do 20.00 hod., aj cez víkendy a sviatky.</p>
      <div class="links" aria-label="Možnosti kontaktu">
        <a href="mailto:info@sanarelax.sk"><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 6 9 7 9-7"/></svg><span>info@sanarelax.sk</span></a>
        <a href="sms:+421908612704"><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11a8 8 0 0 1-8 8H6l-4 3 1-6a8 8 0 1 1 18-5Z"/><path d="M7 10h10M7 14h6"/></svg><span>SMS</span></a>
        <a href="https://wa.me/421908612704"><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M20 11.5a8.5 8.5 0 0 1-12.5 7.4L3 20l1.1-4.5A8.5 8.5 0 1 1 20 11.5Z"/><path d="M8 7c-2 3 3 8 6 8l2-2-3-2-1 1-2-2 1-1Z"/></svg><span>WhatsApp</span></a>
        <a href="https://www.facebook.com/sanarelax/"><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M14 21v-8h3l.5-4H14V7c0-1 .5-2 2-2h2V2h-3c-3 0-5 2-5 5v2H7v4h3v8"/></svg><span>Facebook</span></a>
        <a href="https://www.instagram.com/sanarelax/"><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".7" fill="currentColor"/></svg><span>Instagram</span></a>
        <a href="https://g.page/r/CdCc1nNWiC0nEAE"><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z"/><circle cx="12" cy="10" r="2.5"/></svg><span>Google Maps</span></a>
      </div>

      </div>
      <form action="poslat.php" method="post">
        <h3>Napíšte nám</h3>
        <div class="form-row">
          <div class="field">
            <label for="contact_name">Meno</label>
            <input type="text" id="contact_name" name="contact_name" autocomplete="name" required>
          </div>
          <div class="field">
            <label for="contact_email">E-mail</label>
            <input type="email" id="contact_email" name="contact_email" autocomplete="email" required>
          </div>
        </div>
        <div class="field">
          <label for="contact_phone">Telefón</label>
          <input type="tel" id="contact_phone" name="contact_phone" autocomplete="tel" required>
        </div>
        <div class="field">
          <label for="contact_message">Správa</label>
          <textarea id="contact_message" name="contact_message" rows="5" required></textarea>
        </div>
        <button type="submit" class="button">Odoslať správu</button>
      </form>
      </div>
    </section>

    <section class="location" aria-labelledby="poloha-nadpis">
      <div class="location-info">
        <div>
          <h2 id="poloha-nadpis">Kde nás nájdete</h2>
          <address><strong>Sanarelax, s.r.o.</strong><br>
          Zdravotné stredisko · Dlhé Pole 40<br>
          013 32 Dlhé Pole</address>
        </div>
        <a class="button" href="https://g.page/r/CdCc1nNWiC0nEAE">Otvoriť v Google Maps</a>
      </div>
      <iframe id="gmapa" title="Mapa – Zdravotné stredisko Dlhé Pole" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.9226549491436!2d18.625290515036497!3d49.296808277691724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471467ad8bfbe7f3%3A0xce973a1a2fecd4f9!2sZdravotn%C3%A9%20stredisko%20Dlh%C3%A9%20Pole!5e0!3m2!1scs!2ssk!4v1595148067368!5m2!1scs!2ssk" width="100%" height="350" style="border:0" allowfullscreen loading="lazy"></iframe>
    </section>

    <footer>© <?php echo date('Y'); ?> Sanarelax, s.r.o.</footer>
  </main>
</body>
</html>