<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require_once("../Tools/header.php") ?>
    <section id="accueil" class="section accueil">
        <div class="container">
            <h2>Hello there !</h2>
            <p>Here are some points on me :</p>
        </div>
    </section>

    <section id="formation" class="section formation"> <!-- Nouvelle section -->
        <div class="container">
            <h2>Training and Certifications</h2>
            <h5>I am currently in a bachelor's degree in Web dev security and gaming.</h5>
            <h5>I obtained my BAC during the 2022/2023 session.</h5>
            <!-- Formation continue et certifications -->
        </div>
    </section>

    <section id="projets-personnels" class="section projets-personnels"> <!-- Nouvelle section -->
        <div class="container">
            <h2>Personal projects</h2>
            <video controls src="../vidéo/Déplacement.mp4">Ah pas de vidéo :( marche pas :(</video>
        </div>
    </section>

    <section id="competences" class="section competences">
        <div class="container">
            <h2>Skills</h2>
            <ul>
                <li>HTML5</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>C++</li>
                <li>C#</li>
                <li>Python</li>
                <li>Archi linux</li>
                <li>Scrum</li>
            </ul>
        </div>
    </section>

    <section id="langues" class="section competences"> <!-- Nouvelle section -->
        <div class="container">
            <h2>Languages</h2>
            <ul>
                <li>Franch : native</li>
                <li>English : B2</li>
            </ul>
            <!-- Langues maîtrisées -->
        </div>
    </section>

    <section id="experience" class="section experience">
        <div class="container">
            <h2>XP</h2>
            <p>No profetional XP</p>
        </div>
    </section>








    <section id="portfolio" class="section portfolio">
        <div class="container">
            <h2>Portfolio</h2>
            <!-- Une div "projet" par semaine de projet réalisé -->
            <div class="projet">
                <img src="../Image/Projet_web.jpg" alt="Projet 1">
                <div class="overlay">
                    <h3>Projet Web</h3>
                    <p>L'interet du projet étais à la fois de découvrir le code pour certain
                        et de créé un site à l'image du codeur. l'important étais surtout basé
                        sur le front-end que le back-end... en tout cas, au début. L'HTML et le CSS
                        étais sur 1 semaine, le SQL idem, PHP idem, et JavaScript idem. Donc un totale
                        de 4 semaine pour se premier projet.
                    </p>
                </div>
            </div>

            <div class="projet">
                <img src="../Image/Projet_python.jpg" alt="Projet 2">
                <div class="overlay">
                    <h3>Projet Python</h3>
                    <p>Qui dit seconds projet, dit seconds repository GIT... Point important à savoir :
                        Nous n'avons pas été entrainer à utiliser GIT. Nous avons donc découvert les quelques problèmes
                        comme les fameux "conflicts". Une autre équipe à été appelé "The Conflict Team".
                        L'intéret de cette semaine étais de découvrir la virtuosité du language Python grâce à sont utilisation
                        dans un filtre d'images.
                        <br>
                        <br>
                        Rien de plus à rajouter.
                    </p>
                </div>
            </div>

            <div class="projet">
                <img src="../Image/Projet_gaming.jpg" alt="Projet 3">
                <div class="overlay">
                    <h3>Projet Gaming</h3>
                    <p>Semaine Gaming !!!!!! YYOOOOUUUUUHHHHHOOOOUUUUU !! J'adore le gaming : tellement de possibilité,
                        de façon de faire les choses... Miam. L'intéret de cette semaine étais de découvrir les bases du gaming
                        et les micro bases de la POO. Les pointeur, les objects, les acteurs... Tous pleins de bonne choses quoi.
                        <br>
                        <br>
                        J'aurais d'autre chose à rajouter mais ça ne rentrera pas dans la case.
                    </p>
                </div>
            </div>

            <div class="projet">
                <img src="../Image/Projet_java_1.jpg" alt="Projet 4">
                <div class="overlay">
                    <h3>Projet Java 1</h3>
                    <p>Encore du gaming ? MAIS C'EST GÉNIAL !!!! Eh oui. Semaine POO Java (Donc pas spécielement gaming) pendant
                        laquelle nous devions réaliser un jeux style tour par tour ( à la FFVII ) en interface
                        en utilisant les principes de bases de la POO java : Polymorphisme, Surcharge, Classe parents, interface.
                    </p>
                </div>
            </div>

            <div class="projet">
                <img src="../Image/Projet_Ecommerce.jpg" alt="Projet 5">
                <div class="overlay">
                    <h3>Projet PHP</h3>
                    <p>Ahlalalala... Le PHP... au première abords, on peut se dire : "mon dieu que le language est dure !" puis après avoir mieux
                        regarder la bête que c'est, on se dit : "c'étais pas si compliqué que ça au final".
                        C'est exactement se que j'ai vécu ! Et pourtant je me suis trés bien sortie.
                        <br>
                        l'intéret de la semaine étais de voir la relation entre un site et une base de donnée (tous 2 sécurisé et correctement créé).
                        <br>
                        <br>
                        PS : Le projet étais décrit par le PO comme étant trés compliqué a réaliser en 3 jours.
                        Pourtant, tou sles groupe avais fini le travail en temps et en heures.
                    </p>
                </div>
            </div>

            <div class="projet">
                <img src="../Image/Projet_java_2.jpg" alt="Projet 6">
                <div class="overlay">
                    <h3>Projet Java 2</h3>
                    <p>L'image ne représente pas du tout se que nous devions faire donc une explication s'impose : nous devions créé un jeux de plateau
                        jouable de 2 à 4 joueur. Quand un joueur se déplace, il a le droit de détruire une case du plateau. Si un joueur est bloqué, il pert.
                        Plutôt simple, non ? Mon groupe et moi même n'avons pas eu de difficulté sur cette semaine ( 12 stories réalisées en 1 jour (l'ensemble du jeux)).
                        C'est pour cela que nous avons tous miser sur les bonus :
                        <br> - Un rick roll réaliser par un colègue est moi même ( et je parle bien de la cover, pas de la feetur).
                        <br> - Des easter egg sur certain pseudo de joueur.
                        <br> - Des bruitage pour chaque action de joueur.
                        <br>
                        <br>
                        Résultat ? Un 20/20 pour l'ensemble du groupe.
                    </p>
                </div>
            </div>
            <!-- Ajoutez plus de projets si nécessaire -->
        </div>
    </section>

    <!--
        <section id="contact" class="section contact">
            <div class="container">
                <h2>Contact</h2>
                <form action="#">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" required></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </section>
        -->

    <div class="image">
        <div class="github">
            <a href="https://github.com/Lucky31001"><img src="../image/github.jpg" alt="Pas de github :("></a>
            <div class="texte_github">
                <p>Lucky31001</p>
            </div>
        </div>
        <div class="linkedin">
            <a href="https://www.linkedin.com/in/kilian-dumaire-4aa8122a0/"><img src="../image/Linkedin.png" alt="Pas de Linkedin :("></a>
            <div class="texte_linkedin">
                <p>Kilian DUMAIRE</p>
            </div>
        </div>
    </div>
    <!--Je rajouterais d'autres image plus tard-->

    <?php require_once("../Tools/footer.php") ?>
</body>

</html>