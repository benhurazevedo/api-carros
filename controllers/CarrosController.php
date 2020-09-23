<?php
namespace controllers;

use \Slim\Container;

final class CarrosController
{
	private $container;

	public function __construct(Container $c)
    {
        $this->container = $c;
    }
	public function __invoke($request, $response, $next)
    {
		$CarrosDAO = $this->container['CarrosDAO'];
			
        return $response->withJson($CarrosDAO->list(),200);
    }
}