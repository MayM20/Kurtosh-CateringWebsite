<?php

class Products extends Database{
    private $query;
    public $products = array(); //or [] to create an array
    
    public function __construct(){
        parent::__construct();
        $this -> query = 'SELECT
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
        GROUP BY p.id';
        
        $this -> getProducts();
    }
    private function getProducts(){
        $statement = $this -> connection -> prepare($this -> query);
        $statement -> execute();
        
        $result = $statement -> get_result();
        
        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc() ){
                array_push($this -> products, $row);
                
            }
        }
        else {
            throw new Exception("query returned no result");
        }
    }
}


?>