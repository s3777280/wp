<?php
  session_start();

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


    if (!empty($_POST['movie']['day']))
        $_SESSION['movie'] = $_POST['movie'];
    else
        $generalErr = "Please choose a time and date";

    if ($_POST['total'] != 0) {
        $total = $_POST['total'];
        $_SESSION['total'] = $total;
        $_SESSION['seats'] = $_POST['seats'];
    } else
        $generalErr = "At least 1 ticket is required";


  // Name
  $name = testInput($_POST['cust']['name']);
  if (empty($_POST['cust']['name'])){
    $nameErr = "Name is required";
  }else{
    // $name = testInput($_POST["custname"]);
    if (!preg_match("/^[a-zA-Z \-.']{1,100}$/", $name)){
    $nameErr = "Only western letters and spaces are allowed";
  }
  }
  
  //Mail
  $mail = testInput($_POST['cust']['email']);
  if (empty($_POST['cust']['email'])){
    $mailErr = "Mail is required";
  }else{
    // $mail = testInput($_POST["custemail"]);
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $mailErr = "Only valid mail account is allowed (Delete the white space before your account name in the input box)";
  }
  }
  
  
  //Mobile
  $mobile = testInput($_POST['cust']['mobile']);
  if (empty($_POST['cust']['mobile'])){
      $mobileErr = "Mobile number is required";
  }else{
    // $mobile = testInput($_POST["mobilenumber"]);
    if (!preg_match("/^(\(04\)|04|\+614)( ?[0-9]){8}$/", $mobile)){
      $mobileErr = "Australian number only";
  }
  }
  
  //Credit card
  $card = testInput($_POST['cust']['card']);
  if (empty($_POST['cust']['card'])){
      $cardErr = "Card is required";
  }else{
    // $card = testInput($_POST["creditcard"]);
    if (!preg_match("/^( ?\d){14,19}$/", $card)){
      $cardErr = "Only numbers and spaces are allowed";
  }
  }
  if (empty($nameErr . $mobileErr . $cardErr . $mailErr .$gen )) {
    header("Location: receipt.php");
  }
// Redirect testing
// if ( (!preg_match("/^[a-zA-Z \-.']{1,100}$/", $name)) && !filter_var($mail, FILTER_VALIDATE_EMAIL) && (!preg_match("/^(\(04\)|04|\+614)( ?[0-9]){8}$/", $mobile)) && (!preg_match("/^( ?\d){14,19}$/", $card)) ){
//   header("Location: receipt.php");
// }


}



 

  

?>