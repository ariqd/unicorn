<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
// use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
	// use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function client()
	{
		$client = new Client([
			'base_uri' => 'http://makayasaareca.com:50855/api/',
			'headers' => [
				'Content-Type' => 'application/json',
				// 'Authorization' => 'Bearer ' . session()->get('apitokenpos')
			]
		]);

		return $client;
	}

	public function get($url)
	{
		$response = $this->client()->get($url);

		return json_decode($response->getBody())->data;
	}

	public function getData($url)
	{
		$response = $this->client()->get($url);

		return json_decode($response->getBody())->data;
	}

	public function post($url, $data)
	{
		unset($data["_token"]);
		$response = $this->client()->post($url, ["json" => $data]);

		return json_decode($response->getBody())->data;
	}

	public function put($url, $data)
	{
		// unset($data["_method"]);
		// unset($data["_token"]);
		$response = $this->client()->put($url, ["json" => $data]);

		return json_decode($response->getBody())->data;
	}

	public function delete($url)
	{
		$response = $this->client()->delete($url);

		return json_decode($response->getBody());
	}
}
