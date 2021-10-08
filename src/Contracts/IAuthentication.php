<?php

namespace dnj\SSH\Contracts;

interface IAuthentication
{
    /**
     * @return static
     */
    public function authenticate(IConnection $connection): self;
}
