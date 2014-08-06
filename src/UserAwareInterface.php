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
interface UserAwareInterface
{

/**
 * @param  \tomkyle\Users\UserInterface $user
 * @return UserAwareInterface Fluent Interface
 */
    public function setUser (UserInterface $user);

/**
 * @return \tomkyle\Users\UserInterface
 */
    public function getUser ();

}
