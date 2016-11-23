<?php

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 18/11/16
 * Time: 13:44
 */
namespace AppBundle\Security\Voters;

use AppBundle\Entity\Post;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class PostVoter extends Voter
{

    const VIEW = 'view';
    
    const EDIT =  'edit';

    private $decisionManager;

    /**
     * PostVoter constructor.
     * @param $decisionManager
     */
    public function __construct(AccessDecisionManagerInterface $decisionManager)
    {
        $this->decisionManager = $decisionManager;
    }

    /**
     * @param string $attribute
     * @param mixed $subject
     * @return mixed
     */
    protected function supports($attribute, $subject)
    {
        if (!in_array($attribute, array(self::VIEW, self::EDIT), false)) {
            return false;
        }
        if (!$subject instanceof Post) {
            return false;
        }
        return true;
    }

    /**
     * @param string $attribute
     * @param mixed $subject
     * @param TokenInterface $token
     * @return mixed
     */
    protected function voteOnAttribute(
        $attribute,
        $subject,
        TokenInterface $token
    ) {
        //ROLE SUPER ADMIN ACCES TOUT
        if ($this->decisionManager->decide($token, array('ROLE_SUPER_ADMIN'))) {
            return true;
        }

        $user = $token->getUser();
        
        if (!$user instanceof User) {
            return false;
        }
        
        $post = $subject;
        
        /** @var Post $post*/
        switch ($attribute) {
            case self::VIEW:
                return $this->canView($post, $user);
            case self::EDIT:
                return $this->canEdit($post, $user);
        }
    }

    private function canView($post, $user)
    {
        if ($this->canEdit($post, $user)) {
            return true;
        }
        return !$post->isPrivate();
    }

    private function canEdit($post, $user)
    {
        return $user === $post->getOwwner();
    }
}
