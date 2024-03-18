var tabla;



function init() {

    mostrarelformulario(false);
    listar();


    $("#formulario").on("submit", function (e) {
        
        guardaryeditar(e);
    })


   
    



}



function limpiar() {


    $("#nombre").val("");
    $("#descripcion").val("");
    $("#idcategoria").val("");
    
}


function mostrarelformulario(x) {

    limpiar();

    if (x) {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
   
    } else {
        $("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
    
    }

}



function cancelarformulario() {

    limpiar();
    mostrarelformulario(false);
    
}


function listar() {

    tabla = $('#tablalistado').dataTable(
        
        {

        "aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tabla
        
               buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
            ],
               

            "ajax":
				{
					url: '../ajax/categoria.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
            },

        "bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)   
    }).DataTable();
    
}


function guardaryeditar(e) {

    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar").prop("disabled", true);
    var formData = new FormData($("#formulario")[0]);


    	$.ajax({
		url: "../ajax/categoria.php?op=guardareditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarelformulario(false);
	          tabla.ajax.reload();
	    }

        });
    
    limpiar();

}


function mostrar(idcategoria) {


    $.post("../ajax/categoria.php?op=mostrar", { idcategoria: idcategoria }, function (data, status)
        
    {

        data = JSON.parse(data);
        mostrarelformulario(true);

        $("#nombre").val(data.nombre);
		$("#descripcion").val(data.descripcion);
 		$("#idcategoria").val(data.idcategoria);
        
        } )
    
}


function desactivar(idcategoria) {

    bootbox.confirm("¿Está Seguro de desactivar la Categoría?", function (result) {

        if (result) {

            $.post("../ajax/categoria.php?op=desactivar", {idcategoria : idcategoria}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
            

        }

     })

}


function activar(idcategoria) {

    bootbox.confirm("¿Está Seguro de activar la Categoría?", function (result) {

        if (result) {

            $.post("../ajax/categoria.php?op=activar",
                { idcategoria: idcategoria },
                function (e){
                
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
            

        }

     })

}












init();