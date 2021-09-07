<?php
namespace App\Model\Entity;

use App\Entity\Admin;
use App\Entity\User;
use Model\DB;

class UserManager {

    /** Return a user by id */

    /** Return an User (by mail) if existing or null
    * @param string $email
    * @return bool
    */
    public function existUser(string $email): bool {
        $request = DB::getInstance()->prepare("SELECT count(*) as cnt FROM user WHERE email = :mail");
        $request->bindValue(':mail', $email);
        $request->execute();
        return intval($request->fetch()['cnt']) > 0;
    }

    /** Add user
     * @param User $user
     * @return bool
     */
    public function addUser(User &$user): bool {
        $request = DB::getInstance()->prepare("
            INSERT INTO user (email,password) 
                 VALUES(:mail,:password)
        ");

        $request->bindValue(":mail", $user->getEmail());
        $request->bindValue(":password", DB::encodePassword($user->getPassword()));
        $result = $request->execute();
        $user->setId(DB::getInstance()->lastInsertId());
        return $result;
    }

    /** Delete user
     * @param User $user
     * @return bool
     */
    public function deleteUser(User $user): bool {
        $request = DB::getInstance()->prepare("DELETE FROM user WHERE id=:id");
        $request->bindValue(":id", $user->getId());
        return  $request->execute();
    }

}



