<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php?id='.$_POST['email']);
}

$body_class = "";

?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TP email par Peterson Rostain">
    <meta name="author" content="Peterson Rostain"/>
    <title>TP EMAIL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="<?= $body_class ?>">
<main>
    <?php
    if (empty($_GET['delivery']) and $_GET['delivery'] !== "sent") {
        ?>
        <form action="#" method="post">
            <input type="email" name="email" class="email" placeholder="Ton email de star..." required/>
            <input type="submit" value="Inscrit-toi" class="submit"/>
        </form>
        <?php
    }
    else
    {
        ?>
    <div class="valid">
        <div class="valid_img"></div>
    </div>
<?php
    }
    ?>
</main>
</body>
</html>