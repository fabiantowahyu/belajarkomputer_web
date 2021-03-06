<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>



<script src="<?php echo base_url(); ?>themes/js/jquery.validate.min.js"></script>

<script src="<?php echo base_url(); ?>themes/js/jquery.colorbox-min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/css/colorbox.css" />
<script src="<?php echo base_url(); ?>themes/js/jquery.slimscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>


<!--inline scripts related to this page-->
<style>

.ace-thumbnails{list-style:none;margin:0;padding:0}.ace-thumbnails>li{float:left;display:block;position:relative;overflow:hidden;margin:2px;border:2px solid #333}.ace-thumbnails>li>:first-child{display:block;position:relative}.ace-thumbnails>li .tags{display:inline-block;position:absolute;bottom:0;right:0;left:0;overflow:visible;opacity:.9;filter:alpha(opacity=90);direction:rtl;padding:0;margin:0;height:auto;width:auto;background-color:transparent;border:0;vertical-align:inherit}.ace-thumbnails>li .tags>.label{display:table;margin:1px 1px 0 0;direction:ltr;text-align:left}.ace-thumbnails>li>.tools{position:absolute;top:0;bottom:0;left:-30px;width:24px;background-color:rgba(0,0,0,0.55);text-align:center;vertical-align:middle;-webkit-transition:all .2s ease;-moz-transition:all .2s ease;-o-transition:all .2s ease;transition:all .2s ease}.ace-thumbnails>li>.tools.tools-right{left:auto;right:-30px}.ace-thumbnails>li>.tools.tools-bottom{width:auto;height:28px;left:0;right:0;top:auto;bottom:-30px}.ace-thumbnails>li>.tools.tools-top{width:auto;height:28px;left:0;right:0;top:-30px;bottom:auto}.ace-thumbnails>li:hover>.tools{left:0}.ace-thumbnails>li:hover>.tools.tools-bottom{top:auto;bottom:0}.ace-thumbnails>li:hover>.tools.tools-top{bottom:auto;top:0}.ace-thumbnails>li:hover>.tools.tools-right{left:auto;right:0}.ace-thumbnails>li>.tools>a,.ace-thumbnails>li>:first-child .inner a{display:inline-block;color:#FFF;font-size:18px;font-weight:normal;padding:4px}.ace-thumbnails>li>.tools>a:hover,.ace-thumbnails>li>:first-child .inner a:hover{text-decoration:none;color:#c9e2ea}.ace-thumbnails>li .tools.tools-bottom>a,.ace-thumbnails>li .tools.tools-top>a{display:inline-block}.ace-thumbnails>li>:first-child>.text{position:absolute;right:0;left:0;bottom:0;top:0;text-align:center;color:#FFF;background-color:rgba(0,0,0,0.55);opacity:0;filter:alpha(opacity=0);-webkit-transition:all .2s ease;-moz-transition:all .2s ease;-o-transition:all .2s ease;transition:all .2s ease}.ace-thumbnails>li>:first-child>.text:before{content:'';display:inline-block;height:100%;vertical-align:middle;margin-right:0}.ace-thumbnails>li>:first-child>.text>.inner{padding:4px 0;margin:0;display:inline-block;vertical-align:middle;max-width:90%}.ace-thumbnails>li:hover>:first-child>.text{opacity:1;filter:alpha(opacity=100)}.dialogs{padding:9px 9px 0;position:relative}

</style>
<script type="text/javascript">


$(document).ready(function() {
  
    
    $('#table_article').DataTable();
} );

    $(function () {

     
        $('.pic_browser').slimScroll({
            height: '350px'
        });



        $('#validation-form').validate({
            rules: {
                judul_istilah: {
                    required: true
                },
            },

         
            
        });

});

    $(function () {
        var colorbox_params = {
            reposition: true,
            scalePhotos: true,
            scrolling: false,
            previous: '<i class="icon-arrow-left"></i>',
            next: '<i class="icon-arrow-right"></i>',
            close: '&times;',
            current: '{current} of {total}',
            maxWidth: '100%',
            maxHeight: '100%',
            onOpen: function () {
                document.body.style.overflow = 'hidden';
            },
            onClosed: function () {
                document.body.style.overflow = 'auto';
            },
            onComplete: function () {
                $.colorbox.resize();
            }
        };

        $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
        $("#cboxLoadingGraphic").append("<i class='icon-spinner orange'></i>");//let's add a custom loading icon

      
    });

   
    function CopyUrl(images)
    {
        alert("Url copied !")
        url = "<?php echo base_url();?>file_upload/picture/"+images;
  
        new Clipboard('.btn_copy', {
            text: function () {
                return url;
            }
        });
        
    }



</script>