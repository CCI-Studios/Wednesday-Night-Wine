<?php

$aliases['dev'] = array(
	'uri'=> 'wnw.ccistaging.com',
	'root' => '/home/staging/subdomains/wnw/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'staging',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=> '-p 37241'
);

$aliases['live'] = array(
	'uri'=> 'wednesdaynightwine.ca',
	'root' => '/home/wednesdaynight/subdomains/live/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'wednesdaynight',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=> '-p 37241'
);
