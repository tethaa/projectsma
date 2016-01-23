<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='About Us' />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Aurelius | About Us</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<!--[if IE 6]>
	<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	  /* EXAMPLE */
	  DD_belatedPNG.fix('.button');
	  
	  /* string argument can be any CSS selector */
	  /* .png_bg example is unnecessary */
	  /* change it to what suits you! */
	</script>
	<![endif]-->
	
</head>

<body>

<div id="wrapper" class="container_12 clearfix">
		<ul id="navigation" class="grid_12">
			<li><a href="contact.php"><span 	class="meta">Mitra</span><br />Donasi</a></li>
			<li><a href="portfolio.php"><span 	class="meta">Prestasi</span><br />Galeri</a></li>
			<li><a href="p.php"><span 	class="meta">Siswa Baru</span><br />PPDB</a></li>
			<li><a href="siswa.php"><span 	class="meta">Peserta Didik</span><br />Siswa</a></li>
			<li><a href="blog.php"><span		class="meta">Program</span><br />Kurikulum</a></li>
			<li><a href="guru.php"><span	class="meta">Tenaga Pendidik</span><br />Guru</a></li>
			<li><a href="about.php" 			class="current"><span class="meta">Visi & Misi</span><br />Profil</a></li>
			<li><a href="index.html"><span		class="meta">Beranda</span><br />Sekolah</a></li>
			
		</ul>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
			
		<!-- Caption Line -->
		<h2 class="grid_12 caption"><span><center>SMA KRISTEN TUNGGUL WULUNG, SUWARU - MALANG <center></h2>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>

		<!-- Column 1 / Content -->	
		<div>
		<cms:editable name='main_content' type='richtext'>
		
		</div>
		</cms:editable>
		<!-- Column 2 / Sidebar -->
		<cms:editable name='sidebar_content' type='richtext'>
		<div class="grid_4">
		
			<h4>Our History</h4>
			<div class="hr dotted clearfix">&nbsp;</div>
			<dl class="history"> 
				<dt>1994</dt> 
				<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd> 
			
				<dt>1996</dt> 
				<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd> 
			
				<dt>2000</dt> 
				<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd> 
			
				<dt>2003</dt> 
				<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd> 
			
				<dt>2009</dt> 
				<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel diam id mauris accumsan egestas. Sed sed lorem. Integer id mi vel sapien fermentum vehicula. Pellentesque vitae lacus a sem posuere fringilla. Vestibulum dolor.</dd> 
			</dl>
		</div>
		 </cms:editable>
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">tiwuk corp</a></span>
			<a class="float right" href="#"></a>
		</p>
		
	</div><!--end wrapper-->

</body>
</html>
<?php COUCH::invoke(); ?>