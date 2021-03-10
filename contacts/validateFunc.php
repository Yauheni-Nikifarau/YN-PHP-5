<?php
function validateForm ($name, $phone, $email, $message) {
    $nameRegExp = '/^[а-яА-ЯёЁ]+$/ui';
    $phoneRegExp = '/^(?:\+375)(?:33|44|29|25)\d{7}$/ui';
    $messageRegExp = '/^[-., а-яА-ЯёЁ0-9]{5,250}$/ui';
    $emailRegExp = '/^[A-Za-z]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+@[A-Za-z0-9]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+\.[A-Za-z]{2,11}$/ui';
    if (!preg_match($nameRegExp, $name) || !preg_match($phoneRegExp, $phone) || !preg_match($messageRegExp, $message) || !preg_match($emailRegExp, $email)) {
        return false;
    }
    return true;
}
?>