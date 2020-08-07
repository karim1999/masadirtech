<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="@if(session('language')=="ar")
      {{$api['site_profile']->icon_ar}}
      @else
      {{$api['site_profile']->icon_en}}
      @endif
      " />


    <meta name="description" content="
    @if(session('language')=="ar")
      {{$api['site_profile']->site_description_ar}}
      @else
      {{$api['site_profile']->site_description_en}}
      @endif
    ">

    <title>
      @if(session('language')=="ar")
      {{$api['site_profile']->site_name_ar}} | {{$api['site_profile']->site_sub_name_ar}}
      @else
      {{$api['site_profile']->site_name_en}} | {{$api['site_profile']->site_sub_name_en}}
      @endif
    </title>
    {!!$api['site_profile']->google_analytics!!}

  <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174669370-2"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-174669370-2');
      </script>




    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/fontawsome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{env('PUBLIC_PATH')}}/css/switcher.css">

    <style type="text/css">

        @font-face {
      font-family: 'NeoSansArabic';
      src: url('{{env('PUBLIC_PATH')}}/font/NeoSansArabic.eot?#iefix') format('embedded-opentype'),  url('{{env('PUBLIC_PATH')}}/font/NeoSansArabic.woff') format('woff'), url('{{env('PUBLIC_PATH')}}/font/NeoSansArabic.ttf')  format('truetype'), url('{{env('PUBLIC_PATH')}}/font/NeoSansArabic.svg#NeoSansArabic') format('svg');
      font-weight: normal;
      font-style: normal;
    }


    	*{
    		font-family: 'NeoSansArabic', sans-serif;
    		text-decoration: none!important;
            text-align: right;
            direction: rtl;
            outline: none!important
    	}
        .row{
            margin: 0px!important;
        }
        .mr-auto-masader{
            margin-right: auto;
        }
        @if(session('site_mode')=="day")
        html {
          --color-1: #fff;
          --color-2: #f9f9fb;
          --color-3: #333;
          --color-4: #ddd;
          --color-5: #666;
          --hover-c:#66cccc;
          --border-c:#ededed;

        }
        @else
        html {
          --color-1: #1c222b;
          --color-2: #131923;
          --color-3: #ccc;
          --color-4: #888;
          --color-5: #ddd;
          --hover-c:#66cccc;
          --border-c:#3a3c3f;
        }
        @endif






        body{
            background: var(--color-2);
        }

        .dropdown-toggle::after {
            position: relative;
            top: 5px;
            color: var(--color-5);
        }

        .ui-switcher {
        background-color: #808080;
        display: inline-block;
        height: 16px;
        width: 30px;
        border-radius: 10px;
        box-sizing: border-box;
        vertical-align: middle;
        position: relative;
        cursor: pointer;
        transition: border-color 0.25s;
        margin: -2px 4px 0 0;
        box-shadow: inset 1px 1px 1px rgba(0, 0, 0, 0.15);
    }

    .ui-switcher:before {
        font-family: sans-serif;
        font-size: 10px;
        font-weight: 400;
        color: var(--color-2);
        line-height: 1;
        display: inline-block;
        position: absolute;
        top: 6px;
        height: 12px;
        width: 12px;
        text-align: center;

    }

    .ui-switcher:after {
        background-color: var(--color-1);
        content: '\0020';
        display: inline-block;
        position: absolute;
        top: 2px;
        height: 12px;
        width: 12px;
        border-radius: 50%;
        transition: left 0.25s;


    }
    .border,.border-bottom{
        border-color: var(--border-c)!important;
    }
    .ui-switcher[aria-checked=true]:before {
        content: '';
     /*   background: var(--color-2);*/
    }
    .ui-switcher[aria-checked=true]:after {
        left: 15px;
    }

    .ui-switcher[aria-checked=false]:before {
        content: '';
    }

    .ui-switcher[aria-checked=true] {
        background: #25ba9a;
    }

    @media (min-width: 1605px) {
      .container-fluid{
        max-width: 1600px;
      }
    }

    .navbar-nav .nav-item .nav-link{
        color: var(--color-5);
    }

    .with-hover-a a:hover ,.with-hover-a a:hover *{
        color:  var(--hover-c)!important;
    }
    .card-img, .card-img-top {
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
    }

    html{scroll-behavior:smooth}
    @media (max-width: 992px) {
    .navbar-collapse {
        position: absolute;
        top: 54px;
        left: 0;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        width: 100%;
        margin-top: 20px;
    }
    .navbar-collapse.collapsing {
        height: auto;
        -webkit-transition: left 0.3s ease-in-out;
        -o-transition: left 0.3s ease-in-out;
        -moz-transition: left 0.3s ease-in-out;
        transition: left 0.3s ease-in-out;
        left: -100%;
    }
    .navbar-collapse.show {
        left: 0;
        -webkit-transition: left 0.3s ease-in-out;
        -o-transition: left 0.3s ease-in-out;
        -moz-transition: left 0.3s ease-in-out;
        transition: left 0.3s ease-in-out;
    }
}



    @if(session('language')=="en")
    *{
        text-align: left;
        direction: ltr;
    }
    .mr-auto-masader{
        margin-right: unset;
        margin-left: auto;
    }
    .text-left{
        text-align: right!important;
    }
    .text-right{
        text-align: left!important;
    }

    @endif

    .twitter a,.twitter span ,.twitter p{

        display: block;
        font-weight: normal!important;
        line-height: 1.6!important;
    }
    .twitter img{
        width: 20px;
    }

    .twitter b{
        display: inline-block;
        padding: 2px 5px;
        font-weight: normal;
    }
    .twitter p{
        display: block!important;
    }
    .twitter .twitter-hashtag{
        display: inline-block;
    }
    .twitter *{
       text-align: justify!important;
    }
    .twitter .invisible,.twitter .tco-ellipsis,.twitter .tco-ellipsis{
        display: none;
    }
    .TweetTextSize{
        margin: 0px
    }

    /* width */
