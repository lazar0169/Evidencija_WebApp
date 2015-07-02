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
        <link href="./../css/customer.css" rel="stylesheet">
         <link href="./../css/animate.css" rel="stylesheet">
        <link href="./../css/font-awesome.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="./../css/sweetalert.css">
        <link rel="stylesheet" href="./../css/jquery-ui.css">
        <script src="./../js/jquery-1.10.2.js"></script>
  <link href="./../css/hover-min.css" rel="stylesheet">
  <link href="./../css/hover.css" rel="stylesheet">
  <script src="./../js/jquery-ui.js"></script>
  <script>
      function profil() {
       var okvir=  document.getElementById("frame2");
         $(okvir).attr("src", "profile.php");
      } ;
      function merenja() {
       var okvir=  document.getElementById("frame2");
         $(okvir).attr("src", "merenja.php");
      } ;
      function clanarine() {
       var okvir=  document.getElementById("frame2");
         $(okvir).attr("src", "clanarine.php");
      } ;
      function nazad(){
            document.body.innerHTML = '';
            window.location = '../php/login.php';
        };
      function juhu(){
         document.getElementById("frame2").src =  document.getElementById("frame2").src;
      };
    </script>
  <link href="./../css/hover.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    </head>
    
    <frameset rows="50px,*">
        <frame name="frame1" src="nav.php" frameborder="0" noresize="noresize" scrolling="no">
            <frame name="frame2" id="frame2" src="profile.php" frameborder="0" noresize="noresize" scrolling="no">
    </frameset>
        
       
        
        
        
        
        
    
</html>

