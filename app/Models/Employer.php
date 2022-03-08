<?php

namespace App\Models;

class Employer extends Model{

    protected $table = 'employer';

    public function create($nomEmployer, $prenomEmployer, $email, $password, $admin_id){
        return $this->query("INSERT INTO employer VALUES (NULL, :nomEmployer, :prenomEmployer, :email, :password, :admin_id");
    }

    public function getByEmailEmployer(string $email):Employer
    {
        return $this->query("SELECT * FROM {$this->table} WHERE email = ?", [$email], true);
    }
}
