<?php

use Illuminate\Database\Seeder;

class SiteConfigsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('site_configs')->delete();

        \DB::table('site_configs')->insert(array (
            0 =>
            array (
                'id' => 1,
                'key' => 'SITE_TITLE',
                'value' => 'Eastpac',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 10:56:56',
            ),
            1 =>
            array (
                'id' => 2,
                'key' => 'CONTACT_EMAIL',
                'value' => 'myemail2@something.com',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:24:40',
            ),
            2 =>
            array (
                'id' => 3,
                'key' => 'CONTACT_ADDRESS',
                'value' => 'Jl Kertanegara No. 65 Jakarta Selatan',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:37:54',
            ),
            3 =>
            array (
                'id' => 4,
                'key' => 'CONTACT_PHONE_NUMBER',
                'value' => '+00 15151515154',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:41:04',
            ),
            4 =>
            array (
                'id' => 5,
                'key' => 'ETHEREUM_ADDRESS',
                'value' => 'http://localhost:5000',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:41:04',
            ),
        ));


    }
}
