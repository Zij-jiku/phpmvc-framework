<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">ContactForm Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2>ContactForm View</h2>
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

</div>

<?php views('/layouts/backend/footer.php') ?>