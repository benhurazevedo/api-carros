<?php

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
		,'DSN' => 'sqlsrv:SERVER=DESKTOP-7P45RR1\SQLEXPRESS;DATABASE=carros-avioes'
		,'DATABASE_USER' => 'sa'
		,'DB_PASSWORD' => 'Bqnepc40'
    ]
]);
?>