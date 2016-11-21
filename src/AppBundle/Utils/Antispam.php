<?php

namespace AppBundle\Utils;
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 21/11/16
 * Time: 13:49
 */
class Antispam
{
    /**
     * @var \Swift_Mailer $mailer
     */
    private $mailer;

    /**
     * @var string $locale
     */
    private $locale;

    /**
     * @var integer $minLength
     */
    private $minLength;

    /**
     * Antispam constructor.
     * @param \Swift_Mailer $mailer
     * @param string $locale
     * @param int $minLength
     */
    public function __construct(\Swift_Mailer $mailer, $locale, $minLength)
    {
        $this->mailer = $mailer;
        $this->locale = $locale;
        $this->minLength = (int) $minLength;
    }
    
    public function isSpam($text) {
        $forbidden_words = array('sex', 'sexe');
        if (in_array($text, $forbidden_words)) {
            return true;
        }
        return strlen($text) < $this->minLength;
    }
}
