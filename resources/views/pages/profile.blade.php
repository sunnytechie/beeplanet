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


    <!-- start my-account-section -->
    <section class="my-account-section p-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h2>Register</h2>
                    <form method="post" class="woocommerce-form woocommerce-form-register register">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="reg_email">Full Name&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="reg_name" autocomplete="name" />            
                         </p>

                       <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                          <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" />            
                       </p>

                       <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                           <label for="reg_email">Choose Password&nbsp;<span class="required">*</span></label>
                           <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" />            
                        </p>

                       <div class="woocommerce-privacy-policy-text">
                          <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                       </div>
                       <p>
                           <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Register">Register</button>
                       </p>
                    </form>
                 </div>


                          <div class="col-md-6">
                             <h2>Login</h2>
                             <form class="woocommerce-form woocommerce-form-login login" method="post">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                   <label for="username">Email address&nbsp;<span class="required">*</span></label>
                                   <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" autocomplete="email" />            
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                   <label for="password">Password&nbsp;<span class="required">*</span></label>
                                   <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                                </p>
                                <p class="form-row">
                                   <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                   <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
                                   </label>
                                   <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="f0e969fd27" /><input type="hidden" name="_wp_http_referer" value="/my-account/" />               
                                   
                                </p>
                                <p><button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button></p>
                                <p class="woocommerce-LostPassword lost_password">
                                   <a href="http://proffer.themegeniuslab.com/my-account/lost-password/">Lost your password?</a>
                                </p>
                             </form>
                          </div>


                          
            </div>  
        </div>
    </section>
    <!-- end my-account-section -->

@endsection