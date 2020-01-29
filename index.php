<?php

use App\Database;

require_once 'vendor/autoload.php';

(new Database())->initConnexion();

$user1 = \App\Models\User::create([
    'lastname' => 'Tom',
    'firstname' => 'Auzuret',
    'email' => 'tom@gmail.com',
]);

$user2 = \App\Models\User::create([
    'lastname' => 'Bob',
    'firstname' => 'Doe',
    'email' => 'bob@nms.com',
]);

$user3 = \App\Models\User::create([
    'lastname' => 'John',
    'firstname' => 'Doe',
    'email' => 'hello@doe.fr',
]);


\App\Models\Right::create([
   'name' => 'INDEX',
]);

\App\Models\Right::create([
    'name' => 'SHOW',
]);

\App\Models\Right::create([
    'name' => 'DELETE',
]);

\App\Models\Right::create([
    'name' => 'UPDATE',
]);

\App\Models\Post::create([
    'name' => 'Mon article',
    'content' => 'Contrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans',
    'user_id' => $user1->id,
]);

\App\Models\Post::create([
    'name' => 'Le lorem ipsum',
    'content' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux',
    'user_id' => $user1->id,
]);

\App\Models\Post::create([
    'name' => 'Campus academie',
    'content' => 'hey je suis tout petit',
    'user_id' => $user2->id,
]);