<div class="row">
    <?php $i=1; foreach ($line as $row) {  ?>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-3 mb-md-2 mb-sm-1 mb-1">
        <div class="card">
            <div class="card-header text-center">
                <a href="<?= site_url() ?>dashboard"><?= $row->nama ?></a>
            </div>
            <div class="card-body">
                <div id="chart1"></div>
            </div>
        </div>
    </div>
    <?php if ($i==4) { echo `</div><div class="row">`; $i=0; } $i++; } ?>
</div>


<div id="test"></div>




<script src="<?= site_url() ?>plugin/c3js/d3.js"></script>
<script src="<?= site_url() ?>plugin/c3js/c3.js"></script>
<script src="<?= site_url() ?>assets/js/dashboard.js"></script>