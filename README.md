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

Budúce podstránky môžu byť samostatné HTML súbory v koreňovom adresári so spoločným assets/css/main.css. Prvá podstránka `hemoron.html` je pridaná a je prepojená z druhého bodu zamerania. Zvyšných šesť bodov zostáva bez odkazu, kým nebudú dodané texty; nevytvárame prázdne stránky. Rok v statickej pätičke je 2026; upravuje sa ručne.

## Kontrola

Automaticky porovnané viditeľné texty s pôvodným index.php. PHP beh a doručovanie e-mailov treba overiť na hostingu.
## Aktualizácia 14. 11. 2026

- Text hlavnej stránky porovnaný so živým webom sanarelax.sk; živý web je rozhodujúci zdroj existujúceho obsahu.
- Horné odkazy Facebook/Instagram a farebné odlíšenie hlavičky a životopisu zachované z predchádzajúceho schváleného commitu.
- Hemoron presunutý na druhé miesto, názov bez slova „krvácajúcich“; odkaz na `hemoron.html`.
- Podstránka používa spoločné CSS, navigáciu späť na zameranie, telefonické objednanie a mapu. Formulár je dostupný na hlavnej stránke.
- Otcov dodaný text je jazykovo upravený. Absolútne sľuby o bezrizikovosti, účinku, príprave a pracovnej neschopnosti sú formulované podmienene; kontraindikácia kardiostimulátora je vyjadrená ako pravidlo pracoviska, nie ako úplný zoznam kontraindikácií.
- Podklad ku korekcii všeobecných tvrdení: NICE HTG377, https://www.nice.org.uk/guidance/htg377 (elektroterapia všeobecne, nie výlučne konkrétny prístroj Hemoron).
- Na FTP nahrať `index.html`, `hemoron.html` a `assets/css/main.css`. PHP súbory sa nemenia.

### Ďalšie podstránky (plánované názvy súborov)

1. `proktologicke-vysetrenie.html`
2. `hemoron.html` – hotová
3. `poradenstvo.html`
4. `ritna-trhlina.html`
5. `vonkajsie-hemoroidy.html`
6. `konzultacie.html`
7. `edukacia.html`
