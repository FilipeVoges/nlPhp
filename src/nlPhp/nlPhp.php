<?php

namespace nlPhp;

use nlPhp\Interfaces\Application;
use nlPhp\Entities\Question;
use nlPhp\Entities\Intetion;

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
     * @var String
     */
    private static $filePath = __DIR__ . '/../../data/learned.json';

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
        if(file_exists(self::$filePath)){
            $this->words = readJson(self::$filePath);
        }else{
            saveJson(self::$filePath, array());
            $this->words = readJson(self::$filePath);
        }
    }

    /**
     * @see nlPhp\Interfaces\Application::toAsk
     */
    public function toAsk($question) : Intetion {
        $this->question = new Question($question);
    }
}
