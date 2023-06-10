<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fredoka+One&family=PT+Sans+Caption&display=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">  
    <title>Jopa Pet Sitter</title>
</head>

<body>
    <header>
        <h1>Jopa Pet Sitter</h1>
        <p>Dobro došli na naš univerzalni kalkulator cijena za čuvanje životinja! </p>
        <p> Cijena se određuje na temelju broja dana i vrste usluge koju odaberete.  </p> 
        <p> Bez obzira na to da li se radi o psu, mački ili nekoj drugoj životinji, jednostavno unesite potrebne podatke i naš kalkulator će vam pružiti procijenjenu, pomažući vam da efikasno planirate i rasporedite svoj budžet. </p> 
    </header>

    <main>
      <p class="question">Broj kućni ljubimaca?</p>
      <div class="row-zero">
                <img class="people people_img" src="assets/logo.png" alt="">
                <p>Broj kućni ljubimaca</p>
                <div class="row-input">
                <button onclick="decrement('broj_ljubimaca')" class="btn-decrement">-</button>
                <input type="number" name="broj_ljubimaca" id="broj_ljubimaca" min="1" placeholder="1">
                <button onclick="increment('broj_ljubimaca')" class="btn-increment">+</button>
                </div>
            </div>
            <p class="question">Koliko puta želite uslugu?</p>

        <div id="row-one" class="guests">
            <div class="ad">
            <img class="people" src="assets/obilazenje.jpg" alt="">
                <p>Obilaženje - <span id="obilazenje_price">10</span>€</p>
                <button onclick="decrement('obilazenje')" class="btn-decrement">-</button>
                <input type="number" name="obilazenje" id="obilazenje" min="0" placeholder="0">
                <button onclick="increment('obilazenje')" class="btn-increment">+</button>
            </div>
            
            <div class="ki">
            <img class="people" src="assets/setanje.png" alt="">
                <p>Šetanje  - <span id="setanje_price">12</span>€</p>
                <button onclick="decrement('setanje')" class="btn-decrement">-</button>
                <input type="number" name="setanje" id="setanje" min="0" placeholder="0">
                <button onclick="increment('setanje')" class="btn-increment">+</button>
            </div>
        </div>

        <div id="row-two" class="guests">
            <div class="ad">
            <img class="people" src="assets/cuvanje.png" alt="">
                <p>Čuvanje  - <span id="cuvanje_price">15</span>€</p>
                <button onclick="decrement('cuvanje')" class="btn-decrement">-</button>
                <input type="number" name="cuvanje" id="cuvanje" min="0" placeholder="0">
                <button onclick="increment('cuvanje')" class="btn-increment">+</button>
            </div>

            <div class="ki">
            <img class="people" src="assets/nocenje.png" alt="">
                <p>Noćenje  - <span id="nocenje_price">5</span>€</p>
                <button onclick="decrement('nocenje')" class="btn-decrement">-</button>
                <input type="number" name="nocenje" id="nocenje" min="0" placeholder="0">
                <button onclick="increment('nocenje')" class="btn-increment">+</button>
            </div>
        </div>
    
     
        <p class="question">Ova cijena je okvirna. Sve cijene i usluge su prilagodljive potrebama vašeg ljubimca</p>
        

        <div class="cijena-row">
            <p id="cijena_p">Ukupna cijena:<span id="cijena"> 0 </span> €</p>
        </div>


        <footer id="credits">
            Sva prava sadržava © Jopa pet sitter
        </footer>
    </main>

    <script src="script.js"></script>
</body>
</html>