<?php
namespace App\Entity;

class User {

    private ?int $id;
    private ?string $email;
    private ?string $password;

    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $email
     * @param string|null $password
     */
    public function __construct(int $id = null, string $email = null, string $password = null) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }

}