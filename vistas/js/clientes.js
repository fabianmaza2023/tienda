$(".btnCargarDatos").click(function(){
    var idClientes = $(this).attr("idClientes");
    
    var datos = new FormData();
    
    datos.append("edit", edit);
    console.log("Datos id",edit);
    datos.append("idClientes", idClientes);

    $.ajax({
        url: "ajax/ajaxClientes.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            
            
        }

    });
})