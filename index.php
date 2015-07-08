<?php 

use Shahinpackage\Repositories\UserRepository as UserRepository;
use Shahinpackage\Filters\AuthFilter as AuthFilter;

require_once 'app/start.php';

// $topic = new Topic();

$authFilter = new AuthFilter();