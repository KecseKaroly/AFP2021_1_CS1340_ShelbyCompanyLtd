# Rendszerterv

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

## 9. Implementációs terv

## 10. Tesztterv 
