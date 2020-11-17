
<div class="widget-first widget recent-posts">   
    <div class="recent-post group">
        @if(isset($paste))        
                 <div class="hentry-post group"> 
                    <div class="text">
                        @foreach ($paste->sortByDesc('created_at') as $item)
                        @if(($item->priv) == 'Public')
                        <a href="#"  title="{{ $item->name }} " class="title">{{ $item->name }}</a> 
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

