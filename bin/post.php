<?php

$entryData = array(
    'category' => 'kittensCategory',
    'title'    => 'Kitten article title',
    'article'  => 'Kitten article text',
    'when'     => time(),
);

// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://localhost:5555");

$socket->send(json_encode($entryData));
