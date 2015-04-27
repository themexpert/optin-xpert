<div class="optin-flyin-display" >
	<div class="optin-flyin-content">
		<a id="menu-close-flyin" href="#" class="btn btn-light btn-lg pull-right">X</a>
	</div>
	  <div class ="optin-header-flyin">             
		<h2>Tx Optin</h2>    
	  </div>
	<div class = "optin-content-flyin">
	  <?php echo $OPTIN_DATA; ?>
	</div>


	<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	  <div id = "optin-email-subcribe" class="form-group">                    
		<input  type="email" name="optin_mail" value="<?php echo $optin_mail; ?>" class="form-control" id="optin_mail" placeholder="Enter email" required>
	  </div>
	<button id="optin-email-button" type="submit" class="btn btn-primary ">Subscribe!!</button>
	</form>


</div>
<script>

//console.log(".OPTIN_MAILCHIMP_CONTENT.");
jQuery(document).ready(function ($) {
  var TIMER = <?php echo $OPTIN_TIMER; ?>; // jshint ignore:line

  $('#menu-close-flyin').on('click',function(){
    $('.optin-flyin-display').css({'display':'none'});
  });                            

  setTimeout(function(){
    $('.optin-flyin-display').animate({bottom: '0px'});
  }, TIMER);

});
</script>
