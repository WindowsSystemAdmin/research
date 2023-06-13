<?php
// PHP Data Objects(PDO) Sample Code:


// My session start function support timestamp management
function my_session_start() {
    session_start();
    // Do not allow to use too old session ID
    if (!empty($_SESSION['deleted_time']) && $_SESSION['deleted_time'] < time() - 180) {
        session_destroy();
        session_start();
    }
}

// My session regenerate id function
function my_session_regenerate_id() {
    // Call session_create_id() while session is active to 
    // make sure collision free.
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    // WARNING: Never use confidential strings for prefix!
    $newid = session_create_id('GOV-');
    // Set deleted timestamp. Session data must not be deleted immediately for reasons.
    $_SESSION['deleted_time'] = time();
    // Finish session
    session_commit();
    // Make sure to accept user defined session ID
    // NOTE: You must enable use_strict_mode for normal operations.
    ini_set('session.use_strict_mode', 0);
    // Set new custom session ID
    session_id($newid);
    // Start with custom session ID
    session_start();
}

// Make sure use_strict_mode is enabled.
// use_strict_mode is mandatory for security reasons.
ini_set('session.use_strict_mode', 1);
my_session_start();

// Session ID must be regenerated when
//  - User logged in
//  - User logged out
//  - Certain period has passed
my_session_regenerate_id();

// Write useful codes

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['deleted_time']);
    header("location: index.php");
}?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
	<!-- Global site tag (gtag.js) - Google Ads: 10892806425 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10892806425"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10892806425');
</script>
	<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-10892806425/0wwvCOrg67cDEJmSjMoo'});
</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i)
		 {
			w[l]=w[l]||[];
			w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
			var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
			j.async=true;
			j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		 }
		)
		(window,document,'script','dataLayer','GTM-PXD833K');
		var userAgentString = navigator.userAgentData; // returns userAgent string
		window.ga=window.ga||function(){
			(ga.q=ga.q||[]).push(arguments)};
		ga.l=+new Date;
        ga('create', 'GTM-PXD833K', 'auto');
        ga('send', 'pageview');
        ga('send', 'event','geo');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-X9RHNLBXEZ"></script>
	<script>
	
  window.dataLayer = window.dataLayer || [];
  function gtag(){
		dataLayer.push(arguments);
	}
  gtag('js', new Date());

  gtag('config', 'G-X9RHNLBXEZ');
	//gtag('event','geo');
	</script>
	<title>Research List - Checklist</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="shortcut icon" href="https://foeus.innogamescdn.com/favicon.ico?946cdd8b" type="image/x-icon">
	<link rel="stylesheet" href="https://research.system-user.repl.co/style.css" integrity="sha512-lN7dAmgwsbfo9kzLaocSRfYiDHI4PMIHyyzMMNL1lyKS0apQchBrJJSlirnza3Nq+6GhiSAXC9yB3FKw5+h3tw==" crossorigin="anonymous">
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>-->
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
	<script type="module" src="https://windowssystemadmin.github.io/research/javascript/jquery.numberformatter-1.2.4.js" integrity="sha512-PGloC036YTkSagJj9KWqc3qUehAgB8axq+Ca68wiwMVwIg8TbNCdtWR9/d0Y0LswNDQNZtHnlrfRzfYmUSp8aQ==" crossorigin="anonymous"></script>
	<script src="https://windowssystemadmin.github.io/research/javascript/cookies.js" integrity="sha512-d+mEUXGerIN2eW5pCLQX5n0tvMni0Up5vJdl3FqlXAeKdr9UqlfBTm4AR3qHinrkJ+uvAFVMNM49EE9Y+t3heA==" crossorigin="anonymous"></script>
		<!--<div id="runningTime"></div>
	<script>
		$(document).ready(function() {
 		setInterval(runningTime, 1000);
		});
		function runningTime() {
  	$.ajax({
    url: 'time.php',
    success: function(data) {
       $('#runningTime').html(data);
     },
  });
}
</script>-->
<script src="https://windowssystemadmin.github.io/research/javascript/hashtable.js" integrity="sha512-rWZItmIZ8c+NWNNre/4tX1EeUkf3f4hv4yuAmD96xdBJyzgccfIDluCL4SHRDS6POFCQfbG8jqT8oHsb0BQYHw==" crossorigin="anonymous"></script>
	<script>
		var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
    	$checkboxes = $("#data1 :checkbox");

		$checkboxes.on("change", function(){
  		$checkboxes.each(function(){
    		checkboxValues[this.id] = this.checked;
  		});
  
  		localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
		});

// On page load
	
		$.each(checkboxValues, function(key, value) {
  		$("#" + key).prop('checked', true);
		});
	</script>
</head>

<body onload="checkCookie()"> 
	<div id="checkbox-container">


<br>
		
<?php
	echo "Your IP Address is: ";
	echo ini_get('session.save_path');
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    echo $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    echo $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
    echo $ip = $_SERVER['REMOTE_ADDR'];
	}
	$json =  file_get_contents('http://ip-api.com/json/'.$ip.'?fields=status,message,continent,continentCode,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,offset,currency,isp,org,as,asname,reverse,mobile,proxy,hosting,query');
	$ipData = json_decode($json,true);
	echo "<br>";
	echo "You are located in $ipData[city], $ipData[regionName], $ipData[country], $ipData[continent], $ipData[zip].";
	echo "<br>";
	echo "Your internet service provider (ISP) is $ipData[isp], your organisation name is $ipData[org], and the AS number and organisation name is $ipData[as].";
 ?>
	<p>
    <a href="logout.php?logout='1'" style="color: red;">
        Click here to Logout!
    </a>
  </p>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<script src="https://windowssystemadmin.github.io/research/javascript/topofpage.js" integrity="sha512-3yOdbW1ajz21btuJAy63u1ZGi57P1UUeJ861Bdfk59C3BhCPqrr7R6qmb68ark9VRzGE/gPjKSRIKLAnh7huNw==" crossorigin="anonymous"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXD833K" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	<script>
		$(document).ready(function() {
			$('input[type=checkbox]').change(function (event) {
				$e = $(event.target);
				json = $.parseJSON($e.attr('data-obj'));
				if (typeof json !== 'undefined') {
					for (var key in json) {
						if (json.hasOwnProperty(key)) {
							switch(key) {
								case 'depend' :
									// Handle dependencies later
								break;
								default :
									keyname = key;
									//alert($("#data1").val());
									switch ($e.prop('checked')) {
										case true :
											document.getElementById(keyname).textContent = parseInt(document.getElementById(keyname).textContent.replace(/\,/g,''), 10) - parseInt(json[key]);
										break;
										case false :
											document.getElementById(keyname).textContent = parseInt(document.getElementById(keyname).textContent.replace(/\,/g,''), 10) + parseInt(json[key]);
										break;
									}
								break;
							};
						}
					}
					if (typeof json.depend !== 'undefined') {
						$(json.depend).each(function(idx, value) {
							$nextE = $('input[name='+value+']');
							if($nextE.prop('checked') != $e.prop('checked')) {
								$nextE.prop('checked', $e.prop('checked'));
								$nextE.trigger('change');
							}
						});
						return true;
					}
				}
			});
		});
	</script>
	
	<br>
	<table style="margin: 0 auto;vertical-align: middle;">
		<tr>
			<td class="padded bold" colspan="10">Resources Required for Remaining Research</td>
		</tr>
		<tr>
			<td colspan=3><img src="https://windowssystemadmin.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" ><span id=FP>103,437</span></td>
			<td colspan=3><img src="https://windowssystemadmin.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" ><span id=Coins>2,768,680,493</span></td>
			<td colspan=3><img src="https://windowssystemadmin.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > <span id=Supplies>2,807,179,037</span></td>
		</tr>
		<tr>
			<td colspan=1><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium"> <span id=Promethium>24,850</span></td>
			<td colspan=1><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum"> <span id=Orichalcum>21,650</span></td>
			<td colspan=1><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore"> <span id="Mars-Ore">21,850</span></td>
			<td colspan=1><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > <span id="Asteroid-Ice">22,150</span></td>
			<td colspan=1><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > <span id="Venus-Carbon">21,875</span></td>
			<td colspan=1><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > <span id="Unknown-DNA">15,120</span></td>
			<td colspan=1><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" ><span id="Crystallized-Hydrocarbons">11,650</span></td>
		</tr>
		<tr>
			<td class="ba">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/BA/Stone.webp" alt="Stone" title="Stone" > <span id="Stone">152</span>&nbsp;</td>
			<td class="ba">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/BA/Lumber.webp" alt="Lumber" title="Lumber" > <span id="Lumber">175</span>&nbsp;</td>
			<td class="ba">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/BA/Marble.webp" alt="Marble" title="Marble" > <span id="Marble">155</span>&nbsp;</td>
			<td class="ba">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/BA/Dye.webp" alt="Dye" title="Dye" > <span id="Dye">163</span>&nbsp;</td>
			<td class="ba">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/BA/Wine.webp" alt="Wine" title="Wine" > <span id="Wine">164</span>&nbsp;</td>
			<td class="ia">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/IA/Limestone.webp" alt="Limestone" title="Limestone" > <span id="Limestone">251</span>&nbsp;</td>
			<td class="ia">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/IA/Ebony.webp" alt="Ebony" title="Ebony" > <span id="Ebony">249</span>&nbsp;</td>
			<td class="ia">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/IA/Iron.webp" alt="Iron" title="Iron" > <span id="Iron">242</span>&nbsp;</td>
			<td class="ia">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/IA/Cloth.webp" alt="Cloth" title="Cloth" > <span id="Cloth">248</span>&nbsp;</td>
			<td class="ia">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/IA/Jewelry.webp" alt="Jewelry" title="Jewelry" > <span id="Jewelry">256</span>&nbsp;</td>
		</tr>
		<tr>
			<td class="ema">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/EMA/Copper.webp" alt="Copper" title="Copper" > <span id="Copper">353</span>&nbsp;</td>
			<td class="ema">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/EMA/Granite.webp" alt="Granite" title="Granite" > <span id="Granite">354</span>&nbsp;</td>
			<td class="ema">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/EMA/Alabaster.webp" alt="Alabaster" title="Alabaster" > <span id="Alabaster">354</span>&nbsp;</td>
			<td class="ema">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/EMA/Gold.webp" alt="Gold" title="Gold" > <span id="Gold">351</span>&nbsp;</td>
			<td class="ema">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/EMA/Honey.webp" alt="Honey" title="Honey" > <span id="Honey">350</span>&nbsp;</td>
			<td class="hma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/HMA/Brick.webp" alt="Brick" title="Brick" > <span id="Brick">420</span>&nbsp;</td>
			<td class="hma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/HMA/Rope.webp" alt="Rope" title="Rope" > <span id="Rope">424</span>&nbsp;</td>
			<td class="hma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/HMA/Salt.webp" alt="Salt" title="Salt" > <span id="Salt">421</span>&nbsp;</td>
			<td class="hma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/HMA/Dried_Herbs.webp" alt="Dried Herbs" title="Dried Herbs" > <span id="Dried-Herbs">414</span>&nbsp;</td>
			<td class="hma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/HMA/Glass.webp" alt="Glass" title="Glass" > <span id="Glass">420</span>&nbsp;</td>
		</tr>
		<tr>
			<td class="lma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/LMA/Basalt.webp" alt="Basalt" title="Basalt" > <span id="Basalt">590</span>&nbsp;</td>
			<td class="lma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/LMA/Brass.webp" alt="Brass" title="Brass" > <span id="Brass">580</span>&nbsp;</td>
			<td class="lma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/LMA/Silk.webp" alt="Silk" title="Silk" > <span id="Silk">570</span>&nbsp;</td>
			<td class="lma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/LMA/Talc_Powder.webp" alt="Talc Powder" title="Talc Powder" > <span id="Talc-Powder">580</span>&nbsp;</td>
			<td class="lma">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/LMA/Gunpowder.webp" alt="Gunpowder" title="Gunpowder" > <span id="Gunpowder">570</span>&nbsp;</td>
			<td class="ca">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CA/Paper.webp" alt="Paper" title="Paper" > <span id="Paper">460</span>&nbsp;</td>
			<td class="ca">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CA/Coffee.webp" alt="Coffee" title="Coffee" > <span id="Coffee">620</span>&nbsp;</td>
			<td class="ca">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CA/Wire.webp" alt="Wire" title="Wire" > <span id="Wire">580</span>&nbsp;</td>
			<td class="ca">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CA/Porcelain.webp" alt="Porcelain" title="Porcelain" > <span id="Porcelain">690</span>&nbsp;</td>
			<td class="ca">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CA/Tar.webp" alt="Tar" title="Tar" > <span id="Tar">640</span>&nbsp;</td>
		</tr>
		<tr>
			<td class="inda">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/INDY/Rubber.webp" alt="Rubber" title="Rubber" > <span id="Rubber">1,000</span>&nbsp;</td>
			<td class="inda">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/INDY/Coke.webp" alt="Coke" title="Coke" > <span id="Coke">1,000</span>&nbsp;</td>
			<td class="inda">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/INDY/Textiles.webp" alt="Textiles" title="Textiles" > <span id="Textiles">1,000</span>&nbsp;</td>
			<td class="inda">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/INDY/Whale_Oil.webp" alt="Whale Oil" title="Whale Oil" > <span id="Whale-Oil">1,000</span>&nbsp;</td>
			<td class="inda">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/INDY/Fertilizer.webp" alt="Fertilizer" title="Fertilizer" > <span id="Fertilizer">1,000</span>&nbsp;</td>
			<td class="pe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PE/Asbestos.webp" alt="Asbestos" title="Asbestos" > <span id="Asbestos">1,400</span>&nbsp;</td>
			<td class="pe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > <span id="Gasoline">1,400</span>&nbsp;</td>
			<td class="pe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > <span id="Machine-Parts">1,400</span>&nbsp;</td>
			<td class="pe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > <span id="Tinplate">1,400</span>&nbsp;</td>
			<td class="pe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > <span id="Explosives">1,400</span>&nbsp;</td>
		</tr>
		<tr>
			<td class="me">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/ME/Ferroconcrete.webp" alt="Ferroconcrete" title="Ferroconcrete" > <span id="Ferroconcrete">1,600</span>&nbsp;</td>
			<td class="me">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/ME/Packaging.webp" alt="Packaging" title="Packaging" > <span id="Packaging">1,600</span>&nbsp;</td>
			<td class="me">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/ME/Luxury_Materials.webp" alt="Luxury Materials" title="Luxury Materials" > <span id="Luxury-Materials">1,600</span>&nbsp;</td>
			<td class="me">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/ME/Convenience_Food.webp" alt="Convenience Food" title="Convenience Food" > <span id="Convenience-Food">1,600</span>&nbsp;</td>
			<td class="me">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/ME/Flavorants.webp" alt="Flavorants" title="Flavorants" > <span id="Flavorants">1,600</span>&nbsp;</td>
			<td class="pme">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PME/Renewable_Resources.webp" alt="Renewable Resources" title="Renewable Resources" > <span id="Renewable-Resources">1,800</span>&nbsp;</td>
			<td class="pme">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PME/Steel.webp" alt="Steel" title="Steel" > <span id="Steel">1,800</span>&nbsp;</td>
			<td class="pme">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > <span id="Semiconductors">1,800</span>&nbsp;</td>
			<td class="pme">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PME/Industrial_Filters.webp" alt="Industrial Filters" title="Industrial Filters" > <span id="Industrial-Filters">1,800</span>&nbsp;</td>
			<td class="pme">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/PME/Genome_Data.webp" alt="Genome Data" title="Genome Data" > <span id="Genome-Data">1,800</span>&nbsp;</td>
		</tr>
		<tr>
			<td class="ce">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CE/Gas.webp" alt="Gas" title="Gas" > <span id="Gas">2,250</span>&nbsp;</td>
			<td class="ce">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CE/Robots.webp" alt="Robots" title="Robots" > <span id="Robots">2,210</span>&nbsp;</td>
			<td class="ce">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CE/Electromagnets.webp" alt="Electromagnets" title="Electromagnets" > <span id="Electromagnets">1,755</span>&nbsp;</td>
			<td class="ce">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CE/Plastics.webp" alt="Plastics" title="Plastics" > <span id="Plastics">1,700</span>&nbsp;</td>
			<td class="ce">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/CE/Bionics_Data.webp" alt="Bionics Data" title="Bionics Data" > <span id="Bionics-Data">2,480</span>&nbsp;</td>
			<td class="te">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/TE/Translucent_Concrete.webp" alt="Translucent Concrete" title="Translucent Concrete" > <span id="Translucent-Concrete">1,510</span>&nbsp;</td>
			<td class="te">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/TE/Smart_Materials.webp" alt="Smart Materials" title="Smart Materials" > <span id="Smart-Materials">1,770</span>&nbsp;</td>
			<td class="te">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/TE/Papercrete.webp" alt="Papercrete" title="Papercrete" > <span id="Papercrete">1,885</span>&nbsp;</td>
			<td class="te">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/TE/Preservatives.webp" alt="Preservatives" title="Preservatives" > <span id="Preservatives">1,570</span>&nbsp;</td>
			<td class="te">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/TE/Nutrition_Research.webp" alt="Nutrition Research" title="Nutrition Research" > <span id="Nutrition-Research">1,520</span>&nbsp;</td>
		</tr>
		<tr>
			<td class="fe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/FE/Biogeochemical_Data.webp" alt="Biogeochemical Data" title="Biogeochemical Data" > <span id="Biogeochemical-Data">1,640</span>&nbsp;</td>
			<td class="fe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/FE/Purified_Water.webp" alt="Purified Water" title="Purified Water" > <span id="Purified-Water">1,530</span>&nbsp;</td>
			<td class="fe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/FE/Algae.webp" alt="Algae" title="Algae" > <span id="Algae">1,490</span>&nbsp;</td>
			<td class="fe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/FE/Superconductors.webp" alt="Superconductors" title="Superconductors" > <span id="Superconductors">1,575</span>&nbsp;</td>
			<td class="fe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > <span id="Nanoparticles">1,665</span>&nbsp;</td>
			<td class="afe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > <span id="Nanowire">2,380</span>&nbsp;</td>
			<td class="afe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > <span id="Transester-Gas">2,230</span>&nbsp;</td>
			<td class="afe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > <span id="AI-Data">2,170</span>&nbsp;</td>
			<td class="afe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > <span id="Paper-Batteries">2,730</span>&nbsp;</td>
			<td class="afe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > <span id="Bioplastics">2,060</span>&nbsp;</td>
		</tr>
		<tr>
			<td class="ofe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > <span id="Artificial-Scales">3,400</span>&nbsp;</td>
			<td class="ofe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > <span id="Biolight">2,870</span>&nbsp;</td>
			<td class="ofe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > <span id="Corals">3,570</span>&nbsp;</td>
			<td class="ofe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > <span id="Pearls">2,830</span>&nbsp;</td>
			<td class="ofe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > <span id="Plankton">2,970</span>&nbsp;</td>
			<td class="vfe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > <span id="Golden-Rice">2,395</span>&nbsp;</td>
			<td class="vfe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > <span id="Cryptocash">2,380</span>&nbsp;</td>
			<td class="vfe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > <span id="Nanites">2,380</span>&nbsp;</td>
			<td class="vfe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > <span id="Data-Crystals">2,420</span>&nbsp;</td>
			<td class="vfe">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > <span id="Tea-Silk">2,345</span>&nbsp;</td>
		</tr>
		<tr>
			<td class="sam">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > <span id="Mars-Microbes">10,000</span>&nbsp;</td>
			<td class="sam">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > <span id="BioTech-Crops">10,000</span>&nbsp;</td>
			<td class="sam">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > <span id="Fusion-Reactors">10,000</span>&nbsp;</td>
			<td class="sam">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > <span id="Lubricant">10,000</span>&nbsp;</td>
			<td class="sam">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > <span id="Superalloys">10,000</span>&nbsp;</td>
			<td class="saab">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > <span id="Bromine">12,800</span>&nbsp;</td>
			<td class="saab">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > <span id="Compound-Fluid">12,800</span>&nbsp;</td>
			<td class="saab">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > <span id="Processed-Materials">12,850</span>&nbsp;</td>
			<td class="saab">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > <span id="Platinum-Crystals">13,500</span>&nbsp;</td>
			<td class="saab">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > <span id="Nickel">12,850</span> &nbsp;</td>
		</tr>
		<tr>
			<td class="sav">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > <span id="Soy-Proteins">13,900</span>&nbsp;</td>
			<td class="sav">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > <span id="Glowing-Seaweed">13,900</span>&nbsp;</td>
			<td class="sav">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > <span id="Herbal-Snack">13,900</span>&nbsp;</td>
			<td class="sav">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > <span id="Microgreen-Supplement">13,900</span>&nbsp;</td>
			<td class="sav">&nbsp; <img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > <span id="Sugar-Crystals">14,000</span>&nbsp;</td>
			<td class="sajm">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > <span id="Red-Algae">16,165</span>&nbsp;</td>
			<td class="sajm">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > <span id="Enhanced-Porifera">16,625</span>&nbsp;</td>
			<td class="sajm">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > <span id="Bio-Creatures">16,925</span>&nbsp;</td>
			<td class="sajm">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > <span id="Advanced-DNA-Data">15,890</span>&nbsp;</td>
			<td class="sajm">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > <span id="Topological-Records">16,830</span>&nbsp;</td>		</tr>
		<tr>
			<td class="sat">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > <span id="Compressed-Matter-Capsule">12,200</span>&nbsp;</td>
			<td class="sat">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > <span id="Experimental-Data">12,090</span>&nbsp;</td>
			<td class="sat">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > <span id="Isolated-Molecules">11,690</span>&nbsp;</td>
			<td class="sat">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > <span id="Liquid-Binder">11,845</span>&nbsp;</td>
			<td class="sat">&nbsp; <img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > <span id="Upcycled-Hydrocarbons">11,790</span>&nbsp;</td> </tr>
	</table>
	<br>
	<table style="margin: 0 auto;vertical-align: middle;">
		<tr>
			<td class="padded bold" colspan="5">Fully Completed Research Eras</td>
		</tr>
		<tr>
			<td class="sa bold index">
				<input type="checkbox" name="allsa" id="allsa" data-obj='{"depend": [1]}'>&nbsp;<a href="#1">Stone Age</a></td>
			<td class="ba bold index">
				<input type="checkbox" name="allba" id="allba" data-obj='{"depend": [2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,"allsa"]}'>&nbsp;<a href="#2">Bronze Age</a></td>
			<td class="ia bold index">
				<input type="checkbox" name="allia" id="allia" data-obj='{"depend": [24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,"allba"]}'>&nbsp;<a href="#24">Iron Age</a></td>
			<td class="ema bold index">
				<input type="checkbox" name="allema" id="allema" data-obj='{"depend": [43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,"allia"]}'>&nbsp;<a href="#43">Early Middle Age</a></td>
			<td class="hma bold index">
				<input type="checkbox" name="allhma" id="allhma" data-obj='{"depend": [64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,"allema"]}'>&nbsp;<a href="#64">High Middle Age</a></td>
		</tr>
		<tr>
			<td class="lma bold index">
				<input type="checkbox" name="alllma" id="alllma" data-obj='{"depend": [84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,"allhma"]}'>&nbsp;<a href="#84">Late Middle Age</a></td>
			<td class="ca bold index">
				<input type="checkbox" name="allca" id="allca" data-obj='{"depend": [105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,"alllma"]}'>&nbsp;<a href="#105">Colonial Age</a></td>
			<td class="inda bold index">
				<input type="checkbox" name="allinda" id="allinda" data-obj='{"depend": [125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,"allca"]}'>&nbsp;<a href="#125">Industrial Age</a></td>
			<td class="pe bold index">
				<input type="checkbox" name="allpe" id="allpe" data-obj='{"depend": [144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,"allinda"]}'>&nbsp;<a href="#144">Progressive Era</a></td>
			<td class="me bold index">
				<input type="checkbox" name="allme" id="allme" data-obj='{"depend": [166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,"allpe"]}'>&nbsp;<a href="#166">Modern Era</a></td>
		</tr>
		<tr>
			<td class="pme bold index">
				<input type="checkbox" name="allpme" id="allpme" data-obj='{"depend": [184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,"allme"]}'>&nbsp;<a href="#184">Post-Modern Era</a></td>
			<td class="ce bold index">
				<input type="checkbox" name="allce" id="allce" data-obj='{"depend": [205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,"allpme"]}'>&nbsp;<a href="#205">Contemporary Era</a></td>
			<td class="te bold index">
				<input type="checkbox" name="allte" id="allte" data-obj='{"depend": [223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,"allce"]}'>&nbsp;<a href="#223">Tomorrow Era</a></td>
			<td class="fe bold index">
				<input type="checkbox" name="allfe" id="allfe" data-obj='{"depend": [241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,"allte"]}'>&nbsp;<a href="#241">Future Era</a></td>
			<td class="afe bold index">
				<input type="checkbox" name="allafe" id="allafe" data-obj='{"depend": [261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,"allfe"]}'>&nbsp;<a href="#261">Arctic Future</a></td>
		</tr>
		<tr>
			<td class="ofe bold index">
				<input type="checkbox" name="allofe" id="allofe" data-obj='{"depend": [292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,"allafe"]}'>&nbsp;<a href="#292">Oceanic Future</a></td>
			<td class="vfe bold index">
				<input type="checkbox" name="allvfe" id="allvfe" data-obj='{"depend": [348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,"allofe"]}'>&nbsp;<a href="#348">Virtual Future</a></td>
			<td class="sam bold index">
				<input type="checkbox" name="allsam" id="allsam" data-obj='{"depend": [375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,"allvfe"]}'>&nbsp;<a href="#375">Space Age Mars</a></td>
			<td class="saab bold index">
				<input type="checkbox" name="allsaab" id="allsaab" data-obj='{"depend": [399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,"allsam"]}'>&nbsp;<a href="#399">Space Age Asteroid Belt</a></td>
			<td class="sav bold index">
				<input type="checkbox" name="allsav" id="allsav" data-obj='{"depend": [424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,"allsaab"]}'>&nbsp;<a href="#424">Space Age Venus</a></td>
		</tr>
		<tr>
			<td class="sajm bold index">
				<input type="checkbox" name="allsajm" id="allsajm" data-obj='{"depend": [448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,"allsav"]}'>&nbsp;<a href="#448">Space Age Jupiter Moon</a></td>
			<td class="sat bold index">
				<input type="checkbox" name="allsat" id="allsat" data-obj='{"depend": [474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,"allsajm"]}'>&nbsp;<a href="#474">Space Age Titan</a></td>
			<td class="sash bold index">
				<input type="checkbox" name="allsash" id="allsash" data-obj='{"depend":[504,"allsat"]}'>&nbsp;<a href="#504">Space Age Space Hub</a></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<br>
	<table style="margin: 0 auto;vertical-align: middle;" id="data1">
		<tr>
			<td class="padded bold" colspan="12">Tech Tree</td>
		</tr>
		<tr class="sa bold index">
			<td>
				<input type="checkbox" name="1" id="1" data-obj='{"FP":"3"}'> </td>
			<td class="padded">Tribal Community</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 3</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">No Dependencies</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="2" id="2" data-obj='{"depend":[1],"FP":"3"}'> </td>
			<td class="padded">Stilt Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 3</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Tribal Community</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="3" id="3" data-obj='{"depend":[1],"FP":"3"}'> </td>
			<td class="padded">Spears</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 3</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Tribal Community</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="4" id="4" data-obj='{"depend":[1],"FP":"3"}'> </td>
			<td class="padded">Pottery</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 3</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Tribal Community</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="5" id="5" data-obj='{"depend":[2,3],"FP":"4"}'> </td>
			<td class="padded">The Wheel</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 4</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Stilt Houses
				<br>Spears</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="6" id="6" data-obj='{"depend":[4,3],"FP":"5"}'> </td>
			<td class="padded">Construction</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 5</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Pottery
				<br>Spears</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="7" id="7" data-obj='{"depend":[5],"FP":"5","Coins":"200"}'> </td>
			<td class="padded">Slingshots</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 5</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">The Wheel</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="8" id="8" data-obj='{"depend":[6],"FP":"5","Coins":"100","Supplies":"200"}'> </td>
			<td class="padded">Chalets</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 5</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Construction</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="9" id="9" data-obj='{"depend":[5,6],"FP":"6","Coins":"200","Supplies":"100"}'> </td>
			<td class="padded">Cultivation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 6</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">The Wheel
				<br>Construction</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="10" id="10" data-obj='{"depend":[6],"FP":"3","Supplies":"100"}'> </td>
			<td class="padded">Tools</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 3</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Construction</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="11" id="11" data-obj='{"depend":[8],"FP":"5","Supplies":"300"}'> </td>
			<td class="padded">Growing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 5</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Chalets</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="12" id="12" data-obj='{"depend":[8,7],"FP":"6","Coins":"250"}'> </td>
			<td class="padded">Horseback Riding</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 6</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Chalets
				<br>Slingshots</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="13" id="13" data-obj='{"depend":[9],"FP":"6","Coins":"150","Supplies":"200"}'> </td>
			<td class="padded">Thatched Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 6</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cultivation</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="14" id="14" data-obj='{"depend":[10],"FP":"5","Supplies":"500"}'> </td>
			<td class="padded">Stonework</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 5</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Tools</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="15" id="15" data-obj='{"depend":[10],"FP":"5","Coins":"200","Supplies":"100"}'> </td>
			<td class="padded">Woodwork</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 5</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Tools</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="16" id="16" data-obj='{"depend":[12,13],"FP":"8","Supplies":"200"}'> </td>
			<td class="padded">Phalanx</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 8</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Horseback Riding
				<br>Thatched Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="17" id="17" data-obj='{"depend":[13],"FP":"8","Coins":"350"}'> </td>
			<td class="padded">Smithery</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 8</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Thatched Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="18" id="18" data-obj='{"depend":[13],"FP":"7","Coins":"200","Supplies":"50"}'> </td>
			<td class="padded">Teaching</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 7</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Thatched Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="19" id="19" data-obj='{"depend":[14,15],"Marble":"2","Lumber":"2","FP":"6"}'> </td>
			<td class="padded">Craftwork</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 6</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Marble.webp" alt="Marble" title="Marble" > 2</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Lumber.webp" alt="Lumber" title="Lumber" > 2</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Stonework
				<br>Woodwork</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="20" id="20" data-obj='{"depend":[16],"FP":"7","Supplies":"100"}'> </td>
			<td class="padded">Paths</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 7</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Phalanx</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="21" id="21" data-obj='{"depend":[16,17],"FP":"9","Coins":"500"}'> </td>
			<td class="padded">Siege Weapons</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 9</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Phalanx
				<br>Smithery</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="22" id="22" data-obj='{"depend":[17,18],"FP":"10","Coins":"150","Supplies":"150"}'> </td>
			<td class="padded">Brewing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 10</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Smithery
				<br>Teaching</td>
			<td class="padded"></td>
		</tr>
		<tr class="ba bold index">
			<td>
				<input type="checkbox" name="23" id="23" data-obj='{"depend":[18],"FP":"8","Supplies":"300"}'> </td>
			<td class="padded">Manuring</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 8</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Teaching</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="24" id="24" data-obj='{"depend":[20,21],"FP":"13","Coins":"250","Supplies":"100"}'> </td>
			<td class="padded">Roof Tile Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 13</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Paths
				<br>Siege Weapons</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="25" id="25" data-obj='{"depend":[21,22],"Stone":"5","FP":"12"}'> </td>
			<td class="padded">Architecture</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 12</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Stone.webp" alt="Stone" title="Stone" > 5</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Siege Weapons
				<br>Brewing</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="26" id="26" data-obj='{"depend":[22,23],"Wine":"8","FP":"14"}'> </td>
			<td class="padded">Militia</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 14</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Wine.webp" alt="Wine" title="Wine" > 8</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Brewing
				<br>Manuring</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="27" id="27" data-obj='{"depend":[24],"FP":"12","Coins":"300","Supplies":"250"}'> </td>
			<td class="padded">Stock Breeding</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 12</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Roof Tile Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="28" id="28" data-obj='{"depend":[24,25],"Dye":"12","FP":"13"}'> </td>
			<td class="padded">Processions</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 13</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Dye.webp" alt="Dye" title="Dye" > 12</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Roof Tile Houses
				<br>Architecture</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="29" id="29" data-obj='{"depend":[25,26],"FP":"11","Coins":"600"}'> </td>
			<td class="padded">Processing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 11</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Architecture
				<br>Militia</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="30" id="30" data-obj='{"depend":[26],"FP":"6","Supplies":"1500"}'> </td>
			<td class="padded">Iron Works</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 6</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Militia</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="31" id="31" data-obj='{"depend":[26],"FP":"13","Coins":"1500"}'> </td>
			<td class="padded">Handicraft</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 13</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Militia</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="32" id="32" data-obj='{"depend":[27],"Lumber":"30","FP":"11"}'> </td>
			<td class="padded">Agriculture</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 11</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Lumber.webp" alt="Lumber" title="Lumber" > 30</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Stock Breeding</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="33" id="33" data-obj='{"depend":[27,28],"FP":"13","Coins":"600","Supplies":"1250"}'> </td>
			<td class="padded">Cottage</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 13</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Stock Breeding
				<br>Processions</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="34" id="34" data-obj='{"depend":[28,29],"Marble":"16","FP":"13"}'> </td>
			<td class="padded">Archery</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 13</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Marble.webp" alt="Marble" title="Marble" > 16</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Processions
				<br>Processing</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="35" id="35" data-obj='{"depend":[30,31],"Dye":"15","Limestone":"3","FP":"5","Supplies":"750"}'> </td>
			<td class="padded">Sewerage</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 5</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Dye.webp" alt="Dye" title="Dye" > 15</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Limestone.webp" alt="Limestone" title="Limestone" > 3</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Iron Works
				<br>Handicraft</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="36" id="36" data-obj='{"depend":[33],"FP":"16","Coins":"100","Supplies":"2500"}'> </td>
			<td class="padded">Butchery</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 16</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cottage</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="37" id="37" data-obj='{"depend":[33,34],"FP":"22","Coins":"1500","Supplies":"2000"}'> </td>
			<td class="padded">Military Tactics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 22</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cottage
				<br>Archery</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="38" id="38" data-obj='{"depend":[33,34],"Stone":"20","Ebony":"4","FP":"13","Supplies":"1400"}'> </td>
			<td class="padded">Fortification</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 13</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Stone.webp" alt="Stone" title="Stone" > 20</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Ebony.webp" alt="Ebony" title="Ebony" > 4</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cottage
				<br>Archery</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="39" id="39" data-obj='{"depend":[36,37],"FP":"20","Coins":"2000","Supplies":"1500"}'> </td>
			<td class="padded">Mathematics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 20</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Butchery
				<br>Military Tactics</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="40" id="40" data-obj='{"depend":[37,38],"Marble":"21","Cloth":"11","FP":"17","Coins":"600","Supplies":"750"}'> </td>
			<td class="padded">Thermae</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 17</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Marble.webp" alt="Marble" title="Marble" > 21</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Cloth.webp" alt="Cloth" title="Cloth" > 11</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Military Tactics
				<br>Fortification</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="41" id="41" data-obj='{"depend":[38],"Lumber":"30","Iron":"13","FP":"15"}'> </td>
			<td class="padded">Plowing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 15</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Lumber.webp" alt="Lumber" title="Lumber" > 30</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Iron.webp" alt="Iron" title="Iron" > 13</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Fortification</td>
			<td class="padded"></td>
		</tr>
		<tr class="ia bold index">
			<td>
				<input type="checkbox" name="42" id="42" data-obj='{"depend":[38],"Wine":"50","Jewelry":"16","FP":"17","Coins":"600","Supplies":"1100"}'> </td>
			<td class="padded">Chain of Command</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 17</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Wine.webp" alt="Wine" title="Wine" > 50</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Jewelry.webp" alt="Jewelry" title="Jewelry" > 16</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Fortification</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="43" id="43" data-obj='{"depend":[39,40],"FP":"12","Coins":"3000","Supplies":"1500"}'> </td>
			<td class="padded">Frame Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 12</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mathematics
				<br>Thermae</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="44" id="44" data-obj='{"depend":[39,42],"FP":"18","Coins":"1500","Supplies":"3000"}'> </td>
			<td class="padded">Tanning</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 18</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mathematics
				<br>Chain of Command</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="45" id="45" data-obj='{"depend":[42],"FP":"23"}'> </td>
			<td class="padded">Multistorey Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 23</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Chain of Command</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="46" id="46" data-obj='{"depend":[43],"FP":"20","Coins":"3000","Supplies":"3000"}'> </td>
			<td class="padded">Casting</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 20</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Frame Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="47" id="47" data-obj='{"depend":[43,44],"Ebony":"28","Marble":"22","FP":"25","Coins":"750","Supplies":"1500"}'> </td>
			<td class="padded">Mounted Archers</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 25</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Ebony.webp" alt="Ebony" title="Ebony" > 28</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Marble.webp" alt="Marble" title="Marble" > 22</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Frame Houses
				<br>Tanning</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="48" id="48" data-obj='{"depend":[43,44],"Jewelry":"20","Dye":"46","FP":"26","Coins":"750","Supplies":"1000"}'> </td>
			<td class="padded">Economics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 26</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Jewelry.webp" alt="Jewelry" title="Jewelry" > 20</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Dye.webp" alt="Dye" title="Dye" > 46</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Frame Houses
				<br>Tanning</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="49" id="49" data-obj='{"depend":[44],"FP":"20","Coins":"3000","Supplies":"5000"}'> </td>
			<td class="padded">Apiary</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 20</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Tanning</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="50" id="50" data-obj='{"depend":[44],"FP":"22","Supplies":"6000"}'> </td>
			<td class="padded">Quarries</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 22</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 6,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Tanning</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="51" id="51" data-obj='{"depend":[47],"Limestone":"40","Lumber":"34","FP":"25","Coins":"3000","Supplies":"1000"}'> </td>
			<td class="padded">Accommodation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 25</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Limestone.webp" alt="Limestone" title="Limestone" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Lumber.webp" alt="Lumber" title="Lumber" > 34</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mounted Archers</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="52" id="52" data-obj='{"depend":[47],"FP":"26","Coins":"1500","Supplies":"4000"}'> </td>
			<td class="padded">Police</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 26</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 4,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mounted Archers</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="53" id="53" data-obj='{"depend":[47,48],"Iron":"42","Wine":"35","FP":"26","Coins":"1250","Supplies":"1500"}'> </td>
			<td class="padded">Mercenaries</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 26</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Iron.webp" alt="Iron" title="Iron" > 42</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Wine.webp" alt="Wine" title="Wine" > 35</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mounted Archers
				<br>Economics</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="54" id="54" data-obj='{"depend":[48],"Cloth":"49","Stone":"61","FP":"29","Coins":"1500","Supplies":"1250"}'> </td>
			<td class="padded">Leather Working</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 29</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Cloth.webp" alt="Cloth" title="Cloth" > 49</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Stone.webp" alt="Stone" title="Stone" > 61</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Economics</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="55" id="55" data-obj='{"depend":[51,52],"Ebony":"35","Granite":"4","FP":"24","Coins":"500","Supplies":"2000"}'> </td>
			<td class="padded">Clapboard Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 24</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Ebony.webp" alt="Ebony" title="Ebony" > 35</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Granite.webp" alt="Granite" title="Granite" > 4</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Accommodation
				<br>Police</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="56" id="56" data-obj='{"depend":[53],"FP":"33","Coins":"4000","Supplies":"7500"}'> </td>
			<td class="padded">Heavy Cavalry</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 33</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 7,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mercenaries</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="57" id="57" data-obj='{"depend":[54],"FP":"30","Coins":"4000","Supplies":"3000"}'> </td>
			<td class="padded">Armored Infantry</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 30</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Leather Working</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="58" id="58" data-obj='{"depend":[55,56],"Limestone":"30","Alabaster":"14","FP":"16","Supplies":"4000"}'> </td>
			<td class="padded">Bridges</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 16</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 4,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Limestone.webp" alt="Limestone" title="Limestone" > 30</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Alabaster.webp" alt="Alabaster" title="Alabaster" > 14</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Clapboard Houses
				<br>Heavy Cavalry</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="59" id="59" data-obj='{"depend":[56,57],"Cloth":"28","Honey":"20","FP":"20","Coins":"2250","Supplies":"2000"}'> </td>
			<td class="padded">Executions</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 20</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Cloth.webp" alt="Cloth" title="Cloth" > 28</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Honey.webp" alt="Honey" title="Honey" > 20</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Heavy Cavalry
				<br>Armored Infantry</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="60" id="60" data-obj='{"depend":[58],"FP":"29"}'> </td>
			<td class="padded">Crop Rotations</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 29</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Bridges</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="61" id="61" data-obj='{"depend":[58,59],"Iron":"40","Copper":"23","FP":"35","Coins":"1500","Supplies":"3000"}'> </td>
			<td class="padded">Physics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 35</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Iron.webp" alt="Iron" title="Iron" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Copper.webp" alt="Copper" title="Copper" > 23</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Bridges
				<br>Executions</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="62" id="62" data-obj='{"depend":[59],"FP":"22","Supplies":"10000"}'> </td>
			<td class="padded">Fertilization</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 22</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 10,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Executions</td>
			<td class="padded"></td>
		</tr>
		<tr class="ema bold index">
			<td>
				<input type="checkbox" name="63" id="63" data-obj='{"depend":[59],"Jewelry":"70","Gold":"30","FP":"24","Supplies":"3000"}'> </td>
			<td class="padded">Monarchy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 24</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Jewelry.webp" alt="Jewelry" title="Jewelry" > 70</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Gold.webp" alt="Gold" title="Gold" > 30</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Executions</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="64" id="64" data-obj='{"depend":[61],"Alabaster":"20","Ebony":"42","FP":"40","Coins":"3500","Supplies":"3000"}'> </td>
			<td class="padded">Counterstrategy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Alabaster.webp" alt="Alabaster" title="Alabaster" > 20</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Ebony.webp" alt="Ebony" title="Ebony" > 42</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Physics</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="65" id="65" data-obj='{"depend":[61],"Copper":"20","Jewelry":"10","FP":"30","Coins":"2500","Supplies":"9000"}'> </td>
			<td class="padded">Quality Products</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 30</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 9,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Copper.webp" alt="Copper" title="Copper" > 20</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Jewelry.webp" alt="Jewelry" title="Jewelry" > 10</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Physics</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="66" id="66" data-obj='{"depend":[61],"Honey":"30","Cloth":"30","FP":"37","Coins":"2500","Supplies":"6000"}'> </td>
			<td class="padded">Alchemy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 37</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 6,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Honey.webp" alt="Honey" title="Honey" > 30</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Cloth.webp" alt="Cloth" title="Cloth" > 30</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Physics</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="67" id="67" data-obj='{"depend":[64],"FP":"45","Coins":"5000","Supplies":"9000"}'> </td>
			<td class="padded">Crossbows</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 45</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 9,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Counterstrategy</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="68" id="68" data-obj='{"depend":[65],"FP":"33","Coins":"3000","Supplies":"12000"}'> </td>
			<td class="padded">Guilds</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 33</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 12,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Quality Products</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="69" id="69" data-obj='{"depend":[65,66],"FP":"20","Coins":"9500","Supplies":"7500"}'> </td>
			<td class="padded">Conservation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 20</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 9,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 7,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Quality Products
				<br>Alchemy</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="70" id="70" data-obj='{"depend":[66],"Granite":"60","Limestone":"28","FP":"30","Coins":"4250","Supplies":"9000"}'> </td>
			<td class="padded">Brownstone Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 30</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 9,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Granite.webp" alt="Granite" title="Granite" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Limestone.webp" alt="Limestone" title="Limestone" > 28</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Alchemy</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="71" id="71" data-obj='{"depend":[67],"Gold":"41","Iron":"47","FP":"40","Coins":"1250","Supplies":"6000"}'> </td>
			<td class="padded">Monotheism</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 6,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Gold.webp" alt="Gold" title="Gold" > 41</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Iron.webp" alt="Iron" title="Iron" > 47</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crossbows</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="72" id="72" data-obj='{"depend":[68],"FP":"26","Supplies":"9500"}'> </td>
			<td class="padded">Trade Routes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 26</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 9,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Guilds</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="73" id="73" data-obj='{"depend":[69],"FP":"43","Supplies":"10000"}'> </td>
			<td class="padded">Chemistry</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 43</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 10,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Conservation</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="74" id="74" data-obj='{"depend":[70],"FP":"35","Coins":"4000","Supplies":"12000"}'> </td>
			<td class="padded">Signposting</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 35</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 12,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Brownstone Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="75" id="75" data-obj='{"depend":[71],"Stone":"66","Rope":"4","FP":"40","Coins":"4500","Supplies":"8500"}'> </td>
			<td class="padded">Chivalry</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 8,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Stone.webp" alt="Stone" title="Stone" > 66</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Rope.webp" alt="Rope" title="Rope" > 4</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Monotheism</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="76" id="76" data-obj='{"depend":[72,73],"FP":"30","Supplies":"20000"}'> </td>
			<td class="padded">Clearing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 30</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 20,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Trade Routes
				<br>Chemistry</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="77" id="77" data-obj='{"depend":[74],"Lumber":"79","Salt":"11","FP":"40","Coins":"4000","Supplies":"8000"}'> </td>
			<td class="padded">Granary</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 8,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Lumber.webp" alt="Lumber" title="Lumber" > 79</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Salt.webp" alt="Salt" title="Salt" > 11</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Signposting</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="78" id="78" data-obj='{"depend":[75],"Dye":"90","Dried-Herbs":"34","FP":"60","Coins":"2500","Supplies":"10500"}'> </td>
			<td class="padded">Heavy Armor</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 10,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Dye.webp" alt="Dye" title="Dye" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Dried_Herbs.webp" alt="Dried Herbs" title="Dried Herbs" > 34</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Chivalry</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="79" id="79" data-obj='{"depend":[76],"FP":"30","Supplies":"12000"}'> </td>
			<td class="padded">Water Wheels</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 30</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 12,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Clearing</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="80" id="80" data-obj='{"depend":[77],"FP":"40","Coins":"2000","Supplies":"13000"}'> </td>
			<td class="padded">Medicine</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 13,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Granary</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="81" id="81" data-obj='{"depend":[77],"Wine":"71","Brick":"40","FP":"40","Coins":"5000","Supplies":"5000"}'> </td>
			<td class="padded">Town Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Wine.webp" alt="Wine" title="Wine" > 71</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Brick.webp" alt="Brick" title="Brick" > 40</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Granary</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="82" id="82" data-obj='{"depend":[78,80],"FP":"50","Supplies":"18000"}'> </td>
			<td class="padded">Heavy Siege Engines</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 18,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Heavy Armor
				<br>Medicine</td>
			<td class="padded"></td>
		</tr>
		<tr class="hma bold index">
			<td>
				<input type="checkbox" name="83" id="83" data-obj='{"depend":[78,80],"Marble":"94","Glass":"50","FP":"24","Supplies":"6000"}'> </td>
			<td class="padded">Hospitals</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 24</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 6,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/BA/Marble.webp" alt="Marble" title="Marble" > 94</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Glass.webp" alt="Glass" title="Glass" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Heavy Armor
				<br>Medicine</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="84" id="84" data-obj='{"depend":[82],"FP":"40","Coins":"15000","Supplies":"2500"}'> </td>
			<td class="padded">Metal Working</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 15,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Heavy Siege Engines</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="85" id="85" data-obj='{"depend":[82],"FP":"52","Coins":"5000","Supplies":"7500"}'> </td>
			<td class="padded">Crane</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 52</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 7,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Heavy Siege Engines</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="86" id="86" data-obj='{"depend":[83],"FP":"60","Supplies":"5000"}'> </td>
			<td class="padded">Biology</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Hospitals</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="87" id="87" data-obj='{"depend":[83],"FP":"42","Coins":"5000","Supplies":"15000"}'> </td>
			<td class="padded">Aristocracy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 42</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 15,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Hospitals</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="88" id="88" data-obj='{"depend":[85],"Rope":"120","Gold":"110","FP":"30","Coins":"5000","Supplies":"10000"}'> </td>
			<td class="padded">Cartography</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 30</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 10,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Rope.webp" alt="Rope" title="Rope" > 120</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Gold.webp" alt="Gold" title="Gold" > 110</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crane</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="89" id="89" data-obj='{"depend":[85,86],"Brick":"60","Honey":"140","FP":"60","Coins":"2500","Supplies":"5000"}'> </td>
			<td class="padded">Estate Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Brick.webp" alt="Brick" title="Brick" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Honey.webp" alt="Honey" title="Honey" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crane
				<br>Biology</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="90" id="90" data-obj='{"depend":[85,86],"Dried-Herbs":"80","Copper":"150","FP":"58","Coins":"2500","Supplies":"15000"}'> </td>
			<td class="padded">Great Swords</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 58</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 15,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Dried_Herbs.webp" alt="Dried Herbs" title="Dried Herbs" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Copper.webp" alt="Copper" title="Copper" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crane
				<br>Biology</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="91" id="91" data-obj='{"depend":[88],"Salt":"100","Granite":"140","FP":"30","Supplies":"20000"}'> </td>
			<td class="padded">New Trade Routes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 30</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 20,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Salt.webp" alt="Salt" title="Salt" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Granite.webp" alt="Granite" title="Granite" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cartography</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="92" id="92" data-obj='{"depend":[89],"FP":"35","Supplies":"40000"}'> </td>
			<td class="padded">Water Reservoirs</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 35</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 40,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Estate Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="93" id="93" data-obj='{"depend":[90],"FP":"65","Coins":"15000","Supplies":"30000"}'> </td>
			<td class="padded">Longbows</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 65</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 15,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Great Swords</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="94" id="94" data-obj='{"depend":[90],"Glass":"80","Alabaster":"200","FP":"49","Coins":"20000","Supplies":"20000"}'> </td>
			<td class="padded">Manufacturing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 49</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 20,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 20,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Glass.webp" alt="Glass" title="Glass" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Alabaster.webp" alt="Alabaster" title="Alabaster" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Great Swords</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="95" id="95" data-obj='{"depend":[91,92],"FP":"38","Coins":"17500","Supplies":"22500"}'> </td>
			<td class="padded">Intelligence</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 38</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 17,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 22,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">New Trade Routes
				<br>Water Reservoirs</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="96" id="96" data-obj='{"depend":[93],"FP":"80","Coins":"12500","Supplies":"30000"}'> </td>
			<td class="padded">Cavalry Tactics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 12,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Longbows</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="97" id="97" data-obj='{"depend":[93,94],"FP":"43","Coins":"7500","Supplies":"30000"}'> </td>
			<td class="padded">Letterpress</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 43</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 7,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Longbows
				<br>Manufacturing</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="98" id="98" data-obj='{"depend":[94],"FP":"40","Supplies":"30000"}'> </td>
			<td class="padded">Optics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Manufacturing</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="99" id="99" data-obj='{"depend":[95],"Gunpowder":"50","Ebony":"140","FP":"45","Coins":"10000","Supplies":"20000"}'> </td>
			<td class="padded">Higher Education</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 45</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 10,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 20,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Gunpowder.webp" alt="Gunpowder" title="Gunpowder" > 50</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Ebony.webp" alt="Ebony" title="Ebony" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Intelligence</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="100" id="100" data-obj='{"depend":[95,96],"Silk":"40","Limestone":"150","FP":"80","Coins":"7500"}'> </td>
			<td class="padded">Pike Square</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 7,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Silk.webp" alt="Silk" title="Silk" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Limestone.webp" alt="Limestone" title="Limestone" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Intelligence
				<br>Cavalry Tactics</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="101" id="101" data-obj='{"depend":[97],"Brass":"50","Iron":"100","FP":"55","Supplies":"50000"}'> </td>
			<td class="padded">Brewing Kettles</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 55</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 50,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Brass.webp" alt="Brass" title="Brass" > 50</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Iron.webp" alt="Iron" title="Iron" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Letterpress</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="102" id="102" data-obj='{"depend":[99,100],"Talc-Powder":"70","Jewelry":"140","FP":"70","Coins":"25000","Supplies":"30000"}'> </td>
			<td class="padded">Apartment Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 70</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 25,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Talc_Powder.webp" alt="Talc Powder" title="Talc Powder" > 70</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Jewelry.webp" alt="Jewelry" title="Jewelry" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Higher Education
				<br>Pike Square</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="103" id="103" data-obj='{"depend":[99,100],"FP":"40","Supplies":"5000"}'> </td>
			<td class="padded">Pest Control</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Higher Education
				<br>Pike Square</td>
			<td class="padded"></td>
		</tr>
		<tr class="lma bold index">
			<td>
				<input type="checkbox" name="104" id="104" data-obj='{"depend":[100,101],"Basalt":"80","Cloth":"130","FP":"60","Coins":"5000","Supplies":"40000"}'> </td>
			<td class="padded">Gunpowder</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 40,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Basalt.webp" alt="Basalt" title="Basalt" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/IA/Cloth.webp" alt="Cloth" title="Cloth" > 130</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Pike Square
				<br>Brewing Kettles</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="105" id="105" data-obj='{"depend":[102],"FP":"37","Coins":"2000","Supplies":"20000"}'> </td>
			<td class="padded">Porcelain</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 37</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 20,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Apartment Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="106" id="106" data-obj='{"depend":[102],"Gunpowder":"70","Brass":"60","FP":"56","Coins":"4000","Supplies":"10000"}'> </td>
			<td class="padded">Muskets</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 56</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 10,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Gunpowder.webp" alt="Gunpowder" title="Gunpowder" > 70</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Brass.webp" alt="Brass" title="Brass" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Apartment Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="107" id="107" data-obj='{"depend":[104],"Rope":"110","Honey":"160","FP":"38","Supplies":"25000"}'> </td>
			<td class="padded">Maritime Shipping</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 38</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 25,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Rope.webp" alt="Rope" title="Rope" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Honey.webp" alt="Honey" title="Honey" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Gunpowder</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="108" id="108" data-obj='{"depend":[104],"FP":"55","Coins":"3500","Supplies":"30000"}'> </td>
			<td class="padded">Industrial Goods</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 55</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Gunpowder</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="109" id="109" data-obj='{"depend":[106,107],"Salt":"100","Glass":"130","FP":"36","Coins":"20000","Supplies":"50000"}'> </td>
			<td class="padded">Colonies</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 36</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 20,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 50,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Salt.webp" alt="Salt" title="Salt" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Glass.webp" alt="Glass" title="Glass" > 130</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Maritime Shipping
				<br>Muskets</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="110" id="110" data-obj='{"depend":[109],"Basalt":"60","Brick":"100","FP":"54","Supplies":"12000"}'> </td>
			<td class="padded">Arcade Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 54</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 12,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Basalt.webp" alt="Basalt" title="Basalt" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Brick.webp" alt="Brick" title="Brick" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Colonies</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="111" id="111" data-obj='{"depend":[109],"Dried-Herbs":"110","FP":"35","Coins":"4000","Supplies":"15000"}'> </td>
			<td class="padded">Plantation Goods</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 35</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 15,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Dried_Herbs.webp" alt="Dried Herbs" title="Dried Herbs" > 110</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Colonies</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="112" id="112" data-obj='{"depend":[109],"FP":"73","Coins":"5000","Supplies":"25000"}'> </td>
			<td class="padded">New Crops</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 73</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 25,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Colonies</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="113" id="113" data-obj='{"depend":[109],"Gold":"40","Tar":"20","FP":"58","Supplies":"18000"}'> </td>
			<td class="padded">Exploration</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 58</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 18,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Gold.webp" alt="Gold" title="Gold" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Tar.webp" alt="Tar" title="Tar" > 20</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Colonies</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="114" id="114" data-obj='{"depend":[110],"Silk":"90","Talc-Powder":"140","FP":"59","Coins":"18000","Supplies":"18000"}'> </td>
			<td class="padded">Fashion</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 59</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 18,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 18,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Silk.webp" alt="Silk" title="Silk" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Talc_Powder.webp" alt="Talc Powder" title="Talc Powder" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arcade Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="115" id="115" data-obj='{"depend":[111,112],"Granite":"150","Tar":"20","FP":"53","Coins":"5000","Supplies":"5000"}'> </td>
			<td class="padded">Plantations</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 53</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Granite.webp" alt="Granite" title="Granite" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Tar.webp" alt="Tar" title="Tar" > 20</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Plantation Goods
				<br>New Crops</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="116" id="116" data-obj='{"depend":[112,113],"Gold":"20","FP":"43","Coins":"10000","Supplies":"15000"}'> </td>
			<td class="padded">Trading Charters</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 43</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 10,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 15,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Gold.webp" alt="Gold" title="Gold" > 20</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">New Crops
				<br>Exploration</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="117" id="117" data-obj='{"depend":[114],"Coffee":"40","Copper":"50","FP":"51","Coins":"2500","Supplies":"8000"}'> </td>
			<td class="padded">Rapid Response</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 51</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 8,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Coffee.webp" alt="Coffee" title="Coffee" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Copper.webp" alt="Copper" title="Copper" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Fashion</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="118" id="118" data-obj='{"depend":[115],"FP":"38","Coins":"3000","Supplies":"30000"}'> </td>
			<td class="padded">Country Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 38</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Plantations</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="119" id="119" data-obj='{"depend":[116],"Porcelain":"60","Alabaster":"120","FP":"58","Coins":"8000","Supplies":"5000"}'> </td>
			<td class="padded">Imperialism</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 58</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 8,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Porcelain.webp" alt="Porcelain" title="Porcelain" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Alabaster.webp" alt="Alabaster" title="Alabaster" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Trading Charters</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="120" id="120" data-obj='{"depend":[117],"Paper":"80","FP":"58","Coins":"1000","Supplies":"2500"}'> </td>
			<td class="padded">Malthusian Theory</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 58</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Paper.webp" alt="Paper" title="Paper" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Rapid Response</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="121" id="121" data-obj='{"depend":[117,118],"Silk":"60","Gold":"110","FP":"45","Coins":"1337","Supplies":"13370"}'> </td>
			<td class="padded">Elite Forces</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 45</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,337</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 13,370</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Silk.webp" alt="Silk" title="Silk" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Gold.webp" alt="Gold" title="Gold" > 110</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Rapid Response
				<br>Country Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="122" id="122" data-obj='{"depend":[118,119],"Wire":"80","Copper":"110","FP":"45","Coins":"5000","Supplies":"20000"}'> </td>
			<td class="padded">Clockmaking</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 45</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 20,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Wire.webp" alt="Wire" title="Wire" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/EMA/Copper.webp" alt="Copper" title="Copper" > 110</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Country Houses
				<br>Imperialism</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="123" id="123" data-obj='{"depend":[120,121],"Basalt":"100","FP":"68","Coins":"20000","Supplies":"75000"}'> </td>
			<td class="padded">Gambrel Roof Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 68</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 20,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 75,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Basalt.webp" alt="Basalt" title="Basalt" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Malthusian Theory
				<br>Elite Forces</td>
			<td class="padded"></td>
		</tr>
		<tr class="ca bold index">
			<td>
				<input type="checkbox" name="124" id="124" data-obj='{"depend":[121,122],"Gunpowder":"80","FP":"40","Coins":"3000","Supplies":"25000"}'> </td>
			<td class="padded">Field Artillery</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 40</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 25,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Gunpowder.webp" alt="Gunpowder" title="Gunpowder" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Elite Forces
				<br>Clockmaking</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="125" id="125" data-obj='{"depend":[123,124],"Brick":"90","Glass":"50","FP":"60","Supplies":"300000"}'> </td>
			<td class="padded">Industrialization</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 300,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Brick.webp" alt="Brick" title="Brick" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Glass.webp" alt="Glass" title="Glass" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Gambrel Roof Houses
				<br>Field Artillery</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="126" id="126" data-obj='{"depend":[123,124],"Salt":"100","Basalt":"60","FP":"70","Coins":"75000","Supplies":"150000"}'> </td>
			<td class="padded">Extraction</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 70</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 75,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 150,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Salt.webp" alt="Salt" title="Salt" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Basalt.webp" alt="Basalt" title="Basalt" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Gambrel Roof Houses
				<br>Field Artillery</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="127" id="127" data-obj='{"depend":[125],"Silk":"100","Textiles":"40","FP":"48","Supplies":"50000"}'> </td>
			<td class="padded">Rifles</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 48</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 50,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Silk.webp" alt="Silk" title="Silk" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Textiles.webp" alt="Textiles" title="Textiles" > 40</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Industrialization</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="128" id="128" data-obj='{"depend":[125],"Brass":"200","Coke":"55","FP":"110","Coins":"30000","Supplies":"60000"}'> </td>
			<td class="padded">Railroad</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 30,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 60,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Brass.webp" alt="Brass" title="Brass" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Coke.webp" alt="Coke" title="Coke" > 55</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Industrialization</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="129" id="129" data-obj='{"depend":[126],"Dried-Herbs":"190","Rubber":"90","FP":"110","Coins":"30000","Supplies":"60000"}'> </td>
			<td class="padded">Hygiene</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 30,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 60,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Dried_Herbs.webp" alt="Dried Herbs" title="Dried Herbs" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Rubber.webp" alt="Rubber" title="Rubber" > 90</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Extraction</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="130" id="130" data-obj='{"depend":[126],"Talc-Powder":"130","Glass":"50","FP":"48","Coins":"10000","Supplies":"20000"}'> </td>
			<td class="padded">Modern Chemistry</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 48</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 10,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 20,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Talc_Powder.webp" alt="Talc Powder" title="Talc Powder" > 130</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Glass.webp" alt="Glass" title="Glass" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Extraction</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="131" id="131" data-obj='{"depend":[127,128],"Fertilizer":"45","Rope":"80","FP":"58","Coins":"30000"}'> </td>
			<td class="padded">Workers` Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 58</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 30,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Fertilizer.webp" alt="Fertilizer" title="Fertilizer" > 45</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Rope.webp" alt="Rope" title="Rope" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Rifles
				<br>Railroad</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="132" id="132" data-obj='{"depend":[129,130],"Coffee":"90","Rope":"110","FP":"42","Supplies":"30000"}'> </td>
			<td class="padded">The West</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 42</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Coffee.webp" alt="Coffee" title="Coffee" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Rope.webp" alt="Rope" title="Rope" > 110</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Hygiene
				<br>Modern Chemistry</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="133" id="133" data-obj='{"depend":[131],"Coffee":"80","Silk":"30","FP":"42","Supplies":"60000"}'> </td>
			<td class="padded">Reconnaissance</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 42</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 60,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Coffee.webp" alt="Coffee" title="Coffee" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Silk.webp" alt="Silk" title="Silk" > 30</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Workers` Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="134" id="134" data-obj='{"depend":[131,132],"Wire":"160","Coke":"50","FP":"30","Coins":"5000","Supplies":"90000"}'> </td>
			<td class="padded">Precision Tools</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 30</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 90,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Wire.webp" alt="Wire" title="Wire" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Coke.webp" alt="Coke" title="Coke" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Workers` Houses
				<br>The West</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="135" id="135" data-obj='{"depend":[132],"Tar":"80","Porcelain":"60","FP":"68"}'> </td>
			<td class="padded">Boarding Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 68</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Tar.webp" alt="Tar" title="Tar" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Porcelain.webp" alt="Porcelain" title="Porcelain" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">The West</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="136" id="136" data-obj='{"depend":[133,134],"Whale-Oil":"60","Porcelain":"100","FP":"68","Coins":"70000"}'> </td>
			<td class="padded">Victorian Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 68</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 70,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Whale_Oil.webp" alt="Whale Oil" title="Whale Oil" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Porcelain.webp" alt="Porcelain" title="Porcelain" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Reconnaissance
				<br>Precision Tools</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="137" id="137" data-obj='{"depend":[134],"Salt":"110","Glass":"60","FP":"80","Coins":"8000","Supplies":"200000"}'> </td>
			<td class="padded">Modern Manufacturing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 8,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Salt.webp" alt="Salt" title="Salt" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Glass.webp" alt="Glass" title="Glass" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Precision Tools</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="138" id="138" data-obj='{"depend":[134],"Tar":"70","Fertilizer":"50","FP":"33","Coins":"20000","Supplies":"180000"}'> </td>
			<td class="padded">Modern Roads</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 33</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 20,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 180,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Tar.webp" alt="Tar" title="Tar" > 70</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Fertilizer.webp" alt="Fertilizer" title="Fertilizer" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Precision Tools</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="139" id="139" data-obj='{"depend":[134,135],"Whale-Oil":"50","Textiles":"60","FP":"73","Supplies":"70000"}'> </td>
			<td class="padded">Flanking Tactics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 73</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 70,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Whale_Oil.webp" alt="Whale Oil" title="Whale Oil" > 50</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Textiles.webp" alt="Textiles" title="Textiles" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Precision Tools
				<br>Boarding Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="140" id="140" data-obj='{"depend":[134,135],"Paper":"120","Silk":"100","FP":"41","Coins":"5000","Supplies":"5000"}'> </td>
			<td class="padded">Law and Order</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 41</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Paper.webp" alt="Paper" title="Paper" > 120</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Silk.webp" alt="Silk" title="Silk" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Precision Tools
				<br>Boarding Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="141" id="141" data-obj='{"depend":[136,137],"Rubber":"70","Gunpowder":"110","FP":"55","Supplies":"80000"}'> </td>
			<td class="padded">Ballistics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 55</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 80,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Rubber.webp" alt="Rubber" title="Rubber" > 70</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Gunpowder.webp" alt="Gunpowder" title="Gunpowder" > 110</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Victorian Houses
				<br>Modern Manufacturing</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="142" id="142" data-obj='{"depend":[138,137,139],"Brick":"130","Basalt":"110","FP":"37","Coins":"20000","Supplies":"50000"}'> </td>
			<td class="padded">Infrastructure</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 37</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 20,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 50,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/HMA/Brick.webp" alt="Brick" title="Brick" > 130</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Basalt.webp" alt="Basalt" title="Basalt" > 110</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Modern Roads
				<br>Modern Manufacturing
				<br>Flanking Tactics</td>
			<td class="padded"></td>
		</tr>
		<tr class="inda bold index">
			<td>
				<input type="checkbox" name="143" id="143" data-obj='{"depend":[139,140],"Gunpowder":"100","Brass":"60","FP":"67","Supplies":"90000"}'> </td>
			<td class="padded">Breech Loading</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 67</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 90,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Gunpowder.webp" alt="Gunpowder" title="Gunpowder" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Brass.webp" alt="Brass" title="Brass" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Flanking Tactics
				<br>Law and Order</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="144" id="144" data-obj='{"depend":[142],"Basalt":"180","Tar":"100","FP":"75","Coins":"20000","Supplies":"225000"}'> </td>
			<td class="padded">Traffic Lanes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 75</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 20,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 225,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Basalt.webp" alt="Basalt" title="Basalt" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Tar.webp" alt="Tar" title="Tar" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Infrastructure</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="145" id="145" data-obj='{"depend":[144],"Brass":"130","Wire":"60","FP":"55","Supplies":"75000"}'> </td>
			<td class="padded">Mass Manufacturing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 55</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 75,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Brass.webp" alt="Brass" title="Brass" > 130</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Wire.webp" alt="Wire" title="Wire" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Traffic Lanes</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="146" id="146" data-obj='{"depend":[144],"Gunpowder":"160","Fertilizer":"75","FP":"55","Supplies":"75000"}'> </td>
			<td class="padded">Modern Explosives</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 55</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 75,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Gunpowder.webp" alt="Gunpowder" title="Gunpowder" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Fertilizer.webp" alt="Fertilizer" title="Fertilizer" > 75</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Traffic Lanes</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="147" id="147" data-obj='{"depend":[144],"Porcelain":"110","Rubber":"100","FP":"55","Coins":"50000","Supplies":"25000"}'> </td>
			<td class="padded">Oil Refining</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 55</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 50,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 25,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Porcelain.webp" alt="Porcelain" title="Porcelain" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Rubber.webp" alt="Rubber" title="Rubber" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Traffic Lanes</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="148" id="148" data-obj='{"depend":[144],"Talc-Powder":"60","Coke":"50","FP":"85","Coins":"75000","Supplies":"75000"}'> </td>
			<td class="padded">Modern Materials</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 85</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 75,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 75,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Talc_Powder.webp" alt="Talc Powder" title="Talc Powder" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Coke.webp" alt="Coke" title="Coke" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Traffic Lanes</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="149" id="149" data-obj='{"depend":[145],"Wire":"80","Brass":"80","FP":"90","Coins":"100000"}'> </td>
			<td class="padded">Electricity</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Wire.webp" alt="Wire" title="Wire" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Brass.webp" alt="Brass" title="Brass" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mass Manufacturing</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="150" id="150" data-obj='{"depend":[146],"Explosives":"60","Machine-Parts":"20","FP":"48","Supplies":"90000"}'> </td>
			<td class="padded">Percussion Fuze</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 48</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 90,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 20</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Modern Explosives</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="151" id="151" data-obj='{"depend":[147],"Machine-Parts":"60","Gasoline":"50","FP":"74","Supplies":"80000"}'> </td>
			<td class="padded">Automobiles</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 74</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 80,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Oil Refining</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="152" id="152" data-obj='{"depend":[147,148],"Coffee":"90","Whale-Oil":"140","FP":"35","Supplies":"90000"}'> </td>
			<td class="padded">Urbanization</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 35</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 90,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Coffee.webp" alt="Coffee" title="Coffee" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Whale_Oil.webp" alt="Whale Oil" title="Whale Oil" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Oil Refining
				<br>Modern Materials</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="153" id="153" data-obj='{"depend":[148],"Talc-Powder":"90","Whale-Oil":"80","FP":"51","Supplies":"120000"}'> </td>
			<td class="padded">Tenement Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 51</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 120,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Talc_Powder.webp" alt="Talc Powder" title="Talc Powder" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Whale_Oil.webp" alt="Whale Oil" title="Whale Oil" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Modern Materials</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="154" id="154" data-obj='{"depend":[149],"Wire":"110","Coke":"130","FP":"43","Supplies":"100000"}'> </td>
			<td class="padded">Power Distribution</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 43</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Wire.webp" alt="Wire" title="Wire" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Coke.webp" alt="Coke" title="Coke" > 130</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Electricity</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="155" id="155" data-obj='{"depend":[150],"Talc-Powder":"90","Porcelain":"80","FP":"65","Coins":"40000","Supplies":"80000"}'> </td>
			<td class="padded">Council Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 65</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 40,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 80,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Talc_Powder.webp" alt="Talc Powder" title="Talc Powder" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Porcelain.webp" alt="Porcelain" title="Porcelain" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Percussion Fuze</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="156" id="156" data-obj='{"depend":[151],"Tinplate":"150","Gasoline":"40","FP":"53","Supplies":"80000"}'> </td>
			<td class="padded">Armor Plating</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 53</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 80,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 40</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Automobiles</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="157" id="157" data-obj='{"depend":[152],"Paper":"220","Silk":"150","FP":"68"}'> </td>
			<td class="padded">Journalism</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 68</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Paper.webp" alt="Paper" title="Paper" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/LMA/Silk.webp" alt="Silk" title="Silk" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Urbanization</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="158" id="158" data-obj='{"depend":[153],"Fertilizer":"200","Gasoline":"80","FP":"47","Coins":"50000","Supplies":"75000"}'> </td>
			<td class="padded">Ranching</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 47</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 50,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 75,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Fertilizer.webp" alt="Fertilizer" title="Fertilizer" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Tenement Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="159" id="159" data-obj='{"depend":[154,155],"Tar":"220","Machine-Parts":"140","FP":"73","Coins":"18000","Supplies":"90000"}'> </td>
			<td class="padded">Public Transport</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 73</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 18,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 90,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Tar.webp" alt="Tar" title="Tar" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Power Distribution
				<br>Council Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="160" id="160" data-obj='{"depend":[156],"Machine-Parts":"110","Explosives":"60","FP":"88","Supplies":"80000"}'> </td>
			<td class="padded">Tracked Vehicles</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 88</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 80,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Armor Plating</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="161" id="161" data-obj='{"depend":[157,158],"Textiles":"230","Coffee":"230","FP":"88","Coins":"150000","Supplies":"100000"}'> </td>
			<td class="padded">Mass Mobilization</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 88</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 150,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Textiles.webp" alt="Textiles" title="Textiles" > 230</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Coffee.webp" alt="Coffee" title="Coffee" > 230</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Journalism
				<br>Ranching</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="162" id="162" data-obj='{"depend":[159],"Asbestos":"180","Tinplate":"90","FP":"98","Coins":"11111","Supplies":"111111"}'> </td>
			<td class="padded">High-Rises</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 98</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 11,111</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 111,111</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Asbestos.webp" alt="Asbestos" title="Asbestos" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 90</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Public Transport</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="163" id="163" data-obj='{"depend":[160],"Explosives":"180","Rubber":"160","FP":"53","Supplies":"25000"}'> </td>
			<td class="padded">Scoped Rifles</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 53</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 25,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Rubber.webp" alt="Rubber" title="Rubber" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Tracked Vehicles</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="164" id="164" data-obj='{"depend":[161],"Porcelain":"190","Tinplate":"110","FP":"79","Supplies":"180000"}'> </td>
			<td class="padded">Antibiotics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 79</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 180,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Porcelain.webp" alt="Porcelain" title="Porcelain" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 110</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mass Mobilization</td>
			<td class="padded"></td>
		</tr>
		<tr class="pe bold index">
			<td>
				<input type="checkbox" name="165" id="165" data-obj='{"depend":[164,162],"Asbestos":"150","Gasoline":"130","FP":"52","Supplies":"250000"}'> </td>
			<td class="padded">Recreation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 52</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 250,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Asbestos.webp" alt="Asbestos" title="Asbestos" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 130</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Antibiotics
				<br>High-Rises</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="166" id="166" data-obj='{"depend":[165],"Machine-Parts":"200","Coke":"200","FP":"102","Coins":"100000","Supplies":"200000"}'> </td>
			<td class="padded">Prefabrication</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 102</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Coke.webp" alt="Coke" title="Coke" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Recreation</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="167" id="167" data-obj='{"depend":[165],"Gasoline":"180","Tar":"130","FP":"57","Supplies":"400000"}'> </td>
			<td class="padded">Autobahns</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 57</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 400,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Tar.webp" alt="Tar" title="Tar" > 130</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Recreation</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="168" id="168" data-obj='{"depend":[165],"Whale-Oil":"430","Tinplate":"100","FP":"85","Coins":"75000","Supplies":"150000"}'> </td>
			<td class="padded">Food Processing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 85</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 75,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 150,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Whale_Oil.webp" alt="Whale Oil" title="Whale Oil" > 430</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Recreation</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="169" id="169" data-obj='{"depend":[166],"Ferroconcrete":"190","Convenience-Food":"140","FP":"79","Coins":"50000","Supplies":"200000"}'> </td>
			<td class="padded">Prefab Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 79</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 50,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Ferroconcrete.webp" alt="Ferroconcrete" title="Ferroconcrete" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Convenience_Food.webp" alt="Convenience Food" title="Convenience Food" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Prefabrication</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="170" id="170" data-obj='{"depend":[167,166],"Machine-Parts":"90","Gasoline":"60","FP":"59","Coins":"25000","Supplies":"250000"}'> </td>
			<td class="padded">Mechanized Infantry</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 59</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 25,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 250,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Autobahns
				<br>Prefabrication</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="171" id="171" data-obj='{"depend":[167],"Asbestos":"130","Porcelain":"90","FP":"62","Coins":"50000","Supplies":"200000"}'> </td>
			<td class="padded">Motels</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 62</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 50,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Asbestos.webp" alt="Asbestos" title="Asbestos" > 130</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Porcelain.webp" alt="Porcelain" title="Porcelain" > 90</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Autobahns</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="172" id="172" data-obj='{"depend":[167,168],"Explosives":"180","Wire":"90","FP":"67","Coins":"25000","Supplies":"250000"}'> </td>
			<td class="padded">Mechanized Artillery</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 67</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 25,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 250,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Wire.webp" alt="Wire" title="Wire" > 90</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Autobahns
				<br>Food Processing</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="173" id="173" data-obj='{"depend":[168],"Flavorants":"190","Packaging":"140","FP":"73","Coins":"100000","Supplies":"50000"}'> </td>
			<td class="padded">Advertisement</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 73</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 50,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Flavorants.webp" alt="Flavorants" title="Flavorants" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Packaging.webp" alt="Packaging" title="Packaging" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Food Processing</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="174" id="174" data-obj='{"depend":[169],"Tinplate":"90","Coke":"120","FP":"110","Coins":"77000","Supplies":"110000"}'> </td>
			<td class="padded">Commercial Aviation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 77,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 110,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Coke.webp" alt="Coke" title="Coke" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Prefab Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="175" id="175" data-obj='{"depend":[170,171,172],"Convenience-Food":"210","Coffee":"90","FP":"77","Coins":"24000","Supplies":"70000"}'> </td>
			<td class="padded">24\/7 Service</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 77</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 24,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 70,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Convenience_Food.webp" alt="Convenience Food" title="Convenience Food" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Coffee.webp" alt="Coffee" title="Coffee" > 90</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mechanized Infantry
				<br>Motels
				<br>Mechanized Artillery</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="176" id="176" data-obj='{"depend":[173],"Luxury-Materials":"180","Explosives":"60","FP":"111","Coins":"300000","Supplies":"100000"}'> </td>
			<td class="padded">Hollywood</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 111</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 300,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Luxury_Materials.webp" alt="Luxury Materials" title="Luxury Materials" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Advertisement</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="177" id="177" data-obj='{"depend":[174],"Textiles":"140","Asbestos":"120","FP":"108","Coins":"15000","Supplies":"80000"}'> </td>
			<td class="padded">Spectator Sports</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 108</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 15,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 80,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Textiles.webp" alt="Textiles" title="Textiles" > 140</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Asbestos.webp" alt="Asbestos" title="Asbestos" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Commercial Aviation</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="178" id="178" data-obj='{"depend":[174,175],"Textiles":"160","Paper":"40","FP":"58","Coins":"123456","Supplies":"654321"}'> </td>
			<td class="padded">Rapid Deployment</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 58</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 123,456</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 654,321</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Textiles.webp" alt="Textiles" title="Textiles" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CA/Paper.webp" alt="Paper" title="Paper" > 40</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Commercial Aviation
				<br>24\/7 Service</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="179" id="179" data-obj='{"depend":[175,176],"Machine-Parts":"160","Rubber":"130","FP":"109","Coins":"60000","Supplies":"250000"}'> </td>
			<td class="padded">Consumer Goods</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 109</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 60,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 250,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Rubber.webp" alt="Rubber" title="Rubber" > 130</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">24\/7 Service
				<br>Hollywood</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="180" id="180" data-obj='{"depend":[176],"Fertilizer":"160","Packaging":"140","FP":"56","Supplies":"300000"}'> </td>
			<td class="padded">Baby Boom</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 56</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 300,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Fertilizer.webp" alt="Fertilizer" title="Fertilizer" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Packaging.webp" alt="Packaging" title="Packaging" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Hollywood</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="181" id="181" data-obj='{"depend":[178,180],"Tinplate":"150","Gasoline":"140","FP":"112","Coins":"25000","Supplies":"250000"}'> </td>
			<td class="padded">Modern Tanks</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 112</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 25,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 250,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Rapid Deployment
				<br>Baby Boom</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="182" id="182" data-obj='{"depend":[179,180],"Luxury-Materials":"150","Ferroconcrete":"80","FP":"70","Coins":"50000","Supplies":"200000"}'> </td>
			<td class="padded">Suburban Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 70</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 50,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Luxury_Materials.webp" alt="Luxury Materials" title="Luxury Materials" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Ferroconcrete.webp" alt="Ferroconcrete" title="Ferroconcrete" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Consumer Goods
				<br>Baby Boom</td>
			<td class="padded"></td>
		</tr>
		<tr class="me bold index">
			<td>
				<input type="checkbox" name="183" id="183" data-obj='{"depend":[181,182],"Explosives":"90","Ferroconcrete":"90","FP":"45","Coins":"25000","Supplies":"250000"}'> </td>
			<td class="padded">Anti-Tank Warfare</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 45</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 25,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 250,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Ferroconcrete.webp" alt="Ferroconcrete" title="Ferroconcrete" > 90</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Modern Tanks
				<br>Suburban Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="184" id="184" data-obj='{"depend":[183],"Machine-Parts":"180","Rubber":"230","FP":"53","Coins":"80000","Supplies":"350000"}'> </td>
			<td class="padded">Private Transport</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 53</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 80,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 350,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Rubber.webp" alt="Rubber" title="Rubber" > 230</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anti-Tank Warfare</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="185" id="185" data-obj='{"depend":[183],"Coke":"250","Tinplate":"170","FP":"110","Coins":"150000","Supplies":"300000"}'> </td>
			<td class="padded">Industrial Steel</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 150,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 300,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Coke.webp" alt="Coke" title="Coke" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 170</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anti-Tank Warfare</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="186" id="186" data-obj='{"depend":[183],"Textiles":"160","Convenience-Food":"80","FP":"45","Supplies":"300000"}'> </td>
			<td class="padded">Equality</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 45</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 300,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Textiles.webp" alt="Textiles" title="Textiles" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Convenience_Food.webp" alt="Convenience Food" title="Convenience Food" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anti-Tank Warfare</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="187" id="187" data-obj='{"depend":[183],"Whale-Oil":"240","Convenience-Food":"220","FP":"47","Supplies":"400000"}'> </td>
			<td class="padded">Species Conservation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 47</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 400,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Whale_Oil.webp" alt="Whale Oil" title="Whale Oil" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Convenience_Food.webp" alt="Convenience Food" title="Convenience Food" > 220</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anti-Tank Warfare</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="188" id="188" data-obj='{"depend":[183],"Packaging":"120","Rubber":"100","FP":"120","Coins":"200000","Supplies":"300000"}'> </td>
			<td class="padded">Modern Electronics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 120</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 300,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Packaging.webp" alt="Packaging" title="Packaging" > 120</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Rubber.webp" alt="Rubber" title="Rubber" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anti-Tank Warfare</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="189" id="189" data-obj='{"depend":[184],"Fertilizer":"370","Packaging":"180","FP":"77","Coins":"350000","Supplies":"200000"}'> </td>
			<td class="padded">Renewable Resources</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 77</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 350,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Fertilizer.webp" alt="Fertilizer" title="Fertilizer" > 370</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Packaging.webp" alt="Packaging" title="Packaging" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Private Transport</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="190" id="190" data-obj='{"depend":[185],"Ferroconcrete":"180","Steel":"200","FP":"99","Coins":"100000","Supplies":"450000"}'> </td>
			<td class="padded">Prefab High-Rises</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 99</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 450,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Ferroconcrete.webp" alt="Ferroconcrete" title="Ferroconcrete" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Steel.webp" alt="Steel" title="Steel" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Industrial Steel</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="191" id="191" data-obj='{"depend":[186],"Asbestos":"140","Coke":"145","FP":"76","Coins":"100000","Supplies":"400000"}'> </td>
			<td class="padded">Environmental Standards</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 76</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 400,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Asbestos.webp" alt="Asbestos" title="Asbestos" > 140</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Coke.webp" alt="Coke" title="Coke" > 145</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Equality</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="192" id="192" data-obj='{"depend":[187],"Fertilizer":"100","Flavorants":"130","FP":"82","Coins":"250000","Supplies":"20000"}'> </td>
			<td class="padded">Genetics Research</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 82</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 250,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 20,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Fertilizer.webp" alt="Fertilizer" title="Fertilizer" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Flavorants.webp" alt="Flavorants" title="Flavorants" > 130</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Species Conservation</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="193" id="193" data-obj='{"depend":[188],"Explosives":"230","Semiconductors":"80","FP":"88","Coins":"400000","Supplies":"400000"}'> </td>
			<td class="padded">Rocket Artillery</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 88</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 400,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 400,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > 230</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Modern Electronics</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="194" id="194" data-obj='{"depend":[189,190,191],"Luxury-Materials":"200","Flavorants":"190","FP":"5","Coins":"1000000","Supplies":"50000"}'> </td>
			<td class="padded">High Society</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 5</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 50,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Luxury_Materials.webp" alt="Luxury Materials" title="Luxury Materials" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Flavorants.webp" alt="Flavorants" title="Flavorants" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Renewable Resources
				<br>Prefab High-Rises
				<br>Environmental Standards</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="195" id="195" data-obj='{"depend":[191],"Renewable-Resources":"150","Industrial-Filters":"160","FP":"39","Coins":"250000","Supplies":"400000"}'> </td>
			<td class="padded">Waste Management</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 39</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 250,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 400,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Renewable_Resources.webp" alt="Renewable Resources" title="Renewable Resources" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Industrial_Filters.webp" alt="Industrial Filters" title="Industrial Filters" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Environmental Standards</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="196" id="196" data-obj='{"depend":[191,192,193],"Asbestos":"140","Semiconductors":"180","FP":"123","Supplies":"1000000"}'> </td>
			<td class="padded">Space Flight</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 123</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Asbestos.webp" alt="Asbestos" title="Asbestos" > 140</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Environmental Standards
				<br>Genetics Research
				<br>Rocket Artillery</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="197" id="197" data-obj='{"depend":[193],"Tinplate":"120","Machine-Parts":"50","FP":"50","Coins":"150000","Supplies":"250000"}'> </td>
			<td class="padded">Infantry Support</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 50</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 150,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 250,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 120</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Rocket Artillery</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="198" id="198" data-obj='{"depend":[194],"Luxury-Materials":"180","Industrial-Filters":"130","FP":"101","Coins":"200000","Supplies":"100000"}'> </td>
			<td class="padded">Bungalows</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 101</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Luxury_Materials.webp" alt="Luxury Materials" title="Luxury Materials" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Industrial_Filters.webp" alt="Industrial Filters" title="Industrial Filters" > 130</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">High Society</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="199" id="199" data-obj='{"depend":[196],"Steel":"180","Gasoline":"180","FP":"66","Coins":"100000","Supplies":"500000"}'> </td>
			<td class="padded">Composite Armor</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 66</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Steel.webp" alt="Steel" title="Steel" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Space Flight</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="200" id="200" data-obj='{"depend":[197],"Ferroconcrete":"70","Renewable-Resources":"150","FP":"92","Coins":"100000","Supplies":"200000"}'> </td>
			<td class="padded">Duplex Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 92</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Ferroconcrete.webp" alt="Ferroconcrete" title="Ferroconcrete" > 70</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Renewable_Resources.webp" alt="Renewable Resources" title="Renewable Resources" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Infantry Support</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="201" id="201" data-obj='{"depend":[198],"Genome-Data":"200","Convenience-Food":"140","FP":"76","Coins":"250000","Supplies":"300000"}'> </td>
			<td class="padded">Children`s Rights</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 76</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 250,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 300,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Genome_Data.webp" alt="Genome Data" title="Genome Data" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Convenience_Food.webp" alt="Convenience Food" title="Convenience Food" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Bungalows</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="202" id="202" data-obj='{"depend":[199,200],"Textiles":"210","Rubber":"120","FP":"93","Coins":"300000","Supplies":"150000"}'> </td>
			<td class="padded">Physical Education</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 93</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 300,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 150,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Textiles.webp" alt="Textiles" title="Textiles" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/INDY/Rubber.webp" alt="Rubber" title="Rubber" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Composite Armor
				<br>Duplex Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="203" id="203" data-obj='{"depend":[201],"Semiconductors":"80","Gasoline":"50","FP":"121","Coins":"450000","Supplies":"600000"}'> </td>
			<td class="padded">Squad Tactics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 121</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 450,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 600,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 50</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Children`s Rights</td>
			<td class="padded"></td>
		</tr>
		<tr class="pme bold index">
			<td>
				<input type="checkbox" name="204" id="204" data-obj='{"depend":[202],"Explosives":"160","Asbestos":"60","FP":"117","Coins":"600000","Supplies":"450000"}'> </td>
			<td class="padded">Special Operations</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 117</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 600,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 450,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Asbestos.webp" alt="Asbestos" title="Asbestos" > 60</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Physical Education</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="205" id="205" data-obj='{"depend":[203,204],"Semiconductors":"250","Convenience-Food":"150","FP":"58","Coins":"500000","Supplies":"1000000"}'> </td>
			<td class="padded">Internet</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 58</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 500,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Convenience_Food.webp" alt="Convenience Food" title="Convenience Food" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Squad Tactics
				<br>Special Operations</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="206" id="206" data-obj='{"depend":[205],"Ferroconcrete":"250","Industrial-Filters":"200","FP":"95","Coins":"100000","Supplies":"800000"}'> </td>
			<td class="padded">Waterfront Residentials</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 95</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Ferroconcrete.webp" alt="Ferroconcrete" title="Ferroconcrete" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Industrial_Filters.webp" alt="Industrial Filters" title="Industrial Filters" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Internet</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="207" id="207" data-obj='{"depend":[205],"Convenience-Food":"250","Steel":"200","FP":"75","Coins":"400000","Supplies":"400000"}'> </td>
			<td class="padded">Shophouses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 75</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 400,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 400,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Convenience_Food.webp" alt="Convenience Food" title="Convenience Food" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Steel.webp" alt="Steel" title="Steel" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Internet</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="208" id="208" data-obj='{"depend":[205],"Machine-Parts":"290","Semiconductors":"120","FP":"104","Coins":"400000","Supplies":"850000"}'> </td>
			<td class="padded">Automation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 104</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 400,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 850,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 290</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Internet</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="209" id="209" data-obj='{"depend":[205],"Genome-Data":"400","Plastics":"100","FP":"60","Coins":"350000","Supplies":"1200000"}'> </td>
			<td class="padded">Bionics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 350,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Genome_Data.webp" alt="Genome Data" title="Genome Data" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Plastics.webp" alt="Plastics" title="Plastics" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Internet</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="210" id="210" data-obj='{"depend":[205],"Gasoline":"330","Tinplate":"160","FP":"101","Coins":"600000","Supplies":"900000"}'> </td>
			<td class="padded">Petroleum Industry</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 101</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 600,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 900,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 330</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Internet</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="211" id="211" data-obj='{"depend":[206],"Renewable-Resources":"250","Packaging":"200","FP":"99","Coins":"200000","Supplies":"200000"}'> </td>
			<td class="padded">Local Purchasing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 99</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Renewable_Resources.webp" alt="Renewable Resources" title="Renewable Resources" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Packaging.webp" alt="Packaging" title="Packaging" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Waterfront Residentials</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="212" id="212" data-obj='{"depend":[207],"Plastics":"260","Luxury-Materials":"400","FP":"61","Coins":"1300000","Supplies":"500000"}'> </td>
			<td class="padded">Consumerism</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 61</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,300,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Plastics.webp" alt="Plastics" title="Plastics" > 260</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Luxury_Materials.webp" alt="Luxury Materials" title="Luxury Materials" > 400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Shophouses</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="213" id="213" data-obj='{"depend":[208,209],"Explosives":"380","Steel":"200","FP":"110","Coins":"150000","Supplies":"700000"}'> </td>
			<td class="padded">Reactive Armor</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 150,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 700,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Explosives.webp" alt="Explosives" title="Explosives" > 380</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Steel.webp" alt="Steel" title="Steel" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Automation
				<br>Bionics</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="214" id="214" data-obj='{"depend":[209],"Electromagnets":"120","Machine-Parts":"100","FP":"82","Coins":"300000","Supplies":"500000"}'> </td>
			<td class="padded">Aerial Fire Support</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 82</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 300,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Electromagnets.webp" alt="Electromagnets" title="Electromagnets" > 120</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Machine_Parts.webp" alt="Machine Parts" title="Machine Parts" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Bionics</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="215" id="215" data-obj='{"depend":[210],"Asbestos":"480","Gasoline":"160","FP":"105","Coins":"450000","Supplies":"1000000"}'> </td>
			<td class="padded">Missile Artillery</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 105</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 450,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Asbestos.webp" alt="Asbestos" title="Asbestos" > 480</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Gasoline.webp" alt="Gasoline" title="Gasoline" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Petroleum Industry</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="216" id="216" data-obj='{"depend":[211,212],"Semiconductors":"180","Gas":"260","FP":"44","Coins":"2500000"}'> </td>
			<td class="padded">Financial Services</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 44</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Gas.webp" alt="Gas" title="Gas" > 260</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Local Purchasing
				<br>Consumerism</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="217" id="217" data-obj='{"depend":[212,213,214],"Packaging":"400","Robots":"180","FP":"97","Coins":"800000","Supplies":"1500000"}'> </td>
			<td class="padded">Globalization</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 97</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 800,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Packaging.webp" alt="Packaging" title="Packaging" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Robots.webp" alt="Robots" title="Robots" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Consumerism
				<br>Reactive Armor
				<br>Aerial Fire Support</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="218" id="218" data-obj='{"depend":[214,215],"Electromagnets":"250","Tinplate":"260","FP":"108","Coins":"650000","Supplies":"450000"}'> </td>
			<td class="padded">Mobile Air Defense</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 108</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 650,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 450,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Electromagnets.webp" alt="Electromagnets" title="Electromagnets" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PE/Tinplate.webp" alt="Tinplate" title="Tinplate" > 260</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Aerial Fire Support
				<br>Missile Artillery</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="219" id="219" data-obj='{"depend":[216],"Ferroconcrete":"300","Industrial-Filters":"200","FP":"90","Coins":"200000","Supplies":"600000"}'> </td>
			<td class="padded">Condominiums</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 600,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Ferroconcrete.webp" alt="Ferroconcrete" title="Ferroconcrete" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Industrial_Filters.webp" alt="Industrial Filters" title="Industrial Filters" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Financial Services</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="220" id="220" data-obj='{"depend":[216,217],"Flavorants":"400","Bionics-Data":"175","FP":"42","Coins":"25914","Supplies":"251147"}'> </td>
			<td class="padded">Stress Management</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 42</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 25,914</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 251,147</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Flavorants.webp" alt="Flavorants" title="Flavorants" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Bionics_Data.webp" alt="Bionics Data" title="Bionics Data" > 175</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Financial Services
				<br>Globalization</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="221" id="221" data-obj='{"depend":[217,218],"Gas":"250","Robots":"200","FP":"92","Coins":"1000000","Supplies":"250000"}'> </td>
			<td class="padded">Military Interventions</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 92</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 250,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Gas.webp" alt="Gas" title="Gas" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Robots.webp" alt="Robots" title="Robots" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Globalization
				<br>Mobile Air Defense</td>
			<td class="padded"></td>
		</tr>
		<tr class="ce bold index">
			<td>
				<input type="checkbox" name="222" id="222" data-obj='{"depend":[219,220,221],"Bionics-Data":"225","Renewable-Resources":"250","FP":"107","Coins":"100000","Supplies":"1250000"}'> </td>
			<td class="padded">Renewable Energy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 107</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,250,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Bionics_Data.webp" alt="Bionics Data" title="Bionics Data" > 225</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Renewable_Resources.webp" alt="Renewable Resources" title="Renewable Resources" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Condominiums
				<br>Stress Management
				<br>Military Interventions</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="223" id="223" data-obj='{"depend":[222],"Electromagnets":"300","Semiconductors":"180","FP":"140","Coins":"3000000","Supplies":"3000000"}'> </td>
			<td class="padded">Fusion Power</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 140</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Electromagnets.webp" alt="Electromagnets" title="Electromagnets" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Renewable Energy</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="224" id="224" data-obj='{"depend":[223],"Convenience-Food":"410","Flavorants":"310","FP":"68","Coins":"100000","Supplies":"700000"}'> </td>
			<td class="padded">Nutrition Science</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 68</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 700,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Convenience_Food.webp" alt="Convenience Food" title="Convenience Food" > 410</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Flavorants.webp" alt="Flavorants" title="Flavorants" > 310</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Fusion Power</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="225" id="225" data-obj='{"depend":[223],"Renewable-Resources":"240","Packaging":"420","FP":"20","Supplies":"2000000"}'> </td>
			<td class="padded">Recycled Materials</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 20</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Renewable_Resources.webp" alt="Renewable Resources" title="Renewable Resources" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Packaging.webp" alt="Packaging" title="Packaging" > 420</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Fusion Power</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="226" id="226" data-obj='{"depend":[223],"Industrial-Filters":"270","Bionics-Data":"310","FP":"127","Coins":"220000","Supplies":"90000"}'> </td>
			<td class="padded">High-Tech Materials</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 127</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 220,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 90,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Industrial_Filters.webp" alt="Industrial Filters" title="Industrial Filters" > 270</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Bionics_Data.webp" alt="Bionics Data" title="Bionics Data" > 310</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Fusion Power</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="227" id="227" data-obj='{"depend":[223],"Gas":"130","Renewable-Resources":"310","FP":"102","Coins":"110000","Supplies":"900000"}'> </td>
			<td class="padded">Additive Manufacturing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 102</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 110,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 900,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Gas.webp" alt="Gas" title="Gas" > 130</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Renewable_Resources.webp" alt="Renewable Resources" title="Renewable Resources" > 310</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Fusion Power</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="228" id="228" data-obj='{"depend":[224],"Semiconductors":"290","Electromagnets":"245","FP":"94","Coins":"1400000","Supplies":"111000"}'> </td>
			<td class="padded">Wireless Power Transmission</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 94</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,400,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 111,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 290</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Electromagnets.webp" alt="Electromagnets" title="Electromagnets" > 245</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Nutrition Science</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="229" id="229" data-obj='{"depend":[224,225,226],"Papercrete":"200","Ferroconcrete":"440","FP":"66","Coins":"200000","Supplies":"1200000"}'> </td>
			<td class="padded">Capsule Hotels</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 66</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Papercrete.webp" alt="Papercrete" title="Papercrete" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Ferroconcrete.webp" alt="Ferroconcrete" title="Ferroconcrete" > 440</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Nutrition Science
				<br>Recycled Materials
				<br>High-Tech Materials</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="230" id="230" data-obj='{"depend":[226],"Gas":"305","Steel":"120","FP":"118","Coins":"1000000","Supplies":"1000000"}'> </td>
			<td class="padded">Armor-Piercing Shells</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 118</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Gas.webp" alt="Gas" title="Gas" > 305</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Steel.webp" alt="Steel" title="Steel" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">High-Tech Materials</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="231" id="231" data-obj='{"depend":[226,227],"Translucent-Concrete":"180","Flavorants":"380","FP":"79","Coins":"1200000","Supplies":"120000"}'> </td>
			<td class="padded">Industrial Design</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 79</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 120,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Translucent_Concrete.webp" alt="Translucent Concrete" title="Translucent Concrete" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Flavorants.webp" alt="Flavorants" title="Flavorants" > 380</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">High-Tech Materials
				<br>Additive Manufacturing</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="232" id="232" data-obj='{"depend":[228],"Bionics-Data":"255","Robots":"250","FP":"94","Coins":"900000","Supplies":"700000"}'> </td>
			<td class="padded">Drones</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 94</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 900,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 700,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Bionics_Data.webp" alt="Bionics Data" title="Bionics Data" > 255</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Robots.webp" alt="Robots" title="Robots" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Wireless Power Transmission</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="233" id="233" data-obj='{"depend":[229],"Preservatives":"140","Luxury-Materials":"490","FP":"68","Coins":"330000","Supplies":"110000"}'> </td>
			<td class="padded">Nightlife</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 68</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 330,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 110,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Preservatives.webp" alt="Preservatives" title="Preservatives" > 140</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/ME/Luxury_Materials.webp" alt="Luxury Materials" title="Luxury Materials" > 490</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Capsule Hotels</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="234" id="234" data-obj='{"depend":[230,231],"Smart-Materials":"80","Steel":"600","FP":"129","Coins":"660000","Supplies":"800000"}'> </td>
			<td class="padded">Stealth Technology</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 129</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 660,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Smart_Materials.webp" alt="Smart Materials" title="Smart Materials" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Steel.webp" alt="Steel" title="Steel" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Armor-Piercing Shells
				<br>Industrial Design</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="235" id="235" data-obj='{"depend":[232],"Smart-Materials":"150","Robots":"250","FP":"118","Coins":"1100000","Supplies":"900000"}'> </td>
			<td class="padded">Combat Drones</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 118</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 900,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Smart_Materials.webp" alt="Smart Materials" title="Smart Materials" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Robots.webp" alt="Robots" title="Robots" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Drones</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="236" id="236" data-obj='{"depend":[233],"Preservatives":"170","Nutrition-Research":"190","FP":"60","Coins":"190000","Supplies":"670000"}'> </td>
			<td class="padded">Annexes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 60</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 190,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 670,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Preservatives.webp" alt="Preservatives" title="Preservatives" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Nutrition_Research.webp" alt="Nutrition Research" title="Nutrition Research" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Nightlife</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="237" id="237" data-obj='{"depend":[233,234],"Papercrete":"330","Genome-Data":"320","FP":"53","Coins":"200000","Supplies":"2000000"}'> </td>
			<td class="padded">Physical Security</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 53</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Papercrete.webp" alt="Papercrete" title="Papercrete" > 330</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Genome_Data.webp" alt="Genome Data" title="Genome Data" > 320</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Nightlife
				<br>Stealth Technology</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="238" id="238" data-obj='{"depend":[235,236],"Nutrition-Research":"290","Industrial-Filters":"480","FP":"145","Coins":"4000000","Supplies":"4000000"}'> </td>
			<td class="padded">Land Reclamation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 145</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 4,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Nutrition_Research.webp" alt="Nutrition Research" title="Nutrition Research" > 290</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Industrial_Filters.webp" alt="Industrial Filters" title="Industrial Filters" > 480</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Combat Drones
				<br>Annexes</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="239" id="239" data-obj='{"depend":[237],"Translucent-Concrete":"330","Genome-Data":"430","FP":"49","Coins":"1010100","Supplies":"1010100"}'> </td>
			<td class="padded">Surveillance</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 49</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,010,100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,010,100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Translucent_Concrete.webp" alt="Translucent Concrete" title="Translucent Concrete" > 330</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Genome_Data.webp" alt="Genome Data" title="Genome Data" > 430</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Physical Security</td>
			<td class="padded"></td>
		</tr>
		<tr class="te bold index">
			<td>
				<input type="checkbox" name="240" id="240" data-obj='{"depend":[237],"Smart-Materials":"340","Plastics":"550","FP":"90","Coins":"600000","Supplies":"700000"}'> </td>
			<td class="padded">Off-Road Tactics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 90</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 600,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 700,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Smart_Materials.webp" alt="Smart Materials" title="Smart Materials" > 340</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Plastics.webp" alt="Plastics" title="Plastics" > 550</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Physical Security</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="241" id="241" data-obj='{"depend":[240,238,239],"Preservatives":"300","Industrial-Filters":"190","FP":"133","Coins":"860000","Supplies":"2500100"}'> </td>
			<td class="padded">Clean Energy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 133</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 860,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,500,100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Preservatives.webp" alt="Preservatives" title="Preservatives" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Industrial_Filters.webp" alt="Industrial Filters" title="Industrial Filters" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Off-Road Tactics
				<br>Land Reclamation
				<br>Surveillance</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="242" id="242" data-obj='{"depend":[241],"Gas":"410","Papercrete":"330","FP":"71","Coins":"250000","Supplies":"970000"}'> </td>
			<td class="padded">Low-Temp Science</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 71</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 250,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 970,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Gas.webp" alt="Gas" title="Gas" > 410</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Papercrete.webp" alt="Papercrete" title="Papercrete" > 330</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Clean Energy</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="243" id="243" data-obj='{"depend":[241],"Genome-Data":"150","Bionics-Data":"320","FP":"112","Coins":"1500000","Supplies":"3200000"}'> </td>
			<td class="padded">Biochemistry</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 112</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,500,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Genome_Data.webp" alt="Genome Data" title="Genome Data" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Bionics_Data.webp" alt="Bionics Data" title="Bionics Data" > 320</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Clean Energy</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="244" id="244" data-obj='{"depend":[241],"Electromagnets":"420","Smart-Materials":"380","FP":"77","Supplies":"1800000"}'> </td>
			<td class="padded">Earth Science</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 77</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Electromagnets.webp" alt="Electromagnets" title="Electromagnets" > 420</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Smart_Materials.webp" alt="Smart Materials" title="Smart Materials" > 380</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Clean Energy</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="245" id="245" data-obj='{"depend":[241],"Translucent-Concrete":"320","Robots":"420","FP":"103","Coins":"110000","Supplies":"1700000"}'> </td>
			<td class="padded">Tidal Power</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 103</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 110,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,700,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Translucent_Concrete.webp" alt="Translucent Concrete" title="Translucent Concrete" > 320</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Robots.webp" alt="Robots" title="Robots" > 420</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Clean Energy</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="246" id="246" data-obj='{"depend":[242],"Bionics-Data":"290","Smart-Materials":"500","FP":"97","Coins":"725000","Supplies":"2100000"}'> </td>
			<td class="padded">Anti-Gravitation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 97</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 725,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,100,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Bionics_Data.webp" alt="Bionics Data" title="Bionics Data" > 290</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Smart_Materials.webp" alt="Smart Materials" title="Smart Materials" > 500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Low-Temp Science</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="247" id="247" data-obj='{"depend":[243,244],"Semiconductors":"200","Plastics":"400","FP":"109","Coins":"200000","Supplies":"1200000"}'> </td>
			<td class="padded">Quantum Communication</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 109</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Plastics.webp" alt="Plastics" title="Plastics" > 400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Biochemistry
				<br>Earth Science</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="248" id="248" data-obj='{"depend":[243,244],"Steel":"300","Purified-Water":"100","FP":"95","Coins":"1000000","Supplies":"950000"}'> </td>
			<td class="padded">Underground Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 95</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 950,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Steel.webp" alt="Steel" title="Steel" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Purified_Water.webp" alt="Purified Water" title="Purified Water" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Biochemistry
				<br>Earth Science</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="249" id="249" data-obj='{"depend":[244,245],"Electromagnets":"420","Nanoparticles":"115","FP":"73","Coins":"1200000","Supplies":"120000"}'> </td>
			<td class="padded">Climate Control</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 73</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 120,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Electromagnets.webp" alt="Electromagnets" title="Electromagnets" > 420</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > 115</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Earth Science
				<br>Tidal Power</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="250" id="250" data-obj='{"depend":[246],"Semiconductors":"240","Superconductors":"185","FP":"108","Coins":"4000500","Supplies":"1100000"}'> </td>
			<td class="padded">Gravity Fields</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 108</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,000,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,100,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Semiconductors.webp" alt="Semiconductors" title="Semiconductors" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Superconductors.webp" alt="Superconductors" title="Superconductors" > 185</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anti-Gravitation</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="251" id="251" data-obj='{"depend":[248,249],"Nutrition-Research":"520","Algae":"190","FP":"109","Coins":"470000","Supplies":"2500000"}'> </td>
			<td class="padded">Food Engineering</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 109</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 470,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Nutrition_Research.webp" alt="Nutrition Research" title="Nutrition Research" > 520</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Algae.webp" alt="Algae" title="Algae" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Underground Houses
				<br>Climate Control</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="252" id="252" data-obj='{"depend":[250,251],"Translucent-Concrete":"400","Plastics":"390","FP":"57","Supplies":"600500"}'> </td>
			<td class="padded">Solar Roads</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 57</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 600,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Translucent_Concrete.webp" alt="Translucent Concrete" title="Translucent Concrete" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Plastics.webp" alt="Plastics" title="Plastics" > 390</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Gravity Fields
				<br>Food Engineering</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="253" id="253" data-obj='{"depend":[252],"Renewable-Resources":"450","Biogeochemical-Data":"170","FP":"77","Coins":"1100000","Supplies":"1010100"}'> </td>
			<td class="padded">Terraforming</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 77</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,010,100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Renewable_Resources.webp" alt="Renewable Resources" title="Renewable Resources" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Biogeochemical_Data.webp" alt="Biogeochemical Data" title="Biogeochemical Data" > 170</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Solar Roads</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="254" id="254" data-obj='{"depend":[252],"Industrial-Filters":"170","Purified-Water":"280","FP":"119","Coins":"1000500","Supplies":"850000"}'> </td>
			<td class="padded">Xenomineralogy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 119</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,000,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 850,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Industrial_Filters.webp" alt="Industrial Filters" title="Industrial Filters" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Purified_Water.webp" alt="Purified Water" title="Purified Water" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Solar Roads</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="255" id="255" data-obj='{"depend":[252],"Preservatives":"300","Nanoparticles":"160","FP":"91","Coins":"350000","Supplies":"2000300"}'> </td>
			<td class="padded">Self-Supporting Homes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 91</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 350,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,000,300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Preservatives.webp" alt="Preservatives" title="Preservatives" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Solar Roads</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="256" id="256" data-obj='{"depend":[252],"Robots":"490","Genome-Data":"300","FP":"74","Coins":"2000000","Supplies":"3010000"}'> </td>
			<td class="padded">Human-Machine Interface</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 74</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,010,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Robots.webp" alt="Robots" title="Robots" > 490</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/PME/Genome_Data.webp" alt="Genome Data" title="Genome Data" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Solar Roads</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="257" id="257" data-obj='{"depend":[253,254],"Papercrete":"445","Nanoparticles":"190","FP":"84","Coins":"3150000","Supplies":"1010100"}'> </td>
			<td class="padded">Precise Forecasting</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 84</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,150,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,010,100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Papercrete.webp" alt="Papercrete" title="Papercrete" > 445</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Terraforming
				<br>Xenomineralogy</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="258" id="258" data-obj='{"depend":[254,255],"Bionics-Data":"425","Superconductors":"240","FP":"118","Coins":"1010100","Supplies":"1010100"}'> </td>
			<td class="padded">Orbital Networks</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 118</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,010,100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,010,100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Bionics_Data.webp" alt="Bionics Data" title="Bionics Data" > 425</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Superconductors.webp" alt="Superconductors" title="Superconductors" > 240</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Xenomineralogy
				<br>Self-Supporting Homes</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="259" id="259" data-obj='{"depend":[255,256],"Preservatives":"340","Biogeochemical-Data":"280","FP":"98","Coins":"600000","Supplies":"800000"}'> </td>
			<td class="padded">Arcologies</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 98</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 600,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Preservatives.webp" alt="Preservatives" title="Preservatives" > 340</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Biogeochemical_Data.webp" alt="Biogeochemical Data" title="Biogeochemical Data" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Self-Supporting Homes
				<br>Human-Machine Interface</td>
			<td class="padded"></td>
		</tr>
		<tr class="fe bold index">
			<td>
				<input type="checkbox" name="260" id="260" data-obj='{"depend":[257,258,259],"Gas":"505","Algae":"270","FP":"82","Coins":"1650000","Supplies":"750000"}'> </td>
			<td class="padded">Extended Gausian Distribution</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 82</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,650,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 750,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Gas.webp" alt="Gas" title="Gas" > 505</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Algae.webp" alt="Algae" title="Algae" > 270</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Precise Forecasting
				<br>Orbital Networks
				<br>Arcologies</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="261" id="261" data-obj='{"depend":[260],"Biogeochemical-Data":"220","Purified-Water":"180","FP":"130","Coins":"2100000","Supplies":"1850000"}'> </td>
			<td class="padded">Arctic Harvest</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 130</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,850,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Biogeochemical_Data.webp" alt="Biogeochemical Data" title="Biogeochemical Data" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Purified_Water.webp" alt="Purified Water" title="Purified Water" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Extended Gausian Distribution</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="262" id="262" data-obj='{"depend":[261],"Nanoparticles":"210","Superconductors":"300","FP":"115","Coins":"1200000","Supplies":"2700000"}'> </td>
			<td class="padded">Nanotubes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 115</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,700,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Superconductors.webp" alt="Superconductors" title="Superconductors" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arctic Harvest</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="263" id="263" data-obj='{"depend":[261],"Nutrition-Research":"320","Algae":"140","FP":"108","Coins":"1600000","Supplies":"1800000"}'> </td>
			<td class="padded">Bioplastics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 108</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,600,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Nutrition_Research.webp" alt="Nutrition Research" title="Nutrition Research" > 320</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Algae.webp" alt="Algae" title="Algae" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arctic Harvest</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="264" id="264" data-obj='{"depend":[261],"Robots":"420","Superconductors":"160","FP":"122","Coins":"1010101","Supplies":"1010010"}'> </td>
			<td class="padded">A.I. Research</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 122</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,010,101</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,010,010</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Robots.webp" alt="Robots" title="Robots" > 420</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Superconductors.webp" alt="Superconductors" title="Superconductors" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arctic Harvest</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="265" id="265" data-obj='{"depend":[262,263],"Gas":"390","Purified-Water":"260","FP":"138","Coins":"2200000","Supplies":"950000"}'> </td>
			<td class="padded">Advanced Transesterification</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 138</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 950,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Gas.webp" alt="Gas" title="Gas" > 390</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Purified_Water.webp" alt="Purified Water" title="Purified Water" > 260</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Nanotubes
				<br>Bioplastics</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="266" id="266" data-obj='{"depend":[264,263],"Papercrete":"330","Algae":"250","FP":"136","Supplies":"3000000"}'> </td>
			<td class="padded">Organic Conduction</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 136</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Papercrete.webp" alt="Papercrete" title="Papercrete" > 330</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Algae.webp" alt="Algae" title="Algae" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">A.I. Research
				<br>Bioplastics</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="267" id="267" data-obj='{"depend":[266],"Bionics-Data":"480","AI-Data":"180","FP":"158","Coins":"2561024","Supplies":"2048128"}'> </td>
			<td class="padded">Mind-Controlled Robots</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 158</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,561,024</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,048,128</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/CE/Bionics_Data.webp" alt="Bionics Data" title="Bionics Data" > 480</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Organic Conduction</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="268" id="268" data-obj='{"depend":[266,265],"Biogeochemical-Data":"240","Paper-Batteries":"140","FP":"140","Coins":"2800000","Supplies":"2200000"}'> </td>
			<td class="padded">Advanced Homokinetic Joints</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 140</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,800,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Biogeochemical_Data.webp" alt="Biogeochemical Data" title="Biogeochemical Data" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Organic Conduction
				<br>Advanced Transesterification</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="269" id="269" data-obj='{"depend":[267,268],"Nanoparticles":"220","Bioplastics":"200","FP":"118","Coins":"1000000","Supplies":"1800000"}'> </td>
			<td class="padded">Mobile Houses</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 118</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mind-Controlled Robots
				<br>Advanced Homokinetic Joints</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="270" id="270" data-obj='{"depend":[269],"Nanowire":"170","Transester-Gas":"190","FP":"135","Coins":"2500000","Supplies":"2000000"}'> </td>
			<td class="padded">Rare Earth Elements</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 135</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,500,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mobile Houses</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="271" id="271" data-obj='{"depend":[270],"Bioplastics":"150","Transester-Gas":"180","FP":"122","Coins":"2000000","Supplies":"1000000"}'> </td>
			<td class="padded">Promethium Extraction</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 122</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Rare Earth Elements</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="272" id="272" data-obj='{"depend":[271],"Nanowire":"200","Paper-Batteries":"200","FP":"134","Coins":"3200000","Supplies":"2400000"}'> </td>
			<td class="padded">String Rail System</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 134</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,400,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Promethium Extraction</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="273" id="273" data-obj='{"depend":[271],"AI-Data":"150","FP":"118","Coins":"2300000","Supplies":"1800000","Promethium":"150"}'> </td>
			<td class="padded">Combined Weapon Systems</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 118</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,300,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Promethium Extraction</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="274" id="274" data-obj='{"depend":[272,273],"Bioplastics":"160","FP":"138","Coins":"1800000","Supplies":"3000000","Promethium":"260"}'> </td>
			<td class="padded">Clock Tower Apartments</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 138</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,800,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 260</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">String Rail System
				<br>Combined Weapon Systems</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="275" id="275" data-obj='{"depend":[273],"Nanowire":"180","Transester-Gas":"160","FP":"98","Coins":"500000","Supplies":"500000"}'> </td>
			<td class="padded">Advanced Hydroponics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 98</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 500,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Combined Weapon Systems</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="276" id="276" data-obj='{"depend":[274],"AI-Data":"210","FP":"156","Coins":"3000000","Supplies":"2600000","Promethium":"350"}'> </td>
			<td class="padded">Arctic Navigation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 156</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,600,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Clock Tower Apartments</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="277" id="277" data-obj='{"depend":[276],"Paper-Batteries":"160","FP":"144","Coins":"2800000","Supplies":"3200000","Promethium":"380"}'> </td>
			<td class="padded">Arctic Stations</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 144</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,800,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 380</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arctic Navigation</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="278" id="278" data-obj='{"depend":[277],"Nanowire":"200","Paper-Batteries":"120","FP":"124","Coins":"1800000","Supplies":"2000000"}'> </td>
			<td class="padded">Improved Logistics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 124</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,800,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arctic Stations</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="279" id="279" data-obj='{"depend":[277],"Transester-Gas":"80","AI-Data":"80","FP":"78","Coins":"450000","Supplies":"450000"}'> </td>
			<td class="padded">Artificial Snowflakes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 78</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 450,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 450,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 80</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 80</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arctic Stations</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="280" id="280" data-obj='{"depend":[277],"Purified-Water":"300","FP":"142","Coins":"2500000","Supplies":"1000000","Promethium":"260"}'> </td>
			<td class="padded">Swarm Control Methods</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 142</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,500,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Purified_Water.webp" alt="Purified Water" title="Purified Water" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 260</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arctic Stations</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="281" id="281" data-obj='{"depend":[278,280],"Superconductors":"280","FP":"136","Coins":"2200000","Supplies":"2800000","Promethium":"200"}'> </td>
			<td class="padded">Arctic Cargo</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 136</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Superconductors.webp" alt="Superconductors" title="Superconductors" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Improved Logistics
				<br>Swarm Control Methods</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="282" id="282" data-obj='{"depend":[280],"Algae":"300","FP":"108","Coins":"3000000","Supplies":"1000000","Promethium":"320"}'> </td>
			<td class="padded">Eco-Urban Lifestyle</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 108</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Algae.webp" alt="Algae" title="Algae" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 320</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Swarm Control Methods</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="283" id="283" data-obj='{"depend":[281,282],"Nanoparticles":"280","FP":"150","Coins":"1600000","Supplies":"2500000","Promethium":"300"}'> </td>
			<td class="padded">Regenerative Methods</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,600,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arctic Cargo
				<br>Eco-Urban Lifestyle</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="284" id="284" data-obj='{"depend":[281],"Biogeochemical-Data":"260","Bioplastics":"180","FP":"144","Coins":"2600000","Supplies":"2200000"}'> </td>
			<td class="padded">Biological Transmission</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 144</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,600,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Biogeochemical_Data.webp" alt="Biogeochemical Data" title="Biogeochemical Data" > 260</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Arctic Cargo</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="285" id="285" data-obj='{"depend":[283,284],"Transester-Gas":"120","FP":"158","Coins":"2100000","Supplies":"3000000","Promethium":"280"}'> </td>
			<td class="padded">Extreme Weather Prevention</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 158</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,100,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Regenerative Methods
				<br>Biological Transmission</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="286" id="286" data-obj='{"depend":[285],"Nanowire":"160","FP":"132","Coins":"2200000","Supplies":"1800000","Promethium":"300"}'> </td>
			<td class="padded">Plasma Spectroscopy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 132</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,200,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Extreme Weather Prevention</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="287" id="287" data-obj='{"depend":[285],"Paper-Batteries":"140","FP":"146","Coins":"2600000","Supplies":"1000000","Promethium":"220"}'> </td>
			<td class="padded">Arctic Mining</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 146</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,600,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 220</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Extreme Weather Prevention</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="288" id="288" data-obj='{"depend":[286,287],"Transester-Gas":"200","FP":"118","Coins":"1000000","Supplies":"2200000","Promethium":"320"}'> </td>
			<td class="padded">Crystal Villas</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 118</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 320</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Plasma Spectroscopy
				<br>Arctic Mining</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="289" id="289" data-obj='{"depend":[288],"AI-Data":"140","Bioplastics":"100","FP":"112","Coins":"1600000","Supplies":"1600000"}'> </td>
			<td class="padded">Frost Immunity</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 112</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,600,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 1,600,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 140</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crystal Villas</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="290" id="290" data-obj='{"depend":[288],"Bioplastics":"120","FP":"142","Coins":"1800000","Supplies":"2600000","Promethium":"250"}'> </td>
			<td class="padded">Cryo Botany</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 142</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 1,800,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,600,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crystal Villas</td>
			<td class="padded"></td>
		</tr>
		<tr class="afe bold index">
			<td>
				<input type="checkbox" name="291" id="291" data-obj='{"depend":[288],"AI-Data":"160","FP":"154","Coins":"2400000","Supplies":"2500000","Promethium":"350"}'> </td>
			<td class="padded">Superheavy Warmachines</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 154</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 2,400,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 2,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crystal Villas</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="292" id="292" data-obj='{"depend":[289,290,291],"Paper-Batteries":"150","FP":"140","Coins":"3000000","Supplies":"3200000","Promethium":"200"}'> </td>
			<td class="padded">Subaqueous Construction</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 140</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 3,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 3,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Frost Immunity
				<br>Cryo Botany
				<br>Superheavy Warmachines</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="293" id="293" data-obj='{"depend":[292],"Translucent-Concrete":"280","FP":"145","Coins":"4500000","Supplies":"4600000","Promethium":"180"}'> </td>
			<td class="padded">Nano Habitat</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 145</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 4,500,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 4,600,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Translucent_Concrete.webp" alt="Translucent Concrete" title="Translucent Concrete" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Subaqueous Construction</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="294" id="294" data-obj='{"depend":[292],"Nanoparticles":"170","AI-Data":"160","FP":"149","Coins":"5000000","Promethium":"180"}'> </td>
			<td class="padded">Engineered Nuclei</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 149</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Subaqueous Construction</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="295" id="295" data-obj='{"depend":[292],"Nutrition-Research":"200","Algae":"180","FP":"153","Supplies":"5200000"}'> </td>
			<td class="padded">Coral Propagation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 153</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,200,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Nutrition_Research.webp" alt="Nutrition Research" title="Nutrition Research" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Algae.webp" alt="Algae" title="Algae" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Subaqueous Construction</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="296" id="296" data-obj='{"depend":[292],"Smart-Materials":"150","Biogeochemical-Data":"170","FP":"151","Coins":"5800000","Promethium":"200"}'> </td>
			<td class="padded">Hardened Scales</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 151</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,800,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Smart_Materials.webp" alt="Smart Materials" title="Smart Materials" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Biogeochemical_Data.webp" alt="Biogeochemical Data" title="Biogeochemical Data" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Subaqueous Construction</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="297" id="297" data-obj='{"depend":[292],"Purified-Water":"210","Transester-Gas":"160","FP":"149","Coins":"5600000"}'> </td>
			<td class="padded">Oxygen Lens</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 149</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,600,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Purified_Water.webp" alt="Purified Water" title="Purified Water" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Subaqueous Construction</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="298" id="298" data-obj='{"depend":[293,294],"Preservatives":"140","Algae":"160","FP":"138","Promethium":"190"}'> </td>
			<td class="padded">Shellfish Aquaculture</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 138</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Preservatives.webp" alt="Preservatives" title="Preservatives" > 140</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Algae.webp" alt="Algae" title="Algae" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Nano Habitat
				<br>Engineered Nuclei</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="299" id="299" data-obj='{"depend":[294,295],"Superconductors":"220","Bioplastics":"100","FP":"154","Promethium":"170"}'> </td>
			<td class="padded">Subaquatic Filters</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 154</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Superconductors.webp" alt="Superconductors" title="Superconductors" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 170</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Engineered Nuclei
				<br>Coral Propagation</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="300" id="300" data-obj='{"depend":[296,297],"Purified-Water":"200","Artificial-Scales":"100","FP":"166","Supplies":"5700000","Promethium":"210"}'> </td>
			<td class="padded">Hydrodynamics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 166</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 5,700,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Purified_Water.webp" alt="Purified Water" title="Purified Water" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Hardened Scales
				<br>Oxygen Lens</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="301" id="301" data-obj='{"depend":[298],"Smart-Materials":"170","Paper-Batteries":"230","FP":"150","Coins":"5900000","Promethium":"180"}'> </td>
			<td class="padded">High Range Sonar</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 5,900,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Smart_Materials.webp" alt="Smart Materials" title="Smart Materials" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 230</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Shellfish Aquaculture</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="302" id="302" data-obj='{"depend":[298,299],"Biogeochemical-Data":"130","Bioplastics":"120","FP":"148","Promethium":"190"}'> </td>
			<td class="padded">Personal Paradise</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 148</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Biogeochemical_Data.webp" alt="Biogeochemical Data" title="Biogeochemical Data" > 130</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 120</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Shellfish Aquaculture
				<br>Subaquatic Filters</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="303" id="303" data-obj='{"depend":[300],"Papercrete":"250","Transester-Gas":"100","FP":"168","Supplies":"6000000"}'> </td>
			<td class="padded">Controlled Lightning</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 168</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 6,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Papercrete.webp" alt="Papercrete" title="Papercrete" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Hydrodynamics</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="304" id="304" data-obj='{"depend":[301,302],"Preservatives":"180","Nanoparticles":"160","FP":"137","Promethium":"180"}'> </td>
			<td class="padded">Mechanical Claws</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 137</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/TE/Preservatives.webp" alt="Preservatives" title="Preservatives" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">High Range Sonar
				<br>Personal Paradise</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="305" id="305" data-obj='{"depend":[303],"Biogeochemical-Data":"170","AI-Data":"160","FP":"160","Supplies":"6500000"}'> </td>
			<td class="padded">Laser Rust Removal</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 6,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Biogeochemical_Data.webp" alt="Biogeochemical Data" title="Biogeochemical Data" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Controlled Lightning</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="306" id="306" data-obj='{"depend":[304,305],"Nanowire":"200","Plankton":"150","FP":"172","Coins":"6300000","Promethium":"200"}'> </td>
			<td class="padded">Flotation Surfactants</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 172</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 6,300,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mechanical Claws
				<br>Laser Rust Removal</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="307" id="307" data-obj='{"depend":[306],"Paper-Batteries":"200","Artificial-Scales":"150","FP":"180","Supplies":"6600000","Promethium":"200"}'> </td>
			<td class="padded">Biomimetic Armor</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 6,600,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Flotation Surfactants</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="308" id="308" data-obj='{"depend":[306],"AI-Data":"150","Transester-Gas":"120","FP":"157","Promethium":"200"}'> </td>
			<td class="padded">Deep Sea Exploration</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 157</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 120</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Flotation Surfactants</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="309" id="309" data-obj='{"depend":[307],"Nanoparticles":"160","Bioplastics":"150","FP":"151"}'> </td>
			<td class="padded">Coral Domestication</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 151</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Nanoparticles.webp" alt="Nanoparticles" title="Nanoparticles" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Biomimetic Armor</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="310" id="310" data-obj='{"depend":[307,308],"Nanowire":"250","Paper-Batteries":"180","FP":"167","Supplies":"6900000","Orichalcum":"90"}'> </td>
			<td class="padded">Advanced Hydrophones</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 167</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 6,900,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 90</td>
			<td class="padded">Biomimetic Armor
				<br>Deep Sea Exploration</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="311" id="311" data-obj='{"depend":[309],"AI-Data":"190","Artificial-Scales":"150","FP":"169"}'> </td>
			<td class="padded">Ocean Colonization</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 169</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Coral Domestication</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="312" id="312" data-obj='{"depend":[309,310],"Paper-Batteries":"180","Pearls":"190","FP":"175","Coins":"7000000","Orichalcum":"120"}'> </td>
			<td class="padded">Holographic Currency</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 175</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 7,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 120</td>
			<td class="padded">Coral Domestication
				<br>Advanced Hydrophones</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="313" id="313" data-obj='{"depend":[310],"Superconductors":"190","Transester-Gas":"140","FP":"152","Orichalcum":"130"}'> </td>
			<td class="padded">Maelstrom Stabilization</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 152</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/FE/Superconductors.webp" alt="Superconductors" title="Superconductors" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 130</td>
			<td class="padded">Advanced Hydrophones</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="314" id="314" data-obj='{"depend":[311,312],"Bioplastics":"170","Pearls":"110","FP":"166","Promethium":"210","Orichalcum":"140"}'> </td>
			<td class="padded">Seasteading</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 166</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 110</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 140</td>
			<td class="padded">Ocean Colonization
				<br>Holographic Currency</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="315" id="315" data-obj='{"depend":[313],"Artificial-Scales":"300","FP":"175","Coins":"6800000","Supplies":"6500000","Orichalcum":"250"}'> </td>
			<td class="padded">Biogel Refrigeration</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 175</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 6,800,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 6,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 250</td>
			<td class="padded">Maelstrom Stabilization</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="316" id="316" data-obj='{"depend":[314],"Nanowire":"160","Biolight":"180","FP":"169","Promethium":"210","Orichalcum":"140"}'> </td>
			<td class="padded">Geochemical Prospecting</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 169</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 140</td>
			<td class="padded">Seasteading</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="317" id="317" data-obj='{"depend":[314,315],"AI-Data":"220","Artificial-Scales":"240","FP":"180","Supplies":"7000000","Orichalcum":"190"}'> </td>
			<td class="padded">Wave Farms</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 7,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 240</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 190</td>
			<td class="padded">Seasteading
				<br>Biogel Refrigeration</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="318" id="318" data-obj='{"depend":[315],"Nanowire":"150","Biolight":"210","FP":"179","Orichalcum":"150"}'> </td>
			<td class="padded">Advanced Aquanautics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 179</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 150</td>
			<td class="padded">Biogel Refrigeration</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="319" id="319" data-obj='{"depend":[315],"Paper-Batteries":"150","Pearls":"200","FP":"176","Promethium":"100","Orichalcum":"200"}'> </td>
			<td class="padded">Ocean Cleaning Nanobots</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 176</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 200</td>
			<td class="padded">Biogel Refrigeration</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="320" id="320" data-obj='{"depend":[316,317],"Corals":"210","FP":"173","Coins":"6900000","Promethium":"250","Orichalcum":"180"}'> </td>
			<td class="padded">Robotic Appendages</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 173</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 6,900,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 180</td>
			<td class="padded">Geochemical Prospecting
				<br>Wave Farms</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="321" id="321" data-obj='{"depend":[318],"Bioplastics":"220","Plankton":"150","FP":"174"}'> </td>
			<td class="padded">Subaquatic Agriculture</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 174</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Advanced Aquanautics</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="322" id="322" data-obj='{"depend":[318,319],"Transester-Gas":"190","Corals":"210","FP":"167","Coins":"6500000"}'> </td>
			<td class="padded">Oxygen Absorbing Materials</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 167</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 6,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Advanced Aquanautics
				<br>Ocean Cleaning Nanobots</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="323" id="323" data-obj='{"depend":[320,321],"Pearls":"180","Plankton":"170","FP":"182","Promethium":"190","Orichalcum":"140"}'> </td>
			<td class="padded">Aqua Therapy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 182</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 140</td>
			<td class="padded">Robotic Appendages
				<br>Subaquatic Agriculture</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="324" id="324" data-obj='{"depend":[321,322],"Transester-Gas":"250","Pearls":"300","FP":"178","Promethium":"200","Orichalcum":"250"}'> </td>
			<td class="padded">Aqualoop</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 178</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 250</td>
			<td class="padded">Subaquatic Agriculture
				<br>Oxygen Absorbing Materials</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="325" id="325" data-obj='{"depend":[323],"Corals":"220","Biolight":"190","FP":"185","Coins":"8000000","Orichalcum":"280"}'> </td>
			<td class="padded">Underwater Meditation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 185</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 8,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 280</td>
			<td class="padded">Aqua Therapy</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="326" id="326" data-obj='{"depend":[323,324],"Plankton":"260","FP":"190","Supplies":"7700000","Promethium":"300","Orichalcum":"300"}'> </td>
			<td class="padded">Photovoltaic Film</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 190</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 7,700,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 260</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 300</td>
			<td class="padded">Aqua Therapy
				<br>Aqualoop</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="327" id="327" data-obj='{"depend":[324],"Nanowire":"240","Artificial-Scales":"260","FP":"176","Orichalcum":"270"}'> </td>
			<td class="padded">Electronic Tattoos</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 176</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 260</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 270</td>
			<td class="padded">Aqualoop</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="328" id="328" data-obj='{"depend":[325,326],"Paper-Batteries":"280","Corals":"250","FP":"178","Promethium":"280","Orichalcum":"200"}'> </td>
			<td class="padded">Nautilus Replica</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 178</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 200</td>
			<td class="padded">Underwater Meditation
				<br>Photovoltaic Film</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="329" id="329" data-obj='{"depend":[325,326,327],"Bioplastics":"190","Plankton":"210","FP":"192","Orichalcum":"300"}'> </td>
			<td class="padded">Eco-exploration</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 192</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 300</td>
			<td class="padded">Underwater Meditation
				<br>Photovoltaic Film
				<br>Electronic Tattoos</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="330" id="330" data-obj='{"depend":[327],"FP":"184","Coins":"9000000","Supplies":"8500000","Promethium":"400","Orichalcum":"350"}'> </td>
			<td class="padded">Waterfall Stock</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 184</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 9,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 8,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 350</td>
			<td class="padded">Electronic Tattoos</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="331" id="331" data-obj='{"depend":[328,329],"AI-Data":"160","Corals":"200","FP":"186","Orichalcum":"300"}'> </td>
			<td class="padded">Accelerated Shipbuilding</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 186</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 300</td>
			<td class="padded">Nautilus Replica
				<br>Eco-exploration</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="332" id="332" data-obj='{"depend":[330],"Biolight":"200","Pearls":"220","FP":"176","Coins":"9500000","Orichalcum":"370"}'> </td>
			<td class="padded">Agglomeration Architecture</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 176</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 9,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 220</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 370</td>
			<td class="padded">Waterfall Stock</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="333" id="333" data-obj='{"depend":[330],"Plankton":"210","Artificial-Scales":"220","FP":"192","Promethium":"250","Orichalcum":"300"}'> </td>
			<td class="padded">Research Grant</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 192</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 300</td>
			<td class="padded">Waterfall Stock</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="334" id="334" data-obj='{"depend":[331,332],"Corals":"220","Biolight":"230","FP":"174","Supplies":"9000000","Orichalcum":"320"}'> </td>
			<td class="padded">Pendulum Oscillation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 174</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 9,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 230</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 320</td>
			<td class="padded">Accelerated Shipbuilding
				<br>Agglomeration Architecture</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="335" id="335" data-obj='{"depend":[332,333],"Nanowire":"150","Plankton":"230","FP":"185","Orichalcum":"300"}'> </td>
			<td class="padded">New Recruits</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 185</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 230</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 300</td>
			<td class="padded">Agglomeration Architecture
				<br>Research Grant</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="336" id="336" data-obj='{"depend":[334],"Paper-Batteries":"300","FP":"190","Coins":"10000000","Promethium":"300","Orichalcum":"360"}'> </td>
			<td class="padded">Chromatophore Synthesis</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 10,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 360</td>
			<td class="padded">Pendulum Oscillation</td>
			<td class="padded"></td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="337" id="337" data-obj='{"depend":[334],"Pearls":"240","Corals":"250","FP":"205","Promethium":"240","Orichalcum":"300"}'> </td>
			<td class="padded">Braving the Deep</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 205</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 300</td>
			<td class="padded">Pendulum Oscillation</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="338" id="338" data-obj='{"depend":[335],"Artificial-Scales":"210","Biolight":"210","FP":"178","Supplies":"11000000","Orichalcum":"390"}'> </td>
			<td class="padded">Maritime Archaeology</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 178</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 11,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 390</td>
			<td class="padded">New Recruits</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="339" id="339" data-obj='{"depend":[336,337],"Plankton":"180","Corals":"220","FP":"170","Promethium":"170","Orichalcum":"280"}'> </td>
			<td class="padded">Advanced Heliograph</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 170</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 170</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 280</td>
			<td class="padded">Chromatophore Synthesis
				<br>Braving the Deep</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="340" id="340" data-obj='{"depend":[337,338],"Bioplastics":"200","Biolight":"210","FP":"174","Orichalcum":"330"}'> </td>
			<td class="padded">Lifeguarding</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 174</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Bioplastics.webp" alt="Bioplastics" title="Bioplastics" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 330</td>
			<td class="padded">Braving the Deep
				<br>Maritime Archaeology</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="341" id="341" data-obj='{"depend":[339],"Pearls":"230","Artificial-Scales":"280","FP":"195","Coins":"11000000","Orichalcum":"360"}'> </td>
			<td class="padded">Enhanced Streamlining</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 195</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 11,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 230</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 360</td>
			<td class="padded">Advanced Heliograph</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="342" id="342" data-obj='{"depend":[339,340],"Corals":"240","FP":"180","Supplies":"10000000","Promethium":"300","Orichalcum":"270"}'> </td>
			<td class="padded">Aquabotanics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 10,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 240</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 270</td>
			<td class="padded">Advanced Heliograph
				<br>Lifeguarding</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="343" id="343" data-obj='{"depend":[340],"Transester-Gas":"340","Artificial-Scales":"250","FP":"178","Supplies":"11000000","Orichalcum":"380"}'> </td>
			<td class="padded">Marine Engineering</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 178</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 11,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Transester_Gas.webp" alt="Transester Gas" title="Transester Gas" > 340</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 380</td>
			<td class="padded">Lifeguarding</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="344" id="344" data-obj='{"depend":[341],"Biolight":"320","Pearls":"270","FP":"220","Coins":"11500000","Promethium":"390"}'> </td>
			<td class="padded">Aqua Terraforming</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 11,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 320</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 270</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 390</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Enhanced Streamlining</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="345" id="345" data-obj='{"depend":[342,343],"AI-Data":"210","Plankton":"240","FP":"198","Promethium":"280","Orichalcum":"250"}'> </td>
			<td class="padded">Accelerated Breaching</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 198</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/AI_Data.webp" alt="AI Data" title="AI Data" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 250</td>
			<td class="padded">Aquabotanics
				<br>Marine Engineering</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="346" id="346" data-obj='{"depend":[344,345],"Nanowire":"320","Corals":"280","FP":"200","Coins":"12500000","Orichalcum":"400"}'> </td>
			<td class="padded">Deepwater Drilling</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 12,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Nanowire.webp" alt="Nanowire" title="Nanowire" > 320</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 400</td>
			<td class="padded">Aqua Terraforming
				<br>Accelerated Breaching</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="ofe bold index">
			<td>
				<input type="checkbox" name="347" id="347" data-obj='{"depend":[345],"Paper-Batteries":"300","Plankton":"250","FP":"210","Supplies":"12000000","Promethium":"290"}'> </td>
			<td class="padded">Oceanic Preservation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 12,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Paper_Batteries.webp" alt="Paper Batteries" title="Paper Batteries" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 290</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Accelerated Breaching</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="348" id="348" data-obj='{"depend":[346,347],"Biolight":"200","Plankton":"150","FP":"180","Coins":"15000000","Promethium":"170"}'> </td>
			<td class="padded">3D Photon Emitters</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 15,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 170</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Deepwater Drilling
				<br>Oceanic Preservation</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="349" id="349" data-obj='{"depend":[348],"Pearls":"150","Corals":"200","FP":"195","Coins":"18000000","Orichalcum":"180"}'> </td>
			<td class="padded">Smart Fabrics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 195</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 18,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 180</td>
			<td class="padded">3D Photon Emitters</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="350" id="350" data-obj='{"depend":[348],"Pearls":"190","Artificial-Scales":"200","FP":"205","Supplies":"18000000","Promethium":"220"}'> </td>
			<td class="padded">Pico Computing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 205</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 18,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 220</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">3D Photon Emitters</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="351" id="351" data-obj='{"depend":[348],"Biolight":"260","Corals":"170","FP":"200","Orichalcum":"250"}'> </td>
			<td class="padded">Trinary Information Engraving</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 260</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 170</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 250</td>
			<td class="padded">3D Photon Emitters</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="352" id="352" data-obj='{"depend":[350],"Artificial-Scales":"280","Corals":"220","FP":"215","Coins":"19500000","Orichalcum":"150"}'> </td>
			<td class="padded">Reliable Hash Generators</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 215</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 19,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 220</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 150</td>
			<td class="padded">Pico Computing</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="353" id="353" data-obj='{"depend":[350],"Biolight":"180","Corals":"200","FP":"240","Coins":"20500000","Promethium":"250"}'> </td>
			<td class="padded">Accelerated Food Engineering</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 20,500,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Pico Computing</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="354" id="354" data-obj='{"depend":[350],"Pearls":"250","Plankton":"280","FP":"210","Supplies":"25000000","Data-Crystals":"140"}'> </td>
			<td class="padded">Compounding Robotics</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 25,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Pico Computing</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="355" id="355" data-obj='{"depend":[351],"Artificial-Scales":"230","Corals":"250","FP":"220","Coins":"20700000","Cryptocash":"130"}'> </td>
			<td class="padded">Quantum Photogrammetry</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 20,700,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 230</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 130</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Trinary Information Engraving</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="356" id="356" data-obj='{"depend":[352,353,354],"Biolight":"250","Tea-Silk":"160","FP":"245","Supplies":"19000000","Golden-Rice":"140"}'> </td>
			<td class="padded">Secured VR Domains</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 245</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 19,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Reliable Hash Generators
				<br>Accelerated Food Engineering
				<br>Compounding Robotics</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="357" id="357" data-obj='{"depend":[354],"Pearls":"300","Tea-Silk":"150","FP":"235","Data-Crystals":"150","Orichalcum":"180"}'> </td>
			<td class="padded">Energy Preserving Surfaces</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 235</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Pearls.webp" alt="Pearls" title="Pearls" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 180</td>
			<td class="padded">Compounding Robotics</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="358" id="358" data-obj='{"depend":[355],"Artificial-Scales":"280","Golden-Rice":"180","FP":"240","Data-Crystals":"120","Orichalcum":"210"}'> </td>
			<td class="padded">Public Emitters</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 240</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 120</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 210</td>
			<td class="padded">Quantum Photogrammetry</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="359" id="359" data-obj='{"depend":[356,357],"Corals":"230","Nanites":"180","FP":"250","Cryptocash":"200","Promethium":"210"}'> </td>
			<td class="padded">Codex of Honor 2.0</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Corals.webp" alt="Corals" title="Corals" > 230</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 210</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Secured VR Domains
				<br>Energy Preserving Surfaces</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="360" id="360" data-obj='{"depend":[357],"Plankton":"200","Nanites":"160","FP":"255","Cryptocash":"180","Orichalcum":"210"}'> </td>
			<td class="padded">Responsive Holo-Enterainment</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 255</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 210</td>
			<td class="padded">Energy Preserving Surfaces</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="361" id="361" data-obj='{"depend":[358],"Plankton":"290","Golden-Rice":"160","FP":"256","Tea-Silk":"200","Orichalcum":"260"}'> </td>
			<td class="padded">Noise-Cancelling Concrete</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 256</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Plankton.webp" alt="Plankton" title="Plankton" > 290</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 160</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 260</td>
			<td class="padded">Public Emitters</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="362" id="362" data-obj='{"depend":[359,360,361],"Biolight":"230","Nanites":"190","FP":"270","Data-Crystals":"150","Promethium":"200"}'> </td>
			<td class="padded">Cybernetically Augmented Ninjutsu</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 270</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Biolight.webp" alt="Biolight" title="Biolight" > 230</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 190</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Codex of Honor 2.0
				<br>Responsive Holo-Enterainment
				<br>Noise-Cancelling Concrete</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="363" id="363" data-obj='{"depend":[362],"Artificial-Scales":"250","Golden-Rice":"260","FP":"258","Supplies":"30000000","Cryptocash":"240"}'> </td>
			<td class="padded">Crypto Gambling</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 258</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Artificial_Scales.webp" alt="Artificial Scales" title="Artificial Scales" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 260</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 240</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cybernetically Augmented Ninjutsu</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="364" id="364" data-obj='{"depend":[362],"Tea-Silk":"260","Data-Crystals":"250","FP":"260","Supplies":"35000000","Promethium":"180"}'> </td>
			<td class="padded">VR Overlays</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 260</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 35,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 260</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cybernetically Augmented Ninjutsu</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="365" id="365" data-obj='{"depend":[362],"Data-Crystals":"250","Golden-Rice":"220","FP":"255","Cryptocash":"150","Promethium":"180"}'> </td>
			<td class="padded">Encrypted Digital Licensing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 255</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 220</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cybernetically Augmented Ninjutsu</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="366" id="366" data-obj='{"depend":[363,364],"Data-Crystals":"240","Nanites":"210","FP":"265","Supplies":"30000000","Tea-Silk":"160"}'> </td>
			<td class="padded">Cultural Resurgence</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 265</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 210</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crypto Gambling
				<br>VR Overlays</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="367" id="367" data-obj='{"depend":[363,364],"Cryptocash":"240","Nanites":"230","FP":"260","Golden-Rice":"180","Promethium":"200"}'> </td>
			<td class="padded">VR Domain Archiving</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 260</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 240</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 230</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crypto Gambling
				<br>VR Overlays</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="368" id="368" data-obj='{"depend":[364,365],"Cryptocash":"260","Nanites":"120","FP":"270","Coins":"35000000","Tea-Silk":"250"}'> </td>
			<td class="padded">Non-Votile Fire Shells</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 270</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 35,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 260</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 120</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">VR Overlays
				<br>Encrypted Digital Licensing</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="369" id="369" data-obj='{"depend":[367],"Golden-Rice":"230","Nanites":"180","FP":"300","Tea-Silk":"185","Orichalcum":"350"}'> </td>
			<td class="padded">Citizen Score System</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 230</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 185</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 180</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 350</td>
			<td class="padded">VR Domain Archiving</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="370" id="370" data-obj='{"depend":[367],"Golden-Rice":"290","Nanites":"350","FP":"275","Supplies":"30000000"}'> </td>
			<td class="padded">Evolving VR Overlays</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 275</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 290</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">VR Domain Archiving</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="371" id="371" data-obj='{"depend":[366],"Cryptocash":"280","Nanites":"325","FP":"295","Coins":"35000000","Promethium":"250"}'> </td>
			<td class="padded">VR Supported Celebrations</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 295</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 35,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 325</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cultural Resurgence</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="372" id="372" data-obj='{"depend":[370],"Tea-Silk":"280","Golden-Rice":"330","FP":"280","Coins":"30000000","Orichalcum":"200"}'> </td>
			<td class="padded">Efficient DNA Analysis</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 30,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 330</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 200</td>
			<td class="padded">Evolving VR Overlays</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="373" id="373" data-obj='{"depend":[369,371],"Cryptocash":"280","Data-Crystals":"330","FP":"310","Supplies":"35000000","Promethium":"300"}'> </td>
			<td class="padded">Combat Traditions</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 310</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 35,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 305</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 295</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Citizen Score System
				<br>VR Supported Celebrations</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="vfe bold index">
			<td>
				<input type="checkbox" name="374" id="374" data-obj='{"depend":[372,373],"Tea-Silk":"300","Data-Crystals":"280","FP":"330","Coins":"40000000","Supplies":"40000000"}'> </td>
			<td class="padded">High Definition VR Domains</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 330</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 40,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 40,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Efficient DNA Analysis
				<br>Combat Traditions</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="375" id="375" data-obj='{"depend":[374],"Tea-Silk":"250","Cryptocash":"280","FP":"300","Coins":"50000000","Supplies":"50000000"}'> </td>
			<td class="padded">Spacefaring</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 50,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 50,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">High Definition VR Domains</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="376" id="376" data-obj='{"depend":[375],"Tea-Silk":"150","Cryptocash":"140","Data-Crystals":"350","FP":"310"}'> </td>
			<td class="padded">Subatomic Crystallisation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 310</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 350</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Tea_Silk.webp" alt="Tea Silk" title="Tea Silk" > 150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Cryptocash.webp" alt="Cryptocash" title="Cryptocash" > 140</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Spacefaring</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="377" id="377" data-obj='{"depend":[375],"Nanites":"235","Golden-Rice":"280","FP":"305"}'> </td>
			<td class="padded">Entangled Nuclear Fusion</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 305</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 235</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Spacefaring</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="378" id="378" data-obj='{"depend":[375],"Nanites":"200","Golden-Rice":"125","Data-Crystals":"160","FP":"335"}'> </td>
			<td class="padded">Genome Recoding</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 335</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Nanites.webp" alt="Nanites" title="Nanites" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Golden_Rice.webp" alt="Golden Rice" title="Golden Rice" > 125</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/VF/Data_Crystals.webp" alt="Data Crystals" title="Data Crystals" > 160</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Spacefaring</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="379" id="379" data-obj='{"depend":[377],"Coins":"40000000","Supplies":"30000000","Promethium":"200","FP":"310"}'> </td>
			<td class="padded">Plazma Nozzles</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 310</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 40,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 30,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Entangled Nuclear Fusion</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="380" id="380" data-obj='{"depend":[377],"Mars-Ore":"200","FP":"330"}'> </td>
			<td class="padded">Polymerized Membranes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 330</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Entangled Nuclear Fusion</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="381" id="381" data-obj='{"depend":[377],"Superalloys":"500","Lubricant":"400","FP":"315"}'> </td>
			<td class="padded">S.O.L.I.D. Mark II Glass</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 315</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > 500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Entangled Nuclear Fusion</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="382" id="382" data-obj='{"depend":[379],"Coins":"45000000","Supplies":"35000000","Mars-Ore":"200","Promethium":"250","FP":"320"}'> </td>
			<td class="padded">Lower AI Cores</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 320</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 45,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 35,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 250</td>
			<td class="padded">Plazma Nozzles</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="383" id="383" data-obj='{"depend":[380,381],"BioTech-Crops":"250","Mars-Microbes":"300","Fusion-Reactors":"280","FP":"335"}'> </td>
			<td class="padded">Multispectral Sensors</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 335</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 280</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Polymerized Membranes
				<br>S.O.L.I.D. Mark II Glass</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="384" id="384" data-obj='{"depend":[382,383],"Superalloys":"350","Lubricant":"500","Mars-Ore":"200","FP":"325"}'> </td>
			<td class="padded">Space Marketing Techniques</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 325</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > 350</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Lower AI Cores
				<br>Multispectral Sensors</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="385" id="385" data-obj='{"depend":[383],"BioTech-Crops":"600","Mars-Ore":"300","Orichalcum":"250","FP":"340"}'> </td>
			<td class="padded">Enchanced Plasteel</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 340</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 250</td>
			<td class="padded">Multispectral Sensors</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="386" id="386" data-obj='{"depend":[383],"Coins":"60000000","Mars-Microbes":"650","Lubricant":"600","BioTech-Crops":"600","FP":"350"}'> </td>
			<td class="padded">Mars Regulation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 350</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 60,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 650</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Multispectral Sensors</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="387" id="387" data-obj='{"depend":[384],"Mars-Microbes":"500","Lubricant":"650","Fusion-Reactors":"800","FP":"365"}'> </td>
			<td class="padded">Pressurized Plasma</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 365</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 650</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Space Marketing Techniques</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="388" id="388" data-obj='{"depend":[385],"Fusion-Reactors":"600","Superalloys":"700","Orichalcum":"250","FP":"370"}'> </td>
			<td class="padded">Repurposable Furniture</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 370</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Enchanced Plasteel</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="389" id="389" data-obj='{"depend":[385,386],"BioTech-Crops":"950","Superalloys":"850","Promethium":"300","FP":"385"}'> </td>
			<td class="padded">Non-Reflective Photovoltaic</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 385</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 950</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > 850</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Enchanced Plasteel
				<br>Mars Regulation</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="390" id="390" data-obj='{"depend":[387],"Coins":"55000000","Lubricant":"1200","Mars-Microbes":"1150","Mars-Ore":"600","FP":"360"}'> </td>
			<td class="padded">Anti-Gravitational Fields</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 360</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 55,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 1,200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 1,150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Pressurized Plasma</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="391" id="391" data-obj='{"depend":[388,389],"Fusion-Reactors":"1400","Lubricant":"950","BioTech-Crops":"1050","FP":"365"}'> </td>
			<td class="padded">Waste Management Enzymes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 365</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 1,400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 950</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 1,050</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Repurposable Furniture
				<br>Non-Reflective Photovoltaic</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="392" id="392" data-obj='{"depend":[389],"Superalloys":"1450","Mars-Microbes":"1400","Orichalcum":"400","FP":"385"}'> </td>
			<td class="padded">Mars Infrastructure</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 385</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 1,400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > 1,450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Non-Reflective Photovoltaic</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="393" id="393" data-obj='{"depend":[390],"Fusion-Reactors":"200","Mars-Ore":"100","FP":"375"}'> </td>
			<td class="padded">Molecular Editing</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 375</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anti-Gravitational Fields</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="394" id="394" data-obj='{"depend":[390,392],"Superalloys":"1700","Lubricant":"1450","Mars-Microbes":"1300","FP":"380"}'> </td>
			<td class="padded">Superconductors Particle Streams</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 380</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > 1,700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 1,450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 1,300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anti-Gravitational Fields
				<br>Mars Infrastructure</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="395" id="395" data-obj='{"depend":[392],"Fusion-Reactors":"1200","Mars-Ore":"1000","FP":"400"}'> </td>
			<td class="padded">Self-Repairing Alloys</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 1,200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 1,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mars Infrastructure</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="396" id="396" data-obj='{"depend":[392],"Superalloys":"1700","BioTech-Crops":"1900","Orichalcum":"300","FP":"395"}'> </td>
			<td class="padded">Neural Augmented Frameworks</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 395</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > 1,700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 1,900</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mars Infrastructure</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="397" id="397" data-obj='{"depend":[394,395,396],"Supplies":"65000000","Mars-Microbes":"2000","Mars-Ore":"900","Promethium":"600","FP":"390"}'> </td>
			<td class="padded">Mars Ownership Patents</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 390</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 65,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 2,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 900</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 600</td>
			<td class="padded">Superconductors Particle Streams
				<br>Self-Repairing Alloys
				<br>Neural Augmented Frameworks</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sam bold index">
			<td>
				<input type="checkbox" name="398" id="398" data-obj='{"depend":[396],"Fusion-Reactors":"2800","Lubricant":"1500","BioTech-Crops":"1900","FP":"400"}'> </td>
			<td class="padded">Multipurpose Code Routines</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 2,800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 1,900</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Neural Augmented Frameworks</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="399" id="399" data-obj='{"depend":[397],"Fusion-Reactors":"800","Lubricant":"1200","Mars-Microbes":"500","Mars-Ore":"1200","FP":"450"}'> </td>
			<td class="padded">Solar Powered EmDrive</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 1,200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 1,200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mars Ownership Patents</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="400" id="400" data-obj='{"depend":[399],"Coins":"50000000","Supplies":"75000000","Promethium":"250","Orichalcum":"250","FP":"400"}'> </td>
			<td class="padded">Mars Goods Synthesizing I</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 50,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 75,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 250</td>
			<td class="padded">Solar Powered EmDrive</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="401" id="401" data-obj='{"depend":[399],"Coins":"75000000","Supplies":"50000000","Promethium":"350","Orichalcum":"450","FP":"400"}'> </td>
			<td class="padded">Mars Goods Synthesizing II</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 75,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 50,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 350</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 450</td>
			<td class="padded">Solar Powered EmDrive</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="402" id="402" data-obj='{"depend":[400],"Coins":"60000000","Superalloys":"1500","Fusion-Reactors":"920","Mars-Microbes":"1200","FP":"420"}'> </td>
			<td class="padded">Artificial Gravitation Module</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 420</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 60,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 920</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 1,200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mars Goods Synthesizing I</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="403" id="403" data-obj='{"depend":[400,401],"Coins":"50000000","Superalloys":"1250","BioTech-Crops":"800","Asteroid-Ice":"350","FP":"425"}'> </td>
			<td class="padded">Advanced Vacuum Distillation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 425</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 50,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Superalloys.webp" alt="Superalloys" title="Superalloys" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mars Goods Synthesizing I
				<br>Mars Goods Synthesizing II</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="404" id="404" data-obj='{"depend":[401],"Fusion-Reactors":"1000","Lubricant":"1550","Mars-Ore":"750","FP":"410"}'> </td>
			<td class="padded">Thermal Mining</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 410</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Fusion_Reactors.webp" alt="Fusion Reactors" title="Fusion Reactors" > 1,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Lubricant.webp" alt="Lubricant" title="Lubricant" > 1,550</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Mars Goods Synthesizing II</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="405" id="405" data-obj='{"depend":[402],"Processed-Materials":"700","BioTech-Crops":"750","Bromine":"600","Promethium":"500","FP":"450"}'> </td>
			<td class="padded">Multi-purpose Space Training</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Artificial Gravitation Module</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="406" id="406" data-obj='{"depend":[402,403],"Supplies":"75000000","Mars-Microbes":"1000","Nickel":"650","Asteroid-Ice":"600","FP":"410"}'> </td>
			<td class="padded">Self-sealing Alloys</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 410</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 75,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 650</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Microbes.webp" alt="Mars Microbes" title="Mars Microbes" > 1,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Artificial Gravitation Module
				<br>Advanced Vacuum Distillation</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="407" id="407" data-obj='{"depend":[404],"Platinum-Crystals":"680","BioTech-Crops":"1200","Compound-Fluid":"450","Orichalcum":"800","FP":"375"}'> </td>
			<td class="padded">Smart Home 2.0</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 375</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 680</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/BioTech_Crops.webp" alt="BioTech Crops" title="BioTech Crops" > 1,200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Thermal Mining</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="408" id="408" data-obj='{"depend":[405],"Processed-Materials":"750","Bromine":"500","Nickel":"700","Mars-Ore":"1750","FP":"470"}'> </td>
			<td class="padded">Reinforced Mining Parts</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 470</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 1,750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Multi-purpose Space Training</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="409" id="409" data-obj='{"depend":[406],"Processed-Materials":"800","Compound-Fluid":"1250","Nickel":"550","Asteroid-Ice":"750","FP":"425"}'> </td>
			<td class="padded">Liquid Power Transmitter</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 425</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Self-sealing Alloys</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="410" id="410" data-obj='{"depend":[407],"Platinum-Crystals":"600","Bromine":"750","Nickel":"500","Compound-Fluid":"520","FP":"380"}'> </td>
			<td class="padded">Inter-Divisional Controls</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 380</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 520</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Smart Home 2.0</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="411" id="411" data-obj='{"depend":[407],"Coins":"80000000","Promethium":"600","Orichalcum":"600","Mars-Ore":"1500","FP":"550"}'> </td>
			<td class="padded">Interplanetary Permit A.38</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 80,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 1,500</td>
			<td class="padded">Smart Home 2.0</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="412" id="412" data-obj='{"depend":[408,409],"Processed-Materials":"1400","Bromine":"450","Platinum-Crystals":"620","Mars-Ore":"1750","FP":"490"}'> </td>
			<td class="padded">Simplified Repair Process</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 490</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 1400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 620</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 1,750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Reinforced Mining Parts
				<br>Liquid Power Transmitter</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="413" id="413" data-obj='{"depend":[409,410],"Processed-Materials":"800","Compound-Fluid":"1500","Nickel":"1600","Asteroid-Ice":"1000","FP":"470"}'> </td>
			<td class="padded">Fluid Cleaning System</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 470</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 1,600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 1,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Reinforced Mining Parts
				<br>Liquid Power Transmitter</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="414" id="414" data-obj='{"depend":[410,411],"Platinum-Crystals":"1250","Bromine":"1750","Nickel":"800","Compound-Fluid":"550","FP":"460"}'> </td>
			<td class="padded">Officially Ordered Restospective</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 460</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 1,750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Inter-Divisional Controls
				<br>Interplanetary Permit A.38</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="415" id="415" data-obj='{"depend":[412],"Coins":"50000000","Supplies":"75000000","Platinum-Crystals":"1500","Asteroid-Ice":"1200","FP":"470"}'> </td>
			<td class="padded">Two Dimensional Magnetic Crystals</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 470</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 50,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 75,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 1,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 1,200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Simplified Repair Process</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="416" id="416" data-obj='{"depend":[413],"Platinum-Crystals":"800","Bromine":"1600","Nickel":"1800","Compound-Fluid":"1280","FP":"450"}'> </td>
			<td class="padded">Extended Quality Assurance</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 1,280</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 1,800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 1,600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Fluid Cleaning System</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="417" id="417" data-obj='{"depend":[413,414],"Processed-Materials":"1250","Bromine":"800","Mars-Ore":"2000","Promethium":"450","FP":"450"}'> </td>
			<td class="padded">Radiation Protection System</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 2,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 450</td>
			<td class="padded">Fluid Cleaning System
				<br>Officially Ordered Restospective</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="418" id="418" data-obj='{"depend":[415,416],"Platinum-Crystals":"1600","Compound-Fluid":"1200","Processed-Materials":"2000","Orichalcum":"720","FP":"490"}'> </td>
			<td class="padded">Nonlinear Laser Pulse</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 490</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 1,600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 1,200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 2,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 720</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Two Dimensional Magnetic Crystals
				<br>Extended Quality Assurance</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="419" id="419" data-obj='{"depend":[417],"Nickel":"1600","Bromine":"1250","Compound-Fluid":"2000","FP":"450"}'> </td>
			<td class="padded">Simplified Data Transmission</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 1,600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 2,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Radiation Protection System</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="420" id="420" data-obj='{"depend":[418,419],"Platinum-Crystals":"1250","Bromine":"800","Orichalcum":"600","Asteroid-Ice":"1400","FP":"510"}'> </td>
			<td class="padded">Selective Heat Generation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 510</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 1,400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 600</td>
			<td class="padded">Nonlinear Laser Pulse
				<br>Simplified Data Transmission</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="421" id="421" data-obj='{"depend":[419],"Compound-Fluid":"1250","Mars-Ore":"2550","Asteroid-Ice":"1700","Promethium":"560","FP":"520"}'> </td>
			<td class="padded">Aerogel Concrete</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 520</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 1,250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 2,550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 1,700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 560</td>
			<td class="padded">Simplified Data Transmission</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="422" id="422" data-obj='{"depend":[419],"Supplies":"80000000","Platinum-Crystals":"1700","Processed-Materials":"2300","Asteroid-Ice":"1800","FP":"490"}'> </td>
			<td class="padded">Automated Bureaucracy</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 490</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 80,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 1,700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 2,300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 1,800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Simplified Data Transmission</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="saab bold index">
			<td>
				<input type="checkbox" name="423" id="423" data-obj='{"depend":[420,421,422],"Nickel":"1800","Bromine":"1500","Asteroid-Ice":"2200","FP":"480"}'> </td>
			<td class="padded">Formulated Law for Spacefaring</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 480</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 1,800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 1,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 2,200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Selective Heat Generation
				<br>Aerogel Concrete
				<br>Automated Bureaucracy</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="424" id="424" data-obj='{"depend":[423],"Nickel":"1150","Processed-Materials":"1100","Bromine":"950","Asteroid-Ice":"350","FP":"500"}'> </td>
			<td class="padded">Atmospheric Aerostats</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 1,150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 1,100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 950</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Formulated Law for Spacefaring</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="425" id="425" data-obj='{"depend":[424],"Supplies":"90000000","Compound-Fluid":"950","Mars-Ore":"350","Asteroid-Ice":"400","FP":"490"}'> </td>
			<td class="padded">Asteroid Goods Synthesizing I</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 490</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 90,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 950</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 350</td>
			<td class="padded">Atmospheric Aerostats</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="426" id="426" data-obj='{"depend":[424],"Coins":"95000000","Processed-Materials":"1750","Mars-Ore":"450","Orichalcum":"300","FP":"550"}'> </td>
			<td class="padded">Asteroid Goods Synthesizing II</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 95,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Processed_Materials.webp" alt="Processed Materials" title="Processed Materials" > 1,750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 450</td>
			<td class="padded">Atmospheric Aerostats</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="427" id="427" data-obj='{"depend":[425],"Supplies":"90000000","Platinum-Crystals":"1800","Bromine":"1850","Asteroid-Ice":"450","FP":"545"}'> </td>
			<td class="padded">Taylored Biolight</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 545</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 90,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 1,800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Bromine.webp" alt="Bromine" title="Bromine" > 1,850</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Asteroid Goods Synthesizing I</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="428" id="428" data-obj='{"depend":[425,426],"Coins":"95000000","Supplies":"95000000","Asteroid-Ice":"500","Mars-Ore":"350","FP":"450"}'> </td>
			<td class="padded">Space Kitchen</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 95,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 95,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 350</td>
			<td class="padded">Asteroid Goods Synthesizing I
				<br>Asteroid Goods Synthesizing II</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="429" id="429" data-obj='{"depend":[426],"Platinum-Crystals":"1700","Nickel":"1700","Compound-Fluid":"1850","Asteroid-Ice":"600","FP":"480"}'> </td>
			<td class="padded">Covalent Solid</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 480</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Platinum_Crystals.webp" alt="Platinum Crystals" title="Platinum Crystals" > 1,700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Nickel.webp" alt="Nickel" title="Nickel" > 1,700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Compound_Fluid.webp" alt="Compound Fluid" title="Compound Fluid" > 1,850</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Asteroid Goods Synthesizing II</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="430" id="430" data-obj='{"depend":[427],"Coins":"100000000","Sugar-Crystals":"600","Promethium":"350","Orichalcum":"350","FP":"470"}'> </td>
			<td class="padded">Chrystalline</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 470</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 100,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 1,850</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 350</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 350</td>
			<td class="padded">Taylored Biolight</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="431" id="431" data-obj='{"depend":[427,428],"Glowing-Seaweed":"600","Promethium":"450","Orichalcum":"450","Mars-Ore":"500","FP":"490"}'> </td>
			<td class="padded">Pressure Resistant Fuel</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 490</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 500</td>
			<td class="padded">Taylored Biolight
				<br>Space Kitchen</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="432" id="432" data-obj='{"depend":[428,429],"Herbal-Snack":"550","Soy-Proteins":"400","Glowing-Seaweed":"700","Asteroid-Ice":"700","FP":"535"}'> </td>
			<td class="padded">Flexable Glass</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 535</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Space Kitchen
				<br>Covalent Solid</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="433" id="433" data-obj='{"depend":[430],"Herbal-Snack":"750","Soy-Proteins":"600","Venus-Carbon":"450","Asteroid-Ice":"700","FP":"535"}'> </td>
			<td class="padded">Break-Proof Alloys</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 535</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 700</td>
			<td class="padded">Chrystalline</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="434" id="434" data-obj='{"depend":[431],"Microgreen-Supplement":"650","Sugar-Crystals":"750","Glowing-Seaweed":"850","Mars-Ore":"650","FP":"440"}'> </td>
			<td class="padded">Rotation Equalizer</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 440</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 650</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 850</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 650</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Pressure Resistant Fuel</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="435" id="435" data-obj='{"depend":[431,432],"Herbal-Snack":"850","Glowing-Seaweed":"850","Microgreen-Supplement":"700","Asteroid-Ice":"800","FP":"470"}'> </td>
			<td class="padded">A.G.F Upgrade</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 470</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 850</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 850</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Pressure Resistant Fuel
				<br>Flexable Glass</td>
		<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="436" id="436" data-obj='{"depend":[433,434],"Microgreen-Supplement":"900","Sugar-Crystals":"850","Venus-Carbon":"550","Asteroid-Ice":"850","FP":"495"}'> </td>
			<td class="padded">EMP Transmission</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 495</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 900</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 850</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 850</td>
			<td class="padded">Break-Proof Alloys
				<br>Rotation Equalizer</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="437" id="437" data-obj='{"depend":[434],"Supplies":"100000000","Herbal-Snack":"1000","Soy-Proteins":"900","Mars-Ore":"700","FP":"550"}'> </td>
			<td class="padded">Maelstrom Prevention</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 550</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 100,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 1,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 900</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Rotation Equalizer</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="438" id="438" data-obj='{"depend":[434,435],"Sugar-Crystals":"950","Microgreen-Supplement":"1150","Glowing-Seaweed":"1050","Asteroid-Ice":"900","FP":"485"}'> </td>
			<td class="padded">Flexable Anchor Station</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 485</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 950</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 1,150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 1,050</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 900</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Rotation Equalizer
				<br>A.G.F Upgrade</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="439" id="439" data-obj='{"depend":[435],"Microgreen-Supplement":"1300","Soy-Proteins":"1500","Sugar-Crystals":"1000","Venus-Carbon":"650","FP":"495"}'> </td>
			<td class="padded">Flying Plants</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 495</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 1,300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 1,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 650</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">A.G.F Upgrade</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="440" id="440" data-obj='{"depend":[436,437],"Sugar-Crystals":"1200","Venus-Carbon":"750","Promethium":"600","Orichalcum":"600","FP":"515"}'> </td>
			<td class="padded">Advanced Aviation Control</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 515</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 1,200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 600</td>
			<td class="padded">EMP Transmission
				<br>Maelstrom Prevention</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="441" id="441" data-obj='{"depend":[438,439],"Herbal-Snack":"1650","Soy-Proteins":"1500","Glowing-Seaweed":"1750","Mars-Ore":"750","FP":"520"}'> </td>
			<td class="padded">Heat Regulation Modules</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 520</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 1,650</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 1,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 1,750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Flexable Anchor Station
				<br>Flying Plants</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="442" id="442" data-obj='{"depend":[440],"Sugar-Crystals":"1550","Soy-Proteins":"1700","Venus-Carbon":"850","Promethium":"700","FP":"520"}'> </td>
			<td class="padded">Biological Energy Conversion</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 520</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 1,550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 1,700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 850</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 700</td>
			<td class="padded">Advanced Aviation Control</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="443" id="443" data-obj='{"depend":[441],"Microgreen-Supplement":"1800","Herbal-Snack":"1750","Venus-Carbon":"1050","Asteroid-Ice":"1000","FP":"475"}'> </td>
			<td class="padded">Atmospheric Research</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 475</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 1,800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 1,750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 1,050</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 1,000</td>
			<td class="padded">Heat Regulation Modules</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="444" id="444" data-obj='{"depend":[441],"Glowing-Seaweed":"2600","Microgreen-Supplement":"2100","Venus-Carbon":"1250","Orichalcum":"750","FP":"520"}'> </td>
			<td class="padded">Vertical Home Design</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 520</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 2,600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 2,100</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 750</td>
			<td class="padded">Heat Regulation Modules</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="445" id="445" data-obj='{"depend":[442],"Sugar-Crystals":"2400","Herbal-Snack":"1950","Venus-Carbon":"1700","Promethium":"750","FP":"535"}'> </td>
			<td class="padded">Iridium Infused Medal</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 535</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 2,400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 1,950</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 1,700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 750</td>
			<td class="padded">Biological Energy Conversion</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="446" id="446" data-obj='{"depend":[443,444],"Herbal-Snack":"2500","Microgreen-Supplement":"2400","Soy-Proteins":"2100","Venus-Carbon":"2150","FP":"465"}'> </td>
			<td class="padded">Surface Observation Project</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 465</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 2,500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 2,400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 2,100</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 2,150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Atmospheric Research
				<br>Vertical Home Design</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sav bold index">
			<td>
				<input type="checkbox" name="447" id="447" data-obj='{"depend":[445,446],"Sugar-Crystals":"1800","Soy-Proteins":"2300","Glowing-Seaweed":"2600","Venus-Carbon":"2500","FP":"515"}'> </td>
			<td class="padded">Directed Nature</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 515</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 1,800</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 2,300</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 2,600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 2,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Iridium Infused Medal
				<br>Surface Observation Project</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="448" id="448" data-obj='{"depend":[447],"Supplies":"110000000","Microgreen-Supplement":"900","Herbal-Snack":"950","Venus-Carbon":"400","FP":"600"}'> </td>
			<td class="padded">Gene Synthesizer</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 110,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 900</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 950</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 400</td>
			<td class="padded">Directed Nature</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="449" id="449" data-obj='{"depend":[448],"Soy-Proteins":"1050","Glowing-Seaweed":"950","Mars-Ore":"250","Venus-Carbon":"350","FP":"550"}'> </td>
			<td class="padded">Venus Goods Synthesizing I</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 550</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 1,050</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 950</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 300</td>
			<td class="padded">Gene Synthesizer</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="450" id="450" data-obj='{"depend":[448],"Coins":"110000000","Sugar-Crystals":"1000","Mars-Ore":"350","Asteroid-Ice":"350","FP":"550"}'> </td>
			<td class="padded">Venus Goods Synthesizing II</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 110,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 1,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 350</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 350</td>
			<td class="padded">Gene Synthesizer</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="451" id="451" data-obj='{"depend":[449,450],"Coins":"115000000","Supplies":"115000000","Promethium":"450","Orichalcum":"450","FP":"570"}'> </td>
			<td class="padded">Luciferin Oxidation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 570</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 115,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 115,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 450</td>
			<td class="padded">Venus Goods Synthesizing I
				<br>Venus Goods Synthesizing II</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="452" id="452" data-obj='{"depend":[451],"Herbal-Snack":"1050","Glowing-Seaweed":"1000","Asteroid-Ice":"400","Venus-Carbon":"400","FP":"575"}'> </td>
			<td class="padded">Fluorophores</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 575</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 1000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 1050</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 400</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 400</td>
			<td class="padded">Luciferin Oxidation</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="453" id="453" data-obj='{"depend":[451],"Herbal-Snack":"900","Sugar-Crystals":"950","Asteroid-Ice":"400","Soy-Proteins":"900","FP":"560"}'> </td>
			<td class="padded">Enzymic Herterosis</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 560</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 950</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Herbal_Snack.webp" alt="Herbal Snack" title="Herbal Snack" > 900</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 900</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 400</td>
			<td class="padded">Luciferin Oxidation</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="454" id="454" data-obj='{"depend":[451],"Glowing-Seaweed":"950","Microgreen-Supplement":"1000","Soy-Proteins":"950","Venus-Carbon":"450","FP":"600"}'> </td>
			<td class="padded">Genomic Databank</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Glowing_Seaweed.webp" alt="Glowing Seaweed" title="Glowing Seaweed" > 950</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Soy_Proteins.webp" alt="Soy Proteins" title="Soy Proteins" > 950</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 1,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 450</td>
			<td class="padded">Luciferin Oxidation</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="455" id="455" data-obj='{"depend":[452],"Red-Algae":"650","Microgreen-Supplement":"1000","Enhanced-Porifera":"650","Venus-Carbon":"500","FP":"560"}'> </td>
			<td class="padded">Microscopic Propeller</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 560</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 650</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 650</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Microgreen_Supplement.webp" alt="Microgreen Supplement" title="Microgreen Supplement" > 1,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 500</td>
			<td class="padded">Fluorophores</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="456" id="456" data-obj='{"depend":[453,454],"Bio-Creatures":"550","Advanced-DNA-Data":"550","Sugar-Crystals":"950","Orichalcum":"450","FP":"525"}'> </td>
			<td class="padded">Interphase Beams</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 525</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 550</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Sugar_Crystals.webp" alt="Sugar Crystals" title="Sugar Crystals" > 950</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 450</td>
			<td class="padded">Enzymic Herterosis
				<br>Genomic Databank</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="457" id="457" data-obj='{"depend":[454],"Topological-Records":"600","Enhanced-Porifera":"650","Promethium":"450","Asteroid-Ice":"550","FP":"620"}'> </td>
			<td class="padded">Cystic Galvanizer</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 620</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 600</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 650</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 550</td>
			<td class="padded">Genomic Databank</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="458" id="458" data-obj='{"depend":[455],"Topological-Records":"700","Advanced-DNA-Data":"650","Red-Algae":"650","Venus-Carbon":"550","FP":"575"}'> </td>
			<td class="padded">Cavitation Module</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 575</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 700</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 650</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 650</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 550</td>
			<td class="padded">Microscopic Propeller</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="459" id="459" data-obj='{"depend":[456,457],"Topological-Records":"800","Advanced-DNA-Data":"700","Bio-Creatures":"650","Venus-Carbon":"650","FP":"530"}'> </td>
			<td class="padded">G. J. Mendel Award</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 530</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 800</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 700</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 650</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 650</td>
			<td class="padded">Interphase Beams
				<br>Cystic Galvanizer</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="460" id="460" data-obj='{"depend":[458],"Supplies":"120000000","Topological-Records":"1000","Enhanced-Porifera":"900","Venus-Carbon":"700","FP":"700"}'> </td>
			<td class="padded">Plasmid Suits</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 120,000,000</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 1,000</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 900</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 700</td>
			<td class="padded">Cavitation Module</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="461" id="461" data-obj='{"depend":[458,459],"Red-Algae":"800","Mars-Ore":"350","Asteroid-Ice":"650","Unknown-DNA":"350","FP":"640"}'> </td>
			<td class="padded">Splicing Pods</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 640</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 350</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 650</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 350</td>
			<td class="padded">Cavitation Module
				<br>G. J. Mendel Award</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="462" id="462" data-obj='{"depend":[459],"Red-Algae":"1050","Bio-Creatures":"900","Venus-Carbon":"850","Unknown-DNA":"450","FP":"620"}'> </td>
			<td class="padded">Spectral Shields</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 620</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 1,050</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 900</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 850</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 450</td>
			<td class="padded">G. J. Mendel Award</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="463" id="463" data-obj='{"depend":[460],"Topological-Records":"1350","Enhanced-Porifera":"950","Advanced-DNA-Data":"1150","Unknown-DNA":"500","FP":"610"}'> </td>
			<td class="padded">Deep Frequency Module</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 610</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 1,350</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 950</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 1,150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 500</td>
			<td class="padded">Plasmid Suits</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="464" id="464" data-obj='{"depend":[461,462],"Advanced-DNA-Data":"1450","Promethium":"500","Orichalcum":"600","Asteroid-Ice":"700","FP":"620"}'> </td>
			<td class="padded">Chimerism</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 620</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 1,450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 500</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 600</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 700</td>
			<td class="padded">Splicing Pods
				<br>Spectral Shields</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="465" id="465" data-obj='{"depend":[463],"Red-Algae":"1550","Topological-Records":"1800","Enhanced-Porifera":"1550","Orichalcum":"500","FP":"600"}'> </td>
			<td class="padded">Cyanobacterial Fuel</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 1,550</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 1,800</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 1,550</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 500</td>
			<td class="padded">Deep Frequency Module</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="466" id="466" data-obj='{"depend":[464],"Bio-Creatures":"1300","Enhanced-Porifera":"1700","Venus-Carbon":"950","Unknown-DNA":"600","FP":"600"}'> </td>
			<td class="padded">Ecto Phytobiomes</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 1,300</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 1,700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 950</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 600</td>
			<td class="padded">Chimerism</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="467" id="467" data-obj='{"depend":[465],"Bio-Creatures":"1400","Advanced-DNA-Data":"1800","Venus-Carbon":"1050","Unknown-DNA":"700","FP":"640"}'> </td>
			<td class="padded">High Pressure Detector 3000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 640</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 1,400</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 1,800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 1,050</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 700</td>
			<td class="padded">Cyanobacterial Fuel</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="468" id="468" data-obj='{"depend":[465],"Red-Algae":"1800","Topological-Records":"2150","Promethium":"600","Unknown-DNA":"850","FP":"600"}'> </td>
			<td class="padded">Photonic Imprint</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 1,800</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 1,800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 2,150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 850</td>
			<td class="padded">Cyanobacterial Fuel</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="469" id="469" data-obj='{"depend":[466],"Coins":"125000000","Supplies":"125000000","Mars-Ore":"550","Asteroid-Ice":"850","FP":"660"}'> </td>
			<td class="padded">Plasma Enducer</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 660</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 125,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 125,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAAB/Asteroid_Ice.webp" alt="Asteroid Ice" title="Asteroid Ice" > 850</td>
			<td class="padded">Ecto Phytobiomes</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="470" id="470" data-obj='{"depend":[467],"Coins":"130000000","Bio-Creatures":"1750","Enhanced-Porifera":"2050","Unknown-DNA":"1150","FP":"655"}'> </td>
			<td class="padded">Chemiluminescence Ammunition</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 655</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 130,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 1,750</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 2,050</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 1,150</td>
			<td class="padded">High Pressure Detector 3000</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="471" id="471" data-obj='{"depend":[467],"Topological-Records":"2500","Bio-Creatures":"2000","Advanced-DNA-Data":"2150","Unknown-DNA":"1450","FP":"640"}'> </td>
			<td class="padded">Lumi Ports</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 640</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 2,500</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 2,000</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 2,150</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 1,450</td>
			<td class="padded">High Pressure Detector 3000</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="472" id="472" data-obj='{"depend":[468,469],"Red-Algae":"2100","Advanced-DNA-Data":"2450","Venus-Carbon":"1150","Unknown-DNA":"1800","FP":"630"}'> </td>
			<td class="padded">Bioluminescent Radiation</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 630</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 2,100</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 2,450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 1,150</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 1,800</td>
			<td class="padded">Photonic Imprint
				<br>Plasma Enducer</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sajm bold index">
			<td>
				<input type="checkbox" name="473" id="473" data-obj='{"depend":[470,471,472],"Bio-Creatures":"2350","Enhanced-Porifera":"2450","Red-Algae":"2300","Unknown-DNA":"2150","FP":"615"}'> </td>
			<td class="padded">Ionic Drill</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 615</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 2,350</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 2,450</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 2,300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 2,150</td>
			<td class="padded">Chemiluminescence Ammunition
				<br>Lumi Ports
				<br>Bioluminescent Radiation</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="474" id="474" data-obj='{"depend":[473],"Bio-Creatures":"895","Red-Algae":"955","Mars-Ore":"750","Venus-Carbon":"450","FP":"700"}'> </td>
			<td class="padded">Anomalous Chemicals</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 895</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 950</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 450</td>
			<td class="padded">Ionic Drill</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="475" id="475" data-obj='{"depend":[474],"Enhanced-Porifera":"1045","Topological-Records":"895","Orichalcum":"450","Venus-Carbon":"650","FP":"650"}'> </td>
			<td class="padded">Jupiter Moon Goods Synthesizing I</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 650</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 1,045</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 895</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 450</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 650</td>
			<td class="padded">Anomalous Chemicals</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="476" id="476" data-obj='{"depend":[474],"Advanced-DNA-Data":"1010","Red-Algae":"810","Bio-Creatures":"855","Unknown-DNA":"400","FP":"650"}'> </td>
			<td class="padded">Jupiter Moon Goods Synthesizing II</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 650</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 1,010</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 810</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 855</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anomalous Chemicals</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="477" id="477" data-obj='{"depend":[474],"Advanced-DNA-Data":"880","Red-Algae":"855","Bio-Creatures":"895","Unknown-DNA":"420","FP":"770"}'> </td>
			<td class="padded">Jupiter Moon Goods Synthesizing III</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 770</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 880</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 855</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 895</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 420</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Anomalous Chemicals</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="478" id="478" data-obj='{"depend":[475,477],"Bio-Creatures":"840","Topological-Records":"860","Promethium":"1180","Orichalcum":"350","FP":"670"}'> </td>
			<td class="padded">Self-regulating Heat Shield</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 670</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 840</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 860</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 1,180</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 350</td>
			<td class="padded">Jupiter Moon Goods Synthesizing I
			<br>Jupiter Moon Goods Synthesizing III</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="479" id="479" data-obj='{"depend":[476,477],"Advanced-DNA-Data":"1110","Red-Algae":"910","Bio-Creatures":"770","Unknown-DNA":"350","FP":"675"}'> </td>
			<td class="padded">Ultrapure Elements</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 675</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 1,110</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 910</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 770</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Jupiter Moon Goods Synthesizing II
			<br>Jupiter Moon Goods Synthesizing III</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="480" id="480" data-obj='{"depend":[478,479],"Bio-Creatures":"820","Topological-Records":"950","Venus-Carbon":"875","Unknown-DNA":"450","FP":"660"}'> </td>
			<td class="padded">Negative Purification</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 660</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 820</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 950</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAV/Venus_Carbon.webp" alt="Venus Carbon" title="Venus Carbon" > 875</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 450</td>
			<td class="padded">Self-regulating Heat Shield
			<br>Ultrapure Elements</td>
			<td class="padded">&nbsp;</td>
		</tr>
	<tr class="sat bold index">
			<td>
				<input type="checkbox" name="481" id="481" data-obj='{"depend":[478,479],"Advanced-DNA-Data":"1040","Red-Algae":"885","Enhanced-Porifera":"935","Unknown-DNA":"300","FP":"700"}'> </td>
			<td class="padded">Molecular Enhanced Filter</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 1,040</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 885</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 935</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 450</td>
			<td class="padded">Self-regulating Heat Shield
			<br>Ultrapure Elements</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="482" id="482" data-obj='{"depend":[478,479],"Bio-Creatures":"950","Topological-Records":"930","Enhanced-Porifera":"1200","Unknown-DNA":"450","FP":"660"}'> </td>
			<td class="padded">Extended Periodic Table</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 660</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Bio_Creatures.webp" alt="Bio Creatures" title="Bio Creatures" > 950</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 930</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 1,200</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 450</td>
			<td class="padded">Self-regulating Heat Shield
			<br>Ultrapure Elements</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="483" id="483" data-obj='{"depend":[478,479],"Advanced-DNA-Data":"950","Topological-Records":"1160","Enhanced-Porifera":"1500","Unknown-DNA":"450","FP":"625"}'> </td>
			<td class="padded">ChemiPro Inc.</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 625</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Advanced_DNA_Data.webp" alt="Advanced DNA Data" title="Advanced DNA Data" > 950</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 1,160</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 1,500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 450</td>
			<td class="padded">Self-regulating Heat Shield
			<br>Ultrapure Elements</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="484" id="484" data-obj='{"depend":[480,481,482],"Red-Algae":"850","Topological-Records":"1135","Promethium":"1250","Mars-Ore":"850","FP":"720"}'> </td>
			<td class="padded">Permafrost Prevention</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 720</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Red_Algae.webp" alt="Red Algae" title="Red Algae" > 850</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Topological_Records.webp" alt="Topological Records" title="Topological Records" > 1,135</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 1,250</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAM/Mars_Ore.webp" alt="Mars Ore" title="Mars Ore" > 850</td>
			<td class="padded">Negative Purification
			<br>Molecular Enhanced Filter
			<br>Extended Periodic Table</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="485" id="485" data-obj='{"depend":[481,482,483],"Compressed-Matter-Capsule":"755","Enhanced-Porifera":"1045","Promethium":"570","Unknown-DNA":"500","FP":"675"}'> </td>
			<td class="padded">Advanced Hydrocarbon Binder</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 675</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 755</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAJM/Enhanced_Porifera.webp" alt="Enhanced Porifera" title="Enhanced Porifera" > 1,045</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/AF/Promethium.webp" alt="Promethium" title="Promethium" > 570</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 500</td>
			<td class="padded">Molecular Enhanced Filter
			<br>Extended Periodic Table
			<br>ChemiPro Inc.</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="486" id="486" data-obj='{"depend":[484],"Experimental-Data":"540","Isolated-Molecules":"640","Liquid-Binder":"705","Unknown-DNA":"550","FP":"630"}'> </td>
			<td class="padded">Extended Pressurizer</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 630</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 540</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > 640</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > 705</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 550</td>
			<td class="padded">Permafrost Prevention</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="487" id="487" data-obj='{"depend":[484,485],"Compressed-Matter-Capsule":"695","Upcycled-Hydrocarbons":"890","Liquid-Binder":"750","Crystallized-Hydrocarbons":"250","FP":"800"}'> </td>
			<td class="padded">Passive Construction 2.0</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 800</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 695</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > 890</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 250</td>
			<td class="padded">Permafrost Prevention
			<br>Advanced Hydrocarbon Binder</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="488" id="488" data-obj='{"depend":[485],"Coins":"190000000","Upcycled-Hydrocarbons":"750","Orichalcum":"700","Crystallized-Hydrocarbons":"300","FP":"740"}'> </td>
			<td class="padded">Chemical XVI</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 740</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 190,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 300</td>
			<td class="padded">Advanced Hydrocarbon Binder</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="489" id="489" data-obj='{"depend":[486,487],"Compressed-Matter-Capsule":"600","Isolated-Molecules":"750","Experimental-Data":"550","Unknown-DNA":"550","FP":"720"}'> </td>
			<td class="padded">Synthetic Hot Chocolate</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 720</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 600</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > 750</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 550</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 450</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Extended Pressurizer
	 		<br>Passive Construction 2.0</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="490" id="490" data-obj='{"depend":[487,488],"Supplies":"270000000","Liquid-Binder":"790","Upcycled-Hydrocarbons":"700","Crystallized-Hydrocarbons":"250","FP":"710"}'> </td>
			<td class="padded">Chemical Moral Contract</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 710</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 270,000,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > 790</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 250</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Passive Construction 2.0
			<br>Chemical XVI</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="491" id="491" data-obj='{"depend":[489,490],"Compressed-Matter-Capsule":"1000","Experimental-Data":"900","Isolated-Molecules":"750","Unknown-DNA":"700","FP":"720"}'> </td>
			<td class="padded">Cold Resistant Force Field</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 720</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 1,000</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 900</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > 750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAJM/Unknown_DNA.webp" alt="Unknown DNA" title="Unknown DNA" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Synthetic Hot Chocolate
			<br>Chemical Moral Contract</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="492" id="492" data-obj='{"depend":[490],"Coins":"210000000","Liquid-Binder":"950","Experimental-Data":"1000","Orichalcum":"500","FP":"700"}'> </td>
			<td class="padded">Refined Decrystallization</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 700</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 210,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > 950</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 1,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/OF/Orichalcum.webp" alt="Orichalcum" title="Orichalcum" > 500</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Chemical Moral Contract</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="493" id="493" data-obj='{"depend":[490],"Compressed-Matter-Capsule":"850","Isolated-Molecules":"950","Upcycled-Hydrocarbons":"1000","Crystallized-Hydrocarbons":"350","FP":"700"}'> </td>
			<td class="padded">Alchemist's Gold Contract</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 850</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > 950</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > 1,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Chemical Moral Contract</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="494" id="494" data-obj='{"depend":[491],"Supplies":"300000000","Experimental-Data":"1050","Liquid-Binder":"1050","Crystallized-Hydrocarbons":"400","FP":"740"}'> </td>
			<td class="padded">Effective Liquefaction</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 740</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 300,000,000</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 1,050</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > 1,050</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cold Resistant Force Field</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="495" id="495" data-obj='{"depend":[491,492,493],"Compressed-Matter-Capsule":"1200","Isolated-Molecules":"1200","Upcycled-Hydrocarbons":"1000","Crystallized-Hydrocarbons":"400","FP":"700"}'> </td>
			<td class="padded">Chemical Titan Competition</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 1,200</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > 1,200</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > 1,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 400</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Cold Resistant Force Field
			<br>Refined Decrystallization
			<br>Alchemist's Gold Contract</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="496" id="496" data-obj='{"depend":[492,493],"Compressed-Matter-Capsule":"1000","Experimental-Data":"900","Isolated-Molecules":"1350","Crystallized-Hydrocarbons":"550","FP":"760"}'> </td>
			<td class="padded">Synthetization Law</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 760</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 1,000</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 900</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > 1,350</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 550</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Refined Decrystallization
			<br>Alchemist's Gold Contract</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="497" id="497" data-obj='{"depend":[494,495],"Coins":"250000000","Experimental-Data":"1450","Upcycled-Hydrocarbons":"850","Crystallized-Hydrocarbons":"600","FP":"770"}'> </td>
			<td class="padded">Optic Fiber 2.0</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 770</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 250,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 1,450</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > 850</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 600</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Effective Liquefaction
	 		<br>Chemical Titan Competition</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="498" id="498" data-obj='{"depend":[494,495,496],"Supplies":"330000000","Upcycled-Hydrocarbons":"1850","Liquid-Binder":"1350","Crystallized-Hydrocarbons":"750","FP":"740"}'> </td>
			<td class="padded">Purified Additives</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 740</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Supplies.webp" alt="Supplies" title="Supplies" > 330,000,000</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > 1,850</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > 1,350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Effective Liquefaction
	 		<br>Chemical Titan Competition
			<br>Synthetization Law</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="499" id="499" data-obj='{"depend":[497],"Coins":"250000000","Experimental-Data":"1250","Isolated-Molecules":"1900","Crystallized-Hydrocarbons":"950","FP":"730"}'> </td>
			<td class="padded">Modular Pocket Reactor</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 770</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/Coins.webp" alt="Coins" title="Coins" > 250,000,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 1,250</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > 1,900</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 950</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Optic Fiber 2.0</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="500" id="500" data-obj='{"depend":[497,498],"Compressed-Matter-Capsule":"1900","Upcycled-Hydrocarbons":"2000","Liquid-Binder":"1950","Crystallized-Hydrocarbons":"1250","FP":"750"}'> </td>
			<td class="padded">Antifreeze Skincare</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 750</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 1,900</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > 2,000</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > 1,950</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 1,250</td>
			<td class="padded">Optic Fiber 2.0
			<br>Purified Additives</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="501" id="501" data-obj='{"depend":[498],"Experimental-Data":"1900","Isolated-Molecules":"1950","Liquid-Binder":"2300","Crystallized-Hydrocarbons":"1500","FP":"720"}'> </td>
			<td class="padded">Biosensor</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 720</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 1,900</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > 1,950</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > 2,300</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 1,500</td>
			<td class="padded">Purified Additives</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="502" id="502" data-obj='{"depend":[499,500,501],"Compressed-Matter-Capsule":"2000","Upcycled-Hydrocarbons":"2750","Liquid-Binder":"2000","Crystallized-Hydrocarbons":"1750","FP":"675"}'> </td>
			<td class="padded">Crystal Data Storage</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 675</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 2,000</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Upcycled_Hydrocarbons.webp" alt="Upcycled Hydrocarbons" title="Upcycled Hydrocarbons" > 2,750</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Liquid_Binder.webp" alt="Liquid Binder" title="Liquid Binder" > 2,000</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 1,750</td>
			<td class="padded">Modular Pocket Reactor
			<br>Antifreeze Skincare
			<br>Biosensor</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sat bold index">
			<td>
				<input type="checkbox" name="503" id="503" data-obj='{"depend":[502],"Compressed-Matter-Capsule":"2200","Experimental-Data":"2550","Isolated-Molecules":"2200","Crystallized-Hydrocarbons":"2350","FP":"630"}'> </td>
			<td class="padded">Synthetic A.I. 0.1</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 630</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Compressed_Matter_Capsule.webp" alt="Compressed Matter Capsule" title="Compressed Matter Capsule" > 2,200</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Experimental_Data.webp" alt="Experimental Data" title="Experimental Data" > 2,550</td>
			<td class="padded"><img src="https://windowssystemadmin.github.io/research/FoE/images/SAT/Isolated_Molecules.webp" alt="Isolated Molecules" title="Isolated Molecules" > 2,200</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/SAT/Crystallized_Hydrocarbons.webp" alt="Crystallized Hydrocarbons" title="Crystallized Hydrocarbons" > 2,350</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Crystal Data Storage</td>
			<td class="padded">&nbsp;</td>
		</tr>
		<tr class="sash bold index">
			<td>
				<input type="checkbox" name="504" id="504" data-obj='{"depend":[503],"Compressed-Matter-Capsule":"0","Experimental-Data":"0","Isolated-Molecules":"0","Crystallized-Hydrocarbons":"0","FP":"700"}'> </td>
			<td class="padded">Titan Goods Synthesizing I</td>
			<td class="padded"><img src="https://systemsuser.github.io/research/FoE/images/Resources/FP.webp" alt="Forge Points" title="Forge Points" > 700</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">&nbsp;</td>
			<td class="padded">Synthetic A.I. 0.1</td>
			<td class="padded">Coming soon!!</td>
		</tr>
	</table>
</div>
</body>
</html>
