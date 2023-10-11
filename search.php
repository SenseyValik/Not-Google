<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Search Results</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/styles.css">
</head>
<body>
<div class="container mt-5">
    <h1>Not Google Search Results</h1>
<!--    --><?php
//    // Your Google Custom Search API Key
//    $apiKey = 'AIzaSyCeaJk_r04rudWQw6E5jC-YCZ3fLDLWEMU';
//
//    // Your Google Custom Search Engine ID
//    $cx = 'e7a78a16ab484443a';
//    // Build the API request URL
//
//    if ($_GET['request'] == ''){
//        $_GET['request'] = 'empty';
//    }
//
//    $url = "https://www.googleapis.com/customsearch/v1?q=" . urlencode($_GET['request']) . "&key=" . $apiKey . "&cx=" . $cx;
//
//    // Send a GET request to the Google Custom Search API
//    $response = file_get_contents($url);
//
//    // Parse the JSON response
//    $data = json_decode($response);
//
//    if ($data && isset($data->items)) {
//
//        echo '<table class="table">';
//        echo '<thead><tr><th>Title</th><th>Link</th></tr></thead>';
//        echo '<tbody>';
//        foreach ($data->items as $item) {
//            echo '<tr>';
//            echo '<td>' . $item->title . '</td>';
//            echo '<td><a href="' . $item->link . '">' . $item->link . '</a></td>';
//            echo '</tr>';
//        }
//        echo '</tbody>';
//        echo '</table>';
//    } else {
//        echo 'No results found.';
//    }
    ?>

    <form action="https://not-google/">
        <input type="submit" class="back-button" value="Back"> </div>
    </form>
</div>

<!-- Link to Bootstrap JS and jQuery (for Bootstrap functionality) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
