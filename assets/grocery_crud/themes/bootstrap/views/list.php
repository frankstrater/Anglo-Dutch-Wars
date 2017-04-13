<?php

	$column_width = (int)(80/count($columns));

	if(!empty($list)){
?>
	<div class="bDiv" >
		<table id="flex1" class="table table-striped table-bordered">
		<thead>
			<tr>
				<?php foreach($columns as $column) { ?>
				<th>
					<div class="field-sorting <?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?><?php echo $order_by[1]?><?php } ?>"
						rel="<?php echo $column->field_name?>">
						<?php echo $column->display_as?>
						<?php
							if(isset($order_by[0]) &&  $column->field_name == $order_by[0]) {
								if ($order_by[1] == 'asc') {
									$icon_class = 'icon-chevron-up';
								}
								if ($order_by[1] == 'desc') {
									$icon_class = 'icon-chevron-down';
								}
						?>
						<i class="<?php echo $icon_class ?>"></i>
						<?php
							}
						?>
					</div>
				</th>
				<?php } ?>
				<?php if(!$unset_delete || !$unset_edit || !empty($actions)){?>
				<th width="100">
					<!--<?php echo $this->l('list_actions'); ?>-->
				</th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
<?php foreach($list as $num_row => $row) { ?>
		<tr>
			<?php foreach($columns as $column) { ?>
			<td class="<?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?>sorted<?php } ?>">
				<?php echo $row->{$column->field_name} != '' ? $row->{$column->field_name} : '&nbsp;' ; ?>
			</td>
			<?php } ?>
			<?php if(!$unset_delete || !$unset_edit || !empty($actions)){?>
			<td>
				<div class="tools">
					<div class="btn-group">
					<?php if(!$unset_edit){?>
						<a href="<?php echo $row->edit_url?>" title="<?php echo $this->l('list_edit')?> <?php echo $subject?>" class="btn btn-warning btn-small">Edit</a>
					<?php } ?>
					<?php if(!$unset_delete){?>
                    	<a href="<?php echo $row->delete_url?>" title="<?php echo $this->l('list_delete')?> <?php echo $subject?>" class="delete-row btn btn-danger btn-small">Delete</a>
                    <?php } ?>
                	</div>
					<?php
					if (!empty($row->action_urls)) {
						foreach($row->action_urls as $action_unique_id => $action_url) {
							$action = $actions[$action_unique_id];
					?>
							<a href="<?php echo $action_url; ?>" class="<?php echo $action->css_class; ?> crud-action" title="<?php echo $action->label?>"><?php
								if(!empty($action->image_url))
								{
									?><img src="<?php echo $action->image_url; ?>" alt="<?php echo $action->label?>" /><?php
								}
							?></a>
					<?php }
					}
					?>
                    <div class="clear"></div>
				</div>
			</td>
			<?php } ?>
		</tr>
<?php } ?>
		</tbody>
		</table>
	</div>
<?php }else{?>
	<br/>
	&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $this->l('list_no_items'); ?>
	<br/>
	<br/>
<?php } ?>