<?php
namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text implements MdediaInterface{
    protected $contgent;

    public function __construct($content)
    {
        $this->content = (string)$content;
    }
}