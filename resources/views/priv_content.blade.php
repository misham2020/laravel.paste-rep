
<div class="widget-first widget recent-posts">   
    <div class="recent-post group">
        @if(isset($paste))        
                 <div class="hentry-post group"> 
                    <div class="text">
                        @foreach ($paste->sortByDesc('created_at') as $item)
                   
                        @if($item->user_id == $user->id)
                        <a href="#"  title="{{ $item->user->name }} " class="title">{{ $item->user->name }}</a> 
                        <p>{{ $item->NewPaste }}</p>
                        @endif
                       @endforeach
                    </div>
                </div> 
            @else
            <p>нет пасты</p>
            @endif
    </div>
</div>
<div class="general-pagination group">
      
    @if($paste->lastPage() > 1) 
           
           @if($paste->currentPage() !== 1)
               <a href="{{ $paste->url(($paste->currentPage() - 1)) }}"> {{ Lang::get('pagination.previous') }}</a>
           @endif
           
           @for($i = 1; $i <= $paste->lastPage(); $i++)
               @if($paste->currentPage() == $i)
                   <a class="selected disabled">{{ $i }}</a>
               @else
                   <a href="{{ $paste->url($i) }}">{{ $i }}</a>
               @endif		
           @endfor
           
           @if($paste->currentPage() !== $paste->lastPage())
               <a href="{{ $paste->url(($paste->currentPage() + 1)) }}">{{ Lang::get('pagination.next') }}</a>
           @endif
           
       
       @endif
  
   </div>