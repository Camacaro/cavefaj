@push('css')
	<!-- Select2 -->
    <?= Html::style('bower_components/select2/dist/css/select2.min.css'); ?>

@endpush


@push('js')
	<!-- Select2 -->
    <?= Html::script('bower_components/select2/dist/js/select2.full.min.js'); ?>

    <script type="text/javascript">
    	$('.select2').select2();	
    </script>
    

@endpush