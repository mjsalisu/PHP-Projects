<div class="col-6 col-lg-6 mx-auto">
	<div class="card card-sm">
		<!-- btn start -->
		<div class="card-body">

			<div id="results" style="display:none">
				<!-- captured image will appear here... -->
			</div>

			<div id="snap_btn" class="align-items-center text-center">
				<a href="#" data-toggle="modal" onClick="capture_photo();" data-target="#camera-modal">capture</a>
			</div>
		</div><!-- btn end -->
	</div>
</div>

<div class="modal modal-blur fade" id="camera-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" /></svg>
			</button>

			<div class="empty">
				<?php include "_layouts/_captureWebCam.php" ?>	
		    </div>

        </div>
      </div>
</div>