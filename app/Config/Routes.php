<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// get
$routes->get('/dados', 'DadosEscola::infoEscola');

// post
// $routes->post('/escola', 'Cadastro::escola');
// $routes->post('/prof', 'Cadastro::prof');
// $routes->post('/aluno', 'Cadastro::aluno');
