<?php

namespace App\Controllers\Entreprise;
use App\Controllers\Controller;

class EntrepriseController extends Controller{

    public function listEntreprise()
    {
        return $this->view('entreprise.listEntreprise');
    }
}