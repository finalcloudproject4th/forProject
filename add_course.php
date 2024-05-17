<?php
session_start();

// 만약 로그인 세션이 없다면 로그인 페이지로 리다이렉트
if (!isset($_SESSION['id'])) {
    header("Location: instructorlogin.php"); // 로그인 페이지 URL로 리다이렉트
    exit; // 코드 실행 중지
}

// MySQL 데이터베이스 연결 정보
$servername = "database-1.cvu4uqwmyddr.ap-northeast-2.rds.amazonaws.com";
$username = "admin";
$password = "Amazon1!";
$dbname = "user";

// MySQL 데이터베이스 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 사용자가 제출한 강의 이름 가져오기
$course_name = $_POST['course_name'];

// 새로운 강의를 데이터베이스에 추가하는 쿼리 실행
$sql = "INSERT INTO courses (cname, instructor) VALUES ('$course_name', '{$_SESSION['name']}')";

if ($conn->query($sql) === TRUE) {
    // 강의를 추가한 후에 해당 강의의 내용을 초기화
    $course_id = $conn->insert_id;
    $initialize_course_sql = "INSERT INTO course_contents (cid, week, subtitle) VALUES ('$course_id', '1', 'Introduction')";
    if ($conn->query($initialize_course_sql) === TRUE) {
        echo "New course added successfully";
    } else {
        echo "Error adding course contents: " . $conn->error;
    }
} else {
    echo "Error adding course: " . $conn->error;
}

// MySQL 연결 닫기
$conn->close();
?>

