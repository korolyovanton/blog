<?php

$textStorage = [];

function add (&$textStorage, string $title, string $text) {
    $textStorage[] = [
        'title' => $title,
        'text' => $text
       ];
}

add($textStorage, 'Заголовок 1', 'Текст 1');
add($textStorage, 'Заголовок 2', 'Текст 2');
//var_dump($textStorage[0]['title']);
var_dump($textStorage);

function remove (int $index, &$textStorage) {
    if (array_key_exists($index, $textStorage)) {
        unset($textStorage[$index]);
        return true;
    }
    return false;
}

remove(0, $textStorage, $elementsCount);
var_dump($textStorage);

function edit (int $index, string $title, string $text, &$textStorage) {
    if (array_key_exists($index, $textStorage)) {
        $textStorage[$index] = [
            'title' => $title,
            'text' => $text
        ];
    }
    return false;
}

edit(1, 'Измененный заголовок', 'Измененный текст', $textStorage);
var_dump($textStorage);