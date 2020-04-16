<?php

function home()
{
    if (!has_right(get_heading())) redirect(get('home_route'));

    $logs = x('SELECT * FROM ' . heading('table') . ' ORDER BY log_date DESC');

    if ($logs) {
        $logs = $logs->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $logs = array();
    }

    if (count($logs) > 0) $logs = handle_data($logs);

    load_view('index', $logs);
}
