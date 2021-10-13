# Rendszerterv

## 1. A rendszer célja
Egy futárcég számára készítünk egy olyan webfelületet, mely megkönnyíti minden alkalmazott munkáját. Az adminnak teljeskörű jogosultsága van, azaz kezelheti az alkalmazottak jogait, jelszavait, mindent megtudhat a csomagok állapotáról. A rendelésfelvevő nevéből értetődően a beérkező megbízásokat felveszi az adatbázisba, vagy módosíthatja a bejegyzések tartalmát. A raktárosok számára intuitív rendszert hozunk létre, mellyel kvázi munkatársainak jeleznek vissza az egyes csomagok állapotáról. A megbízást a futár maga zárja le, mikor átadja a csomagot a megrendelőnek. A webfelület HTML, CSS, PHP nyelvek segítségével jön létre. Az adatbázist MySQL segítségével  hozzuk létre. Fontos, hogy az admin számára számítógépről és a raktárosoknak telefonról egyforma felhasználási élményt nyújtsunk, ezért Bootstrap segítségével reszponzív designt valósítunk meg.

## 2. Projektterv
Projektmunkások, felelősségek:
- Adatbázistervezés, annak létrehozása: Kecse Károly, Nagy Péter Axel
- Frontend: Banyik Nándor, Kecse Károly, Nagy Péter Axel
- Webdesign, bootstrap beépítése: Sárosi Gábor
- Backend: Banyik Nándor, Sárosi Gábor
- Tesztelés: Nagy Péter Axel

## 3. Üzleti folyamatok modellje
[link](https://app.diagrams.net/#G1etz7i0_VDxqo2UWqLyRIaN9u90P9lURz)

## 4. Követelmények
 - Funkcionális követelmények
    -  Felhasználók bejelentkezési adatainak tárolása
    -  Felhasználói jogkörök kialakítása, hozzárendelése
    - Csomagok adatainak tárolása
    - Webes környezeten való stabil működés
 - Nem funkcionális működés
    - A raktári dolgozók ne férhessenek hozzá a rendelést rögzítő felülethez
    - Kiszállított csomagok csak az adminnak és a rendelésfelvevőnek lehessen kilistázható
    - Csak az admin férhessen hozzá a felhasználók bejelentkezési adataihoz
 - Törvényi előírások, szabályok
    - A web felület szabványos eszközökkel készüljön, html/php/css
    - Intuitív, átlátható rendszer
    - Kötelező autentikáció
    - GDPR szabályoknak való megfelelés

## 5. Funkcionális terv
 - Rendszerszereplők
    - Admin
    - Rendelésfelvevő
    - Raktáros
    - Futár
 - Rendszerhasználati esetek és lefutásaik:
    - ADMIN:
        - Rendszer feletti korlátlan hozzáférés
        - Felhasználók létrehozása, törlése
        - Felhasználók adatainak módosítása
        - Rendelés felvitele az adatbázisba
        - Rendelés adatainak módosítása
        - Aktuális, illetve kiszállított rendelések megtekintése
     - Rendelésfelvevő
        - Rendelés felvitele az adatbázisba
        - Rendelés adatainak módosítása
        - Aktuális, illetve kiszállított rendelések megtekintése
    - Raktáros
        - Csomag állapotának megváltoztatása
        - Hozzáférés a rendeléseket listázó felülethez, ahol az el nem készített csomagok adatait láthatják
    - Futár
        - Csomag állapotának megváltoztatása
        - Hozzáférés a rendeléseket listázó felülethez, ahol az elkészített, szállításra csomagok adatait láthatják a szállítási címmel együtt
 - Menü-architektúrák:
    - BEJELENTKEZÉS:
        - Bejelentkezés
            --- Felhasználónév
            --- Jelszó
    - FŐOLDAL:
        - Felhasználók --- ***ADMIN***
        - Rendelés hozzáadása --- ***ADMIN, RENDELÉSFELVEVŐ***
        - Rendelések lekérdezése --- ***ADMIN, RENDELÉSFELVEVŐ, RAKTÁROS***
        - Rendelések módosítása 
    - KIJELENTKEZÉS

# 6. Fizikai környezet
 - Az alkalmazás WEB platformon készül.
    - A BootStrap alkalmazása miatt hordozható eszközökön (okostelefon, táblagépek) illetve asztali számítógépeken is egyformán elérhető.
 - Fejlesztői eszközök:
    - Visual Studio Code
    - MySQL Workbench
    - CodeTogether
    - XAMPP
    - Adobe Photoshop (2021)


##  8. Adatbázis terv

Létrehozott adatbázis táblák: 

-kiszallitas (megbizasid, kiszallito, datum, fizetes_formaja, sikeres)

-csomag_elokeszites (megbizasid, alkalmazottid, fazis)

-cimzett (id, nev, lakcim, telefonszam, email)

-alkalmazott (id, teljesnev, felhasznalonev, jelszo, jog)

-megbizas (id, feladas_datum, cimzettid, partnercegid, megnevezes, ar, suly)

-partnercegek (id, nev, cim)

## 9. Implementációs terv

A Webes felület főként HTML, CSS, és PHP nyelven fog készülni.
Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, 
és úgy fogjuk egymáshoz csatolni a jobb átláthatóság,
könnyebb változtathatóság, és könnyebb bővítés érdekében.

## 10. Tesztterv 

Az alkalmazás fejlesztése közben szükségünk lesz a különböző funkciók folyamatos tesztelésére és ezek esetleges javítására. 
Több tesztelés fog megtörténni a fejlesztés során és ezek a tesztjegyzőkönyvbe lesznek nyomon követve és véleményezve.

A Tesztjegyzőkönyv megtalálható a többi dokumentáció között.
