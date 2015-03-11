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



<section class="col-xs-12 content-main">
    <h1 class="animated fadeInDown slogan1"> Laravel panel  </h1>
    <h1 class="animated fadeInDown slogan2">  an easy cool and powerful panel based on Laravel framework </h1>
    
    <div class="dashboard-box">
        
        <div class="img img-left    animated fadeInUp">      <img src="assets/img/serverfire-panel-dashboard-1.jpg" /></div>
        <div class="img img-center  animated fadeInUpBig">    <img src="assets/img/serverfire-panel-dashboard-2.jpg" /></div>
        <div class="img img-right   animated fadeInUp">     <img src="assets/img/serverfire-panel-dashboard-3.jpg" /></div>
        
    </div>
    
</section>


<section class="col-xs-12 feature-page">
    <br><br><br>
    <h4 class="animated fadeInDown slogan1">  evry powerful  projects need admin panel which should be easy , beautiful and customizable </h1>
    
    <h3 class="animated fadeInDown slogan1">  so ... why use laravel panel ? </h1>
    
    <div class="container feature-holder">
        
        
            <svg class="feature-line-svg w1" height="210" width="500" viewBox="0 0 800 800">
              <line class="path"   x1="50%" y1="10" x2="50%" y2="800" stroke-linecap="butt" style="stroke-width:1px;width:1px;" />
              <circle cx="50%" cy="775" r="24" stroke="black" stroke-width="0"  />
            </svg>
            <h3 class="feature-title"> Build in admin interface </h3>
            <h4 class="feature-desc">login , logout change password , dashboard , forgot password</h4>
        
        
            
        
            <svg class="feature-line-svg  w2" height="210" width="500" viewBox="0 0 800 800">
              <line class="path"   x1="50%" y1="10" x2="50%" y2="800" stroke-linecap="butt" style="stroke-width:1px;width:1px;" />
              <circle cx="50%" cy="775" r="24" stroke="black" stroke-width="0"  />
            </svg>
            <h3 class="feature-title">CRUD Generator </h3>
            <h4 class="feature-desc">easy to add entity and its CRUD with simple command</h4>
        
        
        
        
            <svg class="feature-line-svg  w3" height="210" width="500" viewBox="0 0 800 800">
              <line class="path"   x1="50%" y1="10" x2="50%" y2="800" stroke-linecap="butt" style="stroke-width:1px;width:1px;" />
              <circle cx="50%" cy="775" r="24" stroke="black" stroke-width="0"  />
            </svg>
            <h3 class="feature-title">import/export  </h3>
            <h4 class="feature-desc">import/export records of each entity</h4>
        
        
        
        
            <svg class="feature-line-svg w4" height="210" width="500" viewBox="0 0 800 800">
              <line class="path"   x1="50%" y1="10" x2="50%" y2="800" stroke-linecap="butt" style="stroke-width:1px;width:1px;" />
              <circle cx="50%" cy="775" r="24" stroke="black" stroke-width="0"  />
            </svg>
            <h3 class="feature-title">Language based  </h3>
            <h4 class="feature-desc">the panel has english italian  language</h4>
        
        
        
            
        
        </div>
        
    <div class="gap col-xs-hidden"></div>
</section>


    <!---------install--------->
    <div class="install-page" id="installing">
        
        <h2 class="heading-title">Instalation</h2>
        
        <div class="col-xs-12 col-md-6 step animated delay-1">
            <div class="col-xs-1 num">1</div>
            <div class="col-xs-10 text">
                 First you need to create a laravel 5 (or laravel 4.2) project.<br>
                Add our package to require section of composer<br>
                And run the composer update command, the package and its dependencies will be installed.
            </div>
            <div class="col-xs-12 col-md-11 col-xs-offset-0 col-md-offset-0"><pre class="brush:php;auto-links:false;toolbar:false" contenteditable="false">&lt;?php
        {
            "require": {
                "serverfireteam/panel": "1.2.*"
            },
        }
            </pre></div>
        </div>
         
        <div class="col-xs-12 col-md-6 step animated delay-3">
            <div class="col-xs-1 num">2</div>
            <div class="col-xs-10 text">
                 Add the ServiceProvider of the package to the list of providers in the config/app.php file
            </div>
            <div class="col-xs-12 col-md-11 col-xs-offset-0 "><pre class="brush:php;auto-links:false;toolbar:false" contenteditable="false">&lt;?php
        'providers' => array(
          'Serverfireteam\Panel\PanelServiceProvider'
        )
            </pre></div>
        </div>
         
        <div class="clearfix"></div>
        <div class="col-xs-12 col-md-6 step animated delay-5">
            <div class="col-xs-1 num">3</div>
            <div class="col-xs-10 text">
                 Run the following command in order to publish configs, views and assets.
            </div>
            <div class="col-xs-12 col-md-11 col-xs-offset-0 col-md-offset-0"><pre class="brush:bash;auto-links:false;toolbar:false" contenteditable="false">
            
            
            php artisan panel:install
            </pre></div>
        </div>
        
        <div class="col-xs-12 col-md-6 step animated delay-7">
            <div class="col-xs-1 num">4</div>
            <div class="col-xs-10 text">
                 Go to your domain.com/public/panel and you can login with the following username and password 
            </div>
            <div class="col-xs-12 col-md-11 col-xs-offset-0 col-md-offset-0"><pre class="brush:bash;auto-links:false;toolbar:false" contenteditable="false">
            user        : admin@change.me
            password    : 12345
            </pre></div>
        </div>
        
    </div>
    
    <div class="gap col-xs-hidden"></div>
    
    
     <!---------build CRUD--------->
    <div class="install-page">
        
        <h2 class="heading-title">build CRUD</h2>
        <div class="col-xs-12 col-md-6 step animated delay-5">
            <div class="col-xs-1 num">1</div>
            <div class="col-xs-10 text">
                 Run the following command in order to publish configs, views and assets.
            </div>
            <div class="col-xs-12 col-md-11 col-xs-offset-0 col-md-offset-0"><pre class="brush:bash;auto-links:false;toolbar:false" contenteditable="false">
            
            
            php artisan panel:install
            </pre></div>
        </div>
        <div class="col-xs-12 col-md-6 step animated delay-5">
            <div class="col-xs-1 num">2</div>
            <div class="col-xs-10 text">
                 Run the following command in order to publish configs, views and assets.
            </div>
            <div class="col-xs-12 col-md-11 col-xs-offset-0 col-md-offset-0"><pre class="brush:bash;auto-links:false;toolbar:false" contenteditable="false">
            
            
            php artisan panel:install
            </pre></div>
        </div>
        
    </div>
    

<div class="install-page">
        
        <h2 class="heading-title">our team</h2>
    
</div>




@endsection
