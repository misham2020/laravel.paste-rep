<?php
namespace App\Repositories;

use App\User;

class UsersRepositories extends Repositories
{
    public function __construct(User $user) {
		$this->model  = $user;
		
	}

}