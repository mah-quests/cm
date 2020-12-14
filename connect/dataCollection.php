<?php

include 'connect.php';

// Total number of agents registered on the app
$sql = "SELECT * FROM mobiliser_tbl";
$result = mysqli_query($db, $sql);
$numOfRegisteredMobilisers = mysqli_num_rows($result);


$sql = "SELECT * FROM summary_tbl";
$result = mysqli_query($db, $sql);
$numOfCompletedSurveys = mysqli_num_rows($result);


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

// Stats for today

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


// Stats for yesterday
$sql = "SELECT count(DISTINCT mobiliser_id) FROM summary_tbl where date(created_date)=CURDATE() - interval 1 day";
$result = mysqli_query($db, $sql);
$numOfActiveAgentsYesterday = mysqli_num_rows($result);

?>