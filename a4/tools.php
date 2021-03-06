<?php
  session_start();

// Print POST,GET,SESSION
  function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
       return $ret;
  else 
      echo $ret; 
}

// Print page code
function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
         echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}

//Protect input
function testInput($data){
  $data = htmlspecialchars($data);
  $data = stripslashes($data);
  return $data;
}

// if(isset($_POST['submit'])){

//Validate Text input
if ($_SERVER["REQUEST_METHOD"] == "POST"){


  $expiryMonth = $_POST['cust']['expiryMonth'];
  $expiryYear = $_POST['cust']['expiryYear'];
  if ($expiryMonth == date("m") && $expiryYear == date("Y") ){
    $expiryErr = "Expiry date can not be within a month of the purchase date";
  }
//movie name
  if (!empty($_POST['movie']['name'])) {
    $_SESSION['movie']['name'] =  $_POST['movie']['name'];
  } else 
   $movieErr = "Choose at least one movie to book the ticket";
// movie time
   if (($_POST['movie']['day'] !== "Day")) {
  
    $_SESSION['movie']['day'] = $_POST['movie']['day'];
  } else 
   $movieErr1 = "Choose at least one day to book the ticket";
// seat

  foreach ($_POST['seats'] as $type => $numberOfSeat) {
      if ((int)$numberOfSeat > 0 && $numberOfSeat != "Please select") {
        $_SESSION['seats'] = $_POST['seats'];
      break;
      }
  }
  if (is_null($_SESSION['seats'])) {
    $seatErr = "choose at least one seat";
  }

  // //Seats Input Validation
  // $seatsInput = testInput($_POST['seats']['STA']);
  // if ($seatsInput != [0,10] ){
  //   $seatErr = "Stop hacking our website";
  // }

  // Name
  $name = testInput($_POST['cust']['name']);
  if (empty($_POST['cust']['name'])){
    $nameErr = "Name is required";
  }else{
    // $name = testInput($_POST["custname"]);
    if (!preg_match("/^[a-zA-Z \-.']{1,100}$/", $name)){
    $nameErr = "Only western letters and spaces are allowed (No the white space before your account name in the input box)";
  }
  }
  
  //Mail
  $mail = testInput($_POST['cust']['email']);
  if (empty($_POST['cust']['email'])){
    $mailErr = "Mail is required";
  }else{
    // $mail = testInput($_POST["custemail"]);
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $mailErr = "Only valid mail account is allowed (No the white space before your email in the input box)";
  }
  }
  
  
  //Mobile
  $mobile = testInput($_POST['cust']['mobile']);
  if (empty($_POST['cust']['mobile'])){
      $mobileErr = "Mobile number is required";
  }else{
    // $mobile = testInput($_POST["mobilenumber"]);
    if (!preg_match("/^(\(04\)|04|\+614)( ?[0-9]){8}$/", $mobile)){
      $mobileErr = "Australian number only (No the white space before your mobile phone in the input box)";
  }
  }
  
  //Credit card
  $card = testInput($_POST['cust']['card']);
  if (empty($_POST['cust']['card'])){
      $cardErr = "Card is required";
  }else{
    // $card = testInput($_POST["creditcard"]);
    if (!preg_match("/^( ?\d){14,19}$/", $card)){
      $cardErr = "Only numbers and spaces are allowed (No the white space before your mobile phone in the input box)";
  }
  }
  // direct to Receipt page
  if (empty($nameErr . $mobileErr . $cardErr . $mailErr  .$movieErr .$movieErr1 .$expiryErr .$seatErr  )) {
    header("Location: receipt.php");
  }

}

// create array of seat and price
$seatArray = [
  'STA' => "Standard Adult",
  'STP' => "Standard Concession",
  'STC' => "Standard Children",
  'FCA' => "First Class Adult",
  'FCP' => "First Class Concession",
  'FCC' => "First Class Children",
];

$priceArray = [
'STA' => [14, 19.8],
'STP' => [12.5, 17.5],
'STC' => [11, 15.3],
'FCA' => [24, 30],
'FCP' => [22.5, 27],
'FCC' => [21, 24],

];

  

?>