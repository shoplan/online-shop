<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=foodshop","root","");
}catch(Exception $e){
    echo $e->getMessage();
}



function deleteUser($id){
    global $conn;

    try {
        $query = $conn->prepare("DELETE FROM users WHERE id=?");
        $query->execute([$id]);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}


function getAllFood(){
    global $conn;

    try{
        $query = $conn->prepare("
            SELECT f.id, f.img, f.title, f.price, f.qty, f.ingredient, c.name as cname
            FROM food f
            INNER JOIN categories c ON f.category_id = c.id
        ");
        $query->execute();
        $result = $query->fetchAll();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    return $result;
}

function getAllCategories(){
    global $conn;

    try{
        $query = $conn->prepare(" SELECT * FROM  categories");
        $query->execute();
        $result = $query->fetchAll();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    return $result;
}


function getFoodsByCat($cid){
    global $conn;

    try {
        $query = $conn->prepare("select * FROM food where category_id = ?");
        $query->execute([$cid]);

        $result = $query->fetchAll();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }

    return $result;
}


function addFood($title, $ingredient, $price, $qty, $img, $category_id){
    global $conn;

    try {
        $query = $conn->prepare("INSERT INTO food(title, ingredient, price, qty, img, category_id) values (?,?,?,?,?,?)");
        $query->execute([$title, $ingredient, $price, $qty, $img, $category_id]);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}


function deleteFood($id){
    global $conn;

    try {
        $query = $conn->prepare("DELETE FROM food WHERE id=?");
        $query->execute([$id]);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}


function addCategory($name){
    global $conn;

    try {
        $query = $conn->prepare("INSERT INTO categories(name) VALUES (?)");
        $query->execute([$name]);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}


function updateCategories($id, $name){
    global $conn;

    try {
        $query = $conn->prepare("UPDATE categories SET name=:nm  WHERE id=:id");
        $query->execute(
            array(
                "nm" => $name,
                "id" => $id 
            )
        );
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}


function deleteCategories($id){
    global $conn;

    try {
        $query = $conn->prepare("DELETE FROM categories WHERE id=?");
        $query->execute([$id]);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}

function getFood($id){
    global $conn;

    try {
        $query = $conn->prepare("select * FROM food where id = ?");
        $query->execute([$id]);

        $result = $query->fetch();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }

    return $result;
}

function updateFood($id, $title, $ingredient, $qty, $price, $category_id){
    global $conn;

    try {
        $query = $conn->prepare("UPDATE food SET title=:tl, ingredient=:ing, qty=:qt, price=:pr, category_id=:ci  WHERE id=:id");
        $query->execute(
            array(
                "tl" => $title,
                "ing" => $ingredient,
                "qt" => $qty,
                "pr" => $price,
                "ci" => $category_id,
                "id" => $id 
            )
        );
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}

function getCategory($id){
    global $conn;

    try {
        $query = $conn->prepare("select * FROM categories where id = ?");
        $query->execute([$id]);

        $result = $query->fetch();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }

    return $result;
}

function getIdUser($id){
    global $conn;

    try {
        $query = $conn->prepare("select * FROM users where id = ?");
        $query->execute([$id]);

        $result = $query->fetch();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }

    return $result;
}


function updateUsers($id, $fullname, $login, $password, $role_id){
    global $conn;

    try {
        $query = $conn->prepare("UPDATE users SET fullname=:nm, login=:ln, password=:ps, role_id=:rl  WHERE id=:id");
        $query->execute(
            array(
                "nm" => $fullname,
                "ln" => $login,
                "ps" => $password,
                "rl" => $role_id,
                "id" => $id 
            )
        );
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}

function deleteUsers($id){
    global $conn;

    try {
        $query = $conn->prepare("DELETE FROM users WHERE id=?");
        $query->execute([$id]);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}

?>