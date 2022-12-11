<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use function GuzzleHttp\json_decode;

class Project extends Model
{
    use HasFactory;

    public static function getProjects(){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.github.com/user/repos",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Accept: application/vnd.github+json",
                "Authorization: token ". env("TOKEN_GITHUB"),
                "X-GitHub-Api-Version: 2022-11-28",
                "User-Agent: curl/" . curl_version()['version']
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        echo $err;
        if($err){
            echo $err;
        } else {
            //echo "<pre>" . var_export(json_decode($response),true) . "</pre>"; exit;
            return json_decode($response);
        }

    }
}
