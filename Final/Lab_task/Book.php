<?php
include "config.php";

// Handle Add Book
if (isset($_POST['add'])) {
    $title  = trim($_POST['title']);
    $author = trim($_POST['author']);
    $year   = trim($_POST['year']);

    if (!empty($title) && !empty($author) && !empty($year)) {
        $stmt = $conn->prepare("INSERT INTO books (title, author, year) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $title, $author, $year);
        $stmt->execute();
        $stmt->close();
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM books WHERE id=$id");
}

// Fetch All Books
$result = $conn->query("SELECT * FROM books");
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Library Books</title>

        <link rel="stylesheet" href="Bookstyle.css">
    </head>
    <body>
        <h2> Add Book</h2>
        <form method ="post">
            <input type ="text" name= "title"placeholder="Book Title"><br>
            <input type ="text" name= "author"placeholder="Book Auther"><br>
            <input type ="text" name= "year"placeholder="Year"><br>
            <br>
            <input type ="submit" name= "add" value ="Add book">

        </form>

        <h2>All books</h2>
        <table>
            <tr>
                <th> Id</th><th> Title</th><th> Auther</th><th> Year</th><th> Auther </th> 

            </tr>
            <?php while($row =$result->fetch_assoc()){?>
                <tr>  <td><?php echo $row['id']; ?></td>
                 <td><?php echo $row['title']; ?></td>
                  <td><?php echo $row['author']; ?></td>
                   <td><?php echo $row['year']; ?></td>
                   <td>
                   <a href="editbook.php?id=<?php echo $row['id']; ?>">Edit</a>  
                <a href="Book.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete this book?');">Delete</a>
            </td>
            

                </tr>
                <?php } ?>
            
        </table>




    </body>
</html>