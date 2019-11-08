<!-- <form action="" method="P$_POST">
                    <input type="text" name="search" size="25" /> <br />
                    <input type="submit" name="add" data="submit" />
                </form> -->
<?php
// require_once("../utils/APICall.php");
$dataGetFromAPI = file_get_contents('https://jobs.github.com/positions.json');
$dataTypeJSON = json_decode($dataGetFromAPI, true);
if (isset($_POST['search-data'])) {
    foreach ($dataTypeJSON as $key => $data) {
        if (strpos($data['type'], $_POST['type']) !== false || strpos($data['description'], $_POST['search-data']) !== false || strpos($data['title'], $_POST['search-data']) !== false || strpos($data['company'], $_POST['search-data']) !== false) {
            echo "company:" . $data['type'] . "<br>";
        } else { }
    }
}
?>
<!-- <table class="table table-hover">
    <thead>
        
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table> -->