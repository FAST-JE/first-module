<?php
class Connection {
    public static function make($config)
    {
        return new PDO("{$config["db_dsn"]};charset={$config["charset"]};", $config["db_user"], $config["db_pass"]);
    }
}