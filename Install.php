<?php

namespace GDO\ITMB;

use GDO\Avatar\GDO_Avatar;
use GDO\Avatar\GDO_UserAvatar;
use GDO\Avatar\Module_Avatar;
use GDO\Core\GDO_Exception;
use GDO\Crypto\BCrypt;
use GDO\File\GDO_File;
use GDO\Language\Module_Language;
use GDO\User\GDO_User;
use GDO\User\GDT_UserType;

class Install
{

    /**
     * @throws GDO_Exception
     */
    public static function install(): void
    {
        self::installGizmore();
        self::installConfiguration();
     }

    /**
     * @throws GDO_Exception
     */
    private static function installGizmore(): void
    {
        if (!$user = GDO_User::getByName('gizmore'))
        {
            $user = GDO_User::blank([
                'user_name' => 'gizmore',
                'user_type' => GDT_UserType::MEMBER,
            ])->insert();

        }
        $password = require Module_ITMB::instance()->filePath('gizmore.php');
        $user->saveSettingVar('Login', 'password', BCrypt::create($password)->__toString());

        if (!GDO_Avatar::forUser($user)->isPersisted())
        {
            $module = Module_ITMB::instance();
            $path = $module->filePath("img/gizmore.png");
            $file = GDO_File::fromPath('gizmore.png', $path)->insert();
            $avatar = GDO_Avatar::blank([
                'avatar_file_id' => $file->getID(),
                'avatar_created_by' => $user->getID(),
            ])->insert();
            GDO_UserAvatar::updateAvatar($user, $avatar->getID());
        }
    }

    private static function installConfiguration(): void
    {
        Module_Avatar::instance()->saveConfigVar('hook_sidebar', '0');
        Module_Language::instance()->saveConfigVar('languages', '["en","de"]');
    }

}