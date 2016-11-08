
<div class="display-outer" id="unassigned-boxes">
    <h3> Unassigned Boxes </h3>
    <?php
        //uses default casino id which is 0
        $unassigned = new CasinoBoxes($dbcon->read_database(), 0);
        $unassignedBoxes = $unassigned->getBoxes();
        foreach ($unassignedBoxes as $box) {
    ?>
        <div class="promotion-preview-body promotion-preview-box box-settings">
            Box Id - <?php echo $box->getId(); ?>
            <span class="glyphicon glyphicon-cog tool-glyphicon white" aria-hidden="true"></span>
        </div>
        <?php } ?>
</div>

