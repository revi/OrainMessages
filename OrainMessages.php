<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}

$wgExtensionCredits['other'][] = array(
	'author'         => 'Kudu',
	'descriptionmsg' => 'orainmessages-desc',
	'name'           => 'OrainMessages',
	'path'           => __FILE__,
	'url'            => '//github.com/Orain/OrainMessages',
);

$wgExtensionMessagesFiles['AOrainMessages'] = dirname( __FILE__ ) . '/OrainMessages.i18n.php';
$wgMessagesDirs['OrainMessages'] = dirname( __FILE__ ) . '/i18n';

$wgAutoloadClasses['OrainMessagesHooks'] = dirname( __FILE__ ) . '/OrainMessages.hooks.php';
$wgHooks['SoftwareInfo'][] = 'OrainMessagesHooks::getSoftwareInfo';

