<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>
<html>
    <head>
        
        <link href="./../css/bootstrap.min.css" rel="stylesheet">
        <link href="./../css/clanarine.css" rel="stylesheet">
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
        <div class="container animated fadeInDown">
            <div class="panel panel-default">
                 <div class="panel-heading efekti" id="naslov"></div>
                 <div class="panel-body">
                    <ul class="list-group efekti " id="lista">
                
                    </ul>
                </div>
            </div>
            
            
            <div class="row animated fadeInDown">
                <div class="col-lg-1"><p class="efekti">Iznos:</p></div>
                <div class="col-lg-2"><input class = "efekti tb5 hvr-grow-shadow" type="number" min="0" max="999999" class="tb5" onKeyUp="limitText(this,6);" onKeyDown="limitText(this,6);" onkeypress="return isNumberKey(event)"  id="iznos"><span class="efekti"> din</span></div>
                <div class="col-lg-1"><p class="efekti">Datum:</p></div>
                <div class="col-lg-2"><input class="efekti tb5 hvr-grow-shadow" type="text" id="datepicker"></div>
                <div class="col-lg-4"></div>
                <div class="col-lg-2 hvr-grow-shadow" onclick="fDodaj();" id="addBtn">Dodaj novu clanarinu</div>
            </div>
             
        </div>

    <script src="./../js/sweetalert.min.js"></script>
    <script src="./../js/bootstrap.min.js"></script>
    <script src="./../js/clanarine.js"></script> 
    </body>
</html>

