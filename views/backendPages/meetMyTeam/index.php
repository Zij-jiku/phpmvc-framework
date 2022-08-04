<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">Team Members Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>Team Members View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>FB Link</th>
                    <th>Tw Link</th>
                    <th>In Link</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>Name</td>
                    <td>Position</td>
                    <td>FB Link</td>
                    <td>Tw Link</td>
                    <td>In Link</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

    <div class="col-md-4">

        <h2>Member Add</h2>
        <hr>

        <form method="post" action="">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="name" name="name">
            </div>

            <div class="form-group">
                <label>Position</label>
                <input type="text" class="form-control" placeholder="position" name="position">
            </div>

            <div class="form-group">
                <label>Fb Link</label>
                <input type="text" class="form-control" placeholder="fb_link" name="fb_link">
            </div>

            <div class="form-group">
                <label>Tw Link</label>
                <input type="text" class="form-control" placeholder="tw_link" name="tw_link">
            </div>

            <div class="form-group">
                <label>Pi Link</label>
                <input type="text" class="form-control" placeholder="pi_link" name="pi_link">
            </div>

            <div class="form-group">
                <label>Be Link</label>
                <input type="text" class="form-control" placeholder="be_link" name="be_link">
            </div>

            <div class="form-group">
                <label>In Link</label>
                <input type="text" class="form-control" placeholder="in_link" name="in_link">
            </div>

            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>