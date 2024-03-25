<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du groupe #1</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    
    <!-- Police Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    
    <!-- Material Icons Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Icônes Font Awesome pour les réseaux sociaux -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!-- Menu burger -->
    <div id="menu__entete" class="global  clr-agencement-primaire">
       <?php echo get_custom_logo(); ?>
        <input type="checkbox" name="" id="chk_burger">
        <label id="burger" for="chk_burger">
            <svg   width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </label>  
        <header class="menu__header">
            <?php wp_nav_menu(array("container" => "nav")); ?>
        </header>
    </div>

    
    