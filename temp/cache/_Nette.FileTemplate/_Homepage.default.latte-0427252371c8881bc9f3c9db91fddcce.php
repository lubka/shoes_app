<?php //netteCache[01]000384a:2:{s:4:"time";s:21:"0.38632300 1387451647";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:62:"C:\xampp\htdocs\shoes_app\app\templates\Homepage\default.latte";i:2;i:1387451635;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\xampp\htdocs\shoes_app\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'w66nnxseu0')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbbe8404f83f_scripts')) { function _lbbe8404f83f_scripts($_l, $_args) { extract($_args)
?><script>

$(function() {
	$( "#comfort" ).slider({ max: 10});
	$( "#color" ).slider({ max: 10});
	$( ".slider" ).slider({
    slide: function( event, ui ) {
		$.when(
			$.ajax({
            	url: <?php echo Nette\Templating\Helpers::escapeJs($_control->link("getShoes!")) ?>,
                type: 'GET',
                data : {
					"value" : ui.value,
					"name" : $(this).attr("id"),
                }
            })
        ).then(function(payload) {
        	if(payload.image) {
        		$( "#" + payload.image ).removeClass("hidden");
        		console.log(payload.image);
        	}
		   	
		   	if(payload.message == 'Failure') {

		    	} else if(payload.message == 'Success') {
		    		console.log("succ");
		    	}
        });
    	}
    })
});

</script>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb0bdeed1eb3_content')) { function _lb0bdeed1eb3_content($_l, $_args) { extract($_args)
?><body>
<div class="slider" id="comfort"></div>
<div class="slider" id="color"></div>
<br />
<?php for ($i=1; $i <= 50; $i++): ?>
<img src="<?php echo htmlSpecialChars($basePath) ?>/images/<?php echo htmlSpecialChars($i) ?>
.jpg" style="width:450px !important; height:450px !important" class="hidden" id="<?php echo htmlSpecialChars($i) ?>" />
<?php endfor ?>
</body>
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 