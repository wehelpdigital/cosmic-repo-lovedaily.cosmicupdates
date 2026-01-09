<?php
class one extends CI_Controller {

    function index()
    { 
    //   if(!isset($_GET['id']))	  
    //   {			
	// 	  		$this->load->view("header");

    //             echo "Invalid Token!";
    //   }
		if(!isset($_POST['one']) || !isset($_POST['two']) || !isset($_POST['three']) || !isset($_POST['inputFirstName']))
        {

              echo "Invalid Token!";

        }
		else
		{

             // your code

			$this->load->model("checkresult");
			
			// $one_card="select_one";
			// $two_card="select_two";
			// $three_card="select_three";

			// $name = $data[0]->name;
			// $gender = $data[0]->gender;
			// $partners_name = $data[0]->partners_name;

			$name=$this->input->post('inputFirstName');
			$gender=$this->input->post('gender');
			$partners_name_holder = $this->input->post('inputPartnersName');

			if(empty($partners_name_holder)){

				if($this->input->post('gender')=='woman')
				{
				   $partners_name ="your man";
				} 
				else if ($this->input->post('gender')=='male')
				{
				   $partners_name ="your woman";
				}
	
				else
				{
				   $partners_name ="your special person";
				}

				$partners_name_uc = ucfirst($partners_name);
				// $partners_name_one = "this person";
				// $partners_name = ucfirst($partners_name_one);

			} else {

				$partners_name_one = $this->input->post('inputPartnersName');
				$partners_name = ucfirst($partners_name_one);

				$partners_name_uc = ucfirst($partners_name_one);

			}

			if ($this->input->post('gender') == "female" || $this->input->post('gender') == "woman") {

				// $genderPayment = "https://loveread.pay.clickbank.net?cbitems=cu-clb-3700&cbfid=54323&cbskin=40752&cbexit=3503&cbtimer=1149&vtid=ryl-main-w";

				$genderPayment = "https://loveread.pay.clickbank.net/?cbitems=cu-clb-3700&cbfid=61214&template=read-lover&exitoffer=clb25&vtid=ryl_w_cdaily_3700_b1";

				/* [ him / her / them ] */
				$pronouns = "him";

				/* [ he feels / she feels / they feel ] */
				$pronounsFeels = "he feels";

				/* [ he sees / she sees / they see ] */
				$pronounsSees = "he sees";

				/* [ he closes his / she closes her / they close their ] */
				$pronounsClose = "he closes his";

				/* [ woman in his life / man in her life / person in their life ] */
				$pronounsLife = "woman in his life";

				/* [ he was / she was / they were ] */
				$pronounsWas = "he was";

				/* [ he needs / she needs / they need ] */
				$pronounsNeeds = "he needs";

				/* [he really needs / she really needs / they really need] */
				$pronounsReallyNeed = "he really needs";

				/* [ He BEGS / She BEGS / They BEG ] */ 
				$begs = "He BEGS";

				/* [ He'd / She'd / They'd ] */ 
				$pronounsWould = "he'd";

				/* [ men / women / people ] */
				$pronounsGenderTen = "men";

				/* [ woman / man / person ] */
				$pronounsGenderOne = "woman";

				/* [ women / men / lovers] */
				$pronounsGenderTwo = "women";

				/* [ a man / a woman / someone special ] */
				$pronounsGenderThree = "a man";

				/* [ women / men / people ] */
				$pronounsGenderFour = "women";

				/* [ woman / man / human ] */
				$pronounsGenderFive = "woman";

				/* [ women / men / people ] */
				$pronounsGenderSix = "women";

				/* [ woman / man / partner ] */
				$pronounsGenderSeven = "woman";

				/*  [ man / woman / person ] */
				$pronounsGenderEight = "man";

				/*  [ a man / a woman / someone ] */
				$pronounsGenderNine = "a man";

				/* [ he / she / they ] */
				$pronounsSubject = "he";

				/* [ his / her / their ] */
				$pronounsAdjectives = "his";

				/* [ he’ll / she’ll / they’ll ] */
				$pronounsWill = "he’ll";

				/* [ he’s / she’s / they’re ] */
				$pronounsPossessive = "he’s";

				/* [ knows himself / knows herself / know themselves ] */
				$pronounsKnows = "knows himself";

				/* [ hasn't / hasn't / haven’t ] */
				$pronounsNot = "hasn't";

				/* [ man / woman / lover ] */
				$pronounsLover = "man"; 

				/** First Line Fix */

				/* [ men / women / lovers ] */ 

				$pronouns_first_line_a = "men";

				/* [ a woman / a man / someone special ] */ 

				$pronouns_first_line_b = "a woman";

				/* [ her / him / them ] */ 

				$pronouns_first_line_c = "her";

				$pronouns_hashave = "he has";

/* [ He's / She's / They're ] */

$pronouns_suffixisare = "he's";

/* [ he is / she is / they are ] */

$pronouns_isare = "he is";

/* [ himself / herself / themselves ] */

$pronouns_self = "himself";

/* [Queen / King / Royalty ] */

$pronouns_royalty = "Queen";

$identify = "Man";

				// Woman
	
			} else if ($this->input->post('gender') == "male") {

				// $genderPayment = "https://loveread.pay.clickbank.net?cbitems=cu-clb-3700&cbfid=54324&cbskin=40752&cbexit=3504&cbtimer=1149&vtid=ryl-main-n";

				$genderPayment = "https://loveread.pay.clickbank.net/?cbitems=cu-clb-3700&cbfid=55945&template=read-lover&exitoffer=clb25&vtid=ryl_m_cdaily_3700_b1";

				$pronouns = "her";
				$pronounsFeels = "she feels";
				$pronounsSees = "she sees";
				$pronounsClose = "she closes her";
				$pronounsLife = "man in her life";
				$pronounsWas = "she was";
				$pronounsNeeds = "she needs";
				$pronounsReallyNeed = "she really needs";
				$begs = "She BEGS";
				$pronounsWould = "she'd";
				$pronounsGenderTen = "women";
				$pronounsGenderOne = "man";
				$pronounsGenderTwo = "men";
				$pronounsGenderThree = "a woman";
				$pronounsGenderFour = "men";
				$pronounsGenderFive = "man";
				$pronounsGenderSix = "men";
				$pronounsGenderSeven = "man";
				$pronounsGenderEight = "woman";
				$pronounsGenderNine = "a woman";
				$pronounsSubject = "she";
				$pronounsAdjectives = "her";
				$pronounsWill = "she’ll";
				$pronounsPossessive = "she’s";
				$pronounsKnows = "knows herself";
				$pronounsNot = "hasn't";
				$pronounsLover = "woman"; 

				/** First Line Fix */

				/* [ men / women / lovers ] */ 

				$pronouns_first_line_a = "women";

				/* [ a woman / a man / someone special ] */ 

				$pronouns_first_line_b = "a man";

				/* [ her / him / them ] */ 

				$pronouns_first_line_c = "him";

				$pronouns_hashave = "she has";

/* [ He's / She's / They're ] */

$pronouns_suffixisare = "she's";

/* [ he is / she is / they are ] */

$pronouns_isare = "she is";

/* [ himself / herself / themselves ] */

$pronouns_self = "herself";

/* [Queen / King / Royalty ] */

$pronouns_royalty = "King";

$identify = "Woman";

				// Male

			} else {

				//$genderPayment = "https://loveread.pay.clickbank.net?cbitems=cu-clb-3700&cbskin=40752&cbfid=53214&cbexit=3217&cbtimer=1149&vtid=dailyo";

				// $genderPayment = "https://loveread.pay.clickbank.net?cbitems=cu-clb-3700&cbfid=54324&cbskin=40752&cbexit=3504&cbtimer=1149&vtid=ryl-main-n";

				//"https://loveread.pay.clickbank.net/?cbitems=cu-clb-3700&cbfid=55945&template=read-lover&exitoffer=clb25&vtid=ryl_o_cdaily_3700_b1";

				$genderPayment = "https://loveread.pay.clickbank.net/?cbitems=cu-clb-3700&cbfid=55945&template=read-lover&exitoffer=clb25&vtid=ryl_o_cdaily_3700_b1";

				$gender = "LGBTQ+";
				$pronouns = "them";
				$pronounsFeels = "they feel";
				$pronounsSees = "they see";
				$pronounsClose = "they close their";
				$pronounsLife = "person in their life";
				$pronounsWas = "they were";
				$pronounsNeeds = "they need";
				$pronounsReallyNeed = "they really need";
				$begs = "They BEG";
				$pronounsWould = "they'd";
				$pronounsGenderTen = "people";
				$pronounsGenderOne = "person";
				$pronounsGenderTwo = "lovers";
				$pronounsGenderThree = "someone special";
				$pronounsGenderFour = "people";
				$pronounsGenderFive = "human";
				$pronounsGenderSix = "people";
				$pronounsGenderSeven = "partner";
				$pronounsGenderEight = "person";
				$pronounsGenderNine = "a someone";
				$pronounsSubject = "they";
				$pronounsAdjectives = "their";
				$pronounsWill = "they’ll";
				$pronounsPossessive = "they’re";
				$pronounsKnows = "know themselves";
				$pronounsNot = "haven’t";
				$pronounsLover = "lover";

				/** First Line Fix */

				/* [ men / women / lovers ] */ 

				$pronouns_first_line_a = "lovers";

				/* [ a woman / a man / someone special ] */ 

				$pronouns_first_line_b = "someone special";

				/* [ her / him / them ] */ 

				$pronouns_first_line_c = "them";

				$pronouns_hashave = "they have";

/* [ He's / She's / They're ] */

$pronouns_suffixisare = "they're";

/* [ he is / she is / they are ] */

$pronouns_isare = "they are";

/* [ himself / herself / themselves ] */

$pronouns_self = "themselves";

/* [Queen / King / Royalty ] */

$pronouns_royalty = "Royalty";

$identify = "Person";


				// Default

			}

			if($gender == 'woman' || $gender == 'female')
			{       
				$one_card="card_one_female";
				$two_card="card_two_female";
				$three_card="card_three_female";
				$content="<p>No matter what he thinks about you right now, what matters most is how he <i>feels about you</i>.</p>

				<p>The best way to learn <strong>how he really feels about you</strong> is to look at your second card.</p>  
						
				<p>Would you like to know how he <u>really feels</u> about you ". $name ."?</p>";

				$content_two="<p>We won’t really know what it is until we look at your third card, and <strong>find out what he’ll do next.</strong></p>  
				
				<p>Would you like to see where things are going with ". $partners_name . "?</p>";
			}
			else if ($gender == 'male')
			{
				$one_card="card_one_male";
				$two_card="card_two_male";
				$three_card="card_three_male";
				$content="<p>No matter what she thinks about you right now, what matters most is how she <i>feels about you</i>.</p>

				<p>The best way to learn <strong>how she really feels about you</strong> is to look at your second card.</p>  
						
				<p>Would you like to know how she <u>really feels</u> about you ". $name ."?</p>";

				$content_two="<p>We won’t really know what it is until we look at your third card, and <strong>find out what she’ll do next.</strong></p>  
				
				<p>Would you like to see where things are going with ". $partners_name . "?</p>";
			}
			else
			{
				$one_card="card_one_lgbt";
				$two_card="card_two_lgbt";
				$three_card="card_three_lgbt";
				$content="<p>No matter what they think about you right now, what matters most is how they <i>feel about you</i>.</p>

				<p>The best way to learn <strong>how they really feel about you</strong> is to look at your second card.</p>  
						
				<p>Would you like to know how they <u>really feel</u> about you ". $name ."?</p>";

				$content_two="<p>We won’t really know what it is until we look at your third card, and <strong>find out what they’ll do next.</strong></p>  
				
				<p>Would you like to see where things are going with ". $partners_name . "?</p>";
			}
		
			// $card=$this->checkresult->get_users($data[0]->thirdcard,$three_card);
			// $card_two=$this->checkresult->get_users($data[0]->secondcard,$two_card);
			// $card_one=$this->checkresult->get_users($data[0]->firstcard,$one_card);

			$card=$this->checkresult->get_users("c".$this->input->post('one'),$one_card);
			$card_two=$this->checkresult->get_users("c".$this->input->post('two'),$two_card);
			$card_one=$this->checkresult->get_users("c".$this->input->post('three'),$three_card);

			// $card=$this->checkresult->get_users($data[0]->firstcard,$one_card);
			// $card_two=$this->checkresult->get_users($data[0]->secondcard,$two_card);
			// $card_one=$this->checkresult->get_users($data[0]->thirdcard,$three_card);
			// $part_one=$this->checkresult->get_part_one($added_birthday);	

			// $firstcard=$this->checkresult->get_users($data[0]->firstcard,$one_card);
			// $secondcard=$this->checkresult->get_users($data[0]->secondcard,$two_card);
			// $thirdcard=$this->checkresult->get_users($data[0]->thirdcard,$three_card);
			// $part_one=$this->checkresult->get_part_one($added_birthday);	

			$resultdata=array(

			"image_one"=>$card_one[0]->card_image, 
			"title_one"=>$card_one[0]->card_title, 
			"description_one"=>$card_one[0]->card_description,
			// "firstcard"=>$firstcard,
	
			"image_two"=>$card_two[0]->card_image, 
			"title_two"=>$card_two[0]->card_title,
			"description_two"=>$card_two[0]->card_description,
			// "secondcard"=>$secondcard,

			"image_three"=>$card[0]->card_image,
			"title_three"=>$card[0]->card_title,
			"description_three"=>$card[0]->card_description,
			// "thirdcard"=>$thirdcard,

			"content"=>$content,
			"content_two"=>$content_two,

			"partners_name_uc"=>$partners_name_uc,
			"begs"=>$begs,
			"pronounsWould"=>$pronounsWould,
			"genderPayment"=>$genderPayment,
			"pronouns"=>$pronouns,
			"pronounsFeels"=>$pronounsFeels,
			"pronounsSees"=>$pronounsSees,
			"pronounsClose"=>$pronounsClose,
			"pronounsLife"=>$pronounsLife,
			"pronounsWas"=>$pronounsWas,
			"pronounsNeeds"=>$pronounsNeeds,
			"pronounsReallyNeed"=>$pronounsReallyNeed,
			"pronounsGenderTen"=>$pronounsGenderTen,
			"pronounsGenderOne"=>$pronounsGenderOne,
			"pronounsGenderTwo"=>$pronounsGenderTwo,
			"pronounsGenderThree"=>$pronounsGenderThree,
			"pronounsGenderFour"=>$pronounsGenderFour,
			"pronounsGenderFive"=>$pronounsGenderFive,
			"pronounsGenderSix"=>$pronounsGenderSix,
			"pronounsGenderSeven"=>$pronounsGenderSeven,
			"pronounsGenderEight"=>$pronounsGenderEight,
			"pronounsGenderNine"=>$pronounsGenderNine,
			"pronounsSubject"=>$pronounsSubject,
			"pronounsAdjectives"=>$pronounsAdjectives,
			"pronounsWill"=>$pronounsWill,
			"pronounsPossessive"=>$pronounsPossessive,
			"pronounsKnows"=>$pronounsKnows,
			"pronounsNot"=>$pronounsNot,
			"pronounsLover"=>$pronounsLover,
			"pronouns_first_line_a" => $pronouns_first_line_a,
			"pronouns_first_line_b" => $pronouns_first_line_b,
			"pronouns_first_line_c" => $pronouns_first_line_c,
			"pronouns_hashave" => $pronouns_hashave,
			"pronouns_suffixisare" => $pronouns_suffixisare,
			"pronouns_isare" => $pronouns_isare,
			"pronouns_self" => $pronouns_self,
			"pronouns_royalty" => $pronouns_royalty,
			"identify"=>$identify,
			// "email"=>$data[0]->email,
			"name"=>$this->input->post('inputFirstName'),
			// "day"=>$data[0]->birthday_day,
			// "month"=>$data[0]->birthday_month,
			// "year"=>$data[0]->birthday_year,
			"partners_name"=>$partners_name,
			"gender"=>$gender
			// "gender_based_content"=>$gender_based_content_data,
			// "contentOne"=>$contentOne,
			// "contentTwo"=>$contentTwo,
			// "gender_based_content"=>$gender_based_content_data,
			// "gender_based_content_data_button"=>$gender_based_content_data_button,
			// "gender_based_content_data_additional"=>$gender_based_content_data_additional,
			// "gender_based_content_data_link"=>$gender_based_content_data_link,
			// "part_one"=>$part_one
			);

			//reg result for the first data

			$this->load->view("header");
			$this->load->view("reading",$resultdata);
			$this->load->view("footer");

      }
    
	}
	  
