<?php

namespace App\Model\Entity;

class Role extends AbstractEntity {

    private ?string $roleName;
    private ?int $type;
    private array $users;

    public function __construct()
    {
        $this->users = [];
    }

    /**
     * @return string|null
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    /**
     * @param string|null $roleName
     */
    public function setRoleName(?string $roleName): void
    {
        $this->roleName = $roleName;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int|null $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param array $users
     */
    public function setUsers(array $users): void
    {
        $this->users = $users;
    }

}
