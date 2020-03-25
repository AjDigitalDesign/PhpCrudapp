<?php
require_once('../../../private/initialize.php');

$test = $_GET['test'] ?? '';

if ($test == '404') {
    error_404();
} elseif ($test == '500') {
    error_500();
} elseif ($test == 'redirect') {
    redirect_to(url_for('/staff/subjects/index.php'));
}
?>

<?php $page_title = 'Create Subject'; ?>
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
        <h1>Edit Subject</h1>
        <div class="edit-subject-area">
            <form action="" method="post">
                <div class="form-group">
                    <label for="menu_name">Menu Name</label>
                    <input type="text" class="form-control" id="menu_name" name="menu_name" value="">
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <select class="form-control" id="position" name="position">
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Visible</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="visible" value="0">
                        <input class="form-check-input" type="checkbox" name="visible" value="1">
                    </div>
                </div>
                <div id="operations" class="operations">
                    <input type="submit" class="btn btn-primary btn-large" value="Edit Subject" />
                </div>


            </form>

        </div>
    </div>
</main>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>