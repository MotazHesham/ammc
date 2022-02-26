<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'slider_create',
            ],
            [
                'id'    => 18,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 19,
                'title' => 'slider_show',
            ],
            [
                'id'    => 20,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 21,
                'title' => 'slider_access',
            ],
            [
                'id'    => 22,
                'title' => 'service_create',
            ],
            [
                'id'    => 23,
                'title' => 'service_edit',
            ],
            [
                'id'    => 24,
                'title' => 'service_show',
            ],
            [
                'id'    => 25,
                'title' => 'service_delete',
            ],
            [
                'id'    => 26,
                'title' => 'service_access',
            ],
            [
                'id'    => 27,
                'title' => 'about_us_create',
            ],
            [
                'id'    => 28,
                'title' => 'about_us_edit',
            ],
            [
                'id'    => 29,
                'title' => 'about_us_show',
            ],
            [
                'id'    => 30,
                'title' => 'about_us_delete',
            ],
            [
                'id'    => 31,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 32,
                'title' => 'who_us_access',
            ],
            [
                'id'    => 33,
                'title' => 'about_founder_access',
            ],
            [
                'id'    => 34,
                'title' => 'founder_info_create',
            ],
            [
                'id'    => 35,
                'title' => 'founder_info_edit',
            ],
            [
                'id'    => 36,
                'title' => 'founder_info_show',
            ],
            [
                'id'    => 37,
                'title' => 'founder_info_delete',
            ],
            [
                'id'    => 38,
                'title' => 'founder_info_access',
            ],
            [
                'id'    => 39,
                'title' => 'founder_description_create',
            ],
            [
                'id'    => 40,
                'title' => 'founder_description_edit',
            ],
            [
                'id'    => 41,
                'title' => 'founder_description_show',
            ],
            [
                'id'    => 42,
                'title' => 'founder_description_delete',
            ],
            [
                'id'    => 43,
                'title' => 'founder_description_access',
            ],
            [
                'id'    => 44,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 45,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 46,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 47,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 48,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 49,
                'title' => 'news_create',
            ],
            [
                'id'    => 50,
                'title' => 'news_edit',
            ],
            [
                'id'    => 51,
                'title' => 'news_show',
            ],
            [
                'id'    => 52,
                'title' => 'news_delete',
            ],
            [
                'id'    => 53,
                'title' => 'news_access',
            ],
            [
                'id'    => 54,
                'title' => 'article_create',
            ],
            [
                'id'    => 55,
                'title' => 'article_edit',
            ],
            [
                'id'    => 56,
                'title' => 'article_show',
            ],
            [
                'id'    => 57,
                'title' => 'article_delete',
            ],
            [
                'id'    => 58,
                'title' => 'article_access',
            ],
            [
                'id'    => 59,
                'title' => 'contact_us_create',
            ],
            [
                'id'    => 60,
                'title' => 'contact_us_edit',
            ],
            [
                'id'    => 61,
                'title' => 'contact_us_show',
            ],
            [
                'id'    => 62,
                'title' => 'contact_us_delete',
            ],
            [
                'id'    => 63,
                'title' => 'contact_us_access',
            ],
            [
                'id'    => 64,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 65,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 66,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 67,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 68,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 69,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 70,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
