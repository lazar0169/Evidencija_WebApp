
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


$("#naslov").text("Merenja za clana: " + ime + " " + prezime);
$(function() {
      $( "#datepicker" ).datepicker();
    $( "#datepicker" ).datepicker("option", "dateFormat", "yy-mm-dd");
  });
function initialisation()
{
$.ajax({
            type:"POST",
            dataType:"json",
            url:"./../php/vratiMerenja.php", //ime php skripte koju pozivas
            data: { //podaci koje prosledjujes ( pod "" je ime kako ces da ih hvatas u php-u, a desno je vrednost koju saljes
                "id":id 

            },
            error:function (jqXHR, textStatus, errorThrown) {//sta se radi u slucaju greske
                alert("error");
            },
            success: function (result) {//uspeh i citanje podatka
                                $("#lista").html("");
                                $('#visina').val('');
                                $('#tezina').val('');
                                $("#datepicker").val('');
                                if(result === "prazno")
                                {
                                    var item = document.createElement("li");
                                $(item).addClass("list-group-item").text("Trenutno nema zabelezenih merenja za ovog clana");
                                $("#lista").append(item);
                                }
                                else
                                {
                            for (var i = 0; i<result.length; i++){
                                var item = document.createElement("li");
                                $(item).addClass("list-group-item").text("Datum: " + result[i]["datum"] + "   |   Visina: " + result[i]["visina"] + " cm   |   Tezina: " + result[i]["tezina"] + " kg");
                                $("#lista").append(item);
                            }
                        }



                    }

                });
            }
            initialisation();

function fDodaj() {
    var visina = $("#visina").val();
    //var visina = document.getElementById("visina").value;
    var tezina = $("#tezina").val();
    var datum = $("#datepicker").val();
    
    if (visina === "" || tezina === "" || datum === "") {
        swal("Sva polja moraju biti popunjena");
    }
    else{
        
        $.ajax({
            type:"POST",
            dataType:"json",
            url:"./../php/dodajMerenja.php", //ime php skripte koju pozivas
            data: { //podaci koje prosledjujes ( pod "" je ime kako ces da ih hvatas u php-u, a desno je vrednost koju saljes
                "id":id,
                "visina":visina,
                "tezina":tezina,
                "datum":datum
                

            },
            error:function (jqXHR, textStatus, errorThrown) {//sta se radi u slucaju greske
                //alert(visina+" ... "+tezina+" ... "+datum+" ... error: " + textStatus + "    |    " + errorThrown);
                swal( "greska: " + textStatus + "... razlog:    " + errorThrown);
            },
            success: function (result) {//uspeh i citanje podatka
                        initialisation();
                    }

                });
    }
}

