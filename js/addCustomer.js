$(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
    
    $( "#dialog1" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
    });
$("#caoo").click(function(){
           window.location = "../html/index.php"
});
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

$("#addBtn").click(function() {
   var ime = $("#inputIme").val();
   var prezime = $("#inputPrezime").val();
   var pol = $("#selectPol").val();
   var visina = $("#inputVisina").val();
   var tezina = $("#inputTezina").val();
   var datumRodj = $("#datepicker").val();
   
   if(ime === "" || prezime === "" || pol === "" || visina === "" || tezina === "" || datumRodj === "")
   {
       swal("Sva polja moraju biti popunjena");
   }
   else
   {
   $.ajax({
        type:"POST",
        dataType:"json",
        url:"./../php/upisiKorisnika.php",
        data: {
            "ime":ime,
            "prezime":prezime,
            "pol":pol,
            "visina":visina,
            "tezina":tezina,
            "datumRodj":datumRodj
           
        },
        error:function (jqXHR, textStatus, errorThrown) {
            alert("error");
        },
        success: function (result) {
             
             swal("Uspesno dodavanje novog korisnika!", "Korisnik " + ime + " " + prezime + " je uspesno dodat!", "success");
             setTimeout(function() {
                window.location= "index.php";
             }, 1600);
            
        }
        
        });

}


});  
