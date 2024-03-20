<?php
include_once "db.php";
session_start();
$rawData = file_get_contents("php://input");
$jsonData = json_decode($rawData, true);
function all_data($jsonData, $conn)
{
    $sql = "SELECT `id`, `record_id`, `gender`, `specialty`, `qualification`, `name`, `address`, `area_name`, `city`, `state`, `pincode`, `mci_no`, `medical_council`, `mail`, `phone`, `qualification1`, `qualification2`, `qualification3`, `passing_year`, `exp` FROM `doc_data`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }
    return $output;
}

function get_unique_state($jsonData, $conn)
{
    $sql = "SELECT DISTINCT state as state FROM `doc_data`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output['state'][] = $row['state'];
    }
    return $output;
}

function get_city_data($jsonData, $conn)
{
    $sql = "SELECT DISTINCT city as city FROM `doc_data`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output['city'][] = $row['city'];
    }
    return $output;
}

function get_area_data($jsonData, $conn)
{
    $sql = "SELECT DISTINCT area_name as area FROM `doc_data`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output['area'][] = $row['area'];
    }
    return $output;
}

function get_unique_city($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['states']); $i++) {
        if ($i != sizeof($jsonData['states']) - 1) {
            $add .= "state = '" . $jsonData['states'][$i] . "' OR ";
        } else {
            $add .= "state = '" . $jsonData['states'][$i] . "'";
        }
    }
    $sql = "SELECT DISTINCT city as city FROM `doc_data` WHERE " . $add;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output['city'][] = $row['city'];
    }

    return $output;
}

function get_unique_area($jsonData, $conn)
{
    // print_r($jsonData);exit;
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['city']); $i++) {
        if ($i != sizeof($jsonData['city']) - 1) {
            $add .= "city = '" . $jsonData['city'][$i] . "' OR ";
        } else {
            $add .= "city = '" . $jsonData['city'][$i] . "'";
        }
    }
    $sql = "SELECT DISTINCT area_name as area_name FROM `doc_data` WHERE " . $add;
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output['area_name'][] = $row['area_name'];
    }

    return $output;
}

function get_top_specialities($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['state']); $i++) {
        if ($i != sizeof($jsonData['state']) - 1) {
            $add .= "state = '" . $jsonData['state'][$i] . "' OR ";
        } else {
            $add .= "state = '" . $jsonData['state'][$i] . "'";
        }
    }
    $sql = "SELECT specialty, COUNT(*) AS specialty_count FROM doc_data WHERE " . $add . " GROUP BY specialty ORDER BY `specialty_count` DESC";
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;
}

function get_state_filter($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['state']); $i++) {
        if ($i != sizeof($jsonData['state']) - 1) {
            $add .= "state = '" . $jsonData['state'][$i] . "' OR ";
        } else {
            $add .= "state = '" . $jsonData['state'][$i] . "'";
        }
    }
    $sql = "SELECT * FROM `doc_data` WHERE " . $add;
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;
}

function get_city_filter($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['city']); $i++) {
        if ($i != sizeof($jsonData['city']) - 1) {
            $add .= "city = '" . $jsonData['city'][$i] . "' OR ";
        } else {
            $add .= "city = '" . $jsonData['city'][$i] . "'";
        }
    }
    $sql = "SELECT * FROM `doc_data` WHERE " . $add;
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;
}

function get_area_filter($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['area']); $i++) {
        if ($i != sizeof($jsonData['area']) - 1) {
            $add .= "area_name = '" . $jsonData['area'][$i] . "' OR ";
        } else {
            $add .= "area_name = '" . $jsonData['area'][$i] . "'";
        }
    }
    $sql = "SELECT * FROM `doc_data` WHERE " . $add;
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;
}
function qualification_filter($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['qualification']); $i++) {
        if ($i != sizeof($jsonData['qualification']) - 1) {
            $add .= "qualification = '" . $jsonData['qualification'][$i] . "' OR ";
        } else {
            $add .= "qualification = '" . $jsonData['qualification'][$i] . "'";
        }
    }
    $sql = "SELECT * FROM `doc_data` WHERE " . $add;
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;
}
function speciality_filter($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['speciality']); $i++) {
        if ($i != sizeof($jsonData['speciality']) - 1) {
            $add .= "specialty = '" . $jsonData['speciality'][$i] . "' OR ";
        } else {
            $add .= "specialty = '" . $jsonData['speciality'][$i] . "'";
        }
    }
    $sql = "SELECT * FROM `doc_data` WHERE " . $add;
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;
}
function exp_filter($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['exp']); $i++) {
        if ($i != sizeof($jsonData['exp']) - 1) {
            $add .= "exp = '" . $jsonData['exp'][$i] . "' OR ";
        } else {
            $add .= "exp = '" . $jsonData['exp'][$i] . "'";
        }
    }
    $sql = "SELECT * FROM `doc_data` WHERE " . $add;
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;
}
function gender_filter($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['gender']); $i++) {
        if ($i != sizeof($jsonData['gender']) - 1) {
            $add .= "gender = '" . $jsonData['gender'][$i] . "' OR ";
        } else {
            $add .= "gender = '" . $jsonData['gender'][$i] . "'";
        }
    }
    $sql = "SELECT * FROM `doc_data` WHERE " . $add;
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;
}
function council_filter($jsonData, $conn)
{
    $add = "";
    for ($i = 0; $i < sizeof($jsonData['medical_council']); $i++) {
        if ($i != sizeof($jsonData['medical_council']) - 1) {
            $add .= "medical_council = '" . $jsonData['medical_council'][$i] . "' OR ";
        } else {
            $add .= "medical_council = '" . $jsonData['medical_council'][$i] . "'";
        }
    }
    $sql = "SELECT * FROM `doc_data` WHERE " . $add;
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }

    return $output;
}
function show_uniqe_speciality($jsonData, $conn)
{
    $sql = "SELECT DISTINCT specialty as speciality FROM `doc_data`";
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output['speciality'][] = $row['speciality'];
    }

    return $output;
}

