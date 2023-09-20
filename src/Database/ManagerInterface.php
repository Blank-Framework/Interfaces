<?php

namespace BlankFramework\Interfaces\Database;

interface ManagerInterface
{
    public function getAdapter(): AdapterInterface;
}
