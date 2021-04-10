<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"></meta>
		<meta name="viewport" content="width=350, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"></meta>
		<title>Trade Tools - Figures Table</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="jquery-2.1.3.min.js"></script>
		<script src="jquery-hashtable.js"></script>
		<script src="jquery.numberformatter-1.2.4.min.js"></script>
		<script type="text/javascript">
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
	</head>
	<body bgcolor=#FFFFFF leftmargin=2 >
	<br>
		<table border=1>
			<tr>
				<td class="padded bold" colspan="10">Resources Required for Remaining Research</td>
			</tr>
<tr>
<td colspan=2 align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> <span id=FP>34,917</span></td>
<td colspan=2 align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> <span id=Coins>249,980,493</span></td>
<td colspan=2 align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> <span id=Supplies>265,179,037</span></td>
<td colspan=1 align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> <span id=Promethium>12,940</span></td>
<td colspan=1 align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> <span id=Orichalcum>10,580</span></td>
<td colspan=2 align=center><img src=/FoE/images/Diamonds.png alt="Diamonds" title="Diamonds" align=absmiddle> <span id=Diamonds>600</span></td>
</tr>

<tr>
	<td class="ba" width=75>&nbsp; <img src=/FoE/images/Stone.png alt="Stone" title="Stone" align=absmiddle> <span id="Stone">152</span> &nbsp;</td>
	<td class="ba" width=75>&nbsp; <img src=/FoE/images/Lumber.png alt="Lumber" title="Lumber" align=absmiddle> <span id="Lumber">175</span> &nbsp;</td>
	<td class="ba" width=75>&nbsp; <img src=/FoE/images/Marble.png alt="Marble" title="Marble" align=absmiddle> <span id="Marble">155</span> &nbsp;</td>
	<td class="ba" width=75>&nbsp; <img src=/FoE/images/Dye.png alt="Dye" title="Dye" align=absmiddle> <span id="Dye">163</span> &nbsp;</td>
	<td class="ba" width=75>&nbsp; <img src=/FoE/images/Wine.png alt="Wine" title="Wine" align=absmiddle> <span id="Wine">164</span> &nbsp;</td>
	<td class="ia" width=75>&nbsp; <img src=/FoE/images/Limestone.png alt="Limestone" title="Limestone" align=absmiddle> <span id="Limestone">251</span> &nbsp;</td>
	<td class="ia" width=75>&nbsp; <img src=/FoE/images/Ebony.png alt="Ebony" title="Ebony" align=absmiddle> <span id="Ebony">249</span> &nbsp;</td>
	<td class="ia" width=75>&nbsp; <img src=/FoE/images/Iron.png alt="Iron" title="Iron" align=absmiddle> <span id="Iron">242</span> &nbsp;</td>
	<td class="ia" width=75>&nbsp; <img src=/FoE/images/Cloth.png alt="Cloth" title="Cloth" align=absmiddle> <span id="Cloth">248</span> &nbsp;</td>
	<td class="ia" width=75>&nbsp; <img src=/FoE/images/Jewelry.png alt="Jewelry" title="Jewelry" align=absmiddle> <span id="Jewelry">256</span> &nbsp;</td></tr><tr>
	<td class="ema" width=75>&nbsp; <img src=/FoE/images/Copper.png alt="Copper" title="Copper" align=absmiddle> <span id="Copper">353</span> &nbsp;</td>
	<td class="ema" width=75>&nbsp; <img src=/FoE/images/Granite.png alt="Granite" title="Granite" align=absmiddle> <span id="Granite">354</span> &nbsp;</td>
	<td class="ema" width=75>&nbsp; <img src=/FoE/images/Alabaster.png alt="Alabaster" title="Alabaster" align=absmiddle> <span id="Alabaster">354</span> &nbsp;</td>
	<td class="ema" width=75>&nbsp; <img src=/FoE/images/Gold.png alt="Gold" title="Gold" align=absmiddle> <span id="Gold">351</span> &nbsp;</td>
	<td class="ema" width=75>&nbsp; <img src=/FoE/images/Honey.png alt="Honey" title="Honey" align=absmiddle> <span id="Honey">350</span> &nbsp;</td>
	<td class="hma" width=75>&nbsp; <img src=/FoE/images/Brick.png alt="Brick" title="Brick" align=absmiddle> <span id="Brick">420</span> &nbsp;</td>
	<td class="hma" width=75>&nbsp; <img src=/FoE/images/Rope.png alt="Rope" title="Rope" align=absmiddle> <span id="Rope">424</span> &nbsp;</td>
	<td class="hma" width=75>&nbsp; <img src=/FoE/images/Salt.png alt="Salt" title="Salt" align=absmiddle> <span id="Salt">421</span> &nbsp;</td>
	<td class="hma" width=75>&nbsp; <img src=/FoE/images/Dried_Herbs.png alt="Dried Herbs" title="Dried Herbs" align=absmiddle> <span id="Dried Herbs">414</span> &nbsp;</td>
	<td class="hma" width=75>&nbsp; <img src=/FoE/images/Glass.png alt="Glass" title="Glass" align=absmiddle> <span id="Glass">420</span> &nbsp;</td></tr><tr>
	<td class="lma" width=75>&nbsp; <img src=/FoE/images/Basalt.png alt="Basalt" title="Basalt" align=absmiddle> <span id="Basalt">590</span> &nbsp;</td>
	<td class="lma" width=75>&nbsp; <img src=/FoE/images/Brass.png alt="Brass" title="Brass" align=absmiddle> <span id="Brass">580</span> &nbsp;</td>
	<td class="lma" width=75>&nbsp; <img src=/FoE/images/Silk.png alt="Silk" title="Silk" align=absmiddle> <span id="Silk">570</span> &nbsp;</td>
	<td class="lma" width=75>&nbsp; <img src=/FoE/images/Talc.png alt="Talc" title="Talc" align=absmiddle> <span id="Talc">580</span> &nbsp;</td>
	<td class="lma" width=75>&nbsp; <img src=/FoE/images/Gunpowder.png alt="Gunpowder" title="Gunpowder" align=absmiddle> <span id="Gunpowder">570</span> &nbsp;</td>
	<td class="ca" width=75>&nbsp; <img src=/FoE/images/Paper.png alt="Paper" title="Paper" align=absmiddle> <span id="Paper">460</span> &nbsp;</td>
	<td class="ca" width=75>&nbsp; <img src=/FoE/images/Coffee.png alt="Coffee" title="Coffee" align=absmiddle> <span id="Coffee">620</span> &nbsp;</td>
	<td class="ca" width=75>&nbsp; <img src=/FoE/images/Wire.png alt="Wire" title="Wire" align=absmiddle> <span id="Wire">580</span> &nbsp;</td>
	<td class="ca" width=75>&nbsp; <img src=/FoE/images/Porcelain.png alt="Porcelain" title="Porcelain" align=absmiddle> <span id="Porcelain">690</span> &nbsp;</td>
	<td class="ca" width=75>&nbsp; <img src=/FoE/images/Tar.png alt="Tar" title="Tar" align=absmiddle> <span id="Tar">640</span> &nbsp;</td></tr><tr>
	<td class="inda" width=75>&nbsp; <img src=/FoE/images/Rubber.png alt="Rubber" title="Rubber" align=absmiddle> <span id="Rubber">1,000</span> &nbsp;</td>
	<td class="inda" width=75>&nbsp; <img src=/FoE/images/Coke.png alt="Coke" title="Coke" align=absmiddle> <span id="Coke">1,000</span> &nbsp;</td>
	<td class="inda" width=75>&nbsp; <img src=/FoE/images/Textiles.png alt="Textiles" title="Textiles" align=absmiddle> <span id="Textiles">1,000</span> &nbsp;</td>
	<td class="inda" width=75>&nbsp; <img src=/FoE/images/Whale_Oil.png alt="Whale Oil" title="Whale Oil" align=absmiddle> <span id="Whale Oil">1,000</span> &nbsp;</td>
	<td class="inda" width=75>&nbsp; <img src=/FoE/images/Fertilizer.png alt="Fertilizer" title="Fertilizer" align=absmiddle> <span id="Fertilizer">1,000</span> &nbsp;</td>
	<td class="pe" width=75>&nbsp; <img src=/FoE/images/Asbestos.png alt="Asbestos" title="Asbestos" align=absmiddle> <span id="Asbestos">1,400</span> &nbsp;</td>
	<td class="pe" width=75>&nbsp; <img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> <span id="Gasoline">1,400</span> &nbsp;</td>
	<td class="pe" width=75>&nbsp; <img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> <span id="Machine Parts">1,400</span> &nbsp;</td>
	<td class="pe" width=75>&nbsp; <img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> <span id="Tinplate">1,400</span> &nbsp;</td>
	<td class="pe" width=75>&nbsp; <img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> <span id="Explosives">1,400</span> &nbsp;</td></tr><tr>
	<td class="me" width=75>&nbsp; <img src=/FoE/images/Ferroconcrete.png alt="Ferroconcrete" title="Ferroconcrete" align=absmiddle> <span id="Ferroconcrete">1,600</span> &nbsp;</td>
	<td class="me" width=75>&nbsp; <img src=/FoE/images/Packaging.png alt="Packaging" title="Packaging" align=absmiddle> <span id="Packaging">1,600</span> &nbsp;</td>
	<td class="me" width=75>&nbsp; <img src=/FoE/images/Luxury_Materials.png alt="Luxury Materials" title="Luxury Materials" align=absmiddle> <span id="Luxury Materials">1,600</span> &nbsp;</td>
	<td class="me" width=75>&nbsp; <img src=/FoE/images/Convenience_Food.png alt="Convenience Food" title="Convenience Food" align=absmiddle> <span id="Convenience Food">1,600</span> &nbsp;</td>
	<td class="me" width=75>&nbsp; <img src=/FoE/images/Flavourants.png alt="Flavourants" title="Flavourants" align=absmiddle> <span id="Flavourants">1,600</span> &nbsp;</td>
	<td class="pme" width=75>&nbsp; <img src=/FoE/images/Renewable_Resources.png alt="Renewable Resources" title="Renewable Resources" align=absmiddle> <span id="Renewable Resources">1,800</span> &nbsp;</td>
	<td class="pme" width=75>&nbsp; <img src=/FoE/images/Steel.png alt="Steel" title="Steel" align=absmiddle> <span id="Steel">1,800</span> &nbsp;</td>
	<td class="pme" width=75>&nbsp; <img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> <span id="Semiconductors">1,800</span> &nbsp;</td>
	<td class="pme" width=75>&nbsp; <img src=/FoE/images/Industrial_Filters.png alt="Industrial Filters" title="Industrial Filters" align=absmiddle> <span id="Industrial Filters">1,800</span> &nbsp;</td>
	<td class="pme" width=75>&nbsp; <img src=/FoE/images/Genome_Data.png alt="Genome Data" title="Genome Data" align=absmiddle> <span id="Genome Data">1,800</span> &nbsp;</td></tr><tr>
	<td class="ce" width=75>&nbsp; <img src=/FoE/images/Gas.png alt="Gas" title="Gas" align=absmiddle> <span id="Gas">2,250</span> &nbsp;</td>
	<td class="ce" width=75>&nbsp; <img src=/FoE/images/Robots.png alt="Robots" title="Robots" align=absmiddle> <span id="Robots">2,210</span> &nbsp;</td>
	<td class="ce" width=75>&nbsp; <img src=/FoE/images/Electromagnets.png alt="Electromagnets" title="Electromagnets" align=absmiddle> <span id="Electromagnets">1,755</span> &nbsp;</td>
	<td class="ce" width=75>&nbsp; <img src=/FoE/images/Plastics.png alt="Plastics" title="Plastics" align=absmiddle> <span id="Plastics">1,700</span> &nbsp;</td>
	<td class="ce" width=75>&nbsp; <img src=/FoE/images/Bionics_Data.png alt="Bionics Data" title="Bionics Data" align=absmiddle> <span id="Bionics Data">2,480</span> &nbsp;</td>
	<td class="te" width=75>&nbsp; <img src=/FoE/images/Translucent_Concrete.png alt="Translucent Concrete" title="Translucent Concrete" align=absmiddle> <span id="Translucent Concrete">1,510</span> &nbsp;</td>
	<td class="te" width=75>&nbsp; <img src=/FoE/images/Smart_Materials.png alt="Smart Materials" title="Smart Materials" align=absmiddle> <span id="Smart Materials">1,770</span> &nbsp;</td>
	<td class="te" width=75>&nbsp; <img src=/FoE/images/Papercrete.png alt="Papercrete" title="Papercrete" align=absmiddle> <span id="Papercrete">1,885</span> &nbsp;</td>
	<td class="te" width=75>&nbsp; <img src=/FoE/images/Preservatives.png alt="Preservatives" title="Preservatives" align=absmiddle> <span id="Preservatives">1,570</span> &nbsp;</td>
	<td class="te" width=75>&nbsp; <img src=/FoE/images/Nutrition_Research.png alt="Nutrition Research" title="Nutrition Research" align=absmiddle> <span id="Nutrition Research">1,520</span> &nbsp;</td></tr><tr>
	<td class="fe" width=75>&nbsp; <img src=/FoE/images/Biogeochemical_Data.png alt="Biogeochemical Data" title="Biogeochemical Data" align=absmiddle> <span id="Biogeochemical Data">1,640</span> &nbsp;</td>
	<td class="fe" width=75>&nbsp; <img src=/FoE/images/Purified_Water.png alt="Purified Water" title="Purified Water" align=absmiddle> <span id="Purified Water">1,530</span> &nbsp;</td>
	<td class="fe" width=75>&nbsp; <img src=/FoE/images/Algae.png alt="Algae" title="Algae" align=absmiddle> <span id="Algae">1,490</span> &nbsp;</td>
	<td class="fe" width=75>&nbsp; <img src=/FoE/images/Superconductor.png alt="Superconductor" title="Superconductor" align=absmiddle> <span id="Superconductor">1,575</span> &nbsp;</td>
	<td class="fe" width=75>&nbsp; <img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> <span id="Nanoparticles">1,665</span> &nbsp;</td>
	<td class="afe" width=75>&nbsp; <img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> <span id="Nanowire">2,380</span> &nbsp;</td>
	<td class="afe" width=75>&nbsp; <img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> <span id="Transester Gas">2,230</span> &nbsp;</td>
	<td class="afe" width=75>&nbsp; <img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> <span id="AI Data">2,170</span> &nbsp;</td>
	<td class="afe" width=75>&nbsp; <img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> <span id="Paper Batteries">2,730</span> &nbsp;</td>
	<td class="afe" width=75>&nbsp; <img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> <span id="Bioplastics">2,060</span> &nbsp;</td></tr><tr>
	<td class="ofe" width=75>&nbsp; <img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> <span id="Artificial Scales">3,400</span> &nbsp;</td>
	<td class="ofe" width=75>&nbsp; <img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> <span id="Biolight">2,870</span> &nbsp;</td>
	<td class="ofe" width=75>&nbsp; <img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> <span id="Corals">3,350</span> &nbsp;</td>
	<td class="ofe" width=75>&nbsp; <img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> <span id="Pearls">2,860</span> &nbsp;</td>
	<td class="ofe" width=75>&nbsp; <img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> <span id="Plankton">3,060</span> &nbsp;</td>	
	<td class="vfe" width=75>&nbsp; <img src=/FoE/images/Golden_Rice.png alt="Golden Rice" title="Golden Rice" align=absmiddle> <span id="Golden Rice">1,990</span> &nbsp;</td>
	<td class="vfe" width=75>&nbsp; <img src=/FoE/images/Cryptocash.png alt="Cryptocash" title="Cryptocash" align=absmiddle> <span id="Cryptocash">1,985</span> &nbsp;</td>
	<td class="vfe" width=75>&nbsp; <img src=/FoE/images/Nanites.png alt="Nanites" title="Nanites" align=absmiddle> <span id="Nanites">1,945</span> &nbsp;</td>
	<td class="vfe" width=75>&nbsp; <img src=/FoE/images/Data_Crystals.png alt="Data Crystals" title="Data Crystals" align=absmiddle> <span id="Data Crystals">1,865</span> &nbsp;</td>
	<td class="vfe" width=75>&nbsp; <img src=/FoE/images/Tea_Silk.png alt="Tea Silk" title="Tea Silk" align=absmiddle> <span id="Tea Silk">1,985</span> &nbsp;</td></tr>
</table>



<br><table border=1><tr><td class="padded bold" colspan="5">Fully Completed Research Eras</td></tr><tr><td class="sa bold index" align="left"><input type="checkbox" name="allsa" id="allsa" data-obj='{"depend": [1]}'> &nbsp;Stone Age</td><td class="ba bold index" align="left"><input type="checkbox" name="allba" id="allba" data-obj='{"depend": [2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,"allsa"]}'> &nbsp;Bronze Age</td><td class="ia bold index" align="left"><input type="checkbox" name="allia" id="allia" data-obj='{"depend": [24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,"allba"]}'> &nbsp;Iron Age</td><td class="ema bold index" align="left"><input type="checkbox" name="allema" id="allema" data-obj='{"depend": [43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,"allia"]}'> &nbsp;Early Middle Age</td><td class="hma bold index" align="left"><input type="checkbox" name="allhma" id="allhma" data-obj='{"depend": [64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,78,79,80,81,82,83,"allema"]}'> &nbsp;High Middle Age</td></tr><tr><td class="lma bold index" align="left"><input type="checkbox" name="alllma" id="alllma" data-obj='{"depend": [84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,"allhma"]}'> &nbsp;Late Middle Age</td><td class="ca bold index" align="left"><input type="checkbox" name="allca" id="allca" data-obj='{"depend": [105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,"alllma"]}'> &nbsp;Colonial Age</td><td class="inda bold index" align="left"><input type="checkbox" name="allinda" id="allinda" data-obj='{"depend": [125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,"allca"]}'> &nbsp;Industrial Age</td><td class="pe bold index" align="left"><input type="checkbox" name="allpe" id="allpe" data-obj='{"depend": [144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,"allinda"]}'> &nbsp;Progressive Era</td><td class="me bold index" align="left"><input type="checkbox" name="allme" id="allme" data-obj='{"depend": [166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,"allpe"]}'> &nbsp;Modern Era</td></tr><tr><td class="pme bold index" align="left"><input type="checkbox" name="allpme" id="allpme" data-obj='{"depend": [184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,"allme"]}'> &nbsp;Post-Modern Era</td><td class="ce bold index" align="left"><input type="checkbox" name="allce" id="allce" data-obj='{"depend": [205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,"allpme"]}'> &nbsp;Contemporary Era</td><td class="te bold index" align="left"><input type="checkbox" name="allte" id="allte" data-obj='{"depend": [223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,"allce"]}'> &nbsp;Tomorrow Era</td><td class="fe bold index" align="left"><input type="checkbox" name="allfe" id="allfe" data-obj='{"depend": [241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,"allte"]}'> &nbsp;Future Era</td><td class="afe bold index" align="left"><input type="checkbox" name="allafe" id="allafe" data-obj='{"depend": [261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,"allfe"]}'> &nbsp;Arctic Future Era</td></tr><tr><td class="ofe bold index" align="left"><input type="checkbox" name="allofe" id="allofe" data-obj='{"depend": [300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,"allafe"]}'> &nbsp;Oceanic Future Era</td><td class="vfe bold index" align="left"><input type="checkbox" name="allvfe" id="allvfe" data-obj='{"depend": [348,349,350,351,352,353,354,355,356,357,358,359,360,"allofe"]}'> &nbsp;Virtual Future Era</td></tr></table>

<br><table border=1><tr><td class="padded bold" colspan="12">Tech Tree</td></tr><tr>

<tr class="sa bold index">
<td align=center><input type="checkbox" name="1" id="1" data-obj='{"FP":"3"}'></td>
<td class="padded">Tribal Community</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 3</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>No Dependencies</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="2" id="2" data-obj='{"depend":[1],"FP":"3"}'></td>
<td class="padded">Stilt Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 3</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Tribal Community</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="3" id="3" data-obj='{"depend":[1],"FP":"3"}'></td>
<td class="padded">Spears</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 3</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Tribal Community</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="4" id="4" data-obj='{"depend":[1],"FP":"3"}'></td>
<td class="padded">Pottery</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 3</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Tribal Community</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="5" id="5" data-obj='{"depend":[2,3],"FP":"4"}'></td>
<td class="padded">The Wheel</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 4</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Stilt Houses<br>Spears</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="6" id="6" data-obj='{"depend":[4,3],"FP":"5"}'></td>
<td class="padded">Construction</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 5</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Pottery<br>Spears</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="7" id="7" data-obj='{"depend":[5],"FP":"5","Coins":"200"}'></td>
<td class="padded">Slingshots</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 5</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>The Wheel</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="8" id="8" data-obj='{"depend":[6],"FP":"5","Coins":"100","Supplies":"200"}'></td>
<td class="padded">Chalets</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 5</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Construction</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="9" id="9" data-obj='{"depend":[5,6],"FP":"6","Coins":"200","Supplies":"100"}'></td>
<td class="padded">Cultivation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 6</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>The Wheel<br>Construction</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="10" id="10" data-obj='{"depend":[6],"FP":"3","Supplies":"100"}'></td>
<td class="padded">Tools</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 3</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Construction</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="11" id="11" data-obj='{"depend":[8],"FP":"5","Supplies":"300"}'></td>
<td class="padded">Growing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 5</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 300</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Chalets</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="12" id="12" data-obj='{"depend":[8,7],"FP":"6","Coins":"250"}'></td>
<td class="padded">Horseback Riding</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 6</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Chalets<br>Slingshots</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="13" id="13" data-obj='{"depend":[9],"FP":"6","Coins":"150","Supplies":"200"}'></td>
<td class="padded">Thatched Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 6</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Cultivation</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="14" id="14" data-obj='{"depend":[10],"FP":"5","Supplies":"500"}'></td>
<td class="padded">Stonework</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 5</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Tools</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="15" id="15" data-obj='{"depend":[10],"FP":"5","Coins":"200","Supplies":"100"}'></td>
<td class="padded">Woodwork</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 5</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Tools</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="16" id="16" data-obj='{"depend":[12,13],"FP":"8","Supplies":"200"}'></td>
<td class="padded">Phalanx</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 8</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Horseback Riding<br>Thatched Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="17" id="17" data-obj='{"depend":[13],"FP":"8","Coins":"350"}'></td>
<td class="padded">Smithery</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 8</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 350</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Thatched Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="18" id="18" data-obj='{"depend":[13],"FP":"7","Coins":"200","Supplies":"50"}'></td>
<td class="padded">Teaching</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 7</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Thatched Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="19" id="19" data-obj='{"depend":[14,15],"Marble":"2","Lumber":"2","FP":"6"}'></td>
<td class="padded">Craftwork</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 6</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Marble.png alt="Marble" title="Marble" align=absmiddle> 2</td>
<td class="padded" align=center><img src=/FoE/images/Lumber.png alt="Lumber" title="Lumber" align=absmiddle> 2</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Stonework<br>Woodwork</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="20" id="20" data-obj='{"depend":[16],"FP":"7","Supplies":"100"}'></td>
<td class="padded">Paths</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 7</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Phalanx</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="21" id="21" data-obj='{"depend":[16,17],"FP":"9","Coins":"500"}'></td>
<td class="padded">Siege Weapons</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 9</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Phalanx<br>Smithery</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="22" id="22" data-obj='{"depend":[17,18],"FP":"10","Coins":"150","Supplies":"150"}'></td>
<td class="padded">Brewing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 10</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Smithery<br>Teaching</td>
<td class="padded" align=center></td>
</tr>

<tr class="ba bold index">
<td align=center><input type="checkbox" name="23" id="23" data-obj='{"depend":[18],"FP":"8","Supplies":"300"}'></td>
<td class="padded">Manuring</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 8</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 300</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Teaching</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="24" id="24" data-obj='{"depend":[20,21],"FP":"13","Coins":"250","Supplies":"100"}'></td>
<td class="padded">Roof Tile Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 13</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Paths<br>Siege Weapons</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="25" id="25" data-obj='{"depend":[21,22],"Stone":"5","FP":"12"}'></td>
<td class="padded">Architecture</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 12</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Stone.png alt="Stone" title="Stone" align=absmiddle> 5</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Siege Weapons<br>Brewing</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="26" id="26" data-obj='{"depend":[22,23],"Wine":"8","FP":"14"}'></td>
<td class="padded">Militia</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 14</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Wine.png alt="Wine" title="Wine" align=absmiddle> 8</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Brewing<br>Manuring</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="27" id="27" data-obj='{"depend":[24],"FP":"12","Coins":"300","Supplies":"250"}'></td>
<td class="padded">Stock Breeding</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 12</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Roof Tile Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="28" id="28" data-obj='{"depend":[24,25],"Dye":"12","FP":"13"}'></td>
<td class="padded">Processions</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 13</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Dye.png alt="Dye" title="Dye" align=absmiddle> 12</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Roof Tile Houses<br>Architecture</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="29" id="29" data-obj='{"depend":[25,26],"FP":"11","Coins":"600"}'></td>
<td class="padded">Processing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 11</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 600</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Architecture<br>Militia</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="30" id="30" data-obj='{"depend":[26],"FP":"6","Supplies":"1500"}'></td>
<td class="padded">Iron Works</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 6</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Militia</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="31" id="31" data-obj='{"depend":[26],"FP":"13","Coins":"1500"}'></td>
<td class="padded">Handicraft</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 13</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Militia</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="32" id="32" data-obj='{"depend":[27],"Lumber":"30","FP":"11"}'></td>
<td class="padded">Agriculture</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 11</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Lumber.png alt="Lumber" title="Lumber" align=absmiddle> 30</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Stock Breeding</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="33" id="33" data-obj='{"depend":[27,28],"FP":"13","Coins":"600","Supplies":"1250"}'></td>
<td class="padded">Cottage</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 13</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 600</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Stock Breeding<br>Processions</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="34" id="34" data-obj='{"depend":[28,29],"Marble":"16","FP":"13"}'></td>
<td class="padded">Archery</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 13</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Marble.png alt="Marble" title="Marble" align=absmiddle> 16</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Processions<br>Processing</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="35" id="35" data-obj='{"depend":[30,31],"Dye":"15","Limestone":"3","FP":"5","Supplies":"750"}'></td>
<td class="padded">Sewerage</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 5</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 750</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Dye.png alt="Dye" title="Dye" align=absmiddle> 15</td>
<td class="padded" align=center><img src=/FoE/images/Limestone.png alt="Limestone" title="Limestone" align=absmiddle> 3</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Iron Works<br>Handicraft</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="36" id="36" data-obj='{"depend":[33],"FP":"16","Coins":"100","Supplies":"2500"}'></td>
<td class="padded">Butchery</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 16</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Cottage</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="37" id="37" data-obj='{"depend":[33,34],"FP":"22","Coins":"1500","Supplies":"2000"}'></td>
<td class="padded">Military Tactics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 22</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Cottage<br>Archery</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="38" id="38" data-obj='{"depend":[33,34],"Stone":"20","Ebony":"4","FP":"13","Supplies":"1400"}'></td>
<td class="padded">Fortification</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 13</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,400</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Stone.png alt="Stone" title="Stone" align=absmiddle> 20</td>
<td class="padded" align=center><img src=/FoE/images/Ebony.png alt="Ebony" title="Ebony" align=absmiddle> 4</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Cottage<br>Archery</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="39" id="39" data-obj='{"depend":[36,37],"FP":"20","Coins":"2000","Supplies":"1500"}'></td>
<td class="padded">Mathematics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 20</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Butchery<br>Military Tactics</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="40" id="40" data-obj='{"depend":[37,38],"Marble":"21","Cloth":"11","FP":"17","Coins":"600","Supplies":"750"}'></td>
<td class="padded">Thermae</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 17</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 600</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 750</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Marble.png alt="Marble" title="Marble" align=absmiddle> 21</td>
<td class="padded" align=center><img src=/FoE/images/Cloth.png alt="Cloth" title="Cloth" align=absmiddle> 11</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Military Tactics<br>Fortification</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="41" id="41" data-obj='{"depend":[38],"Lumber":"30","Iron":"13","FP":"15"}'></td>
<td class="padded">Plowing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 15</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Lumber.png alt="Lumber" title="Lumber" align=absmiddle> 30</td>
<td class="padded" align=center><img src=/FoE/images/Iron.png alt="Iron" title="Iron" align=absmiddle> 13</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Fortification</td>
<td class="padded" align=center></td>
</tr>

<tr class="ia bold index">
<td align=center><input type="checkbox" name="42" id="42" data-obj='{"depend":[38],"Wine":"50","Jewelry":"16","FP":"17","Coins":"600","Supplies":"1100"}'></td>
<td class="padded">Chain of Command</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 17</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 600</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Wine.png alt="Wine" title="Wine" align=absmiddle> 50</td>
<td class="padded" align=center><img src=/FoE/images/Jewelry.png alt="Jewelry" title="Jewelry" align=absmiddle> 16</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Fortification</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="43" id="43" data-obj='{"depend":[39,40],"FP":"12","Coins":"3000","Supplies":"1500"}'></td>
<td class="padded">Frame Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 12</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mathematics<br>Thermae</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="44" id="44" data-obj='{"depend":[39,42],"FP":"18","Coins":"1500","Supplies":"3000"}'></td>
<td class="padded">Tanning</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 18</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mathematics<br>Chain of Command</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="45" id="45" data-obj='{"depend":[42],"FP":"23","Diamonds":"600"}'></td>
<td class="padded">Multistory Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 23</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Diamonds.png alt="Diamonds" title="Diamonds" align=absmiddle> 600</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Chain of Command</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="46" id="46" data-obj='{"depend":[43],"FP":"20","Coins":"3000","Supplies":"3000"}'></td>
<td class="padded">Casting</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 20</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Frame Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="47" id="47" data-obj='{"depend":[43,44],"Ebony":"28","Marble":"22","FP":"25","Coins":"750","Supplies":"1500"}'></td>
<td class="padded">Mounted Archers</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 25</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 750</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Ebony.png alt="Ebony" title="Ebony" align=absmiddle> 28</td>
<td class="padded" align=center><img src=/FoE/images/Marble.png alt="Marble" title="Marble" align=absmiddle> 22</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Frame Houses<br>Tanning</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="48" id="48" data-obj='{"depend":[43,44],"Jewelry":"20","Dye":"46","FP":"26","Coins":"750","Supplies":"1000"}'></td>
<td class="padded">Economics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 26</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 750</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Jewelry.png alt="Jewelry" title="Jewelry" align=absmiddle> 20</td>
<td class="padded" align=center><img src=/FoE/images/Dye.png alt="Dye" title="Dye" align=absmiddle> 46</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Frame Houses<br>Tanning</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="49" id="49" data-obj='{"depend":[44],"FP":"20","Coins":"3000","Supplies":"5000"}'></td>
<td class="padded">Apiary</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 20</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Tanning</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="50" id="50" data-obj='{"depend":[44],"FP":"22","Supplies":"6000"}'></td>
<td class="padded">Quarries</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 22</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 6,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Tanning</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="51" id="51" data-obj='{"depend":[47],"Limestone":"40","Lumber":"34","FP":"25","Coins":"3000","Supplies":"1000"}'></td>
<td class="padded">Accommodation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 25</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Limestone.png alt="Limestone" title="Limestone" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Lumber.png alt="Lumber" title="Lumber" align=absmiddle> 34</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mounted Archers</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="52" id="52" data-obj='{"depend":[47],"FP":"26","Coins":"1500","Supplies":"4000"}'></td>
<td class="padded">Police</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 26</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 4,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mounted Archers</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="53" id="53" data-obj='{"depend":[47,48],"Iron":"42","Wine":"35","FP":"26","Coins":"1250","Supplies":"1500"}'></td>
<td class="padded">Mercenaries</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 26</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,250</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Iron.png alt="Iron" title="Iron" align=absmiddle> 42</td>
<td class="padded" align=center><img src=/FoE/images/Wine.png alt="Wine" title="Wine" align=absmiddle> 35</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mounted Archers<br>Economics</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="54" id="54" data-obj='{"depend":[48],"Cloth":"49","Stone":"61","FP":"29","Coins":"1500","Supplies":"1250"}'></td>
<td class="padded">Leather Working</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 29</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Cloth.png alt="Cloth" title="Cloth" align=absmiddle> 49</td>
<td class="padded" align=center><img src=/FoE/images/Stone.png alt="Stone" title="Stone" align=absmiddle> 61</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Economics</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="55" id="55" data-obj='{"depend":[51,52],"Ebony":"35","Granite":"4","FP":"24","Coins":"500","Supplies":"2000"}'></td>
<td class="padded">Clapboard Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 24</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Ebony.png alt="Ebony" title="Ebony" align=absmiddle> 35</td>
<td class="padded" align=center><img src=/FoE/images/Granite.png alt="Granite" title="Granite" align=absmiddle> 4</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Accommodation<br>Police</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="56" id="56" data-obj='{"depend":[53],"FP":"33","Coins":"4000","Supplies":"7500"}'></td>
<td class="padded">Heavy Cavalry</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 33</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 7,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mercenaries</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="57" id="57" data-obj='{"depend":[54],"FP":"30","Coins":"4000","Supplies":"3000"}'></td>
<td class="padded">Armored Infantry</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 30</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Leather Working</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="58" id="58" data-obj='{"depend":[55,56],"Limestone":"30","Alabaster":"14","FP":"16","Supplies":"4000"}'></td>
<td class="padded">Bridges</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 16</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 4,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Limestone.png alt="Limestone" title="Limestone" align=absmiddle> 30</td>
<td class="padded" align=center><img src=/FoE/images/Alabaster.png alt="Alabaster" title="Alabaster" align=absmiddle> 14</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Clapboard Houses<br>Heavy Cavalry</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="59" id="59" data-obj='{"depend":[56,57],"Cloth":"28","Honey":"20","FP":"20","Coins":"2250","Supplies":"2000"}'></td>
<td class="padded">Executions</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 20</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,250</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Cloth.png alt="Cloth" title="Cloth" align=absmiddle> 28</td>
<td class="padded" align=center><img src=/FoE/images/Honey.png alt="Honey" title="Honey" align=absmiddle> 20</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Heavy Cavalry<br>Armored Infantry</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="60" id="60" data-obj='{"depend":[58],"FP":"29"}'></td>
<td class="padded">Crop Rotations</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 29</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Bridges</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="61" id="61" data-obj='{"depend":[58,59],"Iron":"40","Copper":"23","FP":"35","Coins":"1500","Supplies":"3000"}'></td>
<td class="padded">Physics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 35</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Iron.png alt="Iron" title="Iron" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Copper.png alt="Copper" title="Copper" align=absmiddle> 23</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Bridges<br>Executions</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="62" id="62" data-obj='{"depend":[59],"FP":"22","Supplies":"10000"}'></td>
<td class="padded">Fertilization</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 22</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 10,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Executions</td>
<td class="padded" align=center></td>
</tr>

<tr class="ema bold index">
<td align=center><input type="checkbox" name="63" id="63" data-obj='{"depend":[59],"Jewelry":"70","Gold":"30","FP":"24","Supplies":"3000"}'></td>
<td class="padded">Monarchy</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 24</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Jewelry.png alt="Jewelry" title="Jewelry" align=absmiddle> 70</td>
<td class="padded" align=center><img src=/FoE/images/Gold.png alt="Gold" title="Gold" align=absmiddle> 30</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Executions</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="64" id="64" data-obj='{"depend":[61],"Alabaster":"20","Ebony":"42","FP":"40","Coins":"3500","Supplies":"3000"}'></td>
<td class="padded">Counterstrategy</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Alabaster.png alt="Alabaster" title="Alabaster" align=absmiddle> 20</td>
<td class="padded" align=center><img src=/FoE/images/Ebony.png alt="Ebony" title="Ebony" align=absmiddle> 42</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Physics</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="65" id="65" data-obj='{"depend":[61],"Copper":"20","Jewelry":"10","FP":"30","Coins":"2500","Supplies":"9000"}'></td>
<td class="padded">Quality Products</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 30</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 9,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Copper.png alt="Copper" title="Copper" align=absmiddle> 20</td>
<td class="padded" align=center><img src=/FoE/images/Jewelry.png alt="Jewelry" title="Jewelry" align=absmiddle> 10</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Physics</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="66" id="66" data-obj='{"depend":[61],"Honey":"30","Cloth":"30","FP":"37","Coins":"2500","Supplies":"6000"}'></td>
<td class="padded">Alchemy</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 37</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 6,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Honey.png alt="Honey" title="Honey" align=absmiddle> 30</td>
<td class="padded" align=center><img src=/FoE/images/Cloth.png alt="Cloth" title="Cloth" align=absmiddle> 30</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Physics</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="67" id="67" data-obj='{"depend":[64],"FP":"45","Coins":"5000","Supplies":"9000"}'></td>
<td class="padded">Crossbows</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 45</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 9,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Counterstrategy</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="68" id="68" data-obj='{"depend":[65],"FP":"33","Coins":"3000","Supplies":"12000"}'></td>
<td class="padded">Guilds</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 33</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 12,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Quality Products</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="69" id="69" data-obj='{"depend":[65,66],"FP":"20","Coins":"9500","Supplies":"7500"}'></td>
<td class="padded">Conservation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 20</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 9,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 7,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Quality Products<br>Alchemy</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="70" id="70" data-obj='{"depend":[66],"Granite":"60","Limestone":"28","FP":"30","Coins":"4250","Supplies":"9000"}'></td>
<td class="padded">Brownstone Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 30</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,250</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 9,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Granite.png alt="Granite" title="Granite" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Limestone.png alt="Limestone" title="Limestone" align=absmiddle> 28</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Alchemy</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="71" id="71" data-obj='{"depend":[67],"Gold":"41","Iron":"47","FP":"40","Coins":"1250","Supplies":"6000"}'></td>
<td class="padded">Monotheism</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,250</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 6,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gold.png alt="Gold" title="Gold" align=absmiddle> 41</td>
<td class="padded" align=center><img src=/FoE/images/Iron.png alt="Iron" title="Iron" align=absmiddle> 47</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Crossbows</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="72" id="72" data-obj='{"depend":[68],"FP":"26","Supplies":"9500"}'></td>
<td class="padded">Trade Routes</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 26</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 9,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Guilds</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="73" id="73" data-obj='{"depend":[69],"FP":"43","Supplies":"10000"}'></td>
<td class="padded">Chemistry</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 43</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 10,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Conservation</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="74" id="74" data-obj='{"depend":[70],"FP":"35","Coins":"4000","Supplies":"12000"}'></td>
<td class="padded">Signposting</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 35</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 12,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Brownstone Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="75" id="75" data-obj='{"depend":[71],"Stone":"66","Rope":"4","FP":"40","Coins":"4500","Supplies":"8500"}'></td>
<td class="padded">Chivalry</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 8,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Stone.png alt="Stone" title="Stone" align=absmiddle> 66</td>
<td class="padded" align=center><img src=/FoE/images/Rope.png alt="Rope" title="Rope" align=absmiddle> 4</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Monotheism</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="76" id="76" data-obj='{"depend":[72,73],"FP":"30","Supplies":"20000"}'></td>
<td class="padded">Clearing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 30</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 20,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Trade Routes<br>Chemistry</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="77" id="77" data-obj='{"depend":[74],"Lumber":"79","Salt":"11","FP":"40","Coins":"4000","Supplies":"8000"}'></td>
<td class="padded">Granary</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 8,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Lumber.png alt="Lumber" title="Lumber" align=absmiddle> 79</td>
<td class="padded" align=center><img src=/FoE/images/Salt.png alt="Salt" title="Salt" align=absmiddle> 11</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Signposting</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="78" id="78" data-obj='{"depend":[75],"Dye":"90","Dried Herbs":"34","FP":"60","Coins":"2500","Supplies":"10500"}'></td>
<td class="padded">Heavy Armor</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 10,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Dye.png alt="Dye" title="Dye" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Dried_Herbs.png alt="Dried Herbs" title="Dried Herbs" align=absmiddle> 34</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Chivalry</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="79" id="79" data-obj='{"depend":[76],"FP":"30","Supplies":"12000"}'></td>
<td class="padded">Water Wheels</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 30</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 12,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Clearing</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="80" id="80" data-obj='{"depend":[77],"FP":"40","Coins":"2000","Supplies":"13000"}'></td>
<td class="padded">Medicine</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 13,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Granary</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="81" id="81" data-obj='{"depend":[77],"  <meta http-equiv="refresh" content="5; URL=https://www.bitdegree.org/" />Wine":"71","Brick":"40","FP":"40","Coins":"5000","Supplies":"5000"}'></td>
<td class="padded">Town Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Wine.png alt="Wine" title="Wine" align=absmiddle> 71</td>
<td class="padded" align=center><img src=/FoE/images/Brick.png alt="Brick" title="Brick" align=absmiddle> 40</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Granary</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="82" id="82" data-obj='{"depend":[78,80],"FP":"50","Supplies":"18000"}'></td>
<td class="padded">Heavy Siege Engines</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 18,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Heavy Armor<br>Medicine</td>
<td class="padded" align=center></td>
</tr>

<tr class="hma bold index">
<td align=center><input type="checkbox" name="83" id="83" data-obj='{"depend":[78,80],"Marble":"94","Glass":"50","FP":"24","Supplies":"6000"}'></td>
<td class="padded">Hospitals</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 24</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 6,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Marble.png alt="Marble" title="Marble" align=absmiddle> 94</td>
<td class="padded" align=center><img src=/FoE/images/Glass.png alt="Glass" title="Glass" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Heavy Armor<br>Medicine</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="84" id="84" data-obj='{"depend":[82],"FP":"40","Coins":"15000","Supplies":"2500"}'></td>
<td class="padded">Metal Working</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 15,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Heavy Siege Engines</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="85" id="85" data-obj='{"depend":[82],"FP":"52","Coins":"5000","Supplies":"7500"}'></td>
<td class="padded">Crane</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 52</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 7,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Heavy Siege Engines</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="86" id="86" data-obj='{"depend":[83],"FP":"60","Supplies":"5000"}'></td>
<td class="padded">Biology</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Hospitals</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="87" id="87" data-obj='{"depend":[83],"FP":"42","Coins":"5000","Supplies":"15000"}'></td>
<td class="padded">Aristocracy</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 42</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 15,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Hospitals</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="88" id="88" data-obj='{"depend":[85],"Rope":"120","Gold":"110","FP":"30","Coins":"5000","Supplies":"10000"}'></td>
<td class="padded">Cartography</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 30</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 10,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Rope.png alt="Rope" title="Rope" align=absmiddle> 120</td>
<td class="padded" align=center><img src=/FoE/images/Gold.png alt="Gold" title="Gold" align=absmiddle> 110</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Crane</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="89" id="89" data-obj='{"depend":[85,86],"Brick":"60","Honey":"140","FP":"60","Coins":"2500","Supplies":"5000"}'></td>
<td class="padded">Estate Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Brick.png alt="Brick" title="Brick" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Honey.png alt="Honey" title="Honey" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Crane<br>Biology</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="90" id="90" data-obj='{"depend":[85,86],"Dried Herbs":"80","Copper":"150","FP":"58","Coins":"2500","Supplies":"15000"}'></td>
<td class="padded">Great Swords</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 58</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 15,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Dried_Herbs.png alt="Dried Herbs" title="Dried Herbs" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Copper.png alt="Copper" title="Copper" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Crane<br>Biology</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="91" id="91" data-obj='{"depend":[88],"Salt":"100","Granite":"140","FP":"30","Supplies":"20000"}'></td>
<td class="padded">New Trade Routes</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 30</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 20,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Salt.png alt="Salt" title="Salt" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Granite.png alt="Granite" title="Granite" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Cartography</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="92" id="92" data-obj='{"depend":[89],"FP":"35","Supplies":"40000"}'></td>
<td class="padded">Water Reservoirs</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 35</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 40,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Estate Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="93" id="93" data-obj='{"depend":[90],"FP":"65","Coins":"15000","Supplies":"30000"}'></td>
<td class="padded">Longbows</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 65</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 15,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 30,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Great Swords</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="94" id="94" data-obj='{"depend":[90],"Glass":"80","Alabaster":"200","FP":"49","Coins":"20000","Supplies":"20000"}'></td>
<td class="padded">Manufacturing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 49</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 20,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 20,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Glass.png alt="Glass" title="Glass" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Alabaster.png alt="Alabaster" title="Alabaster" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Great Swords</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="95" id="95" data-obj='{"depend":[91,92],"FP":"38","Coins":"17500","Supplies":"22500"}'></td>
<td class="padded">Intelligence</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 38</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 17,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 22,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>New Trade Routes<br>Water Reservoirs</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="96" id="96" data-obj='{"depend":[93],"FP":"80","Coins":"12500","Supplies":"30000"}'></td>
<td class="padded">Cavalry Tactics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 12,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 30,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Longbows</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="97" id="97" data-obj='{"depend":[93,94],"FP":"43","Coins":"7500","Supplies":"30000"}'></td>
<td class="padded">Letterpress</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 43</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 7,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 30,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Longbows<br>Manufacturing</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="98" id="98" data-obj='{"depend":[94],"FP":"40","Supplies":"30000"}'></td>
<td class="padded">Optics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 30,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Manufacturing</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="99" id="99" data-obj='{"depend":[95],"Gunpowder":"50","Ebony":"140","FP":"45","Coins":"10000","Supplies":"20000"}'></td>
<td class="padded">Higher Education</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 45</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 10,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 20,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gunpowder.png alt="Gunpowder" title="Gunpowder" align=absmiddle> 50</td>
<td class="padded" align=center><img src=/FoE/images/Ebony.png alt="Ebony" title="Ebony" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Intelligence</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="100" id="100" data-obj='{"depend":[95,96],"Silk":"40","Limestone":"150","FP":"80","Coins":"7500"}'></td>
<td class="padded">Pike Square</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 7,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Silk.png alt="Silk" title="Silk" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Limestone.png alt="Limestone" title="Limestone" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Intelligence<br>Cavalry Tactics</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="101" id="101" data-obj='{"depend":[97],"Brass":"50","Iron":"100","FP":"55","Supplies":"50000"}'></td>
<td class="padded">Brewing Kettles</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 55</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 50,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Brass.png alt="Brass" title="Brass" align=absmiddle> 50</td>
<td class="padded" align=center><img src=/FoE/images/Iron.png alt="Iron" title="Iron" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Letterpress</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="102" id="102" data-obj='{"depend":[99,100],"Talc":"70","Jewelry":"140","FP":"70","Coins":"25000","Supplies":"30000"}'></td>
<td class="padded">Apartment Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 70</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 25,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 30,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Talc.png alt="Talc" title="Talc" align=absmiddle> 70</td>
<td class="padded" align=center><img src=/FoE/images/Jewelry.png alt="Jewelry" title="Jewelry" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Higher Education<br>Pike Square</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="103" id="103" data-obj='{"depend":[99,100],"FP":"40","Supplies":"5000"}'></td>
<td class="padded">Pest Control</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Higher Education<br>Pike Square</td>
<td class="padded" align=center></td>
</tr>

<tr class="lma bold index">
<td align=center><input type="checkbox" name="104" id="104" data-obj='{"depend":[100,101],"Basalt":"80","Cloth":"130","FP":"60","Coins":"5000","Supplies":"40000"}'></td>
<td class="padded">Gunpowder</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 40,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Basalt.png alt="Basalt" title="Basalt" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Cloth.png alt="Cloth" title="Cloth" align=absmiddle> 130</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Pike Square<br>Brewing Kettles</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="105" id="105" data-obj='{"depend":[102],"FP":"37","Coins":"2000","Supplies":"20000"}'></td>
<td class="padded">Porcelain</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 37</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 20,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Apartment Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="106" id="106" data-obj='{"depend":[102],"Gunpowder":"70","Brass":"60","FP":"56","Coins":"4000","Supplies":"10000"}'></td>
<td class="padded">Muskets</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 56</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 10,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gunpowder.png alt="Gunpowder" title="Gunpowder" align=absmiddle> 70</td>
<td class="padded" align=center><img src=/FoE/images/Brass.png alt="Brass" title="Brass" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Apartment Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="107" id="107" data-obj='{"depend":[104],"Rope":"110","Honey":"160","FP":"38","Supplies":"25000"}'></td>
<td class="padded">Maritime Shipping</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 38</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 25,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Rope.png alt="Rope" title="Rope" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Honey.png alt="Honey" title="Honey" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Gunpowder</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="108" id="108" data-obj='{"depend":[104],"FP":"55","Coins":"3500","Supplies":"30000"}'></td>
<td class="padded">Industrial Goods</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 55</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 30,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Gunpowder</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="109" id="109" data-obj='{"depend":[107,106],"Salt":"100","Glass":"130","FP":"36","Coins":"20000","Supplies":"50000"}'></td>
<td class="padded">Colonies</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 36</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 20,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 50,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Salt.png alt="Salt" title="Salt" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Glass.png alt="Glass" title="Glass" align=absmiddle> 130</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Maritime Shipping<br>Muskets</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="110" id="110" data-obj='{"depend":[109],"Basalt":"60","Brick":"100","FP":"54","Supplies":"12000"}'></td>
<td class="padded">Arcade Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 54</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 12,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Basalt.png alt="Basalt" title="Basalt" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Brick.png alt="Brick" title="Brick" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Colonies</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="111" id="111" data-obj='{"depend":[109],"Dried Herbs":"110","FP":"35","Coins":"4000","Supplies":"15000"}'></td>
<td class="padded">Plantation Goods</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 35</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 15,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Dried_Herbs.png alt="Dried Herbs" title="Dried Herbs" align=absmiddle> 110</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Colonies</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="112" id="112" data-obj='{"depend":[109],"FP":"73","Coins":"5000","Supplies":"25000"}'></td>
<td class="padded">New Crops</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 73</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 25,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Colonies</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="113" id="113" data-obj='{"depend":[109],"Gold":"40","Tar":"20","FP":"58","Supplies":"18000"}'></td>
<td class="padded">Exploration</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 58</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 18,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gold.png alt="Gold" title="Gold" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Tar.png alt="Tar" title="Tar" align=absmiddle> 20</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Colonies</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="114" id="114" data-obj='{"depend":[110],"Silk":"90","Talc":"140","FP":"59","Coins":"18000","Supplies":"18000"}'></td>
<td class="padded">Fashion</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 59</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 18,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 18,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Silk.png alt="Silk" title="Silk" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Talc.png alt="Talc" title="Talc" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arcade Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="115" id="115" data-obj='{"depend":[111,112],"Granite":"150","Tar":"20","FP":"53","Coins":"5000","Supplies":"5000"}'></td>
<td class="padded">Plantations</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 53</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Granite.png alt="Granite" title="Granite" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Tar.png alt="Tar" title="Tar" align=absmiddle> 20</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Plantation Goods<br>New Crops</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="116" id="116" data-obj='{"depend":[112,113],"Gold":"20","FP":"43","Coins":"10000","Supplies":"15000"}'></td>
<td class="padded">Trading Charters</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 43</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 10,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 15,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gold.png alt="Gold" title="Gold" align=absmiddle> 20</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>New Crops<br>Exploration</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="117" id="117" data-obj='{"depend":[114],"Coffee":"40","Copper":"50","FP":"51","Coins":"2500","Supplies":"8000"}'></td>
<td class="padded">Rapid Response</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 51</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 8,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Coffee.png alt="Coffee" title="Coffee" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Copper.png alt="Copper" title="Copper" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Fashion</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="118" id="118" data-obj='{"depend":[115],"FP":"38","Coins":"3000","Supplies":"30000"}'></td>
<td class="padded">Country Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 38</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 30,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Plantations</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="119" id="119" data-obj='{"depend":[116],"Porcelain":"60","Alabaster":"120","FP":"58","Coins":"8000","Supplies":"5000"}'></td>
<td class="padded">Imperialism</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 58</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 8,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Porcelain.png alt="Porcelain" title="Porcelain" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Alabaster.png alt="Alabaster" title="Alabaster" align=absmiddle> 120</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Trading Charters</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="120" id="120" data-obj='{"depend":[117],"Paper":"80","FP":"58","Coins":"1000","Supplies":"2500"}'></td>
<td class="padded">Malthusian Theory</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 58</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper.png alt="Paper" title="Paper" align=absmiddle> 80</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Rapid Response</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="121" id="121" data-obj='{"depend":[117,118],"Silk":"60","Gold":"110","FP":"45","Coins":"1337","Supplies":"13370"}'></td>
<td class="padded">Elite Forces</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 45</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,337</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 13,370</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Silk.png alt="Silk" title="Silk" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Gold.png alt="Gold" title="Gold" align=absmiddle> 110</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Rapid Response<br>Country Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="122" id="122" data-obj='{"depend":[118,119],"Wire":"80","Copper":"110","FP":"45","Coins":"5000","Supplies":"20000"}'></td>
<td class="padded">Clockmaking</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 45</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 20,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Wire.png alt="Wire" title="Wire" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Copper.png alt="Copper" title="Copper" align=absmiddle> 110</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Country Houses<br>Imperialism</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="123" id="123" data-obj='{"depend":[120,121],"Basalt":"100","FP":"68","Coins":"20000","Supplies":"75000"}'></td>
<td class="padded">Gambrel Roof Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 68</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 20,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 75,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Basalt.png alt="Basalt" title="Basalt" align=absmiddle> 100</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Malthusian Theory<br>Elite Forces</td>
<td class="padded" align=center></td>
</tr>

<tr class="ca bold index">
<td align=center><input type="checkbox" name="124" id="124" data-obj='{"depend":[121,122],"Gunpowder":"80","FP":"40","Coins":"3000","Supplies":"25000"}'></td>
<td class="padded">Field Artillery</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 40</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 25,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gunpowder.png alt="Gunpowder" title="Gunpowder" align=absmiddle> 80</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Elite Forces<br>Clockmaking</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="125" id="125" data-obj='{"depend":[123,124],"Brick":"90","Glass":"50","FP":"60","Supplies":"300000"}'></td>
<td class="padded">Industrialization</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 300,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Brick.png alt="Brick" title="Brick" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Glass.png alt="Glass" title="Glass" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Gambrel Roof Houses<br>Field Artillery</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="126" id="126" data-obj='{"depend":[123,124],"Salt":"100","Basalt":"60","FP":"70","Coins":"75000","Supplies":"150000"}'></td>
<td class="padded">Extraction</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 70</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 75,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 150,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Salt.png alt="Salt" title="Salt" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Basalt.png alt="Basalt" title="Basalt" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Gambrel Roof Houses<br>Field Artillery</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="127" id="127" data-obj='{"depend":[125],"Silk":"100","Textiles":"40","FP":"48","Supplies":"50000"}'></td>
<td class="padded">Rifles</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 48</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 50,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Silk.png alt="Silk" title="Silk" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Textiles.png alt="Textiles" title="Textiles" align=absmiddle> 40</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Industrialization</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="128" id="128" data-obj='{"depend":[125],"Brass":"200","Coke":"55","FP":"110","Coins":"30000","Supplies":"60000"}'></td>
<td class="padded">Railroad</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 30,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 60,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Brass.png alt="Brass" title="Brass" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Coke.png alt="Coke" title="Coke" align=absmiddle> 55</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Industrialization</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="129" id="129" data-obj='{"depend":[126],"Dried Herbs":"190","Rubber":"90","FP":"110","Coins":"30000","Supplies":"60000"}'></td>
<td class="padded">Hygiene</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 30,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 60,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Dried_Herbs.png alt="Dried Herbs" title="Dried Herbs" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Rubber.png alt="Rubber" title="Rubber" align=absmiddle> 90</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Extraction</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="130" id="130" data-obj='{"depend":[126],"Talc":"130","Glass":"50","FP":"48","Coins":"10000","Supplies":"20000"}'></td>
<td class="padded">Modern Chemistry</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 48</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 10,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 20,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Talc.png alt="Talc" title="Talc" align=absmiddle> 130</td>
<td class="padded" align=center><img src=/FoE/images/Glass.png alt="Glass" title="Glass" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Extraction</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="131" id="131" data-obj='{"depend":[127,128],"Fertilizer":"45","Rope":"80","FP":"58","Coins":"30000"}'></td>
<td class="padded">Workers` Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 58</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 30,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Fertilizer.png alt="Fertilizer" title="Fertilizer" align=absmiddle> 45</td>
<td class="padded" align=center><img src=/FoE/images/Rope.png alt="Rope" title="Rope" align=absmiddle> 80</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Rifles<br>Railroad</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="132" id="132" data-obj='{"depend":[129,130],"Coffee":"90","Rope":"110","FP":"42","Supplies":"30000"}'></td>
<td class="padded">The West</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 42</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 30,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Coffee.png alt="Coffee" title="Coffee" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Rope.png alt="Rope" title="Rope" align=absmiddle> 110</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Hygiene<br>Modern Chemistry</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="133" id="133" data-obj='{"depend":[131],"Coffee":"80","Silk":"30","FP":"42","Supplies":"60000"}'></td>
<td class="padded">Reconnaissance</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 42</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 60,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Coffee.png alt="Coffee" title="Coffee" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Silk.png alt="Silk" title="Silk" align=absmiddle> 30</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Workers` Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="134" id="134" data-obj='{"depend":[131,132],"Wire":"160","Coke":"50","FP":"30","Coins":"5000","Supplies":"90000"}'></td>
<td class="padded">Precision Tools</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 30</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 90,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Wire.png alt="Wire" title="Wire" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Coke.png alt="Coke" title="Coke" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Workers` Houses<br>The West</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="135" id="135" data-obj='{"depend":[132],"Tar":"80","Porcelain":"60","FP":"68"}'></td>
<td class="padded">Boarding Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 68</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Tar.png alt="Tar" title="Tar" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Porcelain.png alt="Porcelain" title="Porcelain" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>The West</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="136" id="136" data-obj='{"depend":[133,134],"Whale Oil":"60","Porcelain":"100","FP":"68","Coins":"70000"}'></td>
<td class="padded">Victorian Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 68</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 70,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Whale_Oil.png alt="Whale Oil" title="Whale Oil" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Porcelain.png alt="Porcelain" title="Porcelain" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Reconnaissance<br>Precision Tools</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="137" id="137" data-obj='{"depend":[134],"Salt":"110","Glass":"60","FP":"80","Coins":"8000","Supplies":"200000"}'></td>
<td class="padded">Modern Manufacturing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 8,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Salt.png alt="Salt" title="Salt" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Glass.png alt="Glass" title="Glass" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Precision Tools</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="138" id="138" data-obj='{"depend":[134],"Tar":"70","Fertilizer":"50","FP":"33","Coins":"20000","Supplies":"180000"}'></td>
<td class="padded">Modern Roads</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 33</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 20,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 180,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Tar.png alt="Tar" title="Tar" align=absmiddle> 70</td>
<td class="padded" align=center><img src=/FoE/images/Fertilizer.png alt="Fertilizer" title="Fertilizer" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Precision Tools</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="139" id="139" data-obj='{"depend":[134,135],"Whale Oil":"50","Textiles":"60","FP":"73","Supplies":"70000"}'></td>
<td class="padded">Flanking Tactics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 73</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 70,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Whale_Oil.png alt="Whale Oil" title="Whale Oil" align=absmiddle> 50</td>
<td class="padded" align=center><img src=/FoE/images/Textiles.png alt="Textiles" title="Textiles" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Precision Tools<br>Boarding Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="140" id="140" data-obj='{"depend":[134,135],"Paper":"120","Silk":"100","FP":"41","Coins":"5000","Supplies":"5000"}'></td>
<td class="padded">Law and Order</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 41</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper.png alt="Paper" title="Paper" align=absmiddle> 120</td>
<td class="padded" align=center><img src=/FoE/images/Silk.png alt="Silk" title="Silk" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Precision Tools<br>Boarding Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="141" id="141" data-obj='{"depend":[136,137],"Rubber":"70","Gunpowder":"110","FP":"55","Supplies":"80000"}'></td>
<td class="padded">Ballistics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 55</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 80,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Rubber.png alt="Rubber" title="Rubber" align=absmiddle> 70</td>
<td class="padded" align=center><img src=/FoE/images/Gunpowder.png alt="Gunpowder" title="Gunpowder" align=absmiddle> 110</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Victorian Houses<br>Modern Manufacturing</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="142" id="142" data-obj='{"depend":[138,137,139],"Brick":"130","Basalt":"110","FP":"37","Coins":"20000","Supplies":"50000"}'></td>
<td class="padded">Infrastructure</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 37</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 20,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 50,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Brick.png alt="Brick" title="Brick" align=absmiddle> 130</td>
<td class="padded" align=center><img src=/FoE/images/Basalt.png alt="Basalt" title="Basalt" align=absmiddle> 110</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Modern Roads<br>Modern Manufacturing<br>Flanking Tactics</td>
<td class="padded" align=center></td>
</tr>

<tr class="inda bold index">
<td align=center><input type="checkbox" name="143" id="143" data-obj='{"depend":[139,140],"Gunpowder":"100","Brass":"60","FP":"67","Supplies":"90000"}'></td>
<td class="padded">Breech Loading</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 67</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 90,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gunpowder.png alt="Gunpowder" title="Gunpowder" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Brass.png alt="Brass" title="Brass" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Flanking Tactics<br>Law and Order</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="144" id="144" data-obj='{"depend":[142],"Basalt":"180","Tar":"100","FP":"75","Coins":"20000","Supplies":"225000"}'></td>
<td class="padded">Traffic Lanes</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 75</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 20,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 225,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Basalt.png alt="Basalt" title="Basalt" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Tar.png alt="Tar" title="Tar" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Infrastructure</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="145" id="145" data-obj='{"depend":[144],"Brass":"130","Wire":"60","FP":"55","Supplies":"75000"}'></td>
<td class="padded">Mass Manufacturing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 55</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 75,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Brass.png alt="Brass" title="Brass" align=absmiddle> 130</td>
<td class="padded" align=center><img src=/FoE/images/Wire.png alt="Wire" title="Wire" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Traffic Lanes</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="146" id="146" data-obj='{"depend":[144],"Gunpowder":"160","Fertilizer":"75","FP":"55","Supplies":"75000"}'></td>
<td class="padded">Modern Explosives</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 55</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 75,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gunpowder.png alt="Gunpowder" title="Gunpowder" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Fertilizer.png alt="Fertilizer" title="Fertilizer" align=absmiddle> 75</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Traffic Lanes</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="147" id="147" data-obj='{"depend":[144],"Porcelain":"110","Rubber":"100","FP":"55","Coins":"50000","Supplies":"25000"}'></td>
<td class="padded">Oil Refining</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 55</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 50,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 25,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Porcelain.png alt="Porcelain" title="Porcelain" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Rubber.png alt="Rubber" title="Rubber" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Traffic Lanes</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="148" id="148" data-obj='{"depend":[144],"Talc":"60","Coke":"50","FP":"85","Coins":"75000","Supplies":"75000"}'></td>
<td class="padded">Modern Materials</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 85</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 75,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 75,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Talc.png alt="Talc" title="Talc" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Coke.png alt="Coke" title="Coke" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Traffic Lanes</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="149" id="149" data-obj='{"depend":[145],"Wire":"80","Brass":"80","FP":"90","Coins":"100000"}'></td>
<td class="padded">Electricity</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Wire.png alt="Wire" title="Wire" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Brass.png alt="Brass" title="Brass" align=absmiddle> 80</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mass Manufacturing</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="150" id="150" data-obj='{"depend":[146],"Explosives":"60","Machine Parts":"20","FP":"48","Supplies":"90000"}'></td>
<td class="padded">Percussion Fuze</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 48</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 90,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 20</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Modern Explosives</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="151" id="151" data-obj='{"depend":[147],"Machine Parts":"60","Gasoline":"50","FP":"74","Supplies":"80000"}'></td>
<td class="padded">Automobiles</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 74</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 80,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Oil Refining</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="152" id="152" data-obj='{"depend":[147,148],"Coffee":"90","Whale Oil":"140","FP":"35","Supplies":"90000"}'></td>
<td class="padded">Urbanization</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 35</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 90,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Coffee.png alt="Coffee" title="Coffee" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Whale_Oil.png alt="Whale Oil" title="Whale Oil" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Oil Refining<br>Modern Materials</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="153" id="153" data-obj='{"depend":[148],"Talc":"90","Whale Oil":"80","FP":"51","Supplies":"120000"}'></td>
<td class="padded">Tenement Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 51</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 120,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Talc.png alt="Talc" title="Talc" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Whale_Oil.png alt="Whale Oil" title="Whale Oil" align=absmiddle> 80</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Modern Materials</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="154" id="154" data-obj='{"depend":[149],"Wire":"110","Coke":"130","FP":"43","Supplies":"100000"}'></td>
<td class="padded">Power Distribution</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 43</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 100,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Wire.png alt="Wire" title="Wire" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Coke.png alt="Coke" title="Coke" align=absmiddle> 130</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Electricity</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="155" id="155" data-obj='{"depend":[150],"Talc":"90","Porcelain":"80","FP":"65","Coins":"40000","Supplies":"80000"}'></td>
<td class="padded">Council Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 65</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 40,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 80,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Talc.png alt="Talc" title="Talc" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Porcelain.png alt="Porcelain" title="Porcelain" align=absmiddle> 80</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Percussion Fuze</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="156" id="156" data-obj='{"depend":[151],"Tinplate":"150","Gasoline":"40","FP":"53","Supplies":"80000"}'></td>
<td class="padded">Armor Plating</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 53</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 80,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 40</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Automobiles</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="157" id="157" data-obj='{"depend":[152],"Paper":"220","Silk":"150","FP":"68"}'></td>
<td class="padded">Journalism</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 68</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper.png alt="Paper" title="Paper" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Silk.png alt="Silk" title="Silk" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Urbanization</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="158" id="158" data-obj='{"depend":[153],"Fertilizer":"200","Gasoline":"80","FP":"47","Coins":"50000","Supplies":"75000"}'></td>
<td class="padded">Ranching</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 47</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 50,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 75,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Fertilizer.png alt="Fertilizer" title="Fertilizer" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 80</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Tenement Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="159" id="159" data-obj='{"depend":[154,155],"Tar":"220","Machine Parts":"140","FP":"73","Coins":"18000","Supplies":"90000"}'></td>
<td class="padded">Public Transport</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 73</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 18,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 90,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Tar.png alt="Tar" title="Tar" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Power Distribution<br>Council Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="160" id="160" data-obj='{"depend":[156],"Machine Parts":"110","Explosives":"60","FP":"88","Supplies":"80000"}'></td>
<td class="padded">Tracked Vehicles</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 88</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 80,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Armor Plating</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="161" id="161" data-obj='{"depend":[157,158],"Textiles":"230","Coffee":"230","FP":"88","Coins":"150000","Supplies":"100000"}'></td>
<td class="padded">Mass Mobilization</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 88</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 150,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 100,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Textiles.png alt="Textiles" title="Textiles" align=absmiddle> 230</td>
<td class="padded" align=center><img src=/FoE/images/Coffee.png alt="Coffee" title="Coffee" align=absmiddle> 230</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Journalism<br>Ranching</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="162" id="162" data-obj='{"depend":[159],"Asbestos":"180","Tinplate":"90","FP":"98","Coins":"11111","Supplies":"111111"}'></td>
<td class="padded">High-Rises</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 98</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 11,111</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 111,111</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Asbestos.png alt="Asbestos" title="Asbestos" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 90</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Public Transport</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="163" id="163" data-obj='{"depend":[160],"Explosives":"180","Rubber":"160","FP":"53","Supplies":"25000"}'></td>
<td class="padded">Scoped Rifles</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 53</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 25,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Rubber.png alt="Rubber" title="Rubber" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Tracked Vehicles</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="164" id="164" data-obj='{"depend":[161],"Porcelain":"190","Tinplate":"110","FP":"79","Supplies":"180000"}'></td>
<td class="padded">Antibiotics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 79</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 180,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Porcelain.png alt="Porcelain" title="Porcelain" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 110</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mass Mobilization</td>
<td class="padded" align=center></td>
</tr>

<tr class="pe bold index">
<td align=center><input type="checkbox" name="165" id="165" data-obj='{"depend":[164,162],"Asbestos":"150","Gasoline":"130","FP":"52","Supplies":"250000"}'></td>
<td class="padded">Recreation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 52</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 250,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Asbestos.png alt="Asbestos" title="Asbestos" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 130</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Antibiotics<br>High-Rises</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="166" id="166" data-obj='{"depend":[165],"Machine Parts":"200","Coke":"200","FP":"102","Coins":"100000","Supplies":"200000"}'></td>
<td class="padded">Prefabrication</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 102</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Coke.png alt="Coke" title="Coke" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Recreation</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="167" id="167" data-obj='{"depend":[165],"Gasoline":"180","Tar":"130","FP":"57","Supplies":"400000"}'></td>
<td class="padded">Autobahns</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 57</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 400,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Tar.png alt="Tar" title="Tar" align=absmiddle> 130</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Recreation</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="168" id="168" data-obj='{"depend":[165],"Whale Oil":"430","Tinplate":"100","FP":"85","Coins":"75000","Supplies":"150000"}'></td>
<td class="padded">Food Processing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 85</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 75,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 150,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Whale_Oil.png alt="Whale Oil" title="Whale Oil" align=absmiddle> 430</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Recreation</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="169" id="169" data-obj='{"depend":[166],"Ferroconcrete":"190","Convenience Food":"140","FP":"79","Coins":"50000","Supplies":"200000"}'></td>
<td class="padded">Prefab Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 79</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 50,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Ferroconcrete.png alt="Ferroconcrete" title="Ferroconcrete" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Convenience_Food.png alt="Convenience Food" title="Convenience Food" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Prefabrication</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="170" id="170" data-obj='{"depend":[167,166],"Machine Parts":"90","Gasoline":"60","FP":"59","Coins":"25000","Supplies":"250000"}'></td>
<td class="padded">Mechanized Infantry</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 59</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 25,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 250,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Autobahns<br>Prefabrication</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="171" id="171" data-obj='{"depend":[167],"Asbestos":"130","Porcelain":"90","FP":"62","Coins":"50000","Supplies":"200000"}'></td>
<td class="padded">Motels</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 62</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 50,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Asbestos.png alt="Asbestos" title="Asbestos" align=absmiddle> 130</td>
<td class="padded" align=center><img src=/FoE/images/Porcelain.png alt="Porcelain" title="Porcelain" align=absmiddle> 90</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Autobahns</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="172" id="172" data-obj='{"depend":[167,168],"Explosives":"180","Wire":"90","FP":"67","Coins":"25000","Supplies":"250000"}'></td>
<td class="padded">Mechanized Artillery</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 67</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 25,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 250,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Wire.png alt="Wire" title="Wire" align=absmiddle> 90</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Autobahns<br>Food Processing</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="173" id="173" data-obj='{"depend":[168],"Flavourants":"190","Packaging":"140","FP":"73","Coins":"100000","Supplies":"50000"}'></td>
<td class="padded">Advertisement</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 73</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 50,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Flavourants.png alt="Flavourants" title="Flavourants" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Packaging.png alt="Packaging" title="Packaging" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Food Processing</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="174" id="174" data-obj='{"depend":[169],"Tinplate":"90","Coke":"120","FP":"110","Coins":"77000","Supplies":"110000"}'></td>
<td class="padded">Commercial Aviation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 77,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 110,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Coke.png alt="Coke" title="Coke" align=absmiddle> 120</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Prefab Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="175" id="175" data-obj='{"depend":[170,171,172],"Convenience Food":"210","Coffee":"90","FP":"77","Coins":"24000","Supplies":"70000"}'></td>
<td class="padded">24\/7 Service</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 77</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 24,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 70,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Convenience_Food.png alt="Convenience Food" title="Convenience Food" align=absmiddle> 210</td>
<td class="padded" align=center><img src=/FoE/images/Coffee.png alt="Coffee" title="Coffee" align=absmiddle> 90</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mechanized Infantry<br>Motels<br>Mechanized Artillery</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="176" id="176" data-obj='{"depend":[173],"Luxury Materials":"180","Explosives":"60","FP":"111","Coins":"300000","Supplies":"100000"}'></td>
<td class="padded">Hollywood</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 111</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 300,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 100,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Luxury_Materials.png alt="Luxury Materials" title="Luxury Materials" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Advertisement</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="177" id="177" data-obj='{"depend":[174],"Textiles":"140","Asbestos":"120","FP":"108","Coins":"15000","Supplies":"80000"}'></td>
<td class="padded">Spectator Sports</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 108</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 15,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 80,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Textiles.png alt="Textiles" title="Textiles" align=absmiddle> 140</td>
<td class="padded" align=center><img src=/FoE/images/Asbestos.png alt="Asbestos" title="Asbestos" align=absmiddle> 120</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Commercial Aviation</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="178" id="178" data-obj='{"depend":[174,175],"Textiles":"160","Paper":"40","FP":"58","Coins":"123456","Supplies":"654321"}'></td>
<td class="padded">Rapid Deployment</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 58</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 123,456</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 654,321</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Textiles.png alt="Textiles" title="Textiles" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Paper.png alt="Paper" title="Paper" align=absmiddle> 40</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Commercial Aviation<br>24\/7 Service</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="179" id="179" data-obj='{"depend":[175,176],"Machine Parts":"160","Rubber":"130","FP":"109","Coins":"60000","Supplies":"250000"}'></td>
<td class="padded">Consumer Goods</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 109</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 60,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 250,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Rubber.png alt="Rubber" title="Rubber" align=absmiddle> 130</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>24\/7 Service<br>Hollywood</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="180" id="180" data-obj='{"depend":[176],"Fertilizer":"160","Packaging":"140","FP":"56","Supplies":"300000"}'></td>
<td class="padded">Baby Boom</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 56</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 300,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Fertilizer.png alt="Fertilizer" title="Fertilizer" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Packaging.png alt="Packaging" title="Packaging" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Hollywood</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="181" id="181" data-obj='{"depend":[178,180],"Tinplate":"150","Gasoline":"140","FP":"112","Coins":"25000","Supplies":"250000"}'></td>
<td class="padded">Modern Tanks</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 112</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 25,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 250,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Rapid Deployment<br>Baby Boom</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="182" id="182" data-obj='{"depend":[179,180],"Luxury Materials":"150","Ferroconcrete":"80","FP":"70","Coins":"50000","Supplies":"200000"}'></td>
<td class="padded">Suburban Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 70</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 50,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Luxury_Materials.png alt="Luxury Materials" title="Luxury Materials" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Ferroconcrete.png alt="Ferroconcrete" title="Ferroconcrete" align=absmiddle> 80</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Consumer Goods<br>Baby Boom</td>
<td class="padded" align=center></td>
</tr>

<tr class="me bold index">
<td align=center><input type="checkbox" name="183" id="183" data-obj='{"depend":[181,182],"Explosives":"90","Ferroconcrete":"90","FP":"45","Coins":"25000","Supplies":"250000"}'></td>
<td class="padded">Anti-Tank Warfare</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 45</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 25,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 250,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Ferroconcrete.png alt="Ferroconcrete" title="Ferroconcrete" align=absmiddle> 90</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Modern Tanks<br>Suburban Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="184" id="184" data-obj='{"depend":[183],"Machine Parts":"180","Rubber":"230","FP":"53","Coins":"80000","Supplies":"350000"}'></td>
<td class="padded">Private Transport</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 53</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 80,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 350,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Rubber.png alt="Rubber" title="Rubber" align=absmiddle> 230</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Anti-Tank Warfare</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="185" id="185" data-obj='{"depend":[183],"Coke":"250","Tinplate":"170","FP":"110","Coins":"150000","Supplies":"300000"}'></td>
<td class="padded">Industrial Steel</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 150,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 300,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Coke.png alt="Coke" title="Coke" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 170</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Anti-Tank Warfare</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="186" id="186" data-obj='{"depend":[183],"Textiles":"160","Convenience Food":"80","FP":"45","Supplies":"300000"}'></td>
<td class="padded">Equality</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 45</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 300,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Textiles.png alt="Textiles" title="Textiles" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Convenience_Food.png alt="Convenience Food" title="Convenience Food" align=absmiddle> 80</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Anti-Tank Warfare</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="187" id="187" data-obj='{"depend":[183],"Whale Oil":"240","Convenience Food":"220","FP":"47","Supplies":"400000"}'></td>
<td class="padded">Species Conservation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 47</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 400,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Whale_Oil.png alt="Whale Oil" title="Whale Oil" align=absmiddle> 240</td>
<td class="padded" align=center><img src=/FoE/images/Convenience_Food.png alt="Convenience Food" title="Convenience Food" align=absmiddle> 220</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Anti-Tank Warfare</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="188" id="188" data-obj='{"depend":[183],"Packaging":"120","Rubber":"100","FP":"120","Coins":"200000","Supplies":"300000"}'></td>
<td class="padded">Modern Electronics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 120</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 300,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Packaging.png alt="Packaging" title="Packaging" align=absmiddle> 120</td>
<td class="padded" align=center><img src=/FoE/images/Rubber.png alt="Rubber" title="Rubber" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Anti-Tank Warfare</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="189" id="189" data-obj='{"depend":[184],"Fertilizer":"370","Packaging":"180","FP":"77","Coins":"350000","Supplies":"200000"}'></td>
<td class="padded">Renewable Resources</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 77</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 350,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Fertilizer.png alt="Fertilizer" title="Fertilizer" align=absmiddle> 370</td>
<td class="padded" align=center><img src=/FoE/images/Packaging.png alt="Packaging" title="Packaging" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Private Transport</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="190" id="190" data-obj='{"depend":[185],"Ferroconcrete":"180","Steel":"200","FP":"99","Coins":"100000","Supplies":"450000"}'></td>
<td class="padded">Prefab High-Rises</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 99</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 450,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Ferroconcrete.png alt="Ferroconcrete" title="Ferroconcrete" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Steel.png alt="Steel" title="Steel" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Industrial Steel</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="191" id="191" data-obj='{"depend":[186],"Asbestos":"140","Coke":"145","FP":"76","Coins":"100000","Supplies":"400000"}'></td>
<td class="padded">Environmental Standards</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 76</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 400,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Asbestos.png alt="Asbestos" title="Asbestos" align=absmiddle> 140</td>
<td class="padded" align=center><img src=/FoE/images/Coke.png alt="Coke" title="Coke" align=absmiddle> 145</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Equality</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="192" id="192" data-obj='{"depend":[187],"Fertilizer":"100","Flavourants":"130","FP":"82","Coins":"250000","Supplies":"20000"}'></td>
<td class="padded">Genetics Research</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 82</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 250,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 20,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Fertilizer.png alt="Fertilizer" title="Fertilizer" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Flavourants.png alt="Flavourants" title="Flavourants" align=absmiddle> 130</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Species Conservation</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="193" id="193" data-obj='{"depend":[188],"Explosives":"230","Semiconductors":"80","FP":"88","Coins":"400000","Supplies":"400000"}'></td>
<td class="padded">Rocket Artillery</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 88</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 400,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 400,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> 230</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 80</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Modern Electronics</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="194" id="194" data-obj='{"depend":[189,190,191],"Luxury Materials":"200","Flavourants":"190","FP":"5","Coins":"1000000","Supplies":"50000"}'></td>
<td class="padded">High Society</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 5</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 50,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Luxury_Materials.png alt="Luxury Materials" title="Luxury Materials" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Flavourants.png alt="Flavourants" title="Flavourants" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Renewable Resources<br>Prefab High-Rises<br>Environmental Standards</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="195" id="195" data-obj='{"depend":[191],"Renewable Resources":"150","Industrial Filters":"160","FP":"39","Coins":"250000","Supplies":"400000"}'></td>
<td class="padded">Waste Management</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 39</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 250,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 400,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Renewable_Resources.png alt="Renewable Resources" title="Renewable Resources" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Industrial_Filters.png alt="Industrial Filters" title="Industrial Filters" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Environmental Standards</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="196" id="196" data-obj='{"depend":[191,192,193],"Asbestos":"140","Semiconductors":"180","FP":"123","Supplies":"1000000"}'></td>
<td class="padded">Space Flight</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 123</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Asbestos.png alt="Asbestos" title="Asbestos" align=absmiddle> 140</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Environmental Standards<br>Genetics Research<br>Rocket Artillery</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="197" id="197" data-obj='{"depend":[193],"Tinplate":"120","Machine Parts":"50","FP":"50","Coins":"150000","Supplies":"250000"}'></td>
<td class="padded">Infantry Support</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 50</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 150,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 250,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 120</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Rocket Artillery</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="198" id="198" data-obj='{"depend":[194],"Luxury Materials":"180","Industrial Filters":"130","FP":"101","Coins":"200000","Supplies":"100000"}'></td>
<td class="padded">Bungalows</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 101</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 100,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Luxury_Materials.png alt="Luxury Materials" title="Luxury Materials" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Industrial_Filters.png alt="Industrial Filters" title="Industrial Filters" align=absmiddle> 130</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>High Society</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="199" id="199" data-obj='{"depend":[196],"Steel":"180","Gasoline":"180","FP":"66","Coins":"100000","Supplies":"500000"}'></td>
<td class="padded">Composite Armor</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 66</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Steel.png alt="Steel" title="Steel" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Space Flight</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="200" id="200" data-obj='{"depend":[197],"Ferroconcrete":"70","Renewable Resources":"150","FP":"92","Coins":"100000","Supplies":"200000"}'></td>
<td class="padded">Duplex Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 92</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Ferroconcrete.png alt="Ferroconcrete" title="Ferroconcrete" align=absmiddle> 70</td>
<td class="padded" align=center><img src=/FoE/images/Renewable_Resources.png alt="Renewable Resources" title="Renewable Resources" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Infantry Support</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="201" id="201" data-obj='{"depend":[198],"Genome Data":"200","Convenience Food":"140","FP":"76","Coins":"250000","Supplies":"300000"}'></td>
<td class="padded">Children`s Rights</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 76</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 250,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 300,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Genome_Data.png alt="Genome Data" title="Genome Data" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Convenience_Food.png alt="Convenience Food" title="Convenience Food" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Bungalows</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="202" id="202" data-obj='{"depend":[199,200],"Textiles":"210","Rubber":"120","FP":"93","Coins":"300000","Supplies":"150000"}'></td>
<td class="padded">Physical Education</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 93</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 300,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 150,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Textiles.png alt="Textiles" title="Textiles" align=absmiddle> 210</td>
<td class="padded" align=center><img src=/FoE/images/Rubber.png alt="Rubber" title="Rubber" align=absmiddle> 120</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Composite Armor<br>Duplex Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="203" id="203" data-obj='{"depend":[201],"Semiconductors":"80","Gasoline":"50","FP":"121","Coins":"450000","Supplies":"600000"}'></td>
<td class="padded">Squad Tactics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 121</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 450,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 600,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 50</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Children`s Rights</td>
<td class="padded" align=center></td>
</tr>

<tr class="pme bold index">
<td align=center><input type="checkbox" name="204" id="204" data-obj='{"depend":[202],"Explosives":"160","Asbestos":"60","FP":"117","Coins":"600000","Supplies":"450000"}'></td>
<td class="padded">Special Operations</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 117</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 600,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 450,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Asbestos.png alt="Asbestos" title="Asbestos" align=absmiddle> 60</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Physical Education</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="205" id="205" data-obj='{"depend":[203,204],"Semiconductors":"250","Convenience Food":"150","FP":"58","Coins":"500000","Supplies":"1000000"}'></td>
<td class="padded">Internet</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 58</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 500,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Convenience_Food.png alt="Convenience Food" title="Convenience Food" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Squad Tactics<br>Special Operations</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="206" id="206" data-obj='{"depend":[205],"Ferroconcrete":"250","Industrial Filters":"200","FP":"95","Coins":"100000","Supplies":"800000"}'></td>
<td class="padded">Waterfront Residentials</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 95</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Ferroconcrete.png alt="Ferroconcrete" title="Ferroconcrete" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Industrial_Filters.png alt="Industrial Filters" title="Industrial Filters" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Internet</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="207" id="207" data-obj='{"depend":[205],"Convenience Food":"250","Steel":"200","FP":"75","Coins":"400000","Supplies":"400000"}'></td>
<td class="padded">Shophouses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 75</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 400,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 400,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Convenience_Food.png alt="Convenience Food" title="Convenience Food" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Steel.png alt="Steel" title="Steel" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Internet</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="208" id="208" data-obj='{"depend":[205],"Machine Parts":"290","Semiconductors":"120","FP":"104","Coins":"400000","Supplies":"850000"}'></td>
<td class="padded">Automation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 104</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 400,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 850,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 290</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 120</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Internet</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="209" id="209" data-obj='{"depend":[205],"Genome Data":"400","Plastics":"100","FP":"60","Coins":"350000","Supplies":"1200000"}'></td>
<td class="padded">Bionics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 350,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Genome_Data.png alt="Genome Data" title="Genome Data" align=absmiddle> 400</td>
<td class="padded" align=center><img src=/FoE/images/Plastics.png alt="Plastics" title="Plastics" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Internet</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="210" id="210" data-obj='{"depend":[205],"Gasoline":"330","Tinplate":"160","FP":"101","Coins":"600000","Supplies":"900000"}'></td>
<td class="padded">Petroleum Industry</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 101</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 600,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 900,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 330</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Internet</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="211" id="211" data-obj='{"depend":[206],"Renewable Resources":"250","Packaging":"200","FP":"99","Coins":"200000","Supplies":"200000"}'></td>
<td class="padded">Local Purchasing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 99</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Renewable_Resources.png alt="Renewable Resources" title="Renewable Resources" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Packaging.png alt="Packaging" title="Packaging" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Waterfront Residentials</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="212" id="212" data-obj='{"depend":[207],"Plastics":"260","Luxury Materials":"400","FP":"61","Coins":"1300000","Supplies":"500000"}'></td>
<td class="padded">Consumerism</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 61</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,300,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Plastics.png alt="Plastics" title="Plastics" align=absmiddle> 260</td>
<td class="padded" align=center><img src=/FoE/images/Luxury_Materials.png alt="Luxury Materials" title="Luxury Materials" align=absmiddle> 400</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Shophouses</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="213" id="213" data-obj='{"depend":[208,209],"Explosives":"380","Steel":"200","FP":"110","Coins":"150000","Supplies":"700000"}'></td>
<td class="padded">Reactive Armor</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 150,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 700,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Explosives.png alt="Explosives" title="Explosives" align=absmiddle> 380</td>
<td class="padded" align=center><img src=/FoE/images/Steel.png alt="Steel" title="Steel" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Automation<br>Bionics</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="214" id="214" data-obj='{"depend":[209],"Electromagnets":"120","Machine Parts":"100","FP":"82","Coins":"300000","Supplies":"500000"}'></td>
<td class="padded">Aerial Fire Support</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 82</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 300,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Electromagnets.png alt="Electromagnets" title="Electromagnets" align=absmiddle> 120</td>
<td class="padded" align=center><img src=/FoE/images/Machine_Parts.png alt="Machine Parts" title="Machine Parts" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Bionics</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="215" id="215" data-obj='{"depend":[210],"Asbestos":"480","Gasoline":"160","FP":"105","Coins":"450000","Supplies":"1000000"}'></td>
<td class="padded">Missile Artillery</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 105</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 450,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Asbestos.png alt="Asbestos" title="Asbestos" align=absmiddle> 480</td>
<td class="padded" align=center><img src=/FoE/images/Gasoline.png alt="Gasoline" title="Gasoline" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Petroleum Industry</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="216" id="216" data-obj='{"depend":[211,212],"Semiconductors":"180","Gas":"260","FP":"44","Coins":"2500000"}'></td>
<td class="padded">Financial Services</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 44</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Gas.png alt="Gas" title="Gas" align=absmiddle> 260</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Local Purchasing<br>Consumerism</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="217" id="217" data-obj='{"depend":[212,213,214],"Packaging":"400","Robots":"180","FP":"97","Coins":"800000","Supplies":"1500000"}'></td>
<td class="padded">Globalization</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 97</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 800,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Packaging.png alt="Packaging" title="Packaging" align=absmiddle> 400</td>
<td class="padded" align=center><img src=/FoE/images/Robots.png alt="Robots" title="Robots" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Consumerism<br>Reactive Armor<br>Aerial Fire Support</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="218" id="218" data-obj='{"depend":[214,215],"Electromagnets":"250","Tinplate":"260","FP":"108","Coins":"650000","Supplies":"450000"}'></td>
<td class="padded">Mobile Air Defense</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 108</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 650,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 450,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Electromagnets.png alt="Electromagnets" title="Electromagnets" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Tinplate.png alt="Tinplate" title="Tinplate" align=absmiddle> 260</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Aerial Fire Support<br>Missile Artillery</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="219" id="219" data-obj='{"depend":[216],"Ferroconcrete":"300","Industrial Filters":"200","FP":"90","Coins":"200000","Supplies":"600000"}'></td>
<td class="padded">Condominiums</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 600,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Ferroconcrete.png alt="Ferroconcrete" title="Ferroconcrete" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Industrial_Filters.png alt="Industrial Filters" title="Industrial Filters" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Financial Services</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="220" id="220" data-obj='{"depend":[216,217],"Flavourants":"400","Bionics Data":"175","FP":"42","Coins":"25914","Supplies":"251147"}'></td>
<td class="padded">Stress Management</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 42</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 25,914</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 251,147</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Flavourants.png alt="Flavourants" title="Flavourants" align=absmiddle> 400</td>
<td class="padded" align=center><img src=/FoE/images/Bionics_Data.png alt="Bionics Data" title="Bionics Data" align=absmiddle> 175</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Financial Services<br>Globalization</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="221" id="221" data-obj='{"depend":[217,218],"Gas":"250","Robots":"200","FP":"92","Coins":"1000000","Supplies":"250000"}'></td>
<td class="padded">Military Interventions</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 92</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 250,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gas.png alt="Gas" title="Gas" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Robots.png alt="Robots" title="Robots" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Globalization<br>Mobile Air Defense</td>
<td class="padded" align=center></td>
</tr>

<tr class="ce bold index">
<td align=center><input type="checkbox" name="222" id="222" data-obj='{"depend":[219,220,221],"Bionics Data":"225","Renewable Resources":"250","FP":"107","Coins":"100000","Supplies":"1250000"}'></td>
<td class="padded">Renewable Energy</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 107</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,250,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bionics_Data.png alt="Bionics Data" title="Bionics Data" align=absmiddle> 225</td>
<td class="padded" align=center><img src=/FoE/images/Renewable_Resources.png alt="Renewable Resources" title="Renewable Resources" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Condominiums<br>Stress Management<br>Military Interventions</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="223" id="223" data-obj='{"depend":[222],"Electromagnets":"300","Semiconductors":"180","FP":"140","Coins":"3000000","Supplies":"3000000"}'></td>
<td class="padded">Fusion Power</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 140</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Electromagnets.png alt="Electromagnets" title="Electromagnets" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Renewable Energy</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="224" id="224" data-obj='{"depend":[223],"Convenience Food":"410","Flavourants":"310","FP":"68","Coins":"100000","Supplies":"700000"}'></td>
<td class="padded">Nutrition Science</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 68</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 700,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Convenience_Food.png alt="Convenience Food" title="Convenience Food" align=absmiddle> 410</td>
<td class="padded" align=center><img src=/FoE/images/Flavourants.png alt="Flavourants" title="Flavourants" align=absmiddle> 310</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Fusion Power</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="225" id="225" data-obj='{"depend":[223],"Renewable Resources":"240","Packaging":"420","FP":"20","Supplies":"2000000"}'></td>
<td class="padded">Recycled Materials</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 20</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Renewable_Resources.png alt="Renewable Resources" title="Renewable Resources" align=absmiddle> 240</td>
<td class="padded" align=center><img src=/FoE/images/Packaging.png alt="Packaging" title="Packaging" align=absmiddle> 420</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Fusion Power</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="226" id="226" data-obj='{"depend":[223],"Industrial Filters":"270","Bionics Data":"310","FP":"127","Coins":"220000","Supplies":"90000"}'></td>
<td class="padded">High-Tech Materials</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 127</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 220,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 90,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Industrial_Filters.png alt="Industrial Filters" title="Industrial Filters" align=absmiddle> 270</td>
<td class="padded" align=center><img src=/FoE/images/Bionics_Data.png alt="Bionics Data" title="Bionics Data" align=absmiddle> 310</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Fusion Power</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="227" id="227" data-obj='{"depend":[223],"Gas":"130","Renewable Resources":"310","FP":"102","Coins":"110000","Supplies":"900000"}'></td>
<td class="padded">Additive Manufacturing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 102</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 110,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 900,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gas.png alt="Gas" title="Gas" align=absmiddle> 130</td>
<td class="padded" align=center><img src=/FoE/images/Renewable_Resources.png alt="Renewable Resources" title="Renewable Resources" align=absmiddle> 310</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Fusion Power</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="228" id="228" data-obj='{"depend":[224],"Semiconductors":"290","Electromagnets":"245","FP":"94","Coins":"1400000","Supplies":"111000"}'></td>
<td class="padded">Wireless Power Transmission</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 94</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,400,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 111,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 290</td>
<td class="padded" align=center><img src=/FoE/images/Electromagnets.png alt="Electromagnets" title="Electromagnets" align=absmiddle> 245</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Nutrition Science</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="229" id="229" data-obj='{"depend":[224,225,226],"Papercrete":"200","Ferroconcrete":"440","FP":"66","Coins":"200000","Supplies":"1200000"}'></td>
<td class="padded">Capsule Hotels</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 66</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Papercrete.png alt="Papercrete" title="Papercrete" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Ferroconcrete.png alt="Ferroconcrete" title="Ferroconcrete" align=absmiddle> 440</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Nutrition Science<br>Recycled Materials<br>High-Tech Materials</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="230" id="230" data-obj='{"depend":[226],"Gas":"305","Steel":"120","FP":"118","Coins":"1000000","Supplies":"1000000"}'></td>
<td class="padded">Armor-Piercing Shells</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 118</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gas.png alt="Gas" title="Gas" align=absmiddle> 305</td>
<td class="padded" align=center><img src=/FoE/images/Steel.png alt="Steel" title="Steel" align=absmiddle> 120</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>High-Tech Materials</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="231" id="231" data-obj='{"depend":[226,227],"Translucent Concrete":"180","Flavourants":"380","FP":"79","Coins":"1200000","Supplies":"120000"}'></td>
<td class="padded">Industrial Design</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 79</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 120,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Translucent_Concrete.png alt="Translucent Concrete" title="Translucent Concrete" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Flavourants.png alt="Flavourants" title="Flavourants" align=absmiddle> 380</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>High-Tech Materials<br>Additive Manufacturing</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="232" id="232" data-obj='{"depend":[228],"Bionics Data":"255","Robots":"250","FP":"94","Coins":"900000","Supplies":"700000"}'></td>
<td class="padded">Drones</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 94</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 900,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 700,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bionics_Data.png alt="Bionics Data" title="Bionics Data" align=absmiddle> 255</td>
<td class="padded" align=center><img src=/FoE/images/Robots.png alt="Robots" title="Robots" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Wireless Power Transmission</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="233" id="233" data-obj='{"depend":[229],"Preservatives":"140","Luxury Materials":"490","FP":"68","Coins":"330000","Supplies":"110000"}'></td>
<td class="padded">Nightlife</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 68</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 330,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 110,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Preservatives.png alt="Preservatives" title="Preservatives" align=absmiddle> 140</td>
<td class="padded" align=center><img src=/FoE/images/Luxury_Materials.png alt="Luxury Materials" title="Luxury Materials" align=absmiddle> 490</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Capsule Hotels</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="234" id="234" data-obj='{"depend":[230,231],"Smart Materials":"80","Steel":"600","FP":"129","Coins":"660000","Supplies":"800000"}'></td>
<td class="padded">Stealth Technology</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 129</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 660,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Smart_Materials.png alt="Smart Materials" title="Smart Materials" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/Steel.png alt="Steel" title="Steel" align=absmiddle> 600</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Armor-Piercing Shells<br>Industrial Design</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="235" id="235" data-obj='{"depend":[232],"Smart Materials":"150","Robots":"250","FP":"118","Coins":"1100000","Supplies":"900000"}'></td>
<td class="padded">Combat Drones</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 118</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 900,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Smart_Materials.png alt="Smart Materials" title="Smart Materials" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Robots.png alt="Robots" title="Robots" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Drones</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="236" id="236" data-obj='{"depend":[233],"Preservatives":"170","Nutrition Research":"190","FP":"60","Coins":"190000","Supplies":"670000"}'></td>
<td class="padded">Annexes</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 60</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 190,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 670,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Preservatives.png alt="Preservatives" title="Preservatives" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/Nutrition_Research.png alt="Nutrition Research" title="Nutrition Research" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Nightlife</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="237" id="237" data-obj='{"depend":[233,234],"Papercrete":"330","Genome Data":"320","FP":"53","Coins":"200000","Supplies":"2000000"}'></td>
<td class="padded">Physical Security</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 53</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Papercrete.png alt="Papercrete" title="Papercrete" align=absmiddle> 330</td>
<td class="padded" align=center><img src=/FoE/images/Genome_Data.png alt="Genome Data" title="Genome Data" align=absmiddle> 320</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Nightlife<br>Stealth Technology</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="238" id="238" data-obj='{"depend":[235,236],"Nutrition Research":"290","Industrial Filters":"480","FP":"145","Coins":"4000000","Supplies":"4000000"}'></td>
<td class="padded">Land Reclamation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 145</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 4,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nutrition_Research.png alt="Nutrition Research" title="Nutrition Research" align=absmiddle> 290</td>
<td class="padded" align=center><img src=/FoE/images/Industrial_Filters.png alt="Industrial Filters" title="Industrial Filters" align=absmiddle> 480</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Combat Drones<br>Annexes</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="239" id="239" data-obj='{"depend":[237],"Translucent Concrete":"330","Genome Data":"430","FP":"49","Coins":"1010100","Supplies":"1010100"}'></td>
<td class="padded">Surveillance</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 49</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,010,100</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,010,100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Translucent_Concrete.png alt="Translucent Concrete" title="Translucent Concrete" align=absmiddle> 330</td>
<td class="padded" align=center><img src=/FoE/images/Genome_Data.png alt="Genome Data" title="Genome Data" align=absmiddle> 430</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Physical Security</td>
<td class="padded" align=center></td>
</tr>

<tr class="te bold index">
<td align=center><input type="checkbox" name="240" id="240" data-obj='{"depend":[237],"Smart Materials":"340","Plastics":"550","FP":"90","Coins":"600000","Supplies":"700000"}'></td>
<td class="padded">Off-Road Tactics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 90</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 600,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 700,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Smart_Materials.png alt="Smart Materials" title="Smart Materials" align=absmiddle> 340</td>
<td class="padded" align=center><img src=/FoE/images/Plastics.png alt="Plastics" title="Plastics" align=absmiddle> 550</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Physical Security</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="241" id="241" data-obj='{"depend":[240,238,239],"Preservatives":"300","Industrial Filters":"190","FP":"133","Coins":"860000","Supplies":"2500100"}'></td>
<td class="padded">Clean Energy</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 133</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 860,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,500,100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Preservatives.png alt="Preservatives" title="Preservatives" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Industrial_Filters.png alt="Industrial Filters" title="Industrial Filters" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Off-Road Tactics<br>Land Reclamation<br>Surveillance</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="242" id="242" data-obj='{"depend":[241],"Gas":"410","Papercrete":"330","FP":"71","Coins":"250000","Supplies":"970000"}'></td>
<td class="padded">Low-Temp Science</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 71</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 250,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 970,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gas.png alt="Gas" title="Gas" align=absmiddle> 410</td>
<td class="padded" align=center><img src=/FoE/images/Papercrete.png alt="Papercrete" title="Papercrete" align=absmiddle> 330</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Clean Energy</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="243" id="243" data-obj='{"depend":[241],"Genome Data":"150","Bionics Data":"320","FP":"112","Coins":"1500000","Supplies":"3200000"}'></td>
<td class="padded">Biochemistry</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 112</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,500,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Genome_Data.png alt="Genome Data" title="Genome Data" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Bionics_Data.png alt="Bionics Data" title="Bionics Data" align=absmiddle> 320</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Clean Energy</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="244" id="244" data-obj='{"depend":[241],"Electromagnets":"420","Smart Materials":"380","FP":"77","Supplies":"1800000"}'></td>
<td class="padded">Earth Science</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 77</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Electromagnets.png alt="Electromagnets" title="Electromagnets" align=absmiddle> 420</td>
<td class="padded" align=center><img src=/FoE/images/Smart_Materials.png alt="Smart Materials" title="Smart Materials" align=absmiddle> 380</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Clean Energy</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="245" id="245" data-obj='{"depend":[241],"Translucent Concrete":"320","Robots":"420","FP":"103","Coins":"110000","Supplies":"1700000"}'></td>
<td class="padded">Tidal Power</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 103</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 110,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,700,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Translucent_Concrete.png alt="Translucent Concrete" title="Translucent Concrete" align=absmiddle> 320</td>
<td class="padded" align=center><img src=/FoE/images/Robots.png alt="Robots" title="Robots" align=absmiddle> 420</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Clean Energy</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="246" id="246" data-obj='{"depend":[242],"Bionics Data":"290","Smart Materials":"500","FP":"97","Coins":"725000","Supplies":"2100000"}'></td>
<td class="padded">Anti-Gravitation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 97</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 725,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,100,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bionics_Data.png alt="Bionics Data" title="Bionics Data" align=absmiddle> 290</td>
<td class="padded" align=center><img src=/FoE/images/Smart_Materials.png alt="Smart Materials" title="Smart Materials" align=absmiddle> 500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Low-Temp Science</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="247" id="247" data-obj='{"depend":[243,244],"Semiconductors":"200","Plastics":"400","FP":"109","Coins":"200000","Supplies":"1200000"}'></td>
<td class="padded">Quantum Communication</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 109</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Plastics.png alt="Plastics" title="Plastics" align=absmiddle> 400</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Biochemistry<br>Earth Science</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="248" id="248" data-obj='{"depend":[243,244],"Steel":"300","Purified Water":"100","FP":"95","Coins":"1000000","Supplies":"950000"}'></td>
<td class="padded">Underground Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 95</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 950,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Steel.png alt="Steel" title="Steel" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Purified_Water.png alt="Purified Water" title="Purified Water" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Biochemistry<br>Earth Science</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="249" id="249" data-obj='{"depend":[244,245],"Electromagnets":"420","Nanoparticles":"115","FP":"73","Coins":"1200000","Supplies":"120000"}'></td>
<td class="padded">Climate Control</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 73</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 120,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Electromagnets.png alt="Electromagnets" title="Electromagnets" align=absmiddle> 420</td>
<td class="padded" align=center><img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> 115</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Earth Science<br>Tidal Power</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="250" id="250" data-obj='{"depend":[246],"Semiconductors":"240","Superconductor":"185","FP":"108","Coins":"4000500","Supplies":"1100000"}'></td>
<td class="padded">Gravity Fields</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 108</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,000,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,100,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Semiconductors.png alt="Semiconductors" title="Semiconductors" align=absmiddle> 240</td>
<td class="padded" align=center><img src=/FoE/images/Superconductor.png alt="Superconductor" title="Superconductor" align=absmiddle> 185</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Anti-Gravitation</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="251" id="251" data-obj='{"depend":[248,249],"Nutrition Research":"520","Algae":"190","FP":"109","Coins":"470000","Supplies":"2500000"}'></td>
<td class="padded">Food Engineering</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 109</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 470,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nutrition_Research.png alt="Nutrition Research" title="Nutrition Research" align=absmiddle> 520</td>
<td class="padded" align=center><img src=/FoE/images/Algae.png alt="Algae" title="Algae" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Underground Houses<br>Climate Control</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="252" id="252" data-obj='{"depend":[250,251],"Translucent Concrete":"400","Plastics":"390","FP":"57","Supplies":"600500"}'></td>
<td class="padded">Solar Roads</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 57</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 600,500</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Translucent_Concrete.png alt="Translucent Concrete" title="Translucent Concrete" align=absmiddle> 400</td>
<td class="padded" align=center><img src=/FoE/images/Plastics.png alt="Plastics" title="Plastics" align=absmiddle> 390</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Gravity Fields<br>Food Engineering</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="253" id="253" data-obj='{"depend":[252],"Renewable Resources":"450","Biogeochemical Data":"170","FP":"77","Coins":"1100000","Supplies":"1010100"}'></td>
<td class="padded">Terraforming</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 77</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,010,100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Renewable_Resources.png alt="Renewable Resources" title="Renewable Resources" align=absmiddle> 450</td>
<td class="padded" align=center><img src=/FoE/images/Biogeochemical_Data.png alt="Biogeochemical Data" title="Biogeochemical Data" align=absmiddle> 170</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Solar Roads</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="254" id="254" data-obj='{"depend":[252],"Industrial Filters":"170","Purified Water":"280","FP":"119","Coins":"1000500","Supplies":"850000"}'></td>
<td class="padded">Xenomineralogy</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 119</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,000,500</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 850,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Industrial_Filters.png alt="Industrial Filters" title="Industrial Filters" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/Purified_Water.png alt="Purified Water" title="Purified Water" align=absmiddle> 280</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Solar Roads</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="255" id="255" data-obj='{"depend":[252],"Preservatives":"300","Nanoparticles":"160","FP":"91","Coins":"350000","Supplies":"2000300"}'></td>
<td class="padded">Self-Supporting Homes</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 91</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 350,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,000,300</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Preservatives.png alt="Preservatives" title="Preservatives" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Solar Roads</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="256" id="256" data-obj='{"depend":[252],"Robots":"490","Genome Data":"300","FP":"74","Coins":"2000000","Supplies":"3010000"}'></td>
<td class="padded">Human-Machine Interface</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 74</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,010,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Robots.png alt="Robots" title="Robots" align=absmiddle> 490</td>
<td class="padded" align=center><img src=/FoE/images/Genome_Data.png alt="Genome Data" title="Genome Data" align=absmiddle> 300</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Solar Roads</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="257" id="257" data-obj='{"depend":[253,254],"Papercrete":"445","Nanoparticles":"190","FP":"84","Coins":"3150000","Supplies":"1010100"}'></td>
<td class="padded">Precise Forecasting</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 84</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,150,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,010,100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Papercrete.png alt="Papercrete" title="Papercrete" align=absmiddle> 445</td>
<td class="padded" align=center><img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Terraforming<br>Xenomineralogy</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="258" id="258" data-obj='{"depend":[254,255],"Bionics Data":"425","Superconductor":"240","FP":"118","Coins":"1010100","Supplies":"1010100"}'></td>
<td class="padded">Orbital Networks</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 118</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,010,100</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,010,100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bionics_Data.png alt="Bionics Data" title="Bionics Data" align=absmiddle> 425</td>
<td class="padded" align=center><img src=/FoE/images/Superconductor.png alt="Superconductor" title="Superconductor" align=absmiddle> 240</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Xenomineralogy<br>Self-Supporting Homes</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="259" id="259" data-obj='{"depend":[255,256],"Preservatives":"340","Biogeochemical Data":"280","FP":"98","Coins":"600000","Supplies":"800000"}'></td>
<td class="padded">Arcologies</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 98</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 600,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Preservatives.png alt="Preservatives" title="Preservatives" align=absmiddle> 340</td>
<td class="padded" align=center><img src=/FoE/images/Biogeochemical_Data.png alt="Biogeochemical Data" title="Biogeochemical Data" align=absmiddle> 280</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Self-Supporting Homes<br>Human-Machine Interface</td>
<td class="padded" align=center></td>
</tr>

<tr class="fe bold index">
<td align=center><input type="checkbox" name="260" id="260" data-obj='{"depend":[257,258,259],"Gas":"505","Algae":"270","FP":"82","Coins":"1650000","Supplies":"750000"}'></td>
<td class="padded">Extended Gausian Distribution</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 82</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,650,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 750,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gas.png alt="Gas" title="Gas" align=absmiddle> 505</td>
<td class="padded" align=center><img src=/FoE/images/Algae.png alt="Algae" title="Algae" align=absmiddle> 270</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Precise Forecasting<br>Orbital Networks<br>Arcologies</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="261" id="261" data-obj='{"depend":[260],"Biogeochemical Data":"220","Purified Water":"180","FP":"130","Coins":"2100000","Supplies":"1850000"}'></td>
<td class="padded">Arctic Harvest</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 130</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,850,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biogeochemical_Data.png alt="Biogeochemical Data" title="Biogeochemical Data" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Purified_Water.png alt="Purified Water" title="Purified Water" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Extended Gausian Distribution</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="262" id="262" data-obj='{"depend":[261],"Nanoparticles":"210","Superconductor":"300","FP":"115","Coins":"1200000","Supplies":"2700000"}'></td>
<td class="padded">Nanotubes</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 115</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,700,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> 210</td>
<td class="padded" align=center><img src=/FoE/images/Superconductor.png alt="Superconductor" title="Superconductor" align=absmiddle> 300</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arctic Harvest</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="263" id="263" data-obj='{"depend":[261],"Nutrition Research":"320","Algae":"140","FP":"108","Coins":"1600000","Supplies":"1800000"}'></td>
<td class="padded">Bioplastics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 108</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,600,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nutrition_Research.png alt="Nutrition Research" title="Nutrition Research" align=absmiddle> 320</td>
<td class="padded" align=center><img src=/FoE/images/Algae.png alt="Algae" title="Algae" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arctic Harvest</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="264" id="264" data-obj='{"depend":[261],"Robots":"420","Superconductor":"160","FP":"122","Coins":"1010101","Supplies":"1010010"}'></td>
<td class="padded">A.I. Research</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 122</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,010,101</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,010,010</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Robots.png alt="Robots" title="Robots" align=absmiddle> 420</td>
<td class="padded" align=center><img src=/FoE/images/Superconductor.png alt="Superconductor" title="Superconductor" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arctic Harvest</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="265" id="265" data-obj='{"depend":[262,263],"Gas":"390","Purified Water":"260","FP":"138","Coins":"2200000","Supplies":"950000"}'></td>
<td class="padded">Advanced Transesterification</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 138</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 950,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Gas.png alt="Gas" title="Gas" align=absmiddle> 390</td>
<td class="padded" align=center><img src=/FoE/images/Purified_Water.png alt="Purified Water" title="Purified Water" align=absmiddle> 260</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Nanotubes<br>Bioplastics</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="266" id="266" data-obj='{"depend":[264,263],"Papercrete":"330","Algae":"250","FP":"136","Supplies":"3000000"}'></td>
<td class="padded">Organic Conduction</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 136</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Papercrete.png alt="Papercrete" title="Papercrete" align=absmiddle> 330</td>
<td class="padded" align=center><img src=/FoE/images/Algae.png alt="Algae" title="Algae" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>A.I. Research<br>Bioplastics</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="267" id="267" data-obj='{"depend":[266],"Bionics Data":"480","AI Data":"180","FP":"158","Coins":"2561024","Supplies":"2048128"}'></td>
<td class="padded">Mind-Controlled Robots</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 158</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,561,024</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,048,128</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bionics_Data.png alt="Bionics Data" title="Bionics Data" align=absmiddle> 480</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Organic Conduction</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="268" id="268" data-obj='{"depend":[266,265],"Biogeochemical Data":"240","Paper Batteries":"140","FP":"140","Coins":"2800000","Supplies":"2200000"}'></td>
<td class="padded">Advanced Homokinetic Joints</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 140</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,800,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biogeochemical_Data.png alt="Biogeochemical Data" title="Biogeochemical Data" align=absmiddle> 240</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Organic Conduction<br>Advanced Transesterification</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="269" id="269" data-obj='{"depend":[267,268],"Nanoparticles":"220","Bioplastics":"200","FP":"118","Coins":"1000000","Supplies":"1800000"}'></td>
<td class="padded">Mobile Houses</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 118</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mind-Controlled Robots<br>Advanced Homokinetic Joints</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="270" id="270" data-obj='{"depend":[269],"Nanowire":"170","Transester Gas":"190","FP":"135","Coins":"2500000","Supplies":"2000000"}'></td>
<td class="padded">Rare Earth Elements</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 135</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,500,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mobile Houses</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="271" id="271" data-obj='{"depend":[270],"Bioplastics":"150","Transester Gas":"180","FP":"122","Coins":"2000000","Supplies":"1000000"}'></td>
<td class="padded">Promethium Extraction</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 122</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Rare Earth Elements</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="272" id="272" data-obj='{"depend":[271],"Nanowire":"200","Paper Batteries":"200","FP":"134","Coins":"3200000","Supplies":"2400000"}'></td>
<td class="padded">String Rail System</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 134</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,400,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Promethium Extraction</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="273" id="273" data-obj='{"depend":[271],"AI Data":"150","FP":"118","Coins":"2300000","Supplies":"1800000","Promethium":"150"}'></td>
<td class="padded">Combined Weapon Systems</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 118</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,300,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 150</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Promethium Extraction</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="274" id="274" data-obj='{"depend":[272,273],"Bioplastics":"160","FP":"138","Coins":"1800000","Supplies":"3000000","Promethium":"260"}'></td>
<td class="padded">Clock Tower Apartments</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 138</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,800,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 160</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 260</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>String Rail System<br>Combined Weapon Systems</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="275" id="275" data-obj='{"depend":[273],"Nanowire":"180","Transester Gas":"160","FP":"98","Coins":"500000","Supplies":"500000"}'></td>
<td class="padded">Advanced Hydroponics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 98</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 500,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Combined Weapon Systems</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="276" id="276" data-obj='{"depend":[274],"AI Data":"210","FP":"156","Coins":"3000000","Supplies":"2600000","Promethium":"350"}'></td>
<td class="padded">Arctic Navigation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 156</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,600,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 210</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 350</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Clock Tower Apartments</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="277" id="277" data-obj='{"depend":[276],"Paper Batteries":"160","FP":"144","Coins":"2800000","Supplies":"3200000","Promethium":"380"}'></td>
<td class="padded">Arctic Stations</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 144</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,800,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 160</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 380</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arctic Navigation</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="278" id="278" data-obj='{"depend":[277],"Nanowire":"200","Paper Batteries":"120","FP":"124","Coins":"1800000","Supplies":"2000000"}'></td>
<td class="padded">Improved Logistics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 124</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,800,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 120</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arctic Stations</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="279" id="279" data-obj='{"depend":[277],"Transester Gas":"80","AI Data":"80","FP":"78","Coins":"450000","Supplies":"450000"}'></td>
<td class="padded">Artificial Snowflakes</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 78</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 450,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 450,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 80</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 80</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arctic Stations</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="280" id="280" data-obj='{"depend":[277],"Purified Water":"300","FP":"142","Coins":"2500000","Supplies":"1000000","Promethium":"260"}'></td>
<td class="padded">Swarm Control Methods</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 142</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,500,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Purified_Water.png alt="Purified Water" title="Purified Water" align=absmiddle> 300</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 260</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arctic Stations</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="281" id="281" data-obj='{"depend":[278,280],"Superconductor":"280","FP":"136","Coins":"2200000","Supplies":"2800000","Promethium":"200"}'></td>
<td class="padded">Arctic Cargo</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 136</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Superconductor.png alt="Superconductor" title="Superconductor" align=absmiddle> 280</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Improved Logistics<br>Swarm Control Methods</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="282" id="282" data-obj='{"depend":[280],"Algae":"300","FP":"108","Coins":"3000000","Supplies":"1000000","Promethium":"320"}'></td>
<td class="padded">Eco-Urban Lifestyle</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 108</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Algae.png alt="Algae" title="Algae" align=absmiddle> 300</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 320</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Swarm Control Methods</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="283" id="283" data-obj='{"depend":[281,282],"Nanoparticles":"280","FP":"150","Coins":"1600000","Supplies":"25  <meta http-equiv="refresh" content="5; URL=https://www.bitdegree.org/" />00000","Promethium":"300"}'></td>
<td class="padded">Regenerative Methods</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,600,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> 280</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 300</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arctic Cargo<br>Eco-Urban Lifestyle</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="284" id="284" data-obj='{"depend":[281],"Biogeochemical Data":"260","Bioplastics":"180","FP":"144","Coins":"2600000","Supplies":"2200000"}'></td>
<td class="padded">Biological Transmission</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 144</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,600,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biogeochemical_Data.png alt="Biogeochemical Data" title="Biogeochemical Data" align=absmiddle> 260</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Arctic Cargo</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="285" id="285" data-obj='{"depend":[283,284],"Transester Gas":"120","FP":"158","Coins":"2100000","Supplies":"3000000","Promethium":"280"}'></td>
<td class="padded">Extreme Weather Prevention</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 158</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,100,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 120</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 280</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Regenerative Methods<br>Biological Transmission</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="286" id="286" data-obj='{"depend":[285],"Nanowire":"160","FP":"132","Coins":"2200000","Supplies":"1800000","Promethium":"300"}'></td>
<td class="padded">Plasma Spectroscopy</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 132</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,200,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 160</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 300</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Extreme Weather Prevention</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="287" id="287" data-obj='{"depend":[285],"Paper Batteries":"140","FP":"146","Coins":"2600000","Supplies":"1000000","Promethium":"220"}'></td>
<td class="padded">Arctic Mining</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 146</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,600,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 140</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 220</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Extreme Weather Prevention</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="288" id="288" data-obj='{"depend":[286,287],"Transester Gas":"200","FP":"118","Coins":"1000000","Supplies":"2200000","Promethium":"320"}'></td>
<td class="padded">Crystal Villas</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 118</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 200</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 320</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Plasma Spectroscopy<br>Arctic Mining</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="289" id="289" data-obj='{"depend":[288],"AI Data":"140","Bioplastics":"100","FP":"112","Coins":"1600000","Supplies":"1600000"}'></td>
<td class="padded">Frost Immunity</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 112</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,600,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 1,600,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 140</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Crystal Villas</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="290" id="290" data-obj='{"depend":[288],"Bioplastics":"120","FP":"142","Coins":"1800000","Supplies":"2600000","Promethium":"250"}'></td>
<td class="padded">Cryo Botany</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 142</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 1,800,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,600,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 120</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Crystal Villas</td>
<td class="padded" align=center></td>
</tr>

<tr class="afe bold index">
<td align=center><input type="checkbox" name="291" id="291" data-obj='{"depend":[288],"AI Data":"160","FP":"154","Coins":"2400000","Supplies":"2500000","Promethium":"350"}'></td>
<td class="padded">Superheavy Warmachines</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 154</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 2,400,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 2,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 160</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 350</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Crystal Villas</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="292" id="292" data-obj='{"depend":[289,290,291],"Paper Batteries":"150","FP":"140","Coins":"3000000","Supplies":"3200000","Promethium":"200"}'></td>
<td class="padded">Subaqueous Construction</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 140</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 3,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 3,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 150</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Frost Immunity<br>Cryo Botany<br>Superheavy Warmachines</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="293" id="293" data-obj='{"depend":[292],"Translucent Concrete":"280","FP":"145","Coins":"4500000","Supplies":"4600000","Promethium":"180"}'></td>
<td class="padded">Nano Habitat</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 145</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 4,500,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 4,600,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Translucent_Concrete.png alt="Translucent Concrete" title="Translucent Concrete" align=absmiddle> 280</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Subaqueous Construction</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="294" id="294" data-obj='{"depend":[292],"Nanoparticles":"170","AI Data":"160","FP":"149","Coins":"5000000","Promethium":"180"}'></td>
<td class="padded">Engineered Nuclei</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 149</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Subaqueous Construction</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="295" id="295" data-obj='{"depend":[292],"Nutrition Research":"200","Algae":"180","FP":"153","Supplies":"5200000"}'></td>
<td class="padded">Coral Propagation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 153</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,200,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nutrition_Research.png alt="Nutrition Research" title="Nutrition Research" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Algae.png alt="Algae" title="Algae" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Subaqueous Construction</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="296" id="296" data-obj='{"depend":[292],"Smart Materials":"150","Biogeochemical Data":"170","FP":"151","Coins":"5800000","Promethium":"200"}'></td>
<td class="padded">Hardened Scales</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 151</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,800,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Smart_Materials.png alt="Smart Materials" title="Smart Materials" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Biogeochemical_Data.png alt="Biogeochemical Data" title="Biogeochemical Data" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Subaqueous Construction</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="297" id="297" data-obj='{"depend":[292],"Purified Water":"210","Transester Gas":"160","FP":"149","Coins":"5600000"}'></td>
<td class="padded">Oxygen Lens</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 149</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,600,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Purified_Water.png alt="Purified Water" title="Purified Water" align=absmiddle> 210</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Subaqueous Construction</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="298" id="298" data-obj='{"depend":[293,294],"Preservatives":"140","Algae":"160","FP":"138","Promethium":"190"}'></td>
<td class="padded">Shellfish Aquaculture</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 138</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Preservatives.png alt="Preservatives" title="Preservatives" align=absmiddle> 140</td>
<td class="padded" align=center><img src=/FoE/images/Algae.png alt="Algae" title="Algae" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Nano Habitat<br>Engineered Nuclei</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="299" id="299" data-obj='{"depend":[294,295],"Superconductor":"220","Bioplastics":"100","FP":"154","Promethium":"170"}'></td>
<td class="padded">Subaquatic Filters</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 154</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Superconductor.png alt="Superconductor" title="Superconductor" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 170</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Engineered Nuclei<br>Coral Propagation</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="300" id="300" data-obj='{"depend":[296,297],"Purified Water":"200","Artificial Scales":"100","FP":"166","Supplies":"5700000","Promethium":"210"}'></td>
<td class="padded">Hydrodynamics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 166</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 5,700,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Purified_Water.png alt="Purified Water" title="Purified Water" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 210</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Hardened Scales<br>Oxygen Lens</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="301" id="301" data-obj='{"depend":[298],"Smart Materials":"170","Paper Batteries":"230","FP":"150","Coins":"5900000","Promethium":"180"}'></td>
<td class="padded">High Range Sonar</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 5,900,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Smart_Materials.png alt="Smart Materials" title="Smart Materials" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 230</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Shellfish Aquaculture</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="302" id="302" data-obj='{"depend":[298,299],"Biogeochemical Data":"130","Bioplastics":"120","FP":"148","Promethium":"190"}'></td>
<td class="padded">Personal Paradise</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 148</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biogeochemical_Data.png alt="Biogeochemical Data" title="Biogeochemical Data" align=absmiddle> 130</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 120</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Shellfish Aquaculture<br>Subaquatic Filters</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="303" id="303" data-obj='{"depend":[300],"Papercrete":"250","Transester Gas":"100","FP":"168","Supplies":"6000000"}'></td>
<td class="padded">Controlled Lightning</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 168</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 6,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Papercrete.png alt="Papercrete" title="Papercrete" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 100</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Hydrodynamics</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="304" id="304" data-obj='{"depend":[301,302],"Preservatives":"180","Nanoparticles":"160","FP":"137","Promethium":"180"}'></td>
<td class="padded">Mechanical Claws</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 137</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Preservatives.png alt="Preservatives" title="Preservatives" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>High Range Sonar<br>Personal Paradise</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="305" id="305" data-obj='{"depend":[303],"Biogeochemical Data":"170","AI Data":"160","FP":"160","Supplies":"6500000"}'></td>
<td class="padded">Laser Rust Removal</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 6,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biogeochemical_Data.png alt="Biogeochemical Data" title="Biogeochemical Data" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 160</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Controlled Lightning</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="306" id="306" data-obj='{"depend":[304,305],"Nanowire":"200","Plankton":"150","FP":"172","Coins":"6300000","Promethium":"200"}'></td>
<td class="padded">Flotation Surfactants</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 172</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 6,300,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Mechanical Claws<br>Laser Rust Removal</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="307" id="307" data-obj='{"depend":[306],"Paper Batteries":"200","Artificial Scales":"150","FP":"180","Supplies":"6600000","Promethium":"200"}'></td>
<td class="padded">Biomimetic Armor</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 6,600,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Flotation Surfactants</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="308" id="308" data-obj='{"depend":[306],"AI Data":"150","Transester Gas":"120","FP":"157","Promethium":"200"}'></td>
<td class="padded">Deep Sea Exploration</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 157</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 120</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Flotation Surfactants</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="309" id="309" data-obj='{"depend":[307],"Nanoparticles":"160","Bioplastics":"150","FP":"151"}'></td>
<td class="padded">Coral Domestication</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 151</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanoparticles.png alt="Nanoparticles" title="Nanoparticles" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Biomimetic Armor</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="310" id="310" data-obj='{"depend":[307,308],"Nanowire":"250","Paper Batteries":"180","FP":"167","Supplies":"6900000","Orichalcum":"90"}'></td>
<td class="padded">Advanced Hydrophones</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 167</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 6,900,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 90</td>
<td class="padded" align=center>Biomimetic Armor<br>Deep Sea Exploration</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="311" id="311" data-obj='{"depend":[309],"AI Data":"190","Artificial Scales":"150","FP":"169"}'></td>
<td class="padded">Ocean Colonization</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 169</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Coral Domestication</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="312" id="312" data-obj='{"depend":[309,310],"Paper Batteries":"180","Pearls":"190","FP":"175","Coins":"7000000","Orichalcum":"120"}'></td>
<td class="padded">Holographic Currency</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 175</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 7,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 120</td>
<td class="padded" align=center>Coral Domestication<br>Advanced Hydrophones</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="313" id="313" data-obj='{"depend":[310],"Superconductor":"190","Transester Gas":"140","FP":"152","Orichalcum":"130"}'></td>
<td class="padded">Maelstrom Stabilization</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 152</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Superconductor.png alt="Superconductor" title="Superconductor" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 130</td>
<td class="padded" align=center>Advanced Hydrophones</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="314" id="314" data-obj='{"depend":[311,312],"Bioplastics":"170","Pearls":"110","FP":"166","Promethium":"210","Orichalcum":"140"}'></td>
<td class="padded">Seasteading</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 166</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 110</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 210</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 140</td>
<td class="padded" align=center>Ocean Colonization<br>Holographic Currency</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="315" id="315" data-obj='{"depend":[313],"Artificial Scales":"300","FP":"175","Coins":"6800000","Supplies":"6500000","Orichalcum":"250"}'></td>
<td class="padded">Biogel Refrigeration</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 175</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 6,800,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 6,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 300</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 250</td>
<td class="padded" align=center>Maelstrom Stabilization</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="316" id="316" data-obj='{"depend":[314],"Nanowire":"160","Biolight":"180","FP":"169","Promethium":"210","Orichalcum":"140"}'></td>
<td class="padded">Geochemical Prospecting</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 169</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 210</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 140</td>
<td class="padded" align=center>Seasteading</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="317" id="317" data-obj='{"depend":[314,315],"AI Data":"220","Artificial Scales":"240","FP":"180","Supplies":"7000000","Orichalcum":"190"}'></td>
<td class="padded">Wave Farms</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 7,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 240</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 190</td>
<td class="padded" align=center>Seasteading<br>Biogel Refrigeration</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="318" id="318" data-obj='{"depend":[315],"Nanowire":"150","Biolight":"210","FP":"179","Orichalcum":"150"}'></td>
<td class="padded">Advanced Aquanautics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 179</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 210</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 150</td>
<td class="padded" align=center>Biogel Refrigeration</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="319" id="319" data-obj='{"depend":[315],"Paper Batteries":"150","Pearls":"200","FP":"176","Promethium":"100","Orichalcum":"200"}'></td>
<td class="padded">Ocean Cleaning Nanobots</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 176</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 100</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 200</td>
<td class="padded" align=center>Biogel Refrigeration</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="320" id="320" data-obj='{"depend":[316,317],"Corals":"210","FP":"173","Coins":"6900000","Promethium":"250","Orichalcum":"180"}'></td>
<td class="padded">Robotic Appendages</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 173</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 6,900,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 210</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 180</td>
<td class="padded" align=center>Geochemical Prospecting<br>Wave Farms</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="321" id="321" data-obj='{"depend":[318],"Bioplastics":"220","Plankton":"150","FP":"174"}'></td>
<td class="padded">Subaquatic Agriculture</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 174</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Advanced Aquanautics</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="322" id="322" data-obj='{"depend":[318,319],"Transester Gas":"190","Corals":"210","FP":"167","Coins":"6500000"}'></td>
<td class="padded">Oxygen Absorbing Materials</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 167</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 6,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 210</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Advanced Aquanautics<br>Ocean Cleaning Nanobots</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="323" id="323" data-obj='{"depend":[320,321],"Pearls":"180","Plankton":"170","FP":"182","Promethium":"190","Orichalcum":"140"}'></td>
<td class="padded">Aqua Therapy</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 182</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 140</td>
<td class="padded" align=center>Robotic Appendages<br>Subaquatic Agriculture</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="324" id="324" data-obj='{"depend":[321,322],"Transester Gas":"250","Pearls":"300","FP":"178","Promethium":"200","Orichalcum":"250"}'></td>
<td class="padded">Aqualoop</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 178</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 250</td>
<td class="padded" align=center>Subaquatic Agriculture<br>Oxygen Absorbing Materials</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="325" id="325" data-obj='{"depend":[323],"Corals":"220","Biolight":"190","FP":"185","Coins":"8000000","Orichalcum":"280"}'></td>
<td class="padded">Underwater Meditation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 185</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 8,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 280</td>
<td class="padded" align=center>Aqua Therapy</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="326" id="326" data-obj='{"depend":[323,324],"Plankton":"260","FP":"190","Supplies":"7700000","Promethium":"300","Orichalcum":"300"}'></td>
<td class="padded">Photovoltaic Film</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 190</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 7,700,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 260</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 300</td>
<td class="padded" align=center>Aqua Therapy<br>Aqualoop</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="327" id="327" data-obj='{"depend":[324],"Nanowire":"240","Artificial Scales":"260","FP":"176","Orichalcum":"270"}'></td>
<td class="padded">Electronic Tattoos</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 176</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 240</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 260</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 270</td>
<td class="padded" align=center>Aqualoop</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="328" id="328" data-obj='{"depend":[325,326],"Paper Batteries":"280","Corals":"250","FP":"178","Promethium":"280","Orichalcum":"200"}'></td>
<td class="padded">Nautilus Replica</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 178</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 280</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 280</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 200</td>
<td class="padded" align=center>Underwater Meditation<br>Photovoltaic Film</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="329" id="329" data-obj='{"depend":[325,326,327],"Bioplastics":"190","Plankton":"210","FP":"192","Orichalcum":"300"}'></td>
<td class="padded">Eco-exploration</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 192</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 210</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 300</td>
<td class="padded" align=center>Underwater Meditation<br>Photovoltaic Film<br>Electronic Tattoos</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="330" id="330" data-obj='{"depend":[327],"FP":"184","Coins":"9000000","Supplies":"8500000","Promethium":"400","Orichalcum":"350"}'></td>
<td class="padded">Waterfall Stock</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 184</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 9,000,000</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 8,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 400</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 350</td>
<td class="padded" align=center>Electronic Tattoos</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="331" id="331" data-obj='{"depend":[328,329],"AI Data":"160","Corals":"200","FP":"186","Orichalcum":"300"}'></td>
<td class="padded">Accelerated Shipbuilding</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 186</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 300</td>
<td class="padded" align=center>Nautilus Replica<br>Eco-exploration</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="332" id="332" data-obj='{"depend":[330],"Biolight":"200","Pearls":"220","FP":"176","Coins":"9500000","Orichalcum":"370"}'></td>
<td class="padded">Agglomeration Architecture</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 176</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 9,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 220</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 370</td>
<td class="padded" align=center>Waterfall Stock</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="333" id="333" data-obj='{"depend":[330],"Plankton":"210","Artificial Scales":"220","FP":"192","Promethium":"250","Orichalcum":"300"}'></td>
<td class="padded">Research Grant</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 192</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 210</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 300</td>
<td class="padded" align=center>Waterfall Stock</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="334" id="334" data-obj='{"depend":[331,332],"Corals":"220","Biolight":"230","FP":"174","Supplies":"9000000","Orichalcum":"320"}'></td>
<td class="padded">Pendulum Oscillation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 174</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 9,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 230</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 320</td>
<td class="padded" align=center>Accelerated Shipbuilding<br>Agglomeration Architecture</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="335" id="335" data-obj='{"depend":[332,333],"Nanowire":"150","Plankton":"230","FP":"185","Orichalcum":"300"}'></td>
<td class="padded">New Recruits</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 185</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 230</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 300</td>
<td class="padded" align=center>Agglomeration Architecture<br>Research Grant</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="336" id="336" data-obj='{"depend":[334],"Paper Batteries":"300","FP":"190","Coins":"10000000","Promethium":"300","Orichalcum":"360"}'></td>
<td class="padded">Chromatophore Synthesis</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 10,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 300</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 360</td>
<td class="padded" align=center>Pendulum Oscillation</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="337" id="337" data-obj='{"depend":[334],"Pearls":"240","Corals":"250","FP":"205","Promethium":"240","Orichalcum":"300"}'></td>
<td class="padded">Braving the Deep</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 205</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 240</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 240</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 300</td>
<td class="padded" align=center>Pendulum Oscillation</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="338" id="338" data-obj='{"depend":[335],"Artificial Scales":"210","Biolight":"210","FP":"178","Supplies":"11000000","Orichalcum":"390"}'></td>
<td class="padded">Maritime Archaeology</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 178</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 11,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 210</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 210</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 390</td>
<td class="padded" align=center>New Recruits</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="339" id="339" data-obj='{"depend":[336,337],"Plankton":"180","Corals":"220","FP":"170","Promethium":"170","Orichalcum":"280"}'></td>
<td class="padded">Advanced Heliograph</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 170</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 170</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 280</td>
<td class="padded" align=center>Chromatophore Synthesis<br>Braving the Deep</td>
<td class="padded" align=center></td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="340" id="340" data-obj='{"depend":[337,338],"Bioplastics":"200","Biolight":"210","FP":"174","Orichalcum":"330"}'></td>
<td class="padded">Lifeguarding</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 174</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Bioplastics.png alt="Bioplastics" title="Bioplastics" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 210</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 330</td>
<td class="padded" align=center>Braving the Deep<br>Maritime Archaeology</td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="341" id="341" data-obj='{"depend":[339],"Pearls":"230","Artificial Scales":"280","FP":"195","Coins":"11000000","Orichalcum":"360"}'></td>
<td class="padded">Enhanced Streamlining</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 195</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 11,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 230</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 280</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 360</td>
<td class="padded" align=center>Advanced Heliograph</td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="342" id="342" data-obj='{"depend":[339,340],"Corals":"240","FP":"180","Supplies":"10000000","Promethium":"300","Orichalcum":"270"}'></td>
<td class="padded">Aquabotanics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 10,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 240</td>
<td class="padded" align=center> &nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 270</td>
<td class="padded" align=center>Advanced Heliograph<br>Lifeguarding</td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="343" id="343" data-obj='{"depend":[340],"Transester Gas":"340","Artificial Scales":"250","FP":"178","Supplies":"11000000","Orichalcum":"380"}'></td>
<td class="padded">Marine Engineering</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 178</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 11,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Transester_Gas.png alt="Transester Gas" title="Transester Gas" align=absmiddle> 340</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 380</td>
<td class="padded" align=center>Lifeguarding</td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="344" id="344" data-obj='{"depend":[341],"Biolight":"320","Pearls":"270","FP":"220","Coins":"11500000","Promethium":"390"}'></td>
<td class="padded">Aqua Terraforming</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 11,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 320</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 270</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 390</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Enhanced Streamlining</td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="345" id="345" data-obj='{"depend":[342,343],"AI Data":"210","Plankton":"240","FP":"198","Promethium":"280","Orichalcum":"250"}'></td>
<td class="padded">Accelerated Breaching</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 198</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/AI_Data.png alt="AI Data" title="AI Data" align=absmiddle> 210</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 240</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 280</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 250</td>
<td class="padded" align=center>Aquabotanics<br>Marine Engineering</td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="346" id="346" data-obj='{"depend":[344,345],"Nanowire":"320","Corals":"280","FP":"200","Coins":"12500000","Orichalcum":"400"}'></td>
<td class="padded">Deepwater Drilling</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 12,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Nanowire.png alt="Nanowire" title="Nanowire" align=absmiddle> 320</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 280</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 400</td>
<td class="padded" align=center>Aqua Terraforming<br>Accelerated Breaching</td>
</tr>

<tr class="ofe bold index">
<td align=center><input type="checkbox" name="347" id="347" data-obj='{"depend":[345],"Paper Batteries":"300","Plankton":"250","FP":"210","Supplies":"12000000","Promethium":"290"}'></td>
<td class="padded">Oceanic Preservation</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 210</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 12,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Paper_Batteries.png alt="Paper Batteries" title="Paper Batteries" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 290</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Accelerated Breaching</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="348" id="348" data-obj='{"depend":[346,347],"Biolight":"200","Plankton":"150","FP":"180","Coins":"15000000","Promethium":"170"}'></td>
<td class="padded">3D Photon Emitters</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 15,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 170</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Deepwater Drilling<br>Oceanic Preservation</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="349" id="349" data-obj='{"depend":[348],"Pearls":"150","Corals":"200","FP":"195","Coins":"18000000","Orichalcum":"180"}'></td>
<td class="padded">Smart Fabrics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 195</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 18,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 180</td>
<td class="padded" align=center>3D Photon Emitters</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="350" id="350" data-obj='{"depend":[348],"Pearls":"190","Artificial Scales":"200","FP":"205","Supplies":"18000000","Promethium":"220"}'></td>
<td class="padded">Pico Computing</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 205</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 18,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 220</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>3D Photon Emitters</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="351" id="351" data-obj='{"depend":[348],"Biolight":"260","Corals":"170","FP":"200","Orichalcum":"250"}'></td>
<td class="padded">Trinary Information Engraving</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 260</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 170</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 250</td>
<td class="padded" align=center>3D Photon Emitters</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="352" id="352" data-obj='{"depend":[350],"Artifical Scales":"280","Corals":"220","FP":"200","Coins":"19,500,000","Orichalcum":"150"}'></td>
<td class="padded">Reliable Hash Generators</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 19,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 280</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 220</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 150</td>
<td class="padded" align=center>Pico Computing</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="353" id="353" data-obj='{"depend":[350],"Biolight":"180","Corals":"200","FP":"240","Coins":"20,500,000","Promethium":"150"}'></td>
<td class="padded">Accelerated Food Engineering</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 240</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 20,500,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Pico Computing</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="354" id="354" data-obj='{"depend":[350],"Pearls":"250","Plankton":"280","FP":"210","Supplies":"25,000,000","Data Crystals":"140"}'></td>
<td class="padded">Compounding Robotics</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 210</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 25,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 280</td>
<td class="padded" align=center><img src=/FoE/images/Data_Crystals.png alt="Data Crystals" title="Data Crystals" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Pico Computing</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="355" id="355" data-obj='{"depend":[351],"Artificial Scales":"230","Corals":"250","FP":"220","Coins":"20,700,000","Cryptocash":"130"}'></td>
<td class="padded">Quantum Photogrammetry</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 220</td>
<td class="padded" align=center><img src=/FoE/images/Coins.png alt="Coins" title="Coins" align=absmiddle> 20,700,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 230</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Cryptocash.png alt="Cryptocash" title="Cryptocash" align=absmiddle> 130</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Trinary Information Engraving</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="356" id="356" data-obj='{"depend":[352,353,354],"Biolight":"250","Tea Silk":"160","FP":"245","Supplies":"19,000,000","Golden_Rice":"140"}'></td>
<td class="padded">Secured VR Domains</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 245</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Supplies.png alt="Supplies" title="Supplies" align=absmiddle> 19,000,000</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 250</td>
<td class="padded" align=center><img src=/FoE/images/Tea_Silk.png alt="Tea Silk" title="Tea Silk" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Golden_Rice.png alt="Golden Rice" title="Golden Rice" align=absmiddle> 140</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Reliable Hash Generators<br>Accelerated Food Engineering<br>Compounding Robotics</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="357" id="357" data-obj='{"depend":[354],"Pearls":"300","Tea Silk":"150","FP":"235","Data Crystals":"150","Orichalcum":"180"}'></td>
<td class="padded">Energy Preserving Surfaces</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 235</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Pearls.png alt="Pearls" title="Pearls" align=absmiddle> 300</td>
<td class="padded" align=center><img src=/FoE/images/Tea_Silk.png alt="Tea Silk" title="Tea Silk" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Data_Crystals.png alt="Data Crystals" title="Data Crystals" align=absmiddle> 150</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 180</td>
<td class="padded" align=center>Compounding Robotics</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="358" id="358" data-obj='{"depend":[355],"Artificial Scales":"280","Golden Rice":"180","FP":"240","Data Crystals":"120","Orichalcum":"210"}'></td>
<td class="padded">Public Emitters</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 240</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Artificial_Scales.png alt="Artificial Scales" title="Artificial Scales" align=absmiddle> 280</td>
<td class="padded" align=center><img src=/FoE/images/Golden_Rice.png alt="Golden Rice" title="Golden Rice" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Data_Crystals.png alt="Data Crystals" title="Data Crystals" align=absmiddle> 120</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 210</td>
<td class="padded" align=center>Quantum Photogrammetry</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="359" id="359" data-obj='{"depend":[356,357],"Corals":"230","Nanites":"180","FP":"250","Cryptocash":"200","Promethium":"210"}'></td>
<td class="padded">Codex of Honor 2.0</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Corals.png alt="Corals" title="Corals" align=absmiddle> 230</td>
<td class="padded" align=center><img src=/FoE/images/Nanites.png alt="Nanites" title="Nanites" align=absmiddle> 180</td>
<td class="padded" align=center><img src=/FoE/images/Cryptocash.png alt="Cryptocash" title="Cryptocash" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 210</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Secured VR Domains<br>Energy Preserving Surfaces</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="360" id="360" data-obj='{"depend":[357],"Plankton":"200","Nanites":"160","FP":"250","Cryptocash":"180","Orichalcum":"210"}'></td>
<td class="padded">Responsive Holo-Enterainment</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 250</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 200</td>
<td class="padded" align=center><img src=/FoE/images/Nanites.png alt="Nanites" title="Nanites" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Cryptocash.png alt="Cryptocash" title="Cryptocash" align=absmiddle> 180</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 210</td>
<td class="padded" align=center>Energy Preserving Surfaces</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="361" id="361" data-obj='{"depend":[358],"Plankton":"290","Golden Rice":"160","FP":"256","Tea Silk":"200","Orichalcum":"260"}'></td>
<td class="padded">Noise-Cancelling Concrete</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 256</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Plankton.png alt="Plankton" title="Plankton" align=absmiddle> 290</td>
<td class="padded" align=center><img src=/FoE/images/Golden_Rice.png alt="Golden Rice" title="Golden Rice" align=absmiddle> 160</td>
<td class="padded" align=center><img src=/FoE/images/Tea_Silk.png alt="Tea Silk" title="Tea Silk" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Orichalcum.png alt="Orichalcum" title="Orichalcum" align=absmiddle> 260</td>
<td class="padded" align=center>Public Emitters</td>
</tr>
<tr class="vfe bold index">
<td align=center><input type="checkbox" name="362" id="362" data-obj='{"depend":[359,360,361],"Biolight":"230","Nanites":"190","FP":"270","Data Crystals":"150","Promethium":"200"}'></td>
<td class="padded">Cybernetically Augmented Ninjutsu</td>
<td class="padded" align=center><img src=/FoE/images/FP.png alt="Forge Points" title="Forge Points" align=absmiddle> 270</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center><img src=/FoE/images/Biolight.png alt="Biolight" title="Biolight" align=absmiddle> 230</td>
<td class="padded" align=center><img src=/FoE/images/Nanites.png alt="Nanites" title="Nanites" align=absmiddle> 190</td>
<td class="padded" align=center><img src=/FoE/images/Data_Crystals.png alt="Data Crystals" title="Data Crystals" align=absmiddle> 150</td>
<td class="padded" align=center><img src=/FoE/images/Promethium.png alt="Promethium" title="Promethium" align=absmiddle> 200</td>
<td class="padded" align=center>&nbsp;</td>
<td class="padded" align=center>Codex of Honor 2.0<br>Responsive Holo-Enterainment<br>Noise-Cancelling Concrete</td>
</tr>
</table>
</body>
</html>
