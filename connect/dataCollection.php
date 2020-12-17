<?php

include 'connect.php';

##########  Dashboard Data (generating graphs) #########
$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2020/10/01' and '2020/10/31' ";
$result = mysqli_query($db, $sql);
$numOfSurveysOct20 = mysqli_num_rows($result);

$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2020/11/01' and '2020/11/30' ";
$result = mysqli_query($db, $sql);
$numOfSurveysNov20 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2020/12/01' and '2020/12/31' ";
$result = mysqli_query($db, $sql);
$numOfSurveysDec20 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/01/01' and '2021/01/31' ";
$result = mysqli_query($db, $sql);
$numOfSurveysJan21 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/02/01' and '2021/02/28' ";
$result = mysqli_query($db, $sql);
$numOfSurveysFeb21 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/03/01' and '2021/03/31' ";
$result = mysqli_query($db, $sql);
$numOfSurveysMar21 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/04/01' and '2021/04/30' ";
$result = mysqli_query($db, $sql);
$numOfSurveysApr21 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/05/01' and '2021/05/31' ";
$result = mysqli_query($db, $sql);
$numOfSurveysMay21 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/06/01' and '2021/06/30' ";
$result = mysqli_query($db, $sql);
$numOfSurveysJun21 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/07/01' and '2021/07/31' ";
$result = mysqli_query($db, $sql);
$numOfSurveysJul21 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/08/01' and '2021/08/31' ";
$result = mysqli_query($db, $sql);
$numOfSurveysAug21 = mysqli_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/09/01' and '2021/09/30' ";
$result = mysqli_query($db, $sql);
$numOfSurveysSep21 = mysqli_num_rows($result);

$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/10/01' and '2021/10/31' ";
$result = mysqli_query($db, $sql);
$numOfSurveysOct21 = mysqli_num_rows($result);

##########  Dashboard Data (mobiliser info) #########

$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 1 day";
$result = mysqli_query($db, $sql);
$numOfCompletedSurveyYesterday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 2 day";
$result = mysqli_query($db, $sql);
$numOfCompletedSurvey2DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 3 day";
$result = mysqli_query($db, $sql);
$numOfCompletedSurvey3DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 4 day";
$result = mysqli_query($db, $sql);
$numOfCompletedSurvey4DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 5 day";
$result = mysqli_query($db, $sql);
$numOfCompletedSurvey5DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 6 day";
$result = mysqli_query($db, $sql);
$numOfCompletedSurvey6DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 7 day";
$result = mysqli_query($db, $sql);
$numOfCompletedSurvey7DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 8 day";
$result = mysqli_query($db, $sql);
$numOfCompletedSurvey8DaysAgo = mysqli_num_rows($result);




##########  Dashboard Data (survey info) #########

$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 1 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisersYesterday = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 2 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers2DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 3 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers3DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 4 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers4DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 5 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers5DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 6 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers6DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 7 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers7DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 8 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers8DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 9 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers9DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 10 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers10DaysAgo = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 11 day";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers11DaysAgo = mysqli_num_rows($result);

##########  Overall Mobiliser Stats #########

// Total number of mobilisers registered on the app
$sql = "SELECT * FROM mobiliser_tbl";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers = mysqli_num_rows($result);


##########  Provincial Mobiliser Data Stats #########
$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Gauteng' ";
$result = mysqli_query($db, $sql);
$gautengMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Free State' ";
$result = mysqli_query($db, $sql);
$freeStateMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'North West' ";
$result = mysqli_query($db, $sql);
$northWestMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Mpumalanga' ";
$result = mysqli_query($db, $sql);
$mpumalangaMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Limpopo' ";
$result = mysqli_query($db, $sql);
$limpopoMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Kwazulu Natal' ";
$result = mysqli_query($db, $sql);
$kznMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Northern Cape' ";
$result = mysqli_query($db, $sql);
$northernCapeMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Eastern Cape' ";
$result = mysqli_query($db, $sql);
$easternCapeMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Western Cape' ";
$result = mysqli_query($db, $sql);
$westernCapeMobilisers = mysqli_num_rows($result);


##########  Overall Surveys Stats #########

