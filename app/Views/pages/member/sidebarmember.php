<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img alt="image" src="<?= base_url("stisla/assets/img/avatar/avatar-1.png") ?>" class="rounded-circle mr-1" width="30">
            <a href="index.html">Room Reservation</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item <?= $title === "Member Page" ? "active" : "" ?>">
                <a href="/member" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item <?= $title === "Profile Member" ? "active" : "" ?>">
                <a href="/member-profile" class="nav-link"><i class="fa fa-user"></i> <span>Edit Profile</span></a>
            </li>
            <li class="nav-item <?= $title === "Reservation Member" ? "active" : "" ?>">
                <a href="/room-reservation" class="nav-link"><i class="fas fa-columns"></i> <span>Room reservation</span></a>
            </li>
            <li class="nav-item <?= $title === "Reservation History" ? "active" : "" ?>">
                <a href="/reservation-history" class="nav-link"><i class="far fa-file-alt"></i> <span>Reservation History</span></a>
            </li>
        </ul>
    </aside>
</div>