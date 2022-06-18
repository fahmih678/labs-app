<?= $this->extend("pages/member/layoutmember") ?>
<?= $this->section("member") ?>

<div class="main-content">
    <section class="section">
        <h1 class="reservation-title">Room Reservation</h1>
        <div class="row">
            <div class="col-12 reservation-lay">
                <form class="reservation-data-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="laboratory">Laboratory</label>
                                <input type="text" class="form-control" id="laboratory" name="laboratory" placeholder="Software Engineering">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control" id="date" name="date" placeholder="Sunday, May 22, 2022">
                                </div>
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
                                <input type="text" class="form-control" id="invoice" name="invoice" placeholder="Upload here">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="btn-lay">
                                <button type="submit" class="btn btn-primary">Pinjam Ruang Sekarang</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>