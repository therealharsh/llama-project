<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
	<head>
		<meta http-equiv="refresh" content="600" >
		<meta charset="utf-8" />
		<meta name="author" content="therealharsh" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
		
		<title>Llama Talk</title>

		<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<link type="text/css" rel="stylesheet" href="css/demo.css" />
		<link type="text/css" rel="stylesheet" href="dist/css/jquery.mmenu.all.css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
		<link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<script> 
			$(document).ready(function(){
    			$("#abc").click(function(){
        		$("#panel").slideToggle("slow");
    		});
		});
		</script>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="dist/js/jquery.mmenu.min.all.js"></script>
		
		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu();
			});
		</script>
		
			<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
		
		
<style type="text/css">
		* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body,ul,li {
	padding: 0;
	margin: 0;
	border: 0;
}
body{
	font-size: 12px;
	font-family: ubuntu, helvetica, arial;
	background: rgba(85,85,85,0.3);
}

#cont {
	position: relative;
	width: 100%;
	background: white;
	overflow: hidden;
}

#tp {
	position: relative;
	width: 100%;
}

#tp ul {
	width: 100%;
	text-align: left;
	list-style: none;
	padding: 0;
	margin: 0;
	width: 100%;
	text-align: left;
}

#tp li {
	padding: 10px;
	line-height: 25px;
	border-bottom: 1px solid #555;
	background-color: rgba(255, 201, 39, 0.8);
	font-size: 14px;
	color: rgba(85, 85, 85, 0.8);
}

#timeFormat{
	font-size: 12px;
	color:#555;
}

a.remove{
	font-size:15px;
	color:#c90a0a;
}

a.remove:link{
	text-decoration: none;
}

a.remove:hover{
	font-size: 24px;
	color:#ff0000;
}

a.reply:link{
	text-decoration: none;
	font-size: 12px;
	color:#adadad;
}

a.reply:hover{
	text-decoration: none;
	font-size: 12px;
	color:#444;
}

a.replies:link{
	text-decoration: none;
	font-size: 12px;
	color: #034694;
}

a.replies:visited{
	text-decoration: none;
	font-size: 12px;
	color: #034694;
}

a.replies:hover{
	text-decoration: none;
	font-size: 12px;
	color:#444;
}


#votes{
	color:#222;
	text-align: right;
}

#VOTEUP a{
	color:green;
	font-size: 16px;
}

#VOTEUP a:link {
    text-decoration: none;
}

#VOTEUP a:hover {
    color: #49c95e
}

#notVOTEUP{
	color:green;
	font-size: 16px;
	opacity: 0.1
}

#notVOTEDOWN{
	color:#c90a0a;
	font-size: 16px;
	opacity: 0.1
}

#finalVOTEUP{
	color:green;
	font-size: 16px;
}

#finalVOTEDOWN{
	color:#c90a0a;
	font-size: 16px;
}


#VOTEDOWN a{
	color:#c90a0a;
	font-size: 16px;
}

#VOTEDOWN a:link {
    text-decoration: none;
}

#VOTEDOWN a:hover {
    color: #ff0000;
}



#doneVoting{
	font-size:12px;
	color:#929292;
}

#refresh a{
	font-size: 70%;
	color: white;
    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;
}

#$id a{
	font-size: 12px;
	color:#929292;
}

#panel, #flip {
    text-align: center;
    border-top: solid 1px #c3c3c3;
    border-bottom: solid 1px #c3c3c3;
}

#flip {
	background-color: #034694;
}

#flip p{
	color: white;
	text-transform: uppercase;
}

#panel {
    display: none;
}

#name{
  line-height:100%;
  width:100%;
  font-size: 100%;
}

#submitButton{
  width:100%;
  background-color:#555;;
  line-height: 100%;
  font-size:100%;
  color:white;
}

.fancybox-custom .fancybox-skin {
	box-shadow: 0 0 50px #222;
}

.fancybox{
	font-size: 12px;
}


