<?php require_once( 'couch/cms.php' ); ?>
<cms:template clonable='1' title='Tenaga Pendidik Categories' executable='0'>
	<cms:editable
		name='folder_desc'
		label='Description'
		desc='Enter description of portfolio category here'
		type='richtext' />
		
	<cms:editable
		name='folder_blurb'
		label='Short Description'
		desc='Enter one line description of portfolio category here'
		type='text' />
		
</cms:template>
<?php COUCH::invoke(); ?>