function show_unique_qualification($jsonData, $conn)
{
    $sql = "SELECT DISTINCT qualification1 as qulalification FROM `doc_data`";
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output['qulalification'][] = $row['qulalification'];
    }

    return $output;
}

function show_unique_exprience($jsonData, $conn)
{
    $sql = "SELECT DISTINCT exp as exp FROM `doc_data`";
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output['exp'][] = $row['exp'];
    }

    return $output;
}
function show_unique_medicalcouncil($jsonData, $conn)
{
    $sql = "SELECT DISTINCT medical_council as medical_council FROM `doc_data`";
    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output['medical_council'][] = $row['medical_council'];
    }

    return $output;
}

function updateWhatsappCredits($jsonData, $conn)
{

    $wc_count = isset($jsonData['wc_count']) ? intval($jsonData['wc_count']) : 0;

    $userid = mysqli_real_escape_string($conn, $_SESSION['id']);
    $username = mysqli_real_escape_string($conn, $_SESSION['username']);

    $sql = "UPDATE users SET wc = wc - $wc_count WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return json_encode(array("error" => mysqli_error($conn)));
    } else {
        $recordids = $jsonData['g_obj'];
        date_default_timezone_set('Asia/Kolkata');
        $currentDate = date('Y-m-d H:i:s');

        for ($i = 0; $i < sizeof($jsonData['g_obj']); $i++) {
            $record_id =  $jsonData['g_obj'][$i];

            $sql = "INSERT INTO credit_details (userid, username, record_id, credits, date) VALUES ('$userid', '$username', '$record_id', 'wc', '$currentDate')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                return json_encode(array("error" => mysqli_error($conn)));
            }
        }
    }

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return json_encode(array("error" => mysqli_error($conn)));
    }

    $row = mysqli_fetch_assoc($result);
    $_SESSION['wc'] = $row['wc'];
    return json_encode($row);
}

function updateEmailCredits($jsonData, $conn)
{

    $wc_count = isset($jsonData['wc_count']) ? intval($jsonData['wc_count']) : 0;

    $userid = mysqli_real_escape_string($conn, $_SESSION['id']);
    $username = mysqli_real_escape_string($conn, $_SESSION['username']);

    $sql = "UPDATE users SET ec = ec - $wc_count WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return json_encode(array("error" => mysqli_error($conn)));
    } else {
        $recordids = $jsonData['g_obj'];
        date_default_timezone_set('Asia/Kolkata');
        $currentDate = date('Y-m-d H:i:s');

        for ($i = 0; $i < sizeof($jsonData['g_obj']); $i++) {
            $record_id =  $jsonData['g_obj'][$i];

            $sql = "INSERT INTO credit_details (userid, username, record_id, credits, date) VALUES ('$userid', '$username', '$record_id', 'ec', '$currentDate')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                return json_encode(array("error" => mysqli_error($conn)));
            }
        }
    }

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return json_encode(array("error" => mysqli_error($conn)));
    }

    $row = mysqli_fetch_assoc($result);
    $_SESSION['ec'] = $row['ec'];
    return json_encode($row);
}