.header p{
	color: white;
	background-color: rgba(68, 68, 68, 0.7);
	
}

a.menuNotif:link{
	text-decoration: none;
}
a.menuNotif:visited{
	text-decoration: none;
}


p1{
	font-family: Rancho;
	font-size: 25px;
	
	margin-right:-40px;
}

p2{
	float: right;
}

#abc{
	font-size: 150%;
	float: right;
	padding-top: 11px;
	padding-right: 14px;
	
}


@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
  }
}

@-webkit-keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
  }
}

html{
  /** Basic styles for an animated element */
    -webkit-animation-duration: 0.5s;
    transition-timing-function: ease-in;
    -webkit-animation-fill-mode: both;
    -webkit-animation-name: fadeIn;
}





</style>


	</head>
		<div id="page">
			<div class="header">
				<a href="#menu"></a>
			<div><p1>Llama Talk</p1>
				 <i class="fa fa-plus-circle" id="abc"></i></div>
			</div>
			
			<div id="panel">
				<form id="createPost" action="upload.php" method="post" enctype="multipart/form-data">
				<input type="text" name="llamaname" placeholder="Your name - Eg: Joe" required>
	          		<textarea type="text" name="name" id="name" maxlength="200" placeholder="What would you like to say?" rows="10%" 	cols="100%" form="createPost" required></textarea><br>
	          		<input id="submitButton" type="submit" value="POST">
    			</form>
			</div>
			<div class="content">	
			</div>
			<div id="cont">
			<div id="tp">
		<!-- TEST -->
<!-- PHP --> 
<?php
function nicetime($date)
{
    if(empty($date)) {
        return "No date provided";
    }
    
    $periods         = array("s", "m", "h", "d", "w", "m", "y", "dec");
    $lengths         = array("60","60","24","7","4.35","12","10");
    
    $now             = time()-(60*60*7); //messed up time thingy
    $unix_date         = strtotime($date);
    
       // check validity of date
    if(empty($unix_date)) {    
        return "Bad date";
    }

    // is it future date or past date
    if($now > $unix_date) {    
        $difference     = $now - $unix_date;
        $tense         = "ago";
        
    } else {
        $difference     = $unix_date - $now;
        $tense         = "from now";
    }
    
    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
        $difference /= $lengths[$j];
    }
    
    $difference = round($difference);
    
    
    return "$difference$periods[$j]";
}

$date = "2009-03-04 17:45";
$result = nicetime($date); // 2 days ago

?>

<?php
function contains($needle, $haystack)
{
    return strpos($haystack, $needle) !== false;
}
?>


<?php
	$user = $_COOKIE['uratsvalidator'];
	$user_ip = $_SERVER['REMOTE_ADDR'];
	$deviceInfo = $_SERVER['HTTP_USER_AGENT'];
 
	$con=mysql_connect("localhost","x", "x");
	mysql_select_db("validator");
	$sql="select * from `llama-everything` ORDER BY id DESC LIMIT 0,20;";
	$eq=mysql_query($sql,$con);
?>
	<ul>

