<?php
class keeper {
	private $id;
	private $fname;
	private $lname;
	private $gender;
	private $phone;
        private $email;
	private $username;
	private $password;

	public function setId ($id) {
		$this->id = $id;
	}
	public function getId () {
		return $this->id;
	}
	public function setFname ($fname) {
		$this->fname = $fname;
	}
	public function getFname () {
		return $this->fname;
	}
	public function setLname ($lname) {
		$this->lname = $lname;
	}
	public function getLname () {
		return $this->lname;
	}
	public function setGender ($gender) {
		$this->gender = $gender;
	}
	public function getGender () {
		return $this->gender;
	}
	public function setPhone ($phone) {
		$this->phone = $phone;
	}
	public function getPhone () {
		return $this->phone;
	}
        public function setEmail ($email) {
		$this->email = $email;
	}
	public function getEmail () {
		return $this->email;
	}
	public function setUsername ($username) {
		$this->username = $username;
	}
	public function getUsername () {
		return $this->username;
	}
	public function setPassword ($password) {
		$this->password = $password;
	}
	public function getPassword () {
		return $this->password;
	}

	public function keeperAdd () {
		include 'connect.php';
		$query = sprintf ("INSERT INTO shop_keeper SET firstname = '%s', lastname = '%s', gender = '%s', phone = '%s', email = '%s', username = '%s', password = '%s'", $this->getFname(), $this->getLname(), $this->getGender(), $this->getPhone(), $this->getEmail(), $this->getUsername(), $this->getPassword());
		$result = mysql_query ($query);
		return $result;
	}

	public function keepersView () {
		include 'connect.php';
		$query = sprintf ("SELECT * from shop_keeper");

		$result = mysql_query ($query);
		$index = 0;
		while ($row = mysql_fetch_array ($result)) {
			$keepers [$index] = new keeper();
			$keepers [$index] -> setId($row['id']);
			$keepers [$index] -> setFname($row['firstname']);
			$keepers [$index] -> setLname($row['lastname']);
			$keepers [$index] -> setGender($row['gender']);
			$keepers [$index] -> setPhone($row['phone']);
                        $keepers [$index] -> setEmail($row['email']);
                        $keepers [$index] -> setUsername($row['username']);
			$keepers [$index] -> setPassword($row['password']);
			$index ++;
		}
		return $keepers;
	}

	public function keeperUpdate () {
		include 'connect.php';

		$query = sprintf ("UPDATE shop_keeper SET firstname = '%s', lastname = '%s', gender = '%s', phone = '%s', email = '%s', username = '%s', password = '%s' WHERE id = %d", $this->getFname(), $this->getLname(), $this->getGender(), $this->getPhone(), $this->getEmail(), $this->getUsername(), $this->getPassword(), $this->getId());
		$result = mysql_query ($query);

	}

	public function keeperDelete ($id) {
		include 'connect.php';
		$query = sprintf ("DELETE FROM shop_keeper WHERE id = %d", $id);
		$result = mysql_query ($query);
	}

        public function keeperView ($id) {
		include 'connect.php';
		$query = sprintf ("SELECT * FROM shop_keeper WHERE id = %d", $id);

		$result = mysql_query ($query);
		while ($row = mysql_fetch_array ($result)) {
			$keeper  = new keeper();
			$keeper  -> setId($row['id']);
			$keeper  -> setFname($row['firstname']);
			$keeper  -> setLname($row['lastname']);
			$keeper  -> setGender($row['gender']);
			$keeper  -> setPhone($row['phone']);
                        $keeper  -> setEmail($row['email']);
                        $keeper  -> setUsername($row['username']);
			$keeper  -> setPassword($row['password']);
		}
		return $keeper;
	}
}
?>