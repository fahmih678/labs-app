<?= $this->extend("pages/admin/layoutadmin") ?>
<?= $this->section("admin") ?>

<div class="main-wrapper admin-laboratory">
    <div class="main-content">
        <section class="section">
            <div class="add-lab-layout">
                <div class="add-lab-header">
                    <h2>Laboratory</h2>
                    <h5 class="add-lab-header-des">Laboratory/Multimedia Studio</h5>
                </div>
                <form>
                    <div class="row add-lab-form">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="labName" class="form-label">Laboratory Name</label>
                                <input type="text" class="form-control" id="labName" placeholder="Multimedia Studio" />
                            </div>
                            <div class="mb-3">
                                <label for="coverImg" class="form-label">Cover Image</label>
                                <input type="text" class="form-control" id="coverImg" placeholder="multimedia.png" />
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id amet asperiores ad inventore velit blanditiis in! Ratione perferendis, molestias recusandae qui, sequi debitis eligendi nulla rem consectetur consequuntur sapiente possimus, officia dicta modi. Veniam debitis, distinctio quae quis, quidem praesentium autem dignissimos aliquam sapiente dolorum dolor nisi et labore vero." />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="facility" class="form-label">Facility</label>
                                <input type="text" class="form-control" id="facility" placeholder="10 Computers" />
                            </div>
                            <div class="col-6">
                                <label for="img" class="form-label">Add Image</label>
                                <input type="text" class="form-control" id="img" placeholder="computers.png" />
                            </div>
                            <div class="col-6">
                                <label for="facility" class="form-label">Facility</label>
                                <input type="text" class="form-control" id="facility" placeholder="5 Camera" />
                            </div>
                            <div class="col-6">
                                <label for="img" class="form-label">Add Image</label>
                                <input type="text" class="form-control" id="img" placeholder="camera.png" />
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <button class="btn btn-primary">+ Add Facility</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

<?= $this->endSection() ?>