@extends('layouts.app')

@section('content')

            <!-- start page-title -->
            <section class="page-title" style="background-image: url('{{ asset('assets/images/bee/bg3.jpg') }}')">
                <div class="page-title-container">
                    <div class="page-title-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col col-xs-12">
                                    <h2 style="color: #fff">Contact</h2>
                                    <ol class="breadcrumb">
                                        <li><a style="color: #ddd" href="/">Home</a></li>
                                        <li style="color: #fff">Contact</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end container -->
                    </div>
                </div>
            </section>
            <!-- end page-title -->     
    
    
            <!-- start contact-section -->
            <section class="contact-section contact-pg-section section-padding">
                <div class="container-1410">
                    <div class="row">
                        <div class="col col-lg-10 col-lg-offset-1">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <i class="pe-7s-culture"></i>
                                        <h4>Office address</h4>
                                        <p>Ailded frame  showed a lady fitted out with fur hat and fur boa who sat upright</p>
                                    </li>
                                    <li>
                                        <i class="pe-7s-phone"></i>
                                        <h4>Phone number</h4>
                                        <p>54875465-65741895-6547 <br /> 2222-3333-4444-555</p>
                                    </li>
                                    <li>
                                        <i class="pe-7s-mail"></i>
                                        <h4>Email us</h4>
                                        <p>zango@mail.com <br />example@mail.com</p>
                                    </li>
                                    <li>
                                        <i class="pe-7s-alarm"></i>
                                        <h4>Office time</h4>
                                        <p>10AM - 5 PM <br /> Sunday closed</p>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="contact-form-col">
                                <h2>Let’s talk to us</h2>
                                @if (session()->has('status'))
                                    <div class="alert alert-primary" role="alert">
                                        <span>Message sent successfully</span>
                                    </div>
                                    @endif
                                <div class="contact-form">
                                    <form method="post" action="{{ route('store.contact') }}" class="contact-validation-active" id="contact-form-main">
                                        @csrf

                                        <div>
                                            <input type="text" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name" placeholder="Name*">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div>
                                            <input type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email" placeholder="Email*">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="fullwidth">
                                            <select name="subject" class="@error('subject') is-invalid @enderror" value="{{ old('subject') }}">
                                                <option disabled="disabled" selected>Contact subject</option>
                                                <option>Purchase</option>
                                                <option>Complaint</option>
                                                <option>Others</option>
                                            </select>
                                            @error('subject')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="fullwidth">
                                            <textarea name="complaint"  id="complaint" class="@error('complaint') is-invalid @enderror" value="{{ old('complaint') }}" placeholder="Case Description..."></textarea>
                                            @error('complaint')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="submit-area">
                                            <button type="submit" class="theme-btn">Submit It Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end contact-section-s3 -->  
    
    
            <!--  start contact-map -->
            <section class="contact-map-section">
                <h2 class="hidden">Contact map</h2>
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
                </div>
            </section>
            <!-- end contact-map -->   

@endsection