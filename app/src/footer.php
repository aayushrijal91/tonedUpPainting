<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-lg-between align-items-center py-3">
			<div class="col-auto">
				<div class="row gx-2 gx-md-3 gx-xxl-5 fw-700 justify-content-center">
					<div class="col-12 text-center pb-3 d-md-none">
						<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
							<?= renderImg("aiims.png", "logo") ?>
						</a>
					</div>
					<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center"><?= $site ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center">All Rights Reserved
					</div>
				</div>
			</div>
			<div class="col-auto pt-3 pt-md-0">
				<?= renderImg("payment-methods.png", "icons") ?>
			</div>
			<div class="col-auto d-none d-md-block">
				<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
					<?= renderImg("aiims.png", "logo") ?>
				</a>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>