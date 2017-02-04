<?php
namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory{
    /**
     * 创建文本组件
     * @param $content
     * @return mixed
     */
    abstract public function createText($content);

    /**
     * 创建图片组件
     * @param $path
     * @param string $name
     * @return mixed
     */
    abstract public function createPicture($path,$name='');
}

