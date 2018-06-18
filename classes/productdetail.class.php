<?php
//product detail class returns an array of 1 product
//unless the product has multiple images in which it will return an array with multiple members of all having the same product id but different images
class ProductDetail extends Products{
  private $query;
  public $product = array();
  public function __construct(){
    parent::__construct();
    $this -> query = '
        SELECT
            p.id AS ID
            ,p.name AS Name
            ,p.price AS Price
            ,p.description AS Description
            ,i.image_file_name AS ImageFile
        FROM products p
        INNER JOIN products_images pi
            ON (p.id = pi.product_id)
        INNER JOIN images i
            ON (pi.image_id = i.image_id)
        WHERE ID = ?';
    // $this -> getProduct( $product_id );
  }
  public function getProduct($product_id){
    $statement = $this -> connection -> prepare( $this -> query );
    $statement -> bind_param( 'i', $product_id );
    $statement -> execute();
    $result = $statement -> get_result();
    if( $result -> num_rows > 0 ){
      while( $row = $result -> fetch_assoc() ){
        array_push( $this -> product, $row );
      }
    }
    return $this -> product;
  }
}
?>