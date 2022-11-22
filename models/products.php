<?php
require_once '../config/database.php';
class Products
{
    protected $db;
    protected $table = 'mbroker';
    public function __construct()
    {
        $this->db = new database();
    }
    public function get($id = false)
    {
        if ($id === false) {
            # code...
        } else {

        }
    }
    public function insert($data)
    {
        # code...
    }
}
