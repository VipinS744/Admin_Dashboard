@extends("layout.master")
@section("title","Add Student")
@section("home")

<div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Add Student</strong></div>
                    <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label">Name</label><input type="text" id="company" placeholder="Enter your name" class="form-control"></div>
                        <div class="form-group"><label for="vat" class=" form-control-label">Email address</label><input type="text" id="vat" placeholder="Enter email" class="form-control"></div>
                        <div class="form-group"><label for="street" class=" form-control-label">Enter Mobile</label><input type="text" id="street" placeholder="Enter Mobile" class="form-control"></div>
                         <div class="row form-group">
                            <div class="col-8">
                                <div class="form-group"><label for="city" class=" form-control-label">Address</label><input type="text" id="city" placeholder="Enter your Address" class="form-control"></div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">College Name</label><input type="text" id="postal-code" placeholder="Enter College Name" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="country" class=" form-control-label">Qualification</label><select class="form-control"><option selected="0" value="0">BE</option><option value="1">MCA</option></select>
                                </div>
                                <div class="form-group"><label for="country" class=" form-control-label">Branch</label><select class="form-control"><option selected="0" value="0">CSE</option><option value="1">IT</option><option value="2">EC</option><option value="3">EE</option><option value="4">AU</option><option value="5">MECH</option></select>
                                </div>
                                <div class="form-group"><label for="country" class=" form-control-label">INTERNSHIP TRAINING COURSES</label><select class="form-control"><option selected="0" value="0">WEB DESIGNING</option><option value="1">FULL STACK DEVELOPER</option></select>
                                </div>
                                <div class="form-group"><label for="city" class=" form-control-label">Photo Upload</label><input type="file" id="city" placeholder="Enter your Address" class="form-control"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-lock"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>

@endsection