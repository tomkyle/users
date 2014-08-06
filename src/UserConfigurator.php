<?php
/**
 * This file is part of tomkyle/tomkyle/users
 *
 * @author  Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Users;

use \tomkyle\Users\NoUserIdGivenException;

use \tomkyle\Roles\ApplyRolesStorage;
use \tomkyle\Permissions\ApplyPermissionsStorage;

use \tomkyle\Emails\Email;
use \tomkyle\MVC\Exceptions\NoRecordFound;


/**
 * @author Carsten Witt <tomkyle@posteo.de>
 */
class UserConfigurator {


    /**
     * Retrieves information about the user from the database.
     *
     * @param UserInterface $user
     * @param PDO           $pdo
     */
    public function __construct( UserInterface $user, \PDO $pdo )
    {

        if (!$userid = $user->getUserId()) {
            throw new NoUserIdGivenException;
        }

        $sql = 'SELECT
        user_first_name,
        user_last_name,
        user_display_name,
        user_email,
        user_login_name,
        api_key
        FROM tomkyle_users
        WHERE id = :id
        LIMIT 1';

        $stmt = $pdo->prepare( $sql );


        $bool = $stmt->execute([
          ':id' => $userid
        ]);


        if ( !$res = $stmt->fetch( \PDO::FETCH_OBJ ) ) {
          throw new NoRecordFound;
        }

        // Insert users fields here
        $user->setLoginName(   $res->user_login_name   );
        $user->setFirstName(   $res->user_first_name   );
        $user->setLastName(    $res->user_last_name    );
        $user->setDisplayName( $res->user_display_name );
        $user->setApiKey(      $res->api_key );
        $user->setUserEmail(new Email( $res->user_email ));


        new ApplyRolesStorage(  $user, $pdo );
        new ApplyPermissionsStorage( $user, $pdo );
    }

}
