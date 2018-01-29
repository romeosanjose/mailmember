<?php
namespace App\Member\Entity;

class Member {

	private $name;
	private $contact;
	private $permissionReminder;
	private $useArchiveBar;
	private $campaignDefaults;
	private $notifyOnSubscribe;
	private $notifyOnUnSubscribe;
	private $emailTypeOption;
	private $visibility;

	private $id;
	private $webId;
	private $dateCreated;
	private $listRating;
	private $subscribeUrlShort;
	private $subscribeUrlLong;
	private $beamerAddress;
	private $modules;
	private $stats;
	private $links;
        

	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}

	public function setContact($contact){
		$this->contact = $contact;
	}
	public function getContact(){
		return $this->contact;
	}

	public function setPermissionReminder($permissionReminder){
		$this->permissionReminder = $permissionReminder;
	}
	public function getPermissionReminder(){
		return $this->permissionReminder;
	}

	public function setUseArchiveBar($useArchiveBar){
		$this->useArchiveBar = $useArchiveBar;
	}
	public function getUseArchiveBar(){
		return $this->useArchiveBar;
	}

	public function setCampaignDefaults($campaignDefaults){
		$this->campaignDefaults = $campaignDefaults;
	}
	public function getCampaignDefaults(){
		return $this->campaignDefaults;
	}

	public function setNotifyOnSubscribe($notifyOnSubscribe){
		$this->notifyOnSubscribe = $notifyOnSubscribe;
	}
	public function getNotifyOnSubscribe(){
		return $this->notifyOnSubscribe;
	}

	public function setNotifyOnUnSubscribe($notifyOnUnSubscribe){
		$this->notifyOnUnSubscribe = $notifyOnUnSubscribe;
	}
	public function getNotifyOnUnSubscribe(){
		return $this->notifyOnUnSubscribe;
	}

	public function setemailTypeOption($emailTypeOption){
		$this->emailTypeOption = $emailTypeOption;
	}
	public function getemailTypeOption(){
		return $this->emailTypeOption;
	}

	public function setVisibility($visibility){
		$this->visibility = $visibility;
	}
	public function getVisibility(){
		return $this->visibility;
	}

	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}

	public function setWebId($webId){
		$this->webId = $webId;
	}
	public function getWebId(){
		return $this->webId;
	}

	public function setDateCreated($dateCreated){
		$this->dateCreated = $dateCreated;
	}
	public function getDateCreated(){
		return $this->dateCreated;
	}

	public function setListRating($listRating){
		$this->listRating = $listRating;
	}
	public function getListRating(){
		return $this->listRating;
	}

	public function setSubscribeUrlShort($subscribeUrlShort){
		$this->subscribeUrlShort = $subscribeUrlShort;
	}
	public function getSubscribeUrlShort(){
		return $this->subscribeUrlShort;
	}

	public function setSubscribeUrlLong($subscribeUrlLong){
		$this->subscribeUrlLong = $subscribeUrlLong;
	}
	public function getSubscribeUrlLong(){
		return $this->subscribeUrlLong;
	}

	public function setBeamerAddress($beamerAddress){
		$this->beamerAddress = $beamerAddress;
	}
	public function getBeamerAddress(){
		return $this->beamerAddress;
	}

	public function setModules($modules){
		$this->modules = $modules;
	}
	public function getModules(){
		return $this->modules;
	}

	public function setStats($stats){
		$this->stats = $stats;
	}
	public function getStats(){
		return $this->stats;
	}

	public function setLinks($links){
		$this->links = $links;
	}
	public function getLinks(){
		return $this->links;
	}

}