
@include('dashboard.header')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="profile-bg-picture"
                        style="background-image:url('assets/images/bg-profile.jpg')">
                        <span class="picture-bg-overlay"></span>
                        <!-- overlay -->
                    </div>
                    <!-- meta -->
                    <div class="profile-user-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="profile-user-img">
                                    <div class="avatar-xl">
                                        @if (auth()->check())
                                        <span
                                            class="avatar-title bg-primary-subtle text-primary fs-24 rounded-circle">
                                            {{ auth()->user()->name }}
                                        </span>
                                    </div>
                                </div>
                                <div class="">
                                    
                                    <p> {{ auth()->user()->name }}</p>
                                    <p>Email: {{ auth()->user()->email }}</p>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-end align-items-center gap-2">
                                    <button type="button" class="btn btn-soft-danger">
                                        <i class="ri-settings-2-line align-text-bottom me-1 fs-16 lh-1"></i>
                                        
                                    </button>
                                    <a class="btn btn-soft-info" href="#"> <i class="ri-check-double-fill fs-18 me-1 lh-1"></i> Following</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ meta -->
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card p-0">
                        <div class="card-body p-0">
                            <div class="profile-content">
                                <ul class="nav nav-underline nav-justified gap-0">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#aboutme" type="button" role="tab"
                                            aria-controls="home" aria-selected="true" href="#aboutme">About</a>
                                    </li>
                                   
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#edit-profile" type="button" role="tab"
                                            aria-controls="home" aria-selected="true"
                                            href="#edit-profile">Settings</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#projects" type="button" role="tab"
                                            aria-controls="home" aria-selected="true"
                                            href="#projects">Delet account</a></li>
                                </ul>

                                <div class="tab-content m-0 p-4">
                                    <div class="tab-pane active" id="aboutme" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <div class="profile-desk">
                                            <h5 class="text-uppercase fs-17 text-dark">{{ __('Profile Information') }}</h5>
                                            <div class="designation mb-4">{{ __("Update your account's profile information and email address.") }}</div>
                                            <p class="text-muted fs-16">
                                                
                                            </p>

                                            <h5 class="mt-4 fs-17 text-dark">Contact Information</h5>
                                            <table class="table table-condensed mb-0 border-top">
                                                <tbody>
                                                    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                                        @csrf
                                                        @method('patch')
                                                
                                                        <div>
                                                            <x-input-label for="name" :value="__('Name')" />
                                                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                        </div>
                                                
                                                        <div>
                                                            <x-input-label for="email" :value="__('Email')" />
                                                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                                                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                                
                                                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                                <div>
                                                                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                                        {{ __('Your email address is unverified.') }}
                                                
                                                                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                                            {{ __('Click here to re-send the verification email.') }}
                                                                        </button>
                                                                    </p>
                                                
                                                                    @if (session('status') === 'verification-link-sent')
                                                                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                                            {{ __('A new verification link has been sent to your email address.') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                            @endif
                                                        </div>
                                                
                                                        <div class="flex items-center gap-4">
                                                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                                                
                                                            @if (session('status') === 'profile-updated')
                                                                <p
                                                                    x-data="{ show: true }"
                                                                    x-show="show"
                                                                    x-transition
                                                                    x-init="setTimeout(() => show = false, 2000)"
                                                                    class="text-sm text-gray-600 dark:text-gray-400"
                                                                >{{ __('Saved.') }}</p>
                                                            @endif
                                                        </div>
                                                    </form>
                                                </tbody>
                                            </table>
                                        </div> <!-- end profile-desk -->
                                    </div> <!-- about-me -->

                                    <!-- Activities -->
                                    

                                    <!-- settings -->
                                    {{ __('Update Password') }}
                                    <div id="edit-profile" class="tab-pane">
                                        <div class="user-profile-content">
                                            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
                                        </div>
                                    </div>
                                    <div id="projects" class="tab-pane">
                                        <div class="row m-t-10">
                                            <div class="col-md-12">
                                                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                                    @csrf
                                                    @method('delete')
                                            
                                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                                        Are you sure you want to delete your account?
                                                    </h2>
                                            
                                                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                                        Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
                                                    </p>
                                            
                                                    <div class="mt-6">
                                                        <label for="password" class="sr-only">{{ __('Password') }}</label>
                                            
                                                        <input
                                                            id="password"
                                                            name="password"
                                                            type="password"
                                                            class="mt-1 block w-3/4"
                                                            placeholder="{{ __('Password') }}"
                                                        />
                                            
                                                        <!-- Display password validation errors if any -->
                                                        <!-- Assuming you have a way to display error messages -->
                                                    </div>
                                            
                                                    <div class="mt-6 flex justify-end">
                                                        <button type="button" class="btn btn-secondary" onclick="closeModal()">
                                                            Cancel
                                                        </button>
                                            
                                                        <button type="submit" class="btn btn-danger ms-3">
                                                            Delete Account
                                                        </button>
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <!-- profile -->
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

        </div>
        <!-- end row -->

    </div>
    <!-- container -->

</div>
@include('dashboard.footer')


