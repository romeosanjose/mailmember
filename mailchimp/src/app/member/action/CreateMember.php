<?php
namespace App\Member\Action;

use GuzzleHttp\Client;
use App\Member\Entity\Member;

class CreateMember {
	
	private $client;
	private $member;

	public function __constructor(Member $member){
		$this->client =  new Client();		
	}

	public function doCreate(){
		$client->request('POST', $config['member_url'],
			[
			'auth' => ['apikey', $config['oauth']['apikey']],
			'body' => json_encode($this->member)
			]);

		$this->addInMemcached();
	}

		private function addInMemcached(){
			$mem = new Memcached();
			$memList = ($mem->get('member'))? $mem->get('member') : array();
			array_push($memList, $this->member);
			$mem->add('member', $memList);
		}



};