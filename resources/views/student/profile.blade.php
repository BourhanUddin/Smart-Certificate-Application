@extends('student.layout')
@section('content')
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">User Profile</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>User Profile</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>User Profile</h4>
                        </div>
                        <div class="widget-inner">
                            <form action="/student/profile" method="POST" class="edit-profile m-b30">
                                @csrf
                                <div class="">
                                    <div class="form-group row">
                                        <div class="col-sm-10  ml-auto">
                                            <h3>1. Personal Details</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" value="{{ auth()->user()->name }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" value="{{ auth()->user()->email }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" value="{{ auth()->user()->address }}"
                                                disabled>
                                            <span class="help">If you want your invoices addressed to a company. Leave
                                                blank to use your full name.</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone No.</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" value="{{ auth()->user()->phone }}"
                                                disabled>
                                        </div>
                                    </div>

                                    <div class="seperator"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-auto">
                                            <h3>2. Academic details</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Department</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text"
                                                value="{{ auth()->user()->student->department->name }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Roll</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text"
                                                value="{{ auth()->user()->student->roll }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Batch</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text"
                                                value="{{ auth()->user()->student->batch }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">CGPA</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text"
                                                value="{{ auth()->user()->student->cgpa }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Completed Credit</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text"
                                                value="{{ auth()->user()->student->completed_credit }}" disabled>
                                        </div>
                                    </div>

                                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-auto">
                                            <h3>3. Address</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="address" type="text"
                                                value="{{ auth()->user()->address }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="city" type="text"
                                                value="{{ auth()->user()->city }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">State</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="state" type="text"
                                                value="{{ auth()->user()->state }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Postcode</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="postcode" type="text"
                                                value="{{ auth()->user()->postcode }}">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                </div>
                                                <div class="col-sm-7">
                                                    <button type="submit" name="submit" value="submit1"
                                                        class="btn">Save changes</button>
                                                    <button type="reset" class="btn-secondry">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-auto">
                                            <h3 class="m-form__section">4. Social Links</h3>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Linkedin</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="linkedin" type="text"
                                                value="{{ auth()->user()->linkdedin }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="facebook" type="text"
                                                value="{{ auth()->user()->facebook }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Twitter</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="twitter" type="text"
                                                value="{{ auth()->user()->twitter }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Instagram</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="instagram" type="text"
                                                value="{{ auth()->user()->instagram }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-7">
                                                <button type="submit" name="submit" value="submit2"
                                                    class="btn">Save changes</button>
                                                <button type="reset" class="btn-secondry">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form action="" method="POST" enctype="multipart/form-data" class="edit-profile">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-10 ml-auto">
                                        <h3>5. Profile info</h3>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Update image</label>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                </div>
                                @if (session('msg3'))
                                    <ul>
                                        <li style="color: red">{{ session('msg3') }}</li>
                                    </ul>
                                @endif
                                @if (session('msg'))
                                    <ul>
                                        <li style="color: green">{{ session('msg') }}</li>
                                    </ul>
                                @endif
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-7">
                                        <button name="submit" value="submit5" type="submit" class="btn">Save
                                            changes</button>
                                        <button type="reset" class="btn-secondry">Cancel</button>
                                    </div>
                                </div>
                            </form>

                            <form action="/student/profile" method="POST" class="edit-profile">
                                @csrf
                                <div class="">
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-auto">
                                            <h3>6. Password</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Current Password</label>
                                        <div class="col-sm-7">
                                            <input name="old_password" class="form-control" type="password"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-7">
                                            <input name="new_password" class="form-control" type="password"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Re Type Password</label>
                                        <div class="col-sm-7">
                                            <input name="retype_new_password" class="form-control" type="password"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                @if (session('msg3'))
                                    <ul>
                                        <li style="color: red">{{ session('msg3') }}</li>
                                    </ul>
                                @endif
                                @if (session('msg'))
                                    <ul>
                                        <li style="color: green">{{ session('msg') }}</li>
                                    </ul>
                                @endif
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-7">
                                        <button name="submit" value="submit3" type="submit" class="btn">Save
                                            changes</button>
                                        <button type="reset" class="btn-secondry">Cancel</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>
@endsection
