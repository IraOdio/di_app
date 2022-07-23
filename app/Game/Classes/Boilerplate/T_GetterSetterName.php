<?php


namespace App\Game\Classes\Boilerplate;


trait T_GetterSetterName
{
    protected string $name;

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
