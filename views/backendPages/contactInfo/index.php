<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">ContactInfo Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>ContactInfo View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Office Location</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>Office Location</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

    <div class="col-md-4">

        <h2>ContactInfo Add</h2>
        <hr>

        <form method="post" action="">

            <div class="form-group">
                <label>Office Location</label>
                <input type="text" class="form-control" placeholder="office_location" name="office_location">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="address" name="address">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="phone" name="phone">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="email" name="email">
            </div>



            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>