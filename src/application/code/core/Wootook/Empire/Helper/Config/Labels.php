<?php

/**
 *
 * Enter description here ...
 *
 * @uses Wootook_Object
 * @uses Legacies_Empire
 */
class Wootook_Empire_Helper_Config_Labels
    extends Wootook_Core_Helper_Config_ConfigHandler
    implements Wootook_Core_Singleton
{
    private static $_singleton = null;

    public static function getSingleton()
    {
        if (self::$_singleton === null) {
            self::$_singleton = new self();
        }
        return self::$_singleton;
    }

    protected function _init()
    {
        $locale = Wootook::getPreferredLocale(array(
            'fr_FR', 'en_US'
            ));

        $this->_initData("locale/{$locale}/labels");
        return $this;
    }

    protected function _load()
    {
        // NOP
        return $this;
    }

    protected function _save()
    {
        // NOP
        return $this;
    }

    protected function _delete()
    {
        // NOP
        return $this;
    }
}
