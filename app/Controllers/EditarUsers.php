<?php
namespace App\Controllers;

class EditarUsers extends BaseController
{
    public function editProf($id)
    {
        return view('editarUsers');
    }

    public function editAluno($id)
    {
        return view('editarUsers');
    }
}