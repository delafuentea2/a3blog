    let bta = document.querySelectorAll(".btn-tabla");
    let m= document.getElementById("mostrar");

    function mostrarTabla(tabla) {
      $.ajax({
          url: "/admin/" + tabla,
          type: "GET",
          success: function(response){
              $('#mostrar').innerHTML(response);
          }
          
      });
  }
  