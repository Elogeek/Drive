<?php
namespace App\Model\Entity;

use App\Entity\Admin;
use App\Entity\User;
use Model\DB;

class UserManager {

    /** Return user null/not null and create user of null
     * @param int $id
     * @return User|null
     */
    public function getById(int $id): ?User {

        $user = null;
        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE id= :id");
        $request->bindValue(':id', $id);
        $result = $request->execute();
        $data = $request->fetch();

            if($result && $data) {
                $user = new User($data['id'], $data['email']);
        }
    return $user;

    }
