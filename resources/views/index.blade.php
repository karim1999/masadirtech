@extends('includes.header')
@section('content')


{{--  <rssapp-wall id="qgEyhLK2npaHSGzy"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
 --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light  border-bottom  fixed-top" style="background: var(--color-1)!important;position: fixed; /* Make it stick/fixed */
  top: 0; /* Stay on top */
  width: 100%; /* Full width */
  transition: top 0.3s;  " id="navbar">
    <div class="container-fluid">


  <a class="navbar-brand" href="#">
    <img src="
    @if(session('language')=="ar" && session('site_mode')=="day")
    {{$api['site_profile']->logo_ar_path}}
    @elseif(session('language')=="ar" && session('site_mode')!="day")
    {{$api['site_profile']->logo_ar_path_dark}}
    @elseif(session('language')!="ar" && session('site_mode')=="day")
    {{$api['site_profile']->logo_en_path}}
    @elseif(session('language')!="ar" && session('site_mode')!="day")
    {{$api['site_profile']->logo_en_path_dark}}
    @endif

    " width="165"  alt="" id="site-logo">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color:var(--color-3)">
    <span class="fal fa-bars" style="color: var(--color-3); "></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: var(--color-1)">
    <ul class="navbar-nav with-hover-a">
     {{--  <li class="nav-item   px-2">
        <a class="nav-link" href="#company" >شركات <span class="sr-only">(current)</span></a>
      </li> --}}
      <li class="nav-item px-2">
        <a class="nav-link" href="#site">@lang('index.websites')</a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#youtube">@lang('index.youtube_channels')</a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#twitter">@lang('index.twitter_accounts')</a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#baaeed">@lang('index.jobs')</a>
      </li>


    </ul>

    <div class="form-inline my-2 my-lg-0 mr-auto-masader">

    <ul class="navbar-nav with-hover-a">


      <li class="nav-item dropdown">
        <a class="nav-link  " href="{{route('switch_language')}}" id="navbarDropdown"   style="font-size: 14px;">
            @if(session('language')=="ar")
            English
            @else
            عربي
            @endif
        </a>
        {{-- <div class="dropdown-menu " aria-labelledby="navbarDropdown" style="border-radius: 0px;background: var(--color-1)">
          <a class="dropdown-item" href="{{route('switch_language')}}" style="color: var(--color-5)" class="text-right">عربي</a>
          <a class="dropdown-item" href="{{route('switch_site_mode')}}" style="color: var(--color-5)"  class="text-right" >English</a>

        </div> --}}
      </li>
      <li class="py-1">

          <div style="display: inline-block; ;color:var(--second-font-color);padding: 7px;font-size: 13px;color: var(--color-4)"  >
                    @lang('index.night_mode')
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="opacity: 0" @if(session('site_mode')=='night' ) checked=""  @endif>
                </div>

      </li>
    </ul>


    </div>
  </div>
  </div>
</nav>

<div class="col-12" style="height: 80px;">

</div>
<div class="col-12">




</div>
  @if(session('header_status')!="false" && $api['advs']->header_status==1)
<div class="container-fluid mb-4 mt-5" style="padding: 20px 8%;width: 1200px;max-width: 100%">
    <div class="col-12 px-0 border" style="padding: 10px;background: var(--color-1); border-radius: 2px;margin: 0px auto;" id="adv">
        <div class="col-12 row" style="padding: 0px 5px;">
            <div class="col-10" style="height: 38px;padding: 5px 10px">
                <h6 style="color: var(--color-5) ;font-size: 15px;" class="
                text-right
                 "> @lang('index.annonce')                     </h6>
            </div>
            <div class="col-2
                text-left
            " style="height: 38px;padding: 0px 10px;position: relative;z-index: 1">
                <span class="fa fa-times" style="color: var(--color-2);background: var(--color-5);padding: 5px 7px;border-radius: 50%;font-size: 10px;margin-top: 6px;cursor: pointer;z-index: 1;position: relative;display: inline-block;" onclick="$('#adv').slideUp();"></span>
            </div>
            <p style="color: var(--color-5);text-align: justify;padding: 5px 5px;position: relative;z-index: 1;font-size: 14px" class="px-3">
                @if(session('language')=="ar")
                {!!$api['advs']->header_ar!!}
                @else
                {!!$api['advs']->header_en!!}
                @endif
            </p>
        </div>
    </div>
</div>
 @endif

{{-- <div class="col-12 mt-5" id="company">
    <div class="container-fluid" >
        <div class="col-12">
            <h4 style="color: var(--color-5)"><i class="fal fa-building" style="color: #c27b48;font-size: 27px" ></i> شركات</h4>
        </div>
        <div class="col-12 row mt-3 px-0">

            @for($i=0 ; $i<5;$i++)
            <div class="col-md-6 col-lg-4 col-xl col-12">
                <div class="col-12 border rounded mt-3 px-0 " style="background: var(--color-1);">
                    <div class="col-12 text-center pt-4" style=" height: 80px">
                        <img src="https://fna24.com/wp-content/uploads/2018/03/google-logo-png-hd-11.png" style="max-width: 60%;width: 200px;display: inline-block;">
                    </div>


                    <div class="col-12 mt-4 mb-4 with-hover-a">
                        <div style=" text-align: right;" class="pt-3">
                            <a href="#" target="_blank">
                                <h5 style="text-align: right;color: var(--color-3);font-size: 15px;" class="d-block mb-0">اسعر الذهب في السوق المحلية - شبكة أبو ظبي الإخبارية</h5>
                            </a>
                            <span style="color: #888;font-size: 12px;">اخبار البلد | منذ 3 ساعات</span>
                        </div>
                        <div style=" text-align: right;" class="pt-3">
                            <a href="#" target="_blank">
                                <h5 style="text-align: right;color: var(--color-3);font-size: 14px;" class="d-block mb-0">اسعر الذهب في السوق المحلية - شبكة أبو ظبي الإخبارية</h5>
                            </a>
                            <span style="color: #888;font-size: 12px;">اخبار البلد | منذ 3 ساعات</span>
                        </div>
                        <div style=" text-align: right;" class="pt-3">
                            <a href="#" target="_blank">
                                <h5 style="text-align: right;color: var(--color-3);font-size: 14px;" class="d-block mb-0">اسعر الذهب في السوق المحلية - شبكة أبو ظبي الإخبارية</h5>
                            </a>
                            <span style="color: #888;font-size: 12px;">اخبار البلد | منذ 3 ساعات</span>
                        </div>
                        <div style=" text-align: right;" class="pt-3">
                            <a href="#" target="_blank">
                                <h5 style="text-align: right;color: var(--color-3);font-size: 14px;" class="d-block mb-0">اسعر الذهب في السوق المحلية - شبكة أبو ظبي الإخبارية</h5>
                            </a>
                            <span style="color: #888;font-size: 12px;">اخبار البلد | منذ 3 ساعات</span>
                        </div>
                        <div style=" text-align: right;" class="pt-3">
                            <a href="#" target="_blank">
                                <h5 style="text-align: right;color: var(--color-3);font-size: 14px;" class="d-block mb-0">اسعر الذهب في السوق المحلية - شبكة أبو ظبي الإخبارية</h5>
                            </a>
                            <span style="color: #888;font-size: 12px;">اخبار البلد | منذ 3 ساعات</span>
                        </div>
                        <div style=" text-align: right;" class="pt-3">
                            <a href="#" target="_blank">
                                <h5 style="text-align: right;color: var(--color-3);font-size: 14px;" class="d-block mb-0">اسعر الذهب في السوق المحلية - شبكة أبو ظبي الإخبارية</h5>
                            </a>
                            <span style="color: #888;font-size: 12px;">اخبار البلد | منذ 3 ساعات</span>
                        </div>

                    </div>

                </div>
            </div>
            @endfor

        </div>
    </div>
</div> --}}

<div class="col-12 mt-5 px-0"  id="site">
    <div class="container-fluid">
        <div class="col-12">
            <h4 style="color: var(--color-5)"><i class="fab fa-wordpress" style="color: #63c8c0;font-size: 27px" ></i> @lang('index.websites')</h4>
        </div>
        <div class="col-12 row mt-3 px-0">

            @foreach($posts->where('type','site')->where('language',session('language'))->groupBy('website') as $main_site)



                <div class="col-md-6 col-lg-6 col-xl-3  col-12">
                    <div class="col-12 border rounded mt-3 px-0 " style="

                    background: var(--color-1) ;">
                        <div class="col-12 text-center pt-4 d-flex" style="height:90px ;">
                            @foreach($main_site as $site)
                            <img src="{{$site->avatar}}" style="max-width: 60%;width: 120px;display: inline-block;" class="m-auto">
                            @php
                            break;
                            @endphp
                            @endforeach
                        </div>


                        <div class="col-12 mt-4 mb-4 with-hover-a">
                            @php
                            $i=0;
                            @endphp
                            @foreach($main_site as $site)
                            <div  class="pt-3 text-right">
                                <a href="{{$site->link}}" target="_blank">
                                    <h5 style="color: var(--color-3);font-size: 14px;" class="d-block mb-0 text-right">{{$site->title}}</h5>
                                </a>
                                <span style="color: #888;font-size: 12px;">{{$site->author}} | {{\Carbon::parse($site->pubDate)->diffForHumans()}}</span>
                            </div>

                            @php
                            if(++$i == 7)
                            break;
                            @endphp


                            @endforeach



                        </div>

                    </div>
                </div>





            @endforeach
        </div>
    </div>
</div>




<div class="col-12 mt-5 px-0"  id="youtube">
    <div class="container-fluid">
        <div class="col-12">
            <h4 style="color: var(--color-5)"><i class="fab fa-youtube" style="color: #dc472e;font-size: 27px" ></i>@lang('index.youtube_channels')</h4>
        </div>

        <div class="col-12 row mt-3 px-0">
            @php
            $temp=0;
            @endphp

            @foreach($posts->where('type','youtube')->where('language',session('language')) as $youtube)
            <div class="col-sm-6 col-lg-4 col-xl col-12  with-hover-a">

                <div class="card col-12 px-0 mt-4 border " style="width: 100%;border-radius: 2px">
                  <div style="overflow:hidden;position: relative;" style="width: 100%">
                    <iframe frameborder="0" scrolling="no"   allowfullscreen="allowfullscreen"
        mozallowfullscreen="mozallowfullscreen"
        msallowfullscreen="msallowfullscreen"
        oallowfullscreen="oallowfullscreen"
        webkitallowfullscreen="webkitallowfullscreen"
         src="https://www.youtube.com/embed/{{str_replace('https://www.youtube.com/watch?v=', '', $youtube->link)}}" style="width: 100%;max-width: 100%;height: 200px"></iframe>
                </div>




                  <div class="card-body py-0" style="background: var(--color-1)">
                    <div class="pt-3 pb-2 text-right">
                        <a href="{{$youtube->link}}" target="_blank" class="text-right">
                            <h5 style="color: var(--color-3);font-size: 14px;" class="d-block mb-0">{{$youtube->author}} | {{$youtube->title}}</h5>
                        </a>

                        <span style="color: var(--color-5);font-size: 11px;">{{\Carbon::parse($youtube->pubDate)->diffForHumans()}}</span>
                    </div>


                  </div>
                </div>

            </div>
            @if(++$temp==5)
            <div class="col-12">

            </div>
            @endif
            @endforeach

        </div>

    </div>
</div>

<div class="col-12 mt-5 px-0"  id="twitter">
    <div class="container-fluid">
        <div class="col-12">
            <h4 style="color: var(--color-5)"><i class="fab fa-twitter" style="color:#76a9ea;font-size: 27px" ></i> @lang('index.twitter_accounts')</h4>
        </div>
        <div class="col-12 row mt-3 px-0">

            @foreach($posts->where('type','twitter')->where('language',session('language')) as $twitter)
            <div class="col-md-6 col-lg-3   col-12  ">

                <div class="card col-12 px-0 mt-4  border " style="width: 100%;border-radius: 2px">

                  <div class="card-body py-0 row with-hover-a px-0" style="background: var(--color-1)">
                    {{-- <div style="display: inline-block;width: 80px; text-align: center;" class="mt-3">
                       <img src="https://www.ltutech.com/wp-content/uploads/2019/03/color-search-470x392.jpg" style="width: 40px;display: inline-block;height: 40px;border-radius: 50%">
                    </div> --}}
                    <div style="display: inline-block;width: calc(100% );" class="mb-3 px-3">
                        <h6 class="mt-4 mb-0">
                           {{--  {{dd($twitter)}} --}}
                            <a href="{{$twitter->link}}" style="color: var(--color-5);font-size: 14px;" class="d-inline-block px-2">
                            {{$twitter->title}}</a><span style="color:  var(--color-5);font-size: 14px;"></span>
                        </h6>
                        <h6 class="mt-2 px-2 text-right twitter" style="color: var(--color-5);font-size: 14px;" >
                            {!!$twitter->description!!}


                        </h6>
                        @php
                        \Carbon::setLocale(session('language'));
                        @endphp
                        <span style="color: var(--color-5);font-size: 11px" class="px-2">{{\Carbon::parse($twitter->pubDate)->diffForHumans()}}</span>
                    </div>


                  </div>
                </div>






            </div>
            @endforeach

        </div>

    </div>
</div>



{{-- <div class="col-12 mt-5"  id="instagram">
    <div class="container-fluid">
        <div class="col-12">
            <h4 style="color: var(--color-5)"><i class="fab fa-instagram" style="color: #ee539e;font-size: 27px" ></i> صور انستاجرام</h4>
        </div>
        <div class="col-12 row mt-3 px-0">

            @for($i=0 ; $i<5;$i++)
            <div class="col-sm-6 col-lg-4 col-xl col-12  ">

                <div class="card col-12 px-0 mt-4  border" style="width: 100%;border-radius: 2px">
                  <img src="https://www.ltutech.com/wp-content/uploads/2019/03/color-search-470x392.jpg" class="card-img-top" alt="...">
                  <div class="card-body py-0 pb-3" style="background: var(--color-1)">
                    <div style=" text-align: right;" class="pt-3 pb-2 with-hover-a row ">
                        <div style="display: inline-block;width: 80px; text-align: center;" class="mt-3">
                           <img src="https://www.ltutech.com/wp-content/uploads/2019/03/color-search-470x392.jpg" style="width: 40px;display: inline-block;height: 40px;border-radius: 50%">
                        </div>
                        <div style="display: inline-block;width: calc(100% - 80px);" class="mb-3">
                            <h6 class="mt-4 mb-0">

                                <a href="#" style="color: var(--color-5);font-size: 14px;" class="d-inline-block px-2">ساسيني</a><span style="color:  var(--color-5);font-size: 14px;">@sasini</span>
                            </h6>

                        </div>


                    </div>


                  </div>
                </div>
            </div>
            @endfor

        </div>
        <div class="col-12 row mt-3 px-0">

            @for($i=0 ; $i<5;$i++)
            <div class="col-sm-6 col-lg-4 col-xl col-12  ">

                <div class="card col-12 px-0 mt-4  border" style="width: 100%;border-radius: 2px">
                  <img src="https://www.ltutech.com/wp-content/uploads/2019/03/color-search-470x392.jpg" class="card-img-top" alt="...">
                  <div class="card-body py-0 pb-3" style="background: var(--color-1)">
                    <div style=" text-align: right;" class="pt-3 pb-2 with-hover-a row ">
                        <div style="display: inline-block;width: 80px; text-align: center;" class="mt-3">
                           <img src="https://www.ltutech.com/wp-content/uploads/2019/03/color-search-470x392.jpg" style="width: 40px;display: inline-block;height: 40px;border-radius: 50%">
                        </div>
                        <div style="display: inline-block;width: calc(100% - 80px);" class="mb-3">
                            <h6 class="mt-4 mb-0">

                                <a href="#" style="color: var(--color-5);font-size: 14px;" class="d-inline-block px-2">ساسيني</a><span style="color:  var(--color-5);font-size: 14px;">@sasini</span>
                            </h6>

                        </div>


                    </div>


                  </div>
                </div>
            </div>
            @endfor

        </div>

    </div>
</div>
 --}}





<div class="col-12 mt-5 mb-5 px-0" id="baaeed">
    <div class="container-fluid mb-5 pb-5">
        <div class="col-12 row">


        <div class="col-12">
            <h4 style="color: var(--color-5)"><img src="@lang('index.jobs_footer_image')" style="width: 30px"> @lang('index.jobs_footer')</h4>
        </div>
        <div class="col-12 row mt-3 px-0">


            <div class="col-12 mt-3 px-0 py-0">
                <div class="col-12 border px-0" style=" background: var(--color-1)">
                    @foreach($posts->where('type','job')->where('language',session('language'))->take(10) as $job )

                    <div class="col-12 with-hover-a border-bottom">
                        <div style=" text-align: right;" class="pt-3 pb-3 with-hover-a row ">
                            <div style="display: inline-block;width: 80px; text-align: center;display: flex;"  >
                               <img src="@lang('index.jobs_footer_image')" style="width: 40px;display: inline-block;height: 40px;border-radius: 50%;margin: auto;">
                            </div>
                            <div style="display: inline-block;width: calc(100% - 80px);" class="mb-3">
                                <h6 class="mt-4 mb-0">

                                    <a href="{{$job->link}}" style="color: var(--color-5);font-size: 16px;" class="d-inline-block px-2">{{$job->title}}
                                     </a>
                                </h6>

                            </div>


                        </div>
                    </div>
                    @endforeach
                </div>
             </div>


        </div>
        </div>

    </div>
</div>



<link rel="stylesheet" type="text/css" href="https://footer.devlab.ae/public/styles.css">
@if(session('language')!='en')
<iframe src="https://footer.devlab.ae/ar?mode={{session('site_mode')}}" class="col-12 footer-iframe px-0" style="width: 100%" id="devlab-footer"></iframe>
@else
<iframe src="https://footer.devlab.ae/en?mode={{session('site_mode')}}" class="col-12 footer-iframe px-0" style="width: 100%"  id="devlab-footer" ></iframe>
@endif







<div class="col-12">
    <div class="container">

    </div>
</div>
<style type="text/css"></style>

@endsection
