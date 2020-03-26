<?php
require_once('../../../private/initialize.php');

if (request_is_post()) {
    //handle form value sent by new.php

    $menu_name = $_POST['menu_name'] ? $_POST['menu_name'] : '';
    $position = $_POST['position'] ? $_POST['position'] : '';
    $visible = $_POST['visible'] ? $_POST['visible'] : '';

    echo "Form parameters<br />";
    echo "Menu Name: " . $menu_name . "<br />";
    echo "Position: " . $position . "<br />";
    echo "Visible: " . $visible . "<br />";
} else {
    redirect_to(url_for('/staff/pages/new.php'));
}
