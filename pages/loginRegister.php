
 
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
Online Rewarding System Resisteration form
</title>
<link href="../css/bootstrap.css"rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="../css/styleLogin.css"rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="row1 header  bg-wht">
	<div class='container bg-wht' >
		<div class="row " style="padding-top:20px;" >
		<!--Added href and include conn file to redirect index page for bug no SMC-2572-->
			<div class="col-md-7 ">
						   <a href="#" style="display:flex; align-items: center;"> 
							<img src="../Assets/logo/logo.png" style="width:110px;" />
							<h4>Online Rewarding System</h4> 
							</a>
			</div>
			<div class="col-md-3" >
				<div class="btn-group">
				  <a href = "./login.php"><button type="button" class="btn btn-primary">
					Login</span>
				  </button></a>
				
				</div>					
			</div>     
		</div>
	</div>
</div>
	<style>
		.bgwhite {
			background-color: #fff;
		}

		.padtop10 {
			padding-top: 10px;
		}

		.red {
			color: #f00;
		}

		tr {
			padding-top: 10px;
		}

		.green {
		   color :#008000;
		}
		.green1 {
			color :#125e20;
		}
		.panel-info
		{
			width:1000px;
		}
		h4 {
		text-align: center;
		}
	</style>
	<script type="text/javascript">// < ![CDATA[
		$(document).ready(function (){
			$("#user_type").change(function (){			
		var str = $("#user_type").val();
		if(str =="mentor" || str =="sponsor")
		{ 
	document.getElementById("select_college_name").required = false;
		}
		else{
			
	document.getElementById("select_college_name").required = true;
		}
			});
	
		});
	
	
	
	</script>
	<script>

		// function empty_mob()
		// {
		// 	var x = document.forms["express_reg"]["phone1"].value;
		// 	if (x == "") {
		// 		alert("enter mobile number");
		// 		return false;
		// 	}
		// }

	function valid()
	{
		var user_type = document.getElementById("user_type").value;
		
	   if(user_type =="")
		{
			document.getElementById('usertype').innerHTML='Please select user type';
			return false;
		}
		var name = document.getElementById("name").value;
		var pattern = /^[a-zA-Z'. -]*$/;
	   if(name.trim()=="" || name.trim()==null)
		{
			document.getElementById('fname').innerHTML='Please Enter Name';
			return false;
		}
		
		else if (pattern.test(name)) {
		  // document.getElementById('fname').innerHTML='Please Enter Valid Name';
			// return false;
		}
		else{
		document.getElementById('fname').innerHTML='Please Enter Valid Name';
		return false;
		}
		/*email*/
		if(user_type=='student'&& user_type=='sponser')
		{
			var email = document.getElementById("email").value;
		var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(email!='')
		{
		
		if (pattern.test(email)) {
			//alert("Your your Academic Year is : " + reason);
		   // return true;
		}
		else{
		document.getElementById('eremail').innerHTML='Please Enter Valid Email ID';
		return false;
		}
		var phone = document.getElementById("phone").value;
		// var x = document.forms["express_reg"]["phone"].value;
		// if (x == "") {
		// 	alert("Enter Mobile Number");
		// 	return false;
		// }
		var pattern =/^[6789]\d{9}$/;
		if(phone!='')
		{
			 
		if (pattern.test(phone)) {
			//alert("Your your Academic Year is : " + reason);
		   // return true;
		}
		else{
		document.getElementById('phone1').innerHTML='Please Enter Valid Phone Number';
		return false;
		}
		 }
		}
	   
		
		}
		else{
		var email = document.getElementById("email").value;
		var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	   if(email.trim()=="" || email.trim()==null)
		{
			document.getElementById('eremail').innerHTML='Please Enter Email ID';
			return false;
		}
		
		else if (pattern.test(email)) {
			//alert("Your your Academic Year is : " + reason);
		   // return true;
		}
		else{
		document.getElementById('eremail').innerHTML='Please Enter Valid Email ID';
		return false;
		}
		var phone = document.getElementById("phone1").value;
		var pattern =/^[6789]\d{9}$/;
	   if(phone.trim()=="" || phone.trim()==null)
		{
			document.getElementById('erphone').innerHTML='Please Enter Phone Number ';
			return false;
		}
		
		else if (pattern.test(phone)) {
			//alert("Your your Academic Year is : " + reason);
		   // return true;
		}
		else{
		document.getElementById('erphone').innerHTML='Please Enter Valid Phone Number';
		return false;
		}
	}
/*phone*/
		var selectBox=document.getElementById('user_type');
		var userInput=selectBox.options[selectBox.selectedIndex].value;
		if(userInput == 'sponsor')
		{
			var category_type = document.getElementById("v_category").value;
		   if(category_type =="" || category_type =="Select Category")
			{
				document.getElementById('ercategory').innerHTML='Please Enter Select Category';
				return false;
			}
		}
		// else if(userInput=='student' || userInput=='teacher')
		// {			
		// 	var state = document.getElementById("state").value;
		// 	var pattern_state = /^[a-zA-Z ]*$/;
	 //       if(state.trim()=="" || state.trim()==null)
		// 	{
		// 		alert("Please Enter State!");
		// 		return false;
		// 	}        
	 //        else if (!pattern_state.test(state)) {
	 //            alert("Please Enter Valid State !!");
		// 		return false;
	 //        }

	 //        var city = document.getElementById("city").value;
		// 	if(city.trim()=="" || city.trim()==null)
		// 	{
		// 		alert("Please Enter City!");
		// 		return false;
		// 	}        
	 //        else if (!pattern_state.test(city)) {
	 //            alert("Please Enter Valid City !!");
		// 		return false;
	 //        }
			
		// }
		else
		{
			return true;
		}
	}

function validate()
{
	var selectBox=document.getElementById('user_type');
	var userInput=selectBox.options[selectBox.selectedIndex].value;
	 var simple = '';
		if(userInput == 'sponsor' && simple=='')
	{
		//document.getElementById('a3').style.display = 'none';
		// document.getElementById('a4').style.display = 'none';
		// document.getElementById('a5').style.display = 'none';
		// document.getElementById('a6').style.display = 'table-row';
		// document.getElementById('statetr').style.display = 'none';
		// document.getElementById('citytr').style.display = 'none';
		// document.getElementById('schoolID1').style.display = 'none';
		// document.getElementById('gt_id').style.display = 'none';
		// document.getElementById('sgt_id').style.display = 'none';
		// document.getElementById('eot_id').style.display = 'none';
		// document.getElementById('eo_id').style.display = 'none';
		// document.getElementById('sg_id').style.display = 'none';
		window.location = "../LoginOTP/OTPLoginForm_sponsor_self_serve/108";
	
		return true;
	}
	else if(userInput == 'sponsor' && simple!='')
	{
		//document.getElementById('a3').style.display = 'none';
		document.getElementById('a4').style.display = 'none';
		document.getElementById('a5').style.display = 'none';
		document.getElementById('a6').style.display = 'table-row';
		document.getElementById('statetr').style.display = 'none';
		document.getElementById('citytr').style.display = 'none';
		document.getElementById('schoolID1').style.display = 'none';
		document.getElementById('gt_id').style.display = 'none';
		document.getElementById('sgt_id').style.display = 'none';
		document.getElementById('eot_id').style.display = 'none';
		document.getElementById('eo_id').style.display = 'none';
		document.getElementById('sg_id').style.display = 'none';
		// window.location = "../LoginOTP/OTPLoginForm_sponsor_self_serve/108";
	
		return true;
	}
	else if(userInput == 'mentor')  
	{
		//document.getElementById('a3').style.display = 'table-row';
		document.getElementById('a4').style.display = 'none';
		document.getElementById('a5').style.display = 'none';
		document.getElementById('a6').style.display = 'none';
		document.getElementById('statetr').style.display = 'none';
		document.getElementById('citytr').style.display = 'none';
		document.getElementById('schoolID1').style.display = 'none';
		document.getElementById('gt_id').style.display = 'none';
		document.getElementById('sgt_id').style.display = 'none';
		document.getElementById('eot_id').style.display = 'none';
		document.getElementById('eo_id').style.display = 'none';
		document.getElementById('sg_id').style.display = 'none';
		return true;
	}	
	
	else if(userInput =='student' && simple=='')
	{
		// document.getElementById('a4').style.display = 'table-row';
		// document.getElementById('a5').style.display = 'none';
		// document.getElementById('a6').style.display = 'none';
		// document.getElementById('statetr').style.display = 'table-row';
		// document.getElementById('citytr').style.display = 'table-row';
		// document.getElementById('schoolID1').style.display = 'table-row';
		// document.getElementById('gt_id').style.display = 'none';
		// document.getElementById('sgt_id').style.display = 'none';
		// document.getElementById('eot_id').style.display = 'none';
		// document.getElementById('eo_id').style.display = 'none';
		// document.getElementById('sg_id').style.display = 'none';

	 //       return true;
	 window.location = "../LoginOTP/OTPLoginForm_student_self_serve/105";
	
	}
	else if(userInput =='student' && simple!='')
	{
		document.getElementById('a4').style.display = 'table-row';
		document.getElementById('a5').style.display = 'none';
		document.getElementById('a6').removeAttribute("required");   
		document.getElementById('a6').style.display = 'none';
		document.getElementById('statetr').style.display = 'table-row';
		document.getElementById('citytr').style.display = 'table-row';
		document.getElementById('schoolID1').style.display = 'table-row';
		document.getElementById('gt_id').style.display = 'none';
		document.getElementById('sgt_id').style.display = 'none';
		document.getElementById('eot_id').style.display = 'none';
		document.getElementById('eo_id').style.display = 'none';
		document.getElementById('sg_id').style.display = 'none';

		   return true;
	
	}
	else if(userInput=='teacher')
	{
		//added below styles for displaying 5 new fields for user type teacher by Pranali for SMC-5129 on 1-2-21
		document.getElementById('a4').style.display = 'table-row';
		document.getElementById('a5').style.display = 'none';
		document.getElementById('a6').style.display = 'none';
		document.getElementById('statetr').style.display = 'table-row';
		document.getElementById('citytr').style.display = 'table-row';
		document.getElementById('schoolID1').style.display = 'table-row';
		document.getElementById('gt_id').style.display = 'table-row';
		document.getElementById('sgt_id').style.display = 'table-row';
		document.getElementById('eot_id').style.display = 'table-row';
		document.getElementById('eo_id').style.display = 'table-row';
		document.getElementById('sg_id').style.display = 'table-row';
		return true;
	}
	else if(userInput =='')
	{
		document.getElementById('a4').style.display = 'table-row';
		document.getElementById('a5').style.display = 'none';
		document.getElementById('a6').style.display = 'none';
		document.getElementById('statetr').style.display = 'table-row';
		document.getElementById('citytr').style.display = 'table-row';
		document.getElementById('schoolID1').style.display = 'table-row';
		document.getElementById('gt_id').style.display = 'none';
		document.getElementById('sgt_id').style.display = 'none';
		document.getElementById('eot_id').style.display = 'none';
		document.getElementById('eo_id').style.display = 'none';
		document.getElementById('sg_id').style.display = 'none';

		   return true;
	 
	}
}
function hide()
{
	// var selectBox=document.getElementById('user_type');
	// var userInput=selectBox.options[selectBox.selectedIndex].value;
	// if(userInput == 'sponsor')
	// {
	// 	//document.getElementById('a3').style.display = 'none';
	// 	document.getElementById('a4').style.display = 'none';
	// 	document.getElementById('a5').style.display = 'none';
	// 	//a6 style display added by Pranali
	// 	document.getElementById('a6').style.display = 'table-row';
	// 	document.getElementById('state_city').style.display = 'none';
	// 	//end
	// 	return true;
	// }
	// else
	// {

		document.getElementById('a6').style.display = 'none';
		document.getElementById('a5').style.display = 'none';
		document.getElementById('statetr').style.display = 'none';
		document.getElementById('citytr').style.display = 'none';
		document.getElementById('schoolID1').style.display = 'none';
		document.getElementById('a4').style.display = 'none';
		
		return true;
	// }
	// return true;
}

function resetReport()
{
	document.getElementById('Report').innerHTML="";
}


</script>

	
	 <script>
	// function refreshCaptcha(){
	//var img = document.images['captchaimg'];
	//img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
//}
	// function unioversity_name_blur(){
		// var selected_college_name = document.getElementById("university_name").value;
		// if(selected_college_name!='')
		// {
			 // document.getElementById("enter_college_name").disabled = true;
		// }
	// }
	
	// function college_name_blur(){
		// var selected_college_name = document.getElementById("enter_college_name").value;
		// if(selected_college_name!='')
		// {
			 // document.getElementById("university_name").disabled = true;
		// }
	// }
	 </script>
	<script>
	   // $(document).ready(function () {
			// if (navigator.geolocation) {
				// navigator.geolocation.getCurrentPosition(showPosition);
			// } else {
				// x.innerHTML = "Geolocation is not supported by this browser.";
			// }
			// $("#button").click(function(){
					// $.ajax({
					// url: "search_collegename.php",
					// type:'post',
					// data:$("#university_name").serialize(),
					// success: function(result){
					// $("#select_college_name").html(result);
						// }});
					// });


		// });
		// function showPosition(position) {
			// document.getElementById("lat").value = position.coords.latitude;
			// document.getElementById("lon").value = position.coords.longitude;
		// }
	</script>
	<script type="text/javascript">
function isNumberKey(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<body onload="return validate()">
	<div class='row bgwhite padtop10'>
		<div class='col-md-9 col-md-offset-2'>
	<!--Added div for displaying success msg at the top by Dhanashri Tak-->	
		<div id="Report"></div>
	<!--End-->	
			<div class='panel panel-info'>
				<div class='panel-heading'>
					<div class='panel-title'>
						Express Registration
					</div>
				</div>
				<div class='panel-body'>
					<form method="post" name="express_reg" id="express_reg">
						<table class='table'>
							<tr>
								<!--width added by Pranali for stable UI (SMC-4676) on 16-4-20-->
								<td width="25%">User Type<span class='red'>*</span></td>
								<td width="75%">
									<select id='user_type' name='user_type' style='width:200px' onchange="return validate();" onfocus="resetReport()" >
										<option value='' selected>Select
										</option>
										<option value='student' >Student
										</option>
									   <!--  <option value='teacher' >Teacher
										</option> -->
										<option value='sponsor' >Sponsor
										</option>
										<option value='mentor' >Mentor
										</option>
									</select> &nbsp;&nbsp;&nbsp;<span class="red" id="usertype" style="font-size: 16px"></span></td>
									
				  </div>
											 </tr>
							
							<tr>
								<td> Full Name<span class='red'>*</span></td>
								<td><input type='text' id='name' name='name' placeholder="Enter Name" style='width:200px;text-transform: capitalize;'  value='' onfocus="resetReport()" autocomplete="off"/>&nbsp;&nbsp;&nbsp;<span class="red" id="fname" style="font-size:16px"></span></td>
							</tr>
							<tr>
								<!--error message in span added by Pranali for SMC-4689 on 5-5-20-->
								<td>Email Address<span class='red'>*</span></td>
								<td>                                	<input autocomplete="off" type='email' id='email' name='email' placeholder="Enter Email ID" style='width:200px'  value='' onfocus="resetReport()" />&emsp;
								<span class='red'></span><span class="red" id="eremail" style="font-size:16px"></span>

															</td>
							
							</tr>
							<!--Added below 5 new fields for SMC-5129 by Pranali-->
							<tr id="gt_id">
								<td>Group Teacher ID</td>
								<td><input type='text' id='group_teacher_id' name='group_teacher_id' placeholder="Enter Group Teacher ID" style='width:200px;text-transform: capitalize;'  value='' onfocus="resetReport()" autocomplete="off"/>&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr id="sgt_id">
								
								<td>State Group Teacher ID</td>
								<td><input autocomplete="off" type='text' id='state_group_teacher_id' name='state_group_teacher_id' placeholder="Enter State Group Teacher ID" style='width:200px'  value='' onfocus="resetReport()" />&emsp;
								
							</td>
							
							</tr>
							<tr id="eot_id">
								
								<td>Education Teacher ID</td>
								<td><input autocomplete="off" type='text' id='edu_org_teacher_id' name='edu_org_teacher_id' placeholder="Enter Education Teacher ID" style='width:200px'  value='' onfocus="resetReport()" />&emsp;
								
							</td>
							
							</tr>
							<tr id="sg_id">
								
								<td>State Group ID</td>
								<td><input autocomplete="off" type='text' id='state_group_id' name='state_group_id' placeholder="Enter State Group ID" style='width:200px'  value='' onfocus="resetReport()" />&emsp;
								
							</td>
							
							</tr>
							<tr id="eo_id">
								
								<td>Education Organization ID</td>
								<td><input autocomplete="off" type='text' id='edu_org_id' name='edu_org_id' placeholder="Enter Education Organization ID" style='width:200px'  value='' onfocus="resetReport()" />&emsp;
								
							</td>
							
							</tr>
							<tr>
							<!--Label changed to Mobile Number by Pranali -->
								<td>Mobile Number <span class='red'>*</span></td>
								<td>
									<select id='cc' name='cc' onfocus="resetReport()">
										<option value="91" selected>+91
										</option>
										<option value="1" >+1
										</option>
									</select>
																		<input type='text' style='width:150px' id='phone' name='phone' onKeyPress="return isNumberKey(event)" placeholder="Enter Mobile Number" maxlength="10"   value='' onfocus="resetReport()" autocomplete="off"/>
									&emsp;
								<span class='red'></span>
								<span class="red" id="erphone" style="font-size:16px"></span>
								
							</td>
							</tr>
	   <!--State and City added by Pranali for filtering college list according to state and city for SMC-4676 on 16-4-20-->
							   <!-- <tr id='query_format'>
								<td>College Search Format </td>
								<td>
									<select name='format' id='format'>
										<option value="">Select</option>
										<option value="equals">Equals</option>
										<option value="like">Like</option>
									</select>
								</td>
							</tr> -->
							<tr id='statetr'>
								<td>State </td>
								<td>
									<select name='format_state' id='format_state'>
										<!-- <option value="">Select</option> -->
										<option value="%">Like</option>
										<option value="=">Equals</option>
										
									</select>
									<input type='text' id='state' name='state' placeholder="Enter State" style='width:200px'  value='' onfocus="resetReport()" autocomplete="off"/><span class="red" id="erstate" ></span>
							</td>
							</tr>
							<tr id='citytr'>
								<td>City </td>
								<td>
									<select name='format_city' id='format_city'>
										<!-- <option value="">Select</option> -->
										<option value="%">Like</option>
										<option value="=">Equals</option>
										
									</select>
									<input type='text' id='city' name='city' placeholder="Enter City" style='width:200px'  value='' onfocus="resetReport()" autocomplete="off"/>
								<input type="button" class="btn btn-primary" id="showdetails" name="showdetails" value='Search School/College' />
							<span class="red" id="ercity" ></span></td>
							</tr>
							<!--start work by yogesh -->
							  <tr id='schoolID1'>
								<td>School ID </td>
								<td>
									
									<input type='text' id='school_id' name='school_id' placeholder="Enter school ID" style='width:200px'  value='' onfocus="resetReport()" autocomplete="off"/>
								<input type="button" class="btn btn-primary" id="schooldetails" name="schooldetails" value='Validate' />
							<span class="red" id="erschool" ></span></td>
							</tr>
							
					   <!--edn by yogesh  -->
							<tr id="a6"  style="display:table-row;">
								<td>Product Category<span class='red'>*</span></td>
								<td>
									<!--<input type='text' id='v_category' name='v_category' placeholder="Enter v_category" style='width:200px'  value=''/>-->
																				<select id="v_category" name="v_category" onfocus="resetReport()">
										<option value="">Select Ctegory</option> 	
																				  <option value="2"  >Travel agency										</option>						
										
																					  <option value="3"  >Fashion & Lifestyle										</option>						
										
																					  <option value="4"  >Electronics										</option>						
										
																					  <option value="5"  >Health care										</option>						
										
																					  <option value="6"  >Recharge										</option>						
										
																					  <option value="7"  >Furniture										</option>						
										
																					  <option value="8"  >Tools and Hardware										</option>						
										
																					  <option value="9"  >Web & Educational Media										</option>						
										
																					  <option value="73"  >Accessories										</option>						
										
																					  <option value="13"  >Other										</option>						
										
																					  <option value="30"  >Sales and Services										</option>						
										
																					  <option value="32"  >Insurance										</option>						
										
																					  <option value="54"  >Food										</option>						
										
																					  <option value="55"  >Hardware										</option>						
										
																					  <option value="60"  >IT Solutions										</option>						
										
																					  <option value="67"  >Education										</option>						
										
																					  <option value="72"  >health										</option>						
										
																					  <option value="74"  >lifestyle										</option>						
										
																				</select>&nbsp;&nbsp;&nbsp;<span class="red" id="ercategory" style="font-size: 16px"></span>
								</td>
							</tr>
							 <tr id="a3" >
							   <!-- <td id="university_name1">University Name</td>
								<td>
									<input type='text' name='university_name' placeholder="Enter University Name" style='width:200px' class="university_name" id="university_name" value="" onblur="unioversity_name_blur()" onfocus="resetReport()"/>
							  
							  &nbsp &nbsp &nbsp <input type='button' class="go" name='go' id="button" value="Go"/></td>-->
							</td>
							</tr>
							
							<tr id="a4" >
								<td id="select_college_name1">Select College Name <span class="red"> * </span> </td>
								
								<td>
								   <select  class="form-control searchselect" name="select_college_name"  id="select_college_name"  style='width:400px'>
									<!-- <option value=''>Select College Name</option>
									<option value='Other'>Other</option> -->
									
									
																	  </select>
								   <!--for pop up help for if user not find his school name in list for SMC-4446-->
								   <div class="popup" onclick="myFunction()">Help
						<span class="popuptext" id="myPopup">
						<!-- Changed help pop up msg by Chaitali for SMC-4463 on 23-02-2021 -->
						<p>If your school is not registered, Please select "Other" and enter your school name</p>
						</span>
						</div>
								
								
					
								</td>

							</tr>
							<tr id='school_info'>

							</tr>
							<tr id="a5">
							 <td id="enter_college_name1">Enter College Name
							 <span class="red"> * </span> </td>
							 <td>
							<input type="text" name="enter_college_name" id="enter_college_name" placeholder="Enter College Name" autocomplete="off"/>
							</td>
							</tr>
						
	<!--script added by Sayali Balkawade for enter school name manualy for SMC-4446-->					
<script type="text/javascript">
function CheckColors(val){
	//alert(val);
 var element=document.getElementById('a5');
 var element1=document.getElementById('enter_college_name1');
 //alert('hii..');
 if(val=='Other'){
	 //element1.style.display='block';
   element.style.display='block';
   
}
	//$('#a6').show();
 else{ 
 //element1.style.display='none'; 
   element.style.display='none';

	//$('#a6').show();
	}
}

</script> 					
						
						
						
						
						
						
						
	<!--script for popup help for if user not find his school name in list for SMC-4446 by Sayali Balkawade-->					
<script>
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>


<!--CSS for popUp -->
<style>
/* Popup container */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}				
				</style>		
						
						
						
						
							  <!-- <tr id="a5" >
							   <td id="college_name_by_user1">Enter College Name</td>

								<td>
								<input type='text' id='college_name_by_user' name='college_name_by_user' placeholder="Enter College Name" style='width:200px' onblur="college_name_blur()" onfocus="resetReport()"/>
								  
								</td>

							</tr>-->
							<tr>
														</tr>
							<tr>
								<td>
									<input type='hidden' id='lat' name='lat' value=''/>
									<input type='hidden' id='lon' name='lon' value=''/>
									<input type='submit' name='submit' class='btn btn-success' value='Register' onClick="return valid(); return empty_mob(); "/>
									<a href="#" style="text-decoration:none;"> <input type="button"  class="btn btn-danger" name="Back" value="Back"/></a>
								</td>
								<td >
									<div id="Report"></div>
								</td>
							</tr>

						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
	<script>

$(document).ready(function() {
	$('.searchselect').select2();

	});
</script>
<!-- below ajax call for showdetails and select_college_name added by Pranali for SMC-4676 on 17-4-20-->
<script type="text/javascript">
	
  $("#showdetails").on("click",function() {
	var state = $("#state").val();
	var city = $("#city").val();
	var format_state = $("#format_state").val();
	var format_city = $("#format_city").val();
	
	//alert(state);
		  $.ajax({
			  type: "POST",
			  cache:false,
			  url : "relevant_college_list.php",
			data : { "state" : state , "city" : city, "format_state":format_state, "format_city": format_city },
			success : function(data)
			{
			 
			  //var mydata = data.replace(/[^\w\s]/gi, '');
						if(data)
						{					
							$("#select_college_name").html(data);
						}
						
			}
		});

});

  $("#schooldetails").on("click",function() {
	
	var school_id = $("#school_id").val();
	
	
	//alert(state);
		  $.ajax({
			  type: "POST",
			  cache:false,
			  url : "relevant_college_list.php",
			data : { "school_id" : school_id },
			success : function(data)
			{
			 
			  //var mydata = data.replace(/[^\w\s]/gi, '');
						if(data)
						{					
							$("#select_college_name").html(data);
						}
						
			}
		});

});

	var state = $("#state").val();
	var city = $("#city").val();
	var school_id = $("#school_id").val();
	var format_state = $("#format_state").val();
	var format_city = $("#format_city").val();
	
	//alert(state);
		  $.ajax({
			  type: "POST",
			  cache:false,
			  url : "relevant_college_list.php",
			data : { "state" : state , "city" : city, "format_state":format_state, "format_city": format_city,"school_id" :school_id },
			success : function(data)
			{
			 
			  //var mydata = data.replace(/[^\w\s]/gi, '');
						if(data)
						{					
							$("#select_college_name").html(data);
						}
						
			}
		});
</script>
<script type="text/javascript">
	//display school info

	$('#select_college_name').on('change', function(e) {
   
	var sc_details = $(this).val();
			
		if(sc_details == 'Other'){
			$('#a5').show();
			$("#school_info").html('');
		}
		else if(sc_details != '')
		{
			$('#a5').hide();
		

			var sc_det = sc_details.split('|');
			var school_name = sc_det[0];
			var school_id = sc_det[1];
			var group_id = sc_det[2];

				  $.ajax({
					  type: "POST",
					  cache :false,
					  url : "college_info.php",
					data : { "school_name" : school_name, "school_id" : school_id, "group_id" : group_id  },
					success : function(data)
					{
					  //var mydata = data.replace(/[^\w\s]/gi, '');
								if(data)
								{					
									$("#school_info").html(data);
								}else{
									$("#school_info").html('');
								}
								
					}
				});
		}

}); 


</script>

						 <div class="row" style="background-color:#FFFFFF;padding-top:10px;"  ></div>
						 <div class="row4 ">
						   <div class=" col-md-12 text-center footer2txt" >
							<a href="