<?php
namespace App\Entity;

class Admin {

    private ?int $id;
    /**
     * @var User|null
     */
    private ?User $user_fk2;

    /**
     * @param int|null $id
     * @param User|null $user_fk2
     */
    public function __construct(int $id = null, User $user_fk2 = null) {
          $this->id = $id;
          $this->user_fk2=$user_fk2;

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
    public function getUserFk2(): ?User
    {
        return $this->user_fk2;
    }

    /**
     * @param User|null $user_fk2
     */
    public function setUserFk2(?User $user_fk2): void
    {
        $this->user_fk2 = $user_fk2;
    }

}
