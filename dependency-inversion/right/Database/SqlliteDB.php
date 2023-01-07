<?php 


class SqlliteDB implements DatabaseInterface{
    
	/**
	 * @return mixed
	 */
	public function connection() {
        return "db sqlite connection";
	}
}