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
        
        <div class="container animated bounceInUp">
            <div class="center efekti" id="title"><h1> Podaci o korisniku </h1> </div>
            <br/>
             <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-3"><p class="efekti tekst">Ime:</p></div>
                <div class="col-sm-3"><p class="tekst" id="ime"></p></div>    
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-3"><p class="efekti tekst">Prezime:</p></div>
                <div class="col-sm-3"><p class="tekst" id="prezime"></p></div>    
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-3"><p class="efekti tekst">Pol:</p></div>
                <div class="col-sm-3"><p class="tekst" id="pol"></p></div>    
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-3"><p class="efekti tekst">Visina:</p></div>
                <div class="col-sm-3"><p class="tekst" id="visina"></p></div>    
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-3"><p class="efekti tekst">Tezina:</p></div>
                <div class="col-sm-3"><p class="tekst" id="tezina"></p></div>    
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-3"><p class="efekti tekst">Datum rodjenja:</p></div>
                <div class="col-sm-3"><p class="tekst" id="datumRodj"></p></div>    
            </div>
           
            
            
        </div>
        
        
        <script src="./../js/bootstrap.min.js"></script>
        <script src="./../js/profile.js"></script>
        
    </body>
</html>
