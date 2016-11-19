<?php

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 17/11/16
 * Time: 16:35
 */
namespace  AppBundle\EventListener;


use Symfony\Component\Security\Http\Event\SwitchUserEvent;

class SwitchUserListener
{
    public function onSwitchUser(SwitchUserEvent $event) {
        $event->getRequest()->getSession()->set(
            '_locale',
            $event->getTargetUser()->getLocale()
        );
    }
}
