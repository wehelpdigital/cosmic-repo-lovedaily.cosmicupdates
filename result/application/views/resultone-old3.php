<!-- ClickBank Trust Badge -->
<style type="text/css">
  input[type='checkbox']{
    width: 20px;
    height: 20px;
  }

  .mcw-table{
    text-align: left;
    display: inline-block;
    position: relative;
    margin: 0 10px;
  }

  .mcw-table .row{
    padding: 5px;
  }

  .mcw-table-title{
    background: #999;
    font-weight: bold;
  }

  .mcw-table-content{
    background: #aeaeae;
  }

  .mcw-table-product{
    font-weight: bold;
  }
  .mcw-table-footer{
    background: #dadada;
    font-weight: bold;
  }
  .buttonSecond:hover{ background: inherit !important; color: #184266 !important; text-decoration: underline !important; }

  <?php if($pageIdentifier != 2){ ?>
  <?php } else { ?>
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
  <?php } ?>

</style>



<div class="clear"></div>
<div class="content">
  <div class="results">
    <div class="result-content-container">
 
      <div class="animated fadeIn">

        <div class="sales-content">

          <!-- First Card -->
          <h1 class="animated fadeIn center"><?php echo $name; ?>, Here’s What <?php echo $pronouns; ?> Think About You...</h1>

          <div class="col-sm-4">
            <img class=" animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image_one; ?>.jpg"/>
          </div>

          <div class="col-sm-8 animated fadeIn">
            <h2 class="subtitle">Your first card is <?php echo $title_one; ?>.</h2>
            <div>
                <p><i>My,</i> <?php echo $name;?>...</p>
                <?php echo $description_one; ?>
                <?php echo $contentOne; ?>
            </div>
          </div>
          <div class="clear"></div>

          <!-- Second Card -->
          <h1 class="animated fadeIn top-thirty"><?php echo $name;?>, Here’s How <?php echo $partners_name; ?> Feels About You...</h1>

          <div class="col-sm-4">
            <img class=" animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image_two; ?>.jpg"/>
          </div>

          <div class="col-sm-8 animated fadeIn">
            <h2 class="subtitle">Your second card is <?php echo $title_two; ?></h2>
            <div>
                <p><strong>Fascinating,</strong> <?php echo $name;?>...</p>
                <?php echo $description_two; ?>
                <?php echo $contentTwo; ?>
            </div>
          </div>
          <div class="clear"></div>

          <!-- Third Card -->
          <h1 class="animated fadeIn top-thirty"><?php echo $name; ?>, Here’s What <?php echo $partners_name; ?> Will Do Next…</h1>

          <div class="col-sm-4">
            <img class=" animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image_three; ?>.jpg">
          </div>

          <div class="col-sm-8 animated fadeIn">
            <h2 class="subtitle">Your third card is <?php echo $title_three; ?></h2>
            <div>
                <p>How <i>auspicious</i> <?php echo $name;?>...</p>
                <p><?php echo $description_three; ?></p>
                <p>But your future with <?php echo $partners_name; ?> is not set in stone yet <?php echo $name; ?>...</p>
            </div>
          </div>
          <div class="clear"></div>
      
        <div class="animated fadeIn">

          <div class="page-salespage result-three-continued-salespage">

            <?php echo $gender_based_content ?>

          </div>

          <div>
            <form class="af-form-wrapper" id="stepthree" accept-charset="UTF-8" action="/result/salespage" method="GET" >

              <input type="hidden" name="name"  id="name" class="text" value="<?php echo $name; ?>"  />
              <!--Gender-->
              <input type="hidden" value="<?php echo $gender; ?>" name="gender" id="gender"/>
              <!--Partners Name-->
              <input type="hidden" value="<?php echo $partners_name; ?>" name="inputPartnerName" id="partners_name"/>
              <!-- CARD ONE -->
              <input type="hidden"  class="text" name="firstcard" value="<?php echo $firstcard; ?>" id="cone" />
              <input type="hidden"  class="text" name="secondcard" value="<?php echo $secondcard; ?>" id="ctwo"/>
              <input type="hidden"  class="text" name="thirdcard" value="<?php echo $thirdcard; ?>" id="cthree"/>
              <?php if($pageIdentifier != 2){ ?>
                <input type="hidden" value="0" name="pageIdentifier" />
              <?php } else { ?>
                <input type="hidden" value="2" name="pageIdentifier" />
              <?php } ?>

              <div class="center" style="margin:25px auto 0;">

                <?php if($pageIdentifier != 2){ ?>

                  <input type="submit" style="max-width:500px; margin:10px auto;" class="small-continue btn notop" id="stepthree-continue" value="<?php echo $gender_based_content_data_button; ?>">

                <?php } else { ?>

                  <input type="submit" style="max-width:700px; margin:10px auto;" class="purple-button small-continue btn notop" id="stepthree-continue" value="<?php echo $gender_based_content_data_button; ?>">

                <?php } ?>

              </div>
            </form>
          </div>

          <div>
            <form class="af-form-wrapper" id="stepthree-second" accept-charset="UTF-8" action="/result/salespage" method="GET" >

              <input type="hidden" name="name"  id="name" class="text" value="<?php echo $name; ?>"  />
              <!--Gender-->
              <input type="hidden" value="<?php echo $gender; ?>" name="gender" id="gender"/>
              <!--Partners Name-->
              <input type="hidden" value="<?php echo $partners_name; ?>" name="inputPartnerName" id="partners_name"/>
              <!-- CARD ONE -->
              <input type="hidden"  class="text" name="firstcard" value="<?php echo $firstcard; ?>" id="cone" />
              <input type="hidden"  class="text" name="secondcard" value="<?php echo $secondcard; ?>" id="ctwo"/>
              <input type="hidden"  class="text" name="thirdcard" value="<?php echo $thirdcard; ?>" id="cthree"/>
              <?php if($pageIdentifier != 2){ ?>
                <input type="hidden" value="0" name="pageIdentifier" />
              <?php } else { ?>
                <input type="hidden" value="2" name="pageIdentifier" />
              <?php } ?>

              <div class="center" style="margin:auto;">

                <?php if($pageIdentifier != 2){ ?>

                  <input type="submit" class="buttonSecond" style="margin: 10px auto; border: none; background: inherit; color: #337ab7; font-size: 16px; padding: 0; margin-top: 0 !important;" class="small-continue btn notop" id="stepthree-continue-second" value="<?php echo $gender_based_content_data_link; ?>">

                <?php } else { ?>

                  <input type="submit" class="buttonSecond" style="margin: 10px auto; border: none; background: inherit; color: #337ab7; font-size: 16px; padding: 0; margin-top: 0 !important;" class="small-continue btn notop" id="stepthree-continue-second" value="<?php echo $gender_based_content_data_link; ?>">

                <?php } ?>

              </div>
            </form>
          </div>

          <div class="page-salespage result-three-continued-salespage">

            <?php echo $gender_based_content_data_additional ?>

          </div>
        
        </div>

    </div>
  </div>
</div>

<script src="<?php echo base_url(); ?>public/js/custom.js"></script>
 
