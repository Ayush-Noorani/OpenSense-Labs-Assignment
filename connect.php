<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "opensense";

$conn = mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['submit'])){
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $email=$_POST['email'];
    $linkedin=$_POST['linkedin'];
    $drupal=$_POST['drupal'];
    $position=$_POST['position'];
    $startdate=$_POST['startdate'];
    $phone=$_POST['phone'];
    $city=$_POST.['city'];
    $cityname=$_POST.['cityname'];
    $relocate=$_POST.['relocate'];
    $lastcomp=$_POST['lastcomp'];
    $comments=$_POST['comments'];

    $query = "insert into submissions (First_name, Last_name, email, linkedin, durpal, position_applied, Start_date, phone, current_city, city_name, relocate, prev_company, comments) values ('$first_name', '$last_name', '$email', '$linkedin', '$drupal', '$position', '$startdate', '$phone', '$city', '$cityname', '$relocate', '$lastcomp', '$comments')";

    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
        echo "Form submitted succesfully";
    } else{
        echo "Form NOT Submitted";
    }
}


?>