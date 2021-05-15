
<?php
class Product {
  public $Name;
  public $id;
  public $Price;
  public $imageUrl;

  function __construct($id,$name,$price,$image) {
    $this->Name = $name;
    $this->id = $id;
    $this->Price=$price;
    $this->imageUrl=$image;
  }
}
?>