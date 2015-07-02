<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>
<html>
     <head>
        
        
        <link href="./../css/bootstrap.min.css" rel="stylesheet">
        <link href="./../css/mere.css" rel="stylesheet">
        <link href="./../css/animate.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./../css/sweetalert.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link href="./../css/hover.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    </head>
    
    
    
    <body>
        
        
        <div class="container animated fadeInDown">
            <div class="panel panel-default">
                <div class="panel-heading efekti " id="naslov"></div>
                <div class="panel-body">
                    <ul class="list-group efekti " id="lista">
                
                    </ul>
                </div>
            </div>
            
            <div class="row animated slideInUp">
                <div class="col-xs-1"><p class="efekti">Visina:</p></div>
                <div class="col-xs-2"><input class="tb5 efekti hvr-grow-shadow" type="number" min="0" max="9999" class="tb5" onKeyUp="limitText(this,4);" onKeyDown="limitText(this,4);" onkeypress="return isNumberKey(event)" id="visina"><span class="efekti"> cm</span></div>
                <div class="col-xs-1"><p class="efekti">Tezina:</p></div>
                <div class="col-xs-2"><input class="tb5 efekti hvr-grow-shadow" type="number" min="0" max="9999" class="tb5" onKeyUp="limitText(this,4);" onKeyDown="limitText(this,4);" onkeypress="return isNumberKey(event)" id="tezina"><span class="efekti"> kg</span></div>
                <div class="col-xs-1"><p class="efekti">Datum:</p></div>
                <div class="col-xs-2"><input class="tb5 hvr-grow-shadow" type="text" id="datepicker"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-2 hvr-grow-shadow" onclick="fDodaj();" id="addBtn">Dodaj novo merenje</div>
            </div>
        </div>
    
        
        <script src="./../js/sweetalert.min.js"></script>
        <script src="./../js/bootstrap.min.js"></script>
        <script src="./../js/merenja.js"></script> 
    </body>
</html>

