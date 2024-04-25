<!-- resources/views/product/details.blade.php -->
<!-- resources/views/product/details.blade.php -->
@include('dashboard.header')
<div class="content-page">
    <div class="content">
        <div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Project Templates</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">{{ $product->id }}Products Details</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						
					</div>
				</div>
				<!--end breadcrumb-->

				 <div class="card">
					<div class="row g-0">
					  <div class="col-md-4 border-end">
						<img src="{{ asset('uploads/' . $product->image) }}" class="img-fluid" alt="...">
						<div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
							<div class="col"><img src="{{ asset('uploads/' . $product->image) }}" width="70" class="border rounded cursor-pointer" alt=""></div>
							<div class="col"><img src="{{ asset('uploads/' . $product->image) }}" width="70" class="border rounded cursor-pointer" alt=""></div>
							<div class="col"><img src="{{ asset('uploads/' . $product->image) }}" width="70" class="border rounded cursor-pointer" alt=""></div>
							<div class="col"><img src="{{ asset('uploads/' . $product->image) }}" width="70" class="border rounded cursor-pointer" alt=""></div>
						</div>
					  </div>
					  <div class="col-md-8">
						<div class="card-body">
						  <h4 class="card-title">{{ $product->name }}</h4>
						  <div class="d-flex gap-3 py-3">
							<div class="cursor-pointer">
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star'></i>
							  </div>	
							  <div>project number -->{{ $product->id }}</div>
							  <div class="text-white"><i class='bx bxs-cart-alt align-middle'></i>{{ $product->quantity }} </div>
						  </div>
						  <div class="mb-3"> 
							<span class="price h4">Ksh {{ $product->amount }}.00</span> 
							<span class=""></span> 
						</div>
						  <p class="card-text fs-6"></p>
						  <dl class="row">
							<dt class="col-sm-3">Complition date#</dt>
							<dd class="col-sm-9">{{ $product->date }}</dd>
						  
							<dt class="col-sm-3">Color</dt>
							<dd class="col-sm-9">{{ $product->colors }}</dd>
						  
							<dt class="col-sm-3">Use</dt>
							<dd class="col-sm-9">{{ $product->use}}</dd>
                            <dt class="col-sm-3">Frameworks</dt>
							<dd class="col-sm-9"> {{ $product->frameworks}}</dd>
                            <dt class="col-sm-3">Models</dt>
							<dd class="col-sm-9"> {{ $product->models}}</dd>
                            <dt class="col-sm-3">Achivement</dt>
							<dd class="col-sm-9"> {{ $product->purpose}}</dd>
                            <dt class="col-sm-3">Database used</dt>
							<dd class="col-sm-9"> {{ $product->database}}</dd>
						  </dl>
						  <hr>
						  <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
							<p> Good quality  reactive web based project</p>
							</div> 

							
						</div>
						<div class="d-flex gap-3 mt-3">
							<a href="#" class="btn btn-outline-warning">Get this</a>
							<a href="/ombas" class="btn btn-pink rounded-pill"><span class="text">Request castom Project</span> <i class='bx bxs-cart-alt'></i></a>
						</div>
						</div>
					  </div>
					</div>
                    <hr/>
					<div class="card-body">
						<ul class="nav nav-tabs mb-0" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
										</div>
										<div class="tab-title"> Peoject Description </div>
									</div>
								</a>
							</li>
							
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
										</div>
										<div class="tab-title">Reviews</div>
									</div>
								</a>
							</li>
						</ul>
						<div class="tab-content pt-3">
							<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                                <p>{{ $product->description }}</p>
								</div>
							
							<div class="tab-pane fade" id="primarycontact" role="tabpanel">
								{{ $product->reviews }}</div>
						</div>
					</div>

				  </div>


					
		</div>


@include('dashboard.footer')


