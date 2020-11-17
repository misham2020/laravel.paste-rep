<?php

namespace App\Http\Controllers;

use App\Paste;
use App\Repositories\PasteRepositories;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrivateController extends SiteController
{
    //
    public function __construct(User $u_rep, PasteRepositories $p_rep) {
        parent::__construct(new \App\Repositories\PasteRepositories(new \App\Paste));

        
        
        $this->u_rep = $u_rep;
        $this->p_rep = $p_rep;
        
        $this->template = 'priv';
    }	
    public function index()
    {
       
        //dd($user);
      
      $paste = Paste::paginate(2);
      
      if(Auth::check()){

        $user = Auth::user();

    }
        
        $content = view('priv_content')->with(['paste' => $paste, 'user' => $user ])->render();
        $this->vars = array_add($this->vars,'content',$content);
      
         
        return $this->renderOutput();
    }
    public function getPriv()
    {
        $paste = $this->p_rep->get('*', FALSE);
        
        if($paste){
            $paste->load('user');
        } 
		return $paste;
    }	
}
