<?php

namespace BlankFramework\Interfaces\Database\Sql;

interface QueryInterface
{
    /**
     * @param string $columns List of all the columns that you would like to select
     */
    public function select(string ...$columns): QueryInterface;
    public function from(string $tableName, string $alias): QueryInterface;
    public function insert(string $tableName): QueryInterface;
    public function update(string $tableName): QueryInterface;
    public function delete(string $tableName): QueryInterface;
    /**
     * @param mixed $value
     */
    public function set(string $columnName, $value, int $type = 0): QueryInterface;
    /**
     * @param array<string, string> $columns
     * @param array<string, mixed> $values
     * @param array<string, mixed> $types
     */
    public function values(array $columns, array $values, array $types = []): QueryInterface;
    /**
     * @param mixed $value
     */
    public function where(string $columnName, $value, string $operator = '=', int $type = 0): QueryInterface;
    /**
     * @param string[]|int[]|float[] $values
     */
    public function whereIn(string $columnName, array $values): QueryInterface;
    /**
     * @param mixed $value
     */
    public function orWhere(string $columnName, $value, string $operator = '=', int $type = 0): QueryInterface;
    /**
     * @param string[]|int[]|float[] $values
     */
    public function orWhereIn(string $columnName, array $values): QueryInterface;
    /**
     * @param mixed $value
     */
    public function andWhere(string $columnName, $value, string $operator = '=', int $type = 0): QueryInterface;
    /**
     * @param string[]|int[]|float[] $values
     */
    public function andWhereIn(string $columnName, array $values): QueryInterface;
    public function join(string $type, string $tableName, string $on, string $alias): QueryInterface;
    public function innerJoin(string $tableName, string $on, string $alias): QueryInterface;
    public function leftJoin(string $tableName, string $on, string $alias): QueryInterface;
    public function rightJoin(string $tableName, string $on, string $alias): QueryInterface;

    /**
     * @return array<string, mixed>
     */
    public function fetch(): ?array;
    /**
     * @return array<array<string, mixed>>
     */
    public function fetchAll(): array;
    public function execute(): int;
}
