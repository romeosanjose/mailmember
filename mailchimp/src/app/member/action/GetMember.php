<?php
namespace App\Member\Action;

use GuzzleHttp\Client;
use App\Member\Entity\Member;

class GetMember {
	
	private $client;
	private $member;

	public function __constructor(){
		$this->client =  new Client();	
		$member = new Member();	
	}

	public function doGet(){
		$memList = $this->getInMemcached();
		if (!$memList.length() === 0){
			$client->request('GET', $config['member_url'],
			[
			'auth' => ['apikey', $config['oauth']['apikey']]
			]);
			$memList = $client->getResponse();
		}

		return $memList;
	}

		private function getInMemcached(){
			$mem = new Memcached();
			$memList = ($mem->get('member'))? $mem->get('member') : array();
			array_push($memList, $this->member);
			return $memList;
		}

	

};