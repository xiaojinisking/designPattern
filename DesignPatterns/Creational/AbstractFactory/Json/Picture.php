<?php
namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

/**
 * picture类
 * 该类是以JSON格式输出的具体图片组件类
 * Class Picture
 * @package DesignPatterns\Creational\AbstractFactory\Json
 */
class  Picture extends BasePicture{
    public function render()
    {
        return json_encode(array(
            'title'=>$this->name,
            'path'=>$this->path
        ));
    }
}
