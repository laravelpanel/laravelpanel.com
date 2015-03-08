@extends('app')

@section('body-class')
home
@endsection

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">
    <div class="col-xs-4">
        Laravel Panel
    </div>
    
	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>



<section class="col-xs-12 content-main">
    <h1 class="animated fadeInDown slogan1"> Laravel panel  </h1>
    <h1 class="animated fadeInDown slogan2">  an easy cool and powerful admin panel based on Laravel framework </h1>
    
    <div class="dashboard-box">
        
        <div class="img img-left    animated fadeInUp">      <img src="assets/img/serverfire-panel-dashboard-1.jpg" /></div>
        <div class="img img-center  animated fadeInUpBig">    <img src="assets/img/serverfire-panel-dashboard-2.jpg" /></div>
        <div class="img img-right   animated fadeInUp">     <img src="assets/img/serverfire-panel-dashboard-3.jpg" /></div>
        
    </div>
    
</section>



@endsection
