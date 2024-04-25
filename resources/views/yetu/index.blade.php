@include('dashboard.header')

<div class="main-content">
    
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="main-content">
                    <div class="card border-top border-0 border-4 border-white">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-white"></i>
                                </div>
                                <h5 class="mb-0 text-white">Request a castom theme fro the teplate seen</h5>
                            </div>
                            <hr>
                            @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    
                        @if (session('success'))
                            <div>{{ session('success') }}</div>
                        @endif
                            <form class="row g-3"  action="{{ route('yetu.index') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="sender_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="sender_email" value="{{ auth()->user()->email }}">
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Select   Sample image of Your website veiw</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Give a name to your project</label>
                                    <textarea class="form-control" type="text" name="nameing"  placeholder="describe the colors you need for your web upp.." rows="3"></textarea>
                                </div>
                                
                               
                               
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Describe your app functions in the project</label>
                                    <textarea class="form-control" type="text" name="description"  placeholder="describe your web app.." rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Give a link to website you would like your project to look like</label>
                                    <textarea class="form-control" type="url"  name="links" placeholder="copy the url here ...." rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">What data dose yor project store</label>
                                    <textarea class="form-control" type="text"  name="purpose" placeholder="What is your target data to store on the databse." rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Give a bref expalanation what you want to achive with you app</label>
                                    <textarea class="form-control" type="text"  name="explain" placeholder="What do you want to be on  your dashboad.." rows="3"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Select your collectin date</label>
                                    <input type="date" class="form-control"  name="due_date">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">What number of users do you want on your app</label>
                                    <textarea class="form-control" type="text" name="users"  placeholder="sate  either admin,students,castomer,etc.." rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">What is your Total barjet on the project</label>
                                    <textarea class="form-control" type="text" name="amount" placeholder="from ksh 50000.." rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Enetr a  number on gmail to contact you from</label>
                                    <textarea class="form-control" type="text" name="comun"  placeholder="email,phone number,etc." rows="3"></textarea>
                                </div>
                                
                               
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-light px-5">UPLOAD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <div></div></div>

    

    
</div></div>
    </div>
</div>

@include('dashboard.footer')
