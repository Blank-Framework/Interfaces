<?php

namespace BlankFramework\Interfaces\Database\Sql;

interface QueryInterface
{
    /**
     * @param string[] $columns List of all the columns that you would like to select
     */
    public function select(array $columns = []): static;
    public function from(string $tableName, string $alias): static;
    public function insert(string $tableName): static;
    public function update(string $tableName): static;
    public function delete(string $tableName): static;
    /**
     * @param mixed $value
     */
    public function set(string $columnName, $value): static;
    /**
     * @param array<string, string> $columns
     * @param array<string, mixed> $values
     */
    public function value(array $columns, array $values): static;
    /**
     * @param mixed $value
     */
    public function where(string $columnName, $value, string $operator = '='): static;
    /**
     * @param mixed $value
     */
    public function orWhere(string $columnName, $value, string $operator = '='): static;
    /**
     * @param mixed $value
     */
    public function andWhere(string $columnName, $value, string $operator = '='): static;
    public function fetchOne(bool $associative = true): array|\stdClass;
    /**
     * @return array<\stdClass>|array<array<string, mixed>>
     */
    public function fetchAll(bool $associative = true): array;
}
