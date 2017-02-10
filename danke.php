<?php
/* Set e-mail recipient */
//$myemail  = 'sylke-scheduikat@t-online.de';
$myemail  = 'tom.scheduikat@gmail.com';

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Bitte Nachname eingeben");
$email    = check_input($_POST['email'], "Bitte Email eintragen");
$Telefon  = check_input($_POST['phone'], "Bitte ihre Telefonnummer eintragen");
$Erw   = check_input($_POST['parents'], " Bitte die Anzahl der Erwachsenen anklicken");
$Kinder = check_input($_POST['childs'], "Bitte die Anzahl der Kinder anklicken");
$Anreise = check_input($_POST['arrive'], "Bitte Anreise anngeben");
$Abreise = check_input($_POST['departure'], "Bitte Abreise angeben");
$Haustier = check_input($_POST['animals'], "Haben sie Haustiere?");
$FeWo = check_input($_POST['fewo'], "FeWo");
$Kommentar = check_input($_POST['message']);
//$sicherheit = check_input($_POST['secure']);
//if ((int)$sicherheit != 4) {
//    header( 'Location: ' . $_SERVER['HTTP_REFERER'] );
//    exit();
//}
$subject = "$FeWo Anfrage";

$message = "
Buchungsanfrage $FeWo

Name: $name
E-mail: $email
Telefon: $Telefon

Erwachsene: $Erw
Kinder: $Kinder
Haustiere: $Haustier

Anreise: $Anreise
Abreise: $Abreise

Nachricht:
$Kommentar

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

///* Redirect visitor to the thank you page */
//header('Location: danke.html');
//exit();

/* Functions we used */
?>
<?php
function check_input($data, $problem='')
{
    if (!$data) return "Keine Angabe";
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        $data = "Keine Angabe";
    }
    return $data;
}


?>
<!DOCTYPE html>
<!-- saved from url=(0082)https://mdbootstrap.com/live/_MDB/index/templates/pro/landingpage-cta-buttons.html -->
<html lang="de">
<script type="text/javascript">
    window["_gaUserPrefs"] = {
        ioo: function () {
            return true;
        }
    }
</script>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags always come first -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ferienwohnung Traumzeit auf Rügen and der Ostsee</title>
    <meta name="author" content="Tom Scheduikat">
    <meta name="publisher" content="Tom Scheduikat">
    <meta name="copyright" content="Tom Scheduikat">
    <meta name="description" content="Urlaub auf der schönen Insel Rügen direkt an der Ostsee in einer idyllisch gelegenen Ferienwohnung mit Terrasse oder Loggia. Hunde sind erlaubt.">
    <meta name="keywords" content="Loggia, FeWo, Ferienwohnung, Urlaub, Ostsee, Breege, Juliusruh, Wellness, Strand, Sonne, Ferienhaus, Tier, Haustier, Rügen, Park, Natur, Sauna, baden, sonnen, schlafen, entspannen, ruhig, Traumzeit, Teich, Endreinigung, Kap, Arkona">
    <meta name="page-topic" content="Reise Tourismus">
    <meta name="page-type" content="Private Homepage">
    <meta name="audience" content="Alle">
    <meta http-equiv="content-language" content="de">
    <meta name="robots" content="index, follow">
    <meta name="DC.Creator" content="Tom Scheduikat">
    <meta name="DC.Publisher" content="Tom Scheduikat">
    <meta name="DC.Rights" content="Tom Scheduikat">
    <meta name="DC.Description" content="Urlaub auf der schönen Insel Rügen direkt an der Ostsee in einer idyllisch gelegenen Ferienwohnung mit Terrasse oder Loggia. Hunde sind erlaubt.">
    <meta name="DC.Language" content="de">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="./css/mdb.min.css" rel="stylesheet">


    <style>
        /* TEMPLATE STYLES */

        html,
        body,
        header,
        .view {
            height: 100%;
        }

        /* Navigation*/

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #2196f3;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #0A6A60;
            }
        }

        .full-bg-img {
            color: #fff;
        }

        .view {
            background: url("img/background.JPG") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        footer.page-footer {
            background-color: #7E929C;
        }
        .text-center {
            text-align: center;
        }
    </style>
    <!--<script language="javascript" type="text/javascript" src="http://www.ruegen-travel.de/js/index.externInclude.js"></script>-->
</head>

<body>

<!--Navigation & Intro-->
<header>

    <!--Mask-->
    <div class="view hm-black-slight">
        <div class="full-bg-img flex-center" id="home">
            <ul>
                <li>
                    <h1 class="h1-responsive wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Vielen Dank für Ihre Nachricht!</h1></li>
                <li>
                    <p class="wow fadeIn" data-wow-delay="0.2s"
                       style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Wir werden uns schnellstmöglich bei Ihnen melden!</p>
                </li>
                <li>
                    <a class="btn btn-outline-white btn-lg wow fadeInLeft waves-effect waves-light" href="index.html"
                       data-wow-delay="0.2s"
                       style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <i class="fa fa-backward left"></i>&nbsp;Zurück zu den Ferienwohnungen
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->

</header>
<!--/Navigation & Intro-->


<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <ul>
                    <li class="text-center"><a href="tel:03839193523">038391 - 93523</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li class="text-center"><a href="mailto:sylke-scheduikat@t-online.de">sylke-scheduikat@t-online.de</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li class="text-center"><a href="impressum.html">Impressum</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid" style="font-size: 0.6em">
            © 2015 Copyright: <a href="http://www.mdbootstrap.com/"> MDBootstrap.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="./js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="./js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="./js/mdb.min.js"></script>

<script>
    new WOW().init();
</script>


<div class="hiddendiv common"></div>
</body>
</html>