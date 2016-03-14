<?php
	class userSession {
		public $expired;
		public $created;
		private $user;

		public function __construct ($user) {
			$this->expired =  true;
			$this->created = time();
			$this->user = $user;
			$_SESSION['login'] = serialize($this);
		}

		public function checkLogin () {
			if ($this->created + (15*60) < time()) return true;
			else return false;
		}

		public function resetIdle () {
			echo "resetIdle";
		}

		public function setExpired () {
			$this->expired = !$this->expired;
			$_SESSION['login'] = serialize($this);
		}
	}
?>