<?php

namespace nlPhp\Interfaces;

use nlPhp\Entity\Intetion;

/**
 * \Application
 *
 * Main Application Interface
 *
 * @author Filipe Voges <filipe.voges@vapps.com.br>
 * @since 2018
 * @package nlPhp\Interfaces
 * @version 1.0
 */
interface Application {

    /**
     * Ask a question and return the intention
     *
     * @param $question String
     * @return \Intetion
     * @throws \Exception
     */
    public function toAsk($question) : Intetion;
}
