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
    <h1 class="animated fadeInDown slogan1"> Laravel Panel  </h1>
    <h1 class="animated fadeInDown slogan2"> An easy, cool and powerful Admin Panel based on Laravel framework </h1>
    <a href="http://demo.serverfire.net" target="_blank" class="demo-link">Demo</a>
    
    <div class="dashboard-box">
        
        <div class="img img-left    animated fadeInUp">      <img src="assets/img/serverfire-panel-dashboard-1.jpg" /></div>
        <div class="img img-center  animated fadeInUpBig">    <img src="assets/img/serverfire-panel-dashboard-2.jpg" /></div>
        <div class="img img-right   animated fadeInUp">     <img src="assets/img/serverfire-panel-dashboard-3.jpg" /></div>
        
    </div>
    
</section>


<section class="col-xs-12 feature-page">
    <br><br><br>
    <h4 class="animated fadeInDown slogan1">  Every powerful project needs an admin panel which should be easy, beautiful and customizable </h1>
    
    <h3 class="animated fadeInDown slogan1">  So ... Why use Laravel Panel ? </h1>
    
    <div class="container feature-holder">
        
        
            <svg class="feature-line-svg w1" height="210" width="100%" viewBox="0 0 800 800">
              <line class="path"   x1="50%" y1="10" x2="50%" y2="800" stroke-linecap="butt" style="stroke-width:1px;width:1px;" />
              <circle cx="50%" cy="775" r="24" stroke="black" stroke-width="0"  />
            </svg>
            <h3 class="feature-title"> Built-in Admin Interface </h3>
            <h4 class="feature-desc">Login, Logout, Change Password, Dashboard, Forgot Password</h4>
        
        
            
        
            <svg class="feature-line-svg  w2" height="210" width="100%" viewBox="0 0 800 800">
              <line class="path"   x1="50%" y1="10" x2="50%" y2="800" stroke-linecap="butt" style="stroke-width:1px;width:1px;" />
              <circle cx="50%" cy="775" r="24" stroke="black" stroke-width="0"  />
            </svg>
            <h3 class="feature-title">CRUD Generator </h3>
            <h4 class="feature-desc">Easy to add entity and its CRUD with a simple command</h4>
        
        
        
        
            <svg class="feature-line-svg  w3" height="210" width="100%" viewBox="0 0 800 800">
              <line class="path"   x1="50%" y1="10" x2="50%" y2="800" stroke-linecap="butt" style="stroke-width:1px;width:1px;" />
              <circle cx="50%" cy="775" r="24" stroke="black" stroke-width="0"  />
            </svg>
            <h3 class="feature-title">Import/Export  </h3>
            <h4 class="feature-desc">import/export records of each entity</h4>
        
        
        
        
            <svg class="feature-line-svg w4" height="210" width="100%" viewBox="0 0 800 800">
              <line class="path"   x1="50%" y1="10" x2="50%" y2="800" stroke-linecap="butt" style="stroke-width:1px;width:1px;" />
              <circle cx="50%" cy="775" r="24" stroke="black" stroke-width="0"  />
            </svg>
            <h3 class="feature-title">Language Based  </h3>
            <h4 class="feature-desc">The Panel supports english, italian and armenian languages and it's really easy to add support for your native language</h4>
        
        
        
            
        
        </div>
        
    <div class="gap col-xs-hidden"></div>
</section>


    <!---------install-------->
    <div class="install-page" id="installing">
        
        <div class="heading-title"><h2>Installation</h2></div>
        
        <div class="col-xs-12 col-md-6 step animated delay-1">
            <div class="col-xs-2 col-md-1 num">1</div>
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
            <div class="col-xs-2 col-md-1 num">2</div>
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
            <div class="col-xs-2 col-md-1 num">3</div>
            <div class="col-xs-10 text">
                 Run the following command in order to migrate and publish configs, views and assets.
            </div>
            <div class="col-xs-12 col-md-11 col-xs-offset-0 col-md-offset-0"><pre class="brush:bash;auto-links:false;toolbar:false" contenteditable="false">
            
            
            php artisan panel:install
            </pre></div>
        </div>
        
        <div class="col-xs-12 col-md-6 step animated delay-7">
            <div class="col-xs-2 col-md-1 num">4</div>
            <div class="col-xs-10 text">
                 Go to your domain.com/panel and you can login with the following username and password 
            </div>
            <div class="col-xs-12 col-md-11 col-xs-offset-0 col-md-offset-0"><pre class="brush:bash;auto-links:false;toolbar:false" contenteditable="false">
            user        : admin@change.me
            password    : 12345
            </pre></div>
        </div>
        
    </div>
    
    <div class="gap col-xs-hidden"></div>
    
    
     <!---------build CRUD-------->
    <div class="install-page">
        
        <div class="heading-title"><h2>Build the CRUD</h2></div>
        <div class="col-xs-12 col-md-6 col-xs-offset-0 col-md-offset-3 step animated delay-5">
            <div class="col-xs-2 col-md-1 num">1</div>
            <div class="col-xs-10 text">
                 You can run just a single command to build a CRUD :
            </div>
            <div class="col-xs-12 col-md-11 col-xs-offset-0 col-md-offset-0"><pre class="brush:bash;auto-links:false;toolbar:false" contenteditable="false">
            
            
            php artisan panel:crud entity-name
            </pre></div>
        </div>
        <div class="clear-fix"></div>
        
        
    </div>

    
<br><br><br><br><br><br><br><br>
<div class="team-box ">
    <a name="our-team"></a>
    <div class="heading-title"><h2 >Our Team</h2></div>
    <div class="clear-fix"></div>
        <div class="row ">
            
            <div class="team-holder col-xs-12 col-xs-offset-0  col-md-3 col-md-offset-0 ">
                <div class="bg-holder col-xs-12 col-md-8 col-md-offset-2"><div class="bg"></div>
                    <img class="img-responsive" src="assets/img/hamid-reza-salimian.jpg" />
                </div>
                <div class="title col-xs-12">Hamid Reza Salimian</div>
                <div class="desc col-xs-12">Front-End Developer</div>
            </div>
            
            <div class="team-holder col-xs-12 col-xs-offset-0  col-md-3 col-md-offset-0 ">
                <div class="bg-holder col-xs-12 col-md-8 col-md-offset-2"><div class="bg"></div>
                    <img class="img-responsive" src="assets/img/ali-aboutalebi.jpg" />
                </div>
                <div class="title col-xs-12">Ali Reza Aboutalebi</div>
                <div class="desc col-xs-12">Web Developer</div>
            </div>
            
            <div class="team-holder col-xs-12 col-xs-offset-0  col-md-3 col-md-offset-0 ">
                <div class="bg-holder col-xs-12 col-md-8 col-md-offset-2"><div class="bg"></div>
                    <img class="img-responsive" src="assets/img/siavash-izadkhasti.jpg" />
                </div>
                <div class="title col-xs-12">Siavash Izadkhasti</div>
                <div class="desc col-xs-12">Web Developer</div>
            </div>
            
            <div class="team-holder col-xs-12 col-xs-offset-0  col-md-3 col-md-offset-0 ">
                <div class="bg-holder col-xs-12 col-md-8 col-md-offset-2"><div class="bg"></div>
                    <img class="img-responsive" src="assets/img/alenoosh-baghumian.jpg" />
                </div>
                <div class="title col-xs-12">Alenoosh Baghumian</div>
                <div class="desc col-xs-12">Web Developer</div>
            </div>
            
            
            
        </div>
        
    
</div>






@endsection
