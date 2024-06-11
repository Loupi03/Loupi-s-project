<?php
include 'connection.php';

if (isset($_GET['game_id'])) {
    $game_id = intval($_GET['game_id']); 
    $sql = "SELECT * FROM games WHERE game_id = $game_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $game = $result->fetch_assoc();
        echo json_encode($game);
    } else {
        echo json_encode(['error' => 'Game not found']);
    }
} else {
    echo json_encode(['error' => 'Invalid game ID']);
}

$conn->close();


