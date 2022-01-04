<?php

$con=mysqli_connect('localhost','bullion','9HM(?KrHPOiV','bullion');
if(!$con)
{
    echo'Not connected to server;
}
if(mysqli_select_db($con,bullion))
{
    echo'DB not selected';
}
if (isset($_POST['submit']))
{
    $servername = "localhost:3306";
    $username = "bullion";
    $password = "9HM(?KrHPOiV";
    $databaseName ="bulliontrade_bullion";

    $Name = $_POST['Name'];
    $mail = $_POST['E-mail'];
    $Booking = $_POST['Booking Desk Details'];
    $About = $_POST['About Us'];
    $Company = $_POST['Company GST Details'];
    $Comapmy  = $_POST['Comapmy Mail-Id'];
    $Website = $_POST['Website/Domain Requird'];
    $Buy = $_POST['Buy/Sell Rate OR Sell Rate'];
    $Promoters = $_POST['Promoters Name'];
    $Yrs  = $_POST['Yrs of Company'];
    $Bank = $_POST['Bank Name'];
    $Branch = $_POST['Branch Name'];
    $Account = $_POST['Account Number'];
    $IFSC = $_POST['IFSC Code'];
    $Calling = $_POST['Calling Number'];
    $Whats = $_POST['Whats app Number'];
    $Logo  = $_POST['Logo File'];
    $Visiting  = $_POST['Visiting Card Pic'];


    $conn = mysqli_connect("$servername","$username","$password","$databaseName");
    $query = "INSERT INTO `kyc`(`Name`, `E-mail`, `Booking Desk Details`, `About Us`, `Company GST Details`, `Company Mail-ID`, `Website/Domain Requird`, `Buy/Sell Rate OR Sell Rate`, `Promoters Name`, `Yrs of Company`, `Bank Name`, `Branch Name`, `Account Number`, `IFSC Code`, `Calling Number`, `Whats app Number`, `Logo File`, `Visiting Card Pic`) 
    VALUES 
    ([Name],[E-mail],[Booking Desk Details],[About Us],[Company GST Details],[Company Mail-ID],[Website/Domain Requird],[Buy/Sell Rate OR Sell Rate],[Promoters Name],[Yrs of Company],[Bank Name],[Branch Name],[Account Number],[IFSC Code],[Calling Number],[Whats app Number],[Logo File],[Visiting Card Pic])";

    $result = mysqli_query($connect,$query);
    if($result)
    {
        echo 'Data Inserted';
    }else{
        echo'Data Not Inserted';
    }
    mysqli_free_result($result);
    mysqli_close($connect);

}
?>

