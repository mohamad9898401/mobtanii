<?php
	include 'Product.php';
	// include ...
if(! class_exists('DB')) {
	class DB{
		var $dbc; // class property
		function __construct( $selectDB = true ){
			$this -> connect();
			if( $selectDB )
				$this -> selectDB();
			$this -> dbc -> set_charset( CHARSET );
		}
		
		function connect(){
			$this -> dbc = new mysqli(sql200.b6b.ir, b6bi_27936531,,b6bi_27936531_w449); 
			if( $this -> dbc -> connect_error ){
				$error = "
						خطا در اتصال به دیتابیس!
						<section lang = 'en'>{$this -> dbc -> connect_error}</section>";
				die( $error );
			}
		}
		function selectDB(){
			$this -> dbc -> select_db(DBNAME);
			if( $this -> dbc -> error ){
				$error = "
						خطا در انتخاب دیتابیس!
						<section lang = 'en'>{$this -> dbc -> error}</section>";
				die( $error );
			}
		}

		function execute( $sql, $params = false )
		{
			// 3. execute query
			$result = $this -> dbc -> query( $sql ); // mysqli_query

			if( $this -> dbc -> error ){
				$error = "
						خطا در اجرای کوئری!
						<section lang = 'en'>{$sql}<br>
						{$this -> dbc -> error}</section>";
				die( $error );
			}
			else
				return true;
		}
		
		function __destruct(){
			$this -> dbc -> close();
		}
	}
}
