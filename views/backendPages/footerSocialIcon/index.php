<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">FooterSocial Icons Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>FooterSocial Icons View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Facebook Link</th>
                    <th>Fiver Link</th>
                    <th>Github Link</th>
                    <th>Twitter Link</th>
                    <th>Linkedin Link</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>Facebook Link</td>
                    <td>Fiver Link</td>
                    <td>Github Link</td>
                    <td>Twitter Link</td>
                    <td>Linkedin Link</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

    <div class="col-md-4">

        <h2>FooterSocial Add</h2>
        <hr>

        <form method="post" action="">

            <div class="form-group">
                <label>Facebook Link</label>
                <input type="text" class="form-control" placeholder="facebook_link" name="facebook_link">
            </div>

            <div class="form-group">
                <label>Fiver Link</label>
                <input type="text" class="form-control" placeholder="fiver_link" name="fiver_link">
            </div>

            <div class="form-group">
                <label>Github Link</label>
                <input type="text" class="form-control" placeholder="github_link" name="github_link">
            </div>


            <div class="form-group">
                <label>Twitter Link</label>
                <input type="text" class="form-control" placeholder="twitter_link" name="twitter_link">
            </div>

            <div class="form-group">
                <label>Linkedin Link</label>
                <input type="text" class="form-control" placeholder="linkedin_link" name="linkedin_link">
            </div>

            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>