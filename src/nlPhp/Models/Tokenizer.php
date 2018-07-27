<?php

namespace nlPhp\Models;

/**
 * \Tokenizer
 *
 * Tokenizer Model for strings
 *
 * @author Filipe Voges <filipe.voges@vapps.com.br>
 * @since 2018-07-27
 * @package nlPhp\Models
 * @version 0.1
 */
class Tokenizer implements Tokenizer{

    private $tokenExp = null;

    /**
     * Construct Class
     *
     * @param $tokenExp String
     */
    public function __construct($tokenExp = " \n\t\r,-!?"){
        $this->tokenExp = $tokenExp;
    }


    /**
     * @see 
     * @param $str String
     * @return Attay
     */
    public function tokenize(string $str) : array{
        return $this->strProccess($str);
    }

    /**
     * Processes a String and transforms it into a token
     *
     * @param $str String
     * @return Array
     */
    private function strProccess(string $str) : array{
        $token = strtok($str, $this->tokenExp);

        $tokens = array();
        while($token !== false){
            if(!empty(trim($token))){
                $tokens[] = $token;
            }
            $token = strtok($this->tokenExp);
        }

        return $tokens;
    }
}
