<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!--page specific plugin scripts-->

<script src="<?php echo base_url();?>themes/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>themes/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>themes/js/jquery.dataTables.bootstrap.js"></script>

<script src="<?php echo base_url();?>themes/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url();?>themes/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>themes/js/bootbox.js"></script>

<!--inline scripts related to this page-->

<script type="text/javascript">
	$(function() {
		var oTable1 = $('#table-menu').dataTable( {
		"aoColumns": [
		  { "bSortable": true },
		  null,null,null,null,
		  { "bSortable": false }
		] } );
	
	
		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table');
			var off1 = $parent.offset();
			var w1 = $parent.width();
	
			var off2 = $source.offset();
			var w2 = $source.width();
	
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}
		
		//Confirm delete modal/dialog with Twitter bootstrap?
		// ---------------------------------------------------------- Generic Confirm  
		$("#cdelete").on(ace.click_event, function() {
			bootbox.dialog({
				message: "Are you sure, you want to delete this menu!",
				title: "Confirm Delete",
				buttons: {
					cancel: {
					  label: "Cancel",
					  className: "btn-default",
					  callback: function() {
						//Example.show("great success");
					  }
					},
					main: {
					  label: "Delete",
					  className: "btn-danger",
					  callback: function() {
						$('#del').submit();
					  }
					}
				}
			});
		});
		
		$('#validation-form').validate({
			errorElement: 'span',
			errorClass: 'help-inline',
			focusInvalid: false,
			rules: {
				custom_title: {
					required: true
				},
				url_menu: {
					required:true
				},
				tid: {
					required:true
				}
			},
	
			/* messages: {
				password_new: {
					required: "Please specify a password.",
					minlength: "Please specify a secure password."
				}
			}, */
	
			invalidHandler: function (event, validator) { //display error alert on form submit   
				//$('.alert-error', $('.login-form')).show();
			},
	
			highlight: function (e) {
				$(e).closest('.control-group').removeClass('info').addClass('error');
			},
	
			success: function (e) {
				$(e).closest('.control-group').removeClass('error').addClass('info');
				$(e).remove();
			},
	
			submitHandler: function (form) {
				form.submit();
			},
			invalidHandler: function (form) {
			}
		});
		
		$("#Parent").change(function() {
			var parent_id = $('#Parent').val();
			$.post('<?php echo @$url_tid; ?>',{parent_id:parent_id},function(result){
				if (result.success){
					document.getElementById('OrderNumber').value = result.tid;
				} else {
					alert(result.msg);
				}
			},'json');
		});
	})
</script>