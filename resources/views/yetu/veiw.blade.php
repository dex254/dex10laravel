@include('dashboard.header')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Uploaded Requests</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Current Done request</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <form action="{{ route('yetu.search') }}" method="GET">
                                    <input type="search" name="search" placeholder="Search products...">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                <form class="p-3">
                    <input type="search" class="form-control" placeholder="Search ..."
                        aria-label="Recipient's username">
                </form>
            </div>
            
                 <!-- end col -->
                
                 <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
                    @foreach($yetu as $yetu)
                    <div class="col">


                 <div class="col">
                    <div class="card">
                        <img src="{{ asset('uploads/image/' . $yetu->image_name) }}" class="card-img-top" alt="...">
                        <div class="">
                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">{{ $yetu->naming }}</span></div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title cursor-pointer"></h6>
                            <div class="clearfix">
                                <p class="mb-0 float-start"><strong>Price</strong>{{ $yetu->amount }} </p>
                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through"></span><span class="text-white">KSH</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-3 fs-6">
                                <div class="cursor-pointer">
                                    <hr>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        
                                        <li class="list-inline-item">
                                            <!-- detail.blade.php -->



                                           <a href="{{ route('yetu.detail', ['id' => $yetu->id]) }}" ><button type="button" class="btn btn-outline-warning rounded-pill">Veiw 😎😎</button></a>
                                        </li>
                                        
                                       
                                    </ul>
                                  </div>	
                              <p class="mb-0 ms-auto">see</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end col -->
            </div>
            @endforeach
        </div>
        
    </div>
</div>



@include('dashboard.footer')
