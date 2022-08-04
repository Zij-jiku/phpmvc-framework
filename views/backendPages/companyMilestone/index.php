<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">Company Milestone Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>Company Milestone View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Client Satisfied </th>
                    <th>Reviewed Clients </th>
                    <th>Cup of Tea</th>
                    <th>Milestone Clients</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>111</td>
                    <td>222</td>
                    <td>333</td>
                    <td>123</td>
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
                <label>Client Satisfied</label>
                <input type="number" class="form-control" placeholder="client_satisfied" name="client_satisfied">
            </div>

            <div class="form-group">
                <label>Reviewed Clients</label>
                <input type="number" class="form-control" placeholder="reviewed_clients" name="reviewed_clients">
            </div>

            <div class="form-group">
                <label>Cup of tea</label>
                <input type="number" class="form-control" placeholder="cup_of_tea" name="cup_of_tea">
            </div>

            <div class="form-group">
                <label>Milestone Clients</label>
                <input type="number" class="form-control" placeholder="milestone_clients" name="milestone_clients">
            </div>

            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>