<?= $this->extend("pages/member/layoutmember") ?>
<?= $this->section("member") ?>

<div class="main-content">
    <section class="section">
        <h1 class="profile-title">Edit Profile</h1>
        <div class="profile-layout">
            <div class="row profile-lay">
                <div class="col-lg-3 profile-lay-avatar">
                    <div class="profile-avatar">
                        <img src="<?= base_url("stisla/assets/img/avatar/avatar-1.png") ?>" alt="" class="profile-avatar-img rounded-circle mr-1">
                        <h5 class="profile-avatar-title">Muhammad Fahmi</h5>
                        <p class="profile-avatar-email">fahmi@student.uns.ac.id</p>
                    </div>
                </div>
                <div class="col-lg-8 profile-data-lay">
                    <form class="profile-data-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Muhammad">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Fahmi">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="fahmi@student.uns.ac.id">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="081323458765">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" rows="3" name="address" style="overflow:hidden"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" style="text-align: end;">
                                <div class="btn-lay">
                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>