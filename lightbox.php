<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<head>
	

	<!-- include the Tools -->
	<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>


	<style>


	#facebox {

		/* overlay is hidden before loading */
		display:none;

		/* standard decorations */
		width:450px;
		border:20px solid #666;

		/* for modern browsers use semi-transparent color on the border. nice! */
		border:10px solid rgba(82, 82, 82, 0.698);

		/* hot CSS3 features for mozilla and webkit-based browsers (rounded borders) */
		-moz-border-radius:8px;
		-webkit-border-radius:8px;
	}

	#facebox div {
		padding:10px;
		border:1px solid #3B5998;
		background-color:#FFF;
		font-family:"lucida grande",tahoma,verdana,arial,sans-serif
	}

	#facebox h2 {
		margin:-11px;
		margin-bottom:0px;
		color:#FFF;
		background-color:#6D84B4;
		padding:5px 10px;
		border:1px solid #3B5998;
		font-size:20px;
		text-align:center;
	}
	</style>
</head>

<body>

<!-- facebook dialog -->
<div id="facebox">

	<div>
		<h2>Special Discount</h2>

		<p> <?php echo $dialog_message; ?> <br /><br />
        <button onclick="window.open(&quot;http://www.earthhospital.co.in/&quot;);">Click Here</button>  to avail the special discount for our facebook app users.</p>

		<p style="color:#258">To close, click the Close button or hit the ESC key.  <button class="close"> Close </button></p>

	</div>

</div>




<script>
// What is $(document).ready ? See: http://flowplayer.org/tools/documentation/basics.html#document_ready
$(document).ready(function() {

// select the overlay element - and "make it an overlay"
$("#facebox").overlay({

	// custom top position
	top: 100,

	// some mask tweaks suitable for facebox-looking dialogs
	mask: {

		// you might also consider a "transparent" color for the mask
		color: '#A00',

		// load mask a little faster
		loadSpeed: 1000,

		// very transparent
		opacity: 0.5
	},

	// disable this for modal dialog-type of overlays
	closeOnClick: false,

	// we want to use the programming API
	api: true

// load it after delay
})



var ol = $("#facebox").overlay({api: true});
// wait 5 seconds, then load the overlay
 setTimeout(function() {
   ol.load();
 }, 4000);

});
</script>




</body>

</html>