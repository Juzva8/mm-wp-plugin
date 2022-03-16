<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php error_reporting(0);?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    td 
	{
		text-align:center;
	}
  </style>
</head>
<body>
<div class="container">
   <h4 class="text-center mt-4">User Detail</h4> 
  <div class="row">
    <?php 
		   $ch = curl_init();
		   
		   $url = "https://jsonplaceholder.typicode.com/users";
		   
		   curl_setopt($ch, CURLOPT_URL, $url);
		   // This option will return data as a string instead of direct output
		   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		   $curl_data = curl_exec($ch);
		   curl_close($ch);
		   $response_data = json_decode($curl_data);
		   $user_data = $response_data;
		   

		   
		    echo "<table class='table table-striped table-sm mt-2'>";
			 echo "<thead class='thead-dark'>";
			   echo"<tr class=''>";
						echo"<th>User ID</th>";
						echo"<th>name</th>";
						echo"<th>website</th>";
	                    echo"<th>phone</th>";
                        echo"<th>company name</th>";
                       echo"</tr>";	
				 echo "<head>";	   

                 
            foreach ($user_data as  $user) 
			   {
				
					  echo"<body>"; 
					   echo"<tr>";
						echo"<td>".$user->id.               "</td>";
	                    echo"<td>".$user->name.             "</td>";
						echo"<td>".$user->email.            "</td>";
                        echo"<td>".$user->phone.            "</td>";
                        echo"<td>".$user->company->name.    "</td>";
                       echo"</tr>";	
					  echo"</body>";   
									
			   }
			   echo"</table>";
		     ?>
		     
  </div>
</div>

</body>
</html>

