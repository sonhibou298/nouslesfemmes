<?php

namespace App\Models;

class Employer extends Model{

    protected $table = 'employer';

    public function create($nomEmployer, $prenomEmployer, $email, $password, $admin_id){
        $add = $this->query("INSERT INTO employer VALUES (NULL, '$nomEmployer', '$prenomEmployer', '$email', '$password', '$admin_id'");
        return exec($add);
    }

    public function getByEmailEmployer(string $email):Employer
    {
        return $this->query("SELECT * FROM {$this->table} WHERE email = ?", [$email], true);
    }
}
