<?php require_once('../../../private/initialize.php'); ?>
<?php
$pages = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Business Consult'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Services'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Leadership'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Contact Us'],
];
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<main role="main" id="content">
    <div class="subject-listing">
        <div class="container">
            <div class="subject-listing-content">
                <h1>Pages</h1>
                <div class="actions">
                    <a href="<?php echo url_for('/staff/pages/new.php'); ?>" class="action">Create New Page</a>
                </div>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Position</th>
                            <th scope="col">Visible</th>
                            <th scope="col">Page Content</th>
                            <th scope="col">&nbsp</th>
                            <th scope="col">&nbsp</th>
                            <th scope="col">&nbsp</th>
                        </tr>

                        <?php foreach ($pages as $page) : ?>
                            <tr>
                                <td><?php echo h($page['id']); ?></td>
                                <td><?php echo h($page['position']); ?></td>
                                <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                                <td><?php echo h($page['menu_name']); ?></td>
                                <td><a href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>" class="action">View</a></td>
                                <td><a href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($page['id']))); ?>" class="action">Edit</a></td>
                                <td><a href="" class="action">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</main>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>