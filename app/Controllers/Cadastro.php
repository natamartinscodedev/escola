<?php
// Cadastro de escola e professor
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\prof;
use App\Models\escola;
use App\Models\aluno;

class Cadastro extends Controller
{
    public function escola(){
        // criando uma const para cada campo do formulário e recebendo seus valores
        $name = $this->request->getPost('name', FILTER_SANITIZE_STRING);
        $tel = $this->request->getPost('tel', FILTER_SANITIZE_STRING);
        $email = $this->request->getPost('email', FILTER_SANITIZE_STRING);
        $site = $this->request->getPost('site', FILTER_SANITIZE_STRING);
        $response = $this->request->getPost('response', FILTER_SANITIZE_STRING);
        $cnpj = $this->request->getPost('cnpj', FILTER_SANITIZE_STRING);

        if(empty($name && $tel && $email && $site && $response && $cnpj)) 
        {
            throw new Exception("Os campos são obrigatórios", 400);            
        }

        // instanciando a model escola e chamando o método save para salvar os dados no banco   
        $escola = new escola();
        $res = $model->save([
            'name' => $name,
            'tel' => $tel,
            'email' => $email,
            'site' => $site,
            'response' => $response,  
            'cnpj' => $cnpj
        ]);

        if($res === false)
        {
            throw new Exception("Erro ao cadastrar escola", 400);
        }
        
        // retornando a resposta em formato JSON
        return $this->response->setJSON($res);
    }
    
    public function prof(){
        // Cadastro de professor, criando const para cada campo do formulário e recebendo seus valores
        $name = $this->request->getPost('name', FILTER_SANITIZE_STRING);
        $cpf = $this->request->getPost('cpf', FILTER_SANITIZE_STRING);
        $sala = $this->request->getPost('sala', FILTER_SANITIZE_STRING);
        $turno = $this->request->getPost('turno', FILTER_SANITIZE_STRING);

        if(empty($name && $cpf && $sala && $turno)) 
        {
            throw new Exception("Os campos são obrigatórios", 400);            
        }
       
        // instanciando a model prof e chamando o método save para salvar os dados no banco
        $prof = new prof();
        $res = $model->save([
            'name' => $name,
            'cpf' => $cpf,
            'sala' => $sala,
            'turno' => $turno
        ]);

        if($res === false)
        {
            throw new Exception("Erro ao cadastrar professor", 400);
        }
        
        // retornando a resposta em formato JSON
        return $this->response->setJSON($res);
    }

    public function aluno(){
        // criando uma const para cada campo do formulário e recebendo seus valores
        $nome = $this->request->getPost('nome', FILTER_SANITIZE_STRING);
        $cpf = $this->request->getPost('cpf', FILTER_SANITIZE_STRING);
        $idade = $this->request->getPost('idade', FILTER_SANITIZE_STRING);

        if(empty($name && $cpf && $idade)) 
        {
            throw new Exception("Os campos são obrigatórios", 400);            
        }
          
        // instanciando a model aluno e chamando o método save para salvar os dados no banco
        $aluno = new aluno();
        $res = $model->save([
            'nome' => $nome,
            'cpf' => $cpf,
            'idade' => $idade
        ]);

        if($res === false)
        {
            throw new Exception("Erro ao cadastrar aluno", 400);
        }
        
        // retornando a resposta em formato JSON
        return $this->response->setJSON($res);
    }
}