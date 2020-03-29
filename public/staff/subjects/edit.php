<?php
require_once('../../../private/initialize.php');

// $id = $_GET['id'];
$id = $_GET['id'] ?? '1';


if (is_post_request()) {
    //handles for values sent by new.php
    $subject = [];
    $subject['id'] = $id;
    $subject['menu_name'] = $_POST['menu_name'] ?? '';
    $subject['position'] = $_POST['position'] ?? '';
    $subject['visible'] = $_POST['visible'] ?? '';

    $result = update_subject($subject);
    redirect_to(url_for('/staff/subjects/show.php?id=' . $subject['id']));
} else {
    $subject = find_subject_by_id($id);
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
            <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($id))); ?>" method="post">
                <div class="form-group">
                    <label for="menu_name">Menu Name</label>
                    <input type="text" class="form-control" id="menu_name" name="menu_name" value="<?php echo h($subject['menu_name']); ?>">
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <select name="position" class="form-control" id="position">
                        <option value="1" <?php if ($subject['position'] == "1") {
                                                echo " selected";
                                            } ?>>1</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Visible</label>
                    <div class="form-check form-check-inline">
                        <input type="hidden" name="visible" value="0" />
                        <input type="checkbox" name="visible" value="1" <?php if ($subject['visible'] == "1") {
                                                                            echo " checked";
                                                                        } ?> />
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