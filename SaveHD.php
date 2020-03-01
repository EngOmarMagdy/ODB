<?php
    
    $engid = $_POST['engid'];
    $engname = $_POST['engname'];
    $priority = $_POST['priority'];
    $problem = $_POST['problem'];
    $action = $_POST['action'];
    $status = $_POST['status'];
    $escalation = $_POST['escalation'];
    $equipment = $_POST['equipment'];
    $type = $_POST['type'];
    $serial = $_POST['serial'];
    $failure = $_POST['failure'];
    $site = $_POST['site'];
    $codes = $_POST['codes'];
    $governorate = $_POST['governorate'];
    $city = $_POST['city'];
    $building = $_POST['building'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=help_desk', 'root', '');
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $q = "insert into hd (Engineer_ID, Engineer_Name, Priority, Problem_Description, Actions, Escalation_Proses, User_status, Equipment_Furniture, Type, Serial, Failure, Site_Name, codes, Governorate, City, Building, Email, Phone)
        value ('$engid', '$engname', '$priority', '$problem', '$action', '$escalation', '$status', '$equipment', '$type', '$serial', '$failure', '$site', '$codes', '$governorate', '$city', '$building', '$email', '$phone')";
        $db ->exec($q);
        
    }
    catch(pdoexception $f)
    {
        echo "ERROR <br>";
        echo $f->getmessage();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8">
        <title> status </title>
        <link rel="stylesheet" href="css/SubmitHDc.css">
        <style> </style>
    </head>
    <body>
        <div class="background">
            <img src="css/Picture/logo.png">
            <div class="container">
                <h1> REPORT SUBMITTED SUCCESSFULLY </h1>
                
                <div>
                    <h2> Engineer ID: </h2>
                    <p> <?php echo $engid ?> </p>
                </div>
                
                <div>
                    <h2> Engineer Name: </h2>
                    <p> <?php echo $engname ?> </p>
                </div>
                
                <div>
                    <h2> Priority: </h2>
                    <p> <?php echo $priority ?> </p>
                </div>
                
                <div>
                    <h2> Problem Description: </h2>
                    <p> <?php echo $problem ?> </p>
                </div>
                
                <div>
                    <h2> Actions: </h2>
                    <p> <?php echo $action ?> </p>
                </div>
                
                <div>
                    <h2> User status: </h2>
                    <p> <?php echo $status ?> </p>
                </div>
                
                <div>
                    <h2> Escalation Proses: </h2>
                    <p> <?php echo $escalation ?> </p>
                </div>
                
                <div>
                    <h2> Equipment Furniture: </h2>
                    <p> <?php echo $equipment ?> </p>
                </div>
                
                <div>
                    <h2> Type: </h2>
                    <p> <?php echo $type ?> </p>
                </div>
                
                <div>
                    <h2> Serial: </h2>
                    <p> <?php echo $serial ?> </p>
                </div>
                
                <div>
                    <h2> Failure: </h2>
                    <p> <?php echo $failure ?> </p>
                </div>
                
                <div>
                    <h2> Site Name: </h2>
                    <p> <?php echo $site ?> </p>
                </div>
                
                <div>
                    <h2> codes: </h2>
                    <p> <?php echo $codes ?> </p>
                </div>
                
                <div>
                    <h2> Governorate: </h2>
                    <p> <?php echo $governorate ?> </p>
                </div>
                
                <div>
                    <h2> City: </h2>
                    <p> <?php echo $city ?> </p>
                </div>
                
                <div>
                    <h2> Building: </h2>
                    <p> <?php echo $building ?> </p>
                </div>
                
                <div>
                    <h2> Email: </h2>
                    <p> <?php echo $email ?> </p>
                </div>
                
                <div>
                    <h2> Phone: </h2>
                    <p> <?php echo $phone ?> </p>
                </div>
            </div>
        </div>
    </body>
</html>