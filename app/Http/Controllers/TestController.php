<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;


class TestController extends Controller
{
    public function index()
    {
        if (Cache::has('test'))
            dd(json_decode(Cache::get('test')));
    }

    public function test2()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $ip_address = $_SERVER['REMOTE_ADDR'];


        $post = [
            'api_key'          => '7s0pmKvFnmOidJS5rrXAIYltUp1qc1wjWAgN6h5DkfZHuZf6gMGQa8di3nW2obOl',
            'id_webmaster'     => '122301',
            'name'             => 'TEST API',
            'phone'            => '1234567890',
            'id_offer'         => '1316',
            'id_source'        => '40919',
            'id_stream'        => '186289',
            'user_agent'       => $user_agent,
            'ip_address'       => $ip_address,
            'county_code'      => 'RU',
            'sub_id_1'         => 'sub_id_1',
            'sub_id_2'         => 'sub_id_2',
            'sub_id_3'         => 'sub_id_3',
            'sub_id_4'         => 'sub_id_4'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.cpa.house/method/send_order');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $body = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);


        if (is_string($body) && is_array(json_decode($body, TRUE)) && (json_last_error() == JSON_ERROR_NONE)) {
            $body = json_decode($body, TRUE);
            if ( ! empty($body['status']) && $body['status'] == 'success') {
                dd($body);
                echo 'Заказ успешно принят!';
            } else {
                echo 'Ошибка: ' . $body['msg'];
            }
        }

    }
}
