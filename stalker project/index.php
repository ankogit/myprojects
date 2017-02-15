<?php
// Указываем тип и кодировку
Header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Stalker</title>
	<meta content="" name="description" />
    <link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/media.css" />
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/emojione/1.3.0/assets/css/emojione.min.css"/>
    
</head>

<body>

<div class="block">
    <div class="s_menu">
            <ul class="s_top_menu ind">
                <li id="a_1"><a id="start">Главная</a></li>
                <li id="a_2"><a href="#">Новая Игра</a></li>
                <li id="a_3"><a class="popup_content" href="#s_load">Загрузить</a></li>
                <li id="a_4"><a >Настройки</a></li>
                <li id="a_5"><a class="popup_content" href="#s_chat">Чат</a></li>
                <li id="a_6"><a href="/">Выйти</a></li>
                <li id="a_7"><a href="#">Выйти в Windows</a></li>
            </ul>
            <div class="s_button"></div>
            <ul class="s_bott_menu">
                <li id="aa_1"><a id="start">Главная</a></li>
                <li id="aa_2" class="selected"><a href="/123">Новая Игра</a></li>
                <li id="aa_3"><a href="#">Загрузить</a></li>
                <li id="aa_4"><a href="#">Настройки</a></li>
                <li id="aa_5"><a class="popup_content" href="#s_chat">Чат</a></li>
                <li id="aa_6"><a href="/">Выйти</a></li>
                <li id="aa_7"><a href="#">Выйти в Windows</a></li>
            </ul>
    </div>
</div>
<!--<i class="message_icon teller_0"></i>
<i class="message_icon teller_1"></i>
<i class="message_icon teller_2"></i>
<i class="message_icon teller_3"></i>
<i class="message_icon teller_4"></i>
<i class="message_icon teller_5"></i>
<i class="message_icon teller_6"></i>
<i class="message_icon teller_7"></i>
<i class="message_icon teller_8"></i>
<i class="message_icon teller_9"></i>
<i class="message_icon teller_10"></i>
<i class="message_icon teller_11"></i>
<i class="message_icon teller_12"></i>
<i class="message_icon teller_13"></i>
<i class="message_icon teller_14"></i>
<i class="message_icon teller_15"></i>-->

<div class="hidden">
                                    <div id="s_load" class="podrt_descr">
                                        <div class="modal-box-content">
                                            <div class="mfp-close" type="button" title="Закрыть (Esc)">Закрыть</div>
                                            <img class="s_conent_load_anim" src="/img/anim_2.gif" alt="">
                                            <h1 class="s_conent_load_name">Загрузить Игру</h1>
                                            <div class="s_conent_load_menu">
                                                <ul>
                                                    <li><a href="">Загрузить</a></li>
                                                    <li><a href="">Удалить</a></li>
                                                    <li><a href="">Добавить</a></li>
                                                </ul>
                                            </div>
                                            <div class="s_content_load">
                                                <ul>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                    <li><a href=""><span>all</span><time>[22:43 02.13.16]</time></a></li>
                                                </ul>
                                            </div>
                                            <div class="s_content_img actor_2 actor_icon"></div>
                                            <div class="s_content_info_loc">
                                                <p>Название</p>
                                                
                                                <ul >
                                                    <li>Время: 11:12</li>
                                                    <li>Локация кордон</li>
                                                    <li>йцуйц</li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
            <div id="s_chat" class="podrt_chat">

                    <div class="modal-box-content">

                        <div class="shoutbox">
                            <div class="chat_bg">
                            <div class="mfp-close chat-close" type="button" title="Закрыть (Esc)">x</div>
                                <div class="chat_box r4">
                                    <ul id="chat_area" class="shoutbox-content"></ul>
                                </div>
                            </div>
                            <div class="shoutbox-form chat_send_block">
                                    <form id="pac_form" class="chat" action="./publish.php" method="post">
                                        <input type="text" id="shoutbox-name" class="r4" value="Гость">
                                        <input type="text" id="shoutbox-comment" name="comment" maxlength='240' placeholder="|Ввод">
                                        <button class="submit" type="submit">ОТПРАВИТЬ</button>
                                    </form>
                            </div>
                        </div>

                                      
                    </div>
            </div>
                                </div>
                
                <div class="start_inter">
                <div class="js_load">
                    <div class="line"></div>

                </div>
                <div id="blink5" class="load_done">Нажмите любую клавишу, для перехода к игре</div>
                <p class="sovet" id="sovet">123</p>
                </div>
                
<div class="black_b"></div>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="http://cdn.jsdelivr.net/emojione/1.3.0/lib/js/emojione.min.js"></script>
        <script src="./assets/js/script.js"></script>
        <script type="text/javascript" src="jquery.drag.js"></script>
    <script>
    
    $(document).ready(function () {
        $('.block').drag(); $('.podrt_descr').drag(); 

        //рандомное педложение
    var quotes = new Array;
    $.get('sovet.txt', function(data){
        quotes = data.split('\n');
        //console.log(quotes);
 
    var randno = Math.floor(Math.random() * quotes.length);
    var sovet = quotes[randno];
    $('#sovet').text(sovet);
    });
    
    

        //Set the height of the block
        $('.s_menu .s_button').height($('.s_menu li').height());

        //go to the default selected item
        topval = $('.s_menu .selected').position()['top'];
        $('.s_menu .s_button').stop().animate({top: topval}, {easing: 'swing', duration:500});

        $('.s_menu li').hover(
            
            function() {
                
                //get the top position
                topval = $(this).position()['top'];
                
                //animate the block
                //you can add easing to it
                $('.s_menu .s_button').stop().animate({top: topval}, {easing: 'swing', duration:300});
                
                //add the hover effect to menu item
                $(this).addClass('hover');
            },
            
            function() {        
                //remove the hover effect
                $(this).removeClass('hover');   
            }
        );
                    $(".s_top_menu li").hover(function()
{
    if (menu = $(this).attr('id'))
    {
        var menuId = menu.split('_');
        $('#aa_'+menuId[1]).addClass('h1');
    }
},
                    function() {  
                    var menuId = menu.split('_');
                    $('#aa_'+menuId[1]).removeClass('h1');
                });
    $(".popup").magnificPopup({type:"image"});
    $(".popup_content").magnificPopup({
        type:"inline",
        midClick: true
    });
     setInterval(function() {
    if ($(".start_inter").is(":visible")) { 
          $(".js_load").width(function(i,val){
            if (val <= 650) {
            return val+20;
        } 
        else {
            $(".load_done").fadeIn(2000);
            $("body").keypress(function(e) {
                $(".black_b").fadeOut(1000);
              $(".start_inter").fadeOut(600);
          
     });
        }

            });
     }
    }, 1000);
    $("#start").click(function() {
        if ($(".start_inter").is(":visible")) {
            
            $(".start_inter").fadeOut(600);
            
        } else {
            $(".black_b").fadeIn(1600);
            $(".start_inter").fadeIn(1600);
            
        }
    });

    
   



    
    });
    
    </script>
    <script src="/libs/Magnific-Popup/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>

</body>
</html>










