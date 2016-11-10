<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		function myAlert(text) {
		// simulate loading (for demo purposes only)
		// setTimeout( function() {
		var m = '<p>'+text+'</p>';
		// create the notification
		var notification = new NotificationFx({
			message : m,
			layout : 'growl',
			effect : 'genie',
			type : 'notice', // notice, warning or error
		});

		// show the notification
		notification.show();

		// }, 1200 );
		// disable the button (for demo purposes only)
	}
	})
</script>
