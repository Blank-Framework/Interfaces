<?php

namespace BlankFramework\Interfaces\Database\Sql;

interface DatabaseConnectionInterface
{
    public function queryBuilder(): QueryInterface;
    public function lastInsertId(): ?int;
}
