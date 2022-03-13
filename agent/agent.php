<html>    
    <head>    
        <title>Agent Registration Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 
		<ul>
		<li style="float:right;"><a href="../index.php">
            <img src="../home.png" width="40px" style="margin-top: 25px;">    
        </a></li>    
		</ul>
		<h2>Agent Registration</h2>    



        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
				<div class = "form_group">    
                    <label>Agent Code:</label>    
                    <input type = "text" name = "Agent_code" required pattern="[A-Z a-z]{2}[0-9]{10}"/> 
                    <h6>Eg : BA0000231261</h6>   
                </div>
                <div class = "form_group">    
                    <label>Name:</label>    
                    <input type = "text" name = "Agent_Name" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Date of Birth:	</label><input type = "date" name = "DOB" value = "" required />
                </div>
				<div class = "form_group">    
                    <label>Address:</label>    
                    <input type = "text" name = "Address" value = "" required />    
                </div>
				<div class = "form_group">    
                    <label>Pincode: </label>    
                    <input type = "text" name = "Pincode" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Branch: </label>    
                    <input type = "text" name = "Branch" value = ""  required" />    
                </div>
				
				<div class = "form_group">    
                    <label>Contact Number: </label>    
                    <input type = "text" name = "Contact_Number" value = ""  required pattern="[0-9]{10}" />    
                </div>
                <div class="btn-container">
                    <button type = "submit">Submit</button>   
                    <button type = "reset">Reset</button>
                </div>
                   
              
            </div>    
        </form>    
    </body>    
</html>    