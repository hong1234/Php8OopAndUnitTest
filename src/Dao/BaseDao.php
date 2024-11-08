<?php
namespace Demo\Dao;

use PDO;

abstract class BaseDao {
    protected final function getDb(){
        try {
            $db = new PDO(
                'mysql:host=127.0.0.1:3306;dbname=hongtest77', //connect
                'root',     //user
                'Vuanh--66' //password
            );
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            throw new \Exception('Connection failed --: ' . $e->getMessage());
        }
        
        return $db;
    }

    // abstract protected function get($uniqueKey);
    // abstract protected function insert(array $values);
    // abstract protected function update($id, array $values);
    // abstract protected function delete($uniqueKey);
}