<?php
include "config.php";

$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM books WHERE id=$id");
$book = $result->fetch_assoc();

$success = $error = "";

if (isset($_POST['update'])) {
    $title  = trim($_POST['title']);
    $author = trim($_POST['author']);
    $year   = trim($_POST['year']);

    if (empty($title) || empty($author) || empty($year)) {
        $error = " All fields are required!";
    } else {
        $stmt = $conn->prepare("UPDATE books SET title=?, author=?, year=? WHERE id=?");
        $stmt->bind_param("ssii", $title, $author, $year, $id);
        if ($stmt->execute()) {
            header("Location: book.php");
            exit();
        } else {
            $error = " Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="Bookstyle.css">
    <title>Edit Book</title>
</head>
<body>
    <h2>Edit Book</h2>
    <p class="error"><?php echo $error; ?></p>
    <form method="post">
        <input type="text" name="title" value="<?php echo ($book['title']); ?>"><br>
        <input type="text" name="author" value="<?php echo ($book['author']); ?>"><br>
        <input type="number" name="year" value="<?php echo $book['year']; ?>"><br>
        <button type="submit" name="update"> Update Book</button>
    </form>
</body>
</html>
