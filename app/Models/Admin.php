<?php
namespace App\Models;

class Admin extends Model
{
    protected $table = 'administrateur';

    public function getByEmailAdmin(string $emailAdmin):Admin
    {

        return $this->query("SELECT * FROM {$this->table} WHERE emailAdmin = ?", [$emailAdmin], true);
    }


    public function addAdmin($nomAdmin, $prenomAdmin, $emailAdmin, $password)
    {
        return $this->query( "INSERT INTO administrateur (nomAdmin, prenomAdmin, emailAdmin, password) VALUES ('$nomAdmin', '$prenomAdmin', '$emailAdmin', '$password')");
    }

    public function delete(int $idAdmin): bool
    {
        return $this->query("DELETE FROM administrateur WHERE idAdmin = $idAdmin");
    }


}