<?php
/**
 * This file is part of tomkyle/tomkyle/users
 *
 * @author  Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Users;

use \tomkyle\Emails\EmailInterface;
use \tomkyle\Permissions\PermissionsAwareInterface;
use \tomkyle\Roles\RolesAwareInterface;
/**
 * @author Carsten Witt <tomkyle@posteo.de>
 */
interface UserInterface extends PermissionsAwareInterface, RolesAwareInterface
{

    /**
     * @return string
     */
    public function __toString();


    public function getApiKey();

    public function setApiKey( $key );



    /**
     * @return string
     */
    public function getFullName();



    public function setDisplayName( $name );

    public function getDisplayName();



    /**
     * @param int $id
     */
    public function setUserId($id);

    /**
     * @return int
     */
    public function getUserId();



    /**
     * @param string $name
     */
    public function setFirstName($name);

    /**
     * @return string
     */
    public function getFirstName();


    /**
     * @param string $name
     */
    public function setLastName($name);

    /**
     * @return string
     */
    public function getLastName();





    /**
     * @param string $name
     */
    public function setLoginName($name);

    /**
     * @return string
     */
    public function getLoginName();




    /**
     * @param string $email
     */
    public function setUserEmail(EmailInterface $email);


    /**
     * @return string
     */
    public function getUserEmail();



}
