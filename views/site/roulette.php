
<?php use yii\helpers\Url; ?>

<div id="copy"><canvas style="border:2px solid black;display:none ;" id="ggg" width="50" height="50"></canvas></div>
<input type="hidden" id="us" value="<?php echo $id; ?>">


<div id="top">


    <img id="r" src="<?php echo Url::to('@img/btn_top.png'); ?>" width="40px" height="40px" style="display:none;right:50%;bottom:380px;position:absolute;z-index:5;">
    <img id="l" src="<?php echo Url::to('@img/btn_dwn.png'); ?>" >

    <div class="roul" style="height: 100%;width: 100%" >		<!-- v daln ubr/displ.none -->
			
		<iframe width="100%"  style="margin-top:50px;" height="100%" src="https://www.youtube.com/embed/UPYT7cJkaZo" frameborder="0" allowfullscreen></iframe>
					
	</div>


	<div class="roul" style="position: absolute;top:0px;z-index: 10"><iframe width="520px" height="330px"  src="https://www.youtube.com/embed/UPYT7cJkaZo" frameborder="0" allowfullscreen></iframe></div>
    <!--<img style="user-select: none; cursor: zoom-in;top:2000px;" src="http://192.168.1.150:8092/webcam3.mjpeg" width="100%" height="100%">
    -->
</div>



<div  style="position: absolute;top:40%;left:380px;z-index: 25;">
									<div>
										
											<div id="message" style="width: 600px; display: none; border-radius: 5px; font-size: 30px;color:red;background-color: white;text-align: center;"></div>
											<div id="message2" style="display:none;border-radius: 5px; font-size: 20px;color:red;background-color: white;text-align: center;margin-left: 130px;"></div>
										
									</div>
								</div>
    