// Total number of surveys completed across the provinces
$sql = "SELECT * FROM summary_tbl";
$result = mysqli_query($db, $sql);
$numOfCompletedSurveys = mysqli_num_rows($result);

##########  Provincial Survey Data Stats #########

$sql = "SELECT * FROM summary_tbl WHERE province = 'Gauteng' ";
$result = mysqli_query($db, $sql);
$gautengCompletedSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Free State' ";
$result = mysqli_query($db, $sql);
$freeStateCompletedSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'North West' ";
$result = mysqli_query($db, $sql);
$northWestCompletedSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Mpumalanga' ";
$result = mysqli_query($db, $sql);
$mpumalangaCompletedSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Limpopo' ";
$result = mysqli_query($db, $sql);
$limpopoCompletedSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Kwazulu Natal' ";
$result = mysqli_query($db, $sql);
$kznCompletedSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Northern Cape' ";
$result = mysqli_query($db, $sql);
$northernCapeCompletedSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Eastern Cape' ";
$result = mysqli_query($db, $sql);
$easternCapeCompletedSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Western Cape' ";
$result = mysqli_query($db, $sql);
$westernCapeCompletedSurveys = mysqli_num_rows($result);


##########  Stats for today #########

// Total number of agents registered on the app
$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE()";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisersToday = mysqli_num_rows($result);


$sql = "SELECT DISTINCT mobiliser_id FROM summary_tbl where date(completed_datetime)=CURDATE()";
$result = mysqli_query($db, $sql);
$numOfActiveAgentsToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Gauteng' ";
$result = mysqli_query($db, $sql);
$gautengCompletedSurveysToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Free State' ";
$result = mysqli_query($db, $sql);
$freeStateCompletedSurveysToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'North West' ";
$result = mysqli_query($db, $sql);
$northWestCompletedSurveysToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Mpumalanga' ";
$result = mysqli_query($db, $sql);
$mpumalangaCompletedSurveysToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Limpopo' ";
$result = mysqli_query($db, $sql);
$limpopoCompletedSurveysToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Kwazulu Natal' ";
$result = mysqli_query($db, $sql);
$kznCompletedSurveysToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Northern Cape' ";
$result = mysqli_query($db, $sql);
$northernCapeCompletedSurveysToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Eastern Cape' ";
$result = mysqli_query($db, $sql);
$easternCapeCompletedSurveysToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Western Cape' ";
$result = mysqli_query($db, $sql);
$westernCapeCompletedSurveysToday = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE()";
$result = mysqli_query($db, $sql);
$numOfCompletedSurveysToday = mysqli_num_rows($result);

##########  Sector Mobiliser Details #########

$sql = "SELECT * FROM mobiliser_tbl where net_structure='Faith' ";
$result = mysqli_query($db, $sql);
$faithMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='People Living with HIV and AIDS (PLHIV)' ";
$result = mysqli_query($db, $sql);
$plhivMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Non-Governmental Organisations' ";
$result = mysqli_query($db, $sql);
$npoMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Sex Workers' ";
$result = mysqli_query($db, $sql);
$sexWorkerMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Men' ";
$result = mysqli_query($db, $sql);
$menMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='LGBTIQ' ";
$result = mysqli_query($db, $sql);
$lgbtiMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Youth' ";
$result = mysqli_query($db, $sql);
$youthMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='People with Disabilities' ";
$result = mysqli_query($db, $sql);
$peopleWithDisabilitiesMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Sport, Arts & Culture' ";
$result = mysqli_query($db, $sql);
$sacMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Traditional Health Practitioners' ";
$result = mysqli_query($db, $sql);
$traditionalhealthMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Women' ";
$result = mysqli_query($db, $sql);
$womenMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Children' ";
$result = mysqli_query($db, $sql);
$childrenMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Health Professionals' ";
$result = mysqli_query($db, $sql);
$healthProfessionalsMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Research' ";
$result = mysqli_query($db, $sql);
$researchMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Traditional Leaders' ";
$result = mysqli_query($db, $sql);
$traditionalLeadersMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Law & Human Rights' ";
$result = mysqli_query($db, $sql);
$humanRightsMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Higer Education' ";
$result = mysqli_query($db, $sql);
$higerEducationMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Labour' ";
$result = mysqli_query($db, $sql);
$labourMobilisers = mysqli_num_rows($result);


