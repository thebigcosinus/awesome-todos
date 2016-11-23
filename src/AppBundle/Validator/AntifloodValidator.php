<?php

namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntifloodValidator extends ConstraintValidator
{

    /**
     * @param mixed $value
     * @param Constraint $constraint
     * @return mixed
     */
    public function validate($value, Constraint $constraint)
    {
        if (strlen($value) < 3) {
            //$this->context->addViolation($constraint->message);
            $this->context->buildViolation($constraint->message)
                ->setParameters(array('%string%' => $value))
                ->addViolation();
        }
    }
}
