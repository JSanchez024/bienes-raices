<?php

namespace Controllers;
use MVC\Router;
use Model\Propiedad;
use Model\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;
//use RuntimeException;

class PropiedadController{
    public static function index(Router $router){
        $propiedades = Propiedad::all();
        $vendedores = Vendedor::all();
        //Muestras mensaje condicional
        $resultado = $_GET['resultado'] ?? null; 

        $router->render('propiedades/admin', [
            'propiedades' => $propiedades,
            'resultado' => $resultado,
            'vendedores' => $vendedores
       ]);
    }
    public static function crear(Router $router){

        $propiedad = new Propiedad;
        $vendedores = Vendedor::all();
        $errores = Propiedad::getErrores();
       // $resultado = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //Crea nueva instancia 
            $propiedad = new Propiedad($_POST['propiedad']);
    
            //Subida de archivos
             //Generar nombre unico
            $nombreImagen = md5( uniqid( rand(), true )) . ".jpg";
    
             //Setear imagen        
                //Realiza un resize a la imagen con intervention
            if(($_FILES['propiedad']['tmp_name']['imagen'])){   
                $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
                $propiedad->setImagen($nombreImagen);
            }

           //debuguear($_SERVER['DOCUMENT_ROOT']);

                //Validar
            $errores = $propiedad->validar();
            
            //revisar que el arreglo de arrores este vacio
            if(empty($errores)){
                //Crar carpeta para subir imagenes
                if(!is_dir(CARPETA_IMAGENES)){
                    mkdir(CARPETA_IMAGENES);
                }
    
                //Guarda la imagen en el servidor
                $image->save(CARPETA_IMAGENES . $nombreImagen); 
                $resultado = 1;
                 //GUARDA EN LA BD
                $propiedad->guardar();
            }
        }
        $router->render('propiedades/crear', [
            'propiedad' => $propiedad,
            'vendedores' => $vendedores,
            'errores' => $errores
        ]);
    }
    public static function actualizar(Router $router){
        $id = validarORedireccionar('/admin');
        $propiedad = Propiedad::find($id);

        $vendedores = Vendedor::all();

        $errores = Propiedad::getErrores();

        //Metodo POST para actualizar
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //asignar los atributos
            $args = $_POST['propiedad'];
            $propiedad->sincronizar($args);
    
            //Validacion
            $errores = $propiedad->validar();
    
            //subida de archivos
            //Generar un nombre unico
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";
    
            //metodo POST para actualizar
            if($_FILES['propiedad']['tmp_name']['imagen']){
                //Realizar un rrsize a la imagen intervention
                $image = Image::make($_FILES['propiedad']['tmp_name']['imagen']) ->fit(800,600);
                //Setear imagen
                $propiedad->setImagen($nombreImagen);
            }
            if(empty($errores)){
                if($_FILES['propiedad']['tmp_name']['imagen']){
                    //Almacenar imagnes
                    $image->save(CARPETA_IMAGENES . $nombreImagen);
                }
                $propiedad->guardar();  
            }
    
                //if($resultado){
                  //  header('location: /admin?resultado=2');
               //}
        }

        $router->render('/propiedades/actualizar', [
            'propiedad' => $propiedad, 
            'errores' => $errores,
            'vendedores' => $vendedores
        ]);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //validar ID
            $id = $_POST['id'];
            $id = filter_var($id , FILTER_VALIDATE_INT);
        
            if($id){
                $tipo = $_POST['tipo'];
                if(validarTipoContenido($tipo)){
                    $propiedad = Propiedad::find($id);
                    $propiedad->eliminar();
                    
                }
            }    
        }
    }
    


}