<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">Price Plan Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>Price Plan View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Dev Name</th>
                    <th>Dev Description</th>
                    <th>portfolio_link</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>Title</td>
                    <td>Description</td>
                    <td>Link</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

    <div class="col-md-4">

        <h2>Dev Add</h2>
        <hr>

        <form method="post" action="">

            <div class="form-group">
                <label>Dev Name</label>
                <input type="text" class="form-control" placeholder="dev_name" name="dev_name">
            </div>

            <div class="form-group">
                <label>Portfolio Link</label>
                <input type="text" class="form-control" placeholder="portfolio_link" name="portfolio_link">
            </div>

            <div class="form-group">
                <label>Dev Description</label>
                <textarea name="dev_description" rows="4" class="form-control" placeholder="description"></textarea>
            </div>



            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>