<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function generateToken(string $str)
{
    return hash('sha256', uniqid('') . $str);
}

function passwordHash(string $password)
{
    return password_hash('ABC123' . $password, PASSWORD_DEFAULT);
    // password_hash('sha256', 'ABC123' . $password);
}

function getTokenJwt($jwt)
{
    if (!$jwt) return false;
    try {
        $payload = JWT::decode($jwt, new Key(JWT_KEY, 'HS256'));
    } catch (Exception $exception) {
        return false;
    }
    return $payload->token;
}

function setTokenJwt(string $token)
{
    try {
        $jwt = JWT::encode(['token' => $token], JWT_KEY, 'HS256');
    } catch (Exception $exception) {
        return false;
    }
    return $jwt;
}
