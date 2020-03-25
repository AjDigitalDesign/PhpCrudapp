<?php require_once('../../../private/initialize.php'); ?>
<?php
// $id = $_GET['id'];
$id = $_GET['id'] ?? '1';
?>
<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<nav aria-label="breadcrumb" class="show-nav nav mt-3 mb-3">
    <div class="container">
        <div class="show-nav-content breadcrumb">
            <a href="<?php echo url_for('/staff/pages/index.php'); ?>">View All Pages</a>
        </div>
    </div>
</nav>
<main role="main" id="content">
    <div class="container">
        <div class="page-show-content-area">
            <?php echo $id; ?>
        </div>
    </div>
</main>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>