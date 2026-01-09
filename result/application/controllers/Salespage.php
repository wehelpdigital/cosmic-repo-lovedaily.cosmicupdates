<?php
class salespage extends CI_Controller {

    function index()
    {

    if(!isset($_GET['firstcard']) || !isset($_GET['secondcard']) || !isset($_GET['thirdcard']) || !isset($_GET['name']) || !isset($_GET['inputPartnerName']))
      {
        $firstcard = "c1";
        $second_card = "c1";
        $third_card = "c1";
        $name = "Default";
        $partner_name = "Default";
        $gender = "male";
      }
      else
      { 

        $firstcard = $_GET['firstcard'];
        $second_card = $_GET['secondcard'];
        $third_card = $_GET['thirdcard'];
        $name = $_GET['name'];
        $partner_name = $_GET['inputPartnerName'];
        $gender = $_GET['gender'];

      }

   
        // your code
        $this->load->model("checkresult");

         //   $data=array(

         //      'name'=>$this->input->post('name'),
         //       // 'birthday_month'=>$this->input->post('inputDateMonth'),
         //       // 'birthday_day'=>$this->input->post('inputDateDay'),
         //       // 'birthday_year'=>$this->input->post('inputDateYear'),
         //       'birthday_month'=>10,
         //       'birthday_day'=>1,
         //       'birthday_year'=>1950,
         //       'firstcard'=>$this->input->post('firstcard'),
         //       'secondcard'=>$this->input->post('secondcard'),
         //       'thirdcard'=>$this->input->post('thirdcard'),
         //       'partners_name'=>$this->input->post('inputPartnerName'),
         //       'date'=>time()

         //       );

         //       $inserted=$this->checkresult->add_to_logs($data);
            
            if($gender=='male')
            {
               $db='select_two';

               $one_card="select_one";
               $two_card="select_two";
               $three_card="select_three";
            }
            else if ($gender=='other')
            {


               $db='select_two';

               $one_card="select_one";
               $two_card="select_two";
               $three_card="select_three";

            }
            else
            {
               $db='select_two_old';

               $one_card="select_one_old";
               $two_card="select_two_old";
               $three_card="select_three_old";
            }

            if ($gender == "female") {

               $gender = "Straight Woman";
               
               /* [ him / her / them ] */
               $pronouns = "him";

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

               /* [ woman / man / lover ] */
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

               $contentDeepBodyPleasure = "<p>That’s why, as your third bonus, my good friend Christy wants to give you the <strong>six simple steps</strong> to <u>turn your body on</u>, no matter how <i>numb</i> or “unsexy” you feel.</p>
               <p>Christy will help you <strong>awaken your feminine energy</strong> through deeply <i>sensual</i> energy practices that will change the way you feel in your <i>body</i> forever.</p>
               ";

           } else if ($gender == "male") {

               $gender = "Straight Man";

               $pronouns = "her";

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

               $contentDeepBodyPleasure = "<p>That’s why, as your third bonus, my good friend Christy wants to give you the <strong>six simple steps</strong> to <u>turn any women's body on</u>, no matter how <i>numb</i> or “unsexy” she feel.</p>
               <p>You can help any woman in your life <strong>awaken her feminine energy</strong> through deeply <strong>sensual</strong> energy practices that will change the way she feels in her body forever.  Christy’s work makes an <strong>excellent gift</strong> for <i>someone special!</i></p>
               ";

           } else {

               $gender = "LGBTQ+";

               $pronouns = "them";

               $pronounsGenderOne = "person";

               $pronounsGenderTwo = "lovers";

               $pronounsGenderThree = "someone special";

               $pronounsGenderFour = "people";

               $pronounsGenderFive = "human";

               $pronounsGenderSix = "people";

               $pronounsGenderSeven = "lover";

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

               $contentDeepBodyPleasure = "<p>That’s why, as your third bonus, my good friend Christy wants to give you the <strong>six simple steps</strong> to <u>turn any women's body on</u>, no matter how <i>numb</i> or “unsexy” she feel.</p>
               <p>You can help any woman in your life <strong>awaken her feminine energy</strong> through deeply <strong>sensual</strong> energy practices that will change the way she feels in her body forever.  Christy’s work makes an <strong>excellent gift</strong> for <i>someone special!</i></p>
               ";

           }

            $data=$this->checkresult->get_users($second_card,$db);
            $resultdata=array("title"=>$data[0]->card_title,"image"=>$data[0]->card_image, "description"=>$data[0]->card_description,
            "email"=>$this->input->get('email'),
            "firstcard_content"=>$this->checkresult->get_users($firstcard,$one_card),
            "secondcard_content"=>$this->checkresult->get_users($second_card,$two_card),
            "thirdcard_content"=>$this->checkresult->get_users($third_card,$three_card),
            "firstcard"=>$this->input->get('firstcard'),
            "secondcard"=>$this->input->get('secondcard'),
            "thirdcard"=>$this->input->get('thirdcard'),
            "bdaymonth"=>10,
            "bdayday"=>1,
            "bdayyear"=>1950,
            "contentDeepBodyPleasure"=>$contentDeepBodyPleasure,
            "pronouns"=>$pronouns,
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
            "name"=>$name,
            'gender'=>$gender,
            'partners_name'=>$partner_name,
            // "logged_data"=>$inserted,
            "salespage"=>"true");
            // //reg result for the first data

                $this->load->view("header");
                // //show data based on generated random db
                $this->load->view("resultsalespage",$resultdata);
                $this->load->view("footer");


      }
}
?>
