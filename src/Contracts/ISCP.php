<?php

namespace dnj\SSH\Contracts;

use dnj\Filesystem\Contracts\IFile;

interface ISCP
{
    public function getConnection(): IConnection;

    /**
     * @return static
     */
    public function upload(IFile $local, string $remote, int $createMode): self;

    /**
     * @return static
     */
    public function download(string $remote, IFile $local): self;
}
