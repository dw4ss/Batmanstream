<?php  


    //widget source: https://www.streamthunder.to/get-widget-streams/
    $base = "https://batstream.tv";
    $site = "Batmanstream";
    $powered = $site;
    $img = "/images/img.png";
  
  
    $ad_link1 = "https://www.batstream.tv/stream-now/";
    $ad_link2 = "https://advsmedia.net/register/";
 

   

	switch ($_SERVER["REQUEST_URI"]) {
		case '/':
			$page = 'All Sports'; 
            $page_title = 'Live Sports';
            $widget_uri = 'https://live.batstream.tv/?d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1';
            $texts = '				   
            <p><b>'.$site.'</b> is one of the top-notch providers of all things that have to do with free live sports streaming. You are perhaps a bit confused right now. Aren’t all services rather, well, free. The answer is – not really, not quite. The simple truth lies in the simple fact that we work painstakingly to provide you with all the great options that you will ever want from a website such as ours.</p>
           <p>We quite readily cover you when it comes to streaming options. And we don’t charge a single penny which is rather quite nice, too, isn’t it? How do we manage to stay afloat as it is? Well, we deliver everyone the experience they have asked for and the results follow quite simply. Our mobile offer is ironclad. The number of streams and sports live events that you can actually see is quite, quite easy to grasp.</p>
           <p>You will never be short of options to make a difference, too! Spot something that you think merits improvement, well sure, we will help you with that on the spot and without contesting anything much! We are absolutely thrilled to be at the forefront of what we do, and while it takes us a lot of time to adopt the offer to everyone’s specific preferences, we strive to continuously improve upon what we offer.</p>
           <p>With so much that’s underway, you will have to notice that <b>'.$site.'</b>  is in a constant state of flux, but you can rest assured that your streaming experience will remain intact. We have our own clever ways of managing to provide you with everything that you need without you experiencing any disturbance. Not in the very slightest. On top of that, we cover hundreds of matches in real time.</p>
           <p>What we mean when we say cover? Well, just that! We strive to continually add to our offer, and if we can’t find a stream, <strong>rest assured that all the important details</strong> will all be there. The plain fact of the matter is that we manage to track every match out there that will be of interest to you. This is quite the complete live <b>'.$site.'</b>  experience you have ever hoped for and to be honest – it’s all very much worth it. Rest assured that you have done well by picking us!</p>';
			break;
		case '/football':
			$page = 'Football'; 
            $page_title = 'Live Football';
            $widget_uri = 'https://live.batstream.tv/?sport=football&d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1'; 
            $texts = "";
            break;
        case '/baseball':
			$page = 'Baseball'; 
            $page_title = 'Live Baseball';
            $widget_uri = 'https://live.batstream.tv/?sport=baseball&d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1'; 
            $texts = "";
            break;
        case '/hockey':
			$page = 'Ice Hockey'; 
            $page_title = 'Live Ice Hockey';
            $widget_uri = 'https://live.batstream.tv/?sport=ice-hockey&&sp=4&d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1'; 
            $texts = "";
            break;
        case '/american-football':
			$page = 'American Football'; 
            $page_title = 'Live American Football';
            $widget_uri = 'https://live.batstream.tv/?sport=american-football&d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1'; 
            $texts = "";
            break;
        case '/basketball':
			$page = 'Basketball'; 
            $page_title = 'Live Basketball';
            $widget_uri = 'https://live.batstream.tv/?sport=basketball&d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1'; 
            $texts = "";
            break;
        case '/racing':
			$page = 'Racing'; 
            $page_title = 'Live Racing';
            $widget_uri = 'https://live.batstream.tv/?sport=racing&d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1'; 
            $texts = "";
            break;
        case '/rugby':
			$page = 'Rugby'; 
            $page_title = 'Live Rugby';
            $widget_uri = 'https://live.batstream.tv/?sport=rugby&d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1'; 
            $texts = "";
            break;
        case '/tennis':
			$page = 'Tennis'; 
            $page_title = 'Live Tennis';
            $widget_uri = 'https://live.batstream.tv/?sport=tennis&d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1'; 
            $texts = "";
            break;
        case '/others':
			$page = 'Others'; 
            $page_title = 'Other Live Sports';
            $widget_uri = 'https://live.batstream.tv/?sp=9&d=1&s=1&gf=Tittillium+Web&fs=15px&tt=none&fc=FFFFFF&tc=1F1F1F&bc=FFFFFF&bhc=f3f3f3&pd=10px&br=0px&brc=CCCCCC&brr=0px&mr=1px&tm=FFFFFF&tmb=141414&wb=EBEBEB&bcc=252525&bsh=0px&rdb=EBEBEB&rdc=333333&&l='.$ad_link1.'&lt=1&lsp=1&lco=1&lcy=1&lda=1&lk=1&l2='.$ad_link2.'&l2t=1&l2sp=1&l2co=1&l2cy=1&l2da=1&lk=1'; 
            $texts = "";
			break;
		default:
            $page = 'Demo'; 
            $page_title = '';
            $widget_uri = '';
            $texts = '';
    }

    $sports = array(
        //spain
            array(
                "name" => "All",
                "tag" => "",
                "icon" => ""
            ),
            array(
                "name" => "Football",
                "tag" => "football",
                "icon" => ""
            ),
            array(
                "name" => "Baseball",
                "tag" => "baseball",
                "icon" => ""
            ),
            array(
                "name" => "Hockey",
                "tag" => "hockey",
                "icon" => ""
            ),
            array(
                "name" => "Am. Football",
                "tag" => "american-football",
                "icon" => ""
            ),
            array(
                "name" => "Basketball",
                "tag" => "basketball",
                "icon" => ""
            ),
            array(
                "name" => "Racing",
                "tag" => "racing",
                "icon" => ""
            ),
            array(
                "name" => "Rugby",
                "tag" => "rugby",
                "icon" => ""
            ),
            array(
                "name" => "Tennis",
                "tag" => "tennis",
                "icon" => ""
            ),
            array(
                "name" => "Others",
                "tag" => "others",
                "icon" => ""
            )
        );
 
?>