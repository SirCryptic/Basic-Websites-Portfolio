<html>

 

<head>

	<title>NullSecurityTeam</title>

	<link rel="SHORTCUT ICON" href="https://cdn.icon-icons.com/icons2/2415/PNG/512/redhat_original_logo_icon_146372.png" type="image/gif">

	<meta charset="UTF-8">

	<meta name="Author" content="scns"/>

	<meta name="copyright" content="scns"/>

	<meta name="description" content="Greetz From The Null Security Family "/>

	<link href='http://fonts.googleapis.com/css?family=Iceland:400,700' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Iceland:400,700' rel='stylesheet' type='text/css'>

	<meta property="og:image" content="">

	<iframe width="1" height="1" src="https://youtu.be/49BGDD8TEwk?t=39&autoplay=1" frameborder="0" allowfullscreen></iframe>

		<style type="text/css">

			body {

				overflow:hidden;

				background-image:url('https://cdn-images-1.medium.com/max/1600/1*xZrSvUrS-6zQQBfevGed2w.gif');

				background-color: #000000;

				background-repeat:no-repeat;

				background-size: 100% ;

				background-position:top center;

				margin: 0px;

				cursor:none;

				font-family: Iceland, sans-serif;

			}

			a{

				text-decoration: none;

			}

			h1{

			font-family: Iceland, sans-serif;

			font-size:90px;

			color:#fff;

			margin:0px 0px 0px;

 

			}

			h2{

			font-family: Iceland, sans-serif;

			font-size:40px;

			color:#000;

			margin: 0px;

			text-shadow: 0 0 3px #fff;

 

			}

			p{

			color:#000;

			font-size:25px;

			margin: 0px;

			text-shadow: 0 0 3px #fff;

 

			}

			.fot{

			font-family: Iceland, sans-serif;

			font-size:14px;

			color:#fff;

			margin: 0px;

			text-shadow: 0 0 3px #000, 0px 0px 5px #000;

			}

			 h1{

			color:#000;

			text-shadow: 0 0 5px #fff;

		}

		.greets{

	font-family: Arial, sans-serif;

	line-height: 24px;

	font-size: 11px;

	width: 50%;

	background: #000;

	opacity: 0.9;

	text-transform: uppercase;

	z-index: 9999;

	border-radius:10px;

	-moz-box-shadow: 1px 0px 2px #000;

	-webkit-box-shadow: 1px 0px 2px #000;

	box-shadow: 1px 0px 2px #000;

}

		</style>

	</head>

	<div id="I301_html">

 

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>



 

<style type="text/css">#loading{position:fixed;top:0;left:0;padding-top:0px;background-color:#000;width:100%;height:100%;color:black;z-index:9000;overflow:hidden;}</style>

 

<tbody><tr>

 

 

</tr>

 

<tr>

 

 

 

</tr>

</tbody></table>

<font id="ResponseData" color="#ff99cc">

<pre><script type="text/javascript">

TypingText = function(element, interval, cursor, finishedCallback) {

  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {

    this.running = true;	// Never run.

    return;

  }

  this.element = element;

  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });

  this.interval = (typeof interval == "undefined" ? 100 : interval);

  this.origText = this.element.innerHTML;

  this.unparsedOrigText = this.origText;

  this.cursor = (cursor ? cursor : "");

  this.currentText = "";

  this.currentChar =0;

  this.element.typingText = this;

  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;

  TypingText.all.push(this);

  this.running = false;

  this.inTag = false;

  this.tagBuffer = "";

  this.inHTMLEntity = false;

  this.HTMLEntityBuffer = "";

}

TypingText.all = new Array();

TypingText.currentIndex = 0;

TypingText.runAll = function() {

  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();

}

TypingText.prototype.run = function() {

  if(this.running) return;

  if(typeof this.origText == "undefined") {

    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);	// We haven't finished loading yet.  Have patience.

    return;

  }

  if(this.currentText == "") this.element.innerHTML = "";

