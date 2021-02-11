<?php

function authByUserId(int $userId): bool
{
    $_SESSION['user_id'] = $userId;
    return true;
}

function getCurrentUser(): ?array
{
    if ($userId = $_SESSION['user_id']) {
        return getUserById($userId);
    }
    return null;
}