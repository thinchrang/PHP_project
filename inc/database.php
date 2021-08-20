
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
    $author = $value['authorname'];
    $image = $value['image'];
    $des = $value['description'];
    $category = 1;
    $user = 1;
    return database()->query("INSERT INTO books(title, price, categoryid, userid, authorname, image, description) VALUES ('$title', '$price', '$category','$user', '$author', '$image', '$des')");

}

// //SUB
// function createSub($value) {
//     $name = $value['name'];
//     return database()->query("INSERT INTO programming(name) VALUES ('$name')");

// }

//Book
function deleteBook($id) {
    return database()->query("DELETE FROM books WHERE bookid = $id");

}

// //SUB
// function deleteSub($id) {
//     return database()->query("DELETE FROM programming WHERE pro_id = $id");

// }

//Book
function getBookById($id) {
    return database()->query("SELECT * FROM books WHERE book_id = $id");
    


}

//SUB
function getSubjectById($id) {
    return database()->query("SELECT * FROM programming WHERE pro_id = $id");
    


}

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