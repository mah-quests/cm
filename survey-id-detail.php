<?php

  include("connect/connectDB.php"); // connection to db
  include("connect/dataCollection.php"); // connection to db

error_reporting(0);
session_start();

if ($_SESSION['loggedin']  != TRUE)   //if user is not login redirected baack to login page
{
  header('location:login.php');
} else {

  include_once "includes/header.php";

  $id = $_GET['id'];

?>

  <div class="panel-header panel-header-sm" align="center">  
  </div>
  <br><br><br>
  <div class="content"> 


      <?php
          $sql="SELECT * FROM summary_tbl where summary_id='$id' ";
          $query=mysqli_query($db,$sql);

              if(!mysqli_num_rows($query) > 0 )
              {
                  echo '<td colspan="12">
                          <center>
                              No User-Data!
                          </center>
                      </td>';
              } else {               
                  while($rows=mysqli_fetch_array($query)) {

                    $unique_code=$rows['unique_code'];

          ?>

      
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Summary of survey</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <div class="row" >
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">Transaction ID</div>
                      <div class="col-md-6" class="divider">: <?php echo $rows['summary_id']; ?></div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Reference Number
                      </div>
                      <div class="col-md-6">: <?php echo $rows['unique_code']; ?></div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Respondants Full Names
                      </div>
                      <div class="col-md-6">: <?php echo $rows['respondant_name'].' '.$rows['respondant_surname'] ;?></div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Respondants Phone Number
                      </div>
                      <div class="col-md-6">: <?php echo $rows['respondant_phone']; ?></div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Municipality, Province
                      </div>
                      <div class="col-md-6">: <?php echo $rows['municipality'].', '.$rows['province']; ?></div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Date & Time of completion
                      </div>
                      <div class="col-md-6">: <?php echo $rows['completed_datetime']; ?></div>                      
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php 
                    }   
                }


          $sql="SELECT * FROM respondant_contact_tbl where unique_code='$unique_code' ";
          $query=mysqli_query($db,$sql);

              if(!mysqli_num_rows($query) > 0 )
              {
                  echo '<td colspan="12">
                          <center>
                              No User-Data!
                          </center>
                      </td>';
              } else {               
                  while($rows=mysqli_fetch_array($query)) {

?>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Respondants Contact Details</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div class="row" >
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Respondants Full Names
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['first_name'].' '.$rows['surname'] ;?>
                    </div>                    
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Age Bracket
                    </div>
                    <div class="col-md-6" class="divider">
                        : <?php echo $rows['age_bracket']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Contact Number
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['cellnumber']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Birth Month
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['birth_month']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Race
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['race']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Religion
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['religion']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Sex
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['sex']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Gender Identity
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['gender_id']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Gender
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['gender']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Pronoun
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['pronouns']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Address (Place where you live)
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['home_address']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Are you disabled
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['disable']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Type of disability
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['disability_type']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Status of employment
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['employment_status']; ?>
                    </div>                     
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Municipality, District and Province
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['municipality'].', '.$rows['district'].', '.$rows['province'] ; ?>
                    </div>                     
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php 
                    }   
                }
?>

      <?php
          $sql="SELECT * FROM surviving_covid_tbl where unique_code='$unique_code' ";
          $query=mysqli_query($db,$sql);

              if(!mysqli_num_rows($query) > 0 )
              {
                  echo '<td colspan="12">
                          <center>
                              No User-Data!
                          </center>
                      </td>';
              } else {               
                  while($rows=mysqli_fetch_array($query)) {
          ?>

    <div class="row">
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Module 1: Surviving COVID-19</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <div class="row" >
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Have you tested positive for Covid-19?
                      </div>
                      <div class="col-md-6" class="divider">
                        : <?php echo $rows['tested_covid']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Were you hospitalised for Covid-19? 
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['hospitalised']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        How did you manage to self isolate
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['isolate_info'] ;?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Do you have access to support services:
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Counselling support
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['counselling_support']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Physical rehabilitation
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['physical_rehab']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Access to disability grant
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['disability_grant']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Assistance to access medication
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['access_medication']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Information on how to sustain health & wellness
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['information']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        I do not access any of the stated support services
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['no_access']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Other
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['other']; ?>
                      </div>                      
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Which of the following support services do you need:
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Counselling support
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['need_counselling_support']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Physical rehabilitation
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['need_physical_rehab']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Access to disability grant
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['need_disability_grant']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Assistance to access medication
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['need_access_medication']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Information on how to sustain health & wellness
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['need_information']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        I do not access any of the stated support services
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['need_no_access']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Other
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['need_other']; ?>
                      </div>  
                      
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>          

<?php 
                    }   
                }


          $sql="SELECT * FROM social_behaviour_tbl where unique_code='$unique_code' ";
          $query=mysqli_query($db,$sql);

              if(!mysqli_num_rows($query) > 0 )
              {
                  echo '<td colspan="12">
                          <center>
                              No User-Data!
                          </center>
                      </td>';
              } else {               
                  while($rows=mysqli_fetch_array($query)) {

?>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Module 2: Social and behaviour change</h4>
                <p class="category"></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">

                  <div class="row" >
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      What lifestyle changes do you think you need to make in order to make sure that you are safe from Covid-19?
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                      How I spend time with my family
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['family']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                      How I attend places of worship
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['worship']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                      How I socialise with friends
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['friends']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                      How I conduct myself at work
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['work']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                      Where I go for shopping
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['shopping']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                      Places outside of my community that I will travel to
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['travel']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                      Other
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['other']; ?>
                    </div> 

                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Any other lifestyle changes?
                    </div>
                    <div class="col-md-6" class="divider">
                      : <?php echo $rows['lifestyle_changes']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Are you practising social distancing when you are socialising
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['family_social_distancing']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      How much do you see friends now as compared to before COVID-19 Lockdown in February/March of 2020?
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['see_friends'] ;?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Would you say that as compared to last year your health is
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['health_improvements']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Have you been able to eat a daily meal since the beginning of lockdown
                    </div>
                    <div class="col-md-6">: <?php echo $rows['healthy_food']; ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php 
                    }   
                }
?>

      <?php
          $sql="SELECT * FROM public_facilities_tbl where unique_code='$unique_code' ";
          $query=mysqli_query($db,$sql);

              if(!mysqli_num_rows($query) > 0 )
              {
                  echo '<td colspan="12">
                          <center>
                              No User-Data!
                          </center>
                      </td>';
              } else {               
                  while($rows=mysqli_fetch_array($query)) {
          ?>

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Module 3: Access to public facilities</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <div class="row" >

                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Do you have access to water and sanitation
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Public community access points
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['community_access_points']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Flushing toilet inside dwelling
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['flushing_toilet_inside_dwelling']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Flushing toilet located outside of dwelling
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['flushing_toilet_outside_dwelling']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Tap with running water inside dwelling
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['tap_inside_dwelling']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 15px" align="right">
                        Tap with running water outside dwelling
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['tap_outside_dwelling']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        How do you earn a living?
                      </div>
                      <div class="col-md-6" class="divider">
                        : <?php echo $rows['earning_living']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Did you access any government support schemes for small businesses/freelancers
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['government_support']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Did you apply for any SASSA grants
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['applied_sassa'] ;?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Which grant did you apply
                      </div>
                      <div class="col-md-6">
                        : <?php echo $rows['which_grant']; ?>
                      </div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        If you lost your job during Covid, have you applied for unemployment assistance
                      </div>
                      <div class="col-md-6">: <?php echo $rows['applied_assistance'].', '.$rows['province']; ?></div>
                      <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                        Has your application been successful
                      </div>
                      <div class="col-md-6">: <?php echo $rows['application_success']; ?></div>                      
                    </div>
                </div>
              </div>
            </div>
          </div>

<?php 
                    }   
                }


          $sql="SELECT * FROM work_safety_tbl where unique_code='$unique_code' ";
          $query=mysqli_query($db,$sql);

              if(!mysqli_num_rows($query) > 0 )
              {
                  echo '<td colspan="12">
                          <center>
                              No User-Data!
                          </center>
                      </td>';
              } else {               
                  while($rows=mysqli_fetch_array($query)) {

?>

          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title">Module 4: Work Safety on COVID-19</h4>
                <p class="category"></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">

                  <div class="row" >
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Has your employer taken any steps to make your working environment safe against COVID infection?
                    </div>
                    <div class="col-md-6" class="divider">
                      : <?php echo $rows['employer_safe_environment']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Which of the following measures has your employer taken
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['employer_measures']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Do you know the guidelines for the workplace during this pandemic
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['workplace_guidelines'] ;?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Where are you accessing information on workplace regulations under Covid-19
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['access_infomation']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      How do you travel to work
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['travel_to_work']; ?>
                    </div>
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      Are there safety measures that you can see
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['public_transport']; ?>
                    </div> 
                    <div class="col-md-6" style="color: #F2A590; font-size: 20px">
                      What safety measures do you think are missing
                    </div>
                    <div class="col-md-6">
                      : <?php echo $rows['public_transport_measures']; ?>
                    </div>                             
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php 
                    }   
                }
?>

        <button class="btn btn-secondary btn-block" onclick="goBack()">
          Back
        </button>

  </div>
  </div>
  

<?php 
include_once 'includes/footer.php'; 
?>

<?php } ?>
