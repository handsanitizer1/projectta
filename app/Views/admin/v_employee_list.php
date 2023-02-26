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
                                        <th>Employee Name</th>
                                        <th>Employee Telephone</th>
                                        <th>Employee JobPosition</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $emp) : ?>
                                        <tr>
                                            <td><?= $emp['employee_Name'] ?></td>
                                            <td><?= $emp['employee_Telephone'] ?></td>
                                            <td><?= $emp['employee_JobPosition'] ?></td>
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