$("#formulariologin").on('submit', function (e) {

   e.preventDefault();


    login = $("#login").val();
    clave = $("#clave").val();

    

    $.post("../ajax/usuarios.php?op=verificar",
        {"login":login,"clave":clave},
        function(data)
        {

            data = JSON.parse(data);
            
            console.log(data)

          
            
            
        if (data!=null)
        {

            
          $(location).attr("href","categorias.php");            
        }
        else
        {
          alert("Usuario y/o Password incorrectos");
        
           
        }
    });$
})