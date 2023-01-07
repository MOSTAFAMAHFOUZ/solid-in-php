<?php 


class MysqlDB implements DatabaseInterface{
    
	/**
	 * @return mixed
	 */
	public function connection() {
        return "db mysql connection";
	}
}