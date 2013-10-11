/* Copyright jQuery4u.com - Script for hooking up 50 function demo buttons and displaying code. */
var JQ4UFUNCS =
{
    init: function()
    {
        _this = this;
        //console.log('running init...');

        /* settings */
        var fns = ['animate1','animate2','animate3','setinterval1','setinterval2','settimeout','slidetoggle','fadetoggle','delay','css1','css2','addclass','toggleclass','html','append','clone','ajax','getjson','getscript','load','jsonp','bind1','bind2','bind3','live','delegate','preventdefault','stoppropagation','stopimmediatepropagation','each1','each2','data','match1','match2','find','filter','slice','next','extend1','extend2','serializearray1','serializearray2']; /* array of demo functions */
        $('.demoarea').hide(); /* demos shown when user clicks run */

        /* ------------------------------ Demo Button Events ------------------------ */
        $('.demobtn').live('click', function(e) {
            e.preventDefault();
            var _id = _this.getId($(this));
            $(_id).show(); /* show demoarea */
            $(_id+'-resetbtn').show(); /* show reset button */
        });

        /* I've coded the function this way ONLY because originally I was using eval() but IE poop'd - IE sucks. */
        $.getScript('http://www.jquery4u.com/scripts/htmlentities.js', function()
        {
            $('.demobtn, .codebtn, .resetbtn').live('click', function(e) { e.preventDefault(); });
            $.each(fns, function(i,fn)
            {
                /* check for presence of function */
                var parentPresence = $('#maindemoarea').html() == null ? false : true;
                var fnPresence = parentPresence == true ? ($('#maindemoarea').html().indexOf('id="'+fn+'"') !== -1) : ($('body').html().indexOf('id="'+fn+'"') !== -1);
                if(fnPresence)
                {
                    $('#'+fn+'-demobtn').live('click', function(e) {  JQFUNCS.runFunc[fn]["run"](fn);  });
                    $('#'+fn+'-codebtn').live('click', function(e) {  $('#'+fn+'-sourcecode').fadeToggle('slow');  });
                    $('#'+fn+'-resetbtn').live('click', function(e) {  JQFUNCS.runFunc[fn]["reset"](fn); });

                    /* --------------------- Attach the source code to demo ------------------------------ */
                    var functionCodeRun = JQFUNCS.runFunc[fn]["run"].toString();
                    functionCodeRun = new String(functionCodeRun.substring(functionCodeRun.indexOf('{')+1,functionCodeRun.lastIndexOf('}')).trim());
                    var functionCodeReset = JQFUNCS.runFunc[fn]["reset"].toString();
                    functionCodeReset = new String(functionCodeReset.substring(functionCodeReset.indexOf('{')+1,functionCodeReset.lastIndexOf('}')).trim());
                    $('#'+fn).after('<div id="'+fn+'-sourcecode" class="sourcecode">'+'<p>Code to Run</p>'+'<pre class="raw" id="'+fn+'-raw-runcode">'+htmlentities(functionCodeRun)+'</pre>'+'<p id="'+fn+'-resetcontainer">Code to Reset</p>'+'<pre class="raw" id="'+fn+'-raw-resetcode">'+htmlentities(functionCodeReset)+'</pre>'+'</div>').next().hide();
                    /* remove empty reset codes */
                    if (!$('#'+fn+'-raw-resetcode').html()) { $('#'+fn+'-raw-resetcode').remove(); $('#'+fn+'-resetcontainer').remove(); }
                }
            });
        });
    },

    /* helper function to strip the main id for the demo */
    getId: function(elem)
    {
        var thisId = elem.attr('id');
        thisId = thisId.substring(0,thisId.lastIndexOf('-'));
        return '#' + thisId;
    }
}

/* ------------------------------ Nav Buttons Scroll+Highlight Sections ------------------------------ */
$("#view-demo-btn").bind('click', function(e)
{
    e.preventDefault();
    var destination = $($(this).attr("href")).offset().top;
    $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 1100 );
    $('.exposedemo').css('z-index','99999').after('<div id="overlay"></div>');
    $('#overlay').fadeIn(300);
});

$("#view-code-btn").bind('click', function(e)
{
    e.preventDefault();
    var destination = $($(this).attr("href")).offset().top;
    $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 1100 );
    $('.exposecode').css('z-index','99999').after('<div id="overlay"></div>');
    $('#overlay').fadeIn(300);
});

$("#view-download-btn").bind('click', function(e)
{
    e.preventDefault();
    var destination = $($(this).attr("href")).offset().top;
    $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 1100 );
    $('.exposedownload').css('z-index','99999').after('<div id="overlay"></div>');
    $('#overlay').fadeIn(300);
});

$('#overlay').live('click', function(e)
{
    $(this).fadeOut(300, function(){
        $('.expose').css('z-index','1');
    });
});

jQuery(document).ready( function ()
{
   JQ4UFUNCS.init(); /* setup event handlers and code display */
});