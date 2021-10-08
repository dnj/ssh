<?php

namespace dnj\SSH\Contracts;

interface IConnector
{
    public function connect(string $hostname, int $port): IConnection;
}
