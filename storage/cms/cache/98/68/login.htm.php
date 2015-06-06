<?php 
class Cms55724ff42e4a1_1210304422Class extends \Cms\Classes\LayoutCode
{
public function onStart()
{    
    $this['location'] = \DMA\Friends\Classes\LocationManager::getLocation();
}

}
