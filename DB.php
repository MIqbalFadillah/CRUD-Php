<?php
class DB{


var $server='localhost';
var $user='root';
var $pwd='';
var $dbname='dbb4';

function open()
{
    $conn=mysql_connect($this->server,$this->user,$this->pwd);
        if($conn)
            mysql_select_db($this->dbname) or die('Gagal MMemanggil database :' .$this->dbname);
        else
            die('Gagal koneksi ke server:' .$this->server);
        return $conn;
}

    function recordset($sql='',$conn)
    {
        $res = array();
        $rs = mysql_query($sql,$conn);

        while($row = mysql_fetch_assoc($rs))
        {
            $res[]= $row;
        }
        return $res;
    }

}

?>

