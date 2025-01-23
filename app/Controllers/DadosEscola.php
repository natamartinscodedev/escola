<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\escola;
use App\Models\prof;
use App\Models\alunos;

class InfoEscola extends Controller
{
    public function escola(){
        $modEscola = new escola();

        $data = [
            'dadosEscola' => $modEscola->findAll(),
            'title' => 'Escolas'
        ];

        if($data === false)
        {
            throw new Exception("Erro ao carregar dados da escola", 400);
        }

        return $this->response->setJSON($data);
    }

    public function prof() {
        $modProf = new prof();

        $data = [
            'dadosProf' => $modProf->findAll(),
            'title' => 'Professores'
        ];
    }

    public function aluno() {
        $modAluno = new alunos();

        $data = [
            'dadosAluno' => $modAluno->findAll(),
            'title' => 'Alunos'
        ];
    }
}