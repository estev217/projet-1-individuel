<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name='viewport'
        content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
        <title>Bistro Régent Stalingrad Bordeaux</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="favicon.png">
        <!-- adding font --> 
        <link href="https://fonts.googleapis.com/css?family=Butterfly+Kids&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap" rel="stylesheet"> 
    </head>
    <body>
    <!-- START navbar -->

    <?php include("_header.php"); ?>

    <!-- END navbar -->

    <!-- START HOME SECTION -->

    <div class="section_home">
        <p class="subtitle">Le restaurant... Tout simplement !</p>
        <div class="addings">
            <div class="feedbacks">
                
                <p class="feed"><em>Laura 34 ans</em> <br>
                    <b>"J'ai passé un agréable moment en famille.
                    Service rapide et cuisine extra."</b>
                </p>
                <p class="feed"><em>Kévin 31 ans</em> <br>
                    <b>"Bon service, Etchebest a raison...
                    Les frites sont vraiment bonnes !"</b>
                </p>
                <p class="feed"><em>Sabrina 27 ans</em> <br>
                    <b>"Le restaurant est très bien situé.
                    On peut y manger rapidement et c'est très bon!"</b>
                </p>                   
            </div>
            <div class="map">
                <img src="images/carte_france.png" alt="viande d'origine française" class="french-map">
            </div>
        </div>
    </div>

    <!-- END HOME SECTION -->

    <!-- KEVIN HOME SECTION START -->

    <!-- <section class="section1">
        <div>
            <div class="background">
            <img src="https://www.au-cheval-noir.restaurant/wp-content/uploads/2018/12/Restaurant-Au-Cheval-Noir-Herrlisheim_Photos-17.jpg" alt="bistro regent">
                <div class="title">
                       
                    <h2>Bistro régent Bordeaux</h2>
                    <p>un repas de qualité pour des clients de qualité</p>
                    
                </div>
            </div>
        </div>
    </section> -->

    <!-- KEVIN HOME SECTION END -->

    <!-- START SECTION -->

        <section>
            <article id="intro" class="article_intro">
                <h3>Bistro Régent Bordeaux Stalingrad</h3>
                <p>
                    Tous les jours de la semaine, de 12h à 14h et de 19h à 23h, avec ou sans réservation.
                    <br>
                    Une cuisine de bistro authentique et savoureuse qui fait la réputation de nos établissements depuis de nombreuses années.
                </p>
            </article>
        </section>

        <div class="parallax bistro_regent">
            <h2>Qui sommes-nous ?</h2>
        </div>

        <section>
            <article id="who" class="article_even">                
                <div class="div_img">
                    <img src="images/marc_vanhove.jpg" alt="Marc Vanhove">
                </div>
                <div class="div_txt">
                    <h3>Une franchise qui a fait ses preuves</h3>
                    <p>
                        En 2010, Marc Vanhove crée la sauce Charmelcia et ouvre les premiers Bistro Régent
                        <span id="dots_1">...</span>
                        <span id="more_1">sur Bordeaux. Confectionnée à partir d'une multitude d'ingrédients soigneusement sélectionnés, cette sauce se marie parfaitement avec les viandes et poissons proposés par le Bistro, mais aussi avec ses délicieuses frites. Le Chef fait le choix de proposer une cuisine familiale, simple et savoureuse qui fait aujourd'hui la renommée de ses bistros. De grands chefs, tels que le célèbre Philippe Etchebest, recommandent le Bistro Régent.</span>
                        <button class="button_toggle" onclick="toggleOne()" id="btn_1">&#x2193;</button>
                    </p>
                </div>
            </article>
        </section>

        <div class="parallax steak_frites">
            <h2>Notre carte</h2>
        </div>

        <section>
            <article id="menu" class="article_odd">                
                <div class="div_img">
                    <img src="images/viande.jpg" alt="Un bon steak">
                </div>
                <div class="div_txt">
                    <h3>Accessible sans négliger la qualité</h3>
                    <p>
                        Vous recherchez un restaurant à l’ambiance décontractée ? Vous serez séduit par
                        <span id="dots_2">...</span>
                        <span id="more_2">le Bistro Régent®. Au menu, vous découvrirez du cœur de rumsteck grillé, de l’escalope de saumon à la plancha ainsi que du filet de magret de canard. Et les plus gros appétits seront comblés, puisque le restaurant sert des frites allumettes fraîches à volonté dans chaque Bistro Régent®. Pour votre prochain restaurant, optez donc pour un de nos bistros. Ceux-ci vous proposent toujours des plats simples et de qualité.</span>
                        <button class="button_toggle" onclick="toggleTwo()" id="btn_2">&#x2193;</button>
                    </p>
                </div>
            </article>
        </section>

        <div class="parallax bistro_bastide">
            <h2>Où nous retrouver</h2>
        </div>

        <section>
            <article id="where" class="article_even">                
                <div class="div_img div_iframe">
                    <a href="https://goo.gl/maps/xPPuMWaX9wwqfQek8">Nous retrouver sur Google Maps</a>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2000.4669267774718!2d-0.5607678386978208!3d44.84015221886888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f4f40ca93f0770e!2sBistro%20R%C3%A9gent!5e0!3m2!1sfr!2sfr!4v1568625810370!5m2!1sfr!2sfr" width="250" height="250" allowfullscreen=""></iframe>
                </div>
                <div class="div_txt">
                    <h3>Un emplacement facile d'accès</h3>
                    <p>
                        Vous recherchez un restaurant rive droite pour un dîner en amoureux, un déjeuner en famille ou
                        <span id="dots_3">...</span>
                        <span id="more_3">un rendez-vous professionnel ? Notre restaurant situé sur la place Stalingrad, extrêmement bien desservi par les lignes de tramway, saura vous convenir à la perfection.</span>
                        <button class="button_toggle" onclick="toggleThree()" id="btn_3">&#x2193;</button>
                    </p>
                </div>
            </article>
        </section>

        <div class="parallax contact_us">
            <h2>Nous contacter</h2>
        </div>

    <!-- END SECTION -->

    <!-- START form -->

            <form id ="contact" action="/form.php" method="get">
                <label for="name">Nom : </label>
                    <input type="text" name="name" id="name" placeholder="Votre nom">
                <label for="email">Email : </label>
                    <input type="text" name="email" id="email" placeholder="Votre email">
                <label for="object">Objet : </label>
                    <select name="object" id="object">
                        <option value="réservation">Réservation de salle</option>
                        <option value="demande d'information sur les produits">Question sur les produits</option>
                        <option value="question">Question générale</option>
                    </select>
                <label for="message">Message : </label>
                    <textarea name="message" id="message" placeholder="Votre message ici..."></textarea>
                <button type="submit" id="formbutton" onclick=changePlace()>Envoyer</button>
            </form>

        <div class="parallax"></div>

    <!-- END form -->

    <!-- START footer -->

    <?php include("_footer.php"); ?>

    <!-- END footer -->
    <script src="script.js"></script>
    </body>

</html>