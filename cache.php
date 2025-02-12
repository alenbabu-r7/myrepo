<?php
$memcache = new Memcached();
$memcache->addServer("127.0.0.1", 11211);


function fetchAndCacheData($conn, $memcache) {
    $result = $conn->query("SELECT * FROM student_details");
    $students = $result->fetch_all(MYSQLI_ASSOC);
    
    $memcache->set("students_data", $students, 60);
    error_log("Data fetched from Database", 0); 
    return $students;
}


function getCachedData($conn, $memcache) {
    $cachedData = $memcache->get("students_data");
    
    if (!$cachedData) {
        return fetchAndCacheData($conn, $memcache); 
    }

    error_log("Data fetched from Memcached", 0); 
    return $cachedData;
}
?>
