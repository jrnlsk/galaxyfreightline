<?php 
$conn = mysqli_connect('localhost' , 'root' , '', 'galaxy_data');
$sql = "SELECT Unqid, Assetid, Assettype, Qty, Srno, Make, Processor,	RAM, StorageCapacity, OperatingSystem, Licensekey, Location , AssignedUser, EmailId, MSOffice, Fleet, LoadLink, Antivirus, Printer, Adobe, Remarks FROM galaxy_inventory ";

$result = mysqli_query($conn , $sql);

?>







<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galaxy Inventory Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container-fluid d-flex justify-content-center bg-white bg-gradient py-1  ">
        <div class="d-flex text-center">
            <div> <img src="images/logo.png" class=" img-fluid rounded"></div>
            <header class="text-center">
                <h1 class="display-6 text-decoration-underline  fw-bold "> Galaxy Freightline Inc. </h1>
                <p class="fs-4">1580 BRITANNIA ROAD EAST MISSISSAUGA, ON L4W 1J2</p>
            </header>

        </div>
    </div>
   
<!-- Table -->
<div class="container-fluid mt-5  table-responsive text-center" style="font-size:14px; overflow:auto;">
<div class="col-4"></div>

    <table class="table table-bordered" style="width:100%;">
        <thead>
          <tr>
          <!-- <th scope="col" style="font-size: 12px;">Unqid</th> -->
            <th scope="col" style="font-size: 12px; background-color:coral; color:aliceblue;">Assetid</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Assettype</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Qty</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Srno</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Make</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Processor</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">RAM</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">StorageCapacity</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">OperatingSystem</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Licensekey</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Location</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">AssignedUser</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">EmailId</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">MSOffice</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Fleet</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">LoadLink</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Antivirus</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Printer</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Adobe</th>
            <th scope="col"style="font-size: 12px;background-color:coral; color:aliceblue;">Remarks</th>
            

          </tr>
        </thead>
       <?php 
    
    while ($row = mysqli_fetch_assoc ($result)){

       
        echo "<font color='red'> <tr>
           <th>".$row['Assetid']."</th>
        <th>".$row['Assettype']."</th>
        <th>".$row['Qty']."</th>
        <th>".$row['Srno']."</th>
        <th>".$row['Make']."</th>
        <th>".$row['Processor']."</th>
        <th>".$row['RAM']."</th>
        <th>".$row['StorageCapacity']."</th>
        <th>".$row['OperatingSystem']."</th>
        <th>".$row['Licensekey']."</th>
        <th>".$row['Location']."</th>
        <th>".$row['AssignedUser']."</th>
        <th>".$row['EmailId']."</th>
        <th>".$row['MSOffice']."</th>
        <th>".$row['Fleet']."</th>
        <th>".$row['LoadLink']."</th>
        <th>".$row['Antivirus']."</th>
        <th>".$row['Printer']."</th>
        <th>".$row['Adobe']."</th>
        <th>".$row['Remarks']."</th>


        </tr>";
     
    }    
    ?>
      </table>



</div>

<!-- Footers -->
    <div class="container-fluid bg-white position-absolute bottom-0 start-50 translate-middle-x">
        <section class="text-center p-2 text-dark">
            <footer>Copyright © 2020 Galaxy Freightline Inc. All Rights Reserved.</footer>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>