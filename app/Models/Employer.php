<?php

namespace App\Models;

class Employer extends Model{

    protected $table = 'employer';


    public function getByEmailEmployer(string $email)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE email = ?", [$email], true);
    }

    public function addEmployer($nomEmployer, $prenomEmployer, $email, $password, $admin_id)
    {
        return $this->query( "INSERT INTO employer (nomEmployer, prenomEmployer, email, password, admin_id) VALUES ('$nomEmployer', '$prenomEmployer', '$email', '$password', '$admin_id')");

    }
}
