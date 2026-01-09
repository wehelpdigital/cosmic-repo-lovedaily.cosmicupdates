<head>

   <title>Your Saved Results | ReadYourLover.com</title>

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
   </style>

   <!-- Meta Pixel Code -->
   <script>
   !function(f,b,e,v,n,t,s)
   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
   n.callMethod.apply(n,arguments):n.queue.push(arguments)};
   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
   n.queue=[];t=b.createElement(e);t.async=!0;
   t.src=v;s=b.getElementsByTagName(e)[0];
   s.parentNode.insertBefore(t,s)}(window, document,'script',
   'https://connect.facebook.net/en_US/fbevents.js');
   fbq('init', '475399351296655');
   fbq('track', 'PageView');
   </script>
   <noscript><img height="1" width="1" style="display:none"
   src="https://www.facebook.com/tr?id=475399351296655&ev=PageView&noscript=1"
   /></noscript>
   <!-- End Meta Pixel Code -->

</head>

<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">

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

<style>
   .buttonSecond:hover{ background: inherit !important; color: #184266 !important; text-decoration: underline !important; }
</style>
<div class="content">

   <div class="results" id="results_page">

      <div class="result-container-sizing">

         <div class="result-container">

            <div class="result-container-inner pb-5">
            
               <div class="first-part">

                  <!-- <h1 class="animated fadeIn center title-control main-title"><?php echo $name; ?>, Here’s What <?php echo $partners_name; ?> Will Do Next…</h1> -->

                  <!-- START - PROGRESS CARDS -->

                  <div class="row cards-progressbar">

                     <div class="col">

                        <img class="" src="<?php echo base_url(); ?>public/cards/<?php echo $image_one; ?>.jpg"/>

                     </div>

                     <div class="col">

                        <img class="" src="<?php echo base_url(); ?>public/cards/<?php echo $image_two; ?>.jpg"/>

                     </div>

                     <div class="col col-active active-green">

                        <img class="" src="<?php echo base_url(); ?>public/cards/<?php echo $image_three; ?>.jpg"/>

                     </div>

                     <div class="col">

                        <img class="" src="<?php echo base_url(); ?>public/progress-cards-cardback/question-card-4.jpg"/>

                     </div>

                  </div>

                  <!-- END - PROGRESS CARDS -->

                  <h2 class="subtitle text-transform-capitalize"  style="font-family: 'Libre Baskerville'; color: #000; text-align:center;margin-bottom:50px ;margin-top: 0;">Card #1 - What’s On <?php echo $pronounsAdjectives; ?> Mind</h2>

                  <div class="row image-card m-auto">

                     <div class="text-center col-md-4">
                        <img class="animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image_one; ?>.jpg"/>
                     </div>

                     <div class="col-md-8 animated fadeIn">
                     <!-- <h2 class="subtitle"  style="font-family: 'Libre Baskerville'; color: #000; margin-bottom:20px !important;">Your first card is <?php echo $title; ?>.</h2> -->
                        <div>
                           <!-- <p><i>My,</i> <?php echo $name;?>...</p> -->
                           <p>Welcome <?php echo $name;?>! Let’s start with  what this <span style="    text-transform: lowercase;"><?php echo $identify;?></span> is thinking about.</p>
                           <p>Let’s start by seeing what’s going on inside this guy’s head…</p>
                           <?php echo $description_one; ?>
                           <?php echo $content; ?>
                        </div>
                     </div>

                  </div>

               </div>

               <div class="py-3">

                  <h2 class="subtitle text-transform-capitalize"  style="font-family: 'Libre Baskerville'; color: #000; text-align:center;margin-bottom:50px ;margin-top: 0;">Card #2 - How <?php echo $pronounsSubject; ?>
                  <?php if($pronounsSubject == "they"){  ?>
                     Feel
                  <?php } else { ?>
                     Feels
                  <?php } ?>
                  About You</h2>

                  <div class="row image-card m-auto">

                     <div class="text-center col-md-4">
                        <img class="animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image_two; ?>.jpg"/>
                     </div>

                     <div class="col-md-8 animated fadeIn">
                        <div>
                           <p>Very interesting <?php echo $name;?>...</p>
                           <?php echo $description_two; ?>
                           <?php echo $content_two; ?>
                        </div>
                     </div>

                  </div>

               </div>

               <div class="py-3">

                  <h2 class="subtitle text-transform-capitalize"  style="font-family: 'Libre Baskerville'; color: #000; text-align:center;margin-bottom:50px ; line-height: 1.2; margin-top: 0;">Card #3 - Your Near Future With <span class="text-transform-capitalize"><?php echo $pronouns; ?></span></h2>

                  <!-- <h1 class="animated fadeIn center title-control main-title" style="margin-bottom:50px;margin-left:0;"><?php echo $name; ?>, Your 3rd Card Is <?php echo $title_three; ?></h1> -->

                  <div class="row image-card m-auto">

                     <div class="col-md-4 text-center">
                        <img class=" animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image_three; ?>.jpg">
                     </div>

                     <div class="col-md-8 animated fadeIn">

                        <!-- <h2 class="subtitle">Your third card is <?php echo $title_three; ?>.</h2> -->

                        <div>
                           <!-- <p>How <i>auspicious</i> <?php echo $name;?>...</p> -->

                           <p>Ok <span class="text-transform-capitalize"><?php echo $name; ?></span>… now let’s see what’s on your horizon with <span class="text-transform-capitalize"><?php echo $partners_name; ?></span> right now.</p> 

                           <p><?php echo $description_three; ?></p> 

                           <!-- <p>But your future with <?php echo $partners_name; ?> is not set in stone yet <?php echo $name; ?>...</p>
                           <p>At this point, it could go either way…</p>
                           <p class="mb-0">Which leads me to the bigger question here <?php echo $name; ?>...</p> -->
                        </div>

                     </div>

                  </div>

               </div>

               <p style="margin-top:0;">So what I’m really wondering now is …</p>

               <h2 class="text-center big-title" style="color:#000;">Are You Two Destined For Each Other?</h2>

               <div class="row align-items-center mx-auto">

                  <div class="col-md-6">
                     <img src="<?php echo base_url(); ?>public/resultimg/lovers.png">
                  </div>

                  <div class="col-md-6 responsive-col-padding p-0">

                     <p>There's still another card to reveal <?php echo $name; ?>...</p>

                     <p>And even though it didn’t come out of the same deck we’ve just been using … </p>

                     <p><strong>It's the most important card of all!</strong></p>

                     <p>If you flip this card over, and it matches one of your other cards in your reading…</p>

                     <p>Then it’s a nearly <strong>certain</strong> sign that you’re receiving…</p>

                  </div>

               </div>

               <h2 class="text-center big-title" style="color:#000;">An Urgent Message From The Universe!</h2>

               <div class="row align-items-center mx-auto">

                  <div class="col-md-6 responsive-col-padding p-0">

                     <p><?php echo $name; ?>, your 4th card is a special card that <?php echo $partners_name; ?> was <em>born</em> with.</p>

                     <p>You see, Tarot has a little known <strong>“Birth Card” </strong>system that uses a person's  birthday to reveal their destiny like Astrology and Numerology does...</p>

                     <p><strong>However, there's a big difference: </strong></p>

                     <p><strong>Tarot Birth Cards</strong> don't just <em>predict</em> destiny... they <em>interact</em> with Destiny by giving you <strong id="docs-internal-guid-9966fbb1-7fff-f6a7-4c42-15e812e00423">critical</strong> Karmic insights <em>about</em> your destiny in real time!</p>

                  </div>

                  <div class="col-md-6">
                     <img src="<?php echo base_url(); ?>public/resultimg/urgentmessage.png">
                  </div>

               </div>

               <p>And yet, most people will never know they even <em>HAVE</em> Birth Cards because it’s such a closely guarded  secret - <em>even to this day</em>. </p>

               <p>(More on how I stumbled on this little-known “Mystery School” Tarot secret in just a moment…) </p>

               <div class="mx-auto my-4">

                  <img src="<?php echo base_url(); ?>public/resultimg/mysteryschool.png" />

               </div>

               <p>It’s well known in high level Tarot circles that when someone’s Birth Card appears in a reading…</p>

               <p>…it usually brings a <strong>Karmic message from the Universe</strong> that might be SO important that it instantly changes the course of their  life!</em></p>

               <p>Which brings me back to <strong>your 4th card</strong>, what it secretly says about you and <?php echo $partners_name; ?>... </p>
              
               <p>...and what a <strong>miracle</strong> it would mean for <strong>YOU</strong> if it's a card that you just pulled today. &nbsp; </p>

               <p>This is the <strong>only </strong>card that can truly confirm whether or not you and <?php echo $partners_name; ?> are meant for each other. </p>

               <p><strong>It's <?php echo $pronounsAdjectives; ?> Romantic Destiny Card.</strong></p>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize; max-width: 600px;"><?php echo $pronounsAdjectives; ?> Romantic Destiny Card Is Your Secret Key To Unlocking <?php echo $pronounsAdjectives; ?> Love</strong></h3>

               <div class="row align-items-center my-5 mx-auto">

                  <div class="col-md-8 responsive-col-padding p-0">

                     <p>Now, if it turns out that you really did just draw <?php echo $pronounsAdjectives; ?> <strong>Romantic Destiny Card</strong> just now without realizing it… </p>

                     <p><strong>Think of it like hitting the jackpot at a casino:</strong></p>

                     <p>It’s such a rare, lucky and <em>valuable</em> event that you <strong>must stop <em>everything</em> and give it your FULL attention!</strong></p>

                  </div>

                  <div class="col-md-4 text-center">
                     <img src="<?php echo base_url(); ?>public/progress-cards-cardback/question-card-4.jpg" style="width:100%; max-width:240px;">
                  </div>

               </div>

               <p>When this card shows up for you in a reading about <?php echo $partners_name; ?>, it can mean anything between life changing news to a Karmic wake-up call - and it's always just as extreme!</p>

               <p><span class="text-transform-capitalize"><?php echo $pronounsAdjectives; ?></span> Romantic Destiny card can indicate things like...</p>

               <div class="container-purple">

                  <ul class="list-disc">
                     
                     <li><?php echo $partners_name_uc; ?> really IS your Soulmate...</li>

                     <li><span class="text-transform-capitalize"><?php echo $pronouns_hashave; ?></span> a big secret to confess...</li>

                     <li>A bad fight may be brewing...</li>

                     <li><span class="text-transform-capitalize"><?php echo $pronounsSubject; ?></span> might potentially be your Twin Flame...</li>

                     <li>You two could have been married in a past life...</li>

                     <li>You may have recently seen each other in a dream...</li>

                     <li><span class="text-transform-capitalize"><?php echo $pronounsSubject; ?></span> could be cheating  or might want to...</li>

                     <li><span class="text-transform-capitalize"><?php echo $pronounsSubject; ?></span> eventually wants to propose...</li>

                     <li>Your souls might have ancient karma together...</li>
                     
                     <li><span class="text-transform-capitalize"><?php echo $pronouns_suffixisare; ?></span> actually NOT who you think <?php echo $pronouns_isare; ?> ...</li>

                     <li>Someone might get pregnant!</li>

                     <li>And the list goes on… </li>

                  </ul>

               </div>

               <p>You can probably see why the Romantic Destiny Card is the <strong>first Birth Card a Tarot Master looks for</strong> in a love reading...</p>

               <p>...and why it's so critical that <u>YOU</u> find out if <em>his</em> Romantic Destiny Card just showed up in your Tarot Reading.</p>

               <p>So with your permission <span class="text-transform-capitalize;"><?php echo $name; ?></span>… </p>

               <p>I’d like to prepare a special Tarot Birth Card reading called the Cosmic Love Blueprint about <?php echo $partners_name_uc; ?> that reveals <?php echo $pronounsAdjectives; ?> Romantic Destiny Card so you’ll know if you have an Urgent Message today, and what it says about your future together.</p>

               <!-- <h2 class="main-title"><span class="dark-blue">Click The Green Button Below And Order Your Cosmic Love Blueprint Right Now</span></h2> -->
               <h2 class="main-title text-transform-capitalize" style="margin-bottom:15px;"><span class="dark-blue">Would You Like To Reveal <?php echo $pronounsAdjectives; ?> Romantic Destiny Card?</span></h2>

               <p class="text-center bold text-transform-capitalize"><span class="red">Click Below To Check <?php echo $pronounsAdjectives; ?> Cosmic Love Blueprint Now</strong></p>

               <!-- <div class="img-container text-center cosmic-package">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/product.images_720-1.png" />
               </div> -->

               <!-- <div class="container-download-now">

                  <div class="container-inner-download-now text-center my-4">
                     <div class="img-container">
                        <a onClick="orderone()" href="<?php echo $genderPayment; ?>" target="_blank">
                           <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/Yes-Order-Mine-Now-button_3-1.png" />
                        </a>
                     </div>
                  </div>

                  <div class="img-container text-center money-back-guarantee mb-5">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/money-back-guarantee.png" />
                  </div>

               </div> -->

               <div class="container-download-now">

                  <!-- <div class="">
                     <div class="img-container">
                        <a onClick="orderone()" href="<?php echo $genderPayment; ?>" target="_blank">
                           <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/Yes-Order-Mine-Now-button_3-1.png" />
                        </a>
                     </div>
                  </div> -->

                  <div class="container-inner-download-now text-center my-4">

                     <!-- <a href="javascript:void(0);" class="small-continue btn" id="stepone-continue" onClick="click_variant('original')" style="margin:10px auto;">CONTINUE READING >></a> -->

                     <a onClick="orderone()" href="<?php echo $genderPayment; ?>" class="continue salespage-button-continue text-transform-capitalize">
                        Reveal <?php echo $pronounsAdjectives; ?> Romantic Destiny Card
                     </a>

                  </div>

                  <!-- <div class="img-container text-center money-back-guarantee mb-5">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/money-back-guarantee.png" />
                  </div> -->

               </div>

               <h2 class="main-title" style="font-size:40px;"><span class="dark-blue">Who Am I And How Did I Learn These Closely Guarded Tarot Secrets?</span></h2>

               <p>My name is Angel Adams, and I’ve been reading Tarot and Astrology for the past 17 years.</p>

               <p>I’ve helped thousands of people figure out their love lives using the techniques I learned long ago...</p>

               <p>However - after meeting a retired psychologist turned Tarot Master, deep in the mountains of Colorado...</p>
               
               <p>I realized I had only scratched the surface!</p>

               <div class="row align-items-center mb-3 mx-auto">

                  <div class="col-md-6">
                     <img src="<?php echo base_url(); ?>public/resultimg/chiathome.jpg">
                  </div>

                  <div class="col-md-6 responsive-col-padding">

                     <p>This unassuming older gentleman, who’s friends called “Chi,” spent 23 years as a clinical therapist after getting TWO doctorate degrees in psychology.</p>

                     <p>He told me the story of how he stumbled upon the work of the great Carl Jung who invented the science of personality profiling...</p>

                     <p>... and how, to his surprise, Jung was an avid pupil of Tarot cards. </p>

                     <p>Chi started learning about Tarot and started to do readings in his sessions with clients.</p>

                  </div>

               </div>

               <div class="row align-items-center mb-3 mx-auto">

                  <div class="col-md-6 responsive-col-padding">
                     
                     <p style="margin-top:0;">Before long - as he once said to me with a chuckle and a smile… </p>

                     <p><em>“I realized the Tarot had more psychology in it than psychology did.. so I left.”</em></p>

                     <p>And he actually did!</p>

                     <p>Chi quit his Psychologist practice to enter something known as a <strong>“Mystery School”</strong> - A real life Hogwarts for Tarot, built by a <strong>secret society 300+ years ago. </strong></p>

                     <p>This Mystery School (that I cannot name) started teaching Chi ancient secrets of Tarot that he said came from the <strong>Emerald Tablet of Hermes in Egypt,</strong> eons before modern day. </p>

                  </div>

                  <div class="col-md-6">

                     <img src="<?php echo base_url(); ?>public/resultimg/jungbw.png">
  
                  </div>

               </div>

               <div class="row align-items-center mb-3 mx-auto">

                  <div class="col-md-6">
                     <img src="<?php echo base_url(); ?>public/resultimg/tablet-2.png">
                  </div>

                  <div class="col-md-6 responsive-col-padding">

                     <p><u>That was over 43 years ago</u>, and he’s studied with them ever since... performing 3 hours of ritual meditation with Tarot cards every single morning, rain or shine (before he tends to his garden.) </p>

                     <p><strong>I never knew about Birth Cards before Chi revealed their secret to me. </strong></p>

                     <p>And yet, I started using them in my readings right away.</p>

                     <p>Suddenly, my readings for people were<strong> far more accurate and powerful</strong> than ever before!</p>

                     <p>It became clear that <strong>this was the missing piece to my Tarot readings </strong>that revealed the <u>whole picture</u> - not just a <em>glimpse</em>. </p>

                  </div>

               </div>

               <p>I kept it to myself at first… then offered to use this secret Birth Card technique with some of my close friends who often asked me for love readings.</p>

               <p>Those I read for were blown away and stunned - even some coming back to me years later (like my old accountant, who met his wife) to confirm what I had said turned out to be true - even when they didn’t believe it would.</p>

               <p>Even my friends who’d get Tarot Readings every day were <em>stunned!</em></p>

               <p>In almost every case, when they found out that they drew their Romantic Destiny card in a reading and didn’t know it… </p>

               <p><strong>Their hidden message was the missing piece of the puzzle that tied everything together. </strong></p>

               <div class="row align-items-center mb-3 mx-auto">

                  <div class="col-md-6 responsive-col-padding p-0">

                     <p>One friend told me it was more powerful than <em>all</em> of her readings last month combined!</p>

                     <p>I was so inspired that I got struck with a<strong> massive intuition. </strong></p>

                     <p>I drove over to see Chi and he was sitting in his living room (wall to wall with Tarot Card art he painted during his morning meditations.)</p>

                     <p><u>I told him my idea</u>: To create a simple online reading that <strong>reveals a person’s 12 Tarot Birth Cards and focuses each one on their love life.</strong></p>

                     <p>He smiled again with his big happy grin, and said in his old mountain farmer accent...</p>

                  </div>

                  <div class="col-md-6">
                     <img src="<?php echo base_url(); ?>public/resultimg/puzzle.piece.png">
                  </div>

               </div>

               <blockquote><p><em>“You know… This stuff has been secret for way too long.    Just look at the world. The people are suffering. They need this right now.   You need to bring this to the people. You need to let them know it’s going to be OK.” </em></o></blockquote>

               <p>(His words still bring a tear to my eye, even as I’m typing this.)</p>

               <p>Chi gave me a mission that day.</p>

               <p><strong>A mission I took very seriously.</strong></p>

               <p>A mission to do exactly what he asked me to - bring these Mystery School secrets to the world.</p>
               
               <p>I didn’t know how to build software or anything like that.</p>

               <p>Honestly, I didn’t really know where to begin.</p>

               <p>I just sat with Chi for hours on end, absorbing everything I could as he worked his magic. </p>

               <div class="row align-items-center mb-3 mx-auto">

                  <div class="col-md-6">
                     <img src="<?php echo base_url(); ?>public/resultimg/magician.jpg">
                  </div>

                  <div class="col-md-6 responsive-col-padding p-0">

                     <p>Somehow I managed to manifest the perfect team, and <strong>after 3 years of trial and error,</strong> I finally did it. </p>

                     <p>I created the <strong>only Love Tarot Reading of its kind that reveals your Birth Cards</strong>, <em>maximizes</em> your future Tarot readings, and <strong>unlocks the full potential of your romantic future. </strong></p>

                     <p>However... I wasn’t ready to share this thing just yet.</p>

                     <p> <em>I needed to go all the way. </em></p>

                     <p>Since Chi was a licensed Psychologist for over 16 years...</p>

                     <p>I wanted to <strong>see what another psychologist had to say</strong> before I shared this new reading with anyone else! </p>

                  </div>

               </div>

               <p>So I called a friend and was randomly introduced to a psychologist named John H. who agreed to give me an unbiased review on how it affected his marriage. </p>

               <div class="row align-items-center mb-3 mx-auto">

                  <div class="col-md-6">
                     <img src="<?php echo base_url(); ?>public/resultimg/therapist.jpeg">
                  </div>

                  <div class="col-md-6 responsive-col-padding">

                     <p><u>But there was a catch</u>: </p>

                     <p>Dr. John <em>didn’t believe in Tarot cards at all!</em></p>

                     <p>He was a <strong>complete skeptic</strong> and was only doing this as a favor to our mutual friend.</p>

                     <p><strong>I bit my nails</strong> <strong>as I sent him his Birth Card love report</strong> and wished for the best.</p>

                  </div>

               </div>

               <!-- <div class="mx-auto my-4 text-center">

                  <img src="<?php echo base_url(); ?>public/resultimg/therapist.jpeg" style="max-width:600px; width:100%;">

               </div>

               <p><u>But there was a catch</u>: </p>

               <p>Dr. John <em>didn’t believe in Tarot cards at all!</em></p>

               <p>He was a <strong>complete skeptic</strong> and was only doing this as a favor to our mutual friend.</p>

               <p><strong>I bit my nails</strong> <strong>as I sent him his Birth Card love report</strong> and wished for the best.</p> -->

               <p>I even included a second one for his wife... hoping to score brownie points.</p>

               <p>Then, to my surprise 16 days later, Dr Jay sent me an email that said: </p>

               <div class="mx-auto my-4">

                  <img src="<?php echo base_url(); ?>public/resultimg/drjohn.png">

               </div>

               <p><em>I couldn’t believe my eyes!</em></p>

               <p>If this new Tarot Reading was so <strong>powerful and accurate that even a skeptical psychologist found it helpful</strong> - then my mission was <u>well</u> underway. </p>

               <p>It quickly became a hit with my friends and my small Tarot website audience.</p>

               <p>It wasn’t long before my email inbox started filling up with<strong> amazing stories</strong> such as…</p>

               <div class="mx-auto my-4">
                  <img src="<?php echo base_url(); ?>public/resultimg/testimonial-sherry-kao.png">
               </div>

               <div class="mx-auto my-4">
                  <img src="<?php echo base_url(); ?>public/resultimg/testimonial-stephanie-mckeen.png">
               </div>

               <p>Over time, it became clear how <strong>important and powerful this reading had become</strong> for people like you all over the world.</p>

               <p>It gives you a hands-on roadmap of your romantic future, safely guides you down your karmic path, and <strong>brings you to the doorstep of your romantic destiny.</strong></p>

               <p>I call it...</p>

               <h2 class="main-title"><span class="dark-blue">The Cosmic Love Blueprint</span></h2>

               <p class="text-center bold text-transform-capitalize" style="max-width: 600px; margin-left: auto; margin-right: auto;"><span class="purple">The Secret Tarot “Birth Card” Reading That Unlocks Your Romantic Destiny With <?php echo $partners_name; ?></strong></p>

               <div class="mx-auto my-4 text-center">
                  <img src="<?php echo base_url(); ?>public/resultimg/clb.product.images_720-1.png" style="max-width:600px; width:100%;">
               </div>

               <p>The Cosmic Love Blueprint is a stunningly accurate Tarot Reading that reveals the 12 Tarot Birth Cards that <?php echo $partners_name; ?> was born with in surprising detail. </p>

              <p>You’ll effortlessly decode what each Birth Card secretly means about you and <?php echo $partners_name; ?>, and whenever <?php echo $pronounsAdjectives; ?> Birth Cards appear in your Tarot Reading, you’ll know <u>exactly</u> what it means and <strong>stay one step ahead of what’s to come.</strong></p>

              <p>Page by page, you’ll <strong>gain powerful new insights</strong>, as you uncover <strong>private, detailed, and juicy secrets</strong> about <?php echo $partners_name; ?> that <?php echo $pronounsSubject; ?> might not even know about <?php echo $pronouns_self; ?>!</p>

              <p>And once you know <?php echo $pronounsAdjectives; ?> Birth Cards, you’ll easily be able to  connect and communicate with PNAME on a <strong>deeper and more intimate level than ever before. </strong></p>
              <p>With these<strong> Tarot Birth Card secrets</strong> in hand, there’s no limit to how closely you connect with <?php echo $partners_name; ?> in a fraction of the time it takes a typical relationship to make it past “Hello.”</p>

              <p><strong>You’ll discover things like... </strong></p>

               <div class="container-purple">

                  <ul class="list-disc">
                     
                     <li>Why <?php echo $pronounsSubject; ?> may not know about the most critical karmic lesson <?php echo $pronounsWill; ?> ever learn! You’ll connect with <?php echo $pronounsAdjectives; ?> higher self, motivate <?php echo $pronounsAdjectives; ?> life purpose, and inspire <?php echo $pronouns; ?>  in ways that no other <?php echo $pronounsGenderOne; ?> can! (Look at <?php echo $pronounsAdjectives; ?> Life Path Number and Personality Card section.)</li>

                     <li>Your romantic destiny together and how to clear obstacles that may stand in your path. Along with hidden gifts and karmic lessons <?php if($pronounsSubject == "they"){ echo $pronounsSubject . " face"; }else { echo $pronounsSubject . " faces"; } ?> in this lifetime, and how to help <?php echo $pronouns; ?> pass <?php echo $pronounsAdjectives; ?> soul’s tests! (Examine <?php echo $pronounsAdjectives; ?> Personality Card and Life Path Number sections.)</li>

                     <li>The real inner-workings of <?php echo $pronounsAdjectives; ?> mind! You’ll discover how <?php echo $pronounsAdjectives; ?> mind works, how <?php echo $pronounsSubject; ?> express love and flirt, and how to quickly capture <?php echo $pronounsAdjectives; ?> attention! Discover what mental triggers <?php echo $pronouns_hashave; ?>, how to get him talking, and much more that will change the way you communicate forever. (Look at <?php echo $pronounsAdjectives; ?> Communication Card section.)</li>

                     <li>What <?php if($pronounsSubject == "they"){ echo $pronounsSubject . " look"; }else { echo $pronounsSubject . " looks"; } ?> for in a relationship, and what makes <?php echo $pronouns; ?> feel appreciated! You’ll uncover what turns <?php echo $pronouns; ?> on and what <?php if($pronounsSubject == "they"){ echo $pronounsSubject . " value"; }else { echo $pronounsSubject . " values"; } ?> in a partner! (Check out <?php echo $pronounsAdjectives; ?> Relationship Card section.)</li>

                     <li>What <?php echo $pronounsAdjectives; ?> desires, motivations, and sexual appetites are. How to set them on fire with longing, and how to set the stage for an intimate night <?php echo $pronounsWill; ?> l never forget! (Look at <?php echo $pronounsAdjectives; ?> Sexuality Card section.)</li>

                     <li>Why fulfilling this one need of <?php echo $pronounsAdjectives; ?> will immediately open <?php echo $pronounsAdjectives; ?> eyes to who you are to <?php echo $pronouns; ?>. How <?php echo $pronounsSubject; ?> could suddenly see what <?php echo $pronounsSubject; ?> could have with you and why you are the most special <?php echo $pronounsGenderOne; ?>  in <?php echo $pronounsAdjectives; ?> life! You’ll no longer waste time trying to make <?php echo $pronouns; ?> happy in ways that <?php if($pronounsSubject == "they"){ echo $pronounsSubject . " don’t"; }else { echo $pronounsSubject . " she doesn’t"; } ?> care about! (Look at <?php echo $pronounsAdjectives; ?> Commitment Card section)</li>

                     <li>What makes <?php echo $pronouns; ?> happy and how to build a strong connection together. How <?php if($pronounsSubject == "they"){ echo $pronounsSubject . " find"; }else { echo $pronounsSubject . " finds"; } ?> luck in love, and how to make  <?php echo $pronouns; ?> feel joyful and free, so <?php echo $pronounsSubject; ?> can’t get enough of you. (Check out <?php echo $pronounsAdjectives; ?> Happiness Card section.)</li>

                     <li>Know how <?php if($pronounsSubject == "they"){ echo $pronounsSubject . " express " . $pronounsAdjectives; } else { echo $pronounsSubject . " expresses " . $pronounsAdjectives; } ?> love and relationship needs. How to help conversations flow easily between you and understand <?php echo $pronounsAdjectives; ?> communication style so you can speak their language! (Look at <?php echo $pronounsAdjectives; ?> Communication Card section.)</li>

                     <li>Amazing details about <?php echo $pronounsAdjectives; ?> deepest heart’s desire and what <?php echo $pronounsSubject; ?> want most in love! Discover what <?php if($pronounsSubject == "they"){ echo $pronounsSubject . " want"; } else { echo $pronounsSubject . " wants"; } ?> more than anything in the world and how to show <?php echo $pronouns; ?> that you can give it to <?php echo $pronouns; ?>! (Look at <?php echo $pronounsAdjectives; ?> Soul Urge Number section.)</li>

                     <li>Effortlessly guide <?php echo $pronouns; ?> to great opportunities <?php echo $pronounsSubject; ?> will forever thank you for! Decode the secret wealth messages <?php echo $pronounsPossessive; ?> missing now and <?php echo $pronounsWill; ?> see you as the most valuable <?php echo $pronounsGenderOne; ?> of <?php echo $pronounsAdjectives; ?> life! (Look at his Happiness Card section.)</li>

                  </ul>

               </div>

               <p>And those are just a few ways having <?php echo $pronounsAdjectives; ?> Birth Cards give you an unfair advantage with <?php echo $partners_name; ?> over anyone else! You see, <span class="text-transform-capitalize"><?php echo $name; ?></span>...</p>

               <p>The more of <?php echo $pronounsAdjectives; ?> Birth Cards you know, the more you’ll understand <?php echo $pronouns; ?> and the more hidden messages you’ll be able to receive.</p>
            
               <p>Then, it’s likely only a matter of time before  <?php if($pronounsSubject == "they"){ echo $pronounsSubject . " start"; } else { echo $pronounsSubject . " starts"; } ?> treating you like the <?php echo $pronouns_royalty; ?> you really are. </p>

               <p>Because once you read your Cosmic Love Blueprint, ALL of your future readings become...</p>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize; max-width: 600px;">A Higher Level Tarot Reading With Deeper And More Accurate Answers!</h3>

               <p>There’s a big difference in your  Tarot Readings when you don’t know someone's Birth Cards, and when you do.</p>

               <p>Think of it like the difference between using a dial up modem in the 90s, and the WiFi of today. </p> 

               <p>Back then, you had to make the connection yourself. It took a lot of effort to download a small amount of info.</p>

               <p>Nowadays... your connection is <strong>instant, direct and reliable</strong> 99% of the time. </p>

               <p>And when you use a stronger connection <strong>you can download more information in seconds than you can in weeks the outdated way!</strong></p>

               <p>However, while WiFi only connects you to the internet… </p>

               <p><strong>Your Cosmic Love Blueprint… </strong></p>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize; max-width: 700px;">Connects You To <?php echo $pronounsAdjectives; ?> Romantic Destiny And Downloads Everything You Need To Know!</h3>

               <p>When I met Chi years ago, I <strong>never would have imagined</strong> that I would   have introduced Birth Cards to <strong>over 542,136 people</strong> and changed <em>countless</em> people’s love lives.</p>

               <p>Some might even say that I completed my mission - but I'm really just getting started.</p>

               <p>There are <strong>so many more lives left to change</strong>... so many happy relationships still to create...</p>

               <p>And so many people who have yet to unlock the power of their Birth Cards to accelerate their lives.</p>

               <p>Which brings us to you, <span class="text-transform-capitalize"><?php echo $name; ?></span>, and the reason you’re here right now.</p>
               
               <p><u>You just drew these three cards a moment ago</u>: </p>

               <!-- START - PROGRESS CARDS -->

               <div class="row cards-progressbar">

                  <div class="col">

                     <img class="" src="<?php echo base_url(); ?>public/cards/<?php echo $image_one; ?>.jpg"/>

                  </div>

                  <div class="col">

                     <img class="" src="<?php echo base_url(); ?>public/cards/<?php echo $image_two; ?>.jpg"/>

                  </div>

                  <div class="col col-active active-green">

                     <img class="" src="<?php echo base_url(); ?>public/cards/<?php echo $image_three; ?>.jpg"/>

                  </div>

                  <div class="col">

                     <img class="" src="<?php echo base_url(); ?>public/progress-cards-cardback/question-card-4.jpg"/>

                  </div>

               </div>

               <!-- END - PROGRESS CARDS -->

               <p>Together, they <strong>reveal time sensitive insights</strong> into what <?php echo $partners_name; ?> is thinking about, how <?php echo $pronounsFeels; ?> about you, and what your near future with <?php echo $pronouns; ?>looks like right now...</p>
               
               <p>And yet, this is where most Tarot Readers <u>STOP</u> - simply because <strong>they don’t know about Birth Cards. </strong></p>

               <p>Now that <u>YOU</u> know the secret meaning of Tarot Birth Cards,  how to use them and what to look for...</p>

               <p>It's completely possible that you might find that...</p>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize;">You And <?php echo $partners_name; ?> Really ARE Meant To Be!</h3>

               <p><strong>Just think:</strong> Today's love tarot reading may go down in history as the most important love reading of your life if this turns out to be true.</p>

               <p>It would be like the  Universe just interrupted your day with<strong> breaking news</strong> that you and <?php echo $partners_name; ?> have a<strong> divine connection that could span across multiple lives.</strong></p>

               <p><strong>On the other hand</strong>... if you drew it just now, and you didn’t know what it was - it would be like <em>sleeping through winning the lottery!</em></p>

               <p>The only way to know for sure is to look inside <?php echo $pronounsAdjectives; ?> Cosmic Love Blueprint…</p>

               <h2 class="main-title"><span class="dark-blue">See For Yourself!</span></h2>

               <p>By now, you might be thinking… </p>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize; max-width: 520px;">“Ok! That Sounds Interesting Angel... So How Much Is This Gonna Cost?”</h3>

               <p>And that’s a very fair question, especially with how <strong>rare and valuable these secrets are.
               </strong></p>

               <p>The truth is that I’m putting myself at <em>risk</em> by sharing this with the world.</p>

               <p>While I was fortunate enough to meet a Mystery School <em>rebel</em> who  took me under his wing…</p>

               <p>His colleagues are NOT happy - at all.</p>

               <p>(<strong>Note</strong>: If you’re still reading this, it means they haven’t caught up to me yet, and the Cosmic Love Blueprint is still available online - at least, for now…)</p>

               <p><strong>Time really is of the essence: </strong> </p>

               <p>And while my marketing team yells at me that I should be charging at<strong> least $100 or more</strong> for each Cosmic Love Blueprint…</p>

               <p>I am much more interested in my mission - and getting the<strong> Tarot secrets of Birth Cards into as many hands as possible while I can! </strong></p>

               <p>That’s why <strong>you’re not going to pay $100.</strong></p>

               <p>You’re not gonna pay $90…not $70…not <em>$60…</em></p>

               <p>You’re not even gonna pay $40 for your Cosmic Love Blueprint.</p>

               <p><strong>Your special price is only $37!</strong></p>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize;">That’s <u>63% OFF</u> The Regular Price!</h3>

               <p>And that's a <strong> small fraction </strong>of what some have paid in private sessions just to learn these secrets (at my rate of <u>$300 per hour</u>).</p>

               <p>I’ve personally spent <strong>over $143,547.00</strong> to bring you this life changing information…</p>

               <p>And yet, it will<strong> only cost you $37. That's the same as half a tank of gas!</strong></p>
               
               <p>And while gas will only get you so far... reading <?php echo $pronounsAdjectives; ?> Cosmic Love Blueprint will help you go the distance with <?php echo $partners_name; ?>.</p>

               <h2 class="main-title" style="max-width: 800px;"><span class="dark-blue">Click The Button Below And Check Out His Cosmic Love Blueprint Right Now</span></h2>

               <!-- <div class="mx-auto my-4 text-center">

                  <img src="<?php echo base_url(); ?>public/resultimg/productimages.jpg" style="max-width:600px; width:100%;">

               </div> -->

               <p class="text-center bold text-transform-capitalize"><a onClick="ordertwo()"  href="<?php echo $genderPayment; ?>">“Yes Angel! I Want To Unlock Our Romantic Destinies!”</a></p>

               <div class="container-download-now">

                  <div class="container-inner-download-now text-center my-4">
                     <div class="img-container" style="margin-top:-20px;">
                        <a onClick="ordertwo()" href="<?php echo $genderPayment; ?>" target="_blank">
                           <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/Yes-Order-Mine-Now-button_3-1.png" />
                        </a>
                     </div>
                  </div>

                  <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize; margin-top:-20px;"><a onClick="ordertwo()"  href="<?php echo $genderPayment; ?>">Click Here To Order Now</a></h3>

                  <div class="img-container text-center money-back-guarantee my-2">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/YOUR-PAYMENT-IS-SECURED-BY-CLICKBANK3-1.png" />
                  </div>

                  <div class="img-container text-center money-back-guarantee mb-4">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/old-365dayguarantee-1.png" />
                  </div>

               </div>

               <p>If you’re still unsure, or simply just don’t care about your Birth Cards...</p>

               <p>Maybe this will help inspire you to at least test drive your Cosmic Love Blueprint before you decide!</p>

               <p>I want <strong>nothing to stand between you and the relationship of your dreams </strong>- <em>especially</em> not your wallet. </p>

               <p>So I’ve gone ahead and done something that only someone extremely stubborn, unspiritual, and completely unwilling to change would say no to.                 </p>
              
               <p class="bold">I’ve stacked the deck in your favor all the way by taking  <strong>ALL of your financial risk off the table</strong>, with your...</p>

               <div class="container-money-back my-5">

                  <div class="w-100" style="background: #913169;">
                     <h3 class="medium-title mx-auto white">“Find True Love Or It’s Free”</h3>
                  </div>

                  <div class="container-inner-money-back">

                     <p class="bold text-center">365 Day 100% Money Back Guarantee</p>

                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/guarantee365.png" />

                     <h3 class="medium-title red-blue my-4 responsive-br">A Full Refund For One Full Year - <br/>No Questions Asked</h3>

                     <p>I said a lot of incredible things to you today about the Cosmic Love Blueprint that may sound over the top, or almost unbelievable.</p>

                     <p><strong>So I’m putting my money where my mouth is to prove it.</strong></p>

                     <p>Order now and put your Cosmic Love Blueprint to the test, and enjoy the fruitful results it brings, and take  up to <strong>365 days to decide </strong>whether or not it was worth it.</p>

                     <p>If at any point <strong>over the next year</strong>, you so much as have half of a <em>sliver</em> of a doubt that your Cosmos Love Blueprint isn’t worth <strong>10x more</strong> than what you pay today… then I insist that you rush over to our customer support center and <em>demand</em> a refund. You’ll get back every single penny - no questions asked.</p>

                     <p>Plus - to  say thank you for taking your drive today, you’ll also receive… </p>

                  </div>

               </div>

               <h2 class="main-title"><span class="dark-blue">$200 In Love Boosting Bonus Gifts Absolutely Free!</span></h2>

               <p>I want you to know that I’m here to help you over the long haul.</p>

				   <p>That’s why, when you order today, I’m giving you a unique collection of powerful bonus gifts so you can see how serious I am about helping you.</p>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize;">Free Gift #1: The Mystery School Study</h3>

			      <p>The Mystery School where these lost Tarot secrets come from combines three ancient practices to calculate Tarot Birth Cards like his  Romantic Destiny card.</p>
             
               <p>They are Tarot, Astrology, and Numerology!</p>

               <p>And they ALL play a <strong>vital role</strong> in just  how accurate and life changing the Cosmic Love Blueprint has become.</p>

               <p>That’s why your first special gift is a digital library called <strong>The Mystery School Study</strong> with a crash course on each one!</p>

               <div class="row align-items-center mb-3 mx-auto">

                  <div class="col-md-5 text-center">
                     <img src="<?php echo base_url(); ?>public/resultimg/mschool.jpg" style="max-width:260px;">
                  </div>

                  <div class="col-md-7 responsive-col-padding p-0">

                     <p>These simple courses will help you broaden your scope of your Cosmic Love Blueprint readings and give you a spiritual advantage in all areas of life!</p>

                     <p>Entrance to <strong>The Mystery School Study runs for $50</strong>, but you'll be enrolled for FREE when you order your Cosmic Love Blueprint today.</p>

                  </div>

               </div>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize;">Free Gift #2: Love Reading Mastery</h3>

               <!-- <div class="mx-auto my-4 text-center">
                  <img src="<?php echo base_url(); ?>public/resultimg/lovereadingmastery.png" style="max-width:600px; width:100%;">
               </div> -->

               <div class="row align-items-center mb-3 mx-auto">

                  <div class="col-md-5 text-center">
                     <img src="<?php echo base_url(); ?>public/resultimg/lovereadingmastery.png" style="max-width:260px;">
                  </div>

                  <div class="col-md-7 responsive-col-padding p-0">

                     <p>You’ll easily<strong> prepare a professional  Cosmic Love Blueprint reading</strong> for <?php echo $partners_name; ?> - just like a Tarot Master would…</p>

                     <p>However, how much you tell <?php echo $pronouns; ?> about it - if anything at all - is <em>completely up to you!</em></p>

                     <p>Unless he’s open to talk about it, you might want to use this<strong> step by step system</strong> to reveal as many  secrets about <?php echo $partners_name; ?> as possible with each new Tarot Reading.</p>

                     <p><strong>PLUS</strong> - you can use<strong> Tarot Reading Mastery </strong>to help others in your life with their love problems, like your friends, your family, your co-workers, your colleagues, or anyone else you want!</p>

                  </div>

               </div>

               <p>Some even use Tarot Reading Mastery to <strong>start their own side gig </strong>as a professional Tarot Reader because of how much instantly valuable information there is inside.</p>
               <p><strong>Love Reading Mastery</strong> is worth at least $100 but I only sell it to most people for $60 </p>

               <p>Not for you though, <span clas="text-transform-capitalize"><?php echo $name; ?></span>!</p>

               <p>Today, <strong>you’re getting it FREE </strong>as my second gift to you when you order your Cosmic Love Blueprint today.</p>

               <p>And, as if that wasn’t enough…</p>

               <p>I still have another special present - and this present is the most powerful gift I could ever give you.</p>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize; max-width: 600px;">Free Gift #3: A Second Cosmic Love Blueprint Just For YOU!</h3>

               <div class="row align-items-center mb-3 mx-auto">

                  <div class="col-md-5 text-center">
                     <img src="<?php echo base_url(); ?>public/resultimg/clbimg-1.png" style="max-width:260px;">
                  </div>

                  <div class="col-md-7 responsive-col-padding p-0">

                     <p>This is a special gift that you earned <span clas="text-transform-capitalize"><?php echo $name; ?></span>... and it’s one that I give out often.</p>

                     <p>It takes a <em>lot</em> of courage to ask the Tarot a question about someone that’s on your mind… </p>

                     <p>And it takes even MORE by putting your faith and trust into the Universe...</p>

                     <p>Especially when you already know that it <strong>might not tell you everything you want to hear!</strong></p>

                     <p>Not everyone is special enough to do that <span clas="text-transform-capitalize"><?php echo $name; ?></span>...</p>

                  </div>

               </div>

               <p>And since you took that risk just to learn about <?php echo $partners_name; ?> today...</p>

               <p>I want to make sure it pays off no matter what happens with <?php echo $pronouns; ?>!</p>

               <p>So I’m giving you a <strong>SECOND Cosmic Love Blueprint</strong> for you for free!</p>

               <p>Because knowing <?php echo $pronounsAdjectives; ?> Romantic Destiny Card is one thing…</p>

               <p>But knowing your <u>OWN</u> Romantic Destiny Card…</p>

               <h2 class="main-title" style="max-width:700px;"><span class="dark-blue"><span class="text-transform-capitalize">Gives <u>YOU</u> Control Over Your Own Romantic Future! </span></h2>

               <p>I want you to know without question that you can create the relationship of your dreams.</p>

               <p>And that’s what makes the Cosmic Love Blueprint different from<strong> any other Tarot Reading</strong> you find online.</p>

               <p>Once you have the secret knowledge of Tarot Birth Cards - you have it forever...</p>

               <p><strong>It deepens EVERY Tarot reading you’ll ever get</strong> with higher levels of insight linked directly to your destiny.</p>

               <p>Think of it like guideposts along your karmic path that are there to show you the way!</p>

               <p>So naturally, <strong>I wanted you to have one for yourself too</strong> - not just one for <?php echo $partners_name; ?>...</p>

               <p>And after your display of courage today, I’m going to give you your very own Cosmic Love Blueprint for free when you order today.</p>

               <p><strong>That’s THREE special bonus gifts, worth $200 In value...</strong></p>

               <p>Yours absolutely FREE just for trying out your Cosmic Love Blueprint with zero risk.</p>
               <p><strong>And, you know what?</strong></p>

               <p>You can go ahead and keep them all even if you refund your order no matter what - even if you do it 11 months from now.</p>

               <p>That’s how certain I am that you’ll look back on today a year from now  - the day you got your Cosmic Love Blueprint - you’ll see it as one of the most important days of your life.</p>

				   <p>However... that will never happen unless you take one more risk free step.</p>

               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize; max-width: 670px;">The Universe Is Waiting To Connect With You Now - Will You Accept?</h3>

               <p><strong>Do not delay <span clas="text-transform-capitalize"><?php echo $name; ?></span>. 
              </strong></p>

               <p>This reading is only relevant for a short time, and if the Universe sent you a Romantic Destiny Card for <?php echo $partners_name; ?> - <strong>then it changes everything.</strong></p>

               <p>If you pass this up , and it turns out your Romantic Destiny card was actually there... then it will still change everything - <em>you just won’t know it until it’s way too late.</em></p>

               <p>You owe it to yourself to have the full picture <span clas="text-transform-capitalize"><?php echo $name; ?></span>... and that picture is found inside your Cosmic Love Blueprint.</p>

               <h2 class="main-title" style="margin-bottom:20px;"><span class="dark-blue"> Click The Button Below And Order Your Cosmic Love Blueprints Now</span></h2>

               <div class="mx-auto my-4 text-center">

                  <img src="<?php echo base_url(); ?>public/resultimg/product.images_720-1.png" style="max-width:600px; width:100%;">

               </div>

               <div class="container-download-now">

                  <div class="container-inner-download-now text-center my-4">
                     <div class="img-container" style="margin-top:-25px;">
                        <a onClick="orderthree()" href="<?php echo $genderPayment; ?>" target="_blank">
                           <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/Yes-Order-Mine-Now-button_3-1.png" />
                        </a>
                     </div>
                  </div>

                  <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize; margin-top:-20px;"><a onClick="orderthree()"  href="<?php echo $genderPayment; ?>">Click Here To Order Now</a></h3>

                  <div class="img-container text-center money-back-guarantee my-2">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/YOUR-PAYMENT-IS-SECURED-BY-CLICKBANK3-1.png" />
                  </div>

                  <div class="img-container text-center money-back-guarantee mb-4">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/old-365dayguarantee-1.png" />
                  </div>

               </div>

               <p>I hope you make the right choice for yourself and align with your Romantic Destiny.</p>
 
               <p>Wishing you true love and happiness,<p>

               <div class="img-container signature-angel-adams my-4">
                  <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/signature-angel-adams.png" />
               </div>

               <p>Angel Adams</p>

               &nbsp;
               
               <p><strong>P.S. Remember:</strong> Your Birth Cards can make or break an entire Love Tarot Reading. </p>

               <p>When you get your Cosmic Love Blueprint today, you're saving over 60%  and you have a one full year guarantee.</p>

               <p>You’re getting $200 in free bonuses plus a <strong>second Cosmic Love Blueprint for free... </strong></p>

               <p>And all together, it costs less than half a tank of gas. </p>

               <p>I hope you can see that I’ve stacked the deck in your favor<strong> so well that you cannot lose. </strong></p>

               <p>All you have to do now is submit your order and let your Tarot Birth Cards work their magic for you.</p>

               <p><strong>P.P.S.</strong> I don’t mean to be a stickler here, but the reality  is that… </p>
               
               <h3 class="medium-title text-center text-transform-capitalize" style="margin-left: auto; margin-right: auto; color: #000; text-transform: capitalize; max-width: 550px;">If You Don’t Know <?php echo $pronounsAdjectives; ?> Birth Cards Then You're Only Getting Half The Story</h3>
                  
               <p>You deserve the full story name. Don’t sell yourself short. </p>

               <p>Order your Cosmic Love Blueprint now and find out everything you really want to know about PNAME.</p>
               
               <p>I'll see you in the members area!</p>

               <div class="container-download-now">

                  <div class="container-inner-download-now text-center my-4">
                     <div class="img-container" style="margin-top:-20px;">
                        <a onClick="orderfour()" href="<?php echo $genderPayment; ?>" target="_blank">
                           <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/Yes-Order-Mine-Now-button_3-1.png" />
                        </a>
                     </div>
                  </div>

                  <div class="img-container text-center money-back-guarantee my-2">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/YOUR-PAYMENT-IS-SECURED-BY-CLICKBANK3-1.png" />
                  </div>

                  <div class="img-container text-center money-back-guarantee mb-4">
                     <img class="w-100" src="<?php echo base_url(); ?>public/resultimg/old-365dayguarantee-1.png" />
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
<script>

$(document).ready(function() {

  shakeBox();

  var refreshId = setInterval(function() {

   shakeBox()

   ev.preventDefault();

  }, 3500);

  function shakeBox() {

   $('.col-active img').addClass('shaker'); 

   setTimeout(function(){

      $('.col-active img').removeClass('shaker'); 

   },300);

  }

});
</script>

<script>

   $('#closemodal').click(function() {
      $('#ouibounce-modal').attr("style", "display: none !important");
   });

</script>
<script src="<?php echo base_url(); ?>public/js/custom.js"></script>
