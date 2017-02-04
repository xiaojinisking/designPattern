<?php
namespace DesignPatterns\Creational\AbstractFactory;
/**
 *用于参加JSON组件的工厂
 */

class JsonFactory extends AbstractFactory
{
    /**
     * 创建图片组件
     * @param $path
     * @param string $name
     */
    public function createPicture($path,$name='')
    {
        return new Json\Picture($path,$name);
    }

    /**
     * 创建文本组件
     * @param $content
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }
}


