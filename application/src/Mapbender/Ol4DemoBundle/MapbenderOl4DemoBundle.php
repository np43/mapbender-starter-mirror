<?php


namespace Mapbender\Ol4DemoBundle;


use Mapbender\CoreBundle\Component\MapbenderBundle;

class MapbenderOl4DemoBundle extends MapbenderBundle
{
    public function getElements()
    {
        return array(
            'Mapbender\Ol4DemoBundle\Element\CanvasRotation',
        );
    }
}
