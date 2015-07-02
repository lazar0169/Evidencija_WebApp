function searchKeyPress(e)
    {
        // look for window.event in case event isn't passed in
        e = e || window.event;
        if (e.keyCode == 13)
        {
            Uradi();
        }
    }
    
function Uradi() {
    if($("#inputUsername").val() === "admin" && $("#inputPassword").val() === "admin" )
    {   
        swal({   title: "Dobrodosli!",   text: "Ispravno uneti podaci",   timer: 1000,   showConfirmButton: false });
        setTimeout(function() {
            window.location = "../php/login.php";
        }, 1300);
    }
    else {
        swal({   title: "Greska!",   text: "Netacno uneti podaci!",   type: "error",   confirmButtonText: "U redu" });
    }
}



