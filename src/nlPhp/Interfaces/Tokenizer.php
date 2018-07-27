<?php

namespace nlPhp\Interfaces;

/**
 * \Tokenizer
 *
 * Main Tokenizer Interface
 *
 * @author Filipe Voges <filipe.voges@vapps.com.br>
 * @since 2018-07-27
 * @package nlPhp\Interfaces
 * @version 0.1
 */
interface Tokenizer {

    /**
     * Return tokenized array from string
     *
     * @param $str String
     * @return Array
     */
    public function tokenize($str) : array;
    
}