<?php
while($row=mysql_fetch_array($eq)){
	$name=$row['llamaName'];
	$content=$row['content'];
	$time=$row['time'];
	$timeFormat = nicetime($time);
	$id = $row['id'];
	$YES = $row['numYes'];
	$NO = $row['numNo'];
	$votes = $YES - $NO;
	$posterIP = $row['ip_address'];
	$device_info = $row['device_info'];

	
	if($posterIP == $user_ip){
		if($isImageAvailable==0){
			echo"<li>
			<table width = \"100%\">
				<tr>
					<td width =\"98%\"><a class=\"remove\" href=\"delete.php?id=$id\" onclick=\"return confirm('Are you sure you want to delete this awesomeness?')\">
						<i class=\"fa fa-minus-circle\"></i>
					</a> <b>Llama $name:</b> $content</td>";
					

		
						echo"<td rowspan=\"2\"><center>
						<table>
						<tr><td id=\"VOTEUP\" style=\"text-align:center\"><a href=\"voteyes.php?id=$id\"><i class=\"fa fa-arrow-up\"></i></a></td></tr>
						<tr><td style=\"text-align:center\">$votes</td></tr>
						<tr><td id=\"VOTEDOWN\" style=\"text-align:center\"><a href=\"voteno.php?id=$id\"><i class=\"fa fa-arrow-down\"></i></a></td></tr>
						</table></center>
						</td>";


				echo"</tr>
				<tr>
					<td id=\"timeFormat\">$timeFormat&nbsp;
					";
					echo"</td>
					
				</tr>
			</table>
			</li>";
		}
		else{
			echo"<li>
			<table width = \"100%\">
				<tr>
					<td width =\"98%\"><a class=\"remove\" href=\"delete.php?id=$id\" onclick=\"return confirm('Are you sure you want to delete this awesomeness?')\">
						<i class=\"fa fa-minus-circle\"></i> 
					</a> <b>Llama $name:</b> $content</td>";
					

						echo"<td rowspan=\"2\"><center>
						<table>
						<tr><td id=\"VOTEUP\" style=\"text-align:center\"><a href=\"voteyes.php?id=$id\"><i class=\"fa fa-arrow-up\"></i></a></td></tr>
						<tr><td style=\"text-align:center\">$votes</td></tr>
						<tr><td id=\"VOTEDOWN\" style=\"text-align:center\"><a href=\"voteno.php?id=$id\"><i class=\"fa fa-arrow-down\"></i></a></td></tr>
						</table></center>
						</td>";


				echo"</tr>
				<tr>
					<td id=\"timeFormat\">$timeFormat&nbsp;
					";
					echo"</td>
					
				</tr>
			</table>
			</li>";
		}
	}
	else{
		if($isImageAvailable==0){
			echo"<li>
			<table width = \"100%\">
				<tr>
					<td width =\"98%\">
					</a><b>Llama $name:</b> $content</td>";
					

						echo"<td rowspan=\"2\"><center>
						<table>
						<tr><td id=\"VOTEUP\" style=\"text-align:center\"><a href=\"voteyes.php?id=$id\"><i class=\"fa fa-arrow-up\"></i></a></td></tr>
						<tr><td style=\"text-align:center\">$votes</td></tr>
						<tr><td id=\"VOTEDOWN\" style=\"text-align:center\"><a href=\"voteno.php?id=$id\"><i class=\"fa fa-arrow-down\"></i></a></td></tr>
						</table></center>
						</td>";


				echo"</tr>
				<tr>
					<td id=\"timeFormat\">$timeFormat&nbsp;
					";
					echo"</td>
					
				</tr>
			</table>
			</li>";
		}
		else{
			echo"<li>
			<table width = \"100%\">
				<tr>
					<td width =\"98%\">
					</a><b>Llama $name:</b> $content</td>";
					

						echo"<td rowspan=\"2\"><center>
						<table>
						<tr><td id=\"VOTEUP\" style=\"text-align:center\"><a href=\"voteyes.php?id=$id\"><i class=\"fa fa-arrow-up\"></i></a></td></tr>
						<tr><td style=\"text-align:center\">$votes</td></tr>
						<tr><td id=\"VOTEDOWN\" style=\"text-align:center\"><a href=\"voteno.php?id=$id\"><i class=\"fa fa-arrow-down\"></i></a></td></tr>
						</table></center>
						</td>";


				echo"</tr>
				<tr>
					<td id=\"timeFormat\">$timeFormat&nbsp;";

					echo"</td>
					
				</tr>
			</table>
			</li>";
		}
	}
}
?>
</ul>
		
	</div>
</div>


			</div>
			<nav id="menu">
				<ul>
					<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="about.html"><i class="fa fa-info-circle"></i> About </a></li>
					<li><a href="http://www.ratsvalidator.com/llama-project/index.html"><i class="fa fa-reply-all"></i> Back to Website</a></li>
				</ul>
			</nav>
		</div>


	
</html>