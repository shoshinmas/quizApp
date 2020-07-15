<html>
<head>
<title>Survey on colors</title>
 <link href =  
"https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
            rel = "stylesheet"> 
      
    <script src =  
"https://code.jquery.com/jquery-1.10.2.js"> 
    </script> 
      
    <script src =  
"https://code.jquery.com/ui/1.10.4/jquery-ui.js"> 
    </script> 
<?php

$zestaw = '';    
$myFile = "Results.txt";
if(isset($_POST['zestaw']) && !empty($_POST['zestaw'])) {
$zestaw = $_POST['zestaw'].PHP_EOL;
}
if($zestaw) {
$fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
fwrite($fh, $zestaw);
fclose($fh);
}
?>

<?php

$email = '';    
$myFile = "Results.txt";
if(isset($_POST['email']) && !empty($_POST['email'])) {
$email = $_POST['email'].PHP_EOL;
}
if($email) {
$fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
fwrite($fh, $email);
fclose($fh);
}
?>
<?php

$age = '';    
$myFile = "Results.txt";
if(isset($_POST['age']) && !empty($_POST['age'])) {
$age = $_POST['age'].PHP_EOL;
}
if($age) {
$fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
fwrite($fh, $age);
fclose($fh);
}
?>
<?php

$gender = '';    
$myFile = "Results.txt";
if(isset($_POST['gender']) && !empty($_POST['gender'])) {
$gender = $_POST['gender'].PHP_EOL;
}
if($gender) {
$fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
fwrite($fh, $gender);
fclose($fh);
}
?>
<?php

$con = '';    
$myFile = "Results.txt";
if(isset($_POST['con']) && !empty($_POST['con'])) {
$con = $_POST['con'].PHP_EOL;
}
if($con) {
$fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
fwrite($fh, $con);
fclose($fh);
}
?>
<?php

$etno = '';    
$myFile = "Results.txt";
if(isset($_POST['etno']) && !empty($_POST['etno'])) {
$etno = $_POST['etno'].PHP_EOL;
}
if($etno) {
$fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
fwrite($fh, $etno);
fclose($fh);
}
?>

<?php

$result = '';    
$myFile = "Results.txt";
if(isset($_POST['result']) && !empty($_POST['result'])) {
$result = $_POST['result'].PHP_EOL;
}
if($result) {
$fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
fwrite($fh, $result);
fclose($fh);
}
?>

<style>
body {
background-color: lightblue;
font-family: Helvetica;
}

#main {
width: 80%;
max-width: 950px;
border: 1px gray solid;
margin: auto;
padding: 10px;
background-color: white;
border-radius: 10px;
}

#header {
margin-top: 0;
border: 2px solid black;
padding: 5px;
height: 100px;
background: green;
color: white;
}

 
    /* image dimension */
    img { 
        height: 30px; 
        width: 150px; 
    } 
      
    /* imagelistId styling */
    #imageListId { 
        margin: 0; 
        padding: 0; 
        list-style-type: none; 
    } 
       
    #imageListId div { 
        margin: 0 4px 4px 4px; 
        padding: 0.4em; 
        display: inline-table; 
		border: 2px solid dark-green;
    } 
      
    /* Output order styling */
    #outputvalues { 
        margin: 0 2px 2px 2px; 
        padding: 0.4em; 
        padding-left: 1.5em; 
        width: 250px; 
        border: 2px solid dark-green; 
        background: gray; 
    } 
       
    .listitemClass { 
        border: 1px solid #006400; 
        width: 150px; 
    } 
       
    .height { 
        height: 10px; 
    } 
</style>
<script> 
        $(function() { 
            $( "#imageListId" ).sortable({ 
            update: function(event, ui) { 
                getIdsOfImages(); 
            }//end update          
            }); 
        }); 
          
        function getIdsOfImages() { 
            var values = []; 
            $('.listitemClass').each(function (index) { 
                values.push($(this).attr("id") 
                        .replace("imageNo", "")); 
            }); 
              
            $('#outputvalues').val(values); 
        } 
    </script> 

</head>
<body>
<div id="main">
<div id="header">
<h1>EE Questionnaire qus.</h1>
</div>
<form id="form1" method="post">
<input id = "zestaw" name = "zestaw" type = "hidden" value = ""/>

<h2>Do you agree to take part in the test? Check <a href="consent_form.html" target="_blank">consent form</a> and leave your e-mail (mandatory) if you agree</h2>
<input type="email" name="email" size="50" id="email" />

<h2>What is your age?</h2>
<input type="text" name="age" size="10" id="age"  min="16" max="25" />

<h2>What is your gender?</h2>
<input type="text" name="gender" id="gender"/><br>Male / Female / Other?


<h2>Do you have any problems with vision?</h2>
<input type="text" name="con" id="con" />
<br>None, Short-sightedness or Long-sightedness?

<h2>What is your ethnicity?</h2>
<input type="text" name="etno" id="etno" />
<br>Caucasian, Black, Asian, Latino, Afro-American or Indian?


<h2>Order these colours in order ( hues ( vibrant colour ) nothing added )</h2>
<div class="height"></div>
    <div id = "imageListId"> 
         <div id="imageNo36ff00" class = "listitemClass"> 
            <img src="img/zestaw4/36ff00.png" alt=""> 36ff00
        </div> 
          <br>
		  <div id="imageNo00ff92" class = "listitemClass"> 
            <img src="img/zestaw4/00ff92.png" alt=""> 00ff92
        </div> 
          <br>
        <div id="imageNo00ff54" class = "listitemClass"> 
            <img src="img/zestaw4/00ff54.png" alt=""> 00ff54
        </div> 
          <br>
        <div id="imageNo00ff00" class = "listitemClass"> 
            <img src="img/zestaw4/00ff00.png" alt=""> 00ff00
        </div> 
          <br>
        <div id="imageNo1fff00" class = "listitemClass"> 
            <img src="img/zestaw4/1fff00.png" alt=""> 1fff00
        </div><br>
		<div id="imageNo00ffcb" class = "listitemClass"> 
            <img src="img/zestaw4/00ffcb.png" alt=""> 00ffcb
        </div> 
          
    </div> 
      <br>
    <div id="outputDiv"> 
        <b>Output order of ID's of images : </b> 
        <input id="outputvalues" name="outputvalues" type="text" value="" /> 
    </div> 

	<input id = "result" name = "result" type = "hidden" value = ""/>


<button type="submit" value="Submit" >Submit</button>

</form>

<p>Your answer is: </p>
<p id="grade2"></p>
<!--<p id="grade3"></p>-->


<script>
document.getElementById("form1").onsubmit=function() {
var flag = false;
kolejnosc = document.getElementById("outputvalues").value;
 grading = ["00ffcb", "00ff92", "00ff54", "00ff00", "1fff00", "36ff00"];
	  
for(i=0; i<grading.length; i++) {
kolejnosc == grading[i].innerHTML;
flag = kolejnosc; }


document.getElementById("grade2").innerHTML = kolejnosc;
if (kolejnosc == grading) {
flag = true; }
else
{ flag = false; }
document.getElementById("result").value = flag;
document.getElementById("zestaw").value = "zestaw4";
//return false; // required to not refresh the page; just leave this here
}
    
</script>


</div>
</body>
</html>

