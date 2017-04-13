<?php
	$this->set_css($this->default_theme_path.'/bootstrap/css/bootstrap.min.css');
	$this->set_css($this->default_theme_path.'/bootstrap/css/bootstrap-responsive.min.css');
	$this->set_js($this->default_javascript_path.'/'.grocery_CRUD::JQUERY);
	$this->set_js($this->default_theme_path.'/bootstrap/js/cookies.js');
	$this->set_js($this->default_theme_path.'/bootstrap/js/flexigrid.js');
	$this->set_js($this->default_theme_path.'/bootstrap/js/jquery.form.js');
	$this->set_js($this->default_theme_path.'/bootstrap/js/jquery.numeric.js');
	$this->set_js($this->default_theme_path.'/bootstrap/js/jquery.printElement.min.js');

?>
<script type='text/javascript'>
	var base_url = '<?php echo base_url();?>';

	var subject = '<?php echo $subject?>';
	var ajax_list_info_url = '<?php echo $ajax_list_info_url?>';
	var unique_hash = '<?php echo $unique_hash; ?>';

	var message_alert_delete = "<?php echo $this->l('alert_delete'); ?>";

</script>
<div id="hidden-operations"></div>
<div id="report-error" class="report-div error"></div>
<div id="report-success" class="report-div success report-list" <?php if($success_message !== null){?>style="display:block"<?php }?>>
<?php if($success_message !== null){?>
	<p><?php echo $success_message; ?></p>
<?php }?>
</div>
<div class="flexigrid" style="width: 100%;">
	<div class="mDiv">
		<h3 class="ftitle">
			<?php echo $subject?>
		</h3>
		<div title="<?php echo $this->l('minimize_maximize');?>" class="ptogtitle">
			<span></span>
		</div>
	</div>
	<div id="main-table-box">

	<?php if(!$unset_add || !$unset_export || !$unset_print){?>
	<p>
		<?php if(!$unset_add){?>
        	<a href="<?php echo $add_url?>" title="<?php echo $this->l('list_add'); ?> <?php echo $subject?>" class="btn btn-success btn-small"><?php echo $this->l('list_add'); ?> <?php echo $subject?></a>
		<?php }?>
		<?php if(!$unset_export) { ?>
    		<a class="btn btn-info btn-small" href="<?php echo $export_url; ?>" target="_blank">
			<?php echo $this->l('list_export');?></a>
		<?php } ?>
		<?php if(!$unset_print) { ?>
    		<a class="btn btn-info btn-small" href="<?php echo $print_url; ?>">
			<?php echo $this->l('list_print');?></a>
		<?php }?>
	</p>
	<?php }?>

	<div id="ajax_list">
		<?php echo $list_view?>
	</div>
	<?php echo form_open( $ajax_list_url, 'method="post" id="filtering_form" autocomplete = "off"  class="form-inline"'); ?>

		<select name="search_field" id="search_field" class="input-medium">
			<option value=""><?php echo $this->l('list_search_all');?></option>
			<?php foreach($columns as $column){?>
			<option value="<?php echo $column->field_name?>"><?php echo $column->display_as?>&nbsp;&nbsp;</option>
			<?php }?>
		</select>
		<input type="text" class="qsbsearch_fieldox" name="search_text" id='search_text'>
        <input type="button" value="<?php echo $this->l('list_search');?>" id='crud_search' class="btn">
    	<input type="button" value="<?php echo $this->l('list_clear_filtering');?>" id='search_clear' class="btn">
		<select name="per_page" id='per_page' class="input-mini">
			<?php foreach($paging_options as $option){?>
				<option value="<?php echo $option; ?>" <?php if($option == $default_per_page){?>selected="selected"<?php }?>><?php echo $option; ?>&nbsp;&nbsp;</option>
			<?php }?>
		</select>
		<input type="hidden" name="order_by[0]" id="hidden-sorting" value="<?php if(!empty($order_by[0])){?><?php echo $order_by[0]?><?php }?>" />
		<input type="hidden" name="order_by[1]" id="hidden-ordering" value="<?php if(!empty($order_by[1])){?><?php echo $order_by[1]?><?php }?>" />
		<span class="btn pFirst pButton first-button"><i class="icon-fast-backward"></i></span>
		<span class="btn pPrev pButton prev-button"><i class="icon-step-backward"></i></span>
		<span class="btn pNext pButton next-button"><i class="icon-step-forward"></i></span>
		<span class="btn pLast pButton last-button"><i class="icon-fast-forward"></i></span>
		<span class="pcontrol"><?php echo $this->l('list_page'); ?> <input name="page" type="text" value="1" id="crud_page" class="span1">
		<?php echo $this->l('list_paging_of'); ?> </span>
		<span id="last-page-number"><?php echo ceil($total_results / $default_per_page)?></span>

		<button class="btn"><i class="pReload pButton icon-repeat" id='ajax_refresh_and_loading'></i></button>

	<?php echo form_close(); ?>
	<p class="pPageStat">
		<?php $paging_starts_from = "<span id='page-starts-from'>1</span>"; ?>
		<?php $paging_ends_to = "<span id='page-ends-to'>". ($total_results < $default_per_page ? $total_results : $default_per_page) ."</span>"; ?>
		<?php $paging_total_results = "<span id='total_items'>$total_results</span>"?>
		<?php echo str_replace( array('{start}','{end}','{results}'),
								array($paging_starts_from, $paging_ends_to, $paging_total_results),
								$this->l('list_displaying')
							   ); ?>
	</p>
	</div>
</div>
