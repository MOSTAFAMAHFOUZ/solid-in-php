<?php 



class DB{

    private $db;
    public function __construct(DatabaseInterface $db){
        $this->db = $db;
    }

	/**
	 * @return mixed
	 */
	public function connection() {
		return $this->db->connection();
	}
}