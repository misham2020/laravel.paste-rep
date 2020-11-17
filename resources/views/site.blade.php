<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !IE]>
<html dir="ltr" lang="en-US">
<![endif]-->

    <!-- START HEAD -->
    <head>
        
        <meta charset="UTF-8" />
        <!-- this line will appear only if the website is visited with an iPad -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pastebin </title>
        
       
        
        <!-- CSSs -->
        <link rel="stylesheet" type="text/css" media="all" href="{{ asset('site/css/reset.css') }}" /> <!-- RESET STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="{{ asset('site/style.css') }}" /> <!-- MAIN THEME STYLESHEET -->
        <link rel="stylesheet" id="max-width-1024-css" href="{{ asset('site/css/max-width-1024.css') }}" type="text/css" media="screen and (max-width: 1240px)" />
        <link rel="stylesheet" id="max-width-768-css" href="{{ asset('site/css/max-width-768.css') }}" type="text/css" media="screen and (max-width: 987px)" />
        <link rel="stylesheet" id="max-width-480-css" href="{{ asset('site/css/max-width-480.css') }}" type="text/css" media="screen and (max-width: 480px)" />
        <link rel="stylesheet" id="max-width-320-css" href="{{ asset('site/css/max-width-320.css') }}" type="text/css" media="screen and (max-width: 320px)" />
        <link href="/css/app.css" rel="stylesheet">
        <style>
            .mycode{
                height: 300px;
                width: 600px;
                background: #fff;
                border: 1px solid;
                overflow-y: scroll; 
                
            }
            
            </style>
        
        <!-- CSSs Plugin -->
        <link rel="stylesheet" id="thickbox-css" href="{{ asset('site/css/thickbox.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" id="styles-minified-css" href="{{ asset('site/css/style-minifield.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" id="buttons" href="{{ asset('site/css/buttons.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" id="cache-custom-css" href="{{ asset('site/css/cache-custom.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" id="custom-css" href="{{ asset('site/css/custom.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" id="custom-css" href="{{ asset('site/css/default.css') }}" type="text/css" media="all" />
        
        
        <!-- FONTs -->
        <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
        <link rel='stylesheet' href="{{ asset('site/css/font-awesome.css') }}" type='text/css' media='all' />
        
        <!-- JAVASCRIPTs -->
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/comment-reply.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.quicksand.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.cycle.min.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.anythingslider.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.easing.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.aw-showcase.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/layerslider.kreaturamedia.jquery-min.js"></script>
        <script type="text/javascript" src="{{ asset('site') }}/js/shortcodes.js"></script>
		<script type="text/javascript" src="{{ asset('site') }}/js/jquery.colorbox-min.js"></script> <!-- nav -->
        <script type="text/javascript" src="{{ asset('site') }}/js/jquery.tweetable.js"></script>
        
        
		

    </head>
    <!-- END HEAD -->
    
    <!-- START BODY -->
    <body class="no_js responsive page-template-home-php stretched">
        
        <!-- START BG SHADOW -->
        <div class="bg-shadow">
            
            <!-- START WRAPPER -->
            <div id="wrapper" class="group">
                
                @yield('nav')

               @if (count($errors) > 0)
				    <div class="box error-box">
				        
				            @foreach ($errors->all() as $error)
				                <p>{{ $error }}</p>
				            @endforeach
				   
				    </div>
				@endif
				
				@if (session('status'))
				    <div class="box success-box">
				        {{ session('status') }}
				    </div>
				@endif
				
				@if (session('error'))
				    <div class="box error-box">
				        {{ session('error') }}
				    </div>
				@endif

				<!-- START PRIMARY -->
				<div id="primary" class="sidebar-right{{-- {{ isset($bar) ? $bar : 'no'}} --}}">
				    <div class="inner group">
				        <!-- START CONTENT -->
                        @yield('content')
                        
                        
				        <!-- END CONTENT -->
				        <!-- START SIDEBAR -->
				        @yield('Bar')
				        <!-- END SIDEBAR -->
				        <!-- START EXTRA CONTENT -->
				        <!-- END EXTRA CONTENT -->
				    </div>
				</div>
				<!-- END PRIMARY -->
				
				
            </div>
            <!-- END WRAPPER -->
        </div>
        <!-- END BG SHADOW -->
        
        <script type="text/javascript" src="{{ asset('site/js/jquery.custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/js/contact.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/js/jquery.mobilemenu.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('site/js/highlight.pack.js') }}"></script> 
        
        <script>hljs.initHighlightingOnLoad();</script>
        
       

        

         
    </body>
    <!-- END BODY -->
</html>


