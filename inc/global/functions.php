<?php
function array_sanitize(&$item) {
    $item = htmlentities(strip_tags(mysql_real_escape_string($item)));
}

function sanitize($data) {
    return preg_replace('/\s+/', '', str_replace(' ', '', htmlentities(strip_tags(mysql_real_escape_string($data)))));	
}

function output_errors($errors) {
    return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}

function format_phone($phone) {
    return "(" . substr($phone, 0, 3) . ") " . substr($phone, 3, 3) . "-" . substr($phone, 6, 4);
}

function make_error($error, $type) {
    if (empty($error) === false) {
        if ($type === 0) {
            return '<span class="error">' . $error . '</span>';
        }
        if ($type === 1) {
            return '<span style="position: relative; top: -15px;" class="error">' . $error . '</span>';
        }
    }
}
?>