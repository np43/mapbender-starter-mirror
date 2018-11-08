<?php


namespace Mapbender\Ol4DemoBundle\Element;

use Mapbender\CoreBundle\Component\Element;

class CanvasRotation extends Element
{
    public static function getClassTitle()
    {
        return "Karten-Rotation";
    }

    public static function getFormTemplate()
    {
        return "MapbenderOl4DemoBundle:ElementAdmin:canvas_rotation.html.twig";
    }

    public static function getType()
    {
        return 'Mapbender\Ol4DemoBundle\Element\Type\CanvasRotationAdminType';
    }

    public function getFrontendTemplatePath($suffix = '.html.twig')
    {
        return "MapbenderOl4DemoBundle:Element:canvas_rotation{$suffix}";
    }

    public function getAssets()
    {
        return array(
            'js' => array(
                '@MapbenderOl4DemoBundle/Resources/public/element/canvas_rotation.js',
            ),
        );
    }
}
