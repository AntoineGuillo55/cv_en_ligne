<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Header -->

    <div id="top-of-website">

        <header class="wrapper logo-nav">
            <img id="logo" src="images/logo.svg" alt="logo antoine guillo">
            <nav>
                <ul>
                    <li><a href="#intro">Introduction</a></li>
                    <li><a href="#competences">Compétences</a></li>
                    <li><a href="#cursus-experience">formation &#38; experience</a></li>
                    <li><a href="#lien_portfolio">portfolio</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </nav>
        </header>
        <h1><span class="float-left">web developer</span><span class="float-right">web developer</span> <span id="cv">curriculum vitae</span></h1>
        <div class="wrapper pictos-header"> 
            <a href="https://www.facebook.com/antoine.guillo.9"><img src="images/facebook.svg" alt="picto facebook" class="pictos-rs"></a>
            <a href="https://www.instagram.com/antoineguillo5/"><img src="images/instagram.svg" alt="picto instagram" class="pictos-rs"></a>
            <a href="https://www.linkedin.com/in/antoine-guillo-2563485b/"><img src="images/linkedin.svg" alt="picto linkedin" class="pictos-rs"> </a>
        </div>

    </div>
    <main>
        <section id="intro">
            <h2>introduction.</h2>
            <p>Je m'appelle Antoine, j'ai 29 ans, je suis né à Saint Malo et je vis à Rennes avec ma compagne Julie. Après 5 ans à travailler dans la banque en tant que conseiller financier, j'ai décidé de me reconvertir pour devenir développeur web, et je suis actuellement à la recherche d'un stage de 2 mois pour valider ma formation qui devra débuter entre le 1er Septembre et le 28 Octobre 2022.
            </p>
            <div class="skills">
                <div class="skill-barre">
                    <strong>FR</strong>
                    <div class="empty-barre">
                        <div class="progress-barre fr"></div>
                    </div>
                    <em>100%</em>
                </div>
                <div class="skill-barre">
                    <strong>ANG</strong>
                    <div class="empty-barre">
                        <div class="progress-barre en"></div>
                    </div>
                    <em>70%</em>
                </div>
                <div class="skill-barre">
                    <strong>ESP</strong>
                    <div class="empty-barre">
                        <div class="progress-barre sp"></div>
                    </div>
                    <em>30%</em>
                </div>
            </div>
        </section>

        <section id="competences">
            <div id="overlay"></div>
            <h2>compétences.</h2>
            <div class="wrapper competence">
                <article>
                    <h3>TECHNOS</h3>
                        <ul>
                            <li >HTML : En cours d'acquisition</li>
                            <li>CSS : En cours d'acquisition</li>
                            <li>PHP : En cours d'acquisition</li>
                            <li>JS : En cours d'acquisition</li>
                        </ul>
                </article>
                <article>
                    <h3>Soft Skills</h3>
                    <ul>
                        <li>Vente/Négociation</li>
                        <li>Présentation orale</li>
                        <li>Vulgarisation de produits techniques</li>
                        <li>Suivi clientèle</li>
                    </ul>
                </article>
                <article>
                    <h3>Autres</h3>
                    <ul>
                        <li>Permis B</li>
                        <li>Maîtrise pack office</li>
                    </ul>
                </article>
                <article>
                    <h3>Loisirs</h3>
                    <ul>
                        <li>Cuisine</li>
                        <li>Voyage</li>
                        <li>Piano</li>
                        <li>Randonnée</li>
                    </ul>
                </article>
            </div>
        </section>

        <section id="cursus-experience">
            <div class="cursus-left">
                <div id="year-selector">
                    <img id="left-selector" src="images/Polygone 1.svg" alt="petite flèche vers la gauche">
                    <span id="years"></span>
                    <img id="right-selector" src="images/Polygone 2.svg" alt="petite flèche vers la droite">
                </div>
            </div>
            <div class="cursus-right">
                <article id="article_cursus" >
                    <div>
                        <h2>formation.</h2>
                        <img src="images/Groupe 2.svg" alt="pictogramme">
                    </div>
                    <h4>Ecole O'clock - Formation développeur web spécialisation React</h4>
                    <p>Formation en téléprésentiel avec 3 mois de pour acquérir les bases nécessaire à l'exercice du métier de développeur web et 1 mois de spécialisation sur une technologie particulière (React pour ma part).</p>
                </article>
                <article id="article_experience">
                    <div>
                        <h2>experience.</h2>
                        <img src="images/Groupe 2.svg" alt="pictorgramme">
                    </div>
                    <h4>Stage de fin d'étude chez... Vous peut-être ? </h4>
                    <p>Je cherche un stage pour valider et conforter mes connaissances acquises lors de ma formation à l'école O'clock</p>
                </article>
            </div>
        </section>

        <section id="contact">
            <div class="contact-top" >
                <img src="images/Tracé 5.svg" alt="succession de 0 et de 1">
            </div>
            <div class="contact-bottom">
                <p>
                    Portable : 06.12.40.56.45<br>
                    Mail : <a href="mailto:guillo.antoine93@gmail.com">guillo.antoine93@gmail.com</a><br>
                    Adresse postale : 12, bd Oscar Leroux <br>
                    35200 Rennes
                </p>
                <span id="contact_me">contactez moi</span>
            </div>
            <img id="bonhomme" src="images/2jakob-owens-FmlZfeIuntM-unsplash.png" alt="personnage">
            <img id="black-line" src="images/Tracé 2.svg" alt="ligne noire">
            <img id="white-line" src="images/Tracé 3.svg" alt="ligne blanche">
        </section>
    </main>

    <!-- Footer -->
    
    <footer>

        <a href="chat.html">CHAT<img id="chat" src="images/comment-more.png" alt="bulle de message"></a>
        <a id="lien_portfolio" href="portfolio.html">Portfolio projets</a>
        <div>
            <a href="https://www.facebook.com/antoine.guillo.9"><img src="images/facebook.svg" alt="picto facebook"></a>
            <a href="https://www.instagram.com/antoineguillo5/"><img src="images/instagram.svg" alt="picto instagram"></a>
            <a href="https://www.linkedin.com/in/antoine-guillo-2563485b/"><img src="images/linkedin.svg" alt="picto linkedin"></a>
        </div>

    </footer>

    <script src="js/script.js"></script>

</body>
</html>