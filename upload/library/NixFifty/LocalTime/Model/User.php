<?php

class NixFifty_LocalTime_Model_User extends XFCP_NixFifty_LocalTime_Model_User
{
    public function prepareUser(array $user)
    {
        $user = parent::prepareUser($user);

        $userLocalTime = XenForo_Locale::time(XenForo_Application::$time, null, null, $user['timezone']);

        if (!empty($userLocalTime))
        {
            $user['localTime'] = $userLocalTime;
        }

        return $user;
    }
}