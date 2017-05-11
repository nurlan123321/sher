@extends('layouts.site')
@section('content')

@if(isset($pages))
@foreach($pages as $page)
<section id="hero_section" class="top_cont_outer">
    <div class="hero_wrapper">
        <div class="container">
            <div class="hero_section">
                <div class="row">
                    <div class="col-lg-5 col-sm-7">
                        <div class="top_left_cont zoomIn wow animated"> 
                            <h2>{!!$page['name'] !!}</h2>
                            <div class="bubble">
                                <div class="bubble-in">
                                    <h4>Звоните сейчас</h4>
                                    <p>{{$page['owka']}}</p>
                                    <p>{{$page['megacom']}}</p>
                                    <p>{{$page['billain']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-5 img-top">
                    <!-- Connect Image DataBase HELPER HTML::IMAGE-->
                    {!! Html::image('img/' . $page['images']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endif
<!--Hero_Section--> 
@if(isset($about))
@foreach($about as $about)
<section id="aboutUs"><!--Aboutus-->
    <div class="inner_wrapper">
        <div class="container">
            <h2>About Us</h2>
            <div class="inner_section">
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                        {!! Html::image('img/' . $about['images'], '',array('class' => 'img-circle delay-03s animated wow zoomIn')) !!}
                    </div>
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated">
                            <h3>{{$about['title']}}</h3><br/> 
                            {!! $about['text'] !!}
                        </div>
                     </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<!--Aboutus--> 
@endforeach
@endif
<!--Service-->
<section  id="service">
    <div class="container">
        <h2>Services</h2>
        <div class="service_wrapper">
            @foreach($services as $k => $service)
            @if($k == 0 || $k%3 == 0)
                <div class="row {{ ($k != 0) ? 'borderTop' : '' }}">
            @endif
            <div class="col-sm-4 {{ ($k%3 > 0) ? 'borderLeft' : '' }} {{($k > 2) ? 'mrgTop' : ''}}">
                <div class="service_block">
                    <div class="service_icon delay-03s animated wow  zoomIn">  {!! Html::image('img/' . $service['images']) !!}
                    </div>
                    <h3 class="animated fadeInUp wow">{{$service['name']}}</h3>
                    {!!$service['text']!!}
                </div>
            </div>
            @if(($k + 1)%3 == 0)
            </div><!--END ROW DIV-->
            @endif
            @endforeach
        </div>
    </div>
</section>
<!--Service-->

<section class="page_section" id="clients"><!--page_section-->
  <h2>Clients</h2>
<!--page_section-->
<div class="client_logos"><!--client_logos-->
  <div class="container">
    <ul class="fadeInRight animated wow">
      <li><a href="javascript:void(0)"><img src="img/client_logo1.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/client_logo2.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/client_logo3.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/client_logo5.png" alt=""></a></li>
    </ul>
  </div>
</div>
</section>
<!--client_logos-->
<section class="page_section team" id="team"><!--main-section team-start-->
    <div class="container">
        <h2>Team</h2>
        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
        <div class="team_section clearfix">
        @if(isset($peoples))
        @foreach($peoples as $people)
            <div class="team_area">
                <div class="team_box wow fadeInDown delay-03s">
                    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                        {!! Html::image('img/' . $people['images']) !!}
                        <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-03s">{{$people['name']}}</h3>
                    <span class="wow fadeInDown delay-03s">{{$people['position']}}</span>
                    <p class="wow fadeInDown delay-03s">{!!$people['text']!!}</p>
                </div>
        @endforeach
        @endif 
        </div> 
    </div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
        @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">	
		 <div class="contact_info">
            <div class="detail">
                <h4>UNIQUE Infoway</h4>
                <p>104, Some street, NewYork, USA</p>
            </div>
            <div class="detail">
                <h4>call us</h4>
                <p>+1 234 567890</p>
            </div>
            <div class="detail">
                <h4>Email us</h4>
                <p>support@sitename.com</p>
            </div> 
        </div>
       		  
			  
          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">       
				<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
    <form action="{{ route('home') }}" method="post" data-parsley-validate id="form"> 
           
                <input type="text" class="form-control input-text" 
                placeholder="Full Name" name="name" required="" />
    
           
                <input type="email" name="mail" class="form-control input-text" placeholder="Email" required="messages.en" />
    
          
                <textarea rows="10" cols="100" class="form-control input-text" 
                placeholder="Message" name="text" required=""></textarea>
            
        
        
        <button type="submit" class="btn btn-primary input-btn pull-right">Send</button><br />
        {{ csrf_field() }}
    </form>




          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
  

