<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="javascript:void();" aria-expanded="false">
                    <i class="fas fa-calendar-day"></i>
                    <span class="nav-text">Company Event</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= base_url('event-list') ?>">Event List</a></li>
                    <li><a href="<?= base_url('add-event') ?>">Add Event</a></li>
                </ul>

            </li>
            <li><a class="" href="<?= base_url('employee-list') ?>" aria-expanded="false">
                    <i class="fas fa-building"></i>
                    <span class="nav-text">Employee</span>
                </a></li>
            <li><a class="" href="<?= base_url('user-list') ?>" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">User List</span>
                </a></li>
            <li><a class="" href="<?= base_url('logout') ?>" aria-expanded="false">
                    <i class="fas fa-door-open"></i>
                    <span class="nav-text">Sign Out</span>
                </a></li>
        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->