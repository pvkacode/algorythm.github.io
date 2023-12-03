<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pythonCode = $_POST["pythonCode"];
    $output = shell_exec("python3 -c \"$pythonCode\" 2>&1");
    echo $output;
}
?>
