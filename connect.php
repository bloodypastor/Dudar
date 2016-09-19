<?php
$link = mysqli_connect("localhost", "root", "", "dudar");

if (mysqli_connect_errno()) {
    printf("Не удалось подключиться:", mysqli_connect_error());
    exit();
}
