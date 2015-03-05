@extends('app')

@section('body-class')
home
@endsection

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>

@endsection
