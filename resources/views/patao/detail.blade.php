				<!--end breadcrumb-->
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
								<li class="breadcrumb-item active" aria-current="page">{{ $patao->sender_id }}Products Details</li>
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
						<img src="{{ asset('uploads/folders/' . $patao->document_name) }}" class="img-fluid" alt="...">
						<div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
							<div class="col"><img src="{{ asset('uploads/folders/' . $patao->document_name) }}" width="70" class="border rounded cursor-pointer" alt=""></div>
							
						</div>
					  </div>
					  <div class="col-md-8">
						<div class="card-body">
						  <h4 class="card-title"></h4>
						  <div class="d-flex gap-3 py-3">
							<div class="cursor-pointer">
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star'></i>
							  </div>	
							  <div><h3>Name:{{ $patao->nameing }}</h3></div>
							  <div class="text-white"><i class='bx bxs-cart-alt align-middle'></i></div>
						  </div>
						  <div class="mb-3"> 
							<span class="price h4">Amount bargeted</span> 
							<span class="">{{ $patao->amount }}</span> 
						</div>
						  <p class="card-text fs-6">More</p>
						  <dl class="row">
							<dt class="col-sm-3">Complition date#</dt>
							<dd class="col-sm-9">{{ $patao->due_date }}</dd>
						  
							<dt class="col-sm-3">To look like</dt>
							<dd class="col-sm-9">{{ $patao->links }}</dd>
						  
							<dt class="col-sm-3">Users</dt>
							<dd class="col-sm-9">{{ $patao->users }}</dd>
                            <dt class="col-sm-3">Phone/gmail</dt>
							<dd class="col-sm-9">{{ $patao->comun }} </dd>
                            <dt class="col-sm-3">Achivement</dt>
							<dd class="col-sm-9"> {{ $patao->purpose }}</dd>
                            
                            <dt class="col-sm-3">Sender email</dt>
							<dd class="col-sm-9">{{ $patao->sender_email }}</dd>
							
						  </dl>
						  <hr>
						  <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
							<p> Get the full report by downloading the pdf</p>
							</div> 

							
						</div>
						<div class="d-flex gap-3 mt-3">
							<a href="{{ route('patao.downloadPDF', $patao->id) }}" class="btn btn-primary">Download PDF</a>
							
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
										<div class="tab-title"> Project Description </div>
									</div>
								</a>
							</li>
							
							
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
										</div>
										<div class="tab-title">Explanation</div>
									</div>
								</a>
							</li>
						</ul>
						<div class="tab-content pt-3">
							<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                                <p>{{ $patao->description }}</p>
								</div>
							
							<div class="tab-pane fade" id="primarycontact" role="tabpanel">
								{{ $patao->explain }}</div>
						</div>
					</div>
					<form action="{{ route('patao.delete', $patao->id) }}" method="POST" style="display: inline;">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete upload</button>
					</form>

				  </div>


					
		</div>


@include('dashboard.footer')


