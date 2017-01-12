<?php
class JSONClass {
	
	private $filename = '';
	
	function __construct($filename = 'blog.json'){
		$this->filename = $filename;
	}


	// Декодируем json
	public function jsonDecode() {
		return json_decode( file_get_contents($this->filename) );
		//return json_decode( $this->jsonString );
	} 

	public function jsonOutputAll() {
		return $this->jsonDecode();
	}

/* Создание json из массива
//////////////////////////////////////
$cart = array(
  "orderID" => 12345,
  "shopperName" => "Ваня Иванов",
  "shopperEmail" => "ivanov@example.com",
  "contents" => array(
    array(
      "productID" => 34,
      "productName" => "Супер товар",
      "quantity" => 1
    ),
    array(
      "productID" => 56,
      "productName" => "Чудо товар",
      "quantity" => 3
    )
  ),
  "orderCompleted" => true
);
 
echo json_encode( $cart );
//////////////////////////////////////*/  
}
?>
