<?php
$css_link = './css/style.css';

$logo_link = './assets/Logo.png';
$about_icone = './assets/about_icone.png';
$real_icone = './assets/real_icone.png';
$contact_icone = './assets/contact_icone';

$site_1image = './assets/site2.PNG';
$site_2image = './assets/site1.PNG';
$site_3image = './assets/site3.PNG';
$site_4image = './assets/site4.PNG';

$profil_pic = './assets/IMG_4690.PNG';

$Js_link = './Js/app.js';

include './html/index.html';

?>

<footer class="footer" id="contact">
        <h1 class="title footer_title">Contact et infos</h1>
        <p class="para email"><strong>Email :</strong> rciupercher@gmail.com</p>
            <form class="contact" method="post" action="./db/send_msg.php">
                <div class="form_class">
                    <label for="name">Votre nom et prénom</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form_class">
                    <label for="email">Votre email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form_class">
                    <label for="mess">Votre nom et prénom</label>
                    <textarea name="mess" id="mess" required></textarea>
                </div>
                <button type="submit" class="general_btn send_msg_btn">Envoyer</button>
            </form>

            <div class="private_info">
                <p class="para copyright">Copyright | Raimond-code, Tous droits réservés </p>
                <a href="./db/cgu.php" class="para cgu_link">Conditions générales d'utilisations</a>
            </div>
    </footer>

    <style>
        .email{
            display: block;
            width: 90%;
            max-width: 450px;
            margin: 40px auto;
            text-align: left;
            font-weight: 600;
            color:#0F4C59;
        }
    </style>

    <script src="<?=$Js_link?>"></script>
</body>
</html>