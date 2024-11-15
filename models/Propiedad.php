<?php
namespace Model;

class Propiedad extends ActiveRecord{

    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitacion', 'wc', 'estacionamiento',
    'creado', 'vendedores_Id'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitacion;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedores_Id;



    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitacion = $args['habitacion'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedores_Id = $args['vendedores_Id'] ?? '';
    }

     
    public function validar(){
         
        if(!$this->titulo){
            self::$errores[] = "Debes añadir un titulo";
        }
        if(!$this->precio){
            self::$errores[] = "El precio es Obligatiorio";
        }
        if(strlen ($this->descripcion) < 50){
            self::$errores[] = "La Descripcion es obligatoria y debe tener al menos 50 caracteres";
        }
        if(!$this->habitacion){
            self::$errores[] = "Debes añadir numero de Habitaciones";
        }
        if(!$this->wc){
            self::$errores[] = "Debes añadir cantidad de WC";
        }
        if(!$this->estacionamiento){
            self::$errores[] = "Debes añadir cantidad de estacionamientos";
        }
        if(!$this->vendedores_Id){
            self::$errores[] = "Elige un vendedor";
        }
        if(!$this->imagen) {
            self::$errores[] = 'La imagen es obligatoria';
        }
        
        return self::$errores;
    }
}