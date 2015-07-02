 initialize = function() {
     $("#tabela").html("");
 $("#tabela").append(" <tr> <th><h3>#</h3></th> <th><h3>Ime</h3></th> <th><h3>Prezime</h3></th> <th><h3></h3></th> <th><h3></h3></th></tr>");
 
 $.ajax({
        type:"POST",
        dataType:"json",
        url:"./../php/vratiKorisnike.php",
        data: {
           
        },
        error:function (jqXHR, textStatus, errorThrown) {
            alert("error");
        },
        success: function (result) {
                        
                  for(var i=0; i<result.length; i++)
                  {
                      var red = document.createElement("tr");
                      
                      $(red).addClass("red").append("<td>" + result[i]["id"] +"</td><td>" + result[i]["ime"] +"</td><td>" + result[i]["prezime"] + "</td>");
                      
                      var editBtn = document.createElement("span");
                      $(editBtn).addClass("glyphicon glyphicon-pencil edit").click(function() {
                          window.sessionStorage.clear();
                          window.sessionStorage.setItem("id", $(this.parentNode.parentNode.cells[0]).text()); // POSTAVI ID U SESSION STORAGE 
                          window.location = "customer.php";
                      });
                     
                      var deleteBtn = document.createElement("span");
                      $(deleteBtn).addClass("glyphicon glyphicon-remove-circle delete").click(function() { 
                          var id = $('td:first', $(this).parents('tr')).text();
                          var ime = $(this.parentNode.parentNode.cells[1]).text();
                          var prezime = $(this.parentNode.parentNode.cells[2]).text();

                          swal({   title: "Da li ste sigurni da zelite da obrisete korsnika ",   
                              text: ime + " " + prezime +" ?",   
                              type: "warning",   
                              showCancelButton: true,   
                              confirmButtonColor: "#DD6B55",   
                              confirmButtonText: "Da, obrisi",   
                              closeOnConfirm: false }, 
                          function(){   
                              brisi(id);
                              swal("Obrisan!", "Korisnik" + ime + " " + prezime + " je obrisan.","success");
                              initialize();
                          });
                          
                               
                           
                      });
                      var td1 = document.createElement("td");
                      $(td1).append(editBtn);
                      var td2 = document.createElement("td");
                      $(td2).append(deleteBtn);
                      $(red).append(td1).append(td2);
                      $("#tabela").append(red);
                  }
              }
        
        });
        };
        initialize();
        $("#plus").click(function() {
           window.location = "addCustomer.php" 
        });
       
       $("#caoo").click(function(){
           window.location = "../html/login.php"
       });

    brisi= function(id) {
         $.ajax({
            type:"POST",
            dataType:"json",
            url:"./../php/brisiKorisnika.php",
            data: {
                "id":id,

            },
            error:function (jqXHR, textStatus, errorThrown) {
                alert("error");
            },
            success: function (result) {




                    }

                });
    }


