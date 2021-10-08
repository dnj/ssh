<?php

namespace dnj\SSH\Contracts;

use dnj\Filesystem\Contracts\IFile;

interface ISFTP
{
    public function getConnection(): IConnection;

    /**
     * @return static
     */
    public function chmod(string $filename, int $mode): self;

    /**
     * @return array<string,int> see the documentation for stat() for details on the values which may be returned
     */
    public function lstat(string $path): array;

    /**
     * @return static
     */
    public function mkdir(string $dirname, int $mode, bool $recursive): self;

    public function readlink(string $link): string;

    public function realpath(string $filename): string;

    /**
     * @return static
     */
    public function rename(string $from, string $to): self;

    /**
     * @return static
     */
    public function rmdir(string $dirname): self;

    /**
     * @return array<int|string,int> see the documentation for stat() for details on the values which may be returned
     */
    public function stat(string $path): array;

    /**
     * @return static
     */
    public function symlink(string $target, string $link): self;

    /**
     * @return static
     */
    public function unlink(string $filename): self;

    /**
     * @return static
     */
    public function write(string $path, string $data, bool $append): self;

    public function read(string $path, ?int $length): string;

    public function size(string $path): int;

    public function md5(string $path, bool $raw): string;

    public function sha1(string $path, bool $raw): string;

    public function isFile(string $path): bool;

    public function isDir(string $path): bool;

    public function fileExists(string $path): bool;

    /**
     * @return string[]
     */
    public function scanDir(string $path): array;

    /**
     * @return static
     */
    public function touch(string $path, ?int $modifiedTime, ?int $accessTime): self;

    /**
     * @return static
     */
    public function upload(IFile $local, string $remote): self;

    /**
     * @return static
     */
    public function download(string $remote, IFile $local): self;
}
