<?php

class Client
{
    private string $host;
    private string $name;
    private string $user;
    private string $password;
    private \PDO   $connection;

    public function __construct(string $host, string $name, string $user, string $password)
    {
        $this->host     = $host;
        $this->name     = $name;
        $this->user     = $user;
        $this->password = $password;

        $this->init();
    }

    private function init(): void
    {
        $dsn = sprintf('mysql:dbname=%s;host=%s', $this->name, $this->host);

        $this->connection = new \PDO($dsn, $this->user, $this->password);
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }

    public function getName(): string
    {
        return $this->name;
    }
}