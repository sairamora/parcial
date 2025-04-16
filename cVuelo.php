<?php
//clase vuelo
class Vuelo{
    //atributos
    private $numeroV;
    private $importacionV;
    private $fechaV;
    private $destinoV;
    private $horaLlegada;
    private $horaPartida;
    private $cantAsientosTotales;
    private $cantAsientosDisponibles;
    private $personaResp;
    //metodo constructor
    public function __construct($nVuelo="S12", $imp="Aerolinas Argentinas", $fecha="16/5/2025", $dest="Bariloche", $hsLleg="13:00", $hsPartida="18:00", $cantAsientosT=80, $cantAsientosDisp=30, $responsable="Saira Mora"){
        $this->numVuelo=$nVuelo;
        $this->importacionV=$imp;
        $this->fechaV=$fecha;
        $this->destinoV=$dest;
        $this->horaLlegada=$hsLleg;
        $this->horaPartida=$hsPartida;
        $this->cantAsientosTotales=$cantAsientosT;
        $this->cantAsientosDisponibles=$cantAsientosDisp;
        $this->personaResp=$responsable;
    }
    //metodos de acceso get
    public function getNumVuelo(){return $this->numVuelo;}
    public function getImportacion(){return $this->importacionV;}
    public function getFecha(){return $this->fechaV;}
    public function getDestino(){return $this->destinoV;}   
    public function getHoraLlegada(){return $this->horaLlegada;}
    public function getHoraPartida(){return $this->horaPartida;}
    public function getCantAsientosTotales(){return $this->cantAsientosTotales;}
    public function getCantAsientosDisponibles(){return $this->cantAsientosDisponibles;}
    public function getPersonaResp(){return $this->personaResp;}
    //metodos de acceso set
    public function setNumVuelo($nVuelo){$this->numVuelo = $nVuelo;}
    public function setImportacion($imp){$this->importacionV = $imp;}
    public function setFecha($fecha){$this->fechaV = $fecha;}
    public function setDestino($dest){$this->destinoV = $dest;}
    public function setHoraLlegada($hsLleg){$this->horaLlegada = $hsLleg;}
    public function setHoraPartida($hsPartida){$this->horaPartida = $hsPartida;}
    public function setCantAsientosTotales($cantAsientosT){$this->cantAsientosTotales = $cantAsientosT;}
    public function setCantAsientosDisponibles($cantAsientosDisp){$this->cantAsientosDisponibles = $cantAsientosDisp;}
    public function setPersonaResp($responsable){$this->personaResp = $responsable;}
    //metodo asignar asintos disponibles
    public function asignarAsientosDisponibles($cantPersonas){
        $salida = false;
        if($cantPersonas <= $this->getCantAsientosDisponibles()){
            $salida = true;
        }
        return $salida;
    }
}