<?php
namespace App\Repositories;

use App\Paste;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PasteRepositories extends Repositories
{
    public function __construct(Paste $paste) {
		$this->model  = $paste;
		
	}
	
	public function addPaste($request) {
		
		
		$data = $request->all();

		$id = DB::getPdo()->lastInsertId();
		$id = str_limit(Hash::make($id), 10);
		
		$data = array_add($data, 'id', $id);
		
		$paste = $this->model->create([

            'name' => $data['name'], 
			'NewPaste' => $data['text'],
			'expiration_id' => $data['timeOn'],
			'languag_id' => $data['lang'],
			'hash' => $data['id'],
			'priv' => $data['priv'],
			
			]
		);
		
		//dd($data);
		return ['status' => 'материал добавлен'];
		
	}
}