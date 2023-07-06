<?php
class ControladorClientes{
    //Función para recibir los datos para gurardar cliente
    public  function crtlGuardarCliente(){
        
        if (isset($_POST['cedula']) &&
            isset($_POST['nombre']) &&
            isset($_POST['apellidos']) &&
            isset($_POST['direccion']) &&
            isset($_POST['telefono']) &&
            isset($_POST['email'])){
                $tabla ="cliente";
                $data = array('cedula' => $_POST['cedula'],
                             'nombre' => $_POST['nombre'],
                             'apellidos' => $_POST['apellidos'],
                             'direccion' => $_POST['direccion'],
                             'telefono' => $_POST['telefono'],
                             'email' => $_POST['email']);
                
                $res = ModeloCliente::mdlGuardarCliente($tabla, $data);
                if($res == 'ok'){
                    echo '<script>
                    Swal.fire({
                        icon:"success",
                        title: "¡Datos de cliente guardados Correctamente...!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                            window.location= "cliente";
                        }
                    })
                  </script>';
                } else{
                    echo '<script>
                    Swal.fire({
                        icon:"error",
                        title: "¡Datos de cliente no se puden ser guardados...!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                            window.location= "cliente";
                        }
                    })
                  </script>';

                }
            }
    }
    //
    public static function ctrlcargarcliente($parametro,$id){
        $tabla = "cliente";
        $datosclientes = ModeloCliente::mdlCargarCliente($tabla,$parametro,$id);
        return $datosclientes;
    }
}