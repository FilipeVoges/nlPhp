<?php

namespace nlPhp\Exception;

/**
 * \nlPhpException
 *
 * @author Filipe Voges <filipe.voges@vapps.com.br>
 * @since 2018-07-23
 * @package nlPhp\Exception
 * @version 0.1
 */
class nlPhpException extends \Exception {

    /**
     * Construct class
     *
     * @param String $message
     * @param Integer [$code = 500]
     */
    public function __construct($message, $code = 500){
        parent::construct($message, $code);
    }
}
