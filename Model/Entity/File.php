<?php

use App\Entity\User;

class File {
    private ?int $id;
    private ?User $user_fk;

    /**
     * User constructor.
     * @param int|null $id
     * @param User|null $user_fk
     */
    public function __construct(int $id =null,User $user_fk = null) {
        $this->id = $id;
        $this->user_fk = $user_fk;

    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return User|null
     */
    public function getUserFk(): ?User
    {
        return $this->user_fk;
    }

    /**
     * @param User|null $user_fk
     */
    public function setUserFk(?User $user_fk): void
    {
        $this->user_fk = $user_fk;
    }

}