<?php views('/layouts/backend/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-primary">About Me Page</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <h2>About Me View</h2>
        <hr>


        <table class="table table-dark" id="table_show">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Hire Link</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>1</th>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Hire Link</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

    <div class="col-md-4">

        <h2>About Me Add</h2>
        <hr>

        <form method="post" action="">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="name" name="name">
            </div>

            <div class="form-group">
                <label>Profession Link</label>
                <input type="text" class="form-control" placeholder="profession" name="profession">
            </div>

            <div class="form-group">
                <label>Date Of Birth</label>
                <input type="date" class="form-control" name="date_of_birth">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="email" name="email">
            </div>

            <div class="form-group">
                <label>Degree Link</label>
                <input type="text" class="form-control" placeholder="degree" name="degree">
            </div>

            <div class="form-group">
                <label>Phone Link</label>
                <input type="text" class="form-control" placeholder="phone" name="phone">
            </div>

            <div class="form-group">
                <label>Skype Link</label>
                <input type="text" class="form-control" placeholder="skype" name="skype">
            </div>

            <div class="form-group">
                <label>Hire Me Link</label>
                <input type="text" class="form-control" placeholder="portfolio_link" name="hire_me_link">
            </div>

            <div class="form-group">
                <label>Portfolio Link</label>
                <input type="file" class="form-control" name="cv_file">
            </div>

            <div>
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php views('/layouts/backend/footer.php') ?>