<?= $this->include("admin/v_template_header") ?>
<?= $this->include("admin/v_template_navbar") ?>

<?= $this->include("admin/v_template_sidebar") ?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table User</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table table-striped table-hover" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>User Telephone</th>
                                        <th>User Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $value) : ?>
                                        <tr>
                                            <td><?= $value['user_name'] ?></td>
                                            <td><?= $value['user_telephone'] ?></td>
                                            <td><?= $value['user_email'] ?></td>
                                            <td>
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->


<?= $this->include("admin/v_template_footer") ?>