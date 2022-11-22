<?php
/**
 * using mysqli_connect for database connection
 */
class database
{
    protected $dbHost = 'localhost';
    protected $dbName = 'db_utspwb';
    protected $dbUsername = 'root';
    protected $dbPassword = '';

    public function connect()
    {
        // koneksi ke server MySQL
        $mysqli = new mysqli(
            $this->dbHost,
            $this->dbUsername,
            $this->dbPassword,
            $this->dbName
        );

        // cek koneksi tersambung atau tidak
        if ($mysqli->connect_error) {
            echo 'Gagal terkoneksi ke database : (' .
                $mysqli->connect_error .
                ')';
        }

        // nilai kembalian bila koneksi berhasil
        return $mysqli;
    }
}
?>
