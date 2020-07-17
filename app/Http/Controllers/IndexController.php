<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class IndexController extends Controller
{




    public function get_content(){
        $temp = (array)json_decode(file_get_contents('https://dash.devlab.ae/api/v1/site/https://masadirtech.com'));
        return $temp;
    }
    public $api;
    public function __construct(){
        $this->api=$this->get_content();
        $this->set_init_sessions();
    }
    public function set_init_sessions(){



        if(null === (session('language'))){
            session(['language'=>'ar']);
        }

        if(null === (session('popup_status'))){
            session(['popup_status'=>'true']);
        }

        if(null === (session('site_mode'))){
            session(['site_mode'=>'day']);
        }

        if(null === (session('header_status'))){
            session(['intro_status'=>'true']);
        }


        /*if(null === (session('adv_status'))){
           session(['adv_status'=>'false']);
        }

        if(null === (session('scroll_status'))){
           session(['scroll_status'=>'false']);
        }  */




    }
    public function turn_off_popup(){
        session(['popup_status'=>'false']);
    }
    public function turn_off_header(){
        session(['header_status'=>'false']);
    }



    public function switch_site_mode(){
        if(null === (session('site_mode'))){
            session(['site_mode'=>'day']);
        }
        if(session('site_mode') =="day")
            session(['site_mode'=>'night']);
        else
            session(['site_mode'=>'day']);
        //app()->setLocale(session('site_mode'));
        return redirect()->route('index');
    }

    public function switch_language(){
        if(null === (session('language'))){
            session(['language'=>'ar']);
        }
        if(session('language') =="ar")
            session(['language'=>'en']);
        else
            session(['language'=>'ar']);
        app()->setLocale(session('language'));
        return redirect()->route('index');
    }





    public $key2="https://api.rss2json.com/v1/api.json?api_key=8u5jf28nitjrddek6xbq5x1ujqlxdmnvqftmmvld&order_by=pubDate&rss_url=";
    public $key="https://api.rss2json.com/v1/api.json?api_key=v6mxuyfmoup7dnkh3rnfc7azwtgdcikrpwuiyhzb&order_by=pubDate&rss_url=";

    public function index(){
        app()->setLocale(session('language'));
        $api=$this->get_content();
        $posts=\App\Post::get();
        //return $posts;
        return view('index',compact('posts','api'));
    }




    public function storing_data_daily(){




        /* $freelancers=(array)json_decode($this->RssJson('https://rss.app/feeds/U3OpoY5FB8VsPB4w.xml'));
         $remove_en=\App\Post::where('type','job')->where('language','en')->delete();
         foreach($freelancers['items'] as $freelancer){
            $freelancer=\App\Post::create([
               'author'=>$freelancer->author,
               'title'=>$freelancer->title,
               'link'=>$freelancer->link,
               'pubDate'=>$freelancer->pubDate,
               'thumbnail'=>$freelancer->thumbnail,
               'description'=>$freelancer->description,
               'type'=>'job',
               'language'=>'en'
            ]);

         } */








        /* $freelancers=(array)json_decode($this->RssJson('https://rss.app/feeds/U3OpoY5FB8VsPB4w.xml'));
         //return $freelancers['items'];
         $remove_en=\App\Post::where('type','job')->where('language','en')->delete();
         foreach($freelancers['items'] as $freelancer){
            $freelancer=\App\Post::create([
               'author'=>$freelancer->author,
               'title'=>$freelancer->title,
               'link'=>$freelancer->link,
               'pubDate'=>$freelancer->pubDate,
               'thumbnail'=>$freelancer->thumbnail,
               'description'=>$freelancer->description,
               'type'=>'job',
               'language'=>'en'
            ]);

         } */


        /*   $baaeeds=(array)json_decode($this->RssJson('https://baaeed.com/feeds/jobs'));
           $remove_ar=\App\Post::where('type','job')->where('language','ar')->delete();
           foreach($baaeeds['items'] as $baaeed){
              $baaeed=\App\Post::create([
                 'author'=>$baaeed->author,
                 'title'=>$baaeed->title,
                 'link'=>$baaeed->link,
                 'pubDate'=>$baaeed->pubDate,
                 'thumbnail'=>$baaeed->thumbnail,
                 'description'=>$baaeed->description,
                 'type'=>'job',
                 'language'=>'ar'
              ]);

           }
     */
        // \App\Post::where('id','<>','')->delete();
        /*
              $freelancers=(array)json_decode($this->RssJson2('https://rss.app/feeds/U3OpoY5FB8VsPB4w.xml'));
              //return $freelancers['items'][0]->enclosure->link;
              $remove_en=\App\Post::where('type','job')->where('language','en')->delete();
              foreach($freelancers['items'] as $freelancer){
                 $freelancer=\App\Post::create([
                    'avatar'=>$freelancer->enclosure->link,
                    'author'=>$freelancer->author,
                    'title'=>$freelancer->title,
                    'link'=>$freelancer->link,
                    'pubDate'=>$freelancer->pubDate,
                    'thumbnail'=>$freelancer->thumbnail,
                    'description'=>$freelancer->description,
                    'type'=>'job',
                    'language'=>'en'
                 ]);

              }
        */


        //return 0;
//      $this->store_jobs();
        //sleep(60);
//      $this->store_youtube();

//      $this->store_sites();

        $this->store_twitter();


    }





    public function store_sites(){

        try{

            $ar_sites_images=array(
                //"http://itawy.com/wp-content/uploads/2017/11/logo-1.png",
                "https://www.unlimit-tech.com/wp-content/uploads/logo-min-2.png",
                //"https://www.technawi.net/wp-content/uploads/2016/01/logo.png",
                //"https://arabhardware.net/wp-content/themes/Arabhardware/assets/images/logo.png",
                "https://www.tech-wd.com/wd/wp-content/uploads/2018/05/logo-1.png",
                //(array)json_decode($this->RssJson('https://colorslab.com/blog/feed/')),
                //(array)json_decode($this->RssJson('https://www.aqweeb.com/rss')),
                //(array)json_decode($this->RssJson('https://www.seo-ar.net/feed/')),
                "https://www.electrony.net/wp-content/themes/inspirin/images/logo/logo-1.png",
                "https://taqnia24.com/wp-content/themes/taknia/asset/images/logo.svg"

            );
            $ar_sites=array(
                //(array)json_decode($this->RssJson('http://itawy.com/rss')),
                (array)json_decode($this->RssJson('https://www.unlimit-tech.com/feed/')),
                //(array)json_decode($this->RssJson('http://technawi.net/rss')),
                //(array)json_decode($this->RssJson('https://arabhardware.net/feed/')),
                (array)json_decode($this->RssJson('https://www.tech-wd.com/wd/feed/')),
                //(array)json_decode($this->RssJson('https://colorslab.com/blog/feed/')),
                //(array)json_decode($this->RssJson('https://www.aqweeb.com/rss')),
                //(array)json_decode($this->RssJson('https://www.seo-ar.net/feed/')),
                (array)json_decode($this->RssJson('https://www.electrony.net/feed/')),
                (array)json_decode($this->RssJson('https://taqnia24.com/feed/'))

            );

            $remove_ar=\App\Post::where('type','site')->where('language','ar')->delete();



            $xx=0;

            foreach($ar_sites as $ar_site){
                $avatar=$ar_sites_images[$xx++];
                foreach($ar_site['items'] as $ar_site_final)
                {
                    //array_push($arrayName, $ar_site_final);
                    $site=\App\Post::create([
                        'avatar'=>$avatar,
                        'website'=>$this->get_main_domain($ar_site_final->link),
                        'website_link'=>$ar_site_final->title,
                        'author'=>$ar_site_final->author,
                        'title'=>$ar_site_final->title,
                        'link'=>$ar_site_final->link,
                        'pubDate'=>$ar_site_final->pubDate,
                        'type'=>'site',
                        'language'=>'ar'

                    ]);
                }

            }




            $en_sites_images=array(
                "https://www.pngkey.com/png/full/353-3537512_cnet-com-logo-png-transparent-magazine-store-cnet-magazine.png",
                "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/TechCrunch_logo.svg/1200px-TechCrunch_logo.svg.png",
                //"https://i.kinja-img.com/gawker-media/image/upload/s--FRKUEBwG--/f_auto/wvhsuflzmeoo0zr9ex55.png",
                "https://www.conviva.com/wp-content/uploads/2019/12/Mashable-Logo.png",
                "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/The_Next_Web_Logo.svg/1280px-The_Next_Web_Logo.svg.png"

            );


            $en_sites=array(
                (array)json_decode($this->RssJson('https://www.cnet.com/rss/news/')),
                (array)json_decode($this->RssJson('https://techcrunch.com/feed/')),
                //(array)json_decode($this->RssJson('https://gizmodo.com/rss')),
                (array)json_decode($this->RssJson('https://me.mashable.com/feed.xml')),
                (array)json_decode($this->RssJson('https://thenextweb.com/feed/'))
            );
            $remove_en=\App\Post::where('type','site')->where('language','en')->delete();


            $xx=0;
            foreach($en_sites as $en_site){
                $avatar=$en_sites_images[$xx++];
                foreach($en_site['items'] as $en_site_final)
                {
                    //array_push($arrayName, $en_site_final);
                    $site=\App\Post::create([
                        'avatar'=>$avatar,
                        'website'=>$this->get_main_domain($en_site_final->link),
                        'website_link'=>$en_site_final->title,
                        'author'=>$en_site_final->author,
                        'title'=>$en_site_final->title,
                        'link'=>$en_site_final->link,
                        'pubDate'=>$en_site_final->pubDate,
                        'type'=>'site',
                        'language'=>'en'

                    ]);
                }

            }


            return 1;

        }catch(\Exception $e){
            return 0;
        }
    }
    public function store_twitter(){


        try{

            $ar_twitters=array(
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2FTechVoicenet')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2FApplewd')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2Ftechwd')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2Ftaqnia24')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2FHsoubAcademy')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2FTechPillsShow')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2FUpToDateKSA2'))
            ); $remove_ar=\App\Post::where('type','twitter')->where('language','ar')->delete();

            foreach($ar_twitters as $ar_twitter){

                $twitter=\App\Post::create([
                    'author'=>$ar_twitter['items'][0]->author,
                    'title'=>$ar_twitter['items'][0]->title,
                    'link'=>$ar_twitter['items'][0]->link,
                    'pubDate'=>$ar_twitter['items'][0]->pubDate,
                    'thumbnail'=>$ar_twitter['items'][0]->thumbnail,
                    'description'=>$ar_twitter['items'][0]->description,
                    'type'=>'twitter',
                    'language'=>'ar'
                ]);

            }
            $en_twitters=array(
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2Felonmusk')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2Fsundarpichai')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2FBillGates')),
                //(array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2Ftim_cook')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2Fjeffbezos')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2Femilychangtv')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2Fmkbhd')),
                (array)json_decode($this->RssJson('https://queryfeed.net/tw?q=twitter.com%2Fdhh')),

            );

            $remove_en=\App\Post::where('type','twitter')->where('language','en')->delete();

            foreach($en_twitters as $en_twitter){

                $twitter=\App\Post::create([
                    'author'=>$en_twitter['items'][0]->author,
                    'title'=>$en_twitter['items'][0]->title,
                    'link'=>$en_twitter['items'][0]->link,
                    'pubDate'=>$en_twitter['items'][0]->pubDate,
                    'thumbnail'=>$en_twitter['items'][0]->thumbnail,
                    'description'=>$en_twitter['items'][0]->description,
                    'type'=>'twitter',
                    'language'=>'en'
                ]);

            }

            return 1;
        }catch(\Exception $e){
            echo $e->getMessage();
            return $e;
        }
    }
    public function store_jobs(){


        try{

            $freelancers=(array)json_decode($this->RssJson2('https://rss.app/feeds/U3OpoY5FB8VsPB4w.xml'));
            $remove_en=\App\Post::where('type','job')->where('language','en')->delete();
            foreach($freelancers['items'] as $freelancer){
                $freelancer=\App\Post::create([
                    'avatar'=>$freelancer->enclosure->link,
                    'author'=>$freelancer->author,
                    'title'=>$freelancer->title,
                    'link'=>$freelancer->link,
                    'pubDate'=>$freelancer->pubDate,
                    'thumbnail'=>$freelancer->thumbnail,
                    'description'=>$freelancer->description,
                    'type'=>'job',
                    'language'=>'en'
                ]);

            }







            $baaeeds=(array)json_decode($this->RSS('https://baaeed.com/feeds/jobs'));
            //return dd($baaeeds['channel']->item);
            //return dd($baaeeds['channel']->item[0]->title);
            $remove_ar=\App\Post::where('type','job')->where('language','ar')->delete();
            foreach($baaeeds['channel']->item as $baaeed){
                $baaeed=\App\Post::create([
                    //'author'=>$baaeed->author,
                    'avatar'=>'https://baaeed.hsoubcdn.com/public/images/favicon.ico',
                    'title'=>$baaeed->title,
                    'link'=>$baaeed->link,
                    'pubDate'=>$baaeed->pubDate,

                    'type'=>'job',
                    'language'=>'ar'
                ]);

            }


            return 1;
        }catch(\Exception $e){
            return 0;
        }
    }
    public function store_youtube(){


        try{


            $ar_youtubes=array(
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCwZYEQG1Xr2UX7sngxR9JXw')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCqk8c4zHSThB0zQgWKe6_HA')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCs8vDlWQQJb21sLh9jh1qWA')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UC5dfttydNOVPXRYc0q-g_Kg')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCuTqC4B8AhV5z_YrGlZeZ3g')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCJv37tcBvJlBF2MoVMRMvbQ')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCS-N_6SbBCslvA-8zcxq6YQ')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UC7WSVd-BjfZLX1ra_gswJHQ')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCwMNdSfYJyqolnj3gvMnTWQ')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCWQn4lbNssUS38-1bA5MnvQ')),

            );
            $remove_ar=\App\Post::where('type','youtube')->where('language','ar')->delete();


            foreach($ar_youtubes as $ar_youtube){
                foreach($ar_youtube->entry as $ar_youtub )
                {
                    $temp=(array)$ar_youtub->link;
                    $youtube=\App\Post::create([
                        'author'=>$ar_youtube->author->name,
                        'title'=>$ar_youtub->title,
                        'link'=>$temp['@attributes']->href,
                        'pubDate'=>$ar_youtub->published,
                        'type'=>'youtube',
                        'language'=>'ar'
                    ]);
                    break;

                }
            }




            $en_youtubes=array(
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCsTcErHg8oDvUnTzoqsYeNw')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCBJycsmduvYEL83R_U4JriQ')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCddiUEpeqJcYeBxX1IVBKvQ')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCOmcA3f_RrH6b9NmcNa4tdg')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UC1IQIspOkCeV3WnYm32SBFQ')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCbmNph6atAoGfqLoCL_duAg')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCgyqtNWZmIxTx3b6OxTSALw')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCDlQwv99CovKafGvxyaiNDA')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UC0vBXGSyV14uvJ4hECDOl0Q')),
                (object)json_decode($this->RSS('https://www.youtube.com/feeds/videos.xml?channel_id=UCCDfkt16Uz0l1Qsk3fx_7Og')),

            );

            $remove_en=\App\Post::where('type','youtube')->where('language','en')->delete();


            foreach($en_youtubes as $en_youtube){
                foreach($en_youtube->entry as $en_youtub )
                {
                    $temp=(array)$en_youtub->link;
                    $youtube=\App\Post::create([
                        'author'=>$en_youtube->author->name,
                        'title'=>$en_youtub->title,
                        'link'=>$temp['@attributes']->href,
                        'pubDate'=>$en_youtub->published,
                        'type'=>'youtube',
                        'language'=>'en'
                    ]);
                    break;

                }
            }


            return 1;
        }catch(\Exception $e){
            return 0;
        }
    }




    public function RssJson ($url) {
        return json_encode(Curl::to($this->key .$url)->asJson(true)->get());
//        return file_get_contents($this->key .$url);
    }
    public function RssJson2 ($url) {
        return json_encode(Curl::to($this->key .$url)->asJson(true)->get());
//        return file_get_contents($this->key .$url);
    }
    public function RSS($url){

        $fileContents= file_get_contents($url);
        $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
        $fileContents = trim(str_replace('"', "'", $fileContents));
        $simpleXml = simplexml_load_string($fileContents);
        $json = json_encode($simpleXml);
        return $json;



    }


    public function get_main_domain($url) {
        $result = parse_url($url);
        return  $result['host'];
    }







}
