<?php
$css_link = './css/style.css';

$page_title = 'Raimond-code';
$page_subTitle = 'Développeur web full-stack';

$logo_link = './assets/Logo.png';
$about_icone = './assets/about_icone.png';
$real_icone = './assets/real_icone.png';
$contact_icone = './assets/contact_icone';

$site_1image = './assets/site2.PNG';
$site_2image = './assets/site1.PNG';
$site_3image = './assets/site3.PNG';
$site_4image = './assets/site4.PNG';

$profil_pic = './assets/IMG_4690.PNG';

$portfolio_Link = './html/portfolio.html';

$Js_link = './Js/app.js';

include './html/header.html';

?>

<div class="header_menu">
    <a href="" class="header_links">Accueil</a>
    <a href="" class="header_links">Contact</a>
</div>

<img src="./assets/r_code_three.png" class="header_img">

<a href="" class="general_btn nav_btn">Naviguer</a>

<p class="para">
Bienvenue sur le portfolio.
<br>
Ici vous trouverez tous mes projets en détails, ok, mais quoi comme détail exactement ?
<br>
Avant de continuer sachez que mes projets sont également disponibles sur <a href=”https://github.com/r-code-explore”>Github.com</a>.
<br>
<br>
Vous trouverez donc :
<br>- Un résumé du déroulement du projet, pourquoi ou pour quel entreprise ce dernier a était fait / réalisé.
<br>- Si j’ai également travaillé sur la maquette ou si j’en disposais déjà d’une.
<br>- Les technos utilisées et pour quelles raisons.

</p>

<style>
    body{
        background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(15,76,89,1) 20%);
    }

    .header_menu{
        display: flex;
        width: 60%;
        max-width: 450px;
        justify-content: space-between;
        position: absolute;
        top: 140px;
        left: 50%;
        transform: translateX(-50%);
    }
    .header_links{
        border: 1px solid white;
        padding: 10px; color: #0F4C59;
        transition: .2s ease-in-out;
        border-radius: 3px;

        box-shadow: -9px 10px 16px -6px rgba(0,0,0,0.75);
        -webkit-box-shadow: -9px 10px 16px -6px rgba(0,0,0,0.75);
        -moz-box-shadow: -9px 10px 16px -6px rgba(0,0,0,0.75);
    }
    .header_links:hover{
        color: white;
        padding: 12px;
        background: #0F4C59;
        transition: .3s ease-in-out;
        border-radius: 5px;
        border: none;

        box-shadow: none;
    }

    .header_img{
        display: block;
        width: 80%;
        max-width: 450px;
        margin: 60px auto;
    }

    .nav_btn{
        display: block;
        text-align: center;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        width: 40%;
        max-width: 240px;
        padding: 10px;
        background: #0F4C59;
        color: white;
        transition: .2s ease-in-out;

        box-shadow: -9px 10px 16px -6px rgba(0,0,0,0.75);
        -webkit-box-shadow: -9px 10px 16px -6px rgba(0,0,0,0.75);
        -moz-box-shadow: -9px 10px 16px -6px rgba(0,0,0,0.75);
    }
    .nav_btn:hover{
        color: #0F4C59;
        background: white;
        padding: 12px;
        transition: .2s ease-in-out;
    }

    .para{
        color: white;
        display: block;
        width: 80%;
        max-width: 650px;
        margin: 40px auto;
    }
    .para a{color: #F2EDD0;}
    .para a:hover{color: skyblue;}

</style>

<?php 

include './html/footer.html';

?>