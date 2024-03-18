var tabla;



function init() {

    mostrarelformulario(false);
    listar();


    $("#formulario").on("submit", function (e) {
        
        guardaryeditar(e);
    })

    //Cargamos los items al select categoria
	$.post("../ajax/articulos.php?op=selectCategoria", function(r){
	            $("#idcategoria").html(r);
	            //$('#idcategoria').selectpicker('refresh');

	});


    $("#imagenmuestra").hide();


    


   

}



function limpiar() {


  	$("#codigo").val("");
	$("#nombre").val("");
	$("#descripcion").val("");
	$("#stock").val("");
	$("#imagenmuestra").attr("src","");
	$("#imagenactual").val("");
	$("#print").hide();
	$("#idarticulo").val("");
    
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
					url: '../ajax/articulos.php?op=listar',
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
		url: "../ajax/articulos.php?op=guardaryeditar",
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


function mostrar(idarticulo) {


    $.post("../ajax/articulos.php?op=mostrar", { idarticulo: idarticulo }, function (data, status)
        
    {

        data = JSON.parse(data);
        mostrarelformulario(true);

        $("#idcategoria").val(data.idcategoria);
        //$('#idcategoria').selectpicker('refresh');
        $("#codigo").val(data.codigo);
        $("#nombre").val(data.nombre);
        $("#stock").val(data.stock);
		$("#descripcion").val(data.descripcion);
		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/articulos/"+data.imagen);
		$("#imagenactual").val(data.imagen);
        $("#idarticulo").val(data.idarticulo);
        generarbarcode();
        

      
        
        } )
    
}


function desactivar(idcategoria) {

    bootbox.confirm("¿Está Seguro de desactivar la Categoría?", function (result) {

        if (result) {

            $.post("../ajax/articulos.php?op=desactivar", {idcategoria : idcategoria}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
            

        }

     })

}


function activar(idcategoria) {

    bootbox.confirm("¿Está Seguro de activar la Categoría?", function (result) {

        if (result) {

            $.post("../ajax/articulos.php?op=activar",
                { idcategoria: idcategoria },
                function (e){
                
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
            

        }

     })

}


function generarbarcode() {

    codigo = $("#codigo").val();
    JsBarcode("#barcode", codigo);

    $("#print").show();

    



}












init();