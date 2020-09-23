<?php
use \dbService\CarrosDAO;
use \dbService\ConectorDAO;
// DIC configuration
$container = $app->getContainer();


$container['dbConnService'] = function ($c)
{
    return new ConectorDAO ($c);
};

// db service
$container['CarrosDAO'] = function ($c) 
{  
    $carrosDAO = new CarrosDAO($c);
    
    return $carrosDAO;
};

// controller
$container['controllers\TesteController'] = function ($c) {
    return new controllers\TesteController( $c['view'], $c['router'], $c['dbTesteService']);
};