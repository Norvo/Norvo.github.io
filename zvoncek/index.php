<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reštaurácia Zvonček</title>
    <link rel="stylesheet" href="Stylesheets/reset.css">
    <link rel="stylesheet" href="Stylesheets/main.css">
    <link rel="icon" href="Pictures/icon.png">
</head>

<body>
<?php

$arr = json_decode(file_get_contents("text/jsonmenutext.json"), true);
?>
    
    <header>
        <img src="Pictures/harebell-146854_960_720.png" alt="" class="logo">
        <div class="topnav" id="myTopnav">
                <a href="#domov">Domov</a>
                <a href="#menu">Denné menu</a>
                <a href="#ponuka">Ponuka</a>
                <a href="#akcie">Akcie</a>
                <a href="#kontakt">Kontakt</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </header>

    <main>
        <section id="domov">
            <img class="mainlogo" src="Pictures/LogoPNG.png" alt="Main Logo">
            <h2>Chutné jedlá a nápoje, oslavy a posedenia.</h2>
            <p>Sme novootvorená reštaurácia v Spišskej Teplici pri meste Poprad. Nájdete u nás chutné jedlá, pizzu a nápoje alebo u nás môžete zažiť nezabudnuteľné oslavy a posedenia. Tešíme sa na Vás! :)</p>
        </section>
    
        <section class="dennemenu" id="menu">
        <h2>Denné menu</h2>
        <div class="container">
            <div class="header">
                <h3 id="tyzden"><?php echo $arr["tyzden"]?></h3>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <td class="day">Pondelok <span><?php echo $arr["mondate"]?></span></td>
                    </tr>
            
                    <tr>
                        <td><span class="soup">Polievka: </span><span><?php echo $arr["monsoup"]?></span></td>
                        <td><?php echo $arr["monsoupalergens"]?></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["monfood1"]?></td>
                        <td><?php echo $arr["monfood1alergens"]?></td>
                        <td><?php echo $arr["monfood1price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["monfood2"]?></td>
                        <td><?php echo $arr["monfood2alergens"]?></td>
                        <td><?php echo $arr["monfood2price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["monfood3"]?></td>
                        <td><?php echo $arr["monfood3alergens"]?></td>
                        <td><?php echo $arr["monfood3price"]?></td>
                    </tr>
            
                    <tr>
                    <td><?php echo $arr["monfood4"]?></td>
                        <td><?php echo $arr["monfood4alergens"]?></td>
                        <td><?php echo $arr["monfood4price"]?></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td class="day">Utorok <span><?php echo $arr["tuedate"]?></span></td>
                    </tr>
            
                    <tr>
                        <td><span class="soup">Polievka: </span><span><?php echo $arr["tuesoup"]?></span></td>
                        <td><?php echo $arr["tuesoupalergens"]?></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["tuefood1"]?></td>
                        <td><?php echo $arr["tuefood1alergens"]?></td>
                        <td><?php echo $arr["tuefood1price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["tuefood2"]?></td>
                        <td><?php echo $arr["tuefood2alergens"]?></td>
                        <td><?php echo $arr["tuefood2price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["tuefood3"]?></td>
                        <td><?php echo $arr["tuefood3alergens"]?></td>
                        <td><?php echo $arr["tuefood3price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["tuefood4"]?></td>
                        <td><?php echo $arr["tuefood4alergens"]?></td>
                        <td><?php echo $arr["tuefood4price"]?></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td class="day">Streda <span><?php echo $arr["weddate"]?></span></td>
                    </tr>
            
                    <tr>
                        <td><span class="soup">Polievka: </span><?php $arr["wedsoup"]?></td>
                        <td><?php echo $arr["wedsoupalergens"]?></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["wedfood1"]?></td>
                        <td><?php echo $arr["wedfood1alergens"]?></td>
                        <td><?php echo $arr["wedfood1price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["wedfood2"]?></td>
                        <td><?php echo $arr["wedfood2alergens"]?></td>
                        <td><?php echo $arr["wedfood2price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["wedfood3"]?></td>
                        <td><?php echo $arr["wedfood3alergens"]?></td>
                        <td><?php echo $arr["wedfood3price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["wedfood4"]?></td>
                        <td><?php echo $arr["wedfood4alergens"]?></td>
                        <td><?php echo $arr["wedfood4price"]?></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td class="day">Štvrtok <span><?php echo $arr["thudate"]?></span></td>
                    </tr>
            
                    <tr>
                        <td><span class="soup">Polievka: </span><?php echo $arr["thusoup"] ?></td>
                        <td><?php echo $arr["thusoupalergens"] ?></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["thufood1"]?></td>
                        <td><?php echo $arr["thufood1alergens"]?></td>
                        <td><?php echo $arr["thufood1price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["thufood2"]?></td>
                        <td><?php echo $arr["thufood2alergens"]?></td>
                        <td><?php echo $arr["thufood2price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["thufood3"]?></td>
                        <td><?php echo $arr["thufood3alergens"]?></td>
                        <td><?php echo $arr["thufood3price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["thufood4"]?></td>
                        <td><?php echo $arr["thufood4alergens"]?></td>
                        <td><?php echo $arr["thufood4price"]?></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td class="day">Piatok <span><?php echo $arr["fridate"]?></span></td>
                    </tr>
            
                    <tr>
                        <td><span class="soup">Polievka: </span><?php echo $arr["frisoup"] ?></td>
                        <td><?php echo $arr["frisoupalergens"] ?></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["frifood1"]?></td>
                        <td><?php echo $arr["frifood1alergens"]?></td>
                        <td><?php echo $arr["frifood1price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["frifood2"]?></td>
                        <td><?php echo $arr["frifood2alergens"]?></td>
                        <td><?php echo $arr["frifood2price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["frifood3"]?></td>
                        <td><?php echo $arr["frifood3alergens"]?></td>
                        <td><?php echo $arr["frifood3price"]?></td>
                    </tr>
            
                    <tr>
                        <td><?php echo $arr["frifood4"]?></td>
                        <td><?php echo $arr["frifood4alergens"]?></td>
                        <td><?php echo $arr["frifood4price"]?></td>
                    </tr>
                </table>
                
                <article class="alergy">
                    <p>ALERGÉNY: 1-Obilniny obsahujúce lepok, 2-Kôrovce, 3-Vajcia, 4-Ryby, 5-Arašídy, 6-Sója, 7-Mlieko, 8-Orechy, 9-Zelér, 10-Horčica, 11-Sezam, 12-Oxid siričitý a siričitany, 13-Vlčí bôb, 14-Mäkkýše</p>
                </article>
            </div>
        </div>
        </section>

        <section id="ponuka">
            <h2>Ponuka</h2>
            <div class="ponuka">
                <div class="ponukaheader">
                    <button id="pizzabutton" onclick="showDivs(1)">Pizza</button>
                    <button id="pochutinybutton" onclick="showDivs(2)">Pochutiny</button>
                    <button id="jedlobutton" onclick="showDivs(3)">Jedlá</button>
                    <button id="prilohybutton" onclick="showDivs(4)">Prílohy</button>
                </div>
                <div class="ponukaheaderunderline"></div>
                <div class="ponukamain">
                    <div id="pizza" class="foodmenu">
                        <h2>Pizza</h2>
                        <div>
                            <div class="pizza">
                                <h4>430g <span class="pizzaname">Margherita</span> (1,3,7)</h4>
                                <p>tomato salsa, syr mozzarella</p>
                                <p class="cena">5,10€</p>
                            </div>
                            <div class="pizza">
                                <h4>450g <span class="pizzaname">Šunková</span> (1,3,7)</h4>
                                <p>tomato salsa, šunka, syr mozzarella</p>
                                <p class="cena">5,60€</p>
                            </div>
                            <div class="pizza">
                                <h4>480g <span class="pizzaname">Kukuricová</span> (1,3,7)</h4>
                                <p>tomato salsa, šunka, kukurica, syr mozzarella</p>
                                <p class="cena">5,90€</p>
                            </div>
                            <div class="pizza">
                                <h4>450g <span class="pizzaname">Šampiňónová</span> (1,3,7)</h4>
                                <p>tomato salsa, šunka, šampiňóny, syr mozzarella</p>
                                <p class="cena">5,90€</p>
                            </div>
                            <div class="pizza">
                                <h4>500g <span class="pizzaname">Diablo</span> (1,3,7)</h4>
                                <p>tomato salsa, šunka, štipľavá salsa, baranie rohy, feferóny, cibuľa, syr mozzarella</p>
                                <p class="cena">6,20€</p>
                            </div>
                            <div class="pizza">
                                <h4>500g <span class="pizzaname">Calabria</span> (1,3,7)</h4>
                                <p>tomato salsa, šunka, šampiňóny, cibuľa, slanina, niva, olivy, syr mozzarella</p>
                                <p class="cena">6,50€</p>
                            </div>
                            <div class="pizza">
                                <h4>500g <span class="pizzaname">Hawai</span> (1,3,7)</h4>
                                <p>tomato salsa, šunka, ananás, syr mozzarella</p>
                                <p class="cena">6,00€</p>
                            </div>
                            <div class="pizza">
                                <h4>500g <span class="pizzaname">Quattro Formaggi</span> (1,3,7)</h4>
                                <p>tomato salsa, niva, encián, parmezán, syr mozzarella</p>
                                <p class="cena">6,50€</p>
                            </div>
                            <div class="pizza">
                                <h4>500g <span class="pizzaname">Vegetariána</span> (1,3,7)</h4>
                                <p>tomato salsa, paradajka, brokolica, kukurica, šampiňóny, syr mozzarella</p>
                                <p class="cena">6,10€</p>
                            </div>
                            <div class="pizza">
                                <h4>550g <span class="pizzaname">Gazda</span> (1,3,7)</h4>
                                <p>tomato salsa, saláma, slanina, klobása, cibuľa, baranie rohy, syr mozzarella</p>
                                <p class="cena">6,50€</p>
                            </div>
                            <div class="pizza">
                                <h4>530g <span class="pizzaname">Tex-mex</span> (1,3,7)</h4>
                                <p>tomato salsa, saláma, fazuľa, kukurica, cesnak, chilli papričky, syr mozzarella</p>
                                <p class="cena">6,50€</p>
                            </div>
                            <div class="pizza">
                                <h4>550g <span class="pizzaname">Pizza La Teplica</span> (1,3,7)</h4>
                                <p>tomato salsa, kuracie mäso, sušené paradajky, niva, šampiňóny, syr mozzarella</p>
                                <p class="cena">6,60€</p>
                            </div>
                            <div class="pizza">
                                <h4>300g <span class="pizzaname">Štangle syrové</span> (1,3,7)</h4>
                                <p class="cena">3,80€</p>
                            </div>
                            <div class="pizza">
                                <h4>300g <span class="pizzaname">Štangle Slaninové</span> (1,3,7)</h4>
                                <p>slanina, cesnak, syr</p>
                                <p class="cena">4,00€</p>
                            </div>
                        </div>
                    </div>
                    <div id="pochutiny" class="foodmenu">
                        <h2>Pochutiny</h2>
                        <table class="dve">
                            <tr>
                                <td>45g</td>
                                <td>Tyčinky Dru</td>
                                <td>0,60€</td>
                            </tr>
                            <tr>
                                <td>100g</td>
                                <td>Arašidy</td>
                                <td>1,00€</td>
                            </tr>
                            <tr>
                                <td>65g</td>
                                <td>Slovakia chips</td>
                                <td>1,50€</td>
                            </tr>
                        </table>
                        <table class="dve dva">
                            <tr>
                                <td>50g</td>
                                <td>Horalka</td>
                                <td>0,80€</td>
                            </tr>
                            <tr>
                                <td>180g</td>
                                <td>Študentská pečať</td>
                                <td>2,00€</td>
                            </tr>
                            <tr>
                                <td>100g</td>
                                <td>Milka mliečna</td>
                                <td>2,00€</td>
                            </tr>
                        </table>
                        <table id="jedna">
                            <tr>
                                <td>45g</td>
                                <td>Tyčinky Dru</td>
                                <td>0,60€</td>
                            </tr>
                            <tr>
                                <td>100g</td>
                                <td>Arašidy</td>
                                <td>1,00€</td>
                            </tr>
                            <tr>
                                <td>65g</td>
                                <td>Slovakia chips</td>
                                <td>1,50€</td>
                            </tr>
                            <tr>
                                <td>50g</td>
                                <td>Horalka</td>
                                <td>0,80€</td>
                            </tr>
                            <tr>
                                <td>180g</td>
                                <td>Študentská pečať</td>
                                <td>2,00€</td>
                            </tr>
                            <tr>
                                <td>100g</td>
                                <td>Milka mliečna</td>
                                <td>2,00€</td>
                            </tr>
                        </table>

                    </div>
                    <div id="jedlo" class="foodmenu">
                        <h2>Mäsité a bezmäsité jedlá</h2>
                        <table>
                            <tr>
                                <td>150g</td>
                                <td class="foodname">Vyprážané kuracie prsia, varené zemiaky s maslom</td>
                                <td>(1,3,7)</td>
                                <td>5,50€</td>
                            </tr>
                            <tr>
                                <td>125g</td>
                                <td class="foodname">Vyprážaný syr, zemiakové hranolčeky, tatárska omáčka</td>
                                <td>(1,3,6,7)</td>
                                <td>5,50€</td>
                            </tr>
                            <tr class="descripted">
                                <td>200g</td>
                                <td class="foodname">Hovädzí Burgee s chedarom</td>
                                <td>(1,3,6,7,11)</td>
                                <td>6,90€</td>
                            </tr>
                            <tr class="description">
                                <td></td>
                                <td>BBQ omáčka, cibuľa, ľadový šalát, paradajka, kyslá uhorka, kečup</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="descripted">
                                <td>150g</td>
                                <td class="foodname">HOT-DOG MANHATTAN</td>
                                <td>(1,3,7,10)</td>
                                <td>5,20€</td>
                            </tr>
                            <tr class="description">
                                <td></td>
                                <td>150g hovädzia klobáska, 120g bageta, fritovaná cibuľa, domáca horčica, Coleslaw šalát, slanina, syr, kečup</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="descripted">
                                <td>90g</td>
                                <td class="foodname">HOT-DOG</td>
                                <td>(1,3,7)</td>
                                <td>2,00€</td>
                            </tr>
                            <tr class="description">
                                <td></td>
                                <td>50g párok, 60g francúzky rožok, kečup / horčica</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>142g</td>
                                <td class="foodname">Fish & Chips s tatárskou omáčkou</td>
                                <td>(1,3,7)</td>
                                <td>5,30€</td>
                            </tr>
                            <tr class="descripted">
                                <td>350g</td>
                                <td class="foodname">Penne</td>
                                <td>(1,3,7)</td>
                                <td>4,90€</td>
                            </tr>
                            <tr class="description">
                                <td></td>
                                <td>cestoviny s kuracím mäsom, brokolicou, cesnakom a smotanou</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="descripted">
                                <td>350g</td>
                                <td class="foodname">Cézar šalát s kuracím mäsom, pizza buchtičky</td>
                                <td>(1,3,4,7)</td>
                                <td>5,50€</td>
                            </tr>
                            <tr class="description">
                                <td></td>
                                <td>paradajky, ľadový šalát, syr parmesan, kuracie mäso</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="descripted">
                                <td>300g</td>
                                <td class="foodname">Šalát s nivou a jogurtovým dresingom</td>
                                <td>(7)</td>
                                <td>4,60€</td>
                            </tr>
                            <tr class="description">
                                <td></td>
                                <td>paradajky, uhorka, paprika, cibuľa červená, olivy, niva</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>120g</td>
                                <td class="foodname">Vyprážané kuracie nugety, zemiakové hranolčeky, kečup</td>
                                <td>(1,3,7)</td>
                                <td>4,50€</td>
                            </tr>
                            <tr>
                                <td>220g</td>
                                <td class="foodname">Palacinky s nutellou / džemom a šľahačkou</td>
                                <td>(1,3,7)</td>
                                <td>3,20€</td>
                            </tr>
                            <tr>
                                <td>200g</td>
                                <td class="foodname">Varená kukurica</td>
                                <td></td>
                                <td>2,80€</td>
                            </tr>
                        </table>
                    </div>
                    <div id="prilohy" class="foodmenu">
                        <h2>Prílohy</h2>
                        <table>
                            <tr>
                                <td>150g</td>
                                <td>Malý miešaný šalát (paradajka, paprika, uhorka, olivová olej)</td>
                                <td>2,20€</td>
                            </tr>
                            <tr>
                                <td>200g</td>
                                <td>Batatové hranolčeky</td>
                                <td>2,50€</td>
                            </tr>
                            <tr>
                                <td>200g</td>
                                <td>Zemiakové hranolčeky</td>
                                <td>1,50€</td>
                            </tr>
                            <tr>
                                <td>200g</td>
                                <td>Opekané zemiaky</td>
                                <td>1,50€</td>
                            </tr>
                            <tr>
                                <td>70g</td>
                                <td>Tatárksa omáčka / Kečup / Horčica / Baranie rohy / Feferóny / Kyslá uhorka</td>
                                <td>0,50€</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section id="akcie">
            <div>
                <h2>Akcie</h2>
                <p>Štýl reštaurácie umožňuje organizovať rôzne gastronomické podujatia, ako aj rodinné oslavy, firemné večierky ale i pracovné obedy, večere, oslavy, krstiny, prijímania a iné. Pripravíme pre vás akcie s kapacitou do 30 osôb. Tešíme sa na vašu návštevu a dobrú chuť vám praje Reštaurácia Zvonček.</p>
            </div>
        </section>
    </main>
    <footer id="kontakt">
        <div class="obal">
            <div class="celkovehodiny">
                <div class="hodiny">
                    <h2>Otváracie hodiny</h2>
                    <h3>Po-Pia</h3>
                    <p>11:00 - 14:00</p>
                    <p>17:00 - 20:00</p>
                    <h3>So-Ne</h3>
                    <p>Zatvorené</p>
                </div>
                <div class="objednavky">
                    <h2>Príjem objednávok</h2>
                    <h3>Po-Pia</h3>
                    <p>11:00 - 13:40</p>
                    <p>17:00 - 19:40</p>
                    <h3>So-Ne</h3>
                    <p>Zatvorené</p>
                </div>
            </div>
            <div class="kontakt">
                <h2>Kontakt</h2>
                <p>Obrancov mieru 454/3, 059 34 Spišská Teplica</p>
                <p>0917 804 163</p>
                <p>teplickyzvoncek@gmail.com</p>
            </div>
        </div>
    </footer>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav")
            {
              x.className += " responsive";
            }
            else
            {
              x.className = "topnav";
            }
            }

            var a = 1;
            showDivs(a);

            function showDivs(n) {
                n = n-1
                x = document.getElementsByClassName("foodmenu");
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
                  x[n].style.display = "block";  
                }
            }
    </script>

</body>
</html>