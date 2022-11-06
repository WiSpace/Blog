<?php
header("Content-Type: text/html; charset=utf-8");

$query = "SELECT * FROM `blog`"; # table blog in database

$db = mysqli_connect("data for login");
$db->set_charset("utf8");

$posts = mysqli_query($db, $query);
mysqli_close($db);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>wispace dev.</title>
    <meta name="description" content="WiSpace">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <meta name="keywords" content="Willis, WiSpace, IT, Python, C, C++, Ви, Виспейс, виспейс.ру, вайспейс">
    <meta name="copyright" content="WiSpace">
    <meta name="author" content="Willis">
    <meta name="subject" content="WiSpace">
    <meta name="abstract" content="WiSpace">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="WiSpace">
    <meta property="og:title" content="wispace dev.">
    <meta property="og:url" content="https://wispace.ru/">
    <meta property="og:image" content="https://wispace.ru/logo.png">
</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="hellow">
        <h1 class="title">wispace blog.</h1>
    </div>

    
    <div class="blog-posts">
        <ul class="card-wrapper">
            <?php
            while ($now = mysqli_fetch_array($posts)) {
                echo <<<HTML
                    <li class="card">
                        <img src='{$now["url"]}' alt='img'>
                        <h3><a href="p/?id={$now['ID']}">{$now['title']}</a></h3>
                        <p>{$now["description"]}</p>
                    </li>
                HTML;
            }
            ?>
        </ul>
    </div>
</body>
</html>