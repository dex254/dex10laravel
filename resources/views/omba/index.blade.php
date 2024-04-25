
@include('dashboard.header')
<div class="page-wrapper">
    <div class="page-content">
        <div class="col-xl-7 mx-auto">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Themes</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Themes castom</li>
                        </ol>
                    </nav>
                </div>
<div class="row">
					

<div class="main-content">
    <div class="card border-top border-0 border-4 border-white">
        <div class="card-body p-5">
            <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-user me-1 font-22 text-white"></i>
                </div>
                <h5 class="mb-0 text-white">Request a castom theme fro the teplate seen</h5>
            </div>
            <hr>
            <form class="row g-3"  method="POST" action="{{ route('ombas.store') }}">
                @csrf
                <input type="hidden" name="sender_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="sender_email" value="{{ auth()->user()->email }}">
                
               
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Theme</label>
                    <textarea class="form-control" type="text" id="themes" name="themes" placeholder="State the theme name ...." rows="3"></textarea>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Colors</label>
                    <textarea class="form-control" type="text" id="colors" name="colors" placeholder="describe the colors you need for your web upp.." rows="3"></textarea>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Usage</label>
                    <textarea class="form-control" type="text" id="usage" name="usage" placeholder="describe the colors you need for your web upp.." rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Select your collectin date</label>
                    <input type="date" class="form-control" id="due_date"  name="due_date">
                </div>
               
                
                <div class="col-12">
                    <button type="submit" class="btn btn-light px-5">Request</button>
                </div>
            </form>
        </div>
    </div>
<div></div></div>
    <!-- He who is contented is rich. - Laozi -->
    
    
</div>
</div>
                    </div>
</div>
    </div>
</div>

@include('dashboard.footer')

