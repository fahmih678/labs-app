<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img alt="image" src="<?= base_url("stisla/assets/img/avatar/avatar-1.png") ?>" class="rounded-circle mr-1" width="30">
            <a href="index.html">Room Reservation</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item <?= $title === "Admin Page" ? "active" : "" ?>">
                <a href="/admin" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item <?= $title === "Admin Page || Users" ? "active" : "" ?>">
                <a href="/admin-users" class="nav-link"><i class="fa fa-user"></i> <span>Users</span></a>
            </li>
            <li class="nav-item <?= $title === "Admin Page || Laboratory" ? "active" : "" ?>">
                <a href="/admin-laboratory" class="nav-link"><i class="fas fa-columns"></i> <span>Laboratory</span></a>
            </li>
            <li class="nav-item <?= $title === "Admin Page || Reservation" ? "active" : "" ?>">
                <a href="/admin-reservation" class="nav-link"><i class="far fa-file-alt"></i> <span>Lab Reservation</span></a>
            </li>
        </ul>
    </aside>
</div>