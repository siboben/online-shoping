<?php

class order {

    private $id;
    private $phone;
    private $email;
    private $name;
    private $color;
    private $size;
    private $style;
    private $category;
    private $quantity;
    private $price;
    private $total;
    private $district;
    private $account;
    private $shipping;
    private $today_date;
    private $date_exp;
    private $status;
    

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setPhone($phone) {
        $this->phone = $phone;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    public function getColor() {
        return $this->color;
    }
    public function setSize($size) {
        $this->size = $size;
    }
    public function getSize() {
        return $this->size;
    }
    public function setStyle($style) {
        $this->style = $style;
    }
    public function getStyle() {
        return $this->style;
    }
    public function setCategory($category) {
        $this->category = $category;
    }
    public function getCategory() {
        return $this->category;
    }
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setTotal($total) {
        $this->total = $total;
    }
    public function getTotal() {
        return $this->total;
    }
    public function setDistrict($district) {
        $this->district = $district;
    }
    public function getDistrict() {
        return $this->district;
    }
    public function setAccount($account) {
        $this->account = $account;
    }
    public function getAccount() {
        return $this->account;
    }
    public function setShipping($shipping) {
        $this->shipping = $shipping;
    }
    public function getShipping() {
        return $this->shipping;
    }
    public function setOrdering_date($today_date) {
        $this->today_date = $today_date;
    }
    public function getOrdering_date() {
        return $this->today_date;
    }
    public function setExpired_date($date_exp) {
        $this->date_exp = $date_exp;
    }
    public function getExpired_date() {
        return $this->date_exp;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
    public function getStatus() {
        return $this->status;
    }




    public function orderAdd () {
        include 'connect.php';
        $query = sprintf("INSERT INTO orders SET ordering_date = '%s', phone='%s', email='%s', name='%s', color='%s', size='%s', style='%s', category='%s', quantity=%d, price=%d, total=%d, district='%s', account = %d, shipping_options='%s'", $this->getOrdering_date(),
                $this->getPhone(), $this->getEmail(), $this->getName(), $this->getColor(), $this->getSize(), $this->getStyle(), $this->getCategory(), $this->getQuantity(), $this->getPrice(), $this->getTotal(), $this->getDistrict(), $this->getAccount(), $this->getShipping());
        $result = mysql_query($query);
        return $result;
    }

    public function ordersView() {
        include 'connect.php';
        $query = sprintf("SELECT o.id, cu.phone, o.email, o.name,o.color,o.size,o.style, o.category, o.quantity,o.price, o.total,o.district,o.account,o.shipping_options FROM customer cu, orders o WHERE cu.phone=o.phone");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $orders[$index] = new order();
            $orders[$index] -> setId($row['id']);
            $orders[$index] ->setPhone($row['phone']);
            $orders[$index] ->setEmail($row['email']);
            $orders[$index] ->setName($row['name']);
            $orders[$index] ->setColor($row['color']);
            $orders[$index] ->setSize($row['size']);
            $orders[$index] ->setStyle($row['style']);
            $orders[$index] ->setCategory($row['category']);
            $orders[$index] ->setQuantity($row['quantity']);
            $orders[$index] -> setPrice($row['price']);
            $orders[$index] -> setTotal($row['total']);
            $orders[$index] -> setDistrict($row['district']);
            $orders[$index] -> setAccount($row['account']);
            $orders[$index] -> setShipping($row['shipping_options']);
            $index ++;
        }
        return $orders;
    }

    public function orderDelete ($id) {
        include 'connect.php';
        $query = sprintf("DELETE FROM orders WHERE id = %d", $id);
        $result = mysql_query($query);
    }

    public function orderView ($id) {
        include 'connect.php';
        $query = sprintf("SELECT * FROM orders WHERE id = %d", $id);
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            $order = new order();
            $order ->setOrdering_date($row['ordering_date']);
            $order ->setPhone($row['phone']);
            $order ->setEmail($row['email']);
            $order ->setName($row['name']);
            $order ->setColor($row['color']);
            $order ->setSize($row['size']);
            $order ->setStyle($row['style']);
            $order ->setCategory($row['category']);
            $order ->setQuantity($row['quantity']);
            $order ->setPrice($row['price']);
            $order ->setTotal($row['total']);
            $order ->setDistrict($row['district']);
            $order ->setAccount($row['account']);
            $order ->setShipping($row['shipping_options']);
        }
        return $order;
    }
}
?>