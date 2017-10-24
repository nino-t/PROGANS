<?php
    require __DIR__ . '/../vendor/autoload.php';

    use Ratchet\Server\IoServer;
    use Ratchet\Http\HttpServer;
    use Ratchet\WebSocket\WsServer;
    use MyApp\Notification;

    $server = IoServer::factory(
        new HttpServer(new WsServer(new Notification())),
        8080
    );

    $server->run();