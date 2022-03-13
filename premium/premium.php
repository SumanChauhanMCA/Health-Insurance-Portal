<html>    
    <head>    
        <title>Payment Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
            <li style="float:right;"><a href="../index.php">
            <img src="../home.png" width="40px" style="margin-top: 25px;">    
        </a></li>   
        </ul>
        <h2>Premium Registration</h2>    
        <form name = "form1" action='view.php' method = 'POST' enctype = "multipart/form-data" >    
			<div class = "container">
				<div class = "form_group" style="flex-direction: column !important">    
                    <label>Policy Number:</label>    
                    <input type = "text" name = "pol" value = "" required pattern="[0-9]{9}" />
					<h5>Enter 9 digit number</h5>
                </div>
				</div>
                <div class="btn-container">
                    <button type = "submit">Submit</button>   
                    <button type = "reset">Reset</button>
                </div>
				 
            </div>    
        </form>    
    </body>    
</html>    