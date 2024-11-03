<?php
namespace Demo\Dao;

use Demo\Entity\User;

class UserDao extends BaseDao {

    private $db = null;
    
    public function __construct() {
        $this->db = $this->getDb();
    }

    public function insert(array $values){

        $fields = array_keys($values);
        $vals = array_values($values);

        $arr = array();
        foreach ($fields as $f) {
            $arr[] = '?';
        }

        $sql = "INSERT INTO users ";
        $sql .= '('.implode(',', $fields).') ';
        $sql .= 'VALUES ('.implode(',', $arr).') ';
        
        $statement = $this->db->prepare($sql);
        
        foreach ($vals as $i=>$v) {
            $statement->bindValue($i+1, $v);
        }
        
        return $statement->execute(); 
    }

    public function searchByEmail($useremail){
        $statement = $this->db->prepare("SELECT * FROM users WHERE useremail LIKE :useremail");
        $statement->bindValue(':useremail', '%'.$useremail.'%');
        $statement->execute(); 
        
        return $statement->fetchAll();
    }

    public function getUsers(){
        return $this->db->query("SELECT id, username, useremail FROM users")->fetchAll();
    }

    public function toArray(User $user){
        $temp = array();
        $temp['username'] = $user->getName();
        $temp['useremail'] = $user->getEmail();
        $temp['password'] = md5($user->getPassword());
        $temp['timestamp'] = time();
        return $temp;
    }
}