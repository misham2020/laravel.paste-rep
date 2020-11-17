<?php

namespace App\Http\Controllers;

use App\Repositories\PasteRepositories;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    protected $p_rep;
    protected $u_rep;
    protected $vars;
    protected $template;
    protected $rightBar;
    protected $contentRightBar = FALSE;

    

   
	
    public function __construct(PasteRepositories $p_rep) {
		     $this->p_rep = $p_rep;
	}
  
  protected function renderOutput() {

    $nav = view('nav')->render();
    $this->vars = array_add($this->vars, 'nav', $nav);
      
    
			$rightBar = view('rightBar')->with('content_rightBar',$this->contentRightBar)->render();
			$this->vars = array_add($this->vars,'rightBar',$rightBar);
		
		
      
      return view($this->template)->with($this->vars);
  }

  
}
