<?= $this->extend("pages/member/layoutmember") ?>
<?= $this->section("member") ?>

<div class="main-content">
    <section class="section">
        <h1 class="history-title">Reservation History</h1>
        <div class="row">
            <div class="col-12 history-lay">
                <form class="history-data-form">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="history-in-process">In Process</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fullname">Full name</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Muhammad Fahmi">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="fahmi@student.uns.ac.id">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="laboratory">Laboratory</label>
                                <input type="text" class="form-control" id="laboratory" name="laboratory" placeholder="Software Engineering">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" id="date" name="date" placeholder="Sunday, May 22, 2022">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="starttime">Start time</label>
                                <input type="text" class="form-control" id="starttime" name="starttime" placeholder="08:00">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="endtime">End time</label>
                                <input type="text" class="form-control" id="endtime" name="endtime" placeholder="11:00">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="invoice">Invoice</label>
                                <input type="text" class="form-control" id="invoice" name="invoice" placeholder="-">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status" placeholder="In process">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 history-lay">
                <div class="row">
                    <div class="col-12">
                        <h2 class="history-res-title">History</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>