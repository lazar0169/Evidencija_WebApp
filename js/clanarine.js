function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}



var id= window.sessionStorage.getItem("id");
var ime = window.sessionStorage.getItem("ime");
var prezime = window.sessionStorage.getItem("prezime");

$("#naslov").text("Clanarine za clana: " + ime + " " + prezime);
$(function() {
      $( "#datepicker" ).datepicker();
    $( "#datepicker" ).datepicker("option", "dateFormat", "yy-mm-dd");
  });
function initialisation()
{
$.ajax({
            type:"POST",
            dataType:"json",
            url:"./../php/vratiClanarine.php", //ime php skripte koju pozivas
            data: { //podaci koje prosledjujes ( pod "" je ime kako ces da ih hvatas u php-u, a desno je vrednost koju saljes
                "id":id 

            },
            error:function (jqXHR, textStatus, errorThrown) {//sta se radi u slucaju greske
                alert("error");
            },
            success: function (result) {//uspeh i citanje podatka
                                $('#iznos').val('');
                                $("#datepicker").val('');
                                $("#lista").html("");
                                if(result === "prazno")
                                {
                                    var item = document.createElement("li");
                                $(item).addClass("list-group-item").text("Trenutno nema uplacenih clanarina za ovog clana");
                                $("#lista").append(item);
                                }
                                else 
                                {
                            for (var i = 0; i<result.length; i++){
                                var item = document.createElement("li");
                                $(item).addClass("list-group-item").text("Datum: " + result[i]["datum"] + "   |   Cena: " + result[i]["cena"] + " din");
                                $("#lista").append(item);
                            }
                            
                        }
                        


                    }

                });
            }
            initialisation();

function fDodaj() {
    
    var cena = $("#iznos").val();
    var datum = $("#datepicker").val();

    if (cena === "" || datum === "") {
        swal("Sva polja moraju biti popunjena");
    }
    else{
        
        $.ajax({
            type:"POST",
            dataType:"json",
            url:"./../php/dodajClanarinu.php", //ime php skripte koju pozivas
            data: { //podaci koje prosledjujes ( pod "" je ime kako ces da ih hvatas u php-u, a desno je vrednost koju saljes
                "id":id,
                "cena":cena,
                "datum":datum
                

            },
            error:function (jqXHR, textStatus, errorThrown) {//sta se radi u slucaju greske
                alert("error");
            },
            success: function (result) {//uspeh i citanje podatka
                        initialisation();
                    }

                });
    }
}

