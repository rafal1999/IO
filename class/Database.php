<?php
defined("MAIN") or die("brak dostepu");

namespace Util;

class Database
{

    private $conn;

    private $settings;

    function __construct()
    {
        $this->settings = [
            "adress" => "localhost"
            ,"port" => "5432"
            ,"dbname" => "postgres"
            ,"user" => "postgres"
            ,"password" => "postgres"
        ];

    }

    function connect() : bool
    {

        $this->conn = pg_connect("host={$this->settings['adress']} port={$this->settings['port']} dbname={$this->settings['dbname']} user={$this->settings['user']} password={$this->settings['password']}");

        return boolval($this->conn);
    }

    function query(string $query)
    {
        $result = pg_query($this->conn, $query);

        if (!$result) {
            throw new \Exception("Error");
            return null;
        }

        return $result;
    }

    function querySelect(string $query)
    {
        $result = $this->query($query);

        if($result != null){
            return pg_fetch_array($result, NULL, PGSQL_ASSOC);
        }else{
            return null;
        }
    }

}

?>