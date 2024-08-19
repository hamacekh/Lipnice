# Procvičování databází
Zdroj netflix dat: https://www.kaggle.com/datasets/victorsoeiro/netflix-tv-shows-and-movies

Obsah je ke stažení ve veřejném github repozitáři https://github.com/hamacekh/Lipnice/tree/main/2024/database 

## Obsah projektu
- `data/netflix`: původní data stažená z kaggle
- `data/netflix_clean`: data se složenými sloupci převedenými do n:m relací
- `sqlite-databases`: sqlite databáze odpovídající předchozím dvoum zdrojům. Jde o vygenerovaná data, která vzniknou spuštěním jupyteru `prevod_do_sqlite.ipynb`.
- `prevod_do_mysql.ipynb`: kód na převod původních dat do mysql databáze, jako mezikrok generuje obsah `data/netflix_clean`
- `prevod_do_sqlite.ipynb`: kód na převod původních dat do sqlite databáze, jako mezikrok generuje obsah `data/netflix_clean` identicky s `prevod_do_mysql.ipynb`

## Příprava prostředí
- Nainstalovat python https://www.python.org/downloads/
- Doinstalovat python pip balíčky vyjmenované v souboru `requirements.txt`. To jde například pomocí příkazu `pip install -r requirements.txt` v konzoli.
- Nainstalovat nějaký editor, který umí pracovat s jupyter notebooky. Doporučuji zdarma Visual Studio Code https://code.visualstudio.com 

## Poznámky k hodině
Máme skutečná data sesbírané z Netflixu.

Představme si, že máme seznam titulů s informacemi
- jméno titulu
- rok vydání
- jestli jde o film nebo seriál
- popis
- skóre imdb
- id imdb

Ukázat reprezentaci, datové typy v tabulce.

Představme si, že máme tabulku Lidí. O každém z nich máme informace:
- Jméno filmové postavy
- Jméno herce, který jí hraje

Vymyslete
1. jak reprezentovat tabulku lidí
2. jak je propojit s tituly

- Co kdybychom měli u každého titulu ještě seznam žánrů?
- A nešlo by tu tabulku lidí udělat lépe?

Ukázat `zkoumani_jupyteru.ipynb`
