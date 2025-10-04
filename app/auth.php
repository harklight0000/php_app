<?php
// Simple auth stubs; extend as needed
function login(string $username, string $password): bool {
    // TODO: replace with real check
    $_SESSION['user'] = ['name' => $username];
    return true;
}

function logout(): void {
    unset($_SESSION['user']);
}

function current_user(): ?array {
    return $_SESSION['user'] ?? null;
}

function require_auth(): void {
    if (!current_user()) {
        header('Location: /login');
        exit;
    }
}
