<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 23/11/16
 * Time: 13:03
 */

namespace AppBundle\Validator;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ContainsAlphanumericValidator extends ConstraintValidator
{

    /**
     * @param mixed $value
     * @param Constraint $constraint
     * @return mixed
     */
    public function validate($value, Constraint $constraint)
    {
        if (!preg_match('/^[a-zA-Z0-9]+$/', $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameters('%string%', $value)
                ->addViolation()
                ;
        }
    }


}
