<?php
session_start();
session_destroy();
?>
<html>
    <head>
        <link href="./../css/jquery-ui.min.css" rel="stylesheet">
        <link href="./../css/bootstrap.min.css" rel="stylesheet">
        <link href="./../css/animate.css" rel="stylesheet">
        <link href="./../css/login.css" rel="stylesheet">
        <link href="./../css/hover.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./../css/sweetalert.css">
       
    </head>
    <body>
        <div class="container center animated bounceInDown">
            <div class="row">
                <img class="col-xs-11" src="./../css/images/logo.png" alt="Logo">
            </div>
            <div class="row">
                <div class="col-xs-3"></div>
                <div class="col-xs-2"><p class="efekti3">username:</p></div>
                <input class="col-xs-3 hvr-grow-shadow tb5 efekti3" onkeypress="searchKeyPress(event);" type="text" id="inputUsername"/>  
            </div>
            <div class="row">
                <div class="col-xs-3"></div>
                <div class="col-xs-2"><p class="efekti3">password:</p></div>
                <input class="col-xs-3 hvr-grow-shadow tb5 efekti3" onkeypress="searchKeyPress(event);" type="password" id="inputPassword"/>    
            </div>
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-1" id="dugme">
                    <div class="efekti2 hvr-grow-shadow"id="logInBtn" onclick="Uradi();">Log in</div>
                </div>
            </div>
        </div>
        <script src="./../js/sweetalert.min.js"></script>
        <script src="./../js/jquery-2.1.4.min.js"></script>
        <script src="./../js/bootstrap.min.js"></script>
        <script src="./../js/logIn.js"></script>
    </body>
    
     <script>
        $(document).ready(function(){
            setTimeout(function(){
               if(parseInt($(window).height()) > parseInt($(".container").height()))
          
                $(".container").css("margin-top",(parseInt($(window).height()) - parseInt($(".container").height()))/2); 
            }, 150);
            
        });
        
        
        
    </script>
</html>

