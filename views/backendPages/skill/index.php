<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">Skills Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>Skills View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Year </th>
                    <th>Title </th>
                    <th>Percentage</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>Year</td>
                    <td>Percentage</td>
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

        <h2>Skill Add</h2>
        <hr>

        <form method="post" action="">

            <div class="form-group">
                <label>Year</label>
                <input type="text" class="form-control" placeholder="year" name="year">
            </div>

            <div class="form-group">
                <label>Title of Eduction</label>
                <input type="text" class="form-control" placeholder="title_of_eduction" name="title_of_eduction">
            </div>


            <div class="form-group">
                <label>Percentage</label>
                <input type="text" class="form-control" placeholder="percentage" name="percentage">
            </div>

            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>