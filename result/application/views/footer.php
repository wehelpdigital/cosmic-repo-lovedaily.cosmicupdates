<footer>

	<script>
	// if you want to use the 'fire' or 'disable' fn,
	// you need to save OuiBounce to an object
	var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
		aggressive: true,
		timer: 0,
		callback: function() { console.log('ouibounce fired!'); }
	});
	$('body').on('click', function() {
		$('#ouibounce-modal').hide();
	});
	$('#ouibounce-modal .modal-footer').on('click', function() {
		$('#ouibounce-modal').hide();
	});
	$('#ouibounce-modal .modal').on('click', function(e) {
		e.stopPropagation();
	});
	</script>
	
	<!-- <div class="" id="footer-outer">

		<div class="footer">

			· &nbsp; <a href="https://lovedaily.cosmicupdates.com/privacy.php" target="_blank">Privacy Policy</a> · &nbsp;<a href="https://lovedaily.cosmicupdates.com/terms.php" target="_blank">Terms of Use</a> · &nbsp;<a href="https://lovedaily.cosmicupdates.com/earnings.php" target="_blank">Earnings Disclaimer</a> · 

			<div class="disclaimer">

				<hr/>

				<p>ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</p>

			</div>

		</div>

	</div> -->
	<!-- <div id="footer-outer" data-midnight="light" data-using-widget-area="true" style="display:none;">
		<div class="footer">
			<div class="row" id="copyright">

				<div class="container">
				<div class="col span_5">

				<p>© 2018 Tarot Reading Daily.  </p>
				<p><a href="<?php echo base_url(); ?>privacy" class="privacy" target="_blank">Privacy Policy</a> | <a target="_blank" href="mailto:tarotreadingdaily@gmail.com" class="privacy" target="_blank">Contact Us</a></p>
					</div>
				
					<div class="col span_7 col_last">
						<ul id="social">
																																																																																																																								</ul>
					</div>

				</div>
			</div>
		</div>
	</div>  -->
</footer>
</body>
</html> 
  