<head>

   <title>Your Saved Card Results | ReadYourLover.com</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="<?php echo base_url(); ?>public/style.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>public/responsive.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>public/style-result-page.css">

   <script type="text/javascript" src="https://trk.cosmicmedia.io/gtm.js"></script>

   <style>
      p:empty { display: none; }
      .remodal { border-radius: 10px; }
      #ouibounce-modal .modal{ background:#fff; }
      #ouibounce-modal .modal-body{ background:#d01312; }
      #ouibounce-modal p{ font-size: 16px; }
      #ouibounce-modal .modal-body p{ color:#fff !important; }
      #ouibounce-modal p, #ouibounce-modal h2{ font-family: 'Libre Baskerville'; }
      #ouibounce-modal .modal-body{ padding: 5px 35px; }   
      #ouibounce-modal .modal-body .row img{ width: 100%; max-width: 100px; }
      #ouibounce-modal .modal{ height:100% !important; max-height: 375px; }
      #ouibounce-modal .modal-footer p{ border-bottom:unset !important; }
      #ouibounce-modal .modal h2 { margin: 10px auto 5px !important; }
      @media(max-width:628px){
         #ouibounce-modal .modal {
            height: 100% !important;
            max-height: 440px !important;
         }
      }
   </style>

</head>

<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">

<div id="ouibounce-modalsss" style="display:none;">
   <div class="underlay"></div>
   <div class="modal" style="background-color: #fff !important;">
      <div class="modal-body">
         <h2 class="center" style="font-weight:bold;font-size:28px;">DON’T GO!!!<br/>Leaving Now Will Alter Your Future!</h2>
         <p class="center">Your Cosmic Love Blueprint Can Make Anyone Fall In Love With You. Click Below To Start Your Risk Free Trial Now.</p>
      </div>
      <div class="modal-footer">
         <div class="text-center">
            <img src="https://free-love-tarot-reading.com/result/public/resultimg/called-cosmic-love-blueprint.png" style="max-width: 200px; border-radius: 15px;">
         </div>
         <p style="color:#000;font-weight:bold;font-size:16px;">Order Now Risk Free</p>
      </div>
   </div>
</div>

