<?php
namespace DesignPatterns\Creational\AbstractFactory;

class HtmlFactory extends AbstractFactory
{
    public function createPicture($path, $name = '')
    {
        return Html\Picture($path, $name);
    }

    public function createText($content)
    {
        return Html\Text($content);
    }
}
