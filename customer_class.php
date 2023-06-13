<?php
class customer {
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

	public function customerAdd () {
		include 'connect.php';
		$query = sprintf ("INSERT INTO customer SET firstname = '%s', lastname = '%s', gender = '%s', phone = '%s', email = '%s', username = '%s', password = '%s'", $this->getFname(), $this->getLname(), $this->getGender(), $this->getPhone(), $this->getEmail(), $this->getUsername(), $this->getPassword());
		$result = mysql_query ($query);
		return $result;
	}

	public function customersView () {
		include 'connect.php';
		$query = sprintf ("SELECT * from customer");

		$result = mysql_query ($query);
		$index = 0;
		while ($row = mysql_fetch_array ($result)) {
			$customers [$index] = new customer();
			$customers [$index] -> setId($row['id']);
			$customers [$index] -> setFname($row['firstname']);
			$customers [$index] -> setLname($row['lastname']);
			$customers [$index] -> setGender($row['gender']);
			$customers [$index] -> setPhone($row['phone']);
                        $customers [$index] -> setEmail($row['email']);
                        $customers [$index] -> setUsername($row['username']);
			$customers [$index] -> setPassword($row['password']);
			$index ++;
		}
		return $customers;
	}

	public function customerUpdate () {
		include 'connect.php';

		$query = sprintf ("UPDATE customer SET firstname = '%s', lastname = '%s', gender = '%s', phone = '%s', email = '%s', username = '%s', password = '%s' WHERE id = %d", $this->getFname(), $this->getLname(), $this->getGender(), $this->getPhone(), $this->getEmail(), $this->getUsername(), $this->getPassword(), $this->getId());
		$result = mysql_query ($query);

	}

	public function customerDelete ($id) {
		include 'connect.php';
		$query = sprintf ("DELETE FROM customer WHERE id = %d", $id);
		$result = mysql_query ($query);
	}

        public function customerView () {
		include 'connect.php';
		$query = sprintf ("SELECT * FROM customer WHERE phone = '%s'", $phone);

		$result = mysql_query ($query);
		while ($row = mysql_fetch_array ($result)) {
			$customers  = new customer();
			$customers  -> setId($row['id']);
			$customers  -> setFname($row['firstname']);
			$customers  -> setLname($row['lastname']);
			$customers  -> setGender($row['gender']);
			$customers  -> setPhone($row['phone']);
                        $customers  -> setEmail($row['email']);
                        $customers  -> setUsername($row['username']);
			$customers  -> setPassword($row['password']);
		}
		return $customers;
	}
}
?>