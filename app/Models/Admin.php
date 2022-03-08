<?php
namespace App\Models;

class Admin extends Model
{
    protected $table = 'administrateur';

    public function getByEmailAdmin(string $emailAdmin):Admin
    {
        return $this->query("SELECT * FROM {$this->table} WHERE emailAdmin = ?", [$emailAdmin], true);
    }

}