<?php
/**
 * This file is part of tomkyle/tomkyle/users
 *
 * @author  Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Users;

/**
 * @author Carsten Witt <tomkyle@posteo.de>
 */
class User extends UserAbstract implements UserInterface
{



    /**
     * @return string The user name
     */
    public function __toString()
    {
        return $this->getDisplayname() ?:
                 ($this->getFullName() ?: $this->getLoginName());
    }



}

