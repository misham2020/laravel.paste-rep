<?php

namespace App\Http\Controllers;

use App\Paste;
use App\Repositories\PasteRepositories;
use App\User;
use App\Http\Requests\PasteRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PasteController extends SiteController
{
    public function __construct(User $u_rep) {
    	

    	parent::__construct(new \App\Repositories\PasteRepositories(new \App\Paste));
    	
        $this->u_rep = $u_rep;
        
    	$this->template = 'index';
		
    }
    public function index()
    {
        //
        $date = Carbon::now();

        $paste = $this->getPaste();
        foreach ($paste as $item) {
        $diff = $date->diffInMinutes($item->created_at);
        if($item->expiration_id == '4'){
            $var = 10;
        }
        if($item->expiration_id == '5'){
            $var = 60;
        }
        if($item->expiration_id == '6'){
            $var = 1440;
        }
        
        if($var<$diff){
                 $item->delete();
        }
    }
    
    if(Auth::check()){

        $user = Auth::user();

    }
        $lang = DB::table('languages')->get();
        $lang = $lang->reduce(function ($lanRoles, $lang) {
		    $lanRoles[$lang->id] = $lang->language;
		    return $lanRoles;
        }, []);
        //dd($lang);
        $timeOn = DB::table('deadlines')->get();
        
        $timeOn = $timeOn->reduce(function ($timeRoles, $timeOn) {
		    $timeRoles[$timeOn->id] = $timeOn->deadline;
		    return $timeRoles;
        }, []);
       
        //$past = DB::table('pastebin')->where('id',$id)->first();
        $content = view('content')->with(['lang' => $lang, 'timeOn' => $timeOn,  'user' => isset($user)  ])->render();
        $this->vars = array_add($this->vars,'content',$content);
      
         
         $this->contentRightBar = view('indexBar')->with('paste',$paste)->render();
         
        
        
        return $this->renderOutput();
    }
    public function getPaste() {
		$paste = $this->p_rep->get('*', 10);
		return $paste;
    }
    public function create($id)
    {
        //
       
       $past = DB::table('pastebin')->where('hash',$id)->first();
       $lang = DB::table('languages')->get();
        //dd($paste);

        
        $content = view('content_new') ->with(['past'=> $past, 'lang' => $lang ]) ->render();
        $this->vars = array_add($this->vars,'content',$content);

        $paste = $this->getPaste();
         $this->contentRightBar = view('indexBar')->with('paste',$paste)->render();
        
        return $this->renderOutput();
    }
    public function store(PasteRequest $request)
    {
        //

        $result = $this->p_rep->addPaste($request);
        
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
        }
        $hash = DB::table('pastebin')->latest()->first();
       
       
      $id = $hash->hash;
     //dd($id);
		return redirect()->route('create', ['id'=> $id])->with($result);
    }
    

    
}