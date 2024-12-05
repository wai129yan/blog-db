<header class="header">
    <a href="dashboard.php" class="logo">Admin <span>Panel</span></a>

    <div class="profile">
        <?php
        $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
        $select_profile -> execute([$admin_id]);
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>
        <p><?= $fetch_profile['name'];?></p>
        <a href="update_profile.php" class="btn">Update Profile</a>
    </div>
    <nav class="navbar">
    <a href="dashboard.php"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="add_posts.php"><i class="fas fa-pen"></i><span>Add Post</span></a>
    <a href="view_posts.php"><i class="fas fa-eye"></i><span>View Posts</span></a>
    <a href="admin_accounts.php"><i class="fas fa-user"></i><span>Accounts</span></a>
    <a href="../components/admin_logout.php" onclick="return confirm('logout from the website?');"><i class="fas fa-backet"></i><span class="color:var(--red);">Logout</span></a>
    </nav>
    <div class="flex-btn">
        <a href="admin_login.php" class="option-btn">Login</a>
        <a href="register_admin.php" class="option-btn">Register</a>
    </div>
</header>