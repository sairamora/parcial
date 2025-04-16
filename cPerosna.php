<?php
//clase persona
class Persona{
    //atributos
    private $nombreP;
    private $apellidoP;
    private $direccionP;
    private $mailP;
    private $telefonoP;
    //metodo constructor
    public function __construct($nombre="Saira", $apellido="Mora", $direccion="Buenos Aires 1.500", $mail="saira.mora@est.fi.uncoma.edu.ar", $telefono="2991234567"){
        $this->nombreP=$nombre;
        $this->apellidoP=$apellido;
        $this->direccionP=$direccion;
        $this->mailP=$mail;
        $this->telefonoP=$telefono;
    }
    //metodos de acceso get
    public function getNombre(){return $this->nombreP;}
    public function getApellido(){return $this->apellidoP;}
    public function getDireccion(){return $this->direccionP;}
    public function getMail(){return $this->mailP;}
    public function getTelefono(){return $this->telefonoP;}
    //metodos de acceso set
    public function setNombre($nombre){$this->nombreP = $nombre;}
    public function setApellido($apellido){$this->apellidoP = $apellido;}
    public function setDireccion($direccion){$this->direccionP = $direccion;}
    public function setMail($mail){$this->mailP = $mail;}
    public function setTelefono($telefono){$this->telefonoP = $telefono;}
    //metodo toString
    public function __toString(){
        return "Nombre completo: " . $this -> getNombre() ." ". $this -> getApellido() ."\n".
        "Direccion: " . $this -> getDireccion() . "\n".
        "Mail: " . $this -> getMail() ."\n".
        "Telefono: " . $this -> getTelefono() ."\n";
    }
}
$salida = new Persona();
echo $salida;