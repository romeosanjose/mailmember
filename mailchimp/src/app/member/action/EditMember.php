<?php

class EditMember(){


	public function __constructor(Member $member, $id){
		$this->client =  new Client();		
	}

	public function doEdit(){
		$client->request('POST', $config['member_url'],
			[
			'auth' => ['apikey', $config['oauth']['apikey']],
			'body' => [['list_id'=>$id],json_encode($this->member)]
			]);

		$this->addInMemcached();
	}

		private function addInMemcached(){
			$mem = new Memcached();
			$memList = ($mem->get('member'))? $mem->get('member') : array();
			array_push($memList, $this->member);
			$mem->add('member', $memList);
		}
}