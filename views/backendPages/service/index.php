<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">Services Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>Services View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>Icon</td>
                    <td>Title</td>
                    <td>Description</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

    <div class="col-md-4">

        <h2>Service Add</h2>
        <hr>

        <form method="post" action="">
            <div class="form-group">
                <label>FontAw Icon</label>
                <input type="text" class="form-control" placeholder="fa fa-icon" name="icon">
            </div>

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>


            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" placeholder="dev_description" name="description"></textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>