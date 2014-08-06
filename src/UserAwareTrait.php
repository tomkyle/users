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
trait UserAwareTrait
{


    protected $user;


/**
 * @param  \tomkyle\Users\UserInterface $user
 * @return object Fluent Interface
 *
 * @uses   $user
 */
    public function setUser ( UserInterface $user)
    {
        $this->user = $user;
        return $this;
    }


/**
 * @return \tomkyle\Users\UserInterface
 *
 * @uses   $user
 */
    public function getUser ()
    {
        return $this->user;
    }


}
