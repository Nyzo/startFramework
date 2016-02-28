<?php
 
namespace Core\FindBrowser;

class FindBrowser{
	
	private $user_agent;
	
    public function __construct(){
	    $this->user_agent = $_SERVER['HTTP_USER_AGENT'];
    }
	
	public function getBrowser($user_agent = null){
		if($user_agent == null)
			$user_agent = $this->user_agent;
		if(preg_match('/Firefox/i', $user_agent))
			$br = 'Firefox'; 
		elseif(preg_match('/Mac/i', $user_agent))
		    $br = 'Safari';
		elseif(preg_match('/Chrome/i', $user_agent))
		    $br = 'Chrome'; 
		elseif(preg_match('/Opera/i', $user_agent))
		    $br = 'Opera'; 
		elseif(preg_match('/MSIE/i', $user_agent))
		    $br = 'Internet Explorer'; 
		else $br = 'Inconnu';
		
		return $br;
	}
	
	public function getDevice($user_agent = null){
		if($user_agent == null)
			$user_agent = $this->user_agent;
		if(preg_match('/Linux/i', $user_agent))
			$os = 'Linux';
		elseif(preg_match('/Mac/i', $user_agent))
		    $os = 'Mac'; 
		elseif(preg_match('/iPhone/i', $user_agent))
		    $os = 'iPhone'; 
		elseif(preg_match('/iPad/i', $user_agent))
		    $os = 'iPad'; 
		elseif(preg_match('/Droid/i', $user_agent))
		    $os = 'Droid'; 
		elseif(preg_match('/Unix/i', $user_agent))
		    $os = 'Unix'; 
		elseif(preg_match('/Windows/i', $user_agent))
		    $os = 'Windows';
		else $os = 'Inconnu';
		
		return $os;
	}
}