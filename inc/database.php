
<?php

function database(){
    return new mysqli('localhost', 'root', '', 'project');

}


//KhmerBook
function getKhbook() {
    return database()->query("SELECT * FROM books WHERE categoryid = 1 ORDER BY bookid DESC");

}

function getEngbook() {
    return database()->query("SELECT * FROM books WHERE categoryid = 2 ORDER BY bookid DESC");

}

//Book
function createBook($value) {
    $title = $value['title'];
    $price = $value['price'];
    $author = $value['authorname'];
    $image = $value['image'];
    $des = $value['description'];
    $category = $value['type'];
    $user = 1;
    return database()->query("INSERT INTO books(title, price, categoryid, userid, authorname, image, description) VALUES ('$title', '$price', '$category','$user', '$author', '$image', '$des')");

}



//deleteBook
function deleteBook($id) {
    return database()->query("DELETE FROM books WHERE bookid = $id");

}



//getBook
function getBookById($id) {
    return database()->query("SELECT * FROM books WHERE bookid = $id");
    


}



// //updatBook
function updateBook($value) {
    $title = $value['title'];
    $price = $value['price'];
    $author = $value['authorname'];
    $des = $value['description'];
    $category = $value['category'];
    $id = $value['id'];
    
    return database()->query("UPDATE books SET title = '$title', price = '$price', categoryid='$category', authorname= '$author', description= '$des' WHERE bookid = $id");
}

function research($value){
    $title = $value['search'];    
    return database()->query("SELECT * FROM books WHERE title LIKE '%$title%'");
        
    
}


?>