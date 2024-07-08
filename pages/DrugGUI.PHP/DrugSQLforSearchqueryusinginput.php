    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healthdbforbwd";

    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        error_log('Connection error: ' . $conn->connect_error);
        echo json_encode('Connection error');
        exit;
    }

    $drugname = isset($_GET['drugname']) ? $_GET['drugname'] : '';
    if (empty($drugname)) {
        echo json_encode('No drug name provided');
        exit;  
    }

    $stmt = $conn->prepare("SELECT * FROM drugs WHERE name = ?");
    if ($stmt) {
        $stmt->bind_param("s", $drugname);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $cleanDrugName = strtolower(preg_replace('/\s+/', '-', $row['name']));
            $url = "/testphp/pages/DrugGUIforIndividualdrug/" .$cleanDrugName . "-DatDrugInfoGui.php";
            echo json_encode(['url' => $url]);
        } else {
            if (strpos($drugname, ' ') !== false) {
                $words = explode(' ', $drugname);
                $conditions = [];
                foreach ($words as $word) {
                    $conditions[] = "information LIKE ?";
                } 
                $query = "SELECT * FROM drugs WHERE " . implode(' OR ', $conditions);
                $stmt = $conn->prepare($query);

                if ($stmt) {
                    $typesStr = str_repeat('s', count($words));
                    $searchTerms = array_map('encloseWithPercent', $words);
                    $stmt->bind_param($typesStr, ...$searchTerms);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $cleanDrugName = strtolower(preg_replace('/\s+/', '-', $row['name']));
                        $url = "/testphp/pages/DrugGUIforIndividualdrug/" .$cleanDrugName . "-DatDrugInfoGui.php";
                        echo json_encode(['url' => $url]);
                    } else {
                        echo json_encode('No details available for the specified drug.');
                    }
                }
            } else {
                echo json_encode('No details available for the specified drug.');
            }
        }
        $stmt->close();
    }
    $conn->close();

    function encloseWithPercent($word) {
        return "%" . $word . "%";
    }
    ?>
