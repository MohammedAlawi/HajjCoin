<?php

class Jquerydb extends model {

    function __construct() {
        parent::__construct();
    }

    function jSelect($table) {
        $sth = $this->db->prepare('SELECT * FROM `' . $table . '`');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

    function jSelectW($table, $array) {
        $parts = array();
        foreach ($array as $key => $value) {
            $parts[] = "`" . $key . "` = '" . $value . "'";
        }
        $sth = $this->db->prepare("SELECT * FROM `$table` WHERE " . implode(" AND ", $parts));
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

    function jSelectWhere($table, $where) {
        $sth = $this->db->prepare("SELECT * FROM $table WHERE $where ");
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

    function jInsert($table, $array) {
        $kayval = array_keys($array);
        $sth = $this->db->prepare("INSERT INTO `$table` (`" . implode('`,`', $kayval) . "`)VALUES('" . implode("','", $array) . "')");
        $data = $sth->execute();
        return $data;
    }

    function jUpdate($table, $array, $where) {
        $parts = array();
        foreach ($array as $key => $value) {
            $parts[] = "`" . $key . "` = '" . $value . "'";
        }
        $sth = $this->db->prepare("UPDATE `$table` SET " . implode(",", $parts) . " WHERE $where");
        $data = $sth->execute();
        return $data;
    }

    function JDelete($table, $where, $limit = 1) {
        $sth = $this->db->prepare("DELETE FROM `$table` WHERE $where LIMIT $limit");
        $data = $sth->execute();
        return $data;
    }

}
