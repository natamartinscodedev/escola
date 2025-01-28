<?php
namespace App\Controllers;

use App\Models\escola;
use App\Models\prof;
use App\Models\alunos;

class DadosEscola extends BaseController
{
    public function infoEscola() {
        $modEscola = new escola();

        $data = [
            'dadosEscola' => $modEscola->findAll(),
            'title' => 'Escola'
        ];

        if($data === false)
        {
            throw new Exception("Erro ao carregar dados da escola", 400);
        }

        // return $this->res->setJSON($data);
        return view('/escola', $data);
    }

    public function infoProf() {
        $modProf = new escola();

        $data = [
            'dadosProf' => $modProf->findAll(),
            'title' => 'Professores'
        ];

        if($data === false)
        {
            throw new Exception("Erro ao carregar dados da escola", 400);
        }   

        // return $this->res->setJSON($data);
        return view('/prof', $data);
    }

    public function infoAluno() {
        $modAluno = new alunos();

        $data = [
            'dadosAluno' => $modAluno->findAll(),
            'title' => 'Alunos'
        ];
        
        return $this->res->setJSON($data);
    }
}