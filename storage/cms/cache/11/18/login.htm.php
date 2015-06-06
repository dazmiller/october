<?php 
use DMA\Friends\Classes\LocationManager;
class Cms55724ff4361a3_1891118434Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    if (Auth::getUser()) {
        return Redirect::to('friends');
    }

    $this['location'] = LocationManager::getLocation();
}

}
