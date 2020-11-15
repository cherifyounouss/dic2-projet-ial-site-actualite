@extends('layouts.master')

@section('content')
	     @if($action ?? ''=="articles")
                @include('layouts/masternavadmin2')
        	@include('Layouts.listearticles');
        @else
                @include('layouts/masternavadmin22')
        	@include('Layouts.listecategories')
        @endif

        @if(isset($estOk))
                @if($estOk ?? '')
                	<script type="text/javascript">
                		alert("Opération effectuée avec succés !");
                	</script>
                @else
                	<script type="text/javascript">
                		alert("Oups l'opération a échoué, veuillez réessayer utérieurement !");
                	</script>
                @endif
        @endif
@endsection
