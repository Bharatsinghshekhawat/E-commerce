<link rel="stylesheet" href="css.css">
<?php
// search.php
include 'header.php'; // Optional: Include header if you want



// Check if the search query exists
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];
    
    // In a real project, you'd query a database. 
    // Here is a simple example with an array of products or items to search from:
    $items = [
        "Buttoned Shirt",
        "Checked Tunic",
        "Embroidered Shirt",
        "Leather Jacket",
        "Puffer Jacket",
        "Printed Blouse",
        "Ripped Denim Jacket",
        "Suede Effect Dress"
    ];

    $results = []; // Array to store search results

    // Loop through items and check if the search query matches
    foreach ($items as $item) {
        if (stripos($item, $search_query) !== false) {
            $results[] = $item;
        }
    }

    // Display the search query
    echo "<h1>Search results for: '" . htmlspecialchars($search_query) . "'</h1>";

    // If results are found, display them
    if (count($results) > 0) {
        echo "<ul>";
        foreach ($results as $result) {
            echo "<li>" . htmlspecialchars($result) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No results found.</p>";
    }
} else {
    // If the search query is not set, redirect back to the homepage
    header("Location: index.php");
    exit();
}

include 'footer.php'; // Optional: Include footer if you want
?>
