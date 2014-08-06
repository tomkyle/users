<?php
/**
 * This file is part of tomkyle/tomkyle/users
 *
 * @author  Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Users;

use \tomkyle\Emails\EmailInterface;
use \tomkyle\Permissions\PermissionsAwareTrait;
use \tomkyle\Roles\RolesAwareTrait;



abstract class UserAbstract implements UserInterface
{

    use PermissionsAwareTrait,
        RolesAwareTrait;

    protected $display_name;
    protected $user_id;
    protected $user_name;
    protected $first_name;
    protected $last_name;
    protected $login_name;
    protected $email;
    protected $api_key;



    public function getId()
    {
        return $this->getUserId();
    }




/**
 * Returns the users API key (if defined)
 *
 * @return string|null
 * @uses   $api_key
 */
    public function getApiKey()
    {
        return $this->api_key;
    }


/**
 * Sets the users API key
 *
 * @return string
 * @uses   $api_key
 */
    public function setApiKey( $key )
    {
        $this->api_key = $key;
        return $this;
    }



/**
 * Returns a concatenation of the users' first and last name.
 *
 * @return string
 * @uses   getFirstName()
 * @uses   getLastName()
 */
    public function getFullName() {
        return trim($this->getFirstName() . ' ' . $this->getLastName());
    }






/**
 * @uses $display_name
 */
    public function setDisplayName($display_name)
    {
        $this->display_name = $display_name;
        return $this;
    }



/**
 * @return string
 * @uses   $display_name
 */
    public function getDisplayName()
    {
        return $this->display_name;
    }








/**
 * Sets the database ID (primary key) of the user.
 *
 * @param  int|string $userid
 * @return \tomkyle\Users\UserAbstract Fluent Interface
 * @uses   $user_id
 */
    public function setUserId($userid)
    {
        $this->user_id = $userid;
        return $this;
    }


/**
 * Returns the database ID (primary key) of the user.
 *
 * @uses $user_id
 */
    public function getUserId()
    {
        return $this->user_id;
    }




/**
 * @param  string $name
 * @return \tomkyle\Users\UserAbstract Fluent Interface
 * @uses   $first_name
 */
    public function setFirstName($name)
    {
        $this->first_name = $name;
        return $this;
    }


/**
 * @uses $first_name
 */
    public function getFirstName()
    {
        return $this->first_name;
    }




/**
 * @param  string $name
 * @return \tomkyle\Users\UserAbstract Fluent Interface
 * @uses   $last_name
 */
    public function setLastName($name)
    {
        $this->last_name = $name;
        return $this;
    }


/**
 * @uses $last_name
 */
    public function getLastName()
    {
        return $this->last_name;
    }



/**
 * @param  string $name
 * @return \tomkyle\Users\UserAbstract Fluent Interface
 * @uses   $login_name
 */
    public function setLoginName($name)
    {
        $this->login_name = $name;
        return $this;
    }


/**
 * @uses $login_name
 */
    public function getLoginName()
    {
        return $this->login_name;
    }





/**
 * @param  EmailInterface $email
 * @return \tomkyle\Users\UserAbstract Fluent Interface
 */
    public function setUserEmail(EmailInterface $email)
    {
        $this->email = $email;
        return $this;
    }


/**
 * @uses $email
 */
    public function getUserEmail()
    {
        return $this->email;
    }






} // User
