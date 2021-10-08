<?php

namespace dnj\SSH\Contracts;

interface IPasswordAuthentication extends IAuthentication
{
    public function getUsername(): string;

    public function getPassword(): string;
}
