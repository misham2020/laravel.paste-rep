<body>
<div id="content-home" class="content group">
    <div id="content-single" class="content group">
        <div class="hentry hentry-post blog-big group ">
            
            <div>
                <div id="content-page" class="content group">
                    <div class="hentry group">
                        
                       {{--  <form id="contact-form-contact-us" class="contact-form" method="post" action="{{ route('create', ['id' => $past->id]) }}" enctype="multipart/form-data"> --}}
                         {!! Form::open(['url' =>  route('create', ['id'=>$past->hash]),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                        
                            <div class="usermessagea"></div>
                            <fieldset>
                                <ul>
                                    <li class="text-field">
                                        <label for="name-contact-us">
                                            <span class="label">Имя:</span>
                                            <br />
                                            <span class="sublabel">Имя</span><br />
                                        </label>
                                        <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                                      {!! Form::text('name', $past->name  ) !!}
                                         </div> 
                                     </li>
                
                                    <ul>
                                        @if($past->languag_id == 2)
                                        <div class="mycode">`<pre><code class="javascript">{{ $past->NewPaste }}</code></pre>`<div>
                                        @elseif($past->languag_id == 1)
                                        <div class="mycode">`<pre><code class="php">{{ $past->NewPaste }}</code></pre>`<div>
                                        @else
                                        <div class="mycode">`<pre><code class="html">{{ $past->NewPaste }}</code></pre>`<div>
                                        @endif
                                    </ul>
                                    
                                    <ul>
                                        <div class="mycode">{{ $past->NewPaste }}<div>
                                    </ul>
                                   
                                </ul>
                                
                            </fieldset>
                            {!! Form::close() !!}
                          
                    </div>
            </div>
            <!-- post meta -->
            
            </div>
            <!-- post content -->
        
        </div> 
    
    </div>
   
        
</body>