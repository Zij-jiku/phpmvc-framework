<?php views('/layouts/backend/header.php') ?>

<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">WebSite Traffic</h4>

                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card-box mb-0 widget-chart-two">
                                <div class="float-right">
                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#0acf97" value="37" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                </div>
                                <div class="widget-chart-two-content">
                                    <p class="text-muted mb-0 mt-2">Total Traffics</p>
                                    <h3 class="">333</h3>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card-box mb-0 widget-chart-two">
                                <div class="float-right">
                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#f9bc0b" value="92" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                </div>
                                <div class="widget-chart-two-content">
                                    <p class="text-muted mb-0 mt-2">Total MileStone</p>
                                    <h3 class="">222</h3>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card-box mb-0 widget-chart-two">
                                <div class="float-right">
                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#f1556c" value="14" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                </div>
                                <div class="widget-chart-two-content">
                                    <p class="text-muted mb-0 mt-2">ContactInfo</p>
                                    <h3 class="">111</h3>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card-box mb-0 widget-chart-two">
                                <div class="float-right">
                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#2d7bf4" value="60" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                </div>
                                <div class="widget-chart-two-content">
                                    <p class="text-muted mb-0 mt-2">Total Members</p>
                                    <h3 class="">20</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Users</h4>

                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">

                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Profile Link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jiku</td>
                                    <td>example@gmail.com</td>
                                    <td>01840416216</td>
                                    <td>Rampura, Dhaka</td>
                                    <td>Profile Link</td>
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


        </div>
        <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->

<?php views('/layouts/backend/footer.php') ?>