<?php

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 18/11/16
 * Time: 09:35
 */
namespace AppBundle\Security\Firewall;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Firewall\ExceptionListener as BaseExceptionListener;

class ExceptionListener extends BaseExceptionListener
{
    protected function setTargetPath(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            return;
        }
        parent::setTargetPath($request);
    }
}
