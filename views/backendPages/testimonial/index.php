<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">Testimonial Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>Testimonial View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Name</th>
                    <th>Comment</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>Name</td>
                    <td>Comment</td>
                    <td>Image</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

    <div class="col-md-4">

        <h2>Testimonial Add</h2>
        <hr>

        <form method="post" action="">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>

            <div class="form-group">
                <label>Comment</label>
                <textarea name="comment" rows="4" class="form-control" placeholder="comment"></textarea>
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
            </div>

            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>