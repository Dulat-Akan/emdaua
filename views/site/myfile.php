<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
  <title>Action Required - Guest Access</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="http://10.5.50.246:8880/guest/s/default/reset-min.css" />
  <link rel="stylesheet" type="text/css" href="http://10.5.50.246:8880/guest/s/default/styles.css" />
  <script type="text/javascript" src="http://10.5.50.246:8880/guest/s/default/js/jquery.min.js"></script>
  <script type="text/javascript" src="http://10.5.50.246:8880/guest/s/default/js/guest.js"></script>
</head>
<body class="login-page">
<!-- see README.txt for HTML customization instructions -->
<div class="page-content" style="padding-top:100px;">
	<div class="login-content content-box">
		
			

			
				<form name="input" method="post" action="login">
					<input type="hidden" name="by" value="voucher" />
					<input type="hidden" name="page_error" value="index.html" />
					<div class="voucher-box">
						<!-- Title or Error -->
						
							<h2>I have a voucher</h2>
						
						<fieldset class="large-text">
							<p class="form-element">
								<label for="voucher" class="fieldname">Voucher</label>
								<input id="voucher" name="voucher" type="text" class="textInput" value="" autocomplete="off" />
							</p>
						</fieldset>
					</div>
					<div class="form-controls">
						<input type="submit" value="Use Voucher" class="button requires-tou" />
					</div>
				</form>
			
			
		

		
	</div>

	<div class="login-content content-box">
		<form name="input" method="post" action="login">
			<div class="tou-box">
				<h2>Terms of Use</h2>
				<div class="tou-wrapper" id="tou">
					<div class="tou">
					<p>Terms of Use</p>
					<p>By accessing the wireless network, you acknowledge that you're of legal age, you have read and understood and agree to be bound by this agreement</p>
					<ul>
						<li>The wireless network service is provided by the property owners and is completely at their discretion. Your access to the network may be blocked, suspended, or terminated at any time for any reason.</li>
						<li>You agree not to use the wireless network for any purpose that is unlawful and take full responsibility of your acts.</li>
						<li>The wireless network is provided &quot;as is&quot; without warranties of any kind, either expressed or implied. </li>
					</ul>
					</div>
				</div>
				<fieldset class="accept-tou">
					<input id="accept-tou" type="checkbox" checked="checked" name="accept-tou" value="yes" />
					<label class="normal" >I accept the <a href="javascript:void(0)" id="show-tou">Terms of Use</a></label>
				</fieldset>
				<div class="form-controls">
					<!-- submit (only for no authentication) -->
					
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
$(function() { 
	$('#tou').hide();
	$('#show-tou').click(function() {
		$('#tou').show();
	});
	$('#accept-tou').click(function() {
		if (!$('#accept-tou').checked()) {
			$('input.requires-tou').disable();
		}
		else {
			$('input.requires-tou').enable();
		}
	})
});
</script>

</body>
</html>
