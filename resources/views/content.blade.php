
<div id="content-home" class="content group">
<div id="content-single" class="content group">
    <div class="hentry hentry-post blog-big group ">
        
        <div>
            <div id="content-page" class="content group">
                <div class="hentry group">
                    <form id="contact-form-contact-us" class="contact-form" method="post" action=" {{ route('store') }}" enctype="multipart/form-data">
                        <div class="usermessagea"></div>
                        <fieldset>
                            <ul>
                                <li class="textarea-field">
                                    <label for="message-contact-us">
                                    <span class="label">New Paste</span>
                                    </label>
                                    <div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span><textarea style="width:600px; height:150px;" name="text" id="message-contact-us" rows="8" cols="30" class="required"></textarea></div>
                                    <div class="msg-error"></div>
                                </li>
                                
                                <li class="text-field">
                                    <label for="name-contact-us">
                                    <span class="label">Syntax Highlighting:</span>
                                    <br />
                                    
                                    </label>
                                    <div class="input-prepend">
                                    {!! Form::select('lang', $lang) !!} 
                                    </div>
                                     
                                </li>
                                <li class="text-field">
                                    <label for="name-contact-us">
                                    <span class="label">Paste Expiration:</span>
                                    <br />
                                    
                                    </label>
                                    <div class="input-prepend">
                                    {!! Form::select('timeOn', $timeOn) !!}
                                    </div>
                                </li>
                                <li class="text-field">
                                    <label for="name-contact-us">
                                    <span class="label">Paste Exposure:</span>
                                    <br />
                                   
                                    </label>
                                    <div class="input-prepend">
                                    {!! Form::select('priv', array('Public' => 'Public', 'Unlisted' => 'Unlisted',  'Private' => 'Private')) !!}
                                    </div>
                                </li>
                                <li class="text-field">
                                    <label for="name-contact-us">
                                    <span class="label">Name</span>
                                    </label>
                                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><input type="text" name="name" id="name-contact-us" class="required" value="" /></div>
                                    <div class="msg-error"></div>
                                </li>
                               
                                <li class="submit-button">
                                {{ csrf_field() }}
                                  
                                   
                                    <input type="submit" name="CreateNew" value="Create New " class="sendmail alignright" />			
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                   
                </div>
        </div>
        <!-- post meta -->
        <div class="meta group">
        
        </div>
        <!-- post content -->
        <div class="the-content single group">
            
            
        
    </div>
    </div> 

</div>