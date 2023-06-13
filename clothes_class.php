<?php

error_reporting(0);

class Clothes {

    private $id;
    private $stock_code;
    private $name;
    private $color;
    private $size;
    private $style;
    private $category;
    private $quantity;
    private $price;
    private $post_price;
    private $total;
    private $picture;

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
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setPost_price($post_price) {
        $this->post_price = $post_price;
    }
    public function getPost_price() {
        return $this->post_price;
    }
    public function setTotal($total) {
        $this->total = $total;
    }
    public function getTotal() {
        return $this->total;
    }

    public function setPicture($picture) {
        $this->picture = $picture;
    }
    public function getPicture() {
        return $this->picture;
    }

    public function clothAdd () {
        include 'connect.php';
        $query = sprintf("INSERT INTO cloth_in SET stock_code='%s', name='%s', color='%s', size='%s', style='%s', category='%s', picture='%s', quantity=%d, price=%d, total=%d, post_price=%d",
                $this->getStock_code(), $this->getName(), $this->getColor(), $this->getSize(), $this->getStyle(), $this->getCategory(), $this->getPicture(), $this->getQuantity(), $this->getPrice(), $this->getTotal(), $this->getPost_price());
        $result = mysql_query($query);
        return $result;
    }

    public function clothesView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style, co.category, co.picture, co.quantity,co.price,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code order by stock_code asc");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothes[$index] = new Clothes();
            $clothes[$index] -> setId($row['id']);
            $clothes[$index] ->setStock_code($row['stock_code']);
            $clothes[$index] ->setName($row['type_name']);
            $clothes[$index] ->setColor($row['color']);
            $clothes[$index] ->setSize($row['size_name']);
            $clothes[$index] ->setStyle($row['style']);
            $clothes[$index] ->setCategory($row['category']);
            $clothes[$index] ->setPicture($row['picture']);
            $clothes[$index] -> setQuantity($row['quantity']);
            $clothes[$index] -> setPrice($row['price']);
            $clothes[$index] -> setPost_price($row['post_price']);
            $clothes[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothes;
    }

    public function clothesDelete ($id) {
        include 'connect.php';
        $query = sprintf("DELETE FROM cloth_in WHERE id = %d", $id);
        $result = mysql_query($query);
    }

    public function clothesUpdate () {
        include 'connect.php';
        $query = sprintf("UPDATE cloth_in SET stock_code='%s',name='%s',color='%s',size='%s',style='%s',category='%s', picture='%s', quantity=%d,price=%d,total=%d, post_price=%d WHERE id = %d",
                $this->getStock_code(),$this->getName(),  $this->getColor(), $this->getSize(),  $this->getStyle(), $this->getCategory(),  $this->getPicture(), $this->getQuantity(), $this->getPrice(),$this->getTotal(), $this->getPost_price(), $this->getId());
        $result = mysql_query($query);
    }

    public function clothView ($id) {
        include 'connect.php';
        $query = sprintf("SELECT * FROM cloth_in WHERE id = %d", $id);
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            $cloth = new Clothes();
            $cloth ->setStock_code($row['stock_code']);
            $cloth ->setName($row['name']);
            $cloth ->setColor($row['color']);
            $cloth ->setSize($row['size']);
            $cloth ->setStyle($row['style']);
            $cloth ->setCategory($row['category']);
            $cloth ->setPicture($row['picture']);
            $cloth ->setQuantity($row['quantity']);
            $cloth ->setPrice($row['price']);
            $cloth ->setTotal($row['total']);
            $cloth ->setPost_price($row['post_price']);
        }
        return $cloth;
    }

    public function clotheView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function kidsView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Kids' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }
    public function menTrousersView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='Trousers' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function menShirtsView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='Shirts' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function mencostumesView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='Costume' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

     public function menCostumesLargeView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='Costume' and size='large' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        //$clothe = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function menCostumesMediumView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='Costume' and size='Medium' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }
    public function menCostumesSmallView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='Costume' and size='small' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }


    public function menTrousersSmallview(){
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='trousers' and size='small' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }
    public function menTrousersLargeview(){
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='trousers' and size='Large' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }
     public function menTrousersMediumView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='Trousers'and size='medium' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }
public function menShirtsLargeView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='shirts'and size='large' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }
public function  menShirtsMediumView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='shirts'and size='medium' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }
public function menShirtsSmallView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='shirts'and size='small' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }
public function menT_ShirtsSmallView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Men' and name='T_shirts'and size='small' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenGownView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Dresses' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenTrousersView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Trousers' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenSkirtsView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Skirts' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenShirtsView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Shirts' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function kidsCostumesView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Kids' and name='Costume' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function kidsDressesView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Kids' and name='Dresses' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenSkirtSmallView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Skirts' and size='Small' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenSkirtLargeView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Skirts' and size='Large' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenSkirtMediumView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Skirts' and size='Medium' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenShirtSmallView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Shirts' and size='Small' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenShirtMediumView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Shirts' and size='Medium' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenShirtLargeView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Shirts' and size='Large' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenTrouserSmallView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Trousers' and size='Small' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenTrouserMediumView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Trousers' and size='Medium' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenTrouserLargeView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Trousers' and size='Large' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

    public function womenGownSmallView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Dresses' and size='Small' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

     public function womenGownLargeView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Dresses' and size='Large' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }

     public function womenGownMediumView() {
        include 'connect.php';
        $query = sprintf("SELECT co.id, s.stock_code,t.type_name,co.color,z.size_name,co.style,co.category, co.picture, co.quantity,co.post_price,co.total FROM cloth_in co, size z, type t, stock s WHERE co.category='Women' and name='Dresses' and size='Medium' and co.size=z.size_name and co.name=t.type_name and co.stock_code=s.stock_code");
        $result = mysql_query($query);
        $index = 0;
        while ($row = mysql_fetch_array($result)) {
            $clothe[$index] = new Clothes();
            $clothe[$index] -> setId($row['id']);
            $clothe[$index] ->setStock_code($row['stock_code']);
            $clothe[$index] ->setName($row['type_name']);
            $clothe[$index] ->setColor($row['color']);
            $clothe[$index] ->setSize($row['size_name']);
            $clothe[$index] ->setStyle($row['style']);
            $clothe[$index] ->setCategory($row['category']);
            $clothe[$index] ->setPicture($row['picture']);
            $clothe[$index] -> setQuantity($row['quantity']);
            $clothe[$index] -> setPost_price($row['post_price']);
            $clothe[$index] -> setTotal($row['total']);
            $index ++;
        }
        return $clothe;
    }
}
?>