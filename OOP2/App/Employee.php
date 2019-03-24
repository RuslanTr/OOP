<?php



namespace App\Employee;

class Employee extends User
{
    public $role;

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role): void
    {
        $this->role = $role;
    }

}
