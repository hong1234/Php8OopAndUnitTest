<?php
namespace Demo\Service;

use Demo\Entity\User;
use Demo\Dao\UserDao;

class UserService {
    
    public $userDao;

    public function __construct(UserDao $userDao) {     
        $this->userDao = $userDao;
    }

    public function addUser(User $user) {
        $userArr = $this->userDao->toArray($user);
        return $this->userDao->insert($userArr);
    }
}