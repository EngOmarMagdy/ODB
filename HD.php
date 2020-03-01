<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf=8">
        <title> Submit Report </title>
        <link rel="stylesheet" href="css/Hdc.css">
        <style> </style>
    </head>
    <body>
        <div class="background">
        <img src="css/Picture/logo.png">   
        <div class="container">
        <h1> Submit Reports </h1>    
            <form name="Report" action="SaveHD.php" method="POST">
                
                <div class="sec">
                    <label> Engineer ID: </label>
                    <input type="Text" name="engid" required  >
                </div>
                
                <div class="sec">
                <label> Engineer Name: </label>
                <input type="Text" name="engname" required >
                </div>
                
                <div class="sec">
                <label> Priority: </label>
                <select name= "priority" required>
                    <option >  </option>
                    <option > priority 1 </option>
                    <option > priority 2 </option>
                    <option > priority 3 </option>
                    <option > priority 4 </option>
                    <option > priority 5 </option>
                </select>
                </div>
                
                <div class="sec">
                <label class="TX"> Problem Description: </label>
                <textarea name="problem" required=> </textarea>
                </div>
                
                <div class="sec">
                <label class="TX"> Action: </label>
                <textarea name="action" required=> </textarea>
                </div>
                
                <div class="sec">
                <label> User Status: </label>
                <select name= "status" required >
                    <option >  </option>
                    <option > Open </option>
                    <option > Close </option>
                    <option > Escalated </option>
                    <option > Pending </option>
                </select>
                </div>
                
                <div class="sec">
                <label> Escalation Proses: </label>
                <select name= "escalation" >
                    <option >                </option>
                    <option > CSC Manger     </option>
                    <option > FM Manger      </option>
                    <option > CSC Leader     </option>
                    <option > Project Manger </option>
                </select>
                </div>
                
                <div class="sec">
                <label> Equipment Furniture: </label>
                <select name= "equipment" >
                    <option >  </option>
                    <option > Server </option>
                    <option > Switch </option>
                    <option > Router </option>
                </select>
                </div>
                
                <div class="sec">
                <label> Type: </label>
                <input type="Text" name="type" >
                </div>
                
                <div class="sec">
                <label> Serial: </label>
                <input type="Text" name="serial" >
                </div>
                
                <div class="sec">
                <label> Failure" </label>
                <input type="Text" name="failure" >
                </div>
                
                <div class="sec">
                <label> Site Name: </label>
                <input type="Text" name="site" required >
                </div>
                
                <div class="sec">
                <label> Codes: </label>
                <input type="Text" name="codes" >
                </div>
                
                <div class="sec">
                <label> Governorate: </label>
                <select name= "governorate" required >
                    <option >  </option>
                    <option > Alexandria </option>
                    <option > Aswan </option>
                    <option > Asyut </option>
                    <option > Beheira </option>
                    <option > Beni Suef </option>
                    <option > Cairo </option>
                    <option > Dakahlia </option>
                    <option > Damietta </option>
                    <option > Faiyum </option>
                    <option > Gharbia </option>
                    <option > Giza </option>
                    <option > Ismailia </option>
                    <option > Kafr El Sheikh </option>
                    <option > Luxor </option>
                    <option > Matruh </option>
                    <option > Minya </option>
                    <option > Monufia </option>
                    <option > New Valley </option>
                    <option > North Sinai </option>
                    <option > Port Said </option>
                    <option > Qalyubia </option>
                    <option > Qena </option>
                    <option > Red Sea </option>
                    <option > Sharqia </option>
                    <option > Sohag </option>
                    <option > South Sinai </option>
                    <option > Suez </option>
                </select>
                </div>
                
                <div class="sec">
                <label> City: </label>
                <input type="Text" name="city" >
                </div>
                
                <div class="sec">
                <label> Building: </label>
                <input type="Text" name="building" >
                </div>
                
                <div class="sec">
                <label> Email: </label>
                <input type="email" name="email" >
                </div>
                
                <div class="sec">
                <label> Phone: </label>
                <input type="tel" name="phone" required >
                </div>
                
                <div class="submit-d">
                    <input type="Submit" class="submit"> 
                </div>
                
                <div class="reset-d">
                    <input type="reset" value="Reset" class="reset">  
                </div>
            </form>
        </div>
        </div>
    </body>
    