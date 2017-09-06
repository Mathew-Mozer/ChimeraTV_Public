 <?php

 $connect = mysqli_connect("localhost", "cmatrun", "Vkcd5*80", "chimera_mat");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
				$item1 = mysqli_real_escape_string($connect, $data[0]);//area
        $item2 = mysqli_real_escape_string($connect, $data[1]);//name
				 $item3 = mysqli_real_escape_string($connect, $data[2]);//empN  
				 $item4 = mysqli_real_escape_string($connect, $data[3]);//bio
				 $item5 = mysqli_real_escape_string($connect, $data[4]);//date
				 $item6 = mysqli_real_escape_string($connect, $data[5]);//day
				 $item7 = mysqli_real_escape_string($connect,toMysqlDateTime($data[4],$data[6]));//timein
				 $item8 = mysqli_real_escape_string($connect,toMysqlDateTime($data[4],$data[7]));//timeout
				 $item9 = mysqli_real_escape_string($connect, $data[8]);//remarks
				 $item10 = mysqli_real_escape_string($connect, $data[9]);//shift
				 $item11 = mysqli_real_escape_string($connect, numberCheck($data[10]));//reghrs
				 $item12 = mysqli_real_escape_string($connect, numberCheck($data[11]));//others
				 

                $query = "INSERT into records(area, name, empN, bio, timein, timeout, remarks, shift, reghrs, others)
							values	('$item1','$item2','$item3','$item4','$item7','$item8','$item9','$item10','$item11','$item12')";
       if (!mysqli_query($connect,$query))
       {
           echo("Error description: " . mysqli_error($connect));
       }

   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
 function toMysqlDateTime($date, $time)
 {
     $newdate = explode("/", $date);
     $tmpdata = $newdate[2] . "/" . $newdate[0] . "/" . $newdate[1]." ".$time.':00';
     return $tmpdata;
 }
function numberCheck($number){
	if(is_numeric($number)){
		return $number;
	}else{
		return 0;
	}
}
?>  

<!DOCTYPE html>  
<html>  
 <head>  
  <title>DDAP Import CSV</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 </head>  
 <body>  
  <h3 align="center"></h3><br />
  <form method="post" enctype="multipart/form-data">
   <div align="center">  
    <label>Select CSV File:</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
  </form>
 </body>  
</html>