<?php

class NixFifty_LocalTime_Listen
{
    public static function loadUserModel($class, &$extend)
    {
        $extend[] = 'NixFifty_LocalTime_Model_User';
    }
}