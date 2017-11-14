	<?php  include("part/head.php") ?>
	<body>

	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>

		<?php  include("part/menu-nav.php") ?>

		<div id="fh5co-main">

		<div class="modal" tabindex="-1" role="dialog" id="myModal">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Your message was sent</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p>Your message was successfully sent!	Thank you for contacting us, we will reply to your inquiry as soon as possible!</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.replace('contact.php');">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
			
			
		</div>
	</div>
	
	<?php  include("part/script.php") ?>

	<script>
		$('#myModal').modal('show')
	</script>