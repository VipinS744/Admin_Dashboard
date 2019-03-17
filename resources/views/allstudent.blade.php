@extends("layout.master")
@section("title","All Students")
@section("home")


<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

     
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Student List</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>College</th>
                                            <th>Branch</th>
                                            <th>Semester</th>
                                            <th>Internship</th>
                                            <th>Fee</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Vipin Kumar Sharma</td>
                                            <td>9567841254</td>
                                            <td>Rjit</td>
                                            <td>CSE</td>
                                            <td>8th</td>
                                            <td>Full Stack</td>
                                            <td></td>
                                            <td><img src=""></td>
                                            <td><button class="btn btn-sm" style="margin: 2px; border-color: blue; color: blue;"><span>View</span></button><button style="margin: 2px; border-color: yellow; color: yellow;"  class="btn btn-sm"><span>Edit</span></button><button class="btn btn-sm" style="margin: 2px;border-color: red; color: red;"><span>Delete</span></button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Vishal gour</td>
                                            <td>9458741254</td>
                                            <td>Rjit</td>
                                            <td>CSE</td>
                                            <td>8th</td>
                                            <td>Full Stack</td>
                                            <td></td>
                                            <td><img src=""></td>
                                            <td><button class="btn btn-sm" style="margin: 2px; border-color: blue; color: blue;"><span>View</span></button><button style="margin: 2px; border-color: yellow; color: yellow;"  class="btn btn-sm"><span>Edit</span></button><button class="btn btn-sm" style="margin: 2px;border-color: red; color: red;"><span>Delete</span></button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

@endsection