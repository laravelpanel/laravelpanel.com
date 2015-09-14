@extends('app')

@section('content')



<div class="container-fluid">
    <div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
		  {!! $index !!}
		</div>

		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<article>
				{!! $content !!}
			</article>
		</div>
	</div>
</div>
@endsection

