<?php 
class Cms55724ff87b7f8_1021925316Class extends \Cms\Classes\LayoutCode
{
public function onStart()
{
    if (!$user = Auth::getUser()) {
        return Redirect::to('/');
    }
    
    $this['user'] = $user;
}

}
