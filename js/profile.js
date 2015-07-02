var id = window.sessionStorage.getItem("id"); //primi vrednost id koju si poslao iz index.js

$.ajax({
            type:"POST",
            dataType:"json",
            url:"./../php/vratiKorisnika.php", //ime php skripte koju pozivas
            data: { //podaci koje prosledjujes ( pod "" je ime kako ces da ih hvatas u php-u, a desno je vrednost koju saljes
                "id":id, 

            },
            error:function (jqXHR, textStatus, errorThrown) {//sta se radi u slucaju greske
                alert("error");
            },
            success: function (result) {//uspeh i citanje podatka
                            $("#ime").text(result["ime"]);// document.getElementByID("ime").innerHTML = result["ime"];
                            window.sessionStorage.setItem("ime", result["ime"]);//setujemo zbog ostalih stranica da ne bi opet pristupali bazi
                            window.sessionStorage.setItem("prezime", result["prezime"]);
                            $("#prezime").text(result["prezime"]); 
                            $("#pol").text(result["pol"]);
                            $("#visina").text(result["visina"] + " cm");
                            $("#tezina").text(result["tezina"] + " kg");
                            $("#datumRodj").text(result["datumRodj"]);



                    }

                });

