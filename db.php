<?php

include __DIR__ . '/Models.php';

$movies = [
    new Movie("Following", 1998, ["triller", "noir"]),
    new Movie("Memento", 2000, ["Drathriller", "noir", "drammaticommatico"]),
    new Movie("Insomnia", 2002, ["thriller", "drammatico", "poliziesco"]),
    new Movie("Batman Begins ", 2005, ["azione", "avventura", "fantastico", "thriller", "drammatico"]),
    new Movie("The Prestige", 2006, ["thriller", "drammatico", "fantascienza"]),
    new Movie("The Dark Knight)", 2008, ["azione", "avventura", "fantastico", "thriller", "drammatico"]),
    new Movie("Inception ", 2010, ["azione", "fantascienza", "thriller", "avventura"]),
    new Movie("The Dark Knight Rises", 2012, ["azione", "avventura", "fantastico", "thriller", "drammatico"]),
    new Movie("Interstellar ", 2014, ["fantascienza", "avventura", "drammatico"]),
    new Movie("Dunkirk ", 2017, ["drammatico", "guerra", "storico"]),
    new Movie("Tenet ", 2020, ["azione", "fantascienza", "spionaggio", "thriller"]),
    new Movie("Oppenheimer ", 2023, ["storico", "drammatico", "biografico"]),
];