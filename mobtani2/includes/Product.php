<?php
	if(! class_exists('Product')) {
		class Product
		{
			static function columnsList( $vars, $sep = 'name, price,tadad,size, description ' ){
				$columns = array_keys( $vars );
				return join($sep , $columns);
			}
			static function valuesList( $vars, $sep = "', '" ){
				$values = array_values( $vars );
				return "'" . join($sep , $values) . "'";
			}
			static function add( $params ){
				$columnsString = self::columnsList( $params );
				$valuesString = self::valuesList( $params );
				$tableName = __CLASS__; // self::class
				$sql = "INSERT INTO {$Product}({$columnsString}) 
						VALUES({$valuesString})";
				$result = $GLOBALS['db'] -> execute( $sql );
				if( $result )
					alerts('محصول با موفقیت ثبت شد!', 'success');

			}
			static function update(){}
			static function delete(){}
			static function find(){}
		}
	}
?>