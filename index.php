<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
    <link rel="shortcut icon" href="./image/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="header" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <?php include("./modules/header.php") ?>
            </div>
            <div class="content col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <?php processSearchData() ?>
            </div>
            <div>
                <?php include("./modules/footer.php") ?>
            </div>
        </div>
    </div>
    <!-- javascript -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php

function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strtolower($data);
    return $data;
}

function displayInfoSearch($data)
{
    if ($_POST['type'] == "Full time") {
        echo '<table class="table table-hover">
        <tbody>
            <tr>
                <td colspan="4">' . '<h5>' . $data['title'] . '</h5>' . '<br>' . $data['company'] . ' - ' . '<span id="data-tyle">' . $data['type'] . '</span>' . '</td>
            </tr>
        </tbody>
    </table>';
    } elseif ($_POST['type'] == "Part time" && $data['type'] != "Full Time") {
        echo '<table class="table table-hover">
        <tbody>
            <tr>
                <td colspan="4">' . '<h5>' . $data['title'] . '</h5>' . '<br>' . $data['company'] . '</td>
                <td colspan="4">' . 'Location: ' . '<span id="data-tyle">' . $data['location'] . '</span>' . '</td>
            </tr>
        </tbody>
    </table>';
    }
}

function processSearchData()
{
    require_once("./utils/APICall.php");
    if (isset($_POST['search-data'])) {
        if (!empty($_POST['search-data'])) {
            foreach ($dataTypeJSON as $data) {
                if (strpos(
                    strtolower($data['description']),
                    testInput($_POST['search-data'])
                ) !== false || strpos(
                    strtolower($data['title']),
                    testInput($_POST['search-data'])
                ) !== false || strpos(
                    strtolower($data['company']),
                    testInput($_POST['search-data'])
                ) !== false) {
                    displayInfoSearch($data);
                }
            }
        } else {
            foreach ($dataTypeJSON as $data) {
                displayInfoSearch($data);
            }
        }
    }
}
?>