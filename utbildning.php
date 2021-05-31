<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <link rel="stylesheet" href="style.css"/>
  <title>Utbildning</title>
  <script>
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "data1.php", true);
    xhttp.send();   
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
           // console.log(this.responseText);
            var data = JSON.parse(this.responseText);
            //console.log(data);
            var layout = {
                title: "Antagna 2020", 
                showlegend: false
            };
            Plotly.newPlot('graf1', data, layout);
        }
    };


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);
            var layout= {
                title: "Beräknad efterfrågan och tillgång 2035",
                xaxis:{
                    visible: false,
                }   
            };
            Plotly.newPlot('graf2', data, layout);
        }
    };
xhttp.open("GET", "data2.php", true);
xhttp.send();

function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
};
</script>
</head>
<body>
        <!-- header --> 
    <header>
        <div class="header-background">
            <div id="nav" class="sticky-nav">
                <nav class=" navbar navbar-expand-lg navbar-light bg-white sticky-top" >
                    <div class="container">
                        <a class="navbar-brand" href="utbildning.html">Grupp<span style="color:orange;"> Tio</span> </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" href="#graf1">Antagna 2020</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#graf2">Prognos 2035</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#map">Karta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#bild">Om oss</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#dela">Dela med dig</a>
                                </li>
                            </ul>
                                <button onclick="myFunction()"> Dark mode</button>
                      </div>
                    </div>
                </nav>
                <section class="site-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-md-2 info">
                                <h2 class="center-text">Funderar du på att studera vidare?</h2>
                                <p>Då har du kommit rätt, denna sida är till för att underlätta din sökning.  
                                Här hittar du prognos över framtidsutsikter på arbetsmarknad för olika utbildningsområden. 
                                Nedan finner du även en karta över en sammanställning av universitetskolor och högskolor runt omkring landet.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <div class="wrapper"></div>

     <!-- main --> 
    <main> 
        <div class="container">
            <div class="row">
                <div id = "graf1"  class="col-sm-6"></div>
                <div  class=" col-sm-6">
                    <h2 class="title1">Prognos över antalet antagna till högskolor</h2>
                    <p>Denna prognos beskriver antalet antagna till högskolor och universitet under höstterminen år 2020. 
                    Under dennna period sökte 142 000 personer utan tidigare högskolestudier till utbildningar vid universitet och högskolor. 
                    Det var en ökning med 13 % jämfört med föregående höst när antalet var 126 000 personer. 
                    Prognosen visar en sammanställning av antalet antagna för universitetskolor, högskolor, övr enskilda utbildningsanordnare samt konstnärliga högskolor år 2020. 
                    Källan är tagen från statistiska centralbyrån.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="title2"> Beräknad efterfråga & tillgång på arbetskraft & utbildning år 2035 </h2>
                    <p> Prognosen presenterar framtidsutsikterna för beräknad tillgång och efterfråga på arbetskraft med olika utbildningar. 
                    Fram till år 2035 bedöms efterfrågan och tillgången på eftergymnasialutbildning beräknas öka kraftigt dock inte alltid inom de utbildningar där behovet bedöms bli som störst.
                    De utbildningsdimensioner som beräknas vara störts brist fram till 2035 är flertal lärarkategorier samt sjukvården och äldreomsorgen.
                    Inom utbildningsområdet lant- och skogsbruk samt djursjukvård beräknas efterfrågan och tillgången öka på personer med eftergymnasialutbildning.
                    För utbildningsgrupper inom samhällsvetenskapliga områden riskerar däremot tillgången på sikt bli större än efterfrågan år 2035. 
                    Prognosen visar att inom utbildningsområdet naturvetenskap, data samt matematik beräknas den totala tillgången på eftergymnasial utbildade utvecklas starkare än efterfrågan under prognosperioden.
                    Källan är tagen från statistiska centralbyrån. 
                    </p>
                </div>
                    <div id = "graf2"  class="col-sm-6"></div>
            </div>
        </div>
        <div class="wrapper"></div>
        <div class="container">
            <div class="row">
                <div id = "map" class="col-sm-6"></div>
                <div class=" col-sm-6">
                    <h2 class="title3"> Karta över universitet & högsskolor inom Sverige</h2>
                    <p id="info"> Denna karta visar dig en översikt över 27 styckna universistetskolor och högskolor som finns runt omkring landet. 
                    Genom att klicka på pilarna tas du till universitetskolornas hemisda för mer utförlig information. 
                    Här kan du finna lärosätenas forskning, utbildning samt institution.
                    Kartan inkluderar även konstnärliga högskolor samt övr.enskilda utbildningsanordnare. </p>
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row">
                <div class=" col-sm-6">
                    <h1 class="title4" > Om oss </h1> 
                    <p> Vi är två studenter under andra året som läser en civilingenjörsutbildning med inriktning industriell ekonomi med fokus inom datavetenskap.
                    Vårt syfte med denna webbsida är att hjälpa dig som är intresserade över att börja studera vidare antingen på högskola eller universitet.
                    Vår hopp & önskan är att denna webbsida kan underlätta sökningsområdet för dig som är intresserad över att läsa vidare.</p>  
                    <p> Om ni har fundering, vänligen kontakta oss.<p>
                    <a class="nav-link" href= "mailto:banchiamlak05@hotmail.com">banchiamlak05@hotmail.com</a>
                    <a class="nav-link" href= "mailto:mimmi.akilas@gmail.com">mimmi.akilas@gmail.com</a>
                </div>
                <div class="col-sm-6">
                    <img id ="bild" src= "uni.jpg" alt="mittuniversitet" >
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row">
                <div id="dela" class="col-sm-12">
                    <h1>Dela med dig av din erfarenheter</h1> 
                    <form method ="post" action ="input.php">
                        <p><br>
                        Namn<br><input type="text" name="name" /> <br><br>
                        Meddelande<br><textarea name="post" ></textarea> <br><br>
                        <input class ="input" type="submit" name="Skapa" value="Dela"/>
                        </p>
                        </form>
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row">
                
                <?php
                include 'select.php';
                ?>
            </div>
        </div>
    </main>
    
<!-- footer --> 
        <div class="col-12">
            <hr class="light">  
            <h5 class="text-center ">&copy; Banchimiriam.com</h5>
        </div>

    <script src="karta.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtxqP_w9x09G9A5t2sA6XKx7p8L7H9tjo&callback=initMap"></script> 
  
</body>
</html>