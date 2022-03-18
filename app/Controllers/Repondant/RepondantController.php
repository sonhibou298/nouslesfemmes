<?php
namespace App\Controllers\Repondant;
use App\Controllers\Controller;
use App\Models\Repondant;

class RepondantController extends Controller
{
    public function listRepondant()
    {
       $repondant = (new Repondant($this->getDB()))->all();
       return $this->view("repondant.listRepondant", compact('repondant'));
    }
    public function addRepondant()
    {
        if (!empty($_POST))
        {
            $repondant = new Repondant($this->getDB());
            $nomRepondant =  $_POST['nomRepondant'];
            $prenomRepondant = $_POST['prenomRepondant'];
            $telephone = $_POST['telephone'];
            $courier = $_POST['courier'];
            $profession = $_POST['profession'];
            $employer_id = $_POST['employer'];

            $repondant = $repondant->addRepondant($nomRepondant, $prenomRepondant, $telephone, $courier, $profession, $employer_id);
            return header('location : listRepondant');
        }
        return $this->view('repondant.addRepondant');
    }
}