<?php

use Illuminate\Database\Seeder;

class LandingPageContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('landing_page_contents')->delete();
        
        \DB::table('landing_page_contents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'about_1',
                'json_data' => '{"about_1":{"title":"About Eastpac","content":"EASTPAC is part of EASTERN PACIFIC CAPITAL.PTE.LTD based in Singapore. EASTPAC is present by providing a renewal and reformation of the world of blockchain and cryprocurrency because EASTPAC is not only present solely as a token. but EASTPAC is present as a DIGITAL SHARE (D-SHARE) for all products and platforms that are present in the EASTPAC ecosystem.by having EASTPAC you not only have the benefit of increasing the value of tokens in the market. but you also have the right in the form of digital shares, which means that you are entitled to receive dividends from every profit made by EASTERN PACIFIC CAPITAL.PTE.LTD"}}',
                'created_at' => '2019-01-07 00:00:00',
                'updated_at' => '2019-01-09 04:26:23',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'about_2',
                'json_data' => '{"about_2":{"title":"Direct-To-Consumer Decentralize Platform","content_0":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.","content_1":"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia","content_2":"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore."}}',
                'created_at' => '2019-01-08 00:00:00',
                'updated_at' => '2019-01-08 04:53:13',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'banner_1',
                'json_data' => '{"banner_1":{"txt":"Intial Digital Share Offering (IDSO)"}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-08 09:24:33',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'beneffit',
                'json_data' => '{"beneffit":{"title":"EASTCOIN Problem & Solution","content":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praes entium volup tatum deleniti."}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 04:34:04',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'token_1',
                'json_data' => '{"token_1":{"txt_1":"20M","txt_2":"Tokens Offered"}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 06:25:11',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'token_2',
            'json_data' => '{"token_2":{"txt_1":"$41M","txt_2":"Soft Cap (Public ICO)"}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 06:25:59',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'token_3',
                'json_data' => '{"token_3":{"txt_1":"20 million","txt_2":"Hard Cap"}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 05:03:31',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'token_4',
                'json_data' => '{"token_4":{"txt_1":"30 days after token sale ends","txt_2":"Tokens Distributed"}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 05:03:34',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'token_11',
                'json_data' => '{"token_11":{"title":"Our Technology Services","content":"EASTPAC combines innovative technologies - smart contracts, blockchain, and big data. Data is uploaded to blockchain using smart contracts and then migrated to big data. This design enables businesses to maximize the use of valuable information."}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 05:57:15',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'token_21',
                'json_data' => '{"token_21":{"title":"Easy to Buy & Sale Token","content":"Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do eiusm od tempor incididunt."}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 06:31:29',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'token_22',
                'json_data' => '{"token_22":{"title":"Responsive Design","content":"Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do eiusm od tempor incididunt."}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 06:33:52',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'token_23',
                'json_data' => '{"token_23":{"title":"Easy to Communicate","content":"Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do eiusm od tempor incididunt."}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 06:37:50',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'token_24',
                'json_data' => '{"token_24":{"title":"Safe & Secure","content":"Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do eiusm od tempor incididunt."}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 06:47:31',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'team',
                'json_data' => '{"team":{"title":"Executive team","content":"The EASTPAC Team combines a passion for esports, industry experise & proven record in finance, development, marketing & licensing."}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 06:50:24',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'faq',
                'json_data' => '{"faq":{"title":"Frequently asked questions","content":"Below we\\u2019ve provided a bit of EASTCOIN, EAST Token, cryptocurrencies, and few others. If you have any other questions, please get in touch using the contact form below."}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 07:05:55',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'banner_2',
                'json_data' => '{"banner_2":{"txt":"900,000 TAKENS ALREADY SOLD OUT"}}',
                'created_at' => '2019-01-09 00:00:00',
                'updated_at' => '2019-01-09 12:38:37',
            ),
        ));
        
        
    }
}