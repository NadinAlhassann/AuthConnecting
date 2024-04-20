@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('css')
    <link rel="stylesheet" href="css/profile.css">
@endsection

@section('js')
@endsection



@section('content')
    <section id="profile">
        <div class="profile-container container-xxl">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Profile</button>
                    <button class="nav-link" id="nav-password-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Change
                        Password</button>
                </div>
            </nav>

            <div class="tab-content mt-4" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Profile Picture</div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <img class="img-account-profile rounded-circle mb-2"
                                        src="{{ asset('Images/profile.jpg') }}" alt="">
                                    <!-- Profile picture help block-->
                                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                    <!-- Profile picture upload button-->
                                    <button class="btn btn-primary" type="button">Upload new image</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-9">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <div class="profile-form">
                                        <form>
                                            <!-- Form Group (username)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputUsername">Full Name</label>
                                                <input class="form-control" id="inputUsername" type="text"
                                                    placeholder="Enter your username" value="username">
                                            </div>

                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (email address)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                                    <input class="form-control" id="inputEmailAddress" type="email"
                                                        placeholder="Enter your email address" value="name@example.com">
                                                </div>

                                                <!-- Form Group (phone number)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                                    <input class="form-control" id="inputPhone" type="tel"
                                                        placeholder="Enter your phone number" value="000-000-0000">
                                                </div>
                                            </div>

                                            <!-- Form Row        -->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (location)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLocation">Location</label>
                                                    <input class="form-control" id="inputLocation" type="text"
                                                        placeholder="Enter your location" value="Amman">
                                                </div>
                                                <!-- Form Group (birthday)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputBirthday">Date of Birth
                                                    </label>
                                                    <input class="form-control" id="inputBirthday" type="Date"
                                                        name="birthday" placeholder="Enter your birthday"
                                                        value="06/10/2001">
                                                </div>
                                            </div>
                                            <!-- Save changes button-->
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-password-tab">
                    {{-- <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Change Password</div>
                        <div class="card-body">
                            <div class="password-form">
                                <form action="">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPasword">Current Password</label>
                                        <input class="form-control" id="inputUsername" type="text"
                                            placeholder="" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPasword">New Password</label>
                                        <input class="form-control" id="inputUsername" type="text"
                                            placeholder="" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPasword">Confirm New Password</label>
                                        <input class="form-control" id="inputUsername" type="text"
                                            placeholder="" value="">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <div class="security-container container-xxl px-4 mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Change password card-->
                                <div class="card mb-4">
                                    <div class="card-header">Change Password</div>
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Group (current password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="currentPassword">Current Password</label>
                                                <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password">
                                            </div>
                                            <!-- Form Group (new password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="newPassword">New Password</label>
                                                <input class="form-control" id="newPassword" type="password" placeholder="Enter new password">
                                            </div>
                                            <!-- Form Group (confirm password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password">
                                            </div>
                                            <button class="btn btn-primary" type="button">Save</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <!-- Two factor authentication card-->
                                <div class="card mb-4">
                                    <div class="card-header">Two-Factor Authentication</div>
                                    <div class="card-body">
                                        <p>Add another level of security to your account by enabling two-factor authentication. We will send you a text message to verify your login attempts on unrecognized devices and browsers.</p>
                                        <form>
                                            <div class="form-check">
                                                <input class="form-check-input" id="twoFactorOn" type="radio" name="twoFactor" checked="">
                                                <label class="form-check-label" for="twoFactorOn">On</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="twoFactorOff" type="radio" name="twoFactor">
                                                <label class="form-check-label" for="twoFactorOff">Off</label>
                                            </div>
                                            <div class="mt-3">
                                                <label class="small mb-1" for="twoFactorSMS">SMS Number</label>
                                                <input class="form-control" id="twoFactorSMS" type="tel" placeholder="Enter a phone number" value="000-000-0000">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Delete account card-->
                                <div class="card mb-4">
                                    <div class="card-header">Delete Account</div>
                                    <div class="card-body">
                                        <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                                        <button class="btn btn-danger-soft primary-color text-danger" type="button">I understand, delete my account</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>





        </div>
    </section>
@endsection
