	<div id="wrapper" ">
		<div id="cube" >
		<div class="side" id="side">
		<img width="100%" height="300" style="-webkit-user-select: none" src="http://192.168.1.100:8090/webcam.mjpeg">
		
		
		<!--<iframe width="100%" height="300" src="https://www.youtube.com/embed/osb9JNYj55U" frameborder="0" allowfullscreen></iframe>-->

		</div>
	
			<div class="side" id="side4">
			
		<div><span></span></div>
		<div><span>1</span></div>
		<div><span>4</span></div>
		<div><span>7</span></div>
		<div><span>10</span></div>
		<div><span>13</span></div>
		<div><span>16</span></div>
		<div><span>19</span></div>
		<div><span>22</span></div>
		<div><span>25</span></div>
		<div><span>28</span></div>
		<div><span>31</span></div>
		<div><span>34</span></div>
		<div><span>2x1</span></div>
		
		
		<div><span>0</span></div>
		<div><span>2</span></div>
		<div><span>5</span></div>
		<div><span>8</span></div>
		<div><span>11</span></div>
		<div><span>14</span></div>
		<div><span>17</span></div>
		<div><span>20</span></div>
		<div><span>23</span></div>
		<div><span>26</span></div>
		<div><span>29</span></div>
		<div><span>32</span></div>
		<div><span>35</span></div>
		
		
		
		<div><span>2x1</span></div>
		<div><span></span></div>
		<div><span>3</span></div>
		<div><span>6</span></div>
		<div><span>9</span></div>
		<div><span>12</span></div>
		<div><span>15</span></div>
		<div><span>18</span></div>
		<div><span>21</span></div>
		<div><span>24</span></div>
		<div><span>27</span></div>
		<div><span>30</span></div>
		<div><span>33</span></div>
		<div><span>36</span></div>
		<div><span>2x1</span></div>
		
		<div class='tr'>
		<div>3 и 12</div><div>2-e 12</div><div>1-e 12</div>
		<div><div>19x36</div><div>ЧЕТ</div></div>
		<div><div style="background:red!important"></div><div style="background:black!important"></div></div>
		<div><div>НЕЧЕТ</div><div>1x18</div></div>
		</div>
		<!--<div class="colaut2"></div>-->
			</div>
			<div class="side" id="side5"></div>
					
		</div>
	</div>
	
	
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.script.js"></script>
	<script>
		$(function(){
			$('#cubee').mousemove(function(e){
				$('#cube').css({
					'-moz-transform':'rotateX('+e.pageY+'deg) rotateY('+e.pageX+'deg)'
				});
			});
		});
	</script>
<script>
		$(function(){
			$('#cube .side div span').script();
		});
</script>