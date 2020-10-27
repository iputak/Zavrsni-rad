# Zavrsni-rad
Projekt završnog rada na temu "Izrada internet trgovine"

## Cilj
Cilj ovog rada je, koristeći programske jezike, stvoriti funkcionalnu internet trgovinu u kojoj su implementirane komponente virtualne košarice kojom se omogućuje kupovina proizvoda. 

## Strongdor 
"Strongdor" je fiktivni brend stvorena za lakše kreiranje priče i internet stranice.

## O internet trgovini 
Internet trgovina "Strongdor" sastoji se od stranica:
* početna,
* kratke majice,
* duge majice,
* šalice,
* o nama,
* registracija,
* pravila privatnosti,
* prijava,
* košarica,
* naplata,
* uvjeti poslovanja i
* predračun.

### Početna
Na početnoj stranici nalazi se pomična galerija slika (engl. slideshow) s gumbima i strelicama za ručnu promjenu slika. One se automatski izmjenjuju svakih 7 sekundi s određenim tranzicijskim efektima. 

### Galerija proizvoda
Galerija daje uvid u sve bitne informacije o proizvodima. Iz galerije potencijalni kupac može iščitati naziv i cijenu proizvoda te na slici vidjeti njegov izgled. Postoje tri kategorijske galerije proizvoda: kratke majice, duge majice i šalice.

### Kartica proizvoda
Ako je potencijalni posjetitelj zainteresiran za proizvod i želi saznati više o njemu, klikom na sliku otvara se dinamička stranica sa svim detaljnim informacijama. 
S lijeve strane vidljiva je galerija slika na kojoj se nalazi i tablica veličina. 
S desne strane nalazi se poveznica na prethodni izbornik, naziv proizvoda te njegov opis. 
Za određene proizvode postoji mogućnost odabira veličine, odnosno ta mogućnost postoji pri odabiru majica kratkih i dugih rukava. 
Za te i sve ostale artikle nužno je odabrati željenu količinu. 
Na kraju opisnog dijela dolazi cijena te stavljanje u košaricu ako je korisnik prijavljen. 
Većina informacija dohvaća se iz baze podataka.

### Registracija
Pomoću HTML-a i PHP-a stvoren je formular za registraciju korisnika u koji se unose osnovni podatci za registraciju koda. 
Nakon unosa svih potrebnih podataka i pritiskom na pripadajući gumb, ako je zaporka jednaka ponovljenoj zaporci, upisani podatci zapisuju u tablicu “korisnici“. 
U suprotnom će se ispisati odgovarajuća poruka. Nakon uspješne registracije korisnika podatci se upisuju u tablicu “korisnici“ te se omogućuje prijava u sustav internet trgovine.

### Prijava
Nakon uspješne registracije, svaki put kada korisnik pristupi stranici potrebna je prijava u sustav. 
Za prijavu, odnosno kupnju na internet trgovini, potrebno je unijeti adresu elektroničke pošte i zaporku.
Pritiskom na gumb “Prijava” poziva se kod koji provjerava da li su upisani podatci te, ako jesu, provjerava postoje li upisane vrijednosti iz forme u tablici “korisnici“. 
Ako jesu, prijava je izvršena.

### Košarica
Košarica za kupnju pravi razliku između kupovine i naplate. 
U njoj su vidljivi odabrani proizvodi, njihova cijena, količina koja je još uvijek promjenjiva, ukupna cijena za svaki pojedinačni proizvod te mogućnost brisanja neželjenog proizvoda. 
Nakon mogućeg korigiranja proizvoda, suma ukupnih proizvoda se automatski mijenja i prikazuje cijenu koju korisnik treba platiti. 
Košarica nudi još dvije mogućnosti, a to su nastavak kupnje ili odluka za prelazak na postupak naplate. 
Ako je košarica prazna, ona ispisuje odgovarajuću poruka. U toj situaciji korisnik nema mogućnost naplate.

### Naplata
Stranica “naplata“ sastoji se od forme za upis podataka za dostavu i naplatu pošiljke. 
Također postoji mogućnost odabira naplate s pripadajućim opisima. 
Korisnik ima mogućnost pregleda proizvoda dodanih u košaricu s osnovnim podatcima bez mogućnosti korigiranja. 
Nakon prihvaćanja uvjeta poslovanja, moguće je odabrati gumb “Završetak” za izradu predračuna. 
Ako korisnik ne želi završiti kupnju, postoji mogućnost za njezin nastavak.

### Predračun
Završetkom kupovine generira se predračun u pdf obliku, na kojem su sadržani svi osnovni podatci, kako o prodavatelju proizvoda, tako i o kupcu i njegovoj kupnji. 
Podatke nije moguće korigirati, a sam pdf moguće je ispisati ili spremiti na uređaj. 

### Odjava
Korisnik nakon završetka kupovine može nastaviti kupovati ili se odjaviti iz sustava. 
Odjava se odrađuje tako da se u zaglavlju s desne strane klikne na poveznicu “Odjava”.

### O nama
Stranica “O nama” nudi sve osnovne informacije o trgovini. Prikazuje osnovnu ideju te kratko opisuje ponudu i proizvode. 
Na stranici je vidljiva i mapa na kojoj je označeno mjesto sjedišta uz navedenu adresu te broj telefona za kontakt.

### Kontakt
Na stranici kontakt prikazan je formular koji nudi mogućnost slanja poruke emailom. 
Na stranici se također nalaze i poveznice na društvene mreže.
