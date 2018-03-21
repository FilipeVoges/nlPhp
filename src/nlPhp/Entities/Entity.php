<?php

namespace nlPhp\Entities;

/**
 * \Entity
 *
 * @author Filipe Voges <filipe.voges@vapps.com.br>
 * @since 2018
 * @package nlPhp\Entities
 * @version 1.0
 */
abstract class Entity {

    /**
     * Getter Generic
     *
     * @param $property | String
     * @return mixed
     */
    public function get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }else{
            throw new \Exception('Property does not exist. Property Name: '. $property, 500);
        }
    }

    /**
     * Setter Generic
     *
     * @param $property | String
     * @param $value | mixed
     * @return void
     */
    public function set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }else{
            throw new \Exception('Property does not exist. Property Name: '. $property, 500);
        }
    }

    /**
     * returns a Attributes of Class
     *
     * @return Array
     */
    public function getAttibutes(){
        return get_object_vars($this);
    }
}
