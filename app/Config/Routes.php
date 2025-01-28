<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// get
$routes->get('/', 'DadosEscola::infoEscola');
$routes->get('/dadosProf', 'DadosEscola::infoProf');
$routes->get('/dadosAluno', 'DadosEscola::infoAluno');

// post
$routes->post('/registerProf', 'Cadastro::prof');
$routes->post('/registerAluno', 'Cadastro::aluno');

// update
$routes->put('/updateProf', 'EditarUsers::updateProf');
$routes->put('/updateAluno', 'EditarUsers::updateAluno');