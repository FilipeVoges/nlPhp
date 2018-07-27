<?php

namespace nlPhp\Entity;

use nlPhp\Exception\nlPhpException;

/**
 * \Question
 *
 * @author Filipe Voges <filipe.voges@vapps.com.br>
 * @since 2018
 * @package nlPhp\Entity
 * @version 0.1
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
        if(!is_string($question)){
            throw new nlPhpException('You must enter a String.');
        }

        $this->question = $question;
        $this->terms = explode(' ', $this->question);

        $this->process();
    }

    /**
     * Process the question
     *
     * @return Void
     */
    private function process() : Void {
        debug($this->question);
        debug($this->terms, true);
    }
}