	function redirect()
    {

      if(!isset($_GET['id']))
      {			$this->load->view("header");	
                echo "Invalid Token!";
      }
      else
      {

             // your code
				$this->load->model("checkresult");
				$data=$this->checkresult->get_userlog($this->input->get('id'),'logs');

				echo count($data);

            //Day ones digit

      			$digit=$data[0]->Bdday + $data[0] ->BdMonth + $data[0]->BdYear;

      			//Get 4 digits of digit

      			$dgone=intval($digit/1000);
      			$dgone_var=$digit % 1000;

      			$dgtwo=intval($dgone_var/100);
      			$dgtwo_var=$dgone_var % 100;

      			$dgthree=intval($dgtwo_var / 10);
      			$dgfour=$dgtwo_var % 10;

      			$added_birthday=$dgone + $dgtwo + $dgthree + $dgfour;

      			if($added_birthday>22)
      			{
      				$added_birthday=(intval($added_birthday / 10))+($added_birthday % 10);
      			}	
			 
				 
				 $one_card="select_one";
				 $two_card="select_two";
				 $three_card="select_three";
					  


			$firstcard=$this->checkresult->get_users($data[0]->cone, $one_card);
            $secondcard=$this->checkresult->get_users($data[0]->ctwo, $two_card);
            $thirdcard=$this->checkresult->get_users($data[0]->cthree, $three_card);
			$part_one=$this->checkresult->get_part_one($added_birthday);	
			
            $resultdata=array(
            "firstcard"=>$firstcard,
            "secondcard"=>$secondcard,
            "thirdcard"=>$thirdcard,
            "name"=>$data[0]->Name,
			"email"=>$data[0]->Email,
			"day"=>$data[0]->Bdday,
			"month"=>$data[0]->BdMonth,
			"year"=>$data[0]->BdYear,
			"gender_based_content"=>$gender_based_content_data,
            "gender_based_content_data_button"=>$gender_based_content_data_button,
            "gender_based_content_data_additional"=>$gender_based_content_data_additional,
            "gender_based_content_data_link"=>$gender_based_content_data_link,
			"part_one"=>$part_one
			);

            //reg result for the first data
 

            // $this->load->view("header");
            // $this->load->view("readingredirect",$resultdata); 
            // $this->load->view("footer");
      }
      }
}
?>
