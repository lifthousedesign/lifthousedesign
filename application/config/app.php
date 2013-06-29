<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Development Mode
|--------------------------------------------------------------------------
|
| Set to true to display errors and debugging information.
|
|--------------------------------------------------------------------------
*/
$config['dev_mode']=TRUE;

/*
|--------------------------------------------------------------------------
| Database Configuration
|--------------------------------------------------------------------------
|
| http://ellislab.com/codeigniter/user-guide/database/configuration.html
|
|--------------------------------------------------------------------------
*/
if($config['dev_mode']===TRUE)
{
	$config['database']=array(
		'hostname'=>'localhost',
		'username'=>'root',
		'password'=>'root',
		'database'=>'lifthousedesign',
		'dbdriver'=>'mysql',
		'db_debug'=>$config['dev_mode'],
	);
}
else
{
	$config['database']=array(
		'hostname'=>'localhost',
		'username'=>'thomas',
		'password'=>'iotaalpha08',
		'database'=>'thomas_lhd',
		'dbdriver'=>'mysql',
		'db_debug'=>$config['dev_mode'],
	);
}


/*
|--------------------------------------------------------------------------
| General Site Configuration
|--------------------------------------------------------------------------
|
| 'site_name'			the name of the site to be used in the title bar and
|						various other locations
|
| 'site_description'	a short description or tagline to be used as the
|						default meta description and possibly other places
|						on the site
|
| 'title_format'		the formatting of the title used on every page, where
|						the first argument is the site name and the second is
|						the page name
|
| 'copyright_format'	the formatting of the copyright used at the bottom
|						of every page and in the meta tag, where the first
|						argument is the site name and the second is the 
|						current year
|
| 'assets_url'			url prefix to the assets directory
|
| 'ga_code'				the "UA-XXXXX-X" code for google analytics, or FALSE
|						to disable
|
*/
$config['site_name']='Lift House Design';
$config['site_description']='Your ascent to the summit begins here...';
$config['title_format']='%1$s | %2$s';
$config['copyright_format']='Copyright &copy; %1$s %2$d. All Rights Reserved.';
$config['assets_url']='/assets';
$config['ga_code']=FALSE;

/*
|--------------------------------------------------------------------------
| E-mail Notifications Configuration
|--------------------------------------------------------------------------
*/
$config['email_notifications']=array(
	'sender_email'=>'no-reply@lifthousedesign.com',
	'sender_name'=>'Lift House Design',
	/*'config'=>array(
		'protocol'=>'smtp',
		'smtp_host'=>'ssl://secure.emailsrvr.com',
		'smtp_user'=>'system@accidentreview.com',
		'smtp_pass'=>'9iojkl',
		'smtp_port'=>'465',
		'mailtype'=>'text',
	),*/
	'config'=>array(
		'protocol'=>'smtp',
		'smtp_host'=>'mail.lifthousedesign.com',
		'smtp_user'=>'no-reply@lifthousedesign.com',
		'smtp_pass'=>'9sbZdlAklydT',
		'smtp_port'=>'25',
		'mailtype'=>'text',
	),
	'templates'=>array(
		'inquiry'=>array(
			'subject'=>'Inquiry Received via lifthousedesign.com',
			'message'=>file_get_contents(dirname(__FILE__).'/templates/email/inquiry.php'),
			'to'=>'nick@mvbeattie.com',
		),
	),
);

/* End of file app.php */
/* Location: ./application/config/app.php */