<?php require_once( 'couch/cms.php' ); ?>
	<cms:template title='Contact & Mitra' >
	<cms:editable name='group_social' label='Social Profiles' desc='Your account on Social Sites' type='group' />
	<cms:editable name='twitter_id' label='Your Twitter ID' group='group_social' type='text' />
	<cms:editable name='facebook_id' label='Your Facebook' group='group_social' type='text' />
	<cms:editable name='google_id' label='Your Google ID' group='group_social' type='text' />
</cms:template>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Aurelius | Contact Us</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript"  src="js/contact.js"></script>
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
			<li><a href="contact.php"			class="current"><span class="meta">Mitra</span><br />Donasi</a></li>
			<li><a href="portfolio.php"><span 	class="meta">Prestasi</span><br />Galeri</a></li>
			<li><a href="ppdb.php"><span 		class="meta">Siswa Baru</span><br />PPDB</a></li>
			<li><a href="siswa.php"><span 		class="meta">Peserta Didik</span><br />Siswa</a></li>
			<li><a href="blog.php"><span 		class="meta">Program</span><br />Kurikulum</a></li>
			<li><a href="guru.php"><span 		class="meta">Tenaga Pendidik</span><br />Guru</a></li>
			<li><a href="about.php"><span		class="meta">Visi & Misi</span><br />Profil</a></li>
			<li><a href="index.html"><span 		class="meta">Beranda</span><br />Sekolah</a></li>
		</ul>
			
		<div class="hr grid_12 clearfix">&nbsp;</div>
			
		<!-- Caption Line -->
		<h2 class="grid_12 caption clearfix">Enjoyed looking at our work? Don't hesitate to <span>contact us</span>!</h2>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>

		<!-- Column 1 / Content -->
		<div class="grid_8">
			<cms:editable name='contact_intro' label='Introductory text' type='richtext'>
			
			</cms:editable>
			
			<!-- Contact Form -->
			<cms:form action='' method='post' id='contact_form'>
					<h3>Contact Form</h3>
				<div class="hr dotted clearfix">&nbsp;</div>
				<ul>						
					<li class="clearfix"> 
						<label for="name">Name</label>
						<cms:input type='text' name='name' id='name' require='1' />
						<div class="clear"></div>
					<cms:if k_error_name>
						<p id='name_error' class='error' style="display:block"> Insert a Name</p>
					</cms:if>
					</li> 
					<li class="clearfix"> 
						<label for="email">Email Address</label>
						<cms:input type='text' name='email' id='email' require='1' validator='email' />
						<div class="clear"></div>
					<cms:if k_error_email>
						<p id='email_error' class='error' style="display:block"> Enter a valid email address</p>
					</cms:if>
					</li> 
					<li class="clearfix"> 
						<label for="subject">Subject</label>
						<cms:input type='text' name='subject' id='subject' require='1' />
						<div class="clear"></div>
					<cms:if k_error_subject>	
						<p id='subject_error' class='error' style="display:block"> Enter a message subject</p>
					</cms:if>
					</li> 
					<li class="clearfix"> 
						<label for="message">Message</label>
						<cms:input type='textarea' name='message' id='message' require='1' />
						<div class="clear"></div>
					<cms:if k_error_message>
						<p id='message_error' class='error'style="display:block"> Enter a message</p>
					</cms:if >
					</li> 
					<li class="clearfix"> 
					<cms:if k_success >	
					<p id='mail_success' class='success' style="display:block"> Thank you. I'll get back to you as soon as possible.</p>
					
					
				
				
				<cms:send_mail from=k_email_from to=k_email_to subject='Feedback from yout site' >
						The following is an email sent by a visitor to your site :
						<cms:show k_success />
				
					</cms:send_mail>
				</cms:if>
					<p id='mail_fail' class='error'>Sorry, an error has occured. Please try again later.</p>
					<div id="button">
					<input type='submit' id='send_message' class="button" value='Submit' />
					</div>
					</li> 
				</ul> 
				</cms:form>
			</form>  
		</div>
		
		<!-- Column 2 / Sidebar -->
		<div class="grid_4 contact">
		<cms:editable name='contact_details' label='Contact Details' type='richtext'>
			<!-- Adress and Phone Details -->
			<h4>Address and Phone</h4> 
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul> 
				<li> 
					<strong>Your Company Name</strong><br /> 
					1458 Sample Road, Redvalley<br /> 
					City (State) H4Q 1J7<br /> 
					Country<br /><br /> 
				</li> 
				<li>USA - (888) 888-8888</li> 
				<li>Worldwide - (888) 888-8888</li> 
			</ul> 
			
			<!-- Email Addresses -->
			<h4>Emails</h4> 
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul> 
				<li>General - <a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li> 
				<li>Sales - <a href="mailto:sales@yourcompany.com">sales@yourcompany.com</a></li> 
			</ul> 
			</cms:editable>
			<!-- Social Profile Links -->
			<cms:capture into='profiles_output' >
			<h4>Social Profiles</h4> 
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul> 
				<cms:if "<cms:not_empty twitter_id />">
				<li class="float"><a href="<cms:show twitter_id />"><img alt="" src="images/twitterr.png" title="Twitter" /></a></li> 
				<cms:set has_profile='1' 'global' />
				</cms:if>
				
				<cms:if "<cms:not_empty facebook_id />">
				<li class="float"><a href="<cms:show facebook_id />"><img alt="" src="images/facebookk.png" title="Facebook" /></a></li> 
				<cms:set has_profile='1' 'global' />
				</cms:if>
				
				<cms:if "<cms:not_empty google_id />">
				<li class="float"><a href="#"><img alt="" src="images/google.png" title="Google" /></a></li> 
				<cms:set has_profile='1' 'global' />
				</cms:if>
			
			</ul> 
			</cms:capture>
			
			<cms:if has_profile >
				<cms:show profiles_output />
			</cms:if>
		</div>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
			<a class="float right" href="#">top</a>
		</p>
		
	</div><!--end wrapper-->

</body>
</html>

<?php COUCH::invoke(); ?>