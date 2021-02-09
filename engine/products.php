<?php
require_once ENGINE_DIR . "db.php";

function getProducts(): array
{
    return queryAll("SELECT * FROM products");
}

function getProductById(int $id): array
{
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}

function createProduct(
    string $title,
    string $description,
    float $price
) {
    $sql = "INSERT INTO products (title, description, price)
            VALUES ('{$title}','{$description}','{$price}')";
    execute($sql);
    return getLastInsertId();
}

function updateProductById(
    int $id,
    string $title = null,
    string $description = null,
    float $price = null
) {
    $updateSection = [];

    if(!is_null($title)) {
        $updateSection[] = "title = '{$title}'";
    }

    if(!is_null($description)) {
        $updateSection[] = "description = '{$description}'";
    }

    if(!is_null($price)) {
        $updateSection[] = "price = {$price}";
    }

    if(!empty($updateSection)) {
        $updateSection = implode(", ", $updateSection);
        return execute("UPDATE products SET {$updateSection} WHERE id = {$id}");
    }
    return null;
}

function deleteProduct(int $productId) {
    return execute("DELETE FROM products WHERE id = {$productId}");
}
