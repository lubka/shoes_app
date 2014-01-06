<?php //netteCache[01]000384a:2:{s:4:"time";s:21:"0.09292200 1389009753";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:62:"C:\xampp\htdocs\shoes_app\app\templates\Homepage\default.latte";i:2;i:1389009735;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\xampp\htdocs\shoes_app\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'a9rj3zzzik')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbb5cbac0bfd_scripts')) { function _lbb5cbac0bfd_scripts($_l, $_args) { extract($_args)
?><script>

$(function() {
	$( ".slider" ).slider({ max: 10});
	$( ".slider" ).slider({
    slide: function( event, ui ) {
		$.when(
			$.ajax({
            	url: <?php echo Nette\Templating\Helpers::escapeJs($_control->link("getShoes!")) ?>,
                type: 'GET',
                data : {
					 "value" : ui.value,
					"name" : $(this).attr("id"),
                    "comfort": $("#comfort").slider("value"),
                    "color": $("#color").slider("value"),
                    // "formal": $("#formal").slider("value"),
                    "weather": $("#weather").slider("value"),
                    "price": $("#price").slider("value"),
                }
            })
        ).then(function(payload) {
        	if(payload.image) {
                $("img").addClass("hidden");
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
if (!function_exists($_l->blocks['content'][] = '_lb5ef699007c_content')) { function _lb5ef699007c_content($_l, $_args) { extract($_args)
?><body>
    <div class="sliders" style="padding-left:450px; padding-top:70px;">
        <h9>comfortable </h9> <h9 style="padding-left:50px;">uncomfortable </h9>
        <div class="slider" id="comfort"></div>
        <br />

        <h9>bright </h9> <h9 style="padding-left:125px;">dark color</h9>
        <div class="slider" id="color"></div>
        <br />

                <h9>warm</h9> <h9 style="padding-left:110px;">cold weather</h9>
        <div class="slider" id="weather"></div>
        <br />

        <h9>cheap </h9><h9 style="padding-left:125px;">expensive </h9>
        <div class="slider" id="price"></div>
        <br />
    </div>
<?php for ($i=1; $i <= 50; $i++): ?>
<div class="shoe" style="margin-top:-300px; padding-right:300px;">
<img src="<?php echo htmlSpecialChars($basePath) ?>/images/<?php echo htmlSpecialChars($i) ?>
.jpg" style="width:350px !important; height:350px !important" class="hidden" id="<?php echo htmlSpecialChars($i) ?>" />
<div>
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