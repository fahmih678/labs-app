<?= $this->extend("pages/admin/layoutadmin") ?>
<?= $this->section("admin") ?>

<div class="main-wrapper admin-laboratory">
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col">
                    <div class="laboratory-header">
                        <h1 class="laboratory-title">Laboratory</h1>
                        <a href="" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="laboratory-content">
                        <table class="table table-bordered laboratory-table">
                            <thead>
                                <tr>
                                    <th scope="col">Laboratory Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Facility</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Software Engineering</td>
                                    <td class="laboratory-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet commodi maxime nemo dicta, id impedit sint quam consequuntur hic eos.</td>
                                    <td>
                                        <ul>
                                            <li>10 Computer</li>
                                            <li>5 Kamera</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success">
                                            <img src="img/edit.png" alt="">
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <img src="img/delete.png" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Multimedia Studio</td>
                                    <td class="laboratory-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet commodi maxime nemo dicta, id impedit sint quam consequuntur hic eos.</td>
                                    <td>
                                        <ul>
                                            <li>10 Computer</li>
                                            <li>5 Kamera</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success">
                                            <img src="img/edit.png" alt="">
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <img src="img/delete.png" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Computer Network</td>
                                    <td class="laboratory-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet commodi maxime nemo dicta, id impedit sint quam consequuntur hic eos.</td>
                                    <td>
                                        <ul>
                                            <li>10 Computer</li>
                                            <li>5 Kamera</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success">
                                            <img src="img/edit.png" alt="">
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <img src="img/delete.png" alt="">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?= $this->endSection() ?>