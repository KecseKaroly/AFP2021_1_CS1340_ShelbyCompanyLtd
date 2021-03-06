# Funckionális Specifikáció

## 1. Áttekintés
Egy olyan rendszert fejlesztünk, ami segítségével egy szállítással foglalkozó cég megrendeléseinek állapotát lehet egyszerűbben nyomon követni. Célunk, hogy minden  eszközön könnyedén használható legyen a rendszer. A csomagok kilistázhatósága, kezelése mellett jogosultsági rendszert valósítunk meg, melyekkel a munkafolyamatok különböző fázisait tudják rendszerezni. Szükséges, hogy a csomagok állapotát a jelenlegi státuszuknak megfelelően lehessen változtatni. A csomagok listázásakor rendezési illetve keresési lehetőségeket biztosítunk.


## 2. Jelenlegi helyzet
A felhasználó szeretné felváltani a füzetben vezetett csomagjairól szóló nyilvántartást egy digitális felületre, ahol könnyebben és kényelmesebben tudná regisztrálni a megrendeléseket, valamint figyelemmel követni a munkavégzés fázisait. Mivel fontosnak tartják a vevővel való kommunikációt és a megrendelés komolyságát, így szeretnének egy új, saját ízlésüknek megfelelő szoftvert készíttetni, amivel ezt megvalósíthatják. Fontos számukra az oldal egyértelmű használata, egyszerű nyelvezete. Elvárják a letisztult, reszponzív megjelenést. 

## 3. Követelménylista

| Modul | Id | Név | Kifejtés |
| :---: | --- | --- | --- |
| Jogosultság | K01 | Jogosultsági szintek | Admin - Rendszer felett teljes hozzáférés. Jegyző - Megrendelések rögzítése, adatainak módosítása. Dolgozó  - Megrendelések státuszának módosítása |
| Jogosultság | K02 | Regisztráció | Az Admin jogosultsággal rendelkező felhasználónak lehetősége van szerepkörök kiosztására, valamint új felhasználók létrehozására. |
| Jogosultság | K03 | Bejelentkezés |Az Admin által kiosztott felhasználónév-jelszó párossal történik a bejelentkezés. |
| Modifikáció | K04 | Jelszó | Elvesztett jelszó esetén csakis az Adminnak van lehetősége új jelszót adni. |
| Adminisztráció | K05 | Adatok felvitele | A jegyzőnek lehetősége van új megrendelést felvinni az adatbázisba. |
| Adminisztráció | K06 | Státusz módosítása | A dolgozó köteles minden munkafázis elvégzése után a csomag státuszát megváltoztatni a megfelelőre. |
| Felület | K07 | Kilistázás | A dolgozó szerepkörben bejelentkezett felhasználók csak a ki nem szállított csomagokat láthatják, egyébként a magasabb rangúak az összes rendelést látják. |


## 4. Jelenlegi üzleti folyamatok modellje	
Ügyfelünk jelenleg papíron követi nyomon rendeléseit és azok jelenlegi állapotát, ám bővítés miatt elengedhetetlenné vált egy nyilvántartó szoftver használata. A XX. században a cégek/vállalkozások a nyilvántartást papíron végezték, akár írógéppel írt szöveg, akár kézírással egy füzetbe. Az adatok feljegyzését könnyen el lehet rontani, s ez az írógépeknél a teljes újrakezdést jelentette egy oldalnál. Mindkettő eset biztonsági/nyilvántartási tekintetben is tökéletlen. Mindez a XXI. században elavultnak számít nem csak nagy, de kis cégeknél is. Ennél fogva manapság szükséges egy jól felépített szoftver/alkalmazás, amit a technológiában laikusak is könnyedén tudnak használni, illetve szerkeszteni. Ezzel is segítve a nyilvántartás gyorsaságát, pontosságát, s a legfontosabb: a biztonságát.


## 5. Igényelt üzleti folyamatok modellje	
A technológiailag lemaradt cégeknek egyéni szoftvert/alkalmazást hozunk létre, amellyel a nyilvántartást megkönnyíthetik. Rendelesés feljegyzése esetén nem kell majd füzetet/írógépet használni, illetve annak értesítéséhez nem kell telefonálni a raktárnak, hanem egyszerű értesítéssel lehet jelezni az ott dolgozóknak a legújabb rendelésről. Mind ezzel növelve a cég reakcióidejét, a gyorsabb kiszállítást, valamint további rendelések mielőbbi felvételét. Minden ilyen pozitív változás a cég érdekében növelheti a kliensek véleményét, s lojalitását.

## 6. Használati esetek 
-Admin: korlátlan hozzáférése van minden beosztott jogosultságához, megrendelések törlése, módosítása, felhasználó hozzáadása, szerepköreik kiosztása, jelszavak módosítása

-Rendelésfelvevő:  lehetősége van adatokat felvinni a weboldal adatbázisába, kilistázhatja a kiszállított illetve kiszállításra váró megrendelések adatait, módosíthatja azok adatait/státuszát

-Raktáros: módosíthatja a megrendelések státuszát, kilistázhatja a leadott, ki nem szállított rendeléseket

-Futár: Az X-edik fázisban lévő csomagokat látja, ő tudja az utolsó fázisba léptetni a csomag állapotát


## 7. Megfeleltetés
Implementáljuk a 3 kért jogosultsági szintet a meghatározott funkciókkal:
		Admin: felhasználók kezelése, teljes felügyelet a rendszer felett
		Rendelésfelvevő: rendelési adatok felvitele az adatbázisba, csomag adatainak módosítása
		Raktáros: a csomag állapotát a munka folyamatának megfelelően lehet módosítani
Az alapértelmezett oldal a bejelentkezési lap lesz, ami után megjelennek a privilégiumoknak megfelelő menüpontok illetve nyomógombok:
	‘Főoldal’, ‘Rendelések’, ‘Rendelésfelvétel’, ‘Hibabejelentés’, ‘Kijelentkezés’ gomb


## 8. Képernyőtervek
![Bejelentkezés](https://i.imgur.com/nlTSODA.png)
![Rendelésfelvétel](https://i.imgur.com/YsD1D9V.png)


## 9. Forgatókönyv
    Raktáros szemszögéből:
Bejelentkezés után a ‘Listázás’ menüpontban láthatóvá válik az előkészítendő csomag és annak jelenlegi állapota. A raktáros elvégzi a megadott munkafolyamatot, majd lehetősége van a csomag állapotát a következőre átváltani. Ez a folyamat addig folytatódik, amíg a csomag a futárhoz nem kerül.
    
    Rendelésfelvevő szemszögéből:
A csomagok állapota mellett lehetősége van egy külön menüpontban új csomagot hozzáadni az adatbázishoz. Az adminnal együtt joga van a csomagok adatait megváltoztatni, valamint a kiszállított csomagokat visszakövetni.


## 10. Fogalomszótár

- Implementálás: Megvalósítás
- Kliens: vásárlók (5. pont)
- Privilégiumok: Felhasználók jogosultsági köre. (7. pont)
- Reszponzív: Az eszköz nagyságától függően igazodik a weboldal megjelenésének méretezése. (2. pont)
