<?php

namespace AppBundle\Validator;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntifloodValidator extends ConstraintValidator
{

    private $requestStack;
    private $em;

    /**
     * AntifloodValidator constructor.
     * @param $requestStack
     * @param $em
     */
    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    /**
     * @param mixed $value
     * @param Constraint $constraint
     * @return mixed
     */
    public function validate($value, Constraint $constraint)
    {
        $request = $this->requestStack->getCurrentRequest();

        $ip = $request->getClientIp();

        $isFlood = $this->em
            ->getRepository('AppBundle:Todo')
            ->isFlood($ip, 15);

        if ($isFlood) {
            $this->context->addViolation($constraint->message);
        }
        /*if (strlen($value) < 3) {
            //$this->context->addViolation($constraint->message);
            $this->context->buildViolation($constraint->message)
                ->setParameters(array('%string%' => $value))
                ->addViolation();
        }*/
    }
}
