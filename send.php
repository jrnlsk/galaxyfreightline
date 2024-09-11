<?php
if(isset ($_POST ['submit'])){

    $Assetid = $_POST['Assetid'];
    $Assettype = $_POST['Assettype'];
    $Qty = $_POST['Qty'];
    $Srno = $_POST['Srno'];
    $Make = $_POST['Make'];
    $Processor = $_POST['Processor'];
    $RAM = $_POST['RAM'];
    $StorageCapacity = $_POST['StorageCapacity'];
    $OperatingSystem = $_POST['OperatingSystem'];
    $Licensekey = $_POST['Licensekey'];
    $Location = $_POST['Location'];
    $AssignedUser = $_POST['AssignedUser'];
    $EmailId = $_POST['EmailId'];
    $MSOffice = $_POST['MSOffice'];
    $Fleet = $_POST['Fleet'];
    $LoadLink = $_POST['LoadLink'];
    $Antivirus = $_POST['Antivirus'];
    $Printer = $_POST['Printer'];
    $Adobe = $_POST['Adobe'];
    $Remarks = $_POST['Remarks'];


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'galaxy_data';

$conn = mysqli_connect($host, $user, $pass ,$dbname);

$sql = "INSERT INTO galaxy_inventory (Assetid, Assettype, Qty, Srno, Make, Processor,	RAM, StorageCapacity, OperatingSystem, Licensekey, Location , AssignedUser, EmailId, MSOffice, Fleet, LoadLink, Antivirus, Printer, Adobe, Remarks) values ('$Assetid', '$Assettype', '$Qty', '$Srno', '$Make', '$Processor', '$RAM', '$StorageCapacity', '$OperatingSystem', '$Licensekey', '$Location', '$AssignedUser', '$EmailId', '$MSOffice', '$Fleet', '$LoadLink', '$Antivirus', '$Printer', '$Adobe', '$Remarks')";

mysqli_query($conn, $sql );
}



?>