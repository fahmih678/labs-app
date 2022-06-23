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
                                <select class="form-control" id="laboratory">
                                    <option>Software Engineering</option>
                                    <option>Multimedia Studio</option>
                                    <option>Computer Network</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="start">Start time</label>
                                <select class="form-control" id="start">
                                    <option>06.00</option>
                                    <option>08.00</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <select class="form-control" id="date">
                                        <option>Sunday, May 22, 2022</option>
                                        <option>Saturday, May 16, 2022</option>
                                        <option>Friday, May 10, 2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="endtime">End time</label>
                                    <select class="form-control" id="endtime">
                                        <option>11.00</option>
                                        <option>12.00</option>
                                        <option>13.00</option>
                                    </select>
                                </div>
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