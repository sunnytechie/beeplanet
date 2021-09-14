@extends('layouts.app')

@section('content')

    <!-- start page-title -->
    <section class="page-title" style="background-image: url('{{ asset('assets/images/bee/bg4.jpg') }}')">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <h2 style="color: #fff">My account</h2>
                            <ol class="breadcrumb">
                                <li><a style="color: #ddd" href="/">Home</a></li>
                                <li style="color: #fff">My account</li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->     

@guest
<!-- start my-account-section -->
    <section class="my-account-section p-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h5>You're either not logged in or do not have a profile with BeeSmartPlanet</h5>
                    @if (Route::has('login'))
                                
                                    <a class="woocommerce-button button woocommerce-form-login__submit" href="{{ route('login') }}">{{ __('Login') }}</a>
                                
                            @endif
                 </div>
                          
            </div>  
        </div>
    </section>
    <!-- end my-account-section -->
    @else
    <!-- start my-account-section -->
    <section class="my-account-section p-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h2>Personal Info</h2>
                    <section method="post" class="woocommerce-form woocommerce-form-register register">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="reg_email">Full Name&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="reg_name" autocomplete="name" value="{{ Auth::user()->name }}"/>            
                         </p>

                       <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                          <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" value="{{ Auth::user()->email }}" />            
                       </p>

                       <div class="woocommerce-privacy-policy-text">
                          <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                       </div>
                       
                       <div>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" class="woocommerce-button button woocommerce-form-login__submit">
                         Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>

                    </section>
                 </div>
                          
            </div>  
        </div>
    </section>
    <!-- end my-account-section -->
@endguest
    

@endsection