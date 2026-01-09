<?php
class one extends CI_Controller {




    function index()
    {

        // your code


        if(!isset($_POST['one']) || !isset($_POST['two']) || !isset($_POST['three']) || !isset($_POST['inputFirstName']))
        {

              echo "Invalid Token!";

        }
        else
        {

                $this->load->model("checkresult");

                // if($_POST['gender']=='male' || $_POST['gender']=='other')
                // {
                //     $s_one="select_one";
                //     $s_two="select_two";
                //     $s_three="select_three";
                // } 
                // else
                // {
                //     $s_one="select_one_old";
                //     $s_two="select_two_old";
                //     $s_three="select_three_old";
                // } 

				$name=$this->input->post('inputFirstName');
                $gender=$this->input->post('gender');

				$partners_name_holder = $this->input->post('inputPartnersName');

				$pageIdentifier = $this->input->post('pageIdentifier');

				if(empty($partners_name_holder)){

					$partners_name_one = "this person";
					$partners_name = ucfirst($partners_name_one);

				} else {

					$partners_name_one = $this->input->post('inputPartnersName');
					$partners_name = ucfirst($partners_name_one);

				}

				if($gender == 'woman' || $gender == 'female')
				{       

					$s_one="card_one_female";
					$s_two="card_two_female";
					$s_three="card_three_female";

					$pronouns='He';
                    $contentOne="<p>No matter what he thinks about you right now, what matters most is how he <i>feels about you</i>.</p>
 
                    <p>The best way to learn <strong>how he really feels about you</strong> is to look at your second card.</p>  
                         
                    <p>Would you like to know how he <u>really feels</u> about you <span style='text-transform:capitalize'>". $name ."</span>?</p>";

					$contentTwo="<p>We won’t really know what it is until we look at your third card, and <strong>find out what he’ll do next.</strong></p>  
                  
					<p>Would you like to see where things are going with ". $partners_name . "?</p>";

				}
				else if ($gender == 'male')
				{

					$s_one="card_one_male";
					$s_two="card_two_male";
					$s_three="card_three_male";

					$pronouns='She';
                    $contentOne="<p>No matter what she thinks about you right now, what matters most is how she <i>feels about you</i>.</p>
 
                    <p>The best way to learn <strong>how she really feels about you</strong> is to look at your second card.</p>  
                         
                    <p>Would you like to know how she <u>really feels</u> about you <span style='text-transform:capitalize'>". $name ."</span>?</p>";

					$contentTwo="<p>We won’t really know what it is until we look at your third card, and <strong>find out what she’ll do next.</strong></p>  
                  
					<p>Would you like to see where things are going with ". $partners_name . "?</p>";

				}
				else
				{

					$s_one="card_one_lgbt";
					$s_two="card_two_lgbt";
					$s_three="card_three_lgbt";

					$pronouns='They';
                    $contentOne="<p>No matter what they think about you right now, what matters most is how they <i>feels about you</i>.</p>
 
                    <p>The best way to learn <strong>how they really feel about you</strong> is to look at your second card.</p>  
                         
                    <p>Would you like to know how they <u>really feels</u> about you <span style='text-transform:capitalize'>". $name ."</span>?</p>";

					$contentTwo="<p>We won’t really know what it is until we look at your third card, and <strong>find out what they’ll do next.</strong></p>  
                  
					<p>Would you like to see where things are going with ". $partners_name . "?</p>";

				}

				if ($this->input->post('gender') == "female") {

					$gender_based_content_data = "<p style='text-align:justify'>At this point, it could go either way…</p>

					<p style='text-align:justify'>Which leads me to the bigger question here <span style='text-transform: capitalize;'>" .  $name  . "</span>...</p>

					<h1 class='m-red-title top-thirty bottom-thirty' style='text-align:center;max-width: 700px;margin-left: auto;margin-right: auto;'>What Does Your Future With <u>" .  $partners_name  . "</u> Look Like?</h1>

					<p style='text-align:justify'><span style='text-transform:capitalize'>" .  $name  . "</span>...</p> 

					<p style='text-align:justify'>I see two possible futures for you and " .  $partners_name  . " - and they look very different.</p>

					<p style='text-align:justify'>Your first future looks a lot like the present…</p>

					<p style='text-align:justify'>Where you never <i>really</i> know what he’s thinking because you keep getting mixed signals…</p>

					<p style='text-align:justify'>Where you’re not sure how he feels about you and you’re always left guessing (and feeling unwanted)…</p>

					<p style='text-align:justify'>Where you’re trapped on an emotional rollercoaster… hopeful one moment and anxious the next… praying that if you keep hanging in there things will work out…</p>

					<p style='text-align:justify'>Where the same uncertainty you’ve been silently struggling with (for far too long) keeps you up at night… leaving you feeling restless and unbearably lonely.</p>

					<p style='text-align:justify'>Where you constantly analyze everything " .  $partners_name  . " does, looking for the truth behind his words, because he’s unable to express what’s really in his heart.</p>

					<p style='text-align:justify'>This is your inevitable future with " .  $partners_name  . " if you do nothing with the insights you’ve learned today, and you just keep going down the same lonely path you’re on now. </p>

					<p style='text-align:justify'><strong class='list-highlight-yellow'>And that’s not the future you deserve.</strong></p>

					<p style='text-align:justify'>You deserve a future filled with love, passion, security and happiness. </p>

					<p style='text-align:justify'>Where you understand " .  $partners_name  . " <i>so</i> deeply that you never have to ask what he’s thinking because you already know.</p>

					<p style='text-align:justify'>Where " .  $partners_name  . " showers you with love, appreciation, and devotion, and leaves no doubt in your mind that you’re most special woman in his life. </p>

					<p style='text-align:justify'>A future where there are no ugly surprises that break your heart again. </p>

					<p style='text-align:justify'>Where you wake up each morning on cloud nine, knowing exactly where you stand with " .  $partners_name  . " (or anyone else lucky enough to be with you), feeling totally relaxed and beaming with confidence. </p>

					<p style='text-align:justify'>Which is why I invite you to manifest the second future I see for you…</p>

					<p style='text-align:justify'>A life filled with connection and intimacy. </p>

					<p style='text-align:justify'>A relationship brimming with loving memories in the making…</p>

					<p style='text-align:justify'>The romance you’ve been yearning for, but doubted could ever happen.</p>

					<p style='text-align:justify'>This is a future that leads to emotional fulfillment unlike any relationship you’ve ever had (or tried to have.)</p>

					<p style='text-align:justify'>Where you never question for a second that " .  $partners_name  . " wants you and only you.</p>

					<p style='text-align:justify'>Where you can finally live your “happily ever after”... wake up years from now, look deep into " .  $partners_name  . "’s eyes, and think to yourself … “We made it.”</p>

					<p style='text-align:justify'>It doesn’t matter how many times you’ve tried and failed… </p>

					<p style='text-align:justify'>Or, how many times you’ve felt hopeless and lost…</p>

					<p style='text-align:justify'>And it doesn’t matter how impossible true love with " .  $partners_name  . " might seem today. </p>

					<p style='text-align:justify'>Once you start down this path, the way you experience love, dating and relationships will change forever. </p>

					<p style='text-align:justify'>But you can’t go down this path alone: </p>

					<p style='text-align:justify'><strong class='list-highlight-yellow'>You need a guide.</strong></p>

					<p style='text-align:justify'>My name is Angel Adams and in my past 20 years of reading Astrology and Tarot for others, I’ve helped thousands of people find true love by using a little-known secret hidden within these ancient arts. </p>

					<p style='text-align:justify'>Many of these people had reached the same turning point that you’re at today. </p>

					<p style='text-align:justify'>They followed my direction and found themselves in the happiest, healthiest and most satisfying relationships of their lives. </p>

					<p style='text-align:justify'>And this is exactly what I’m going to do for you too.</p>

					<p style='text-align:justify'>Because now we are about to go beyond reading the Tarot cards you drew about " .  $partners_name  . "... </p>

					<p style='text-align:justify'>And read the Karmic Cards he was born with that reveals his deepest inner nature, needs, and desires. </p>

					<p style='text-align:justify'>What I’m about to show you is the secret roadmap to " .  $partners_name  . "’s heart…</p>

					<p style='text-align:justify'>It explains everything about his behavior, what he really needs from a woman, how to make him crazy over you and what it takes for him to commit to you forever. </p>

					<p style='text-align:justify'>This is the ultimate guide to understand what’s happening in his head, his heart, and his soul so you can make the right decisions and live your “happily ever after” - together. </p>

					<p style='text-align:justify'>It’s called <strong class='list-highlight-yellow'>The Cosmic Love Blueprint. </strong></p>

					<p style='text-align:justify'>There is nothing else like it <i>anywhere</i> in the world.</p>

					<p style='text-align:justify'>It’s like running a spiritual background check on " .  $partners_name  . " that tells you everything you’ve ever wanted to know about him.</p>
					
					<p style='text-align:justify'>Once you have his Blueprint, you’ll unlock the secret code to " .  $partners_name  . "’s devotion that will make him yours forever.</p>
					
					<p style='text-align:justify'>You’ll know exactly why " .  $partners_name  . " pulls away, and how to make him obsess over you instead. </p>
					
					<p style='text-align:justify'>You’ll breathe a deep sigh of relief as you finally understand why you’ve had difficulties with " .  $partners_name  . " (reasons that have nothing to do with you)...</p>
					
					<p style='text-align:justify'>And how to connect with him so perfectly it’s as if you were two pieces of the same puzzle. </p>
					
					<p style='text-align:justify'>You'll see the core of his personality - so closely - you’ll be able to predict what he’ll say or do before it even crosses his mind.</p>
					
					<p style='text-align:justify'>You’ll smile to yourself as you discover the real reasons for his behavior and realize exactly what he needs to open his heart and love you completely.</p>
					
					<p style='text-align:justify'>Are you ready to create a loving future with " .  $partners_name  . "? </p>";

					$gender_based_content_data_button = "Yes! I want " .  $partners_name  . " to give me his heart";

					$gender_based_content_data_link = "Not yet! But I do want to know more about him";

					$gender_based_content_data_additional = "<p style='text-align:justify'><strong><u>Remember</u></strong>: The first future will happen if you do nothing with the insights you learn today. </p>
					
					<p style='text-align:justify'>The second future is in your grasp if you dare to discover what makes " .  $partners_name  . " fall in love and stay committed forever.</p>

					<p style='text-align:justify'>Choose wisely <span style='text-transform:capitalize'>" .  $name  . "</span>.</p>";

					// Woman
	   
				} else if ($this->input->post('gender') == "male") {
	
					$gender_based_content_data = "<p style='text-align:justify'>At this point, it could go either way…</p>

					<p style='text-align:justify'>Which leads me to the bigger question here <span style='text-transform: capitalize;'>" .  $name  . "</span>...</p>

					<h1 class='m-red-title top-thirty bottom-thirty' style='text-align:center;max-width: 700px;margin-left: auto;margin-right: auto;'>What Does Your Future With <u>" .  $partners_name  . "</u> Look Like?</h1>

					<p style='text-align:justify'><span style='text-transform:capitalize'>" .  $name  . "</span>...</p> 

					<p style='text-align:justify'>I see two possible futures for you and " .  $partners_name  . " - and they look very different.</p>

					<p style='text-align:justify'>Your first future looks a lot like the present…</p>

					<p style='text-align:justify'>Where you never <i>really</i> know what she’s thinking because you keep getting mixed signals…</p>

					<p style='text-align:justify'>Where you’re not sure how she feels about you and you’re always left guessing (and feeling unwanted)…</p>

					<p style='text-align:justify'>Where you’re trapped on an emotional rollercoaster… hopeful one moment and anxious the next… praying that if you keep hanging in there things will work out…</p>

					<p style='text-align:justify'>Where the same uncertainty you’ve been silently struggling with (for far too long) keeps you up at night… leaving you feeling restless and unbearably lonely.</p>

					<p style='text-align:justify'>Where you constantly analyze everything " .  $partners_name  . " does, looking for the truth behind her words, because she’s unable to express what’s really in her heart.</p>

					<p style='text-align:justify'>This is your inevitable future with " .  $partners_name  . " if you do nothing with the insights you’ve learned today, and you just keep going down the same lonely path you’re on now. </p>

					<p style='text-align:justify'><strong class='list-highlight-yellow'>And that’s not the future you deserve.</strong></p>

					<p style='text-align:justify'>You deserve a future filled with love, passion, security and happiness. </p>

					<p style='text-align:justify'>Where you understand " .  $partners_name  . " <i>so</i> deeply that you never have to ask what she’s thinking because you already know.</p>

					<p style='text-align:justify'>Where " .  $partners_name  . " showers you with love, appreciation, and devotion, and leaves no doubt in your mind that you’re most special man in her life. </p>

					<p style='text-align:justify'>A future where there are no ugly surprises that break your heart again. </p>

					<p style='text-align:justify'>Where you wake up each morning on cloud nine, knowing exactly where you stand with " .  $partners_name  . " (or anyone else lucky enough to be with you), feeling totally relaxed and beaming with confidence. </p>

					<p style='text-align:justify'>Which is why I invite you to manifest the second future I see for you…</p>

					<p style='text-align:justify'>A life filled with connection and intimacy. </p>

					<p style='text-align:justify'>A relationship brimming with loving memories in the making…</p>

					<p style='text-align:justify'>The romance you’ve been yearning for, but doubted could ever happen.</p>

					<p style='text-align:justify'>This is a future that leads to emotional fulfillment unlike any relationship you’ve ever had (or tried to have.)</p>

					<p style='text-align:justify'>Where you never question for a second that " .  $partners_name  . " wants you and only you.</p>

					<p style='text-align:justify'>Where you can finally live your “happily ever after”... wake up years from now, look deep into " .  $partners_name  . "’s eyes, and think to yourself … “We made it.”</p>

					<p style='text-align:justify'>It doesn’t matter how many times you’ve tried and failed… </p>

					<p style='text-align:justify'>Or, how many times you’ve felt hopeless and lost…</p>

					<p style='text-align:justify'>And it doesn’t matter how impossible true love with " .  $partners_name  . " might seem today. </p>

					<p style='text-align:justify'>Once you start down this path, the way you experience love, dating and relationships will change forever. </p>

					<p style='text-align:justify'>But you can’t go down this path alone: </p>

					<p style='text-align:justify'><strong class='list-highlight-yellow'>You need a guide.</strong></p>

					<p style='text-align:justify'>My name is Angel Adams and in my past 20 years of reading Astrology and Tarot for others, I’ve helped thousands of people find true love by using a little-known secret hidden within these ancient arts. </p>

					<p style='text-align:justify'>Many of these people had reached the same turning point that you’re at today. </p>

					<p style='text-align:justify'>They followed my direction and found themselves in the happiest, healthiest and most satisfying relationships of their lives. </p>

					<p style='text-align:justify'>And this is exactly what I’m going to do for you too.</p>

					<p style='text-align:justify'>Because now we are about to go beyond reading the Tarot cards you drew about " .  $partners_name  . "... </p>

					<p style='text-align:justify'>And read the Karmic Cards she was born with that reveals her deepest inner nature, needs, and desires. </p>

					<p style='text-align:justify'>What I’m about to show you is the secret roadmap to " .  $partners_name  . "’s heart…</p>

					<p style='text-align:justify'>It explains everything about her behavior, what she really needs from a man, how to make her crazy over you and what it takes for her to commit to you forever. </p>

					<p style='text-align:justify'>This is the ultimate guide to understand what’s happening in her head, her heart, and her soul so you can make the right decisions and live your “happily ever after” - together. </p>

					<p style='text-align:justify'>It’s called <strong class='list-highlight-yellow'>The Cosmic Love Blueprint. </strong></p>

					<p style='text-align:justify'>There is nothing else like it <i>anywhere</i> in the world.</p>

					<p style='text-align:justify'>It’s like running a spiritual background check on " .  $partners_name  . " that tells you everything you’ve ever wanted to know about her.</p>
					
					<p style='text-align:justify'>Once you have her Blueprint, you’ll unlock the secret code to " .  $partners_name  . "’s devotion that will make her yours forever.</p>
					
					<p style='text-align:justify'>You’ll know exactly why " .  $partners_name  . " pulls away, and how to make her obsess over you instead. </p>
					
					<p style='text-align:justify'>You’ll breathe a deep sigh of relief as you finally understand why you’ve had difficulties with " .  $partners_name  . " (reasons that have nothing to do with you)...</p>
					
					<p style='text-align:justify'>And how to connect with her so perfectly it’s as if you were two pieces of the same puzzle. </p>
					
					<p style='text-align:justify'>You'll see the core of her personality - so closely - you’ll be able to predict what she’ll say or do before it even crosses her mind.</p>
					
					<p style='text-align:justify'>You’ll smile to yourself as you discover the real reasons for her behavior and realize exactly what she needs to open her heart and love you completely.</p>
					
					<p style='text-align:justify'>Are you ready to create a loving future with " .  $partners_name  . "? </p>";

					$gender_based_content_data_button = "Yes! I want " .  $partners_name  . " to give me her heart";

					$gender_based_content_data_link = "Not yet! But I do want to know more about her";

					$gender_based_content_data_additional = "<p style='text-align:justify'><strong><u>Remember</u></strong>: The first future will happen if you do nothing with the insights you learn today. </p>
					
					<p style='text-align:justify'>The second future is in your grasp if you dare to discover what makes " .  $partners_name  . " fall in love and stay committed forever.</p>

					<p style='text-align:justify'>Choose wisely <span style='text-transform:capitalize'>" .  $name  . "</span>.</p>";

					// Male
		
				} else {
	
					$gender_based_content_data = "<p style='text-align:justify'>At this point, it could go either way…</p>

					<p style='text-align:justify'>Which leads me to the bigger question here <span style='text-transform: capitalize;'>" .  $name  . "</span>...</p>

					<h1 class='m-red-title top-thirty bottom-thirty' style='text-align:center;max-width: 700px;margin-left: auto;margin-right: auto;'>What Does Your Future With <u>" .  $partners_name  . "</u> Look Like?</h1>

					<p style='text-align:justify'><span style='text-transform:capitalize'>" .  $name  . "</span>...</p> 

					<p style='text-align:justify'>I see two possible futures for you and " .  $partners_name  . " - and they look very different.</p>

					<p style='text-align:justify'>Your first future looks a lot like the present…</p>

					<p style='text-align:justify'>Where you never <i>really</i> know what they’re thinking because you keep getting mixed signals…</p>

					<p style='text-align:justify'>Where you’re not sure how they feel about you and you’re always left guessing (and feeling unwanted)…</p>

					<p style='text-align:justify'>Where you’re trapped on an emotional rollercoaster… hopeful one moment and anxious the next… praying that if you keep hanging in there things will work out…</p>

					<p style='text-align:justify'>Where the same uncertainty you’ve been silently struggling with (for far too long) keeps you up at night… leaving you feeling restless and unbearably lonely.</p>

					<p style='text-align:justify'>Where you constantly analyze everything " .  $partners_name  . " does, looking for the truth behind their words, because they’re unable to express what’s really in their heart.</p>

					<p style='text-align:justify'>This is your inevitable future with " .  $partners_name  . " if you do nothing with the insights you’ve learned today, and you just keep going down the same lonely path you’re on now. </p>

					<p style='text-align:justify'><strong class='list-highlight-yellow'>And that’s not the future you deserve.</strong></p>

					<p style='text-align:justify'>You deserve a future filled with love, passion, security and happiness. </p>

					<p style='text-align:justify'>Where you understand " .  $partners_name  . " <i>so</i> deeply that you never have to ask what they’re thinking because you already know.</p>

					<p style='text-align:justify'>Where " .  $partners_name  . " showers you with love, appreciation, and devotion, and leaves no doubt in your mind that you’re most special person in their life. </p>

					<p style='text-align:justify'>A future where there are no ugly surprises that break your heart again. </p>

					<p style='text-align:justify'>Where you wake up each morning on cloud nine, knowing exactly where you stand with " .  $partners_name  . " (or anyone else lucky enough to be with you), feeling totally relaxed and beaming with confidence. </p>

					<p style='text-align:justify'>Which is why I invite you to manifest the second future I see for you…</p>

					<p style='text-align:justify'>A life filled with connection and intimacy. </p>

					<p style='text-align:justify'>A relationship brimming with loving memories in the making…</p>

					<p style='text-align:justify'>The romance you’ve been yearning for, but doubted could ever happen.</p>

					<p style='text-align:justify'>This is a future that leads to emotional fulfillment unlike any relationship you’ve ever had (or tried to have.)</p>

					<p style='text-align:justify'>Where you never question for a second that " .  $partners_name  . " wants you and only you.</p>

					<p style='text-align:justify'>Where you can finally live your “happily ever after”... wake up years from now, look deep into " .  $partners_name  . "’s eyes, and think to yourself … “We made it.”</p>

					<p style='text-align:justify'>It doesn’t matter how many times you’ve tried and failed… </p>

					<p style='text-align:justify'>Or, how many times you’ve felt hopeless and lost…</p>

					<p style='text-align:justify'>And it doesn’t matter how impossible true love with " .  $partners_name  . " might seem today. </p>

					<p style='text-align:justify'>Once you start down this path, the way you experience love, dating and relationships will change forever. </p>

					<p style='text-align:justify'>But you can’t go down this path alone: </p>

					<p style='text-align:justify'><strong class='list-highlight-yellow'>You need a guide.</strong></p>

					<p style='text-align:justify'>My name is Angel Adams and in my past 20 years of reading Astrology and Tarot for others, I’ve helped thousands of people find true love by using a little-known secret hidden within these ancient arts. </p>

					<p style='text-align:justify'>Many of these people had reached the same turning point that you’re at today. </p>

					<p style='text-align:justify'>They followed my direction and found themselves in the happiest, healthiest and most satisfying relationships of their lives. </p>

					<p style='text-align:justify'>And this is exactly what I’m going to do for you too.</p>

					<p style='text-align:justify'>Because now we are about to go beyond reading the Tarot cards you drew about " .  $partners_name  . "... </p>

					<p style='text-align:justify'>And read the Karmic Cards they were born with that reveals their deepest inner nature, needs, and desires. </p>

					<p style='text-align:justify'>What I’m about to show you is the secret roadmap to " .  $partners_name  . "’s heart…</p>

					<p style='text-align:justify'>It explains everything about their behavior, what they really need from a partner, how to make them crazy over you and what it takes for them to commit to you forever. </p>

					<p style='text-align:justify'>This is the ultimate guide to understand what’s happening in their head, their heart, and their soul so you can make the right decisions and live your “happily ever after” - together. </p>

					<p style='text-align:justify'>It’s called <strong class='list-highlight-yellow'>The Cosmic Love Blueprint. </strong></p>

					<p style='text-align:justify'>There is nothing else like it <i>anywhere</i> in the world.</p>

					<p style='text-align:justify'>It’s like running a spiritual background check on " .  $partners_name  . " that tells you everything you’ve ever wanted to know about them.</p>
					
					<p style='text-align:justify'>Once you have their Blueprint, you’ll unlock the secret code to " .  $partners_name  . "’s devotion that will make them yours forever.</p>
					
					<p style='text-align:justify'>You’ll know exactly why " .  $partners_name  . " pulls away, and how to make them obsess over you instead. </p>
					
					<p style='text-align:justify'>You’ll breathe a deep sigh of relief as you finally understand why you’ve had difficulties with " .  $partners_name  . " (reasons that have nothing to do with you)...</p>
					
					<p style='text-align:justify'>And how to connect with them so perfectly it’s as if you were two pieces of the same puzzle. </p>
					
					<p style='text-align:justify'>You'll see the core of their personality - so closely - you’ll be able to predict what they’ll say or do before it even crosses their mind.</p>
					
					<p style='text-align:justify'>You’ll smile to yourself as you discover the real reasons for their behavior and realize exactly what they need to open their heart and love you completely.</p>
					
					<p style='text-align:justify'>Are you ready to create a loving future with " .  $partners_name  . "? </p>";

					$gender_based_content_data_button = "Yes! I want " .  $partners_name  . " to give me their heart";

					$gender_based_content_data_link = "Not yet! But I do want to know more about them";

					$gender_based_content_data_additional = "<p style='text-align:center;'><p style='text-align:justify'><strong><u>Remember</u></strong>: The first future will happen if you do nothing with the insights you learn today. </p>
					
					<p style='text-align:justify'>The second future is in your grasp if you dare to discover what makes " .  $partners_name  . " fall in love and stay committed forever.</p>

					<p style='text-align:justify'>Choose wisely <span style='text-transform:capitalize'>" .  $name  . "</span>.</p>";

					// Default
	
				}

				$data_one=$this->checkresult->get_users("c".$this->input->post('one'),$s_one);
                $data_two=$this->checkresult->get_users("c".$this->input->post('two'),$s_two);
                $data_three=$this->checkresult->get_users("c".$this->input->post('three'),$s_three);
                
                // $resultdata=array(
                //     "title_one"=>$data_one[0]->card_title,
                //     "image_one"=>$data_one[0]->card_image,
                //     "description_one"=>$data_one[0]->card_description,
                //     "title_two"=>$data_two[0]->card_title,
                //     "image_two"=>$data_two[0]->card_image,
                //     "description_two"=>$data_two[0]->card_description,
                //     "title_three"=>$data_three[0]->card_title,
                //     "image_three"=>$data_three[0]->card_image,
                //     "description_three"=>$data_three[0]->card_description,
                //     "firstcard"=>$data_one[0]->card_code,
                //     "secondcard"=>$data_two[0]->card_code,
                //     "thirdcard"=>$data_three[0]->card_code,  
                //     "name"=>$this->input->post('inputFirstName'),
				// 	"partners_name"=>$partners_name,
                //     "gender"=>$this->input->post('gender'),
				// 	"pronouns"=>$pronouns,
				// 	"contentOne"=>$contentOne,
				// 	"contentTwo"=>$contentTwo,
                //     "gender_based_content"=>$gender_based_content_data
                // );

				if($pageIdentifier != 2){
					$resultdata=array(
						"title_one"=>$data_one[0]->card_title,
						"image_one"=>$data_one[0]->card_image,
						"description_one"=>$data_one[0]->card_description,
						"title_two"=>$data_two[0]->card_title,
						"image_two"=>$data_two[0]->card_image,
						"description_two"=>$data_two[0]->card_description,
						"title_three"=>$data_three[0]->card_title,
						"image_three"=>$data_three[0]->card_image,
						"description_three"=>$data_three[0]->card_description,
						"firstcard"=>$data_one[0]->card_code,
						"secondcard"=>$data_two[0]->card_code,
						"thirdcard"=>$data_three[0]->card_code,  
						"name"=>$this->input->post('inputFirstName'),
						"partners_name"=>$partners_name,
						"gender"=>$this->input->post('gender'),
						"pronouns"=>$pronouns,
						"contentOne"=>$contentOne,
						"contentTwo"=>$contentTwo,
						"gender_based_content"=>$gender_based_content_data,
						"gender_based_content_data_button"=>$gender_based_content_data_button,
						"gender_based_content_data_additional"=>$gender_based_content_data_additional,
						"gender_based_content_data_link"=>$gender_based_content_data_link,
						"pageIdentifier"=>0
					);
				} else {
					$resultdata=array(
						"title_one"=>$data_one[0]->card_title,
						"image_one"=>$data_one[0]->card_image,
						"description_one"=>$data_one[0]->card_description,
						"title_two"=>$data_two[0]->card_title,
						"image_two"=>$data_two[0]->card_image,
						"description_two"=>$data_two[0]->card_description,
						"title_three"=>$data_three[0]->card_title,
						"image_three"=>$data_three[0]->card_image,
						"description_three"=>$data_three[0]->card_description,
						"firstcard"=>$data_one[0]->card_code,
						"secondcard"=>$data_two[0]->card_code,
						"thirdcard"=>$data_three[0]->card_code,  
						"name"=>$this->input->post('inputFirstName'),
						"partners_name"=>$partners_name,
						"gender"=>$this->input->post('gender'),
						"pronouns"=>$pronouns,
						"contentOne"=>$contentOne,
						"contentTwo"=>$contentTwo,
						"gender_based_content"=>$gender_based_content_data,
						"gender_based_content_data_button"=>$gender_based_content_data_button,
						"gender_based_content_data_additional"=>$gender_based_content_data_additional,
						"gender_based_content_data_link"=>$gender_based_content_data_link,
						"pageIdentifier"=>$pageIdentifier
					);
				}

                //reg result for the first data
                //show data based on generated random db
                $this->load->view("header");

                $this->load->view("resultone",$resultdata);

                $this->load->view("footer");


        }
    }


}
?>