<!-- <?php if($pageIdentifier != 2){ ?>
<?php } else { ?>
   <style>
      .purple-button:hover{ color:#cc33cc !important; background:#fff !important; }
      .purple-button{
         color: #fff;
         font-style: italic;
         font-weight: bold;
         background: #cc33cc;
         font-size: 21px;
         border: 2px solid #cc33cc;
         border-radius: 10px;
         margin: 10px;
         transition: all 0.5s;
         line-height: 1.5;
         padding: 10px 20px;
      }
      .remodal { border-radius: 10px; }
   </style>
<?php } ?> -->
<style>
   .buttonSecond:hover{ background: inherit !important; color: #184266 !important; text-decoration: underline !important; }
</style>
<div class="content">

   <div class="results" id="results_page">

      <div class="result-container-sizing">

         <div class="result-container">

            <!-- START - ONE -->

            <div class="result-container-inner mt-5 py-5">
          
                <h2 class="subtitle"  style="font-family: 'Libre Baskerville'; color: #000; text-align:center;margin-bottom:30px;"><i>Card #1 explores what <?php echo $pronounsPossessive; ?> thinking about...</i></h2>

                <h1 class="animated fadeIn center main-title" style="font-family: 'Libre Baskerville'; color: #000; margin-bottom:50px;">
                    <?php echo $name; ?>, Your 1st Card Is <?php echo $title_one; ?> 
                </h1>

                <div class="row image-card m-auto">

                    <div class="text-center col-md-4">
                    <img class="animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image_one; ?>.jpg"/>
                    </div>

                    <div class="col-md-8 animated fadeIn">
                    <div>
                        <p><i>My,</i> <?php echo $name;?>...</p>
                        <?php echo $description_one; ?>
                        <?php echo $content; ?>
                    </div>
                    </div>

                </div>

            </div>

            <!-- END - ONE -->

            <!-- START - TWO -->

            <div class="result-container-inner py-5">

                <h2 class="subtitle"  style="font-family: 'Libre Baskerville'; color: #000; text-align:center;margin-bottom:30px;"><i>Card #2 reveals how <?php echo $partners_name; ?> feels about you...</i></h2>

                <h1 class="animated fadeIn center main-title" style="font-family: 'Libre Baskerville'; color: #000; margin-bottom:50px; margin-left: auto;">
                    <?php echo $name; ?>, Your 2nd Card Is <?php echo $title_two; ?> 
                </h1>

                <div class="row image-card m-auto">

                    <div class="text-center col-md-4">
                        <img class="animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image_two; ?>.jpg"/>
                    </div>

                    <div class="col-md-8 animated fadeIn">
                        <div>
                        <p><strong>Fascinating,</strong> <?php echo $name;?>...</p>
                        <?php echo $description_two; ?>
                        <?php echo $content_two; ?>
                        <p>If you want <?php echo $partners_name; ?> to desire you, commit to you and love you forever, then it’s time to jump into your next card and look at what new developments are on your horizon together.</p>
                        <p>Are you ready to see into your romantic future with <?php echo $partners_name; ?> and control your own destiny?</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- END - TWO -->

            <div class="result-container-inner py-5">
            
               <div class="first-part">

                  <h2 class="subtitle"  style="font-family: 'Libre Baskerville'; color: #000; text-align:center;margin-bottom:30px; line-height: 1.2;"><i>Card #3 predicts your future developments with <?php echo $partners_name; ?>...</i></h2>

                  <h1 class="animated fadeIn center title-control main-title" style="margin-bottom:50px;margin-left:0;"><?php echo $name; ?>, Your 3rd Card Is <?php echo $title_three; ?></h1>

                  <div class="row image-card m-auto">

                     <div class="col-md-4 text-center">
                        <img class=" animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image_three; ?>.jpg">
                     </div>

                     <div class="col-md-8 animated fadeIn">

                        <div>
                           <p><?php echo $description_three; ?></p>
                        </div>

                     </div>

                  </div>

               </div>

               <p style="margin-top:0;">Because <?php echo $name; ?>...</p>

               <p>I see two possible futures for you and <?php echo $partners_name; ?> - and they look very different.</p>
               
               <p>Your first future looks a lot like the present…</p>

               <p>Where you never really know what <?php echo $pronounsPossessive; ?> thinking because you keep getting mixed signals…</p>

               <p>Where you’re not sure how <?php echo $pronounsFeels; ?> about you and you’re always left guessing (and feeling unwanted)…</p>

               <p>Where you’re trapped on an emotional rollercoaster… hopeful one moment and anxious the next… praying that if you keep hanging in there things will work out…</p>

               <p>Where the same uncertainty you’ve been silently struggling with (for far too long) keeps you up at night… leaving you feeling restless and unbearably lonely.</p>

               <p>Where you constantly analyze everything <?php echo $partners_name; ?> does, looking for the truth behind  <?php echo $pronounsAdjectives; ?> words, because <?php echo $pronounsPossessive; ?> unable to express what’s really in <?php echo $pronounsAdjectives; ?> heart.</p>

               <p>This is your inevitable future with Tretr if you do nothing with the insights you’ve learned today, and you just keep going down the same lonely path you’re on now.</p>

               <div class="row align-items-center my-5">

                  <div class="col-md-5">

                     <p class="bold responsive-bold" style="margin-top:0;">And that’s not the future you deserve.</p>

                     <p class="bold responsive-bold">You deserve a future filled with love, passion, security and happiness.</p>

                     <p>Where you understand <?php echo $partners_name; ?> so deeply that you never have to ask what <?php echo $pronounsPossessive; ?> thinking because you already know.</p>

                  </div>

                  <div class="col-md-7 p-0">
                     <img src="<?php echo base_url(); ?>public/resultimg/sad-woman.png">
                  </div>

               </div>

               <p>Where <?php echo $partners_name; ?> showers you with love, appreciation, and devotion, and leaves no doubt in your mind that you’re most special <?php echo $pronounsLife; ?>.</p>

               <p>A future where there are no ugly surprises that break your heart again. </p>

               <p>Where you wake up each morning on cloud nine, knowing exactly where you stand with <?php echo $partners_name; ?> (or anyone else lucky enough to be with you), feeling totally relaxed and beaming with confidence. </p>

               <p>Which is why I invite you to manifest the second future I see for you…</p>

               <div class="mx-auto my-4">

                  <img src="<?php echo base_url(); ?>public/resultimg/manifest-the-second-future.png" />

               </div>

               <p><strong>A life filled with connection and intimacy.</strong></p>

               <p><strong>A relationship brimming with loving memories in the making…</strong></p>

               <p><strong>The romance you’ve been yearning for</strong>, but doubted could ever happen.</p>

               <p>This is a future that leads to emotional fulfillment unlike any relationship you’ve ever had (or tried to have.)</p>

               <p>Where you never question for a second that <?php echo $partners_name; ?> wants you and only you.</p>

               <p>Where you can finally live your “happily ever after”... wake up years from now, look deep into <?php echo $partners_name; ?>’s eyes, and think to yourself … “We made it.”</p>

               <p>It doesn’t matter how many times you’ve tried and failed…</p>

               <p>Or, how many times you’ve felt hopeless and lost…</p>

               <p>And it doesn’t matter how impossible true love with <?php echo $partners_name; ?> might seem today.</p>

               <p>Once you start down this path, the way you experience love, dating and relationships will change forever.</p>

               <div class="row align-items-center my-5">

                  <div class="col-md-5">

                     <p class="bold">But you can’t go down this path alone:</p>

                     <p class="bold">You need a guide.</p>

                     <p>My name is Angel Adams and in my past 20 years of reading Astrology and Tarot for others, I’ve helped thousands of people find true love by using a little-known secret hidden within these ancient arts.</p>

                  </div>

                  <div class="col-md-7 p-0">
                     <img src="<?php echo base_url(); ?>public/resultimg/need-a-guide.png">
                  </div>

               </div>

               <p>Because now we are about to go beyond reading the Tarot cards you drew about <?php echo $partners_name; ?>...</p>

               <p>And read the Karmic Cards <?php echo $pronounsWas; ?> born with that reveals <?php echo $pronounsAdjectives; ?> deepest inner nature, needs, and desires.</p>

               <p>What I’m about to show you is the secret roadmap to <?php echo $partners_name; ?>’s heart…</p>
               
               <p>It explains everything about <?php echo $pronounsAdjectives; ?> behavior, what <?php echo $pronounsReallyNeed; ?> from a <?php echo $pronounsGenderSeven; ?>, how to make <?php echo $pronouns; ?> crazy over you and what it takes for <?php echo $pronouns; ?> to commit to you forever.</p>

               <p>This is the ultimate guide to understand what’s happening in <?php echo $pronounsAdjectives; ?> head, <?php echo $pronounsAdjectives; ?> heart, and <?php echo $pronounsAdjectives; ?> soul so you can make the right decisions and live your “happily ever after” - together.</p>

               <h2 class="big-title mb-0 mt-5">
                  <span class="dark-blue">It’s Called</span>
               </h2>
               <h2 class="big-title my-0">
                  <span class="purple">The Cosmic Love Blueprint</span>
               </h2>

               <div class="img-container called-cosmic text-center">
                  <img src="<?php echo base_url(); ?>public/resultimg/called-cosmic-love-blueprint.png">
               </div>

               <p>There is nothing else like it anywhere in the world.</p>

               <p>It’s like running a spiritual background check on <?php echo $partners_name; ?> that tells you everything you’ve ever wanted to know about <?php echo $pronouns; ?>.</p>

               <p>Once you have <?php echo $pronounsAdjectives; ?> Blueprint, you’ll unlock the secret code to <?php echo $partners_name; ?>’s devotion that will make <?php echo $pronouns; ?> yours forever.</p>

               <p>You’ll know exactly why <?php echo $partners_name; ?> pulls away, and how to make <?php echo $pronouns; ?> obsess over you instead.</p>

               <p>You’ll breathe a deep sigh of relief as you finally understand why you’ve had difficulties with <?php echo $partners_name; ?> (reasons that have nothing to do with you)...</p>

               <p>And how to connect with <?php echo $pronouns; ?> so perfectly it’s as if you were two pieces of the same puzzle.</p>

               <p>You'll see the core of <?php echo $pronounsAdjectives; ?> personality - so closely - you’ll be able to predict what <?php echo $pronounsWill; ?> say or do before it even crosses <?php echo $pronounsAdjectives; ?> mind.</p>

               <p>You’ll smile to yourself as you discover the real reasons for <?php echo $pronounsAdjectives; ?> behavior and realize exactly what <?php echo $pronounsNeeds; ?> to open <?php echo $pronounsAdjectives; ?> heart and love you completely.</p>

               <p>And you’ll almost never feel anxious about your connection with <?php echo $partners_name; ?> again.</p>

               <!-- <p class="bold">Are you ready to go even deeper and uncover everything you need to know about <?php echo $partners_name; ?> to make <?php echo $pronouns; ?> love you forever?</p> -->

               <p>If this is the future you’d like to manifest with <?php echo $partners_name; ?>, then I have only one simple question:</p>

               <!-- <div class="show-desktop">
                  <div class="container-secret-treasure-map row align-items-center m-auto">
                     <div class="col-md-3 container-secret-treasure-map column-one">
                        <img src="<?php echo base_url(); ?>public/resultimg/card-tarot-thelovers.png">
                     </div>
                     <div class="col-md-6 container-secret-treasure-map column-two text-center p-0">
                        <h2 class="big-title dark-blue">The Universe Has Charted <span class="purple">A Secret Treasure Map</span> To <?php echo $partners_name; ?>’s Heart</h2>
                        <img src="<?php echo base_url(); ?>public/resultimg/let-me-show-you-the-way.png" style="max-width:400px;">
                     </div>
                     <div class="col-md-3 container-secret-treasure-map column-three">
                        <img src="<?php echo base_url(); ?>public/resultimg/card-tarot-thelovers-two.png">
                     </div>
                  </div>
               </div> -->

               <div class="show-desktop">
                  <div class="container-secret-treasure-map row align-items-center m-auto">
                     <div class="col-md-3 container-secret-treasure-map column-one">
                        <img src="<?php echo base_url(); ?>public/resultimg/card-tarot-thelovers.png">
                     </div>
                     <div class="col-md-6 container-secret-treasure-map column-two text-center p-0">
                        <h2 class="big-title dark-blue" style="line-height: 1.2; text-transform:capitalize;">Do You Want To Make <?php echo $partners_name; ?> SO <span class="purple">Obsessively Addicted</span> To You That <?php echo $begs; ?> To Be With You (And Only You) Forever?</h2>
                        <!-- <img src="<?php echo base_url(); ?>public/resultimg/let-me-show-you-the-way.png" style="max-width:400px;"> -->
                     </div>
                     <div class="col-md-3 container-secret-treasure-map column-three">
                        <img src="<?php echo base_url(); ?>public/resultimg/card-tarot-thelovers-two.png">
                     </div>
                  </div>
               </div>

               <div class="show-mobile" style="display:none;">
                  <div class="column-two text-center p-0">
                     <h2 class="big-title dark-blue" style="text-transform:capitalize;">Do You Want To Make <?php echo $partners_name; ?> SO <span class="purple">Obsessively Addicted</span> To You That <?php echo $begs; ?> To Be With You (And Only You) Forever?</h2>
                     <!-- <img src="<?php echo base_url(); ?>public/resultimg/let-me-show-you-the-way.png" style="max-width:400px;"> -->
                  </div>
                  <div class="container-secret-treasure-map row align-items-center m-auto">
                     <div class="col-md-6 text-center container-secret-treasure-map column-one">
                        <img src="<?php echo base_url(); ?>public/resultimg/card-tarot-thelovers.png">
                     </div>
         
                     <div class="col-md-6 text-center container-secret-treasure-map column-three">
                        <img src="<?php echo base_url(); ?>public/resultimg/card-tarot-thelovers-two.png">
                     </div>
                  </div>
               </div>

               <!-- <h2 class="main-title" style="margin:50px auto 20px;">Do You Want To Make <?php echo $partners_name; ?> SO Obsessively Addicted To You That <?php echo $begs; ?> To Be With You (And Only You) Forever?</h2> -->

               <p class="bold text-center purple" style="text-transform: capitalize;color:#5a13f3;">You Absolutely Can <?php echo $name; ?> - And All You Need Is <?php echo $pronounsAdjectives; ?> Birthday</p>

               <p>Did you know that the true power of Tarot cards is to <strong>create and control</strong> your reality?</p>

               <p>My name is Angel Adams, and for this <i>next</i> part of your reading, we are going to reach beyond the cards you drew…</p>

               <p>And read <?php echo $partners_name; ?> even <strong>deeper</strong> by examining <strong>the Tarot cards he was born with.</strong></p>

               <p>These <strong>“Birth Cards”</strong> reveal <i>everything</i> you wish you knew about <?php echo $partners_name; ?>, even if <?php echo $pronounsWould; ?> <u>never</u> tell you.</p>

               <p>You see, the day <?php echo $partners_name; ?> was born, the Universe mapped out <?php echo $pronounsAdjectives; ?> romantic destiny with Tarot cards, and now that destiny is about to be laid out <strong>right before your eyes.</strong></p>

               <p>If you want <?php echo $partners_name; ?> to become <strong>helplessly addicted to you</strong> no matter how you look, how much you weigh, or even if you are miles apart…</p>

               <p>His Birth Cards can show you how to make <?php echo $pronouns; ?> feel so deeply understood and <u>WANTED</u> as a <?php echo $pronounsGenderEight; ?> that YOU are all <?php echo $pronounsSees; ?> when he closes his eyes.</p>

               <p>If you are <strong>serious</strong> about making <?php echo $partners_name; ?> love you, I can help you have <?php echo $pronouns; ?> falling head over heels for you (and only you) faster than you <i>ever dreamed possible</i>.</p>

               <p><span style="text-transform: capitalize;"><?php echo $pronounsAdjectives; ?></span> Birth Cards will reveal everything you want to know about <?php echo $pronouns; ?> so you can anticipate <?php echo $pronounsAdjectives; ?> every move… know what drives <?php echo $pronouns; ?> wild… <strong>make <?php echo $pronouns; ?> fall in love</strong>, get inside <?php echo $pronounsAdjectives; ?> head, and practically stay there <u>forever</u>.</p>

               <p>If you want <?php echo $partners_name; ?> to commit to you and <strong>publicly embrace you</strong> as <?php echo $pronounsAdjectives; ?> one and only… </p>

               <p><span style="text-transform: capitalize;"><?php echo $pronounsAdjectives; ?></span> Birth Cards can show you the step by step path - created by the Universe and painted into Tarot cards - <?php echo $pronounsAdjectives; ?> hidden triggers and <strong>primal instincts</strong> that’ll have <?php echo $pronouns; ?> jumping for joy at the thought of being with you for the rest of <?php echo $pronounsAdjectives; ?> life.</p>

               <p>If you want to know if <?php echo $pronounsPossessive; ?> your Soulmate, his Birth Cards can tell you, just as they’ve secretly done for tens of thousands of <?php echo $pronounsGenderFour; ?> over the years.</p>

               <p class="bold">First, I need you to promise me something.</p>

               <p>You MUST agree 100% - beyond a shadow of doubt - that you will NOT use these private secrets for evil reasons.</p>

               <p>You must <strong>PROMISE</strong> you will NEVER abuse what you learn next to use, manipulate or take advantage of <?php echo $pronouns; ?> in any way.</p>

               <p>Go ahead. <i>Say it out loud</i>….</p>

               <h3 class="medium-title text-center" style="margin: 30px auto; color: #000; text-transform:capitalize;">
                  “I Promise To Use <?php echo $pronounsAdjectives; ?> Personal Secrets For <u>GOOD</u> - Not Evil!”
               </h3>

               <p>Did you do it? Did you make the promise?</p>

               <p><strong>Good, I really hope you did.</strong></p>

               <p>Since I’m not there with you, I have to trust that you fulfilled your side of the bargain.</p> 

               <p>Because now it’s time for you to learn the shocking romantic secrets about <?php echo $partners_name; ?> that <u>no other Tarot expert in the world would EVER dare to tell you</u>.</p>

               <!-- <p>Why is it that <?php echo $pronouns_first_line_a; ?> love interests will obsess over <?php echo $pronouns_first_line_b; ?> and move mountains to claim <?php echo $pronouns_first_line_c; ?>…</p>
   
               <p>While for you, it can feel like a struggle to even know where you stand?</p>

               <div class="img-container the-answer">
                  <a href="<?php echo $genderPayment; ?>" target="_blank">
                     <img src="<?php echo base_url(); ?>public/resultimg/the-answer.png">
                  </a>
               </div>

               <p>These <?php echo $pronounsGenderFour; ?> understand their <?php echo $pronounsLover; ?> inside-and-out.</p>

               <p>They not only know exactly how to win <?php echo $pronouns; ?> over, capture <?php echo $pronounsAdjectives; ?> attention and open <?php echo $pronounsAdjectives; ?> heart...</p>

               <p>They become <?php echo $pronounsAdjectives; ?> only <?php echo $pronounsGenderOne; ?>... and stay on <?php echo $pronounsAdjectives; ?> mind all day long, as if by magic.</p>

               <p>Today, I’m going to give that same magic to you.</p>

               <p>The day <?php echo $partners_name; ?> was born, the Universe assigned secret codes to <?php echo $pronounsAdjectives; ?> heart and hid these codes in a unique sequence of Tarot cards.</p>

               <p>I spent the past 15 years learning how to decode these intimate secrets, and I’ve laid them all out inside a personalized (and highly revealing) reading all about your <?php echo $pronounsLover; ?>.</p>

               <p>The secrets you’ll discover will practically force <?php echo $partners_name; ?> to see you as the amazing <?php echo $pronounsGenderOne; ?> you are, and make <?php echo $pronouns; ?> “yours” forever.</p>

               <p>You’ll uncover every juicy detail about <?php echo $pronouns; ?> that <?php echo $pronounsWill; ?> never tell you, and learn how to connect with <?php echo $pronouns; ?> on a level that no other <?php echo $pronounsGenderFive; ?> possibly could.</p>

               <p class="bold text-center format-youwill-discover" style="line-height:1.3;max-width:636px;">
                  <span style="background-color: #fde2a3;">
                     You’ll discover, in detail, what will get all of <?php echo $pronounsAdjectives; ?> focus and attention on you…
                  </span>
               </p>

               <p>…and what <?php echo $partners_name; ?> needs in a relationship to stay faithful, devoted, and happy so there’s no surprises.</p> 

               <p>You’ll uncover hidden desires <?php echo $pronounsPossessive; ?> not even aware of yet, and learn how to satisfy <?php echo $pronouns; ?> in surprising new ways that makes <?php echo $pronouns; ?> shower you with love and affection.</p>

               <p>You’ll know the shortest path to have <?php echo $partners_name; ?> begging to be your partner, and wanting to make you <?php echo $pronounsAdjectives; ?> one-and-only.</p>

               <p>You’ll remove all confusion, worry and doubt over <?php echo $pronouns; ?> about what’s going on between you…</p>

               <p>And above all…</p>

               <p>You’ll feel a rush of relief wash over you as you realize that YOU are finally in control.</p> -->

               <h3 class="medium-title">
                  <span class="dark-blue">Once you dig into the</span> <span class="purple">Cosmic Love Blueprint</span><span class="dark-blue">, and <u>uncover their juicy personal secrets</u>, you’ll <i>intuitively</i> know…</span>
               </h3>

               <div class="container-purple">

                  <ul class="list-disc">
                     
                     <li><?php echo $partners_name; ?> <strong>deepest desires</strong> and how to fulfill them!</li>

                     <li>How to stay on <?php echo $pronounsAdjectives; ?> mind every single moment you’re apart!</li>

                     <li>The <strong>low-key way</strong> to talk to <?php echo $partners_name; ?> that'll make <?php echo $pronouns; ?> feel like <strong><?php echo $pronounsSubject; ?> can tell you anything!</strong></li>

                     <li><strong>The truth about <?php echo $pronounsAdjectives; ?> romantic destiny</strong>, and where you REALLY stand with <?php echo $pronouns; ?>!</li>

                     <li>How to <strong>capture <?php echo $pronounsAdjectives; ?> attention</strong> and keep <?php echo $pronouns; ?> on <?php echo $pronounsAdjectives; ?> toes in a way <?php echo $pronounsSubject; ?> can’t resist!</li>

                     <li><strong>The #1 thing <?php echo $partners_name; ?> looks for in a “perfect lover”</strong> and how to make sure <?php echo $pronounsSubject; ?> <strong>see it in YOU!</strong></li>

                     <li><?php echo $pronounsAdjectives; ?> <strong>secret heart triggers</strong> that get <?php echo $pronouns; ?> to <strong>fall in love</strong> with the person who pulls them!</li>

                     <li>How to be <u>FULLY SEEN</u> by <?php echo $pronouns; ?>, and have <?php echo $pronouns; ?> hanging on every word you say!</li>

                     <li>A simple way to get on <?php echo $pronounsAdjectives; ?> good side and stay there - even when <?php echo $pronounsPossessive; ?> mad!</li>

                     <li>How to <strong>support <?php echo $pronouns; ?></strong> in ways <?php echo $pronounsSubject; ?> didn’t know <?php echo $pronounsSubject; ?>  needed but will <strong>never forget!</strong></li>

                     <li>What <?php echo $partners_name; ?> does (and doesn’t do) when <?php echo $pronounsPossessive; ?> really in love!</li>

                     <li>What <strong>secretly inhibits</strong> <?php echo $pronouns; ?> and makes <?php echo $pronouns; ?> pull away!</li>

                     <li>How to <strong>give <?php echo $pronouns; ?> space</strong> in a way that <?php echo $pronounsWill; ?> <strong>never want it!</strong></li>

                     <li><strong>What turns <?php echo $partners_name; ?> on</strong> more than anything in the entire world that <?php echo $pronounsSubject; ?>  probably <strong><?php echo $pronounsNot; ?> done yet!</strong></li>

                     <li>How to get <?php echo $pronouns; ?> to <strong>view YOU as the most important <?php echo $pronounsGenderOne; ?> in <?php echo $pronounsAdjectives; ?> life!</strong></li>

                     <li><strong>The BEST way</strong> to put <?php echo $pronouns; ?> in the mood without even touching <?php echo $pronouns; ?>!</li>

                     <li>How to inspire <?php echo $pronouns; ?> to take down <?php echo $pronounsAdjectives; ?> emotional walls and stop running from <?php echo $pronounsAdjectives; ?> true feelings for you!</li>

                     <li>How to <strong>win an argument</strong> with <?php echo $partners_name; ?> almost every time!</li>

                     <li>The <strong><u>ONLY</u></strong> thing that keeps <?php echo $pronounsAdjectives; ?> relationships together for the long haul!</li>

                     <li><strong>How to please <?php echo $pronouns; ?></strong> more in one evening than any other <?php echo $pronounsGenderOne; ?> could in a lifetime!</li>

                     <li>How to make <?php echo $pronouns; ?> <strong>commit <?php echo $pronounsAdjectives; ?> heart to you - and only you - forever!</strong></li>

                     <li><strong>AND SO MUCH MORE...</strong></li>

                  </ul>

               </div>

               <div class="row my-5">

                  <div class="col-md-5">

                     <p>You’ll also <strong>discover</strong> what to do when <?php echo $partners_name; ?>’s Birth Cards come up in your Tarot readings…</p>

                     <p>…and how to <strong>recognize the karmic insights,</strong> blessings and warnings that you could never see before.</p>

                     <p>After <strong>The Cosmic Love Blueprint,</strong> you’ll never look at Tarot readings the same way again.</p>

                     <p>But that’s just a <strong>tiny taste</strong> of what’s to come as I take you by the hand, and walk you through this doorway to <?php echo $pronounsAdjectives; ?> soul.</p>

                     <p class="bold">Your unique Cosmic Love Blueprint is easy to read on your web browser, especially from your phone…</p>

                  </div>

                  <div class="col-md-7 p-0">
                     <img src="<?php echo base_url(); ?>public/resultimg/access-cosmic.png">
                  </div>

               </div>

               <p><i>And it’s all available to you <strong>within minutes from now.</strong></i></p>

               <p>Page by page, as you read through this inventory of  <?php echo $pronounsAdjectives; ?> psyche…</p>

               <p>You’ll gasp and grin from ear to ear as you realize… <?php echo $partners_name; ?> is about to be putty in your hands. </p>

               <p>Can you <strong>imagine what’s possible</strong> when you’re not struggling to figure <?php echo $pronouns; ?> out anymore?</p>

               <p>Each <strong>deeply personal secret you’ll discover</strong> about <?php echo $pronouns; ?> is like unlocking the latch to <?php echo $pronounsAdjectives; ?> heart so you can find out who <?php echo $partners_name; ?> REALLY is… what it’s like to be with the real <?php echo $pronouns; ?>.</p>

               <p class="bold">But that’s not all…</p>

               <p>When you pick up a copy of The Cosmic Love Blueprint about them today, you’ll also receive…</p>

               <h2 class="main-title mt-5 mx-auto" style="max-width: 900px;">
                  <span class="dark-blue">Your OWN Cosmic Love Blueprint All About YOU -</span> <span class="purple">Absolutely FREE!</span>
               </h2>

               <p class="bold text-center mx-auto" style="background:#ffcc33; max-width: 460px;"><i>You Get 2 For The Price of 1!</i></p>

               <div class="img-container cosmic-two-books my-5">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/cosmic-two-books.png" />
               </div>

               <p>Not only will you learn all of the <strong>juicy secrets</strong> about <?php echo $partners_name; ?> (or whoever else you choose to create a blueprint for)...</p>

               <p>You’ll also discover the <strong>hidden truth</strong> about YOU and YOUR romantic destiny!</p>

               <p>You’ll tap into the <strong>secret romantic talents</strong> you were born with, and learn how to maximize them. </p>

               <p>You’ll identify your own relationship wounds and discover how to heal them.</p>

               <p>You’ll tap into your beautiful, raw, authentic power as a <?php echo $pronounsGenderFive; ?> and <strong>embrace</strong> it in a way that’s natural to you. </p>

               <p>Once you awaken this power, not only will your <?php echo $pronounsLover; ?> grovel over you, but new <?php echo $pronounsGenderTen; ?> will notice you and your friends will wonder what your secret is.</p>

               <p class="bold">That’s TWO Cosmic Love Blueprints for the price of ONE! </p>

               <p>Now, you’re probably thinking that this must cost a small fortune… right? </p>

               <p>For you <?php echo $name; ?>? Not even close!</p>

               <p>Since 2007, I’ve sat in person with hundreds of people like you for Tarot readings. </p>

               <p>Clients from all walks of life would pay up to $200 and thank me up and down for such a great deal. </p>

               <p>But as time went on, I realized I could only help so many people every day… and that I could help so many more people online. </p>

               <p>So I spent the <strong>last five years</strong> working with a software developer to bring all of these secrets onto a platform you can access instantly, and from anywhere in the world.</p>

               <p>This way, I’m able to give you the same great reading - arguably even <strong>deeper</strong> - for a fraction of the cost. </p>

               <p>So you won’t have to pay $200 for <strong>The Cosmic Love Blueprint.</strong> </p>

               <p>You won’t pay $150…</p>

               <p>You won’t even pay $100. </p>

               <p>Instead, thanks to my software, your low price for <strong>The Cosmic Love Blueprint</strong> to reveal <?php echo $pronounsAdjectives; ?> secrets… is only $50. </p>

               <p>And get this! </p>

               <p>I’ve convinced my partners to <strong>help you out even more</strong>, by knocking off another $13 as your “Inspired Action” discount when you <strong>jump on this today.</strong> </p>

               <p>That means you can get a complete Cosmic Love Blueprint today for only <span style="text-decoration: line-through;">$200</span> <span style="text-decoration: line-through;">$50</span> <strong><span class="red">$37!</span></strong></p>

               <p>PLUS you get a Cosmic Love Blueprint for yourself absolutely free!</p>

               <p>That’s only $18.50 for each Cosmic Love Blueprint!</p>

               <p>I don’t know about you, but if someone offered me the golden key to my love interest's heart - AND revealed my romantic destiny - for less than $40, I’d feel like I hit the jackpot! 

               <p>So go ahead:</p>

               <p class="bold text-center" style="font-size:20px;"><span class="red">Click the button below and order The Cosmic Love Blueprint right now.</span></p>

               <div class="img-container text-center cosmic-package">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/products-shot.jpg" />
               </div>

               <div class="container-download-now">

                  <div class="container-inner-download-now text-center my-4">
                     <div class="img-container">
                        <a href="<?php echo $genderPayment; ?>" target="_blank">
                           <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/button-download-now-new.png" />
                        </a>
                     </div>
                  </div>

                  <div class="img-container text-center money-back-guarantee mb-5">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/money-back-guarantee.png" />
                  </div>

               </div>

               <p class="bold"><u>Here’s the best part:</u></p>

               <p>You have nothing to lose and a much happier, healthier and more satisfying relationship to gain with...</p>

               <div class="container-money-back my-5">

                  <div class="w-100" style="background: #913169;">
                     <h3 class="medium-title mx-auto white">My “Fall In Love Or It’s Free” 100% Money Back Guarantee</h3>
                  </div>

                  <div class="container-inner-money-back">

                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/money-back-guarantee-horizontal.png" />

                     <h3 class="medium-title red-blue my-4 responsive-br">Here’s How The <br/>Money Back Guarantee Works</h3>

                     <p>I’m so convinced that the Cosmic Love Blueprint will help your love interest see you as the perfect person and fall in love with you - that if they don’t, I’ll hand you back every penny.</p>  
   
                     <p>Some people think I’m crazy to offer such a bold guarantee, but I don’t care what they think.</p>
                     
                     <p>All I care about is getting you RESULTS <u>and I’m willing to put my money where my mouth is.</u></p>
                     
                     <p>So go ahead…</p>
                     
                     <p>Get your copy of The Cosmic Love Blueprint and read through it.</p>
                     
                     <p>Learn what makes them tick, how they think, how they feel inside, and approach your situation with them in a whole new light.</p>
                     
                     <p>Enjoy your deep conversations as you form an unbreakable bond.</p>
                     
                     <p>Feel their heart open up and focus on you as the ONE person who matters most.</p>
                     
                     <p><strong>Fall deeply and passionately in love.</strong></p>
                     
                     <p>If you’re not convinced that The Cosmic Love Blueprint was the one thing that turned your love life around and made everything possible in your new relationship over the next 60 days…</p>
                     
                     <p>Then simply email our friendly support team and they’ll refund you within 24 hours.</p>

                     <p>We’ll refund you your money and let you keep the Cosmic Love Reading free of charge.</p>
                     
                     <p>That way, there’s absolutely nothing stopping you from diving in and creating the relationship you really want with the person of your choosing.</p>

                  </div>

               </div>

               <p class="bold">And it gets even better!</p>
 
               <p>To make this an even SWEETER deal for you...</p>
               
               <p>When you order before midnight tonight, you’ll also receive...</p>

               <h3 class="medium-title dark-blue-2" style="line-height: 1.2;">You Also Get 6 Life Changing Presents As My <u>Free Gift</u> To You - Just For Giving The Cosmic Love Blueprint An Honest Try!</h3>

               <div class="row row-free-gifts align-items-center my-5">
                  <div class="col-md-4 p-0 text-center">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/card-free-real-astrology-secrets.png" />
                  </div>
                  <div class="col-md-4 p-0 text-center">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/card-free-numerology-made-easy.png" />
                  </div>
                  <div class="col-md-4 p-0 text-center">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/card-free-tarot-card.png" />
                  </div>
               </div>

               <p>That’s a whopping $87 in value, just for giving the Cosmic Love Blueprint an honest try.</p>

               <p>But wait… there’s more!</p>

               <p>As an exclusive super-bonus I’m also going to give you…</p>

               <div class="row row-free-gifts align-items-center my-5">
                  <div class="col-md-4 p-0 text-center">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/card-free-heartbreak.png" />
                  </div>
                  <div class="col-md-4 p-0 text-center">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/card-free-full-body.png" />
                  </div>
                  <div class="col-md-4 p-0 text-center">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/card-free-second-cosmic.png" />
                  </div>
               </div>

               <h2 class="big-title dark-blue">Let’s Wrap This Up:<h2>

               <p class="bold">When you order now, you’re getting.</p>
 
               <p><strong>One Cosmic Love Blueprint</strong> all about your love interest that we agreed is worth $200…</p>
               
               <p><strong>A 2nd Cosmic Love Blueprint</strong> all about YOU, also <strong>worth $200...</strong></p>
               
               <p>Plus… your special presents...</p>
               
               <p><strong>Real Astrology Secrets:</strong> A crash course in reading the stars. <strong>A $29 value...</strong></p>
               
               <p><strong>Numerology Made Easy:</strong> Decode the role of numbers in your life. <strong>A $29 value...</strong></p>
               
               <p><strong>Tarot Card Insights:</strong> Get secret messages from the Universe, to you. <strong>A $29 value...</strong></p>
               
               <p><strong>Full Body Pleasure:</strong> Six simple steps to turn your body on. <strong>A $67 value…</strong></p>

               <p><strong>PLUS - The Heartbreak Cure:</strong> How to heal your heart and find new love. <strong>A $197 value...</strong></p>
               
               &nbsp;

               <p>When you do the math, you’re getting a massive <strong>$751</strong> worth of life changing information...</p>
               
               <p>ALL for the astonishingly low price of only <span style="text-decoration: line-through;">$751</span> <strong><u>$37!</u></strong></p>
               
               <p>AND it’s <strong>100% risk free for 60 days.</strong></p>
               
               <p class="bold">So go ahead…</p>
               
               <p>Do what’s best for you, your heart, and your relationship.</p>
               
               <p><strong><u>Click the button below</u></strong> and you’ll be taken to our <strong>secure shopping cart</strong>, hosted by Clickbank.com (the Amazon of digital products).</p>
               
               <p><strong>Fill out your details,</strong> and you’ll be taken to a private web page with <strong>immediate access to your Cosmic Love Blueprints</strong> and 5 special presents.</p>
               
               <p>You’ll receive an email to confirm your order, and our support team is ready to answer <u>any questions you may have.</u></p>
               
               <p>Just <i>remember</i>…</p>

               <h2 class="big-title dark-blue">Time Is Of The Essence <?php echo $name; ?>!<h2>

               <p>Each day that goes by where you’re confused and unsure about your love interest is a day you’ll never get back.</p>
 
               <p>Every moment you spend worrying about what’s happening between you and them is a precious moment wasted.</p>
               
               <p>Each minute that you’re not 100% fulfilled in your love life is a minute too long.</p>
               
               <p><span style="background-color: #fde2a3;">Haven’t you felt alone and unloved long enough?</span></p> 
               
               <p><u>Claim your incredible discount</u> on The Cosmic Love Blueprint now while this deal is still online, as I’m honestly not sure how long that will be.</p>

               <div class="img-container text-center cosmic-package">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/products-shot.jpg" />
               </div>

               <div class="img-container text-center cosmic-values mt-3">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/cosmic-values.png" />
               </div>

               <div class="container-download-now">

                  <div class="container-inner-download-now text-center my-4">
                     <div class="img-container">
                        <a href="<?php echo $genderPayment; ?>" target="_blank">
                           <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/button-download-now-new.png" />
                        </a>
                     </div>
                  </div>

                  <div class="img-container text-center money-back-guarantee mb-5">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/money-back-guarantee.png" />
                  </div>

               </div>

               <p>Thank you so much for the chance to read for you today.</p>
 
               <p>I can’t wait to hear about what happens next with <?php echo $partners_name; ?>.<p>
               
               <p>With love, truth and honor,</p>

               <div class="img-container signature-angel-adams my-4">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/signature-angel-adams.png" />
               </div>

               <p>Angel Adams</p>

               &nbsp;
               
               <p><strong>P.S. Remember:</strong> This reading contains everything you need to know to make <?php echo $partners_name; ?> interest yours forever. You’re getting two readings for the price of one, plus 6 special presents worth $751. Plus, you have <strong>60 days to try it risk free</strong> and you <strong>keep the gifts no matter what</strong>. It’s a <strong>win/win</strong> decision that will <u>change both your lives</u>.</p>
               
               <p><strong>P.P.S.</strong> You can keep going at it alone the hard way, like you’ve already been doing, and in a few years through <strong>trial and error</strong>, you might be able to connect just as deeply.</p>
               
               <p>However, it’s more likely that…</p>

               <h3 class="medium-title dark-blue">You'll Keep Spinning Your Wheels While The Clock Is Running Out - Until It Finally Does</h3>

               <p><strong>Picture yourself</strong> a year from now, thinking about this day.</p>
 
               <p>If you do nothing, you’ll probably find yourself in the same exact place, and the same exact situation - just a year of being older, sadder, and more unsatisfied.</p>
               
               <p>This is the unfortunate fate of most  <?php echo $pronounsGenderTen; ?>  who end up single their entire lives.</p>
               
               <p>And I do NOT want that for you.</p>
               
               <p>So please, do yourself and your <?php echo $pronounsLover; ?>  a favor…</p>
               
               <p><strong>Learn the secret code to making them tick, and turn your relationship into a romantic masterpiece they could write movies about.</strong></p>
               
               <p>I’ve brought you the bridge, but it’s up to you to <strong>cross it.</strong></p>

               <p class="bold text-center dark-blue my-5">Click The Button Below And<br/> Get Your Cosmic Love Blueprint Package Today.</p>

               <div class="container-download-now">

                  <div class="container-inner-download-now text-center my-4">
                     <div class="img-container">
                        <a href="<?php echo $genderPayment; ?>" target="_blank">
                           <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/button-download-now-new.png" />
                        </a>
                     </div>
                  </div>

                  <div class="img-container text-center money-back-guarantee mb-5">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/money-back-guarantee.png" />
                  </div>

               </div>

               <div class="img-container text-center testimonial mb-4">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/testimonial-sherry-kao.png" />
               </div>

               <div class="img-container text-center testimonial mb-4">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/testimonial-john-huang.png" />
               </div>

               <div class="img-container text-center testimonial mb-5 pb-3">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/testimonial-stephanie-mckeen.png" />
               </div>

               <div class="container-download-now">

                  <div class="container-inner-download-now text-center my-4">
                     <div class="img-container">
                        <a href="<?php echo $genderPayment; ?>" target="_blank">
                           <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/button-download-now-new.png" />
                        </a>
                     </div>
                  </div>

                  <div class="img-container text-center money-back-guarantee mb-5">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/money-back-guarantee.png" />
                  </div>

               </div>
                           
            </div>

         <div>

      </div>
      
   </div>

   <div class="container-clickbank">

      <p style="color:#999999 !important;">ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</p>

      <p class="smaller m-auto" style="color:#999999 !important;"><a href="https://readyourlover.com/terms.php" target="_blank">Terms of Service</a> | <a href="https://readyourlover.com/privacy.php" target="_blank">Privacy Policy</a> | <a href="https://cosmicupdates.com/contact/" target="_blank">Contact Us</a> | <a href="https://cosmicupdates.com/" target="_blank">Member Login</a></p>
      <p class="smaller m-auto" style="color:#999999 !important;">Copyright 2023 All Rights Reserved ReadYourLover.com</p>

   </div>


</div>
<!-- custom -->
<script src="<?php echo base_url(); ?>public/js/custom.js"></script>
