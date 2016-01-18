<?php
$isMobile = (bool)preg_match('#\b(ip(hone|od)|android\b.+\bmobile|opera m(ob|in)i|windows (phone|ce)|blackberry'.
                    '|s(ymbian|eries60|amsung)|p(alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
                    '|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $_SERVER['HTTP_USER_AGENT'] );
/*
if ($isMobile)
{
    header("Location:" . $mobileUrl);
}
 */
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"> 
        <meta name="author" content="Fred Thomsen">
        <meta name="description" content="Fred Thomsen's Personal Page">
        <meta name="keywords" content="Fred Thomsen, Grappler, Developer">
        <title>fredthomsen.NET</title>
        <link rel="stylesheet" type="text/css" media="all" href="css/base.css"/>
<?php
        if($isMobile) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"css/mobile.css\"/>";
        }
?>
        <link href="https://plus.google.com/u/0/110862805895158581654/" rel="publisher" />
        <script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-37338055-2']);
          _gaq.push(['_trackPageview']);

          (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </head>
    <body>
        <header>
            <p>fredthomsen.NET</p>
        </header>
        <div id="twitter">
            <a class="twitter-timeline" href="https://twitter.com/fredthomsen" data-widget-id="319976103655641088">Tweets by @fredthomsen</a>
            <script>
                !function(d,s,id){
                    var js,fjs=d.getElementsByTagName(s)[0];
                    if(!d.getElementById(id)){
                        js=d.createElement(s);
                        js.id=id;
                        js.src="//platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js,fjs);
                    }
                }(document,"script","twitter-wjs");
            </script>
        </div>
        <div id="pic"></div>
        <div id="banner">&nbsp;</div>
        <div id="container">
            <div id="top">
                <div id="name">
                    <span id="firstname">Fred</span><span id="lastname">Thomsen</span>
                </div>
                <p id="bio">
                    Developer/Grappler/Metalhead/Gamer/Swede/All-Around Nerd
                </p>
            </div>
            <div id="content">
                <div id="social_links">
                    <a href="https://twitter.com/fredthomsen">
                        <img src="images/logos/twitter_logo.jpg">
                    </a>
                    <a href="https://www.linkedin.com/in/fredthomsen">
                        <img src="images/logos/linkedin_logo.png">
                    </a>
                    <a href="http://stackexchange.com/users/1274123">
                        <img src="images/logos/stackex_logo.svg">
                    </a>
                    <a href="https://github.com/fredthomsen">
                        <img src="images/logos/github_logo.png">
                    </a>
                </div>
            </div>
            <div id="bottom">
                <div id="stackex">
                    <a href="http://stackexchange.com/users/1274123">
                        <img src="http://stackexchange.com/users/flair/1274123.png" width="208" height="58" alt="profile for Fred Thomsen on Stack Exchange, a network of free, community-driven Q&amp;A sites" title="profile for Fred Thomsen on Stack Exchange, a network of free, community-driven Q&amp;A sites">
                    </a>
                </div>
                <div id="gplusone">
                    <script type="text/javascript">
                      (function() {
                              var po = document.createElement('script'); 
                              po.type = 'text/javascript'; 
                              po.async = true;
                              po.src = 'https://apis.google.com/js/plusone.js';
                              var s = document.getElementsByTagName('script')[0];
                              s.parentNode.insertBefore(po, s);
                            })();
                    </script>
                </div>
            </div>
        </div>
        <footer>
            <p>&copy; 2014 Fred Thomsen</p>
        </footer>
    </body>
</html>
