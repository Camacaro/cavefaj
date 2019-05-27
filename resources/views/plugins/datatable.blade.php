@push('css')
    <!-- DataTables CSS -->
    <?= Html::style('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>

@endpush


@push('js')
    <!-- DataTables JavaScript -->
    <?= Html::script('bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>
    <?= Html::script('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>

@endpush