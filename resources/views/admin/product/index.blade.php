@extends('layouts.app')

@section('content')

            <!-- start page-title -->
            <section class="page-title" style="background-image: url('{{ asset('assets/images/bee/bg3.jpg') }}')">
                <div class="page-title-container">
                    <div class="page-title-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col col-xs-12">
                                    <h2 style="color: #fff">Admin Dashboard</h2>
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
    
            <!-- start Admin -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 p-5">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-add-item" data-toggle="tab" href="#item-new" role="tab" aria-controls="item-new" aria-selected="true">Add New Product</a>
                              <a class="nav-item nav-link" id="nav-item-tab" data-toggle="tab" href="#nav-item" role="tab" aria-controls="nav-item" aria-selected="false">All Product</a>
                              <a class="nav-item nav-link" id="nav-subscribers-tab" data-toggle="tab" href="#nav-subscribers" role="tab" aria-controls="nav-subscribers" aria-selected="false">Subscribers List</a>
                              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact List</a>
                            </div>
                          </nav>

                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="item-new" role="tabpanel" aria-labelledby="nav-add-item">
                                <div class="form p-4 shadow">
                                    <h2>Post New Item</h2>
                                    <div class="contact-form">
                                        <!-- Form -->
                                        <form method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">
                                                @csrf
                                                
                                            <div class="form-group">
                                                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" placeholder="Title*"  value="{{ old('title')}}">

                                                @error('title')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
                                            	@enderror
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" placeholder="Price (optional)"  value="{{ old('price')}}">

                                                @error('price')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
                                            	@enderror
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control @error('badge') is-invalid @enderror" type="text" name="badge" id="badge" placeholder="Badge (optional)"  value="{{ old('badge')}}">

                                                @error('badge')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
                                            	@enderror
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control @error('sku') is-invalid @enderror" type="text" name="sku" id="sku" placeholder="sku (optional)"  value="{{ old('sku')}}">

                                                @error('sku')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
                                            	@enderror
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control @error('tags') is-invalid @enderror" type="text" name="tags" id="tags" placeholder="Tags (optional)"  value="{{ old('tags')}}">

                                                @error('tags')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
                                            	@enderror
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control @error('category') is-invalid @enderror" name="category">
                                                    <option disabled="disabled" selected>Select Category</option>
                                                    <option value="1">Smart Switches.</option>
                                                    <option value="2">Cameras</option>
                                                    <option value="3">Smartlocks</option>
                                                    <option value="4">Smart Sockets</option>
                                                    <option value="5">Smart bolds</option>
                                                    <option value="6">Smart remote controls</option>
                                                </select>

                                                @error('category')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
                                            	@enderror
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control @error('category2') is-invalid @enderror" name="category2">
                                                    <option disabled="disabled" selected>Select more category (optional)</option>
                                                    <option value="1">Best Sell</option>
                                                    <option value="2">Recent Product</option>
                                                </select>

                                                @error('category2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                @enderror
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-12">
                                                    <div class="d-flex align-items-center">
                                                        <label for="avatar">Thumbnail must be 650x773 pixels</label>
                                                        <label class="avatar avatar-xxl profile-cover-avatar m-0" for="avatar">
                                                            <img id="avatarImg" class="avatar-img img-fluid" height="200" width="200" src="{{ asset('assets/images/bee/placeholder.jpg') }}" alt="Profile Image">
    
                                                            <input class="@error('avatar') is-invalid @enderror" type="file" id="avatar" name="avatar" onchange="previewFile(this);" required style="visibility: hidden">
                                                            <span class="avatar-edit">
                                                                <i class="feather-edit-2 avatar-uploader-icon shadow-soft"></i>
                                                            </span>
                                                        </label>
    
                                                        @error('avatar')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control @error('description') is-invalid @enderror" name="description"  id="description" placeholder="Description..." value="{{ old('description')}}"></textarea>

                                                @error('description')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
                                            	@enderror
                                            </div>

                                            <div class="submit-area">
                                                <button type="submit" class="theme-btn">Publish now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="nav-item" role="tabpanel" aria-labelledby="nav-item-tab">
                                <table class="table table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Thumbnail</th>
                                            <th>Title</th>
                                            <th>Date Created</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td><img width="150" height="150" src="{{ $product->thumbnail }}" alt=""></td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->created_at }}</td>
                                            <td>     
                                                <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-sm btn-white text-danger mr-2" onclick="return confirm('Are you sure you want to delete this item?');"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="nav-subscribers" role="tabpanel" aria-labelledby="nav-subscribers-tab">
                                <table class="table table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Emails</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($emails as $email)
                                         <tr>
                                            <td>{{ $email->email }}</td>
                                        </tr>   
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Emails</th>
                                            <th>Subject</th>
                                            <th>Complaints</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                         <tr>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->complaint }}</td>
                                        </tr>   
                                        @endforeach
                                                                              
                                    </tbody>
                                </table>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
    
            <!-- end Admin -->   

            	<!-- Script to preview Image before submitting -->
					<script>
						function previewFile(input){
							var file = $("input[type=file]").get(0).files[0];
							if(file){
								var reader = new FileReader();
								reader.onload = function(){
									$("#avatarImg").attr("src", reader.result);
								}
								reader.readAsDataURL(file);
							}
						}
					</script>

@endsection