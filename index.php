<div class="container-beranda">
	<div class="container bg_rsud sdw">
		<div class="row box-carousel-utama-col">
			<div class="col-lg-12">
				<div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel">
					<?php echo get_slider_post('berita',5,true,'myCarousel','',8,4);?>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

		<!-- headline & pencarian -->
		<div class="row bg_patern_h sdw">
			<div class="col-lg-9 col-sm-9" style="padding: 0px;">
				<div class="smarticker3">
					<ul>
					<?php echo get_newsticker(10)?>
					</ul>
				</div>
				<script type="text/javascript" src="<?php echo base_url('themes/rsud/plugin/smarticker/smarticker.js');?>"></script>
				<script type="text/javascript">
					$('.smarticker3').smarticker({
						theme: 4,
						speed: 1500,
						pausetime: 3600,
						title: 'Sekilas Info: ',
						rounded: false,
						shadow: false,
						animation: 'typing'
					});
				</script>
			</div>
			<div class="col-lg-3 col-sm-3" style="padding:0px;">
				<?php echo get_search()?>
			</div>
		</div>
	</div>
</div>
