<?php

namespace SRC\Modelo;
class Pelicula{
    private string $titulo;
private string $caratula;
private string $resumen;
private string $fechaEstreno;
private string $poster;



public function __construct()
{
    
}


    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }
    

/**
 * Get the value of caratula
 */ 
public function getCaratula()
{
return $this->caratula;
}

/**
 * Set the value of caratula
 *
 * @return  self
 */ 
public function setCaratula($caratula)
{
$this->caratula = $caratula;

return $this;
}


/**
 * Get the value of resumen
 */ 
public function getResumen()
{
return $this->resumen;
}

/**
 * Set the value of resumen
 *
 * @return  self
 */ 
public function setResumen($resumen)
{
$this->resumen = $resumen;

return $this;
}


/**
 * Get the value of fechaEstreno
 */ 
public function getFechaEstreno()
{
return $this->fechaEstreno;
}

/**
 * Set the value of fechaEstreno
 *
 * @return  self
 */ 
public function setFechaEstreno($fechaEstreno)
{
$this->fechaEstreno = $fechaEstreno;

return $this;
}


/**
 * Get the value of poster
 */ 
public function getPoster()
{
return $this->poster;
}

/**
 * Set the value of poster
 *
 * @return  self
 */ 
public function setPoster($poster)
{
$this->poster = $poster;

return $this;
}
}