function updateDownloadCredits($jsonData, $conn)
{

    $wc_count = isset($jsonData['wc_count']) ? intval($jsonData['wc_count']) : 0;

    $userid = mysqli_real_escape_string($conn, $_SESSION['id']);
    $username = mysqli_real_escape_string($conn, $_SESSION['username']);

    $sql = "UPDATE users SET dc = dc - $wc_count WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return json_encode(array("error" => mysqli_error($conn)));
    } else {
        $recordids = $jsonData['g_obj'];
        date_default_timezone_set('Asia/Kolkata');
        $currentDate = date('Y-m-d H:i:s');

        for ($i = 0; $i < sizeof($jsonData['g_obj']); $i++) {
            $record_id =  $jsonData['g_obj'][$i];

            $sql = "INSERT INTO credit_details (userid, username, record_id, credits, date) VALUES ('$userid', '$username', '$record_id', 'dc', '$currentDate')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                return json_encode(array("error" => mysqli_error($conn)));
            }
        }
    }

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return json_encode(array("error" => mysqli_error($conn)));
    }

    $row = mysqli_fetch_assoc($result);
    $_SESSION['dc'] = $row['dc'];
    return json_encode($row);
}

function all_credit_data($jsonData, $conn)
{
    $sql = "SELECT count(*) cou,credits,date FROM credit_details group by date";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }
    return $output;
}

function filter_credit_data_count($jsonData, $conn)
{
    $period = isset($jsonData['months']) ? intval($jsonData['months']) : 0;
    if ($period == 1) {
        $sql = "SELECT SUM(CASE WHEN credits = 'wc' THEN 1 ELSE 0 END) AS wc, SUM(CASE WHEN credits = 'ec' THEN 1 ELSE 0 END) AS ec, SUM(CASE WHEN credits = 'dc' THEN 1 ELSE 0 END) AS dc FROM credit_details WHERE STR_TO_DATE(date, '%Y-%m-%d') >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)";
    } elseif ($period == 3) {
        $sql = "SELECT SUM(CASE WHEN credits = 'wc' THEN 1 ELSE 0 END) AS wc, SUM(CASE WHEN credits = 'ec' THEN 1 ELSE 0 END) AS ec, SUM(CASE WHEN credits = 'dc' THEN 1 ELSE 0 END) AS dc FROM credit_details WHERE STR_TO_DATE(date, '%Y-%m-%d') >= DATE_SUB(CURDATE(), INTERVAL 3 MONTH)";
    } elseif ($period == 6) {
        $sql = "SELECT SUM(CASE WHEN credits = 'wc' THEN 1 ELSE 0 END) AS wc, SUM(CASE WHEN credits = 'ec' THEN 1 ELSE 0 END) AS ec, SUM(CASE WHEN credits = 'dc' THEN 1 ELSE 0 END) AS dc FROM credit_details WHERE STR_TO_DATE(date, '%Y-%m-%d') >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)";
    } elseif ($period == 12) {
        $sql = "SELECT SUM(CASE WHEN credits = 'wc' THEN 1 ELSE 0 END) AS wc, SUM(CASE WHEN credits = 'ec' THEN 1 ELSE 0 END) AS ec, SUM(CASE WHEN credits = 'dc' THEN 1 ELSE 0 END) AS dc FROM credit_details WHERE STR_TO_DATE(date, '%Y-%m-%d') >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH)";
    } else {
        return json_encode(array("Select valid time period."));
    }
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return json_encode($row);
}

function filter_credit_data_date_range($jsonData, $conn)
{
    if (!isset($jsonData['start_date']) || !isset($jsonData['end_date'])) {
        return json_encode(array("error" => "Start date and end date are required."));
    }

    $startdate = date('Y-m-d', strtotime($jsonData['start_date']));
    $enddate = date('Y-m-d', strtotime($jsonData['end_date']));

    try {
        $sql = "SELECT date, 
                       COUNT(IF(credits = 'wc', 1, NULL)) AS wc,
                       COUNT(IF(credits = 'ec', 1, NULL)) AS ec,
                       COUNT(IF(credits = 'dc', 1, NULL)) AS dc
                FROM credit_details
                WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN ? AND ?
                GROUP BY STR_TO_DATE(date, '%Y-%m-%d')";

        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("ss", $startdate, $enddate);

        $success = $stmt->execute();

        if (!$success) {
            throw new Exception("Error executing statement: " . $stmt->error);
        }

        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        if (empty($result)) {
            return json_encode(array("error" => "No data found for the selected date range."));
        }

        return json_encode($result);
    } catch (Exception $e) {
        return json_encode(array("error" => "Database error: " . $e->getMessage()));
    }
}

function user_authantication($jsonData, $conn)
{
    $sql = "SELECT * FROM `users` WHERE username = '" . $jsonData['username'] . "' AND password = '" . $jsonData['psw'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['paid'] = $row['paid'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['wc'] = $row['wc'];
        $_SESSION['ec'] = $row['ec'];
        $_SESSION['dc'] = $row['dc'];
        $output['msg'] = "found";
    } else {
        $output['msg'] = "notfound";
    }
    return $output;
}

if (isset($jsonData['function'])) {
    echo json_encode($jsonData['function']($jsonData, $conn));
}
