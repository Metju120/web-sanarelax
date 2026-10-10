# Sanarelax

Tmavomodrá jednostránková prezentácia proktologickej ambulancie. Viditeľný obsah hlavnej stránky je zachovaný z pôvodného index.php bez dopĺňania marketingových textov.

## Štruktúra

- `index.html` – statická hlavná stránka.
- `assets/css/main.css` – spoločné responzívne štýly, použiteľné aj pre budúce podstránky.
- `assets/img/peter-dancik.jpg` – dodaný portrét lekára.
- `assets/img/ordinacia.webp` – AI vytvorený ilustračný interiér; nejde o fotografiu skutočnej ambulancie.
- `poslat.php` – existujúce odosielanie formulára s rovnakým dizajnom a návratom na index.html.
- `index.php` – kompatibilné presmerovanie starých odkazov na index.html.

## Nasadenie

Nahrajte súbory a adresár assets na súčasný PHP hosting. Zálohujte pôvodné súbory. Index.php teraz len presmeruje na index.html, takže fungujú aj hostingy uprednostňujúce PHP index.

Nie je potrebný build ani databáza. GitHub Pages zobrazí HTML, ale nespracuje poslat.php. Pre formulár musí hosting podporovať PHP mail() a odosielanie z info@sanarelax.sk. Príjemca zostáva info@sanarelax.sk a e-mail návštevníka je Reply-To.

Úspech mail() nie je potvrdením doručenia. Overte doručenie skúšobnej správy na hostingu. Ochrana proti spamu a obmedzenie frekvencie zatiaľ nie sú implementované.

## Rozšírenie

Budúce podstránky môžu byť samostatné HTML súbory v koreňovom adresári so spoločným assets/css/main.css. Nové texty ani podstránky zatiaľ nie sú pridané. Rok v statickej pätičke je 2026; upravuje sa ručne.

## Kontrola

Automaticky porovnané viditeľné texty s pôvodným index.php. PHP beh a doručovanie e-mailov treba overiť na hostingu.