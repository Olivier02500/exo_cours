<?php

use App\Model\Entity\Role;
use App\Model\Manager\RoleManager;

require __DIR__ . '/include.php';

$roleManager = new RoleManager();
$roles = $roleManager->findAll();

foreach ($roles as $role) {
    /* @var Role $role */
    $id = $role->getId();
    $name = $role->getRoleName();
}
