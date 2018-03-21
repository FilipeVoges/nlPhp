<?php

namespace nlPhp\Entities;

/**
 * \Question
 *
 * @author Filipe Voges <filipe.voges@vapps.com.br>
 * @since 2018
 * @package nlPhp\Entities
 * @version 1.0
 */
class Question extends Entity {

    /**
     * @var String
     */
    protected $question;

    /**
     * @var Array
     */
    protected $terms;

    /**
     * Construct Class
     *
     * @param $question String
     */
    public function __construct($question){
        $this->question = $question;

        $this->terms = explode(' ', $this->question);
        debug($this->terms, true);
    }
}
