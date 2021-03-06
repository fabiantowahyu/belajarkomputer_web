<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<br><br>
<div class="row-fluid">
	<h3 class="header smaller lighter blue">
		<?php 
		echo anchor('Province', $title, array('class'=>'link-control')); 
		echo nbs(2);
		echo anchor('province/CTRL_New', '<i class="icon-plus"></i>', array('class'=>'btn btn-danger btn-mini'));
		?>
	</h3>

	<table id="table-province" class="table table-striped table-bordered table-hover">
		<thead class="danger">
			<tr>
				<th width="100">Province Code</th>
				<th width="150">Province Name</th> 
				<th width="150">Country</th> 
				<th width="50" class="center">Action</th> 
			</tr>
		</thead>

		<tbody>
			<?php foreach ($results as $row) { ?>
			<tr>
				<td><?php echo $row->province_code; ?></td>
				<td><?php echo $row->province_name; ?></td>
				<td><?php echo $row->country_name; ?></td>
				<td class="center">
					<?php 
						echo anchor('province/CTRL_Edit/' . $row->id, '<button class="btn btn-mini btn-info"><i class="icon-edit bigger-120"></i></button>');
					?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>