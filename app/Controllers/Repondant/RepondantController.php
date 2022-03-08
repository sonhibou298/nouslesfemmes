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
        return $this->view('repondant.addRepondant');
    }
}