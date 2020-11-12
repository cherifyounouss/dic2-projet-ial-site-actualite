@extends('layouts.master')
@include('layouts/_masternavadmin2')

@section('content')
	     @if($action=="articles")
        	@include('Layouts.listearticles');
        @else
        	@include('Layouts.listecategories')
        @endif

        @if($estOk ?? '')
        	<script type="text/javascript">
        		alert("Opération effectuée avec succés !");
        	</script>
        @else
        	<script type="text/javascript">
        		aler("Oups l'opération a échoué, veuillez réessayer utérieurement !");
        	</script>
        @endif
@endsection
