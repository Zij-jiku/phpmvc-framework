<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">Collaboration Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>Collaboration View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Brand Name</th>
                    <th>Brand Logo</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>Brand Name</td>
                    <td>Brand Logo</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

    <div class="col-md-4">

        <h2>Collaboration Add</h2>
        <hr>

        <form method="post" action="">

            <div class="form-group">
                <label>Brand Name</label>
                <input type="text" class="form-control" placeholder="Brand Name" name="brand_name">
            </div>

            <div class="form-group">
                <label>Brand Logo</label>
                <input type="file" class="form-control" name="brand_logo">
            </div>

            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>