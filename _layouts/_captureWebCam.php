<div id="my_photo_booth">
	<div id="my_camera"></div>
		<!-- include the webcam.js library -->
		<script type="text/javascript" src="dist/libs/webcam/webcam.min.js"></script>

		<!-- configure a few settings and attach camera -->
		<script language="JavaScript">
			Webcam.set({
				// live preview size
				width: 320,
				height: 240,
					
				// device capture size
				dest_width: 640,
				dest_height: 480,
					
				// final cropped size
				crop_width: 480,
				crop_height: 480,
					
				// format and quality
				image_format: 'jpeg',
				jpeg_quality: 90,
					
				// flip horizontal (mirror mode)
				flip_horiz: true
			});
			//Webcam.attach('#my_camera');
		</script>
			
		<form>
			<!-- This button is shown before the user takes a snapshot -->
			<div id="pre_take_buttons">
				<input type=button class="btn btn-sm btn-success" value="Take Snapshot" onClick="preview_snapshot()">
			</div>

			<!-- These buttons are shown after a snapshot is taken Recapture-->
			<div id="post_take_buttons" style="display:none">
				<input type=button class="btn btn-sm btn-danger" value="&lt; Take Another" onClick="cancel_preview()">

				<!-- data-dismiss="modal" -->
				<input type=button class="btn btn-sm btn-success" value="Save Photo &gt;" onClick="save_photo()" data-dismiss="modal">
			</div>
		</form>
</div>
		
	

		
<!-- handling snapshot and displaying it temporarily -->
<script language="JavaScript">
	// load shutter audio clip
	var shutter = new Audio();
	shutter.autoplay = false;
	shutter.src = navigator.userAgent.match(/Firefox/) ? 'dist/libs/webcam/shutter.ogg' : 'dist/libs/webcam/shutter.mp3';
			
	function capture_reset() {
		Webcam.reset();
	}

	function capture_photo() {
		// cancel preview freeze and return to live camera view
		Webcam.attach('#my_camera');
	}

	function preview_snapshot() {
		// play sound effect
		try { shutter.currentTime = 0; } catch(e) {;} // fails in IE
		shutter.play();
				
		// freeze camera so user can preview current frame
		Webcam.freeze();
				
		// swap button sets
		document.getElementById('pre_take_buttons').style.display = 'none';
		document.getElementById('post_take_buttons').style.display = '';
	}
			
	function cancel_preview() {
		// cancel preview freeze and return to live camera view
		Webcam.unfreeze();
			
		// swap buttons back to first set
		document.getElementById('pre_take_buttons').style.display = '';
		document.getElementById('post_take_buttons').style.display = 'none';
	}
			
	function save_photo() {
		// actual snapshot (from preview freeze) and display it
		Webcam.snap( function(data_uri) {
			// display results in page
			document.getElementById('results').innerHTML = 
				'<img src="'+data_uri+'"/><br/></br>'; //+ 
					
			// shut down camera and stop capturing
			Webcam.reset();

			// show results, hide photo booth
			document.getElementById('results').style.display = '';
			document.getElementById('my_photo_booth').style.display = 'none';
			//document.getElementById('snap_btn').style.display = 'none';
		} );
	}
</script>