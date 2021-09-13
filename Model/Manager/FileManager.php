<?php
namespace App\Model\Entity;

use App\Entity\User;
use Model\DB;

class FileManager {

    public function fileById(User $user_fk): bool {
        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE user_fk= :idUser");
        $request->bindValue("idUser", $user_fk->getId());
        $request->execute();
        return $request;
    }


}