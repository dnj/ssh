<?php

namespace dnj\SSH\Contracts;

interface IProcess
{
    public function getConnection(): IConnection;

    public function getOutput(): string;

    public function getError(): string;
}