::-webkit-scrollbar {
  width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
  /*box-shadow: inset 0 0 5px grey; */
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #666;
}
  .container-fluid{
    padding: 0px
  }

    </style>
  </head>
  <body class="@if(session('site_mode')=='day') night @endif">


    <div class="col-12">
  @if(session('language')=="ar" && session('popup_status')!="false" && $api['advs']->popup_status==1)
  {!!$api['advs']->popup_ar!!}
  @elseif(session('popup_status')!="false" && $api['advs']->popup_status==1)
  {!!$api['advs']->popup_en!!}
  @endif
</div>

<div class="col-12">
      @if(session('language')=="ar" && session('header_status')!="false" && $api['advs']->header_status==1)
          {!!preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $api['advs']->header_ar)!!}
      @elseif(session('header_status')!="false" && $api['advs']->header_status==1)
          {!!preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $api['advs']->header_en)!!}
      @endif
</div>



    @yield('content')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{env('PUBLIC_PATH')}}/js/jquery.switcher.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $.switcher();
        });
    </script>
    <script type="text/javascript">
    var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}
</script>




<script type="text/javascript">

    $('#inlineCheckbox1').on('click',function(){

    if($('body').hasClass('night'))
    {
        $('html').get(0).style.setProperty('--color-1', '#1c222b');
        $('html').get(0).style.setProperty('--color-2', '#131923');
        $('html').get(0).style.setProperty('--color-3', '#ccc');
        $('html').get(0).style.setProperty('--color-4', '#888');
        $('html').get(0).style.setProperty('--color-5', '#ddd');
        $('html').get(0).style.setProperty('--border-c', '#3a3c3f');

        @if(session('language')=="ar")
        $('#site-logo').attr('src', '{{$api['site_profile']->logo_ar_path_dark}}');
        @else
        $('#site-logo').attr('src', '{{$api['site_profile']->logo_en_path_dark}}');
        @endif
        $('#devlab-footer').attr('src','https://footer.devlab.ae/{{session('language')}}?mode=night');
        $.ajax({
          method: "GET",
          url: "{{route('switch_site_mode')}}"
        })
          .done(function( msg ) { });

    }
    else{
        $('html').get(0).style.setProperty('--color-1', '#fff');
        $('html').get(0).style.setProperty('--color-2', '#f9f9fb');
        $('html').get(0).style.setProperty('--color-3', '#333');
        $('html').get(0).style.setProperty('--color-4', '#ddd');
        $('html').get(0).style.setProperty('--color-5', '#666');
        $('html').get(0).style.setProperty('--border-c', '#ededed');

        @if(session('language')=="ar")
        $('#site-logo').attr('src', '{{$api['site_profile']->logo_ar_path}}');
        @else
        $('#site-logo').attr('src', '{{$api['site_profile']->logo_en_path}}');
        @endif

        $.ajax({
          method: "GET",
          url: "{{route('switch_site_mode')}}"
        })
          .done(function( msg ) { });
          $('#devlab-footer').attr('src','https://footer.devlab.ae/{{session('language')}}?mode=day');
    }
    $('body').toggleClass('night');
     });

</script>



@if(session('language')=="ar" && $api['footer']->footer_ar_enabled==1)
{!!$api['footer']->footer_ar!!}
@elseif($api['footer']->footer_en_enabled==1)
{!!$api['footer']->footer_en!!}
@endif




  </body>
</html>
