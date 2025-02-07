# Webshop kosár demo

Demo webshop kosár funkcióinak tervezése és kivitelezése.

## Leírás

A demo webshopban az alábbi termékek megvásárlására van lehetőség:

| Azonosító | Cím                    | Szerző                                      | Kiadó    | Ár  |
|-----------|------------------------|---------------------------------------------|---------|-----|
| 1001      | Dreamweaver CS4        | Janine Warner                              | PANEM   | 3900 |
| 1002      | JavaScript kliens oldalon | Sikos László                            | BBS-INFO | 2900 |
| 1003      | Java                   | Barry Burd                                 | PANEM   | 3700 |
| 1004      | C# 2008                | Stephen Randy Davis                        | PANEM   | 3700 |
| 1005      | Az Ajax alapjai        | Joshua Eichorn                             | PANEM   | 4500 |
| 1006      | Algoritmusok           | Ivanyos Gábor, Rónyai Lajos, Szabó Réka    | TYPOTEX | 3600 |

## Kedvezmények

| Azonosító | Kedvezmény típusa | Kedvezményes termék(ek) |
|-----------|------------------|-------------------------|
| 101       | 10%-os kedvezmény a termék árából | 1006 |
| 102       | 500 Ft kedvezmény a termék árából | 1002 |
| 103       | 2+1 csomag kedvezmény (a szettben szereplő legolcsóbb termék 100%-os kedvezményt kap) | PANEM kiadó összes terméke |

## Megvalósítandó egységek

### Termék lista oldal

- Termékek listájának megjelenítése ABC vagy ár szerint növekvő sorrendben.
- A termékek adatainak megjelenítése (eredeti és kedvezményes ár is, ha van).

### Kosár doboz

- A kosárba helyezett termékek kedvezményekkel csökkentett összértékének megjelenítése.

### Kosár lista

- A kosárban lévő termékek listázása.
- Összegzés:
  - Kedvezmények nélküli összérték.
  - Kedvezmények összértéke.
  - Kedvezményekkel csökkentett végösszeg.
- A kosár mentése, visszaolvasása és ürítése (session alapú, egyetlen mentett állapot).

## Architektúra

- AJAX hívásokkal működő webshop.
- Háttérrendszer MySQL adatbázist használ.
- Háttérrendszer végzi a kosár és kedvezmények számítását.
- Egységtesztek a kosár végösszegének ellenőrzésére.

## Technológiai követelmények

- PHP (8.3 verzóval tesztelve)
- MySQL (8.0 verzióval tesztelve) 
- Composer

## Értékelési szempontok

- Logikai felépítés
- Adatkezelés
- Objektumorientált programozás
- Hibakezelés
- Kódminőség

**A program DEMO változata a következő urlen probálható ki:**

http://nzoltan2.nhely.hu/webshop_cart_demo/

## Adatséma

Az adatbázis két táblát tartalmaz:

### 1. `cartsave` – A felhasználók kosarának állapotát menti session ID alapján.

- `sessionid` (VARCHAR 200, PRIMARY KEY) – Azonosító a felhasználó munkamenetéhez.
- `data` (TEXT) – A kosár tartalma szerializált formában.

### 2. `products` – A webshop termékeit tárolja.

- `id` (INT, PRIMARY KEY, AUTO\_INCREMENT) – Egyedi azonosító.
- `title` (VARCHAR 100) – Termék címe.
- `author` (VARCHAR 100) – Szerző neve.
- `publisher` (VARCHAR 20) – Kiadó neve.
- `price` (INT) – Ár forintban.

## Rendszerterv

Az alkalmazás **MVC struktúrában** készült **OOP programozással**.

Az **`index.php`** indítja a Router objektumot, amely az URL-ben található útvonal alapján eldönti, melyik kontrollert kell meghívni a `Controller` könyvtárból.

### Kontrollerek

A `Controller` könyvtárban a következő kontrollerek találhatók:

- `HomeController`
- `ajax/AddcartController`
- `ajax/CartListController`
- `ajax/DeletecartController`
- `ajax/LoadcartController`
- `ajax/ProductlistController`
- `ajax/SavecartController`

A **`HomeController`** felel az oldal kezdeti betöltéséért, ez hívja meg a `View/home.php` sablont, amely a kezdőoldalt jeleníti meg.

A többi kontroller az AJAX hívásokat kezeli, néhányuk a Model-ek segítségével csatlakozik az adatbázishoz, illetve a `View/ajax/` könyvtár megfelelő sablonjait használja a megjelenítéshez.

## Telepítési útmutató

1. A mellékelt **SQL fájlt** egy MySQL adatbázisba kell feltölteni. Ha nincs adatbázis, akkor `webshop_cart_demo` néven hozza létre.
2. A forráskódot egy könyvtárba kell másolni.
3. A **`config.php`** fájlban be kell állítani az adatbázis elérési adatait.
4. Az Apache szervert úgy kell konfigurálni, hogy a **.htaccess** fájlt kezelje.

