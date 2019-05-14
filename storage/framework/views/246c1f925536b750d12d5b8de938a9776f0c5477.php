<script type="text/javascript">
    google.charts.setOnLoadCallback(drawPieChart)
    var <?php echo e($model->id); ?>;
    function drawPieChart() {
        var data = google.visualization.arrayToDataTable([
            ['Element', 'Value'],
            <?php for($i = 0; $i < count($model->values); $i++): ?>
                ["<?php echo $model->labels[$i]; ?>", <?php echo e($model->values[$i]); ?>],
            <?php endfor; ?>
        ])

        var options = {
            <?php echo $__env->make('charts::_partials.dimension.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            fontSize: 12,
            <?php echo $__env->make('charts::google.titles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('charts::google.colors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        };

        <?php echo e($model->id); ?> = new google.visualization.PieChart(document.getElementById("<?php echo e($model->id); ?>"))
        <?php echo e($model->id); ?>.draw(data, options)
    }
</script>

<?php if(!$model->customId): ?>
    <?php echo $__env->make('charts::_partials.container.div', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