##########  Sector Survey Details #########

$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN  
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Faith') ";
$result = mysqli_query($db, $sql);
$faithSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'People Living with HIV and AIDS (PLHIV)') ";
$result = mysqli_query($db, $sql);
$plhivSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Non-Governmental Organisations') ";
$result = mysqli_query($db, $sql);
$npoSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Sex Workers') ";
$result = mysqli_query($db, $sql);
$sexWorkerSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Men') ";
$result = mysqli_query($db, $sql);
$menSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'LGBTIQ') ";
$result = mysqli_query($db, $sql);
$lgbtiSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Youth') ";
$result = mysqli_query($db, $sql);
$youthSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'People with Disabilities') ";
$result = mysqli_query($db, $sql);
$peopleWithDisabilitiesSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Sport, Arts & Culture') ";
$result = mysqli_query($db, $sql);
$sacSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Traditional Health Practitioners') ";
$result = mysqli_query($db, $sql);
$traditionalhealthSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Women') ";
$result = mysqli_query($db, $sql);
$womenSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Children') ";
$result = mysqli_query($db, $sql);
$childrenSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Health Professionals') ";
$result = mysqli_query($db, $sql);
$healthProfessionalsSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Research') ";
$result = mysqli_query($db, $sql);
$researchSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Traditional Leaders') ";
$result = mysqli_query($db, $sql);
$traditionalLeadersSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Law & Human Rights') ";
$result = mysqli_query($db, $sql);
$humanRightsSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Higer Education') ";
$result = mysqli_query($db, $sql);
$higerEducationSurveys = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Labour') ";
$result = mysqli_query($db, $sql);
$labourSurveys = mysqli_num_rows($result);


// Stats for yesterday
$sql = "SELECT count(DISTINCT mobiliser_id) FROM summary_tbl where date(created_date)=CURDATE() - interval 1 day";
$result = mysqli_query($db, $sql);
$numOfActiveAgentsYesterday = mysqli_num_rows($result);


##########  Data Analysis (reports page) #########
// Age brackets
$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='18-24' ";
$result = mysqli_query($db, $sql);
$numOfAge18to24 = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='25-34' ";
$result = mysqli_query($db, $sql);
$numOfAge25to34 = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='35-44' ";
$result = mysqli_query($db, $sql);
$numOfAge35to44 = mysqli_num_rows($result);


$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='45-54' ";
$result = mysqli_query($db, $sql);
$numOfAge45to54 = mysqli_num_rows($result);


$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='55-65' ";
$result = mysqli_query($db, $sql);
$numOfAge55to64 = mysqli_num_rows($result);


$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='65+' ";
$result = mysqli_query($db, $sql);
$numOfAge65plus = mysqli_num_rows($result);


// Race 
$sql = "SELECT * FROM respondant_contact_tbl where race='Black' ";
$result = mysqli_query($db, $sql);
$numOfRaceBlack = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Asian' ";
$result = mysqli_query($db, $sql);
$numOfRaceAsian = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Colored' ";
$result = mysqli_query($db, $sql);
$numOfRaceColored = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Indian' ";
$result = mysqli_query($db, $sql);
$numOfRaceIndian = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='White' ";
$result = mysqli_query($db, $sql);
$numOfRaceWhite = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Other' ";
$result = mysqli_query($db, $sql);
$numOfRaceOther = mysqli_num_rows($result);


// Religion 
$sql = "SELECT * FROM respondant_contact_tbl where religion='Christian' ";
$result = mysqli_query($db, $sql);
$numOfReligionChristian = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Islam' ";
$result = mysqli_query($db, $sql);
$numOfReligionIslam = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Hinduism' ";
$result = mysqli_query($db, $sql);
$numOfReligionHinduism = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='African-Religion' ";
$result = mysqli_query($db, $sql);
$numOfReligionAfrican = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Judaism' ";
$result = mysqli_query($db, $sql);
$numOfReligionJudaism = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Atheist' ";
$result = mysqli_query($db, $sql);
$numOfReligionAtheist = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Rastafarian' ";
$result = mysqli_query($db, $sql);
$numOfReligionRastafarian = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Prefer not to say' ";
$result = mysqli_query($db, $sql);
$numOfReligionUnknown = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Other' ";
$result = mysqli_query($db, $sql);
$numOfReligionOther = mysqli_num_rows($result);

// Gender Identity
$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Bisexual' ";
$result = mysqli_query($db, $sql);
$numOfGenderIDBisexual = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Heterosexual' ";
$result = mysqli_query($db, $sql);
$numOfGenderIDHeterosexual = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Homosexual' ";
$result = mysqli_query($db, $sql);
$numOfGenderIDHomosexual = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='prefer-not' ";
$result = mysqli_query($db, $sql);
$numOfGenderIDUnknown = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Other' ";
$result = mysqli_query($db, $sql);
$numOfGenderIDOther = mysqli_num_rows($result);

//Gender
$sql = "SELECT * FROM respondant_contact_tbl where gender='Cisgender' ";
$result = mysqli_query($db, $sql);
$numOfGenderCisgender = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Gender Non-Conforming' ";
$result = mysqli_query($db, $sql);
$numOfGenderNonConform = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Transgender' ";
$result = mysqli_query($db, $sql);
$numOfGenderTransgender = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Queer/ Questioning' ";
$result = mysqli_query($db, $sql);
$numOfGenderQueer = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='prefer-not' ";
$result = mysqli_query($db, $sql);
$numOfGenderUnknown = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Other' ";
$result = mysqli_query($db, $sql);
$numOfGenderOther = mysqli_num_rows($result);

// Sex Composition
$sql = "SELECT * FROM respondant_contact_tbl where sex='Male' ";
$result = mysqli_query($db, $sql);
$numOfSexMale = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='Female' ";
$result = mysqli_query($db, $sql);
$numOfSexFemale = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='Intersex' ";
$result = mysqli_query($db, $sql);
$numOfSexIntersex = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='prefer-not' ";
$result = mysqli_query($db, $sql);
$numOfSexUnknown = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='Other' ";
$result = mysqli_query($db, $sql);
$numOfSexOther = mysqli_num_rows($result);

//Pronous
$sql = "SELECT * FROM respondant_contact_tbl where pronouns='He' ";
$result = mysqli_query($db, $sql);
$numOfPronounsHe = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Him' ";
$result = mysqli_query($db, $sql);
$numOfPronounsHim = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='They' ";
$result = mysqli_query($db, $sql);
$numOfPronounsThey = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Them' ";
$result = mysqli_query($db, $sql);
$numOfPronounsThem = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='She' ";
$result = mysqli_query($db, $sql);
$numOfPronounsShe = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Her' ";
$result = mysqli_query($db, $sql);
$numOfPronounsHer = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Other' ";
$result = mysqli_query($db, $sql);
$numOfPronounsOther = mysqli_num_rows($result);

//Disability
$sql = "SELECT * FROM respondant_contact_tbl where disable='Yes' ";
$result = mysqli_query($db, $sql);
$numOfDisabled = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Physical disability' ";
$result = mysqli_query($db, $sql);
$numOfDisabledPhysical = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Vision Impairment' ";
$result = mysqli_query($db, $sql);
$numOfDisabledImpairment = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Deaf or hard of hearing' ";
$result = mysqli_query($db, $sql);
$numOfDisabledDeaf = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Intellectual disability' ";
$result = mysqli_query($db, $sql);
$numOfDisabledIntellectual = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Acquired brain injury' ";
$result = mysqli_query($db, $sql);
$numOfDisabledBrainInjury = mysqli_num_rows($result);

//Employment Status
$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Employed, working 1-20 hours per week' ";
$result = mysqli_query($db, $sql);
$numOfEmployed1to20 = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Employed, working 21 – 40+ or more hours per week' ";
$result = mysqli_query($db, $sql);
$numOfEmployed21to40 = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Not employed, looking for work' ";
$result = mysqli_query($db, $sql);
$numOfUnEmployedLooking = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Not employed, NOT looking for work' ";
$result = mysqli_query($db, $sql);
$numOfUnEmployedNotLooking = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Retired / Pensioner' ";
$result = mysqli_query($db, $sql);
$numOfUnEmployedRetired = mysqli_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Disabled, not able to work' ";
$result = mysqli_query($db, $sql);
$numOfUnEmployedDisabled = mysqli_num_rows($result);

?>