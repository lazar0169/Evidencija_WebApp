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
        <link href="./../css/customer.css" rel="stylesheet">
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
        
      <div  id="pozadina">
            <div class="container">
            <div class="row">
                <div class="col-xs-1 hvr-icon-back navItem2 efekti2" onclick="parent.nazad();">Nazad</div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2 navItem hvr-buzz efekti2" onclick="parent.profil();">Profil</div>
                <div class="col-xs-2 navItem hvr-buzz efekti2" onclick="parent.merenja();">Merenja</div>
                <div class="col-xs-2 navItem hvr-buzz efekti2" onclick="parent.clanarine();"> Clanarine</div>
                <div class="col-xs-2"></div>
                <div class="col-xs-1 hvr-icon-spin navItem2 efekti2" onclick="parent.juhu();"></div>
            </div>
                
        </div>    
            </div>
        
        
        <script src="./../js/bootstrap.min.js"></script>
        <script src="./../js/index.js"></script>
        
    </body>
</html>

