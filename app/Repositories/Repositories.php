<?php
namespace App\Repositories;

use App\Paste;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

abstract class Repositories{

	protected $model;

    public function get($select = '*', $take = FALSE) {
		
		$builder = $this->model->select($select);
	
		
		 if($take) {
			$builder->take($take);
		}
		

		return $builder->get();
	}
	
	
		
}
