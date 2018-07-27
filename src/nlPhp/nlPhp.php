<?php

namespace nlPhp;

use nlPhp\Interfaces\Application;
use nlPhp\Entity\Question;
use nlPhp\Entity\Intetion;

/**
 * \nlPhp
 *
 * Main Application Class
 *
 * @author Filipe Voges <filipe.voges@vapps.com.br>
 * @since 2018
 * @package nlPhp
 * @version 1.0
 */
class nlPhp implements Application {

    /**
     * @var \Stdclass
     */
    private $words;

    /**
     * @var \Question
     */
    private $question;

    /**
     * @var \Intetion
     */
    private $intetion;

    /**
     * Construct Class
     */
    public function __construct(){
    }

    /**
     * @see nlPhp\Interfaces\Application::toAsk
     */
    public function toAsk($question) : Intetion {
        $this->question = new Question($question);
    }
}
