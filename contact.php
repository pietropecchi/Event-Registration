
<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code -->

 <style>
   @-ms-viewport{
  width: device-width;
}
        .alert {
    background-color: #f44336;
    color: white;
}
.alert.success {background-color: #4CAF50;}


  body {
 margin: 0px;
padding:0px;
 width:100%;
 font-family: 'Josefin Sans', "Microsoft YaHei New", "Microsoft Yahei", "微软雅黑", 宋体, SimSun, STXihei, "华文细黑", sans-serif;

text-align:center;
}

form input[type="submit"]{ 
 opacity:0.85;
  color: white;
  background-color: #ffa500;
border: none;
  }
  /* webkit solution */
::-webkit-input-placeholder { text-align:center; }
/* mozilla solution */
input:-moz-placeholder { text-align:center; }
  
 input,
textarea
  {
      text-align:center;
      color:#999;
       width:100%;
    font-size: 15px;
    line-height: 35px;
    margin-bottom: 10px;
border: 1px solid #5f5f5f;
  }
select
 {
     color:#999;
 text-align-last:center;
       width:100%;
    font-size: 15px;
    height: 35px;
    margin-bottom: 10px;
border: 1px solid #5f5f5f;
  }
  }
h1{font-size: 30pt;margin:0 ;
text-align:center;
}
h2{font-size: 20pt;
font-weight: 700;
margin:0 }
h3{font-size: 16pt;
margin:0 }
h4 {font-size: 14pt;
font-weight: 500;
margin:0 ;
text-align:center;}
p{font-size: 14pt;margin:0 }


quote{
    min-width:300px;
      vertical-align:middle;
 padding-top:2%;padding-bottom:2% ;
     display: inline-block;
    text-align: left;
     width: 60%;
    font-style: italic;
    font-size: 14pt;
     padding-top:2%;padding-bottom:2% ;

 

}



pic_quote{
     padding-top:2%;padding-bottom:2% ;
          vertical-align:middle;  
      display: inline-block;
padding-right:2%;
padding-left:2%;
width:15%;
min-width:200px;

        }
     
   pic_quote img{width:100%;
      border-radius: 50%;
     
    }  


floating-box1 {
    padding-left:6%;padding-right:6%;
    padding-top:2%;padding-bottom:2% ;
    display: inline-block;
 
    vertical-align:middle;
    text-align:left;
}
pack1 {
    padding-left:15%;padding-right:15%;
    padding-top:2%;padding-bottom:2% ;
    display: inline-block;
 
    vertical-align:middle;
    text-align:center;
}

floating-box2 {
    padding-top:2%;padding-bottom:2% ;
    display: inline-block;
    width: 40%;
    vertical-align:top;
min-width:300px;
    padding-left:4%;padding-right:4%;
    text-align:left;
}
floating-box3 {
    padding-top:2%;padding-bottom:2% ;
    display: inline-block;
     vertical-align:top;
    width: 25%;
    min-width:300px;
    height:auto;
padding-left:1%;
padding-right:1%;
    text-align:left;
}



</style>

	  <script src="scripts.js"></script>
	 <title>JECoMM's got talent</title>
</head>
<body style="background-color:white">
<div>
	<floating-1>
    </br>
   <h1><img src="LogoTrasparente.png" style="min-width:300px;width:40%" alt="" /></h1>
    </br>
    </floating-1>
    </div>


 
<div style="background-color:#003baa;color:#fffdea">
    
    <h2></br>JECoMM's got talent</br></br>    </h2>
    <floating-box2><p>
Pronti per l'evento più talentuoso dell'anno?</br>
</br>
 Sabato 18 giugno 2016 dalle ore 9:30 alle ore 18:00 presso lo Studio Fotografico Milano.net si terrà la seconda edizione di JECoMM's got talent!
 </br></br>
  Le nuove reclute di JECoMM hanno organizzato per voi una giornata ricca di intrattenimento e creatività! </br></br>
  Si parlerà di team building, emozioni, ruoli della comunicazione e molto altro. Sarà un'occasione per conoscerci, divertirci e costruire un team ancora più forte. Ah dimenticavamo, sono assicurati food e drink. Noi siamo pronti e voi? 
  </br></br>Non vi basta che compilare il form! </p>
    </floating-box2>
    
    <floating-box2><p>
    <contacts>


<?php  
$filename = null;
if(isset($_SESSION['success']) ){
    $filename = $_SESSION['success'];
echo " <div class='alert success' >
    ".$filename."
</div>";
$_SESSION['success']= null;
$_SESSION['error']=null;

echo "<script type='text/javascript'>setTimeout(function () {
   window.top.location.href= 'https://www.facebook.com/JECoMMs-got-talent-2-1721373041434256/'; 
},5000);</script>";
 
}
 else {
 echo "<div class='alert success' style='display:none'>successo</div>";

$_SESSION['success']= null;

}
 
 ?>





  <?php  
$filename = null;
if(isset($_SESSION['error']) ){
    $filename = $_SESSION['error'];
echo " <div class='alert' >
    ".$filename."
</div>";
$_SESSION['success']= null;
$_SESSION['error']=null;

}

  

 else {
 echo "<div class='alert' style='display:none'>errori</div>";

$_SESSION['error']=null;
}



 ?>






       <form id="contact_form" action= "contacts.php" method="post"  enctype="multipart/form-data" >
		

			<input id="name" class="input" name="name" placeholder= "NOME" type="text" value="" size="30" /><br />
<input id="surname" class="input" name="surname" placeholder= "COGNOME" type="text" value="" size="30" /><br />
		
            
            
            <input id="email" class="input" name="email" placeholder= "EMAIL"type="text" value="" size="30" /><br />

<select  name="area">
     <option value="" disabled selected>Area di Appartenenza...</option>
  <option value="Commerciale">COMMERCIALE</option>
  <option value="Comunicazione">COMUNICAZIONE</option>
  <option value="Network">NETWORK</option>
  <option value="ICT">ICT</option>
  <option value="HR">HR</option>


</select>	


			<textarea style="text-align:left;" id="message" class="input" placeholder= "Note ed eventuali allergie/intolleranze alimentari"name="message" rows="6" cols="30"></textarea><br />

			<input id="submit_button" type="submit" value="Send email" />
	</form>
	
	


</p>
</contacts>


</floating-box2>
    
  
    <div>
 
          <floating-1>

    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.3772975838306!2d9.222664015558042!3d45.4823464791012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6f02188d123%3A0xc3b9f5345ca98d6!2sVia+Antonio+Bazzini%2C+17%2C+20131+Milano!5e0!3m2!1sen!2sit!4v1465407641759"  height="400px" frameborder="0" style="border:0;min-width:300px;width:100%" allowfullscreen></iframe>
       </floating-1>
</div>

</div>

</body>
</html>