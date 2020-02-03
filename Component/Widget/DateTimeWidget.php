<?php
namespace wgmv\DateTimeWidget\Component\Widget;

use OxidEsales\Eshop\Application\Component\Widget\WidgetController;

class DateTimeWidget extends WidgetController
{

    protected $_sThisTemplate = 'widget/oa_datetime_widget.tpl';

//    public function render()
//    {
//        var_dump('asdf');
//        return parent::render();
//    }

    public function getDateTime()
    {
        return (new \DateTimeImmutable())->format('D, d.m.Y H:i:s');
    }


    /**
     * Returns if view should be cached
     *
     * @return bool
     */
    public function isCacheable()
    {
        return \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('blDateWidgetCaching');
    }
}
