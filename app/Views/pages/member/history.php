<?= $this->extend("pages/member/layoutmember") ?>
<?= $this->section("member") ?>

<div class="main-content">
    <section class="section">
        <h1 class="history-title">Reservation History</h1>
        <div class="row mt-4">
            <div class="col-12 history-lay p-4">
                <div class="row">
                    <div class="col-12">
                        <div class="reservation-table">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Labolatory Name</th>
                                        <th>Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Software Engineering</td>
                                        <td>Sunday, May 22, 2022</td>
                                        <td>07.00</td>
                                        <td>10.00</td>
                                        <td><a href="" class="btn btn-status">Ordered</a></td>
                                        <td><a href="" class="btn btn-primary"><img src="img/eye.png" alt=""></a></td>
                                    </tr>
                                    <tr>
                                        <td>Multimedia Studio</td>
                                        <td>Sunday, Feb 15, 2022</td>
                                        <td>07.00</td>
                                        <td>10.00</td>
                                        <td><a href="" class="btn btn-success">Done</a></td>
                                        <td><a href="" class="btn btn-primary"><img src="img/eye.png" alt=""></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>