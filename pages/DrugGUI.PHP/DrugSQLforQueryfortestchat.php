<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "healthdbforbwd";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(['message' => 'Connection failed']);
    exit;
}

// Retrieve the query string from the GET request
$stringinput = isset($_GET['stringchat']) ? $_GET['stringchat'] : '';

// Split the input into words
$words = explode(" ", $stringinput);
$conditions = [];
foreach ($words as $word) {
    $conditions[] = "keywords LIKE ?";
}

// Construct the query
$query = "SELECT response FROM chatusingdb WHERE " . implode(' OR ', $conditions);
$stmt = $conn->prepare($query);

// Check if the statement was prepared correctly
if (!$stmt) {
    echo json_encode(['message' => 'Error preparing database query']);
    exit;
}

// Generate the types string for binding parameters
$typeStr = str_repeat('s', count($words));

// Prepare the search terms for the LIKE clause
$searchTerms = array_map(function ($item) {
    return  $item ;
}, $words);

// Bind the parameters to the statement
$stmt->bind_param($typeStr, ...$searchTerms);

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Handle the query result
if ($result->num_rows > 0) {
    // Accumulate all responses in an array
    $responses = [];
    while ($row = $result->fetch_assoc()) {
        $responses[] = $row['response'];
    }
    echo json_encode(['message' => implode(' ', $responses)]);
} else {
    echo json_encode(['message' => 'Bạn có thể nói rõ hơn về tình trạng của bạn không, ví dụ như bạn đang bị bệnh gì ']);
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>
