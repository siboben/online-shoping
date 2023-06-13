<?php

class out {

    private $id;
    private $stock_code;
    private $name;
    private $color;
    private $size;
    private $style;
    private $category;
    private $quantity;
    private $pre_price;
    private $pre_total;
    private $post_price;
    private $post_total;
    private $benefit;

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setStock_code($stock_code) {
        $this->stock_code = $stock_code;
    }
    public function getStock_code() {
        return $this->stock_code;
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
    public function setPre_Price($pre_price) {
        $this->pre_price = $pre_price;
    }
    public function setPost_Price($post_price) {
        $this->post_price = $post_price;
    }
    public function getPre_Price() {
        return $this->pre_price;
    }
    public function getPost_Price() {
        return $this->post_price;
    }
    public function setPre_Total($pre_total) {
        $this->pre_total = $pre_total;
    }
    public function setPost_Total($post_total) {
        $this->post_total = $post_total;
    }
    public function getPre_Total() {
        return $this->pre_total;
    }
    public function getPost_Total() {
        return $this->post_total;
    }
     public function setBenefit($benefit) {
        $this->benefit = $benefit;
    }
    public function  getBenefit() {
        return $this->benefit;
    }

    public function outAdd () {
        include 'connect.php';
        $query = sprintf("INSERT INTO cloth_out SET stock_code='%s', name='%s', color='%s',size='%s', style='%s', category='%s', quantity=%d, pre_price=%d, pre_total=%d, post_price=%d, post_total=%d, benefit='%s'",
                $this->getStock_code(), $this->getName(), $this->getColor(), $this->getSize(), $this->getStyle(), $this->getCategory(), $this->getQuantity(), $this->getPre_Price(), $this->getPre_Total(), $this->getPost_Price(), $this->getPost_Total(), $this->getBenefit());
        $result = mysql_query($query);
        return $result;
    }

    public function outsView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id,co.stock_code, co.name, co.color,co.size,co.style,co.category,co.quantity,co.pre_price,co.pre_total,co.post_price,co.post_total,co.benefit from cloth_out co, cloth_in ci WHERE co.stock_code = ci.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $outs[$index] = new out();
            $outs[$index] -> setId($row['id']);
            $outs[$index] ->setStock_code($row['stock_code']);
            $outs[$index] ->setName($row['name']);
            $outs[$index] ->setColor($row['color']);
            $outs[$index] ->setSize($row['size']);
            $outs[$index] ->setStyle($row['style']);
            $outs[$index] ->setCategory($row['category']);
            $outs[$index] -> setQuantity($row['quantity']);
            $outs[$index] -> setPre_Price($row['pre_price']);
            $outs[$index] -> setPre_Total($row['pre_total']);
            $outs[$index] -> setPost_Price($row['post_price']);
            $outs[$index] -> setPost_Total($row['post_total']);
            $outs[$index] ->setBenefit($row['benefit']);
            $index ++;
        }
        return $outs;
    }

    public function outDelete ($id) {
        include 'connect.php';
        $query = sprintf("DELETE FROM cloth_out WHERE id = %d", $id);
        $result = mysql_query($query);
    }

    /*public function outUpdate () {
        include 'connect.php';
        $query = sprintf("UPDATE cloth_out SET stock_code='%s',cloth_type='%s',category='%s',gender='%s', quantity=%d,price=%d,total=%d WHERE id = %d",
                $this->getStock_code(),$this->getType(),$this->getCategory(),$this->getGender(),$this->getQuantity(), $this->getPrice(),$this->getTotal(), $this->getId());
        $result = mysql_query($query);
    }

    public function outView ($id) {
        include 'connect.php';
        $query = sprintf("SELECT * FROM cloth_out WHERE id = %d", $id);
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            $cloth = new Clothes();
            $cloth ->setStock_code($row['stock_code']);
            $cloth ->setType($row['cloth_type']);
            $cloth ->setCategory($row['category']);
            $cloth ->setGender($row['gender']);
            $cloth ->setQuantity($row['quantity']);
            $cloth ->setPrice($row['price']);
            $cloth ->setTotal($row['total']);
        }
        return $cloth;
    }*/
}
?>