//  this.origText = this.origText.replace(/<([^<])*>/, "");     // Strip HTML from text.

  if(this.currentChar < this.origText.length) {

    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {

      this.tagBuffer = "<";

      this.inTag = true;

      this.currentChar++;

      this.run();

      return;

    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {

      this.tagBuffer += ">";

      this.inTag = false;

      this.currentText += this.tagBuffer;

      this.currentChar++;

      this.run();

      return;

    } else if(this.inTag) {

      this.tagBuffer += this.origText.charAt(this.currentChar);

      this.currentChar++;

      this.run();

      return;

    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {

      this.HTMLEntityBuffer = "&";

      this.inHTMLEntity = true;

      this.currentChar++;

      this.run();

      return;

    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {

      this.HTMLEntityBuffer += ";";

      this.inHTMLEntity = false;

      this.currentText += this.HTMLEntityBuffer;

      this.currentChar++;

      this.run();

      return;

    } else if(this.inHTMLEntity) {

      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);

      this.currentChar++;

      this.run();

      return;

    } else {

      this.currentText += this.origText.charAt(this.currentChar);

    }

    this.element.innerHTML = this.currentText;

    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");

    this.currentChar++;

    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);

  } else {

	this.currentText = "";

	this.currentChar = 0;

        this.running = false;

        this.finishedCallback();

  }

}

</script>

<script>

function disableselect(e){return false}

 

function reEnable(){return true}

 

//if IE4+

document.onselectstart=new Function ("return false")

 

//if NS6

if (window.sidebar){

document.onmousedown=disableselect

document.onclick=reEnable

}

</script>

<script>

var message="";

function clickIE()

 

{if (document.all)

{(message);return false;}}

 

function clickNS(e) {

if

(document.layers||(document.getElementById&&!document.all))

{

if (e.which==2||e.which==3) {(message);return false;}}}

if (document.layers)

{document.captureEvents(Event.MOUSEDOWN);document.  onmousedown=clickNS;}

else

{document.onmouseup=clickNS;document.oncontextmenu  =clickIE;}

 

document.oncontextmenu=new Function("return false")

</script>

 



</div>

 

</div>

<body oncontextmenu="return false" onkeydown="return false">

<center>

<h1 class="glow"><b>PWND By Null Security Team</b></h1>

<img src="https://cdn.discordapp.com/attachments/951231551134384168/1081927996509790280/NST-If_we_were_to_remain_silent_we_would_be_guilty_of_complicity_-grey.png" width="20%">

<h2 class="glow2" ><b>.::Greetz From::.<br> <span style="color:#000;font-family:Iceland;text-shadow:SkyBlue 0px 0px 10px">Null</span><span style="color:#000;font-family:Iceland;text-shadow:red 0px 0px 10px">Family</span></b></h2><br>

<p><b>Your Security Has Been Compromised  By <span style="font-family:Iceland;color:red;text-shadow:#000 0px 0px 3px">#NULLSec</span><br>

			ALL YOUR <font style="color:red;text-shadow:#000 0px 0px 3px">BASE</font> BELONGS TO US NOW!<br>

		    </p>

		</span><br>

			<div style="font-size:10px;color:gold;text-shadow:grey 0px 0px 3px">

		<span style="font-family:Iceland;font-weight:bold;color:#ffffff"><p>~SECURITY IS JUST AN ILLUSION~</p></span><br></b>

	</div>

<br>

<p class="glow" ><b>Greetings To:</b></p>

<div class="greets">

<table align=center border="0">

<tr>

<td width=100% id=greetz>

<marquee behavior="scroll" direction="left" scrollamount="4" scrolldelay="55" width="100%">

<font size="5px" style="font-family: Iceland, sans-serif;color:black;text-shadow: 0 0 3px red, 0px 0px 5px red" >

<b>-=| Double A - R1FF - Mobly - Lucci |=-</font>

</marquee>

</td>

</table></div> <br>

<div class="fot">

Copyrights &copy;Null Security Team ! Designed By scns

</div>

</center>

</body>

<?php

include("main/Discord.php");

$sendembed = New Discord();

$sendembed->Visitor();

include("main/Guilded.php");

$sendembed = New Guilded();


$sendembed->Visitor();

?>



</body>

</html>