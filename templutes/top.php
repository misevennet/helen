<?php session_start(); require_once('config/config.php');?>
    <!Doctype html>
    <html>

    <head>
        <meta charset='utf-8'>
        <title>Разработка приложений</title>
        <meta name='description' content='Разработка приложений для пользователей'>
        <meta name='keywords' content='Разработка'>
        <link type='text/css' href='media/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
        <link type='text/css' href='media/css/stile.css' rel='stylesheet'>
         <!--Подключаем JQUERY !--> 
        <script src="/media/js/jquery-1.11.3.com.js"></script>
        <script>$(function(){
    $('.topmenu a:first').bind('mouseover', function(){
        $('.heads').css('background', 'URL(/media/upload/s.jpg)')
    });
    $('.topmenu a:eq(1)').bind('mouseover', function(){
        $('.heads').css('background', '#00FFFF')
    });
    $('.topmenu a:eq(2)').bind('mouseover', function(){
        $('.heads').css('background', '#DF0101')
    });
    $('.topmenu').bind('mouseout', function(){
        $('.heads').css('background', 'URL(/media/img/zelflofon01.jpg)')
    });
    $('.leftmenu a:first').bind('mouseover', function(){
        $('.imageLeft').css('background', '#DF0101')
    });
    $('.leftmenu a:eq(1)').bind('mouseover', function(){
        $('.imageLeft').css('background', '#00FFFF')
    });
    $('.leftmenu a:eq(2)').bind('mouseover', function(){
        $('.imageLeft').css('background', '#40FF00')
    });
    $('.leftmenu').bind('mouseout', function(){
        $('.imageLeft').css('background', '#E0E6F8')    
    });

});</script>
    </head>

    <body>
        <div  class='heads'>
            
            <h1>GOGI</h1>
            
        </div>
        <div class='strip'>
       
            <? if($_SESSION['id']){?>
                <a href="logout.php">Выход</a>
                <a href="cabinet.php">Кабинет</a>
                <? }else{ ?>
                    <a href="reg.php"> Регистрация</a>
                    <a href="login.php"> Вход</a>
            <a href="tovars.php"> Товары</a>
                    <?php } ?>

                        <!--Упрощенный вариант написания без скобок
              <? if($_SESSION['id']):?>
            <a href="#"> Выход</a>
            <a href="#"> Кабинет</a>
            <? else: ?>
            <a href="reg.php"> Регистрация</a>
            <a href="login.php"> Вход</a>
            <?php endif; ?>
!-->

        </div>
        <nav class='topmenu'>
            <a href='index.php?url=den'>Главные новости</a>
            <a href='index.php?url=com'>О компании</a>
            <a href='index.php?url=sut'>Контакты</a>
            <a href='tovars.php'>Товары</a>
        </nav>
        <div class='container'>
            <div class='col-md-3'>
                <div class='leftmenu'>
                    <div class='head-menu'>
                        Разделы сайта
                    </div>
                    <a href="#" class="btn btn-primary btn-lg btn-block">Разработка ПО на C++</a>
                    <a href="#" class="btn btn-primary btn-lg btn-block">Разработка ПО на C#</a>
                    <a href="#" class="btn btn-primary btn-lg btn-block">Разработка ПО на Java</a>
                    <img class="imageLeft" style="padding:15px" width="100%" src="/media/upload/s.jpg">
                </div>
            </div>
            <div class='col-md-6'>