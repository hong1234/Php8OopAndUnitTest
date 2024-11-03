<?php
namespace Demo\Service;

use Demo\Entity\User;
use Demo\Dao\UserDao;

class UserService {
    
    public $userDao;

    public function __construct(UserDao $userDao) {     
        $this->userDao = $userDao;
    }

    public function addUser($username, $useremail, $password) {
        $userArr = $this->userDao->toArray(new User($username, $useremail, $password));
        return $this->userDao->insert($userArr);
    }
}