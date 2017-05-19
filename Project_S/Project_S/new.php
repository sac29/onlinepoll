<?php
$answer=$_POST["option"];
session_start();
$_SESSION["age"];
$_SESSION["gen"];
$_SESSION["stat"];



  
        	      
 if( $answer=="namo"){ 
			   
			     if($_SESSION["gen"]=="male"){
			     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			    $sql2="SELECT Male FROM `result` WHERE Person='Narendra Modi'";
			
				$res=mysqli_query($conn,$sql2);
				$row=mysqli_fetch_array($res);
				$abc=$row[0]+1;
				
			     $sql3="UPDATE result SET Male=$abc WHERE Person='Narendra Modi'";
				 mysqli_query($conn,$sql3);
				 
				 
                                 }
					 else{
					$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Female FROM `result` WHERE Person='Narendra Modi'";
			        $res=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res);
				   $abc=$row[0]+1;
				  
			       $sql3="UPDATE result SET Female=$abc WHERE Person='Narendra Modi'";
				   mysqli_query($conn,$sql3);
				  
						}
						if($_SESSION["stat"]=="Andhra Pradesh"){
						$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Andhra_Pradesh FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				   
			        $sql3="UPDATE result SET Andhra_Pradesh=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    
						   }
						   else if($_SESSION["stat"]=="Arunachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Arunachal_Pradesh FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    
			        $sql3="UPDATE result SET Arunachal_Pradesh=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    
						   }
						   else if($_SESSION["stat"]=="Assam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Assam FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Assam=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Bihar"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Bihar FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Bihar=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Goa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Goa FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Goa=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Gujrat"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Gujrat FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Gujrat=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Haryana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Haryana FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Haryana=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Himachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Himachal_Pradesh FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Himachal_Pradesh=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jammu and Kashmir"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jammu_and_Kashmir FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jammu_and_Kashmir=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jharkhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jharkhand FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jharkhand=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Kerala"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Kerala FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Kerala=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Madhya Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Madhya_Pradesh FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Madhya_Pradesh=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Maharashtra"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Maharashtra FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Maharashtra=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Manipur"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Manipur FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Manipur=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Meghalaya"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Meghalaya FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Meghalaya=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Mizoram"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Mizoram FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Mizoram=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Nagaland"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Nagaland FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Nagaland=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Orissa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Orissa FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Orissa=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Punjab"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Punjab FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Punjab=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Rajasthan"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Rajasthan FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Rajasthan=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Sikkam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Sikkam FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Sikkam=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Tamil Nadu"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tamil_Nadu FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tamil_Nadu=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Telangana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tripura FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tripura=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttar Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttar_Pradesh FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttar_Pradesh=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttarakhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttarakhand FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttarakhand=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="West Bengal"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT West_Bengal FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET West_Bengal=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   if($_SESSION["age"]>=18 || $_SESSION["age"]<=35){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 18_35 FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 18_35=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=36 || $_SESSION["age"]<=60){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT A36_60 FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET A36_60=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=61){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 60_above FROM `result` WHERE Person='Narendra Modi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 60_above=$abc WHERE Person='Narendra Modi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   
}


 else if( $answer=="rahul"){ 
			   
			     if($_SESSION["gen"]=="male"){
			     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			    $sql2="SELECT Male FROM `result` WHERE Person='Rahul Gandhi'";
			
				$res=mysqli_query($conn,$sql2);
				$row=mysqli_fetch_array($res);
				$abc=$row[0]+1;
				echo $abc;
			     $sql3="UPDATE result SET Male=$abc WHERE Person='Rahul Gandhi'";
				 mysqli_query($conn,$sql3);
				 echo "Done";
				 
                                 }
					 else{
					$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Female FROM `result` WHERE Person='Rahul Gandhi'";
			        $res=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res);
				   $abc=$row[0]+1;
				   echo $abc;
			       $sql3="UPDATE result SET Female=$abc WHERE Person='Rahul Gandhi'";
				   mysqli_query($conn,$sql3);
				   echo "Done";
						}
						if($_SESSION["stat"]=="Andhra Pradesh"){
						$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Andhra_Pradesh FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Andhra_Pradesh=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Arunachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Arunachal_Pradesh FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Arunachal_Pradesh=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Assam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Assam FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Assam=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Bihar"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Bihar FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Bihar=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Goa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Goa FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Goa=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Gujrat"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Gujrat FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Gujrat=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Haryana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Haryana FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Haryana=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Himachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Himachal_Pradesh FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Himachal_Pradesh=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jammu and Kashmir"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jammu_and_Kashmir FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jammu_and_Kashmir=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jharkhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jharkhand FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jharkhand=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Kerala"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Kerala FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Kerala=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Madhya Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Madhya_Pradesh FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Madhya_Pradesh=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Maharashtra"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Maharashtra FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Maharashtra=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Manipur"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Manipur FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Manipur=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Meghalaya"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Meghalaya FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Meghalaya=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Mizoram"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Mizoram FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Mizoram=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Nagaland"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Nagaland FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Nagaland=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Orissa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Orissa FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Orissa=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Punjab"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Punjab FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Punjab=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Rajasthan"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Rajasthan FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Rajasthan=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Sikkam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Sikkam FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Sikkam=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Tamil Nadu"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tamil_Nadu FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tamil_Nadu=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Telangana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tripura FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tripura=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttar Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttar_Pradesh FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttar_Pradesh=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttarakhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttarakhand FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttarakhand=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="West Bengal"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT West_Bengal FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET West_Bengal=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   if($_SESSION["age"]>=18 || $_SESSION["age"]<=35){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 18_35 FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 18_35=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=36 || $_SESSION["age"]<=60){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT A36_60 FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET A36_60=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=61){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 60_above FROM `result` WHERE Person='Rahul Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 60_above=$abc WHERE Person='Rahul Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   
}


else if( $answer=="arvind"){ 
			   
			     if($_SESSION["gen"]=="male"){
			     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			    $sql2="SELECT Male FROM `result` WHERE Person='Arvind Kejriwal'";
			
				$res=mysqli_query($conn,$sql2);
				$row=mysqli_fetch_array($res);
				$abc=$row[0]+1;
				echo $abc;
			     $sql3="UPDATE result SET Male=$abc WHERE Person='Arvind Kejriwal'";
				 mysqli_query($conn,$sql3);
				 echo "Done";
				 
                                 }
					 else{
					$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Female FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res);
				   $abc=$row[0]+1;
				   echo $abc;
			       $sql3="UPDATE result SET Female=$abc WHERE Person='Arvind Kejriwal'";
				   mysqli_query($conn,$sql3);
				   echo "Done";
						}
						if($_SESSION["stat"]=="Andhra Pradesh"){
						$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Andhra_Pradesh FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Andhra_Pradesh=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Arunachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Arunachal_Pradesh FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Arunachal_Pradesh=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Assam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Assam FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Assam=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Bihar"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Bihar FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Bihar=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Goa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Goa FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Goa=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Gujrat"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Gujrat FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Gujrat=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Haryana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Haryana FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Haryana=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Himachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Himachal_Pradesh FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Himachal_Pradesh=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jammu and Kashmir"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jammu_and_Kashmir FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jammu_and_Kashmir=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jharkhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jharkhand FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jharkhand=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Kerala"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Kerala FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Kerala=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Madhya Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Madhya_Pradesh FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Madhya_Pradesh=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Maharashtra"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Maharashtra FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Maharashtra=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Manipur"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Manipur FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Manipur=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Meghalaya"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Meghalaya FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Meghalaya=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Mizoram"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Mizoram FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Mizoram=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Nagaland"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Nagaland FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Nagaland=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Orissa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Orissa FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Orissa=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Punjab"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Punjab FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Punjab=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Rajasthan"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Rajasthan FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Rajasthan=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Sikkam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Sikkam FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Sikkam=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Tamil Nadu"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tamil_Nadu FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tamil_Nadu=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Telangana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tripura FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tripura=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttar Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttar_Pradesh FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttar_Pradesh=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttarakhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttarakhand FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttarakhand=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="West Bengal"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT West_Bengal FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET West_Bengal=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   if($_SESSION["age"]>=18 || $_SESSION["age"]<=35){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 18_35 FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 18_35=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=36 || $_SESSION["age"]<=60){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT A36_60 FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET A36_60=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=61){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 60_above FROM `result` WHERE Person='Arvind Kejriwal'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 60_above=$abc WHERE Person='Arvind Kejriwal'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   
}


else if( $answer=="priyanka"){ 
			   
			     if($_SESSION["gen"]=="male"){
			     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			    $sql2="SELECT Male FROM `result` WHERE Person='Priyanka Gandhi'";
			
				$res=mysqli_query($conn,$sql2);
				$row=mysqli_fetch_array($res);
				$abc=$row[0]+1;
				echo $abc;
			     $sql3="UPDATE result SET Male=$abc WHERE Person='Priyanka Gandhi'";
				 mysqli_query($conn,$sql3);
				 echo "Done";
				 
                                 }
					 else{
					$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Female FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res);
				   $abc=$row[0]+1;
				   echo $abc;
			       $sql3="UPDATE result SET Female=$abc WHERE Person='Priyanka Gandhi'";
				   mysqli_query($conn,$sql3);
				   echo "Done";
						}
						if($_SESSION["stat"]=="Andhra Pradesh"){
						$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Andhra_Pradesh FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Andhra_Pradesh=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Arunachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Arunachal_Pradesh FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Arunachal_Pradesh=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Assam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Assam FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Assam=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Bihar"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Bihar FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Bihar=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Goa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Goa FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Goa=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Gujrat"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Gujrat FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Gujrat=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Haryana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Haryana FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Haryana=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Himachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Himachal_Pradesh FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Himachal_Pradesh=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jammu and Kashmir"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jammu_and_Kashmir FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jammu_and_Kashmir=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jharkhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jharkhand FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jharkhand=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Kerala"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Kerala FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Kerala=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Madhya Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Madhya_Pradesh FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Madhya_Pradesh=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Maharashtra"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Maharashtra FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Maharashtra=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Manipur"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Manipur FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Manipur=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Meghalaya"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Meghalaya FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Meghalaya=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Mizoram"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Mizoram FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Mizoram=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Nagaland"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Nagaland FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Nagaland=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Orissa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Orissa FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Orissa=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Punjab"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Punjab FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Punjab=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Rajasthan"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Rajasthan FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Rajasthan=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Sikkam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Sikkam FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Sikkam=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Tamil Nadu"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tamil_Nadu FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tamil_Nadu=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Telangana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tripura FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tripura=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttar Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttar_Pradesh FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttar_Pradesh=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttarakhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttarakhand FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttarakhand=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="West Bengal"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT West_Bengal FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET West_Bengal=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   if($_SESSION["age"]>=18 || $_SESSION["age"]<=35){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 18_35 FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 18_35=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=36 || $_SESSION["age"]<=60){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT A36_60 FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET A36_60=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=61){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 60_above FROM `result` WHERE Person='Priyanka Gandhi'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 60_above=$abc WHERE Person='Priyanka Gandhi'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   
}


else if( $answer=="akhilesh"){ 
			   
			     if($_SESSION["gen"]=="male"){
			     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			    $sql2="SELECT Male FROM `result` WHERE Person='Akhilesh Yadav'";
			
				$res=mysqli_query($conn,$sql2);
				$row=mysqli_fetch_array($res);
				$abc=$row[0]+1;
				echo $abc;
			     $sql3="UPDATE result SET Male=$abc WHERE Person='Akhilesh Yadav'";
				 mysqli_query($conn,$sql3);
				 echo "Done";
				 
                                 }
					 else{
					$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Female FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res);
				   $abc=$row[0]+1;
				   echo $abc;
			       $sql3="UPDATE result SET Female=$abc WHERE Person='Akhilesh Yadav'";
				   mysqli_query($conn,$sql3);
				   echo "Done";
						}
						if($_SESSION["stat"]=="Andhra Pradesh"){
						$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Andhra_Pradesh FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Andhra_Pradesh=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Arunachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Arunachal_Pradesh FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Arunachal_Pradesh=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Assam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Assam FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Assam=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Bihar"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Bihar FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Bihar=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Chhattisgarh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Chhattisgarh FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Chhattisgarh=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Goa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Goa FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Goa=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Gujrat"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Gujrat FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Gujrat=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Haryana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Haryana FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Haryana=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Himachal Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Himachal_Pradesh FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Himachal_Pradesh=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jammu and Kashmir"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jammu_and_Kashmir FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jammu_and_Kashmir=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Jharkhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Jharkhand FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Jharkhand=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Kerala"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Kerala FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Kerala=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Madhya Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Madhya_Pradesh FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Madhya_Pradesh=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Maharashtra"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Maharashtra FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Maharashtra=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Manipur"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Manipur FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Manipur=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Meghalaya"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Meghalaya FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Meghalaya=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Mizoram"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Mizoram FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Mizoram=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Nagaland"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Nagaland FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Nagaland=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Orissa"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Orissa FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Orissa=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Punjab"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Punjab FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Punjab=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Rajasthan"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Rajasthan FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Rajasthan=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Sikkam"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Sikkam FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Sikkam=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Tamil Nadu"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tamil_Nadu FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tamil_Nadu=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Telangana"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Tripura FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Tripura=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttar Pradesh"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttar_Pradesh FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttar_Pradesh=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="Uttarakhand"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT Uttarakhand FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET Uttarakhand=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   else if($_SESSION["stat"]=="West Bengal"){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT West_Bengal FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET West_Bengal=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   if($_SESSION["age"]>=18 || $_SESSION["age"]<=35){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 18_35 FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 18_35=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=36 || $_SESSION["age"]<=60){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT A36_60 FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET A36_60=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   } 
						   else if($_SESSION["age"]>=61){
						     $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			        $sql2="SELECT 60_above FROM `result` WHERE Person='Akhilesh Yadav'";
			        $res1=mysqli_query($conn,$sql2);
				    $row=mysqli_fetch_array($res1);
				    $abc=$row[0]+1;
				    echo $abc;
			        $sql3="UPDATE result SET 60_above=$abc WHERE Person='Akhilesh Yadav'";
				    mysqli_query($conn,$sql3);
				    echo "Done";
						   }
						   
}


?>