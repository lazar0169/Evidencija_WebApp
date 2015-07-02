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
        <link href="./../css/addCustomer.css" rel="stylesheet">
        <link href="./../css/animate.css" rel="stylesheet">
        <link href="./../css/font-awesome.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="./../css/sweetalert.css">
        <link rel="stylesheet" href="./../css/jquery-ui.css">
        <script src="./../js/jquery-1.10.2.js"></script>
  <link href="./../css/hover-min.css" rel="stylesheet">
  <link href="./../css/hover.css" rel="stylesheet">
  <script src="./../js/jquery-ui.js"></script>
  
       <script>
  $(function() {
      $( "#datepicker" ).datepicker();
    $( "#datepicker" ).datepicker("option", "dateFormat", "yy-mm-dd");
  });
  </script>
    </head>
    <body>
        <div class="tb6 animated rubberBand efektizadiv"><span class="hvr-icon-back efekti" id="caoo"> nazad</span></div>
        <div class="container animated rubberBand">
            <div id="title efekti"><h1 class="center efekti"> Dodaj Korisnika </h1> </div>
            <br/>
             <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-2"><p style="text-indent: 1.5em;" class="efekti">Ime</p></div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><input class="tb5 hvr-grow-shadow" type="text" id="inputIme"/></div>    
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-2"><p style="text-indent: 1.5em;" class="efekti">Prezime</p></div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><input class="tb5 hvr-grow-shadow" type="text" id="inputPrezime"/></div>    
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-2"><p style="text-indent: 1.5em;" class="efekti">Pol</p></div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><select class="tb5 hvr-grow-shadow" id="selectPol"><option value="M">M</option> <option value="Z">Z</option> </select></div>    
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-2"><p style="text-indent: 1.5em;" class="efekti">Visina</p></div>
                <div class="col-sm-1"></div>
                <div class="col-lg-2"><input type="number" min="0" max="9999" class="tb5 hvr-grow-shadow" id="inputVisina" onKeyUp="limitText(this,4);" onKeyDown="limitText(this,4);" onkeypress="return isNumberKey(event)"/></div>    
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-2"><p style="text-indent: 1.5em;" class="efekti">Tezina</p></div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><input type="number" min="0" max="9999" class="tb5 hvr-grow-shadow" id="inputTezina" onKeyUp="limitText(this,4);" onKeyDown="limitText(this,4);" onkeypress="return isNumberKey(event)"/></div>    
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-2"><p style="text-indent: 1.5em;" class="efekti">Datum rodjenja</p></div>
                <div class="col-sm-1"></div>
                <div class="col-lg-2"><input class="tb5 hvr-grow-shadow" type="text" id="datepicker"></div>    
            </div>
            <div class="row">
                <div class="col-sm-5"></div>
                
                <div class="col-sm-2"><div class="hvr-grow-shadow" id="addBtn">Dodaj</div></div>    
            </div>
            
        </div>
        
        <script src="./../js/sweetalert.min.js"></script>
        <script src="./../js/bootstrap.min.js"></script>
        <script src="./../js/addCustomer.js"></script>
        
    </body>
    <script>
    $(document).ready(function(){
            if(parseInt($(window).height()) > parseInt($(".container").height()))
          
                $(".container").css("margin-top",(parseInt($(window).height()) - parseInt($(".container").height()))/2);
            
        });
    </script>
</html>


