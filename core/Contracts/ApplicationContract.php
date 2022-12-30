<?php

namespace Rframework\Core\Contracts;

interface ApplicationContract
{
    /**
     * @return string
     */
    public function version(): string;

    /**
     * @return void
     */
    public function run(): void;

    /**
     * @return string
     */
    public function basePath(): string;

    /**
     * @param string $basePath
     * @return void
     */
    public function setBasePath(string $basePath): void;
}
