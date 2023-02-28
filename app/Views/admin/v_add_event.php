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
                        <h4 class="card-title">Add New Event</h4>
                        <?php if (session()->getFlashdata("Success")) : ?>
                            <div class="alert alert-success alert-dismissable alert-has-icon fade show  position-absolute end-0 top-0 m-3 w-25 h-20" id="alert">
                                <div class="alert-body">
                                    <i class="fa-solid fa-circle-check mr-2"></i><?= session()->getFlashdata("Success") ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('api/addEventProcess') ?>" method="post">
                            <div class="mb-3">
                                <label class="mb-1"><strong>Event Name</strong></label>
                                <input type="text" class="form-control" placeholder="enter event name" name="event_name" required>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1"><strong>Event Desctiption</strong></label>
                                <input type="text" class="form-control" placeholder="enter event description" name="event_description" required>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1"><strong>Event At</strong></label>
                                <input type="date" class="form-control" placeholder="enter event at" name="event_at" required>
                            </div>
                            <label><b>Event Start / End</b></label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="time" class="form-control" placeholder="Select Date" name="event_start" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="time" class="form-control" placeholder="Select Time" name="event_end" required>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                                </div>
                            </div>
                        </form>
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