<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
            <div class="input-box">
                <input type="text" name="verification_code" id="verification_code" placeholder="Email" required>
                <img width="15px" height="15px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASZJREFUSEvt1cErBHEUwPHP3jlQSspNKf4JRzlLDlKKIgfl7LjlphxEUUoOkrMc/ROUs5JSHLizTzOaxuzOrmkum3f8zXvv+953pt801ByNmvvrL8A8mpisqO0BO7iKPllFd5iq2Dwtv8d0HvCZPD3Exh9B2drv4bMbpIA4m8UpRrsEPWMFN8j2KQQM4gNDLcARFkogl1jHGwbwnuS33eARy7hNEhdxgOEc6BWbuEjOZ3CG8TJA2ucE28lEoSqUhbqIUBFKQk1svIfV3ABtN8jmPWEN18lhqIgIdRFzOMZYgcauAGndecvxFkJLROjax1KH99MTIPq8ZDSEvpGSl98zoMsv9iftH1Bq7Jei2i+7uK53MVE6W+eEttd1xb7F5f31y6xF0RedUDYZkAb/FgAAAABJRU5ErkJggg=="/>
                </form>
            </div>
            <?php
            require "connect.php";
    if (isset($_POST["verification_code"]))
    {
        $sql = "SELECT registrar FROM verification_code";

        
    }
    ?>
</body>
</html>