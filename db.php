<?php
class Database
{
    private $host;
    private $port;
    private $db;
    private $username;
    private $password;
    private $crs;
    private $connection;

    public function __construct()
    {
        $this->host = "127.0.0.1";
        $this->port = 3306;
        $this->db = "amtor";
        $this->username = "root";
        $this->password = "";
        $this->crs = "utf8";
        $this->getDb();
    }
    private function getDB()
    {
        $this->connection = new PDO('mysql:host=' . $this->host . ':' . $this->port . ';charset=' . $this->crs . ';dbname=' . $this->db, $this->username, $this->password);
    }
    public function doRequest($sql, $param = [])
    {
        $result = $this->connection->prepare($sql);
        $result->execute($param);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function select($sql, $param = [])
    {
        return ($this->doRequest($sql, $param));
    }
    public function insert($sql, $param = [])
    {
        $result_insert = $this->doRequest($sql, $param);
        return $this->connection->lastinsertid();
    }
    public function selectFirstColumn($sql, $param = [])
    {
        $query = $this->select($sql, $param);
        $columnIndex = array_key_first($query[0]);
        $result = array_column($query, $columnIndex);
        return $result;
    }
    public function selectFirstCell($sql, $param = [])
    {
        return $this->selectFirstColumn($sql, $param)[0];
    }
}
