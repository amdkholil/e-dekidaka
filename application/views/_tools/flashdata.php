<?php
if($this->session->flashdata('success')==true){
	?>
	<div class="alert alert-success alert-dismissible fade show m-2" role="alert">
		<?= $this->session->flashdata('success'); ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php
}elseif ($this->session->flashdata('warning')==true) {
	?>
	<div class="alert alert-warning alert-dismissible fade show m-2" role="alert">
		<?= $this->session->flashdata('warning'); ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php
}elseif ($this->session->flashdata('danger')==true) {
	?>
	<div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
		<?= $this->session->flashdata('danger'); ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php
}
?>
<script type="text/javascript">
	$(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
});
</script>