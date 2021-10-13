# Tesztjegyzőkönyv

Teszteléseket végezte: Banyik Nándor

Operációs rendszer: Windows 10

Böngészők: Google Chrome, Mozilla Firefox, Opera

A dokumentum tartalmazni fogja az elvégzett tesztek
elvárásait, valamint annak eredményeit időpontokkal
egyaránt feltűntetve (Alfa, Béta, illetve Végleges verzió).

## Alfa teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2021.09.26 | A felhasználók adatainak a meglévő adatbázisba való feltöltése, valamint annak használata | Mind az adatbázis, mind a weboldal megfelelt az elvárásoknak. | Nem találtam hibát. |
| Belépés | 2021.09.26 | Fiók, illetve bejelentkezés hiányában ne lehessen belépni az oldalra | Csak fiókkal, illetve azzal bejelentkezve tudtam belépni az oldalra | Nem találtam hibát. |
| Kijelentkezés | 2021.09.26 | Kijelentkezés után ne tudjunk visszalépni anélkül hogy újra bejelentkeznénk. | Nem tudtam visszalépni a weboldalra anélkül, hogy ne jelentkeztem volna be újra.| Nem találtam hibát. |
| Menüpontok | 2021.09.26 | A menüpontokra rákattintva eltudjuk érni az adott oldalt. | Minden menüpont megfelelően működött. | Nem találtam hibát. |
| Jogosultság | 2021.09.26 | Minfen felhasználó csak az adott területéhez tudjon hozzáférni. | Admin mindenhez hozzá tudott férni a többi felhasználó pedig a saját részéhez. | Nem találtam hibát. |

Az Alfa teszt minden elvárásnak megfelelt hibák,
illetve hiányok nélkül.

Következő tesztelésnél a többi funkció kerül 
vizsgálatra illetve elemzésre.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Munkafolyamat | 2021.10.05 | A munkafolyamat végi tudjon menni rendesen az egyes munkafázisokon. | A munkafolyamat sikeresen végig ment. | Nem találtam hibát. |
| Telefonos elrendezés | 2021.10.05 | Ha telefonon használjuk a weboldalt akkor ugyanolyan legyen az elrendezés mint asztali számítógépen. | Telefonon a navbar egy picit másképp néz ki, de ezen kívül minden rendben volt. | Minimális hibát találtam |
| Új felhasználó hozzáadása (adminként) | 2021.10.05 | Admin hozzátudjon adni egy új felhasználót a rendszerhez. | Sikerült ezt megvalósítani. | Nem találtam hibát. |
| Backend | 2021.10.05 | A backendben megírt PHP kódok megfelelő működése. | A Backend tökéletesen működött. | Nem találtam hibát. |
| Frontend | 2021.10.05 | A weboldal igényes, letisztult megjelenése. | A menürendszer nagyon letisztult, viszont a navbar egy picit elcsúszik. | Minimális hibát találtam. |

A Béta teszt is sikeresen zajlott, 
nagyon minimális hibákat találtam (esztétikai hibák).

A végleges tesztelésnél az összes fent felsorolt 
vizsgálati elem újra ellenőrzésre kerül.
