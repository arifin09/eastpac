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
                'value' => 'eastpac@digitex.online',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:24:40',
            ),
            2 =>
            array (
                'id' => 3,
                'key' => 'CONTACT_ADDRESS',
                'value' => '10 Anson Road<br>#05-01/15 International Plaza<br>Singapore 079903',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:37:54',
            ),
            3 =>
            array (
                'id' => 4,
                'key' => 'CONTACT_PHONE_NUMBER',
                'value' => 'DID +65 6521 6815<br>Hotline +65 6653 1218<br>Fax +65 6226 1209',
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
            5 =>
            array (
                'id' => 6,
                'key' => 'TOTAL_DSHARE_TARGET',
                'value' => '0',
                'type' => 'int',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:41:04',
            ),
            6 =>
            array (
                'id' => 7,
                'key' => 'TOTAL_DSHARE_SOLD',
                'value' => '0',
                'type' => 'int',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:41:04',
            ),
        ));


    }
}