<?php

class MagicSql
{
    protected $sql;

    public function __call($name, $arguments)
    {
        $this->sql .= ' '. strtoupper($name);
        if (count($arguments)) {
            $this->sql .= ' '. $arguments[0];
        }
        return $this;
    }

    public function getSql()
    {
        return $this->sql;
    }
}

$sm = new MagicSql;
//DSL (Domain Specific Language)
echo $sm->select('*')
    ->from('users')
    ->where("id = 1")
    ->order('BY nome')
    ->desc()
    ->like('%o%')
    ->getSql();
