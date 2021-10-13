# Tesztjegyzőkönyv

Teszteléseket végezte: Sárosi Gábor

Operációs rendszer: Windows 10

Böngészők: Mozilla Firefox, Microsoft Edge

A dokumentum tartalmazni fogja az elvégzett tesztek
elvárásait, valamint annak eredményeit időpontokkal
egyaránt feltűntetve (Alfa, Béta, illetve Végleges verzió).

## Alfa teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2021.09.27 | A felhasználók adatainak feltöltése, azok használata | Megfelelt. | - |
| Belépés | 2021.09.27 | Fiók és bejelentkezés nélkül ne lehessen belépni az oldalra. | Mindkét esetben átirányított a bejelentkezési oldalra. | - |
| Kijelentkezés | 2021.09.27 | Kijelentkezés után ne tudjunk visszalépni anélkül hogy újra bejelentkeznénk. | Minden esetben visszairányított a bejelentkezési oldalra. | - |
| Menüpontok | 2021.09.27 | A menüpontokra rákattintva el tudjuk érni az adott oldalt. | Minden menüpont megfelelően működött. | - |
| Jogosultság | 2021.09.27 | Minden felhasználó csak az adott területéhez tudjon hozzáférni. | Minden jogosultság számára látszik a profilok kezelése. | A felhasználók kezelése csak az admin számára kell, hogy látható legyen. |

A profilok kezelése menüpont megjelenítése javításra szorul, minden más megfelelt.

A következő tesztelésnél a többi funkció kerül 
vizsgálatra illetve elemzésre.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Munkafolyamat | 2021.10.04 | A munkafolyamat lépésről-lépésre működjön. | A munkafolyamat sikeresen végigment. | - |
| Telefonos elrendezés | 2021.10.04 | A felhasználói felület legyen telefonon is használható, igényes. | A navbar nem felhasználóbarát, minden más megfelel telefonos használatra. | Navbar javításra szorul. |
| Új felhasználó hozzáadása (adminként) | 2021.10.04 | Admin hozzá tudjon adni egy új felhasználót a rendszerhez. | Sikeresen hozzáadható új felhasználó. | - |
| Backend | 2021.10.04 | A PHP scriptek megfelelő működése. | A backend kifogástalanul működött. | - |
| Frontend | 2021.10.04 | A weboldal felhasználóbarát megjelenése. | A menürendszer letisztult, a navbar kissé balra el van csúszva. | - |

A navbar esztétikai javításra szorul, minden más megfelelt.

A végleges tesztelésnél az összes fent felsorolt 
vizsgálati elem újra ellenőrzésre kerül.

## Végleges teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2021.10.13 | A felhasználók adatainak feltöltése, illetve a weboldalt tudják használni. | Az elkészített adatbázisunk megfelelően működött. | - |
| Belépés | 2021.10.13 | Ne tudjunk belépni anélkül hogy nem rendelkeznénk fiókkal. | Csak fiókkal sikerült belépnem a weboldalra. | - |
| Kijelentkezés | 2021.10.13 | Kijelentkezés után ne tudjunk visszalépni anélkül hogy újra bejelentkeznénk. | Nem tudtam visszalépni a weboldalra anélkül, hogy ne jelentkeztem volna be újra. | - |
| Menüpontok | 2021.10.13 | A menüpontokra rákattintva eltudjuk érni az adott oldalt. | Minden menüpont megfelelően működik. | - |
| Jogosultság | 2021.10.13 | Minden felhasználó csak az adott területéhez tudjon hozzáférni. | Az alfa tesztben leírt probléma orvosolva, minden megfelelően működött. | - |
| Munkafolyamat | 2021.10.13 | A munkafolyamat lépésről lépésre működjön. | Hiba nélküli működés. | - |
| Telefonos elrendezés | 2021.10.13 | Ha telefonon használjuk a weboldalt akkor ugyanolyan legyen az elrendezés mint asztali számítógépen. | Telefonon a navbar kinézete javításra került. | - |
| Új felhasználó hozzáadása (adminként) | 2021.10.11 | Admin hozzátudjon adni egy új felhasználót a rendszerhez | Működik. | - |
| Backend | 2021.10.13 | A PHP scriptek megfelelő működése. | A backend kifogástalanul működött. | - |
| Frontend | 2021.10.13 | A weboldal igényes, letisztult megjelenése. | A Frontend esztétikai hibái javításra kerültek a béta teszt óta. | - |

A végleges teszt lezajlott, minden elem megfelelően működik.

Az alkalmazás átadásra készen áll a megrendelőnek.

Tesztjegyzőkönyv véglegesen befejezve: 2021.10.13.

Dokumentációt készítette: Sárosi Gábor
