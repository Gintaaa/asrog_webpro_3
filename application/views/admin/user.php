<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard"><?= $title; ?></span>
        </div>
    </nav>
    <div class="home-content">
        <div class="action-admin">
            <a href="<?= base_url('admin/add'); ?>" class="add"><i class='bx bxs-user-plus'></i></a>
        </div>

        <div class="overview-boxes member">
            <?php foreach ($users as $user) : ?>
            <div class="box">
                <div href="" class="card-user">
                    <div class="picture-profile">
                        <img src="<?= base_url('assets/images/profil/') . $user['image']; ?>"
                            alt="<?= $user['name']; ?>">
                    </div>
                    <div class="right-side">
                        <!-- <a href="" class="card-link"> -->

                        <h3 class="user-name"><?= $user['name']; ?></h3>
                        <!-- </a> -->
                        <div class="indicator">
                            <i class='bx bxs-envelope' style="font-size: 14px;"></i>
                            <span class="text"><?= $user['email']; ?></span>
                        </div>
                    </div>
                    <div class="devider"></div>
                </div>
                <div class="action">
                    <a onclick="return confirm('are you sure want to delete this member?')"
                        href="<?= base_url('admin/deleteUser/'); ?><?= $user['id']; ?>" class="remove"><i
                            class='bx bx-minus'></i></a>
                    <a href="<?= base_url('admin/editUser/'); ?><?= $user['id']; ?>" id="btn-edit" class="btn edit"
                        title="edit"><i class='bx bxs-edit-alt'></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="table-payment">
            <div class="box">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Kost</th>
                            <th scope="col">Kost Location</th>
                            <th scope="col">Amount(Rp)</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">Status Booking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Name"><?= $user['name']; ?></td>
                            <td data-label="Kost"><?= $user['kost']; ?></td>
                            <td data-label="Kost Location"><?= $user['kost_location']; ?></td>
                            <td data-label="Amount(Rp)"><?= $user['price']; ?> / month</td>
                            <td data-label="Start Date"><?= $user['startDate']; ?></td>
                            <td data-label="Status Booking"><?= $user['status_booking']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

</div>
</div>
</section>