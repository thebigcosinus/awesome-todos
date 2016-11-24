<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 23/11/16
 * Time: 13:00
 */

namespace AppBundle\Validator;


use Symfony\Component\Validator\Constraint;

/**
 * Class ContainsAlphanumeric
 * @package AppBundle\Validator
 * @Annotation
 */
class ContainsAlphanumeric extends Constraint
{
    public $message = "The string %string% contains an illegal caracter: it can only contains number or letters";
}
