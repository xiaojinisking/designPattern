<?php
namespace DesignPatterns\Creational\AbstractFactory;

abstract class Picture implements MdediaInterface
{
    protected $path;
    protected $name;

    public function __construct($path,$name = '')
    {
        $this->path = (string)$path;
        $this->name = (string)$name;
    }
}