## 1. Jelenlegi helyzet

A PLS futárcég eddig XY településeken egyedüli vállalkozásként végezte a csomagok kiszállítását.
A vállalatnak eddig elegendő volt füzetben nyilvántartani a csomagok állapotát, mivel kevesen dolgoztak a cégnél és kevés volt a kiszállítandó csomag is.


## 2. Vágyálom rendszer

A cég bővülni fog, most már regionális szinten fognak csomagokat kézbesíteni.
Várhatóan egyre nőni fog a megbízások száma, ezért a cég szeretne egy saját nyilvántartó weboldalt, mellyel a dolgozók munkáját könnyítené meg.
A dolgozók ennek segítségével visszajelezhetnek az egyes csomagok állapotáról. A PLS elvárja, hogy a weboldal könnyen használható, igényes legyen.
A weboldalon lehessen csoportokat létrehozni, így részlegenként nyomon követhetők a tételek.

## 3. Jelenlegi üzleti folyamatok
- 3.1 - Új megrendelés feljegyzése
	- 3.1.1 - Telefonos megrendelés, egyeztetés
	- 3.1.2 - Megrendelés adatainak felvitele a füzetbe
	- 3.1.3 - Dolgozó értesítése az új megrendelésről, annak adatairól
- 3.2 - Munkafázisok követésa
   - 3.2.1 - A megrendelés jelenlegi állapotait feljegyezni a munkafázisnak megfelelően
   - `Ez akkor tekinthető késznek, ha a kiszállítása megtörtént`
 - 3.3 - Csomag sikeres kiszállítása
    - 3.3.1 A szállító visszaér a depóba 
    - 3.3.2 Kiszállított rendelések kihúzása a füzetből



## 4. Igényelt üzleti folyamatok
- 4.1 - Felhasználói fiókok létrehozása
    - 4.1.1 - Az admin létrehozza az alkalmazottak felhasználói fiókjait
    - 4.1.2 - A fiókokhoz a megfelelő hozzáférési körök rendelése
- 4.1 - Új megrendelés regisztrálása
    - 4.1.1 - A jegyző belép a megfelelő jogosultsággal
    - 4.1.2 - Ügyfelekkel való egyeztetés
    - 4.1.3 - felviszi a webes felület adatbázisába a csomag adatait
    - ` Csomag azonosító, Termék neve, Megrendelő neve, Kiszállítás helye, Csomag állapota`
- 4.2 - A dolgozók láthassák, ha egy újabb csomaggal teendőjük van
    - 4.2.1 - Bejelentkezés a saját dolgozói fiókjukkal a felületre
    - 4.2.2 - Az egyes munkafázisok elvégzése
    - 4.2.3 - Csomag állapotát módosítani
- 4.3 - A kiszállított termékeket ne listázza ki a dolgozóknak
    - 4.3.1 - A kész csomagokat  csak az admin illetve a jegyző láthassa
    - `Biztonsági okokból nem törlődhetnek az adatbázisból`
       
## 5. A rendszerre vonatkozó szabályok
- A web felület szabványos eszközökkel készüljön, html/php/css
- A felület a lehető legkevesebb oldalból álljon
- Egy oldalon történjen a listázás
- Jogosultságtól függően módosítást végző nyomógombok
- A rendszer legyen intuitív, betanítást ne igényeljen
- A rendszerhez való hozzáférés mindenképpen fiókhoz kötött, melyet előzetesen az admin hoz létre
- A felhasználókat azonosító weboldalak esetében szükséges GDPR jogszabályokat be kell tartani

## 6. Követelménylista
- K01 Könnyen átlátható felület
- K02 Eszközfüggetlen design
- K03 Tételek csoportosíthatósága
- K04 Csomagok kereshetősége
- K05 Jogosultsági rendszer, 3 szint
    -1. Jogosultságok kezelése, teljes hozzáférés
    -Megrendelés felvitele
    -Megrendelés állapotának módosítása

## 7. Fogalomtár

- Jegyző: rendelést rögzítő alkalmazott
- Depó: más szóval lerakat, raktár
- Intuitív: egyértelmű, magától értetődő
- GDPR: [General Data Protection Regulation] Általános adatvédelmi megszorítások. Fő célja a személyes adatok egységes szintű adatvédelmi biztosítása az Európai Unión belül.
- Design: megjelenés, stílus
