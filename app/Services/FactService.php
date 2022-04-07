<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Http\Clients\FactClient;
use Illuminate\Support\Collection;

class FactService
{
	private $client;

	public function __construct(FactClient $client)
	{
		$this->client = $client;
	}

	public function facts($amount = 1): Collection
	{
		$response = $this->client->get('https://cat-fact.herokuapp.com/facts/random?animal_type=cat&amount='.$amount);

		$body = json_decode((string) $response->getBody(), true);

		$collection =collect($body)->map(function ($facts) {
			return [
				'fact' => $facts['text']
			];
		});

		return $collection;
	}
}