<?php get_header(); ?>

<?php if (isset($is_home)) { ?>
<!-- Begin page content -->
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

<div class="container-beranda">
	<div class="container bg_white sdw">

		<!-- headline & pencarian end -->
		<div class="row">
			<div class="col-lg-9 col-sm-9" style="margin-top:0px;padding-top:0px;">
				<div class="row">
					<div class="col-lg-12 bg_primary">
						<div class="carousel-beranda-utama">
							<?php echo get_tautan(3,'link2')?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12" style="margin:0px;padding-top:0px;padding-bottom:0px;">
						<div class="banner-utama">
							<div id="myCarousel2" class="carousel carousel-fade slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<?php echo get_banner('utama')?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-sm-8" style="margin-top:-5px;">
						<div role="tabpanel" style="margin-bottom:5px;">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#berita-umum" aria-controls="berita umum" role="tab" data-toggle="tab"><i class="fa fa-rss"></i> Info Kesehatan</a></li>
								<li role="presentation"><a href="#berita-daerah" aria-controls="berita daerah" role="tab" data-toggle="tab"><i class="fa fa-rss"></i> Info RSUD</a></li>
								<li role="presentation"><a href="#pengumuman" aria-controls="pengumuman" role="tab" data-toggle="tab"><i class="fa fa-bullhorn"></i> Pengumuman</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fadeIn animated active" id="berita-umum">
									<?php echo list_tab_post('info-kesehatan',3)?>
								</div>
								<div role="tabpanel" class="tab-pane fadeIn animated" id="berita-daerah">
									<?php echo list_tab_post('info-rsud',3)?>
								</div>
								<div role="tabpanel" class="tab-pane fadeIn animated" id="pengumuman">
									<?php echo list_tab_post_2('pengumuman',3)?>
								</div>
							</div>
						</div>
						<div class="bg_primary" style="display: table;content: " ";clear: both;">
							<h4 class="title-widget"><i class="fa fa-film" style="color:#111;"></i> <span>VIDEO TERBARU</span><hr/></h4>
							<?php echo get_video(3)?>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="bg_abu box_abu bg_primary" style="margin:-5px;padding:3px 7px;margin-bottom:15px;">
							<h4 class="title-widget"><i class="fa fa-stethoscope" style="color:#111;"></i> <span>LAYANAN IGD 24 JAM</span><hr/></h4>
							<div class="quote-beranda">
								<?php echo get_layanan_klinik('klinik',1,'yes')?>
							</div>
						</div>
						<div class="bg_abu box_abu bg_primary" style="margin:-5px;padding:3px 7px;margin-bottom:15px;">
							<h4 class="title-widget"><i class="fa fa-calendar" style="color:#111;"></i> <span>AGENDA KERJA</span><hr/></h4>
							<ul class="box-list-agenda-kerja">
								<?php echo list_event(2)?>
							</ul>
						</div>
						<div class="bg_abu box_abu galeri bg_primary" style="margin:-5px;padding:3px 7px;padding-bottom:10px;">
							<h4 class="title-widget"><i class="fa fa-picture-o" style="color:#111;"></i> <span>GALERI FOTO</span><hr/></h4>
							<div>
							<?php echo get_thumbnail_album(3)?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-3" style="margin-top:5px;padding-top:5px;">
				<?php get_sidebar2(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 carousel-beranda-bawah">
				<?php echo get_tautan(6,'link')?>
			</div>
		</div>
	</div>
</div>
<?php }else{ ?>
<!-- Begin page content -->
<div class="container-beranda">
	<div class="container bg_white sdw">
		<?php if (isset($is_home)) { ?>
		<!-- headline & pencarian -->
		<div class="row">
			<div class="col-lg-9 col-sm-9" style="padding: 0px;">
				<div class="smarticker3">
					<ul>
					<?php echo get_newsticker(10)?>
					</ul>
				</div>
				<script type="text/javascript" src="<?php echo base_url('themes/kutim/plugin/smarticker/smarticker.js');?>"></script>
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
			<div class="col-lg-3 col-sm-3" style="padding:0px;margin-bottom:10px;padding-top:0px">
				<?php echo get_search()?>
			</div>
		</div>
		<!-- headline & pencarian end -->
		<?php }?>
		<div class="row">
			<?php if (isset($is_page)) { ?>
			<div class="col-lg-3 col-sm-3" style="margin-top:10px;padding-top:0px;">
				<div class="widget bg_primary" style="margin-bottom:10px;">
					<?php echo get_search()?>
				</div>
				<div id="sidebar">
					<?php echo get_list_page();?>
				</div>
				<?php get_sidebar1(); ?>
			</div>
			<?php }?>
			<div class="col-lg-9 col-sm-9">
				<?php echo $content; ?>
			</div>
			<?php if (isset($is_article)) { ?>
			<div class="col-lg-3 col-sm-3" style="margin-top:10px;padding-top:0px;">
				<div class="widget bg_primary" style="margin-bottom:10px;">
					<?php echo get_search()?>
				</div>
				<?php get_sidebar2(); ?>
			</div>
			<?php }?>
		</div>
		<div class="row">
			<div class="col-lg-12 carousel-beranda-bawah">
				<?php echo get_tautan(6,'link')?>
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php get_footer(); ?>
