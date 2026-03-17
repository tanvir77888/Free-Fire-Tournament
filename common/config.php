<?php
session_start();

// Neon PostgreSQL Connection String থেকে ডাটা নেয়া
$host = 'ep-soft-firefly-am6ik9em-pooler.c-5.us-east-1.aws.neon.tech';
$db   = 'neondb';
$user = 'neondb_owner';
$pass = 'npg_0VDgNSTqiv4F';

// Cloudinary ডিটেইলস
define('CLOUDINARY_URL', 'cloudinary://616931951189487:5sqdoEzHwYTKmRNT88JcAQIEoVQ@de7nje8uh');
define('CLOUDINARY_CLOUD_NAME', 'de7nje8uh');
define('CLOUDINARY_API_KEY', '616931951189487');
define('CLOUDINARY_API_SECRET', '5sqdoEzHwYTKmRNT88JcAQIEoVQ');

try {
    // MySQL এর বদলে pgsql (PostgreSQL) ড্রাইভার ব্যবহার
    $dsn = "pgsql:host=$host;port=5432;dbname=$db;sslmode=require";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Security: রাইট ক্লিক এবং জুম অফ করা
echo "<script>
    document.addEventListener('contextmenu', e => e.preventDefault());
    document.addEventListener('keydown', e => {
        if (e.ctrlKey && (e.key === '+' || e.key === '-' || e.key === '0')) e.preventDefault();
    });
</script>";
?>
