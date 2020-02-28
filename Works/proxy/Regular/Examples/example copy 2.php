<?php
if(preg_match("/@/",'vstu@mail.ru')) { // preg_match — Выполняет проверку на соответствие регулярному выражению
    echo 'Да';
} else {
    echo 'Нет';
}