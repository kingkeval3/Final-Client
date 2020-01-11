<?php
class Database
{
        public function open_connection()
        {
            $host="localhost";
            $user="root";
            $pass="";
            $database="photoraphy";
            return mysqli_connect($host,$user,$pass,$database);
        }

        public function close_connection()
        {
            return null;
        }
}

