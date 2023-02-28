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
                        <h4 class="card-title">Event's List / Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table table-striped table-hover" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Event Name</th>
                                        <th>Description</th>
                                        <th>Event At</th>
                                        <th>Event Start / End</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $event) : ?>
                                        <tr>
                                            <td><?= $event['event_name'] ?></td>
                                            <td><?= $event['event_description'] ?></td>
                                            <td><?= $event['event_at'] ?></td>
                                            <td><?= $event['event_start'] . "/" . $event['event_end'] ?></td>
                                            <td>
                                                <a href="<?= base_url('edit-event/' . $event['id']) ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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