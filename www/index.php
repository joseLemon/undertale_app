<?php
if(file_exists('response.txt')) {
    $response = file_get_contents('response.txt');
    if($response == 'yes') {
        $after_response = 'flowey';
    } else if ($response == 'flowey') {
        $after_response = 'random';
    }
}
?>
<!DOCTYPE html>
<!--
    Copyright (c) 2012-2016 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <!-- Good default declaration:
    * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
    * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
    * Disables use of eval() and inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
        * Enable inline JS: add 'unsafe-inline' to default-src
        * Enable eval(): add 'unsafe-eval' to default-src
    * Create your own at http://cspisawesome.com
    -->
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: 'unsafe-inline' https://ssl.gstatic.com; style-src 'self' 'unsafe-inline'; media-src *" /> -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <title>undertale</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
</head>

<body class="click-disabled">

<div class="loader">
    <div class="loader-content">
        <img class="img-responsive center-block" src="img/loader.gif" alt="sans_loader">
        <h3 class="loading">LOADING<span>.</span><span>.</span><span>.</span></h3>
    </div>
</div>

<div class="container">
    <?php if(!$after_response = true) { ?>
        <div class="character main sans">
            <img id="sans_standing" class="center-block" src="img/sans_standing.gif" alt="sans_standing">
            <img id="sans_wink" class="center-blockhidden" src="img/sans_wink.jpg" alt="sans_wink">
            <span class="speech">
            <span class="text-container"></span>
        </span>
            <audio src="audio/sans_talk.mp3"></audio>
        </div>

        <div class="fx_sans">
            <audio src="audio/sans_theme.ogx" loop></audio>
        </div>

        <div class="character right papyrus">
        <span class="speech">
            <span class="text-container"></span>
        </span>
            <audio src="audio/papyrus_talk.mp3"></audio>
        </div>

        <div class="character drums">
            <audio src="audio/ba_dum_tss.mp3"></audio>
        </div>

        <div class="scenario choice text-center hidden fade_out">
            <img src="img/heart.png" alt="player_heart" style="height: 75px;">
            <div class="message-to-player">
                <p>
                    * A DECISION IS IN FRONT OF YOU
                </p>
                <p>
                    WOULD YOU LIKE TO BE MY GIRLFRIEND?
                </p>
            </div>
            <div class="player-info">
                <p>
                    <span class="player-name">YESICA</span><span class="player-lv">LV 1</span><span class="hp-level">20/20</span>
                </p>
            </div>
            <div class="row decision-box">
                <div class="col-xs-6">
                    <button id="btn-yes" style="letter-spacing: 5px;"><img src="img/mercy.png" alt="mercy"> YES</button>
                </div>
                <div class="col-xs-6">
                    <button id="btn-nope"><img src="img/attack.png" alt="attack"> NOPE</button>
                </div>
            </div>
            <audio src="audio/date_fight.ogx" loop></audio>
        </div>

        <div class="scenario gamaovar-yes hidden">
            <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 width="600px" height="100px" viewBox="0 0 600 100">
                <style type="text/css">
                    text {
                        filter: url(#filter);
                        fill: white;
                        font-size: 100px;
                        -webkit-font-smoothing: antialiased;
                        -moz-osx-font-smoothing: grayscale;
                    }
                </style>
                <defs>
                    <filter id="filter">
                        <feFlood flood-color="black" result="black" />
                        <feFlood flood-color="red" result="flood1" />
                        <feFlood flood-color="limegreen" result="flood2" />
                        <feOffset in="SourceGraphic" dx="3" dy="0" result="off1a"/>
                        <feOffset in="SourceGraphic" dx="2" dy="0" result="off1b"/>
                        <feOffset in="SourceGraphic" dx="-3" dy="0" result="off2a"/>
                        <feOffset in="SourceGraphic" dx="-2" dy="0" result="off2b"/>
                        <feComposite in="flood1" in2="off1a" operator="in"  result="comp1" />
                        <feComposite in="flood2" in2="off2a" operator="in" result="comp2" />

                        <feMerge x="0" width="100%" result="merge1">
                            <feMergeNode in = "black" />
                            <feMergeNode in = "comp1" />
                            <feMergeNode in = "off1b" />

                            <animate
                                    attributeName="y"
                                    id = "y"
                                    dur ="4s"

                                    values = '104px; 104px; 30px; 105px; 30px; 2px; 2px; 50px; 40px; 105px; 105px; 20px; 6ßpx; 40px; 104px; 40px; 70px; 10px; 30px; 104px; 102px'

                                    keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

                                    repeatCount = "indefinite" />

                            <animate attributeName="height"
                                     id = "h"
                                     dur ="4s"

                                     values = '10px; 0px; 10px; 30px; 50px; 0px; 10px; 0px; 0px; 0px; 10px; 50px; 40px; 0px; 0px; 0px; 40px; 30px; 10px; 0px; 50px'

                                     keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

                                     repeatCount = "indefinite" />
                        </feMerge>


                        <feMerge x="0" width="100%" y="60px" height="65px" result="merge2">
                            <feMergeNode in = "black" />
                            <feMergeNode in = "comp2" />
                            <feMergeNode in = "off2b" />

                            <animate attributeName="y"
                                     id = "y"
                                     dur ="4s"
                                     values = '103px; 104px; 69px; 53px; 42px; 104px; 78px; 89px; 96px; 100px; 67px; 50px; 96px; 66px; 88px; 42px; 13px; 100px; 100px; 104px;'

                                     keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513; 0.548; 0.577; 0.613; 1'

                                     repeatCount = "indefinite" />

                            <animate attributeName="height"
                                     id = "h"
                                     dur = "4s"

                                     values = '0px; 0px; 0px; 16px; 16px; 12px; 12px; 0px; 0px; 5px; 10px; 22px; 33px; 11px; 0px; 0px; 10px'

                                     keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513;  1'

                                     repeatCount = "indefinite" />
                        </feMerge>

                        <feMerge>
                            <feMergeNode in="SourceGraphic" />

                            <feMergeNode in="merge1" />
                            <feMergeNode in="merge2" />

                        </feMerge>
                    </filter>

                </defs>

                <g class="text-center">
                    <text x="70" y="100">GAME OVER</text>
                </g>
            </svg>
            <audio src="audio/gamaovar.ogx" loop></audio>
            <div style="margin: 15px"></div>
            <div class="message-to-player">
                <p>YOUR JOURNEY TOGETHER HAS JUST BEGUN.</p>
                <p>YESICA, STAY DETERMINED!</p>
            </div>
            <button id="secret_button" class="secret_button">!</button>
        </div>

        <div class="scenario gamaovar-no text-center hidden">
            <video src="video/heart_broken.mp4" width="100%"></video>
        </div>

        <div class="scenario secret text-center hidden">
            <img src="img/secret_dance.gif" alt="secret_dance">
            <audio src="audio/secret_theme.ogx" loop></audio>
        </div>

    <?php } else if($after_response == 'flowey') { ?>

        <div class="scenario fade_out">
            <div class="character main flowey">
                <img class="center-block" src="img/flowey/flowey_1.png" alt="flowey">
                <span class="speech">
                    <span class="text-container"></span>
                </span>
                <audio src="audio/flowey_talk.mp3"></audio>
                <canvas class="hidden fade_out" id="flowey_glitch"></canvas>
            </div>
        </div>

    <?php } ?>
</div>
<script>
    function showText(target, message, index, interval, internal, audio) {
        if (index < message.length) {
            $('body').addClass('click-disabled');
            audio.play();
            if(internal) {
                $(target).append(message[index++]);
            } else {
                $(target).html(message[index++]);
            }
            setTimeout(function () {
                showText(target, message, index, interval, true, audio);
            }, interval);
        } else {
            $('body').removeClass('click-disabled');
        }
    }

    function character_talk(character,message) {
        var audio = character.find('audio')[0];
        var speech = character.find('.speech');
        var speech_bubble = character.find('.speech .text-container');

        if(!speech.hasClass('active')) {
            // DISABLE ANY OTHER SPEECH BUBBLE
            $('.character .speech.active').removeClass('active');
            // ACTIVATE CHARACTER SPEECH BUBBLE
            speech.addClass('active');
        }
        showText(speech_bubble, message, 0, 50, false, audio);
    }

    function change_sprite(show_sprite,hide_sprite) {
        show_sprite.removeClass('hidden');
        hide_sprite.addClass('hidden');
    }

    <?php if(!$after_response = true) { ?>
    $(document).ready(function () {
        setTimeout(function () {
            $('.loader').addClass('fade_out');
            setTimeout(function () {
                $('.loader').addClass('hidden');
                $('.sans').addClass('fade_in');
                $('.fx_sans').find('audio')[0].volume = .5;
                $('.fx_sans').find('audio')[0].play();
                setTimeout(function () {
                    $('body').removeClass('click-disabled');
                },330);
            }, 330);
        }, 2000);
    });

    var click = 27;
    $(document).click(function () {
        if(click < 28) {
            if (!$('body').hasClass('click-disabled')) {
                var character = sans = $('.sans'),
                    papyrus = $('.papyrus'),
                    drums = $('.drums');
                // DUMMY MESSAGE
                var message = 'd';
                var sprite_sans_standing = character.find('#sans_standing'),
                    sprite_sans_wink = character.find('#sans_wink');
                switch (click) {
                    case 0:
                        message = 'heya buddy';
                        break;
                    case 1:
                        message = 'so, uh, i wanna tell you something';
                        break;
                    case 2:
                        message = 'that friend of yours over there';
                        break;
                    case 3:
                        message = 'he is ruining my day off';
                        break;
                    case 4:
                        character = papyrus;
                        message = 'EVERY DAY IS A "DAY OFF" FOR YOU!!!';
                        break;
                    case 5:
                        message = 'hey, i just did a ton of work.\u200B\u200B\u200B\u200B\u200B a skele-ton';
                        break;
                    case 6:
                        change_sprite(sprite_sans_wink,sprite_sans_standing);
                        character = drums;
                        break;
                    case 7:
                        change_sprite(sprite_sans_standing,sprite_sans_wink);
                        message = 'y\'know, even if he is a little numbskull';
                        break;
                    case 8:
                        change_sprite(sprite_sans_standing,sprite_sans_wink);
                        message = 'and not always the best with words';
                        break;
                    case 9:
                        character = papyrus;
                        message = 'I\'M GREAT WITH WORDS!!!';
                        break;
                    case 10:
                        message = 'he is a dear.\u200B\u200B\u200B\u200B\u200B a papydear';
                        break;
                    case 11:
                        change_sprite(sprite_sans_wink,sprite_sans_standing);
                        character = drums;
                        break;
                    case 12:
                        change_sprite(sprite_sans_standing,sprite_sans_wink);
                        character = papyrus;
                        message = 'WHAT?';
                        break;
                    case 13:
                        message = 'i think it is kinda sweet of him';
                        break;
                    case 14:
                        message = 'to have to go through all this trouble';
                        break;
                    case 15:
                        message = 'to ask me to tell you this';
                        break;
                    case 16:
                        message = 'it shows how much he cares for you';
                        break;
                    case 17:
                        change_sprite(sprite_sans_wink,sprite_sans_standing);
                        message = 'having me here is proof enough of true love';
                        break;
                    case 18:
                        change_sprite(sprite_sans_standing,sprite_sans_wink);
                        character = papyrus;
                        message = 'IT WOULD HAVE BEEN BETTER IF HE ASKED ME, THE GREAT PAPYRUS, TO HELP!!!';
                        break;
                    case 19:
                        message = 'what i\'m trying to say is...\u200B\u200B\u200B\u200B\u200B\u200B you would make a cute couple';
                        break;
                    case 20:
                        message = 'i\'m sure you\'d be very happy together';
                        break;
                    case 21:
                        message = 'and most likely you\'d eat lots of food';
                        break;
                    case 22:
                        character = papyrus;
                        message = 'THE BEST SPAGHETTI NYEHEHEHE!!!';
                        break;
                    case 23:
                        message = 'you better put some ketchup on that';
                        break;
                    case 24:
                        message = 'anyway kiddo, you\'ve made it this far';
                        break;
                    case 25:
                        message = 'in a few moments\u200B\u200B\u200B\u200B\u200B\u200B you\'ll have to face a choice';
                        break;
                    case 26:
                        message = 'you will determine the future of this story';
                        break;
                }

                if (click < 27) {
                    character_talk(character,message);
                } else {
                    $('.sans').removeClass('fade_in').addClass('fade_out');
                    setTimeout(function () {
                        $('.character').addClass('hidden');
                        $('.fx_sans').find('audio')[0].pause();
                        $('.scenario.choice').removeClass('hidden');
                        setTimeout(function () {
                            $('.scenario.choice').removeClass('fade_out').addClass('fade_in');
                            $('.scenario.choice').find('audio')[0].play();
                        }, 300);
                    }, 330);
                }
                click++;
            }
        }
    });

    $('#btn-yes').click(function () {
        var choice_scenario = $('.scenario.choice');
        choice_scenario.addClass('fade_out');

        choice_scenario.find('audio')[0].pause();

        setTimeout(function () {
            choice_scenario.addClass('hidden');
            $('.scenario.gamaovar-yes').removeClass('hidden');
            $('.scenario.gamaovar-yes audio')[0].play();

        }, 500);
        $(document).not('#secret_buttonm').click(function () {
            return false;
        });

        $.ajax({
            url: 'functions.php',
            type: 'POST',
            data: {
                response: 'yes'
            }
        })
    });


    $('#secret_button').click(function () {
        var gamaovar_scenario = $('.scenario.gamaovar-yes');
        gamaovar_scenario.addClass('fade_out');

        gamaovar_scenario.find('audio')[0].pause();

        setTimeout(function () {
            gamaovar_scenario.addClass('hidden');
            $('.scenario.secret').removeClass('hidden');
            $('.scenario.secret audio')[0].play();
            setTimeout(function () {
                $('.scenario img').addClass('fade_in');
            },2200);
        }, 500);
    });

    $('#btn-nope').click(function () {
        var choice_scenario = $('.scenario.choice');
        choice_scenario.addClass('fade_out');

        choice_scenario.find('audio')[0].pause();

        setTimeout(function () {
            choice_scenario.addClass('hidden');
            $('.scenario.gamaovar-no').removeClass('hidden');
            $('.scenario.gamaovar-no video')[0].play();
        }, 500);
        $(document).off('click');
    });
    <?php } else { ?>
    $(document).ready(function () {
        setTimeout(function () {
            $('.loader').addClass('fade_out');
            setTimeout(function () {
                $('.loader').addClass('hidden');
                $('.scenario').removeClass('fade_out').addClass('fade_in');
                setTimeout(function () {
                    $('body').removeClass('click-disabled');
                },330);
            }, 330);
        }, 2000);
    });

    var click = 10;
    $(document).click(function () {
        if (!$('body').hasClass('click-disabled')) {
            var character = $('.flowey');
            var character_sprite = character.find('img');
            var character_speech = character.find('.speech');
            var message = '.';
            var talk = true;
            switch (click) {
                case 0:
                    message = 'W-what are you doing here?';
                    break;
                case 1:
                    character_sprite.attr('src', './img/flowey/flowey_2.png');
                    message = 'Y-you weren\'t supposed to come back.';
                    break;
                case 2:
                    character_sprite.attr('src', './img/flowey/flowey_3.png');
                    message = 'There\'s nothing else to show you.';
                    break;
                case 3:
                    character_sprite.attr('src', './img/flowey/flowey_4.png');
                    message = 'Why do you insist on coming back?';
                    break;
                case 4:
                    character_sprite.attr('src', './img/flowey/flowey_talk.gif');
                    message = 'Oh.\u200B\u200B\u200B\u200B I\'ve just got an idea\u200B\u200B\u200B\u200B.\u200B\u200B\u200B\u200B.\u200B\u200B\u200B\u200B.';
                    break;
                case 5:
                    message = 'Yeah! It\'s time for us to start a new adventure together!';
                    break;
                case 6:
                    message = 'If you insists on being here.';
                    break;
                case 7:
                    message = 'Let\'s create a brand new world.';
                    break;
                case 8:
                    message = 'For you\u200B\u200B\u200B\u200B.\u200B\u200B\u200B\u200B.\u200B\u200B\u200B\u200B.\u200B\u200B\u200B\u200B and me.\u200B\u200B\u200B Old friend.';
                    break;
                case 9:
                    character_sprite.attr('src', './img/flowey/flowey_5.png');
                    character_speech.addClass('hidden');
                    talk = false;
                    break;
                case 10:
                    character_sprite.addClass('fade_out');
                    talk = false;
                    setTimeout(function () {
                        character_sprite.addClass('hidden');
                        character.find('canvas').removeClass('hidden');
                        setTimeout(function () {
                            character.find('canvas').removeClass('fade_out').addClass('fade_in');
                            navigator.app.exitApp();
                        },330);
                    },400);
                    break;
                default:
                    talk = false;
                    break;
            }

            if (talk) {
                character_talk(character, message);
            }
            click++;
        }
    });

    var canvas = document.getElementById("flowey_glitch"),
        context = canvas.getContext("2d"),
        img = new Image(),
        w,
        h,
        offset,
        glitchInterval;

    img.src = window.location.href + "img/flowey/flowey_glitch.png";
    img.onload = function() {
        init();
        window.onresize = init;
    };

    var init = function() {
        clearInterval(glitchInterval);
        canvas.width = w = 200;//window.innerWidth;
        offset = w * 0.1;
        canvas.height = h = 240;//~~(175 * ((w - offset * 2) / img.width));
        glitchInterval = setInterval(function() {
            clear();
            context.drawImage(
                img,
                0,
                110,
                img.width,
                175,
                offset,
                0,
                w - offset * 2,
                h
            );
            setTimeout(glitchImg, randInt(250, 1000));
        }, 500);
    };

    var clear = function() {
        context.rect(0, 0, w, h);
        context.fill();
    };

    var glitchImg = function() {
        for (var i = 0; i < randInt(1, 13); i++) {
            var x = Math.random() * w;
            var y = Math.random() * h;
            var spliceWidth = w - x;
            var spliceHeight = randInt(5, h / 3);
            context.drawImage(
                canvas,
                0,
                y,
                spliceWidth,
                spliceHeight,
                x,
                y,
                spliceWidth,
                spliceHeight
            );
            context.drawImage(
                canvas,
                spliceWidth,
                y,
                x,
                spliceHeight,
                0,
                y,
                x,
                spliceHeight
            );
        }
    };

    var randInt = function(a, b) {
        return ~~(Math.random() * (b - a) + a);
    };
    <?php } ?>

</script>
</body>

</html>