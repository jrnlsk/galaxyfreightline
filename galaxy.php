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

$sql = "INSERT INTO galaxy_inventory (Assetid, Assettype, Qty, Srno, Make, Processor, RAM, StorageCapacity, OperatingSystem, Licensekey, Location , AssignedUser, EmailId, MSOffice, Fleet, LoadLink, Antivirus, Printer, Adobe, Remarks) values ('$Assetid', '$Assettype', '$Qty', '$Srno', '$Make', '$Processor', '$RAM', '$StorageCapacity', '$OperatingSystem', '$Licensekey', '$Location', '$AssignedUser', '$EmailId', '$MSOffice', '$Fleet', '$LoadLink', '$Antivirus', '$Printer', '$Adobe', '$Remarks')";

mysqli_query($conn, $sql );
}



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
    <div class="container ">
        <div class="row ">    
           <a href="home.html"> <div class="col-3  mt-5 text-light text-decoration-underline "> Back</div></a>
            <div class="col-8"><h1 class="text-light mt-4 text-decoration-underline text-end">Galaxy Inventory Form</h1></div>
        </div>
        </div>
    <section class="container my-2 w-50 text-light py-4 my-4 rounded">

        <form class="row g-3 bg-gradient p-4 rounded " method="POST" action="#" name="contact-form">

            <!--------------------------------------- Line 1-------------------------- -------->
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Asset ID</label>
                <input type="text" class="form-control" id="validationDefault01" value="Mark" name="Assetid">
            </div>
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Asset Type</label>
                <select class=" form-control form-select form-select-sm p-2" aria-label="" value="Mark"
                    name="Assettype">
                    <option selected>Select Type</option>
                    <option value="Desktop">Desktop</option>
                    <option value="Laptop">Laptop</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="validationDefault02" class="form-label">Qty</label>
                <input type="text" class="form-control" id="validationDefault02" value="Otto" name="Qty">
            </div>
            <div class="col-md-3">
                <label for="validationDefaultUsername" class="form-label">Serial No.</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationDefaultUsername"
                        aria-describedby="inputGroupPrepend2" name="Srno">
                </div>
            </div>

            <!--------------------------------------- Line 2-------------------------- -------->
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Make / Model</label>
                <input type="text" class="form-control" id="validationDefault01" value="Mark" name="Make">
            </div>
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Processor Type</label>
                <input type="text" class="form-control" id="validationDefault01" value="Mark" name="Processor">
            </div>
            <div class="col-md-3">
                <label for="validationDefault02" class="form-label">RAM </label>
                <input type="text" class="form-control" id="validationDefault02" value="Otto" name="RAM">
            </div>
            <div class="col-md-3">
                <label for="validationDefaultUsername" class="form-label">StorageCapacity</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationDefaultUsername"
                        aria-describedby="inputGroupPrepend2" name="StorageCapacity">
                </div>
            </div>

            <!--------------------------------------- Line 3-------------------------- -------->
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Operating System</label>
                <select class=" form-control form-select form-select-sm p-2" aria-label="" value="Mark"
                    name="OperatingSystem">
                    <option selected>Select Type</option>
                    <option value="Win 7 Home">Win 7 Home</option>
                    <option value="Win 7 Enterprise">Win 7 Enterprise</option>
                    <option value="Win 7 Professional">Win 7 Professional</option>
                    <option value="Win 10 Home">Win 10 Home</option>
                    <option value="Win 10 Enterprise">Win 10 Enterprise</option>
                    <option value="Win 10 Professional">Win 10 Professional</option>
                    <option value="Win 11 Home">Win 11 Home</option>
                    <option value="Win 11 Enterprise">Win 11 Enterprise</option>
                    <option value="Win 11 Professional">Win 11 Professional</option>
                </select>
            </div>
            </div>
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">License Key</label>
                <input type="text" class="form-control" id="validationDefault01" value="Mark" name="Licensekey">
            </div>
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Country / State</label>
                <select class=" form-control form-select form-select-sm p-2" aria-label="" value="Mark" name="Location">
                    <option selected>Select Type</option>
                    <option value="Mississauga - CA">Mississauga - CA</option>
                    <option value="Calgary - CA">Calgary - CA</option>
                    <option value="British Colombia - CA">British Colombia - CA</option>
                    <option value="Montreal - CA">Montreal - CA</option>
                    <option value="Amritsar - IN">Amritsar - IN</option>
                    <option value="Chicago - USA">Chicago - USA</option>
                </select>
            </div>
            <!-- <div class="col-md-3">
    <label for="validationDefaultUsername" class="form-label">Storage Capacity</label>
    <div class="input-group">
        <input type="text" class="form-control" id="validationDefaultUsername"
            aria-describedby="inputGroupPrepend2" >
    </div> -->
            </div>
            <div class="row g-3">
                <h4 class="text-decoration-underline"> User and Software Details :-</h4>
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Assigned User</label>
                    <input type="text" class="form-control" id="validationDefault01" value="Mark" name="AssignedUser">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">User Email ID</label>
                    <input type="text" class="form-control" id="validationDefault01" value="Mark" name="EmailId">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-3">
                    <label for="inputEmail4" class="form-label">MS Office</label>
                    <input type="text" class="form-control" id="validationDefault01" value="Mark" name="MSOffice">
                </div>
                <div class="col-3">
                    <label for="inputAddress2" class="form-label">Fleet Manager</label>
                    <select class=" form-control form-select form-select-sm p-2" aria-label="" value="Mark"
                        name="Fleet">
                        <option selected>Select Type</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>

                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Load Link</label>
                    <select class=" form-control form-select form-select-sm p-2" aria-label="" value="Mark"
                        name="LoadLink">
                        <option selected>Select Type</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>

                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Anti Virus</label>
                    <select class=" form-control form-select form-select-sm p-2" aria-label="" value="Mark"
                        name="Antivirus">
                        <option selected>Select Type</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>

                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Printer</label>
                    <select class=" form-control form-select form-select-sm p-2" aria-label="" value="Mark"
                        name="Printer">
                        <option selected>Select Type</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>

                    </select>
                </div>
                <div class="col-3">
                    <label for="inputAddress2" class="form-label">Adobe</label>
                    <select class=" form-control form-select form-select-sm p-2" aria-label="" value="Mark"
                        name="Adobe">
                        <option selected>Select Type</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>

                    </select>

                </div>
            </div>

            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Remarks (If Any)</label>
                <input type="text" class="form-control" id="validationDefault01" value="Mark" name="Remarks">

            </div>
            </div>
            <div class="col-12 text-center">
                <input type="submit" class="btn btn-primary " id="submit" name="submit"></input>
            </div>

        </form>
        <!-- <script src="googlesheet.js"></script> -->
    </section>

    <div class="container-fluid bg-white">
        <section class="text-center p-2 text-dark">
            <footer>Copyright © 2020 Galaxy Freightline Inc. All Rights Reserved.</footer>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>