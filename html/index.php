<?php
session_start();

if(!isset($_SESSION["admin"]))
{
    header("Location: login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>
<html>
    <head>
        
        <link href="./../css/bootstrap.min.css" rel="stylesheet">
        <link href="./../css/index.css" rel="stylesheet">
         <link href="./../css/animate.css" rel="stylesheet">
        <link href="./../css/font-awesome.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="./../css/sweetalert.css">
        <link rel="stylesheet" href="./../css/jquery-ui.css">
        <script src="./../js/jquery-1.10.2.js"></script>
  <link href="./../css/hover-min.css" rel="stylesheet">
  <link href="./../css/hover.css" rel="stylesheet">
  <script src="./../js/jquery-ui.js"></script>
    </head>
    <body>
        
        <div class="animated zoomIn container">
            <div id="prvired"> </div>
            <div class="row">
                <div class="col-lg-3">
                    <span class="hvr-icon-back efekti" id="caoo">Izloguj se</span>
                </div>
                <div class="col-lg-6"></div>
                <div class="col-lg-3" >
                    <span class=" hvr-icon-float-away efekti" id="plus">Dodaj novog clana</span>
                    
                </div>
            </div>
            <br/>
            <table class="table efekti animated zoomIn" id="tabela" bgcolor="#F0F0F0">
               
            </table>
        </div>
        
        <script src="./../js/sweetalert.min.js"></script>
        <script src="./../js/bootstrap.min.js"></script>
        <script src="./../js/index.js"></script>
        
    </body>
</html>
