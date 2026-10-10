# Sanarelax

Webová prezentácia proktologickej ambulancie Sanarelax v Dlhom Poli.

## Súbory

- `index.php` – hlavná stránka, informácie o lekárovi a ambulancii, kontaktný formulár a mapa.
- `poslat.php` – spracovanie formulára, validácia údajov a odoslanie správy na `info@sanarelax.sk` pomocou PHP `mail()`.

Štýly a kontaktné SVG ikony sú vložené priamo v stránkach. Nie je potrebný build ani inštalácia balíkov.

## Spustenie

Použite webhosting s podporou PHP. Oba súbory nahrajte do rovnakého adresára. Pre funkčné odosielanie formulára musí hosting podporovať a správne konfigurovať PHP `mail()` a odosielanie z adresy `info@sanarelax.sk`.

Na lokálny náhľad s nainštalovaným PHP:

```sh
php -S localhost:8000
```

Potom otvorte `http://localhost:8000/index.php`. Lokálny náhľad sám osebe nezabezpečuje odosielanie e-mailov.

## Chýbajúci podklad

Hlavná stránka odkazuje na portrét `img/MUDr_Peter_Dančík.jpg`. Tento obrázok nebol medzi pripravenými zdrojovými súbormi a treba ho doplniť do adresára `img` s presne týmto názvom.

## Nasadenie

GitHub uchováva zdrojové súbory. Nahranie do tohto repozitára samo osebe nemení živý web `sanarelax.sk`. PHP stránku a kontaktný formulár je potrebné nasadiť na PHP hosting; GitHub Pages PHP nevykonáva.

## Overenie pred nasadením

- Doplniť portrét lekára.
- Overiť zobrazenie na mobile a počítači.
- Na hostingu otestovať doručenie správy z formulára a návrat na hlavnú stránku.
