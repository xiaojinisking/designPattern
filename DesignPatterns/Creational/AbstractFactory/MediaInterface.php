<?php
namespace DesignPatterns\Creational\AbstractFactory;

interface MdediaInterface
{
    /**
     * JSON或HTML（取决于具体类）输出未经处理的渲染
     * @return mixed
     */
    public function render();
}