<?php //netteCache[01]000375a:2:{s:4:"time";s:21:"0.50382100 1388956230";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:53:"C:\xampp\htdocs\shoes_app\app\templates\@layout.latte";i:2;i:1388830659;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\xampp\htdocs\shoes_app\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'gdi6axu7uq')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbdc71e7a65e_title')) { function _lbdc71e7a65e_title($_l, $_args) { extract($_args)
?>Shoes app<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb4c1d366241_head')) { function _lb4c1d366241_head($_l, $_args) { extract($_args)
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbbe3712a211_scripts')) { function _lbbe3712a211_scripts($_l, $_args) { extract($_args)
?></html>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
<?php if (isset($robots)): ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->striptags(ob_get_clean())  ?></title>

	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/application.css" />
	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/screen.css" />
	<link rel="stylesheet" media="print" href="<?php echo htmlSpecialChars($basePath) ?>/css/print.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
	<link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />


	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/main.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery-ui.min.js"></script>

	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap.css" />
	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap-sidenav.css" />
	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap-responsive.css" />
	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery-ui.css" />
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>
	<div class="container form">
<?php $iterations = 0; foreach ($flashes as $flash): ?>		<div class="alert alert-<?php echo htmlSpecialChars($flash->type) ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo $flash->message ?>

		</div>
<?php $iterations++; endforeach ?>
		<div class="row">
			<div class="span12">
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
			</div>
		</div>
		<div class="row" style="padding-top:420px; padding-left:0px; position:absolute;">
			<div class="span3 pull-right">
				<blockquote class="pull-right"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/buffalo.jpg" style=" width:100px !important;" /></blockquote>
			</div>
	</div>
</body>
<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars()) ; 