<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<main role="main" id="content">
    <div class="main-menu-area">
        <div class="container">
            <h1>Main Menu</h1>
            <nav class="main-menu">
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a></li>
                    <li class="list-group-item"><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Pages</a></li>
                </ul>
            </nav>
        </div>
    </div>
</main>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>