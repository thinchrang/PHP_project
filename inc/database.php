
<?php

function database(){
    return new mysqli('localhost', 'root', '', 'project');

}


//Book
function getAllbook() {
    return database()->query("SELECT * FROM books ORDER BY bookid DESC");

}


//Book
function createBook($value) {
    $title = $value['title'];
    $price = $value['price'];
    return database()->query("INSERT INTO books(title, price) VALUES ('$title', '$price')");

}

// //SUB
// function createSub($value) {
//     $name = $value['name'];
//     return database()->query("INSERT INTO programming(name) VALUES ('$name')");

// }

//Book
function deleteBook($id) {
    return database()->query("DELETE * FROM books WHERE bookid = $id");

}

// //SUB
// function deleteSub($id) {
//     return database()->query("DELETE FROM programming WHERE pro_id = $id");

// }

// //Book
// function getBookById($id) {
//     return database()->query("SELECT * FROM book WHERE book_id = $id");
    


// }

// //SUB
// function getSubjectById($id) {
//     return database()->query("SELECT * FROM programming WHERE pro_id = $id");
    


// }

// //Book
// function updateBook($value) {
//     $title = $value['title'];
//     $price = $value['price'];
//     $id = $value['id'];
//     return database()->query("UPDATE book SET title = '$title', price = '$price' WHERE book_id = $id");
//   }

// //SUB
// function updateSubject($value) {
//     $name = $value['name'];
//     $id = $value['id'];
//     return database()->query("UPDATE programming SET name = '$name' WHERE pro_id = $id");
//   }


// 
?>