<div id="bottom" style="height:">

	<!-- <div style="position: absolute;left: 30%;top:0px;"> -->
	    <div class="col-xs-12 jjj" style="top:20px;height: 400px; background-color: white;">		<!-- post none -->

				<div class="col-xs-7 col-xs-offset-2" style="border:2px solid white;z-index: 10;">
					
				
						<input type="hidden" id="urll" value="<?php echo  Url::to("@img"); ?>/fishki">
						<input type="hidden" id="burl" value="<?php echo Url::to('@base'); ?>/site/senddata">

						<input type="hidden" id="status" value="<?php echo Url::to('@base'); ?>/site/gamestatusclient">

						<input type="hidden" id="ball" value="<?php echo Url::to('@base'); ?>/site/rouletteball">

						<input type="hidden" id="gresult" value="<?php echo Url::to('@base'); ?>/site/getresult">

						<input type="hidden" id="gbal" value="<?php echo Url::to('@base'); ?>/site/getbalans">

						<input type="hidden" id="ds" value="<?php echo Url::to('@base'); ?>/site/gamestatusdealer">

						<input type="hidden" id="repeat" value="<?php echo Url::to('@base'); ?>/site/repeatnumber">


						<div style="border:5px solid #9225D8;border-radius: 5px;width: 775px;">		<!-- obernuli stol v div -->
					
						<div class="y numb" x="0">0<div style="position: absolute;left:20px;top:20px;" count="0" class="i"></div></div>
						
						   	<div class="n9"></div>

						    <div class="y n10" x="1x12">1st 12<div style="position: absolute;left:156px;top:5px;" count="0" class="i"></div></div>

						    <div class="n11"></div>
						    	
						    <div class="y n12" x="2x12">2nd 12<div style="position: absolute;left:378px;top:5px;" count="0" class="i"></div></div>

						    <div class="n14"></div>
						    	
						    <div class="y n15" x="3x12">3rd 12<div style="position: absolute;left:596px;top:5px;" count="0" class="i"></div></div>

						    <div class="n16"></div>
						   	
							<div class="y n17" x="race"></div>
															<!-- verhnya ramka -->

							

							<div class="n19"></div>

							<div class="y n20" x="3x2x1"><div style="position: absolute;left:75px;top:33px;" count="0" class="i"></div></div>

							<div class="y n21" x="3x6x2x5x1x4"><div style="position: absolute;left:102px;top:33px;" count="0" class="i"></div></div>

							<div class="y n22" x="6x5x4"><div style="position: absolute;left:130px;top:33px;" count="0" class="i"></div></div>

							<div class="y n23" x="6x9x5x8x4x7"><div style="position: absolute;left:157px;top:33px;" count="0" class="i"></div></div>

							<div class="y n24" x="9x8x7"><div style="position: absolute;left:185px;top:33px;" count="0" class="i"></div></div>

							<div class="y n25" x="9x12x8x11x7x10"><div style="position: absolute;left:212px;top:33px;" count="0" class="i"></div></div>

							<div class="y n26" x="12x11x10"><div style="position: absolute;left:240px;top:33px;" count="0" class="i"></div></div>

							<div class="y n27" x="12x15x11x14x10x13"><div style="position: absolute;left:267px;top:33px;" count="0" class="i"></div></div>

							<div class="y n28" x="15x14x13"><div style="position: absolute;left:295px;top:33px;" count="0" class="i"></div></div>

							<div class="y n29" x="15x18x14x17x13x16"><div style="position: absolute;left:322px;top:33px;" count="0" class="i"></div></div>

							<div class="y n30" x="18x17x16"><div style="position: absolute;left:350px;top:33px;" count="0" class="i"></div></div>

							<div class="y n31" x="18x21x17x20x16x19"><div style="position: absolute;left:377px;top:33px;" count="0" class="i"></div></div>

							<div class="y n32" x="21x20x19"><div style="position: absolute;left:405px;top:33px;" count="0" class="i"></div></div>

							<div class="y n33" x="21x24x20x23x19x22"><div style="position: absolute;left:432px;top:33px;" count="0" class="i"></div></div>

							<div class="y n34" x="24x23x22"><div style="position: absolute;left:460px;top:33px;" count="0" class="i"></div></div>

							<div class="y n34_1" x="24x27x23x26x22x25"><div style="position: absolute;left:487px;top:33px;" count="0" class="i"></div></div>

							<div class="y n34_2" x="27x26x25"><div style="position: absolute;left:515px;top:33px;" count="0" class="i"></div></div>

							<div class="y n34_3" x="27x30x26x29x25x28"><div style="position: absolute;left:542px;top:33px;" count="0" class="i"></div></div>

							<div class="y n34_4" x="30x29x28"><div style="position: absolute;left:570px;top:33px;" count="0" class="i"></div></div>

							<div class="y n34_5" x="30x33x29x32x28x31"><div style="position: absolute;left:597px;top:33px;" count="0" class="i"></div></div>

							<div class="y n34_6" x="33x32x31"><div style="position: absolute;left:625px;top:33px;" count="0" class="i"></div></div>

							<div class="y n34_7" x="33x36x32x35x31x34"><div style="position: absolute;left:652px;top:33px;" count="0" class="i"></div></div>

							<div class="y n34_8" x="36x35x34"><div style="position: absolute;left:680px;top:33px;" count="0" class="i"></div></div>
							<div class="n34_9"></div>
							
					
							
						   								<!-- verhnya ramka -->

						   								<!-- pervii ryad -->

						   	<div class="y n37" x="3"><div >3</div><div count="0" class="i"></div></div>
						   	<div class="y n38" x="3x6"><div count="0" class="i m"></div></div>
						   	<div class="y n39" x="6"><div >6</div><div count="0" class="i"></div></div>
						   	<div class="y n40" x="6x9"><div count="0" class="i m"></div></div>
						   	<div class="y n41" x="9"><div >9</div><div count="0" class="i"></div></div>
						   	<div class="y n42" x="9x12"><div count="0" class="i m"></div></div>
						   	<div class="y n43" x="12"><div >12</div><div count="0" class="i"></div></div>
						   	<div class="y n44" x="12x15"><div count="0" class="i m"></div></div>
						   	<div class="y n45" x="15"><div >15</div><div count="0" class="i"></div></div>
						   	<div class="y n46" x="15x18"><div count="0" class="i m"></div></div>
						   	<div class="y n47" x="18"><div >18</div><div count="0" class="i"></div></div>
						   	<div class="y n48" x="18x21"><div count="0" class="i m"></div></div>
						   	<div class="y n49" x="21"><div >21</div><div count="0" class="i"></div></div>
						   	<div class="y n50" x="21x24"><div count="0" class="i m"></div></div>
						   	<div class="y n51" x="24"><div >24</div><div count="0" class="i"></div></div>
						   	<div class="y n52" x="24x27"><div count="0" class="i m"></div></div>
						   	<div class="y n53" x="27"><div >27</div><div count="0" class="i"></div></div>
						   	<div class="y n54" x="27x30"><div count="0" class="i m"></div></div>
						   	<div class="y n55" x="30"><div >30</div><div count="0" class="i"></div></div>
						   	<div class="y n56" x="30x33"><div count="0" class="i m"></div></div>
						   	<div class="y n57" x="33"><div >33</div><div count="0" class="i"></div></div>
						   	<div class="y n58" x="33x36"><div count="0" class="i m"></div></div>
						   	<div class="y n59" x="36"><div >36</div><div count="0" class="i"></div></div>
						   	<div class="n60"></div>
						   	<div class="y n61" x="2k1-1">2 to 1<div style="position: absolute;left:735px;top:60px;" count="0" class="i"></div></div>
						   	

						   							<!-- pervii ryad -->

						   							<!-- 2 ryad ramka-->
							
							<div class="y n63" x="3x2"><div style="position: absolute;left:75px;top:87px;" count="0" class="i"></div></div>

							<div class="y n64" x="3x6x2x5"><div style="position: absolute;left:102px;top:87px;" count="0" class="i"></div></div>

							<div class="y n65" x="6x5"><div style="position: absolute;left:130px;top:87px;" count="0" class="i"></div></div>

							<div class="y n66" x="6x9x5x8"><div style="position: absolute;left:157px;top:87px;" count="0" class="i"></div></div>

							<div class="y n67" x="9x8"><div style="position: absolute;left:185px;top:87px;" count="0" class="i"></div></div>

							<div class="y n68" x="9x12x8x11"><div style="position: absolute;left:212px;top:87px;" count="0" class="i"></div></div>

							<div class="y n69" x="12x11"><div style="position: absolute;left:240px;top:87px;" count="0" class="i"></div></div>

							<div class="y n70" x="12x15x11x14"><div style="position: absolute;left:267px;top:87px;" count="0" class="i"></div></div>

							<div class="y n71" x="15x14"><div style="position: absolute;left:295px;top:87px;" count="0" class="i"></div></div>

							<div class="y n72" x="15x18x14x17"><div style="position: absolute;left:322px;top:87px;" count="0" class="i"></div></div>

							<div class="y n73" x="18x17"><div style="position: absolute;left:350px;top:87px;" count="0" class="i"></div></div>

							<div class="y n74" x="18x21x17x20"><div style="position: absolute;left:377px;top:87px;" count="0" class="i"></div></div>

							<div class="y n75" x="21x20"><div style="position: absolute;left:405px;top:87px;" count="0" class="i"></div></div>

							<div class="y n76" x="21x24x20x23"><div style="position: absolute;left:432px;top:87px;" count="0" class="i"></div></div>

							<div class="y n77" x="24x23"><div style="position: absolute;left:460px;top:87px;" count="0" class="i"></div></div>

							<div class="y n77_1" x="24x27x23x26"><div style="position: absolute;left:487px;top:87px;" count="0" class="i"></div></div>

							<div class="y n77_2" x="27x26"><div style="position: absolute;left:515px;top:87px;" count="0" class="i"></div></div>

							<div class="y n77_3" x="27x30x26x29"><div style="position: absolute;left:542px;top:87px;" count="0" class="i"></div></div>

							<div class="y n77_4" x="30x29"><div style="position: absolute;left:570px;top:87px;" count="0" class="i"></div></div>

							<div class="y n77_5" x="30x33x29x32"><div style="position: absolute;left:597px;top:87px;" count="0" class="i"></div></div>

							<div class="y n77_6" x="32x33"><div style="position: absolute;left:625px;top:87px;" count="0" class="i"></div></div>

							<div class="y n77_7" x="33x36x32x35"><div style="position: absolute;left:652px;top:87px;" count="0" class="i"></div></div>

							<div class="y n77_8" x="36x35"><div style="position: absolute;left:680px;top:87px;" count="0" class="i"></div></div>
							<div class="n77_9"></div>

							
													<!-- 2 ryad ramka -->
													<!-- 2 ryad -->

							<div class="n78"></div>
							<div class="y n79" x="2"><div >2</div><div count="0" class="i"></div></div>
						   	<div class="y n80" x="2x5"><div count="0" class="i m"></div></div>
						   	<div class="y n81" x="5"><div >5</div><div count="0" class="i"></div></div>
						   	<div class="y n82" x="5x8"><div count="0" class="i m"></div></div>
						   	<div class="y n83" x="8"><div >8</div><div count="0" class="i"></div></div>
						   	<div class="y n84" x="8x11"><div count="0" class="i m"></div></div>
						   	<div class="y n85" x="11"><div >11</div><div count="0" class="i"></div></div>
						   	<div class="y n86" x="11x14"><div count="0" class="i m"></div></div>
						   	<div class="y n87" x="14"><div >14</div><div count="0" class="i"></div></div>
						   	<div class="y n88" x="14x17"><div count="0" class="i m"></div></div>
						   	<div class="y n89" x="17"><div >17</div><div count="0" class="i"></div></div>
						   	<div class="y n90" x="17x20"><div count="0" class="i m"></div></div>
						   	<div class="y n91" x="20"><div >20</div><div count="0" class="i"></div></div>
						   	<div class="y n92" x="20x23"><div count="0" class="i m"></div></div>
						   	<div class="y n93" x="23"><div >23</div><div count="0" class="i"></div></div>
						   	<div class="y n94" x="23x26"><div count="0" class="i m"></div></div>
						   	<div class="y n95" x="26"><div >26</div><div count="0" class="i"></div></div>
						   	<div class="y n96" x="26x29"><div count="0" class="i m"></div></div>
						   	<div class="y n97" x="29"><div >29</div><div count="0" class="i"></div></div>
						   	<div class="y n98" x="29x32"><div count="0" class="i m"></div></div>
						   	<div class="y n99" x="32"><div >32</div><div count="0" class="i"></div></div>
						   	<div class="y n100" x="32x35"><div count="0" class="i m"></div></div>
						   	<div class="y n101" x="35"><div >35</div><div count="0" class="i"></div></div>
						   	<div class="n102"></div>
						   	<div class="y n103" x="2k1_2">2 to 1<div style="position: absolute;left:735px;top:115px;" count="0" class="i"></div></div>
						   


						   							<!-- 2 ryad -->

							   							<!-- 3 ryad ramka-->
							
							<div class="y n105" x="2x1"><div style="position: absolute;left:75px;top:144px;" count="0" class="i"></div></div>

							<div class="y n106" x="2x5x1x4"><div style="position: absolute;left:102px;top:143px;" count="0" class="i"></div></div>

							<div class="y n107" x="5x4"><div style="position: absolute;left:130px;top:144px;" count="0" class="i"></div></div>

							<div class="y n108" x="5x8x4x7"><div style="position: absolute;left:157px;top:143px;" count="0" class="i"></div></div>

							<div class="y n109" x="8x7"><div style="position: absolute;left:185px;top:144px;" count="0" class="i"></div></div>

							<div class="y n110" x="8x11x7x10"><div style="position: absolute;left:212px;top:143px;" count="0" class="i"></div></div>

							<div class="y n111" x="11x10"><div style="position: absolute;left:240px;top:144px;" count="0" class="i"></div></div>

							<div class="y n112" x="11x14x10x13"><div style="position: absolute;left:267px;top:143px;" count="0" class="i"></div></div>

							<div class="y n113" x="14x13"><div style="position: absolute;left:295px;top:144px;" count="0" class="i"></div></div>

							<div class="y n114" x="14x17x13x16"><div style="position: absolute;left:322px;top:143px;" count="0" class="i"></div></div>

							<div class="y n115" x="17x16"><div style="position: absolute;left:350px;top:144px;" count="0" class="i"></div></div>

							<div class="y n116" x="17x20x16x19"><div style="position: absolute;left:377px;top:143px;" count="0" class="i"></div></div>

							<div class="y n117" x="20x19"><div style="position: absolute;left:405px;top:144px;" count="0" class="i"></div></div>

							<div class="y n118" x="20x23x19x22"><div style="position: absolute;left:432px;top:143px;" count="0" class="i"></div></div>

							<div class="y n119" x="23x22"><div style="position: absolute;left:460px;top:144px;" count="0" class="i"></div></div>

							<div class="y n119_1" x="23x26x22x25"><div style="position: absolute;left:487px;top:143px;" count="0" class="i"></div></div>

							<div class="y n119_2" x="26x25"><div style="position: absolute;left:515px;top:144px;" count="0" class="i"></div></div>

							<div class="y n119_3" x="26x29x25x28"><div style="position: absolute;left:542px;top:143px;" count="0" class="i"></div></div>

							<div class="y n119_4" x="29x28"><div style="position: absolute;left:570px;top:144px;" count="0" class="i"></div></div>

							<div class="y n119_5" x="29x32x28x31"><div style="position: absolute;left:597px;top:143px;" count="0" class="i"></div></div>

							<div class="y n119_6" x="32x31"><div style="position: absolute;left:625px;top:144px;" count="0" class="i"></div></div>

							<div class="y n119_7" x="32x35x31x34"><div style="position: absolute;left:652px;top:143px;" count="0" class="i"></div></div>

							<div class="y n119_8" x="35x34"><div style="position: absolute;left:680px;top:144px;" count="0" class="i"></div></div>
							<div class="y n119_9"></div>

							
													<!-- 3 ryad ramka -->


													<!-- 3 ryad -->

							<div class="n120"></div>
							<div class="y n121" x="1"><div >1</div><div count="0" class="i"></div></div>
						   	<div class="y n122" x="1x4"><div count="0" class="i m"></div></div>
						   	<div class="y n123" x="4"><div >4</div><div count="0" class="i"></div></div>
						   	<div class="y n124" x="4x7"><div count="0" class="i m"></div></div>
						   	<div class="y n125" x="7"><div >7</div><div count="0" class="i"></div></div>
						   	<div class="y n126" x="7x10"><div count="0" class="i m"></div></div>
						   	<div class="y n127" x="10"><div >10</div><div count="0" class="i"></div></div>
						   	<div class="y n128" x="10x13"><div count="0" class="i m"></div></div>
						   	<div class="y n129" x="13"><div >13</div><div count="0" class="i"></div></div>
						   	<div class="y n130" x="13x16"><div count="0" class="i m"></div></div>
						   	<div class="y n131" x="16"><div >16</div><div count="0" class="i"></div></div>
						   	<div class="y n132" x="16x19"><div count="0" class="i m"></div></div>
						   	<div class="y n133" x="19"><div >19</div><div count="0" class="i"></div></div>
						   	<div class="y n134" x="19x22"><div count="0" class="i m"></div></div>
						   	<div class="y n135" x="22"><div >22</div><div count="0" class="i"></div></div>
						   	<div class="y n136" x="22x25"><div count="0" class="i m"></div></div>
						   	<div class="y n137" x="25"><div >25</div><div count="0" class="i"></div></div>
						   	<div class="y n138" x="25x28"><div count="0" class="i m"></div></div>
						   	<div class="y n139" x="28"><div >28</div><div count="0" class="i"></div></div>
						   	<div class="y n140" x="28x31"><div count="0" class="i m"></div></div>
						   	<div class="y n141" x="31"><div >31</div><div count="0" class="i"></div></div>
						   	<div class="y n142" x="31x34"><div count="0" class="i m"></div></div>
						   	<div class="y n143" x="34"><div >34</div><div count="0" class="i"></div></div>
						   	<div class="y n144"></div>
						   	<div class="y n145" x="2k1_3">2 to 1<div style="position: absolute;left:735px;top:170px;" count="0" class="i"></div></div>
				



						   							<!-- 3 ryad -->



												   		<!-- 4 ryad ramka-->
							
							<div class="y n147" x="3x2x1"><div style="position: absolute;left:75px;top:198px;" count="0" class="i"></div></div>

							<div class="y n148" x="1x2x3x4x5x6"><div style="position: absolute;left:102px;top:198px;" count="0" class="i"></div></div>

							<div class="y n149" x="4x5x6"><div style="position: absolute;left:130px;top:198px;" count="0" class="i"></div></div>

							<div class="y n150" x="4x5x6x9x8x7"><div style="position: absolute;left:157px;top:198px;" count="0" class="i"></div></div>

							<div class="y n151" x="7x8x9"><div style="position: absolute;left:185px;top:198px;" count="0" class="i"></div></div>

							<div class="y n152" x="7x8x9x10x11x12"><div style="position: absolute;left:212px;top:198px;" count="0" class="i"></div></div>

							<div class="y n153" x="10x11x12"><div style="position: absolute;left:240px;top:198px;" count="0" class="i"></div></div>

							<div class="y n154" x="10x13x11x14x12x15"><div style="position: absolute;left:267px;top:198px;" count="0" class="i"></div></div>

							<div class="y n155" x="13x14x15"><div style="position: absolute;left:295px;top:198px;" count="0" class="i"></div></div>

							<div class="y n156" x="13x16x14x17x15x18"><div style="position: absolute;left:322px;top:198px;" count="0" class="i"></div></div>

							<div class="y n157" x="16x17x18"><div style="position: absolute;left:350px;top:198px;" count="0" class="i"></div></div>

							<div class="y n158" x="16x19x17x20x18x21"><div style="position: absolute;left:377px;top:198px;" count="0" class="i"></div></div>

							<div class="y n159" x="19x20x21"><div style="position: absolute;left:405px;top:198px;" count="0" class="i"></div></div>

							<div class="y n160" x="19x22x20x23x21x24"><div style="position: absolute;left:432px;top:198px;" count="0" class="i"></div></div>

							<div class="y n161" x="22x23x24"><div style="position: absolute;left:460px;top:198px;" count="0" class="i"></div></div>

							<div class="y n161_1" x="22x25x23x26x24x27"><div style="position: absolute;left:487px;top:198px;" count="0" class="i"></div></div>

							<div class="y n161_2" x="25x26x27"><div style="position: absolute;left:515px;top:198px;" count="0" class="i"></div></div>

							<div class="y n161_3" x="25x26x27x28x29x30"><div style="position: absolute;left:542px;top:198px;" count="0" class="i"></div></div>

							<div class="y n161_4" x="28x29x30"><div style="position: absolute;left:570px;top:198px;" count="0" class="i"></div></div>

							<div class="y n161_5" x="28x31x29x32x30x33"><div style="position: absolute;left:597px;top:198px;" count="0" class="i"></div></div>

							<div class="y n161_6" x="31x32x33"><div style="position: absolute;left:625px;top:198px;" count="0" class="i"></div></div>

							<div class="y n161_7" x="31x34x32x35x33x36"><div style="position: absolute;left:652px;top:198px;" count="0" class="i"></div></div>

							<div class="y n161_8" x="34x35x36"><div style="position: absolute;left:680px;top:198px;" count="0" class="i"></div></div>
							<div class="n161_9"></div>

							
													<!-- 	4 ryad ramka7277 3916130 -->


													<!-- 3 ryad -->

							<div class="n162"></div>
							<div class="y n163" x="1to18">1 to 18<div style="position: absolute;left:102px;top:225px;" count="0" class="i"></div></div>
						   	<div class="n166"></div>
						   	<div class="y n167" x="even">even<div style="position: absolute;left:213px;top:225px;" count="0" class="i"></div></div>

						   	<div class="n170"></div>
						   	<div class="y n171" x="red"><div style="position: absolute;left:323px;top:225px;" count="0" class="i"></div><canvas  id="canv"></canvas></div>

						   	<div class="n174"></div>
						   	<div class="y n175" x="black"><div style="position: absolute;left:433px;top:225px;" count="0" class="i"></div><canvas id="canv2"></canvas></div>

						   	<div class="n178"></div>
						   	<div class="y n179" x="odd">odd<div style="position: absolute;left:543px;top:225px;" count="0" class="i"></div></div>

						   	<div class="n182"></div>
						   	<div class="y n183" x="19to36">19 to 36<div style="position: absolute;left:653px;top:225px;" count="0" class="i"></div></div>

						   	<div class="n186"></div>
						   	<div class="y n187" x="wheel"></div>

						   	<script>
						   		
						   		var canvas = document.getElementById("canv");
								var ctx = canvas.getContext("2d");

								ctx.fillStyle = "red";
								// Filled triangle
							    ctx.beginPath();
							    ctx.moveTo(15,25);
							    ctx.lineTo(52,10);
							    ctx.lineTo(90,25);
							    ctx.lineTo(52,40);
							    ctx.fill();

							    var canvas2 = document.getElementById("canv2");
								var ctx2 = canvas2.getContext("2d");

								ctx2.fillStyle = "black";
								// Filled triangle
							    ctx2.beginPath();
							    ctx2.moveTo(15,25);
							    ctx2.lineTo(52,10);
							    ctx2.lineTo(90,25);
							    ctx2.lineTo(52,40);
							    ctx2.fill();
						   	</script>




						   							<!-- 3 ryad -->

						   							<!-- dop buttons -->


						   							<!-- dop buttons -->

						
					    </div>		<!-- obernuli stol v div -->


					    	<div class="ob4">
					    	<div class="y n192" x="no">NEIGHBOURS ONE<div style="position: absolute;left:147px;top:280px;" count="0" class="i"></div></div>
					    	<div class="y n193" x="ntwo">NEIGHBOURS TWO<div style="position: absolute;left:302px;top:280px;" count="0" class="i"></div></div>
					    	<div class="y n194" x="nthree">NEIGHBOURS THREE<div style="position: absolute;left:457px;top:280px;" count="0" class="i"></div></div>
					    	<div class="y n195" x="nf">NEIGHBOURS FOUR<div style="position: absolute;left:610px;top:280px;" count="0" class="i"></div></div>
							</div>

							<div class="ob4-2">
					    	<div class="y n188" x="bs">BIG SERIES<div style="position: absolute;left:195px;top:325px;" count="0" class="i"></div></div>
					    	<div class="y n189" x="ss">SMALL SERIES<div style="position: absolute;left:325px;top:325px;" count="0" class="i"></div></div>
					    	<div class="y n190" x="orp">ORPHANS<div style="position: absolute;left:455px;top:325px;" count="0" class="i"></div></div>
					    	<div class="y n191" x="zs">ZERO SPIEL<div style="position: absolute;left:560px;top:325px;" count="0" class="i"></div></div>
							</div>


							


				</div>	

				


		</div>
	<!-- </div> -->

	<div class="jjj" id="balltracker" style="border: 5px solid #9225D8; border-radius: 5px;margin-left:30px;margin-top: 15px; position: absolute;top:10px;left:74%; width: 75px;">

				


			</div>	



	<div class="" id="" style="margin-left:30px;margin-top: 15px; position: absolute;top:10px;left:80%; width: 75px;">

				
				<!-- <button class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg2">уведом</button> -->

				<!-- <button id="mods" >вызов модали</button> -->

				


			</div>	




	<div class="jjj" style="margin-top: 5px;position: absolute;top:30px;left:50px; width: 200px; height: 400px;">
							
							<div id="fish_p">

								<div style="float:left;height: 70px"><img class="fishki" v="1" style="width: 70px; " src="<?php echo  Url::to('@img'); ?>/fishki/1.png" alt=""></div>
								<div style="height: 70px"><img class="fishki" v="5" style="width: 70px; " src="<?php echo  Url::to('@img'); ?>/fishki/5.png" alt=""></div>
								<div style=" float:left;height: 70px"><img class="fishki" v="25" style="width: 70px;" src="<?php echo  Url::to('@img'); ?>/fishki/25.png" alt=""></div>
								<div style="height: 70px"><img class="fishki" v="50" style="width: 70px; " src="<?php echo  Url::to('@img'); ?>/fishki/50.png" alt=""></div>
								<div style="float:left;height: 70px"><img class="fishki" v="100" style="width: 70px;" src="<?php echo  Url::to('@img'); ?>/fishki/100.png" alt=""></div>
								<div style=" float:left;height: 70px"><img class="fishki" v="500" style="width: 70px; " src="<?php echo  Url::to('@img'); ?>/fishki/500.png" alt=""></div>
								<div style="height: 70px"><img class="fishki" v="1000" style="width: 70px; " src="<?php echo  Url::to('@img'); ?>/fishki/1000.png" alt=""></div>

							</div>
							

	</div>




			<div class="jjj" style="margin-top:5px;position: absolute;top:22px;left:83%;z-index: 26;">
							
							<button class="n253-2" data-toggle="modal" data-target=".bs-example-modal-lg">статистика</button>
							<div class="n250" style="">помощь</div>
							<div class="n251"  style="">X2 double</div>
							<div  class="n252" style="">очистить</div>
							<div class="n253"  style="">повторить</div>
							<div class="n253" id="mods" style="">посм.номер</div>
							<!-- <button id="rb"  class="btn btn-primary">отпр на сервер</button>
							<button id="mods"  class="btn btn-primary">modal</button -->
						
						</div>


			<div class="jjj" style="margin-top:5px;position: absolute;top:22px;left:91%;z-index: 26;">
							
							<button class="n253-3">сумма ставки <p style="color:red;" id="summx"></p></button>

						</div>

			<div class="jjj" style="margin-top:5px;position: absolute;top:330px;left:5%;z-index: 26;">

							<a href="<?php echo Url::to('@base'); ?>/site/roulettehistory" style="background-color: #330628;color:#fdd700;border:2px solid #9225D8;-webkit-border-radius: 5px ;border-radius: 5px ;height: 40px;" class="n253-4 btn btn-info">история всех ставок</a>

						</div>

			<div class="jjj" style="margin-top:5px;position: absolute;top:310px;left:80%;z-index: 26;">
				
					<p id="blink">Делайте ставки ..</p>
					<p id="blink" style="margin-left:40%;margin-top:-15px;" class="timeout2"></p>


			</div>


			<div  id="s_p" style="height: 380px;background-color: white;display: none;">

						<div class="col-xs-12 alert alert-danger" ">
					
								
					<div class="col-xs-4 col-xs-offset-1">
						<h3 style="color:red;font-size: 30px;text-align: center;">Ставки приостановлены..</h3>
					</div>

					<div class="col-xs-7"><div class="col-xs-6"><h3 style="color:red;font-size: 30px;text-align: center;">до начала ставок: 	</h3></div><div class="col-xs-1"><h3 style="color:red;font-size: 30px;text-align: center;" id="timeout"></h3></div></div>

					</div>

			</div>



	</div>

	






	
		


		<div class="col-xs-12" id="butosn" style="position: absolute;top:0px; z-index: 15;">
	
				<div class="col-xs-2 col-xs-offset-10">


					
					<!-- <img width="170%" src="<?php echo  Url::to('@img'); ?>/r.jpg" alt=""> -->

					<!-- <button id="r_mod"  class="btn btn-primary">показать стол</button> -->
					
					
					



				</div>

				

		</div>




<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
						
						<div class="col-xs-12"  style="margin-bottom:10px;background-color: white;">
							<div class="col-xs-11 col-xs-offset-1">
								
								<div class="col-xs-2">комбинация</div>
								<div class="col-xs-2">поставлено</div>
								<div class="col-xs-2">выиграно</div>
								<div class="col-xs-2">№ шара</div>
								<div class="col-xs-3">дата</div>

							</div>
						</div>
						
						<div style="color:white;" class="statictics">

						

						</div>
			    
			    </div>			<!-- kones modal -->
			  </div>
			</div>


			<div class="modal fade st_pr" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
						
						
							<div class="col-xs-4 col-xs-offset-4">
								
									<div class="alert alert-info">
											  <h3 style="text-align: center;">Cтавка принята..</h3>
										</div>
								

							</div>
						
						
						
			    
			    </div>			<!-- kones modal -->
			  </div>
			</div>



			<div class="modal fade stop_dealer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
						
						
							<div class="col-xs-5 col-xs-offset-3">
								
									<div class="alert alert-info">
											  <h3 style="text-align: center;">Игра приостановлена..</h3>
										</div>
								

							</div>
						
						
						
			    
			    </div>			<!-- kones modal -->
			  </div>
			</div>



			<div class="modal fade game_over" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
						
						
							<div class="col-xs-12" id="" style="">
									<div class="col-xs-8 col-xs-offset-2">
										
										<div class="alert alert-danger">
											  <h3 style="text-align: center;">К сожалению вы проиграли.... </h3>
											  <img class="im_r" style="width: 300px;height: 200px;margin-left:22%;" src="<?php echo Url::to('@img') ?>/roul/no_image.png" alt="">
											  

										</div>


										
									</div>
								</div>
						
						
						
			    
			    </div>			<!-- kones modal -->
			  </div>
			</div>



			<div class="modal fade check_momey" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
						
						
							<div class="col-xs-12" id="" style="">
									<div class="col-xs-8 col-xs-offset-2">
										
										<div class="alert alert-danger">
											  <h3 style="text-align: center;">Недостаточно средств!..</h3>

										</div>


										
									</div>
								</div>
						
						
						
			    
			    </div>			<!-- kones modal -->
			  </div>
			</div>





			<div class="modal fade winmessage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
						
						
								<div class="col-xs-12" id="" style="">
									<div class="col-xs-8 col-xs-offset-2">
										
										<div class="alert alert-success">
											  <h3>Вы выиграли.... подробнее см. статистику</h3>
											  <img class="im_r" style="width: 300px;height: 200px;margin-left:22%;" src="<?php echo Url::to('@img') ?>/roul/no_image.png" alt="">
											  <input id="im_r_val" type="hidden" value="<?php echo Url::to('@img') ?>/roul/">

										</div>


										
									</div>
								</div>
			    
			    </div>			<!-- kones modal -->
			  </div>
			</div>



			<div class="modal fade winmessage2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
						
						
								<div class="col-xs-12" id="" style="">
									<div class="col-xs-8 col-xs-offset-2">
										
										<div class="alert alert-info">
											  
											  <img class="im_r" style="width: 300px;height: 200px;margin-left:22%;" src="<?php echo Url::to('@img') ?>/roul/no_image.png" alt="">
											  

										</div>


										
									</div>
								</div>
			    
			    </div>			<!-- kones modal -->
			  </div>
			</div>




			
						
						
								
			    
			


		<script src="<?php echo Url::to('@jquery') ?>/roulette.js"></script>
	

<!-- https://www.youtube.com/watch?v=UPYT7cJkaZo russian roulette video-->