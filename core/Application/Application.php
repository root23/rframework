<?php

namespace Rframework\Core\Application;

use Rframework\Core\Contracts\ApplicationContract;

class Application implements ApplicationContract
{
    /**
     * @var string
     */
    const VERSION = '2.28';

    /**
     * @param string $basePath
     */
    public function __construct(protected string $basePath = '')
    {
        if ($basePath) {
            $this->setBasePath($basePath);
        }
    }

    /**
     * @return string
     */
    public function version(): string
    {
        return static::VERSION;
    }

    /**
     * @return string
     */
    public function basePath(): string
    {
        return $this->basePath();
    }

    /**
     * @return void
     */
    public function run(): void
    {
        echo 'testing, app version is ' . $this->version();
    }

    /**
     * @param string $basePath
     * @return void
     */
    public function setBasePath(string $basePath): void
    {
        $this->basePath = rtrim($basePath, '\/');
    }
}
