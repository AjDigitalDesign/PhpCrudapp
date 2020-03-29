<?php require_once('../../../private/initialize.php'); ?>
<?php
// $id = $_GET['id'];
$id = $_GET['id'] ?? '1';
$subject = find_subject_by_id($id);
?>
<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<nav aria-label="breadcrumb" class="show-nav nav mt-3 mb-3">
    <div class="container">
        <div class="show-nav-content breadcrumb">
            <a href="<?php echo url_for('/staff/subjects/index.php'); ?>">View All Subjects</a>
        </div>
    </div>
</nav>
<main role="main" id="content">
    <div class="container">
        <div class="page-show-content-area">
            <h1 class="mt-5 mb-5">Subject: <?php echo h($subject['menu_name']); ?></h1>
            <div class="media">
                <!-- <img src="..." class="align-self-center mr-3" alt="..."> -->
                <div class="media-body ">
                    <h5><span>Menu Name: </span> <?php echo h($subject['menu_name']); ?></h5>
                    <h6><span>Position: </span><?php echo h($subject['position']); ?></h6>
                    <h6><span>Visible: </span><?php echo $subject['visible'] == '1' ? 'true' : 'false'; ?></h6>

                </div>
            </div>
        </div>
    </div>
</main>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>