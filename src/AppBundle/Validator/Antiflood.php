<?php

namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * Class Antiflood
 * @package AppBundle\Validator
 * @Annotation
 */
class Antiflood extends Constraint 
{
    
    public $message = "Vous avez déjà posté une tache %string% il y a moins de 15 secondes, merci d'attendre un peu";

    public function validateBy()
    {
        return 'app_antiflood';
    }
}
