<?php

namespace dnj\SSH\Contracts;

interface IConnection
{
    public function getHost(): string;

    public function getPort(): int;

    public function getFingerprint(FingerprintType $format, bool $raw): string;

    /**
     * @return static
     */
    public function login(IAuthentication $authentication): self;

    /**
     * @param array<string|number> $commandLine
     */
    public function execute(array $commandLine): IProcess;

    public function getScp(): ISCP;

    public function getSftp(): ISFTP;

    public function close(): void;
}
