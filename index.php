<!DOCTYPE html>
<html>
<head>
<title>RSS - PastuWeb</title>
	<meta name="keywords" content="PastuWeb, www.pastuweb.com, Francesco Pasturenzi, RSS" />
	<link rel="Shortcut Icon" type="image/x-icon" href="/loghi_pw/icone/favicon.ico" />
	<meta name="author" content="Pasturenzi Francesco, www.pastuweb.com" />
	<meta name="description" content="RSS - PastuWeb" />
	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="stile1.css" />
<script type="text/javascript">
function showRSS(str){
if (str.length==0){ 
  document.getElementById("rssOutput").innerHTML="";
  return;
}
if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
}else{// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("rssOutput").innerHTML=xmlhttp.responseText;
  }
}
xmlhttp.open("GET","logica.php?q="+str,true);
xmlhttp.send();
}
</script>

<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<?php  include '../ready_jquery.php'; ?>

<script type="text/javascript" src="../my_functions.js"></script>

</head>


<body>
	<?php include_once("../analyticstracking.php") ?>
	<div id="centrato">
		<?php require 'intestazione.php';?>
	
		<div id="corpo" >
		
			<div id="colonna-2" >
				<h1 style="margin-top:-15px;z-index:30;">AJAX RSS Reader</h1>
				
    			<div id="feeds" style="text-align:right;">
     			 <h2>Feeds</h2>
     			 <form>
					<select onchange="showRSS(this.value)">
					<option value="">Select an RSS-feed:</option>
					<option value="Google">Google News</option>
					<option value="MSNBC">MSNBC News</option>
					<option value="polito">Politecnico di Torino</option>
					<option value="ilsoftware">Il Software</option>
					<option value="corriere">Il Corriere</option>
					<option value="applenews">Apple - Hot news</option>
					<option value="hoepli">Hoepli - Informatica</option>
					</select>
				</form>
				
    			</div>
    			<div id="content" style="font-size:12px;">
      				<div id="rssOutput">Loading feed...</div>
      				<div id="home">
        			<h2>Lettore AJAX RSS</h2>
        			<p>
         			Il Lettore RSS AJAX e' solo una semplice applicazione che fornisce le funzionalita' di base per 
          			recuperare i feed RSS.
        			</p>
      				</div>
      				<script type="text/javascript" src="http://www.google.it/reader/ui/publisher-it.js"></script>
					<script type="text/javascript" src="http://www.google.it/reader/public/javascript/user/13656219226313108135/state/com.google/broadcast?n=7&callback=GRC_p(%7Bc%3A%22gray%22%2Ct%3A%22Google%20Reader%20di%20Francesco%22%2Cs%3A%22false%22%2Cn%3A%22true%22%2Cb%3A%22false%22%7D)%3Bnew%20GRC"></script>	
    				<br/>
    			</div>
    			<br>
    			
    				<br/>
    			
    			
    			<div id="pie-di-pagina">
					<?php require 'frm_footer.php';?>
				</div>
					<noscript>
					<p class="Avvisi" style="color:#000">
					<strong>Attenzione: </strong>Il tuo JavaScript NON E' ATTIVO! <br />
					Alcune cose potrebbero non funzionare.
					</p>
					</noscript>
			</div>
		</div>
	</div>
	
	<?php require '../frm_dialogs.php';?>
	
</body>
</html>
