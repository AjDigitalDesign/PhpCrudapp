<?php require_once('../../../private/initialize.php'); ?>
<?php
$subject_set = find_all_subjects();
?>
<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main role="main" id="content">
    <div class="subject-listing">
        <div class="container">
            <div class="subject-listing-content">
                <h1>Subjects</h1>
                <div class="actions">
                    <a href="<?php echo url_for('/staff/subjects/new.php'); ?>" class="action">Create New Subject</a>
                </div>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Position</th>
                            <th scope="col">Visible</th>
                            <th scope="col">Name</th>
                            <th scope="col">&nbsp</th>
                            <th scope="col">&nbsp</th>
                            <th scope="col">&nbsp</th>
                        </tr>
                        <?php while ($subject = mysqli_fetch_assoc($subject_set)) : ?>
                            <tr>
                                <td><?php echo h($subject['id']); ?></td>
                                <td><?php echo h($subject['position']); ?></td>
                                <td><?php echo h($subject['visible']) == 1 ? 'true' : 'false'; ?></td>
                                <td><?php echo h($subject['menu_name']); ?></td>
                                <td><a href="<?php echo url_for('/staff/subjects/show.php?id=' . h(u($subject['id']))); ?>" class="action">View</a></td>
                                <td><a href="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($subject['id']))); ?>" class="action">Edit</a></td>
                                <td><a href="" class="action">Delete</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </thead>
                </table>
                <?php
                mysqli_free_result($subject_set);
                ?>
            </div>
        </div>
    </div>


</main>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>