<!DOCTYPE html>
<html lang="en-US" style="background-color: #000;">
    <head> 
        <script src="js/jquery.min.js"></script>

        <meta charset="UTF-8" />

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="style.css" rel="stylesheet">
        <link href="responsive.css" rel="stylesheet">
        <link href="style-cards.css" rel="stylesheet">
        <!-- <link href="lt-styles-two.css" rel="stylesheet"> -->

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,600i,900,900i" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        
        <link rel="icon" type="image/png" href="../img/faviconCU.png" />

        <title>Find Out Everything They’ll Never Tell You | ReadYourLover.com</title>

        <meta name="description" content="Single? Committed? Met someone new? Draw three cards and see what they think of you, how they feel about you, and what they'll do next.">

    </head>

    <body>

        <div class="container-readyourlover">
        
            <div class="container-upper center" id="container-upper">

                <div class="container" style="padding-bottom:190px;">

                    <h3 class="center"><i>Single? Committed? Met Someone New?</i></h3>
                    <h1 class="center">Unlock The Hidden Truth About Your Future Together</h1>
                    <h2 class="center">Press Shuffle, Then Draw 3 Cards And Get Answers Now...</h2>
                    <!-- CARD ROWS -->

                    <div class="choose-wrap"> 

                        <div class="remodal" data-remodal-id="getreading" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                            <div>
                                <h2 class="center">What <i>Interesting</i> Cards You’ve Drawn!</h2>
                                <h3 class="center">Let's Start With What This Person Thinks Of You ...</h3>
                                <p class="center" style="margin-top:20px;">First, what's your first name? It will help me with your reading.</p>
                                <p class="left" style="margin-top:20px; text-align:left;">My Name Is:</p>
                                <div class="form-group form_inner fname-inner no-inline">
                                    <div class="form-col fname">

                                        <?php

                                        $hopvalue = "?hop=cosupdates";

                                        if (isset($_GET['hop'])) {

                                            $hopvalue = "?hop=" . $_GET['hop'];
                                        }

                                        ?>

                                        <?php

                                        $tid = "&tid=default";

                                        if (isset($_GET['tid'])) {

                                            $tid = "&tid=" . $_GET['tid'];
                                        }

                                        ?>

                                        <form id="reading-form" action="result/one<?php echo $hopvalue; ?><?php echo $tid; ?>" method="POST">

                                            <input type="hidden" name="one" value="<?php echo trim($result[0]); ?>" />
                                            <input type="hidden" name="two" value="<?php echo trim($result[1]); ?>" />
                                            <input type="hidden" name="three" value="<?php echo trim($result[2]); ?>" />

                                            <input type="text" name="inputFirstName" class="form-control on-focus" id="firstNameT" placeholder="Your First Name">

                                            <p class="left" style="margin-top:20px; text-align:left;">I am a:</p>
                                            
                                            <select name="gender" class="form-control on-focus">
                                                <option value="woman">Woman</option>
                                                <option value="male">Man</option>
                                                <option value="other">LGBTQ+</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="form-group send">
                                    <button class="btn btn-purple multiple up btnsubmit" type="button">Continue My Reading >></button>

                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center" style="margin:auto;">

                            <div class="col-md-3 p-0">

                                <div class="cards-row-wrap" data-cis="3">
                                    <div class="cards-row-outer">
                                        <div id="cards-row-1" class="cards-row clearfix limit-cards" data-cisr="3">
                                            <div class="card on" data-id="1"></div>
                                            <div class="card on" data-id="2"></div>
                                            <div class="card on" data-id="3"></div>
                                            <div class="card on" data-id="4"></div>
                                            <div class="card on" data-id="5"></div>
                                            <div class="card on" data-id="6"></div>
                                            <div class="card on" data-id="7"></div>
                                            <div class="card on" data-id="8"></div>
                                            <div class="card on" data-id="9"></div>
                                            <div class="card on" data-id="10"></div>                     
                                        </div>
                                    </div>
                                </div>
       
                            </div>

                            <div class="col-md-9 p-0">

                                <div class="container-button" style="min-height:82.5px;">

                                    <div class="instructions ">

                                        <div class="text-shadow-minimal text-center">

                                            <div class="button-shuffle-alt-index button">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-default btn-plain btn-shuffle" style="">Shuffle</a>
                                            </div>

                                        </div>

                                        <div class="text-shadow-minimal text-center">

                                            <div class="reshuffle-info">
                                                <p>Press "SHUFFLE" To Begin...</p>
                                            </div>

                                        </div>
    
                                    </div>

                                    <!-- GUIDE AND NAV -->
                                    <div class="row nav-guide" style="margin:auto;">

                                        <!-- Guide -->
                                        <div class="col-md-9 text-center guide-wrap">
                                            <div class="guide nice-box collapse">
                                                <p class="text-shadow-minimal">
                                                    Select your <b>First card</b>…
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row" style="margin:auto;">

                                        <div class="col-md-9 text-center get-my-reading-wrap">
                                            <div class="get-my-reading collapse">
                                                <a href="#" id="getreading" data-remodal-target="getreading" class="btn btn-primary btn-block btn-lg btn-get-reading">Get My Reading!</a>
                                            </div>
                                        </div>

                                    </div>

                                </div> 

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="container-bottom" id="love-reading">

                <div class="center">

                    <h3><span style="color:#cc33cc;">Your FREE Tarot Love Reading</span> Helps Solve Any Romance Problem No Matter How Severe.</h3>

                    <h3 style="max-width:590px;margin-bottom: 50px;">Use this trusted "Romantic X-Ray" and let the Tarot Cards uncover...</h3>

                </div>

                <div class="pain-points">

                    <div class="row align-items-center">

                        <div class="col-md-1 center" style="padding:0;">
                            <img src="checkmark.png" />
                        </div>
                        <div class="col-md-11">
                            <p>What someone really thinks of you, whether you barely know them or have been together for years!</p>
                        </div>

                    </div>

                    <div class="row align-items-center">

                        <div class="col-md-1 center" style="padding:0;">
                            <img src="checkmark.png" />
                        </div>
                        <div class="col-md-11">
                            <p>How they secretly feel about you even if they’re good at hiding it!</p>
                        </div>

                    </div>

                    <div class="row align-items-center">

                        <div class="col-md-1 center" style="padding:0;">
                            <img src="checkmark.png" />
                        </div>
                        <div class="col-md-11">
                            <p>Where you truly stand with them and what they’ll do next!</p>
                        </div>

                    </div>

                    <div class="row align-items-center">

                        <div class="col-md-1 center" style="padding:0;">
                            <img src="checkmark.png" />
                        </div>
                        <div class="col-md-11">
                            <p>How to control your romantic situation and get the outcome you desire…</p>
                        </div>

                    </div>

                    <div class="row align-items-center">

                        <div class="col-md-1 center" style="padding:0;">
                            <img src="checkmark.png" />
                        </div>
                        <div class="col-md-11">
                            <p>If your person is actually your soulmate (or just another lesson learned)...</p>
                        </div>

                    </div>

                    <div class="row align-items-center">

                        <div class="col-md-1 center" style="padding:0;">
                            <img src="checkmark.png" />
                        </div>
                        <div class="col-md-11">
                            <p>Plus: The juicy details that reveal what makes your person fall madly in love and stay yours forever!</p>
                        </div>

                    </div>

                </div>

                <div class="container-button" style="margin:50px auto;">

                    <div class="button">

                        <a href="https://readyourlover.com/new/landing.php#container-upper" class="btn btn-sm btn-default btn-plain" style="">TELL ME EVERYTHING!</a>

                    </div>

                    <p>Get Your Free Love Reading Now!</p>

                </div> 

            </div>
            
        </div>

        <footer>

            <div class="" id="footer-outer">

                <div class="footer">

                    <div class="row" style="align-items:center;">

                    <div style="width:45%;">
                        <p>
                            <a href="https://ssl.readyourlover.com/terms" target="_blank">Terms Of Use</a> 
                        </p>
                    </div>

                    <div style="width:10%;">
                        <p style="color: #bbbbbb;">|</p>
                    </div>

                    <div style="width:45%;">
                        <p>
                            <a href="https://ssl.readyourlover.com/privacy" target="_blank">Privacy Policy</a>
                        </p>
                    </div>
            
                    </div>
                    <div class="clear"></div>

                </div>

            </div>

        </footer>

            <script src="js/jquery.min.js"></script>
            <script src="js/script-cards.js"></script>
            <script src="js/yii.js"></script>
            <script src='js/rbeix.js'></script>
            <script src="js/index.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/custom-scripts-two.js?v=3b"></script>
            <script src="js/bootstrap-switch.js"></script>
            <script src="https://apis.google.com/js/platform.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>
            <script src="https://chancejs.com/chance.min.js"></script>
            <!-- remodal-->
            <link rel="stylesheet" href="remodal-new/remodal.css">
            <link rel="stylesheet" href="remodal-new/remodal-default-theme.css">
            <script src="remodal-new/remodal.js"></script>

            <script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#myModal').on('shown.bs.modal', function () {
                        $('#myInput').trigger('focus')
                    })

                    $("[name='zen-mode']").bootstrapSwitch();
                    $("[name='card-animate']").bootstrapSwitch();
                    $('.choose-wrap').chooseCards();

                    
                    
                    $('[data-toggle="tooltip"]').tooltip();;
                    jQuery('#w0').parent().datepicker({
                        "autoclose": true,
                        "format": "M d, yyyy",
                        "startView": 2
                    });
                    jQuery('#the-modal').modal({
                        "show": false
                    });
                    jQuery('#the-modal').on('show.bs.modal', function(e) {
                        var theModal = $(this);
                        var theModalLoad = $('#the-modal-loader');
                        var rt = $(e.relatedTarget);
                        theModalLoad.show();
                        $('.modal-dialog', theModal).load(rt.attr('href'), function() {
                            var theModalSize = rt.data('size') !== undefined ? rt.data('size') : (theModal.data('size') !== undefined ? theModal.data('size') : 'md');
                            $('.modal-dialog', theModal).removeClass('modal-sm modal-md modal-lg').addClass('modal-' + theModalSize).parent().removeData('size');
                            theModal.addClass('the-in');
                            theModalLoad.hide();
                            theModalinit();
                        });
                    });
                    jQuery('#the-modal').on('hide.bs.modal', function(e) {
                        $(this).removeClass('the-in');
                    });
                    jQuery('#the-modal').on('hidden.bs.modal', function(e) {
                        $(this).removeClass('the-in').find('.modal-content').html('');
                        $('#the-modal-loader').hide();
                    });
                });

                $('.btnsubmit').click(function() {



                    if ($('#firstNameT').val() == "") {

                        alert('Please Enter your Name!');

                    } else {

                        // gtag('event', 'generate_reading', {
                        //     'event_category': 'button_click',
                        //     'event_label': 'clicked',
                        //     'value': 'reading'
                        // });
                        
                        // gtag('event', 'generate_reading', {
                        //     'event_category': 'button',
                        //     'event_label': 'clicked',
                        //     'value': 'reading'
                        // });

                        gtag('event', 'generate_reading', {
                            'event_category': 'button',
                            'event_label': 'clicked',
                            'value': 'reading',
                            'event_callback': function() {

                                $('#reading-form').submit();

                            }

                        });
                        
                        

                    }



                });

                $( document ).ready(function() {

                    $( ".cross" ).hide();

                    $( ".menu" ).hide();

                    $( ".hamburger" ).click(function() {

                        $( ".menu" ).slideToggle( "fast", function() {

                            $( ".hamburger" ).hide();

                            $( ".cross" ).show();

                        });

                    });



                    $( ".cross" ).click(function() {

                        $( ".menu" ).slideToggle( "fast", function() {

                            $( ".cross" ).hide();

                            $( ".hamburger" ).show();

                        });

                    });
            });
            </script>

    </body>

</html>
