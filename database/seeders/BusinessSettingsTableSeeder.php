<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('business_settings')->delete();

        \DB::table('business_settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'type' => 'home_default_currency',
                'value' => 27,
                'lang' => NULL,
                'created_at' => '2018-10-16 07:35:52',
                'updated_at' => '2019-01-28 07:26:53',
            ),
            1 =>
            array (
                'id' => 2,
                'type' => 'system_default_currency',
                'value' => 27,
                'lang' => NULL,
                'created_at' => '2018-10-16 07:36:58',
                'updated_at' => '2020-01-26 10:22:13',
            ),
            2 =>
            array (
                'id' => 3,
                'type' => 'currency_format',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-17 09:01:59',
                'updated_at' => '2018-10-17 09:01:59',
            ),
            3 =>
            array (
                'id' => 4,
                'type' => 'symbol_format',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-17 09:01:59',
                'updated_at' => '2019-01-20 08:10:55',
            ),
            4 =>
            array (
                'id' => 5,
                'type' => 'no_of_decimals',
                'value' => '2',
                'lang' => NULL,
                'created_at' => '2018-10-17 09:01:59',
                'updated_at' => '2020-03-04 06:57:16',
            ),
            5 =>
            array (
                'id' => 6,
                'type' => 'product_activation',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-28 07:38:37',
                'updated_at' => '2019-02-04 07:11:41',
            ),

            10 =>
            array (
                'id' => 11,
                'type' => 'cash_payment',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2018-10-28 13:46:05',
                'updated_at' => '2019-01-24 09:40:18',
            ),
            12 =>
            array (
                'id' => 13,
                'type' => 'best_selling',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-12-24 14:13:44',
                'updated_at' => '2019-02-14 11:29:13',
            ),
            14 =>
            array (
                'id' => 15,
                'type' => 'sslcommerz_sandbox',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-01-16 18:44:18',
                'updated_at' => '2019-03-14 06:07:26',
            ),
            15 =>
            array (
                'id' => 16,
                'type' => 'sslcommerz_payment',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-01-24 15:39:07',
                'updated_at' => '2022-07-27 05:30:14',
            ),
            16 =>
            array (
                'id' => 17,
                'type' => 'vendor_commission',
                'value' => '20',
                'lang' => NULL,
                'created_at' => '2019-01-31 12:18:04',
                'updated_at' => '2019-04-13 12:49:26',
            ),
            17 =>
            array (
                'id' => 18,
                'type' => 'verification_form',
                'value' => '[{"type":"text","label":"Your name"},{"type":"text","label":"Shop name"},{"type":"text","label":"Email"},{"type":"text","label":"License No"},{"type":"text","label":"Full Address"},{"type":"text","label":"Phone Number"},{"type":"file","label":"Tax Papers"}]',
                'lang' => NULL,
                'created_at' => '2019-02-03 17:36:58',
                'updated_at' => '2019-02-16 12:14:42',
            ),
            18 =>
            array (
                'id' => 19,
                'type' => 'google_analytics',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-02-06 18:22:35',
                'updated_at' => '2019-02-06 18:22:35',
            ),
            19 =>
            array (
                'id' => 20,
                'type' => 'facebook_login',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-02-07 18:51:59',
                'updated_at' => '2019-02-09 01:41:15',
            ),
            20 =>
            array (
                'id' => 21,
                'type' => 'google_login',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-02-07 18:52:10',
                'updated_at' => '2019-02-09 01:41:14',
            ),
            24 =>
            array (
                'id' => 36,
                'type' => 'facebook_chat',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-04-15 17:45:04',
                'updated_at' => '2019-04-15 17:45:04',
            ),
            25 =>
            array (
                'id' => 37,
                'type' => 'email_verification',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-04-30 13:30:07',
                'updated_at' => '2019-04-30 13:30:07',
            ),
            26 =>
            array (
                'id' => 38,
                'type' => 'wallet_system',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-05-19 14:05:44',
                'updated_at' => '2019-05-19 08:11:57',
            ),
            27 =>
            array (
                'id' => 39,
                'type' => 'coupon_system',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-06-11 15:46:18',
                'updated_at' => '2019-06-11 15:46:18',
            ),
            28 =>
            array (
                'id' => 40,
                'type' => 'current_version',
                'value' => '1.0',
                'lang' => NULL,
                'created_at' => '2019-06-11 15:46:18',
                'updated_at' => '2019-06-11 15:46:18',
            ),


            33 =>
            array (
                'id' => 45,
                'type' => 'pickup_point',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-10-17 17:50:39',
                'updated_at' => '2019-10-17 17:50:39',
            ),
            34 =>
            array (
                'id' => 46,
                'type' => 'maintenance_mode',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-10-17 17:51:04',
                'updated_at' => '2019-10-17 17:51:04',
            ),

            37 =>
            array (
                'id' => 50,
                'type' => 'category_wise_commission',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-01-21 13:22:47',
                'updated_at' => '2020-01-21 13:22:47',
            ),
            38 =>
            array (
                'id' => 51,
                'type' => 'conversation_system',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-01-21 13:23:21',
                'updated_at' => '2020-01-21 13:23:21',
            ),
            39 =>
            array (
                'id' => 52,
                'type' => 'guest_checkout_active',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-01-22 13:36:38',
                'updated_at' => '2020-01-22 13:36:38',
            ),
            40 =>
            array (
                'id' => 53,
                'type' => 'facebook_pixel',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-01-22 17:43:58',
                'updated_at' => '2020-01-22 17:43:58',
            ),
            43 =>
            array (
                'id' => 57,
                'type' => 'shipping_type',
                'value' => 'product_wise_shipping',
                'lang' => NULL,
                'created_at' => '2020-07-01 19:49:56',
                'updated_at' => '2020-07-01 19:49:56',
            ),
            44 =>
            array (
                'id' => 58,
                'type' => 'flat_rate_shipping_cost',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-07-01 19:49:56',
                'updated_at' => '2020-07-01 19:49:56',
            ),
            45 =>
            array (
                'id' => 59,
                'type' => 'shipping_cost_admin',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-07-01 19:49:56',
                'updated_at' => '2020-07-01 19:49:56',
            ),
            48 =>
            array (
                'id' => 62,
                'type' => 'google_recaptcha',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-08-17 13:13:37',
                'updated_at' => '2020-08-17 13:13:37',
            ),
            50 =>
            array (
                'id' => 64,
                'type' => 'header_logo',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-06-29 18:17:25',
            ),
            51 =>
            array (
                'id' => 65,
                'type' => 'show_language_switcher',
                'value' => 'on',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            52 =>
            array (
                'id' => 66,
                'type' => 'show_currency_switcher',
                'value' => 'on',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            53 =>
            array (
                'id' => 67,
                'type' => 'header_stikcy',
                'value' => 'on',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            54 =>
            array (
                'id' => 68,
                'type' => 'footer_logo',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-07-01 03:27:54',
            ),
            55 =>
            array (
                'id' => 69,
                'type' => 'about_us_description',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            56 =>
            array (
                'id' => 70,
                'type' => 'contact_address',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            57 =>
            array (
                'id' => 71,
                'type' => 'contact_phone',
                'value' => '01913384519',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-07-01 01:23:21',
            ),
            58 =>
            array (
                'id' => 72,
                'type' => 'contact_email',
                'value' => 'example@gmail.com',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-07-01 03:28:59',
            ),
            59 =>
            array (
                'id' => 73,
                'type' => 'widget_one_labels',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            60 =>
            array (
                'id' => 74,
                'type' => 'widget_one_links',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            61 =>
            array (
                'id' => 75,
                'type' => 'widget_one',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            62 =>
            array (
                'id' => 76,
                'type' => 'frontend_copyright_text',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            63 =>
            array (
                'id' => 77,
                'type' => 'show_social_links',
                'value' => 'on',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-06-29 20:05:18',
            ),
            64 =>
            array (
                'id' => 78,
                'type' => 'facebook_link',
                'value' => 'https://www.facebook.com/',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-06-29 19:17:04',
            ),
            65 =>
            array (
                'id' => 79,
                'type' => 'twitter_link',
                'value' => 'https://twitter.com/',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-06-29 19:17:05',
            ),
            66 =>
            array (
                'id' => 80,
                'type' => 'instagram_link',
                'value' => 'https://www.instagram.com/',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-06-29 19:17:05',
            ),
            67 =>
            array (
                'id' => 81,
                'type' => 'youtube_link',
                'value' => 'https://www.youtube.com/',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-06-29 19:17:05',
            ),
            68 =>
            array (
                'id' => 82,
                'type' => 'linkedin_link',
                'value' => 'https://www.linkedin.com/',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-06-29 19:17:05',
            ),
            69 =>
            array (
                'id' => 83,
                'type' => 'payment_method_images',
                'value' => '87,79,100,81',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-07-01 03:30:52',
            ),
            70 =>
            array (
                'id' => 84,
                'type' => 'home_slider_images',
                'value' => '[]',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            71 =>
            array (
                'id' => 85,
                'type' => 'home_slider_links',
                'value' => '[]',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            72 =>
            array (
                'id' => 86,
                'type' => 'home_banner1_images',
                'value' => '[]',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            73 =>
            array (
                'id' => 87,
                'type' => 'home_banner1_links',
                'value' => '[]',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            76 =>
            array (
                'id' => 90,
                'type' => 'home_categories',
                'value' => '[]',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            77 =>
            array (
                'id' => 91,
                'type' => 'top10_categories',
                'value' => '[]',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            78 =>
            array (
                'id' => 92,
                'type' => 'top10_brands',
                'value' => '[]',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            79 =>
            array (
                'id' => 93,
                'type' => 'website_name',
                'value' => 'Yippeekart | Better buy authentic',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-06-29 21:28:07',
            ),
            80 =>
            array (
                'id' => 94,
                'type' => 'site_motto',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            81 =>
            array (
                'id' => 95,
                'type' => 'site_icon',
                'value' => '108',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-06-29 21:28:07',
            ),
            82 =>
            array (
                'id' => 96,
                'type' => 'base_color',
                'value' => '#DE1F26',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-07-01 03:36:12',
            ),
            83 =>
            array (
                'id' => 97,
                'type' => 'base_hov_color',
                'value' => '#F36E78',
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2022-07-01 03:37:28',
            ),
            84 =>
            array (
                'id' => 98,
                'type' => 'meta_title',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            85 =>
            array (
                'id' => 99,
                'type' => 'meta_description',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            86 =>
            array (
                'id' => 100,
                'type' => 'meta_keywords',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            87 =>
            array (
                'id' => 101,
                'type' => 'meta_image',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            88 =>
            array (
                'id' => 102,
                'type' => 'site_name',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            89 =>
            array (
                'id' => 103,
                'type' => 'system_logo_white',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            90 =>
            array (
                'id' => 104,
                'type' => 'system_logo_black',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            91 =>
            array (
                'id' => 105,
                'type' => 'timezone',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            92 =>
            array (
                'id' => 106,
                'type' => 'admin_login_background',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 13:26:36',
                'updated_at' => '2020-11-16 13:26:36',
            ),
            95 =>
            array (
                'id' => 109,
                'type' => 'decimal_separator',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-12-30 22:45:56',
                'updated_at' => '2020-12-30 22:45:56',
            ),
            99 =>
            array (
                'id' => 113,
                'type' => 'header_menu_labels',
                'value' => '["Home","Flash Sale","Blogs","All Brands","All Categories"]',
                'lang' => NULL,
                'created_at' => '2021-02-16 08:43:11',
                'updated_at' => '2021-02-16 08:52:18',
            ),
            100 =>
            array (
                'id' => 114,
                'type' => 'header_menu_links',
                'value' => '["http:\\/\\/domain.com","http:\\/\\/localhost:8000\\/flash-deals","http:\\/\\/domain.com\\/blog","http:\\/\\/domain.com\\/brands","http:\\/\\/domain.com\\/categories"]',
                'lang' => NULL,
                'created_at' => '2021-02-16 08:43:11',
                'updated_at' => '2022-08-06 15:39:21',
            ),
            106 =>
            array (
                'id' => 120,
                'type' => 'min_order_amount_check_activat',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2022-04-17 12:57:17',
                'updated_at' => '2022-04-17 12:57:17',
            ),
            107 =>
            array (
                'id' => 121,
                'type' => 'minimum_order_amount',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2022-04-17 12:57:17',
                'updated_at' => '2022-04-17 12:57:17',
            ),
            110 =>
            array (
                'id' => 124,
                'type' => 'helpline_number',
                'value' => '01912384519',
                'lang' => NULL,
                'created_at' => '2022-06-29 18:15:25',
                'updated_at' => '2022-07-01 09:19:59',
            ),
            111 =>
            array (
                'id' => 125,
                'type' => 'contact_address',
                'value' => 'Mirpur - 1,Dhaka, Bangladesh',
                'lang' => 'en',
                'created_at' => '2022-06-29 18:24:14',
                'updated_at' => '2022-07-01 01:23:21',
            ),
            112 =>
            array (
                'id' => 126,
                'type' => 'about_us_description',
                'value' => NULL,
                'lang' => 'en',
                'created_at' => '2022-06-29 18:25:05',
                'updated_at' => '2022-06-29 18:25:05',
            ),
            113 =>
            array (
                'id' => 127,
                'type' => 'play_store_link',
                'value' => 'https://www.youtube.com/',
                'lang' => NULL,
                'created_at' => '2022-06-29 18:25:05',
                'updated_at' => '2022-06-29 18:33:00',
            ),
            114 =>
            array (
                'id' => 128,
                'type' => 'app_store_link',
                'value' => 'https://www.youtube.com/',
                'lang' => NULL,
                'created_at' => '2022-06-29 18:25:05',
                'updated_at' => '2022-06-29 18:33:00',
            ),
            115 =>
            array (
                'id' => 129,
                'type' => 'frontend_copyright_text',
                'value' => 'All Rights Reserved by YIPPEEKART',
                'lang' => 'en',
                'created_at' => '2022-06-29 18:29:16',
                'updated_at' => '2022-06-29 18:29:16',
            ),
            116 =>
                array (
                    'id' => 130,
                    'type' => 'refund_request_time',
                    'value' => '3',
                    'lang' => NULL,
                    'created_at' => '2022-06-29 18:29:16',
                    'updated_at' => '2022-06-29 18:29:16',
                ),
        ));


    }
}
