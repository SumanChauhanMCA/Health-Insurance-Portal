<?php    
include "../connection.php";
    
    
$sql = "select * from agent";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
		<link href = "registration.css" type = "text/css" rel = "stylesheet" />  
	    <link href = "../style.css" type = "text/css" rel = "stylesheet" /> 
		<ul>
		<li style="float:right;"><a href="../index.php">
            <img src="../home.png" width="40px" style="margin-top: 25px;">    
        </a></li>    
		</ul>		
		<h2><center>Agents Data</center></h2>
		
		<table width = "100%" class="table-container" cellspacing = "1" cellpadding = "1">    
            <tr style="background: #ffffff36">    
                <td>Agent Code</td>    
                <td>Agent Name</td>    
                <td>DOB</td>    
                <td>Address</td>    
                <td>Pincode</td>    
                <td>Branch</td>    
				<td>Contact Number</td>
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Agent_code;?>  
				</td>  
				<td>  
					<?php echo $row->Agent_name;?>  
				</td>  
				<td>  
					<?php echo $row->DOB;?>  
				</td>  
				<td>  
					<?php echo $row->Address;?>  
				</td>  
				<td>  
					<?php echo $row->Pincode;?>  
				</td>  
				<td>  
					<?php echo $row->Branch;?>  
				</td>  
				<td> 
					<?php echo $row->Contact_Num;?>  
				</td>  
				<td> <a class="link" href="delete.php?id=<?php echo $row->Agent_code;?>" onclick="return confirm('Are You Sure')">Delete    
				</a>
				</td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>