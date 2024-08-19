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
Pro funkčnost jupyteru s připojením k databázi je potřeba nainstalovat pip balíčky vyjmenované v souboru `requirements.txt`. To jde například pomocí příkazu `pip install -r requirements.txt` v konzoli.