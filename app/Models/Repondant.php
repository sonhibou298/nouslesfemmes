<?php
namespace App\Models;
use App\Models\Model;

class Repondant extends Model
{
    protected $table = 'repondant';

    public function addRepondant($nomRepondant, $prenomRepondant, $telephone, $courier, $profession, $employer_id)
    {
        return $this->query( "INSERT INTO repondant (nomRepondant, prenomRepondant, telephone, courier, employer_id) VALUES ('$nomRepondant', '$prenomRepondant', '$telephone', '$courier', '$profession', '$employer_id')");
    }
}