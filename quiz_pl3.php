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

<h2>Czy zgadzasz się na wzięcie udziału w ankiecie? Sprawdź <a href="consent_form_pl.html" target="_blank">formularz zgody</a> i wpisz swój email, jeżeli się z nim zgadzasz</h2>
<input type="email" name="email" size="50" id="email" />

<h2>W jakim jesteś wieku?</h2>
<input type="text" name="age" size="10" id="age"  min="16" max="25" />

<h2>Jaka jest Twoja płeć?</h2>
<input type="text" name="gender" id="gender"/><br>Mężczyzna / Kobieta / Inne?


<h2>Czy masz zdiagnozowane problemy ze wzrokiem?</h2>
<input type="text" name="con" id="con" />
<br>Żadnych, Krótkowidztwo, Dalekowidztwo?

<h2>Jakie jest Twoje pochodzenie rasowe?</h2>
<input type="text" name="etno" id="etno" />
<br>Biały/a, Czarny/a, Azjata/ka, Latynoskie, Afroamerykanskie czy Indyjskie?

<h2>Uszereguj te kolory wedle nasycenia</h2>
<div class="height"></div>
    <div id = "imageListId"> 
         <div id="imageNo4aff00" class = "listitemClass"> 
            <img src="img/zestaw3/4aff00.png" alt=""> 4aff00
        </div> 
          <br>
		  <div id="imageNoe4ff00" class = "listitemClass"> 
            <img src="img/zestaw3/56ff00.png" alt=""> 56ff00
        </div> 
          <br>
        <div id="imageNo77ff00" class = "listitemClass"> 
            <img src="img/zestaw3/77ff00.png" alt=""> 77ff00
        </div> 
          <br>
        <div id="imageNo61ff00" class = "listitemClass"> 
            <img src="img/zestaw3/61ff00.png" alt=""> 61ff00
        </div> 
          <br>
        <div id="imageNo6cff00" class = "listitemClass"> 
            <img src="img/zestaw3/6cff00.png" alt=""> 6cff00
        </div><br>
		<div id="imageNo3eff00" class = "listitemClass"> 
            <img src="img/zestaw3/3eff00.png" alt=""> 3eff00
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
 grading = ["3eff00", "4aff00", "56ff00", "61ff00", "6cff00", "77ff00"];
	  
for(i=0; i<grading.length; i++) {
kolejnosc == grading[i].innerHTML;
flag = kolejnosc; }


document.getElementById("grade2").innerHTML = kolejnosc;
if (kolejnosc == grading) {
flag = true; }
else
{ flag = false; }
document.getElementById("result").value = flag;
document.getElementById("zestaw").value = "zestaw3";
//return false; // required to not refresh the page; just leave this here
}
    
</script>


</div>
</body>
</html>

