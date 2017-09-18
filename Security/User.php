<?php

namespace Odiseo\Bundle\UserBundle\Security;

use Sylius\Component\User\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser implements UserInterface
{
    /**
     * {@inheritdoc}
     */
    public function setUsername(?string $username): void
    {
        parent::setUsername($username);

        $this->setUsernameCanonical($username);
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail(?string $email): void
    {
        parent::setEmail($email);

        $this->setEmailCanonical($email);
    }
}