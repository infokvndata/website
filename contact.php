<?php
    $isFormSubmit = 0; 
	if(isset($_REQUEST['submit']))
	{
		$mailContent = '';	  
	    $mailContent.='<br/><b>Email : </b>'.$_REQUEST['client_email'];
	    $mailContent.='<br/><b>Message : </b>'.$_REQUEST['client_message'];
	    $to= 'infokvndata@gmail.com';
		 $subject = 'New inquiry from site';
		 $message = $mailContent;
		 $headers = 'From: infokvndata@gmail.com' . "\r\n" .
		'Reply-To: infokvndata@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		 if(mail($to, $subject, $message, $headers)){
              $isFormSubmit = 1;
		 } else {
			 $isFormSubmit = 2;
		 }
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style type="text/css">
.techno{
	display:none;
	background-color:#6195FF;
	padding:8px 10px;
	width:0px;
	color:#FFF;
	margin-bottom:10px;
	border-radius:5px;
	box-shadow:3px 3px 3px #DADADA;
	font-size:18px;
	
}
.service-name{
	display:none;  
}
	   .success-msg{
	      position:absolute;
		   background:green;
		   padding:10px;
		   color:#fff;
		   top: 3%;
		   left: 35%;
		   width: 30%;
		   text-align: center;
		   border-radius:10px;
	   }
	   
	   .whatsapp-msg-area{
		   display:none;
	   }
	   
	   @media only screen and (max-width: 600px) {
          .success-msg{
	      position:absolute;
		   left: 5%;
		   width: 90%; 
	     }
		 
		 .whatsapp-msg-area{
		   display:block;  
	      }
       }
	   
   </style>
</head>
<body>
  
<div class="container" style="width:95%; padding:5%;">
	<div id='mail_status'></div>
  <div class="row" style="padding:0px;">
  <div style="min-height:378px;">
    <div class="col-md-4 col-sm-4 col-xs-12">
      <h3>Our Services</h3>
	  
     <div class="swing">
	    <div class='techno'><i class="fa fa-angle-double-right" style="font-size:19px;margin-right:15px;"></i><span class="service-name">Web Development<span></div>
		<div class='techno'><i class="fa fa-angle-double-right" style="font-size:19px;margin-right:15px;"></i><span class="service-name">Mobile Themes<span></div>
		<div class='techno'><i class="fa fa-angle-double-right" style="font-size:19px;margin-right:15px;"></i><span class="service-name">Wordpress Site<span></div>
		<div class='techno'><i class="fa fa-angle-double-right" style="font-size:19px;margin-right:15px;"></i><span class="service-name">HTML Design<span></div>
		<div class='techno'><i class="fa fa-angle-double-right" style="font-size:19px;margin-right:15px;"></i><span class="service-name">Email Template<span></div>
		<div class='techno'><i class="fa fa-angle-double-right" style="font-size:19px;margin-right:15px;"></i><span class="service-name">Content Editing<span></div>
     </div>
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12" style="margin-bottom:35px;">
      <h3>Contact For Inquiry</h3>
	  <div class="whatsapp-msg-area">
	     <div><center><a href="https://wa.me/919998897131/?text=Help Me"><img src="img/whatsapp.png" style="width:105px;" /></a></center></div>
		 <div>&nbsp;</div>
		 <hr/>
		 <div>&nbsp;</div>
	  </div>
	  
	  
      <form method='post'>
			  <div class="form-group">
				<label for="exampleFormControlInput1">Email address</label>
				<input type="email" class="form-control" name="client_email" id="client_email" placeholder="Your email address">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInput1">Message</label>
				<textarea rows="6" name="client_message" id="client_message"  class="form-control" placeholder="Enter your message here for any inquiry. We will contact in your email address."></textarea>
			  </div>
			  <button type="submit" name="submit" class="btn btn-primary" onclick='mail_status()' style='background-color:#6195FF;border:1px solid #6195FF;'>Submit</button> 
	   </form>
    </div>
	<div style='clear:both;'></div>
	</div>
	<div style="border-top:2px solid #6195FF"></div>
	<center>
	 <div style="width:215px;margin-top:15px;">
	   <a href="http://kvninfotech.in/" style="font-size:30px;">
		  <div style="float:left;"><i class="fa fa-globe" style="margin-top:-2px;font-size: 23px;margin-right:5px;color:#6195FF;"></i></div>
		  <div style="float:left;margin-top:3px;color:#6195FF;">KVN Infotech</div>
		  <div style="clear:both;"></div>					
	  </a>
	  </div>
	</center>
  </div>
</div>


<script type="text/javascript">

$(document).ready(function(){
	
	$(".techno").each(function(index){
		(function(that, i) { 
            var t = setTimeout(function() { 
                $(that).animate({
                width: '100%'
            }).show(); 
			$(that).children().show();  
            }, 850 * i);
        })(this, index);
	});
	
	
	
});

	
</script>

<?php if($isFormSubmit == 1) { ?>
			<script type="text/javascript">
				

    
			   $('body').append('<div class="success-msg" id="success_msg">your Inquiry has been submited Successfully </div>');
				setTimeout(function(){
				  $("#success_msg").remove();
				},3000);
			</script>
<?php } ?>			
			
</body>
</html>
