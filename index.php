<?php
    header('Content-Type: text/html; charset=utf-8');
    require_once 'student.php';
    require_once 'group.php';

    function loadStudents($group, $path) {
        $file = nl2br(file_get_contents($path));
        $students = explode('<br />', $file);
        foreach ($students as $s) {
            $tmp = explode(';', $s);
            $surname = $tmp[0];
            $name = $tmp[1];
            $patr = $tmp[2];
            new Student($name, $surname, $patr, $group);
        }
    }

    $group1 = new Group(1, 'И-01');
    $group2 = new Group(2, 'И-02');
    $group3 = new Group(3, 'И-03');

    loadStudents($group1, 'i01.txt');
    loadStudents($group2, 'i02.txt');

    $group1->show();
    $group2->show();
?>    