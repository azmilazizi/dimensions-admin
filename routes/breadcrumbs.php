<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('user', function (BreadcrumbTrail $trail) {
    $trail->push('Users', route('user'));
});

// Home > Blog > [Category]
Breadcrumbs::for('folder', function (BreadcrumbTrail $trail, $userId) {
    $trail->parent('user');
    $trail->push($userId, route('folders', $userId));
});

// Home > Blog > [Category]
Breadcrumbs::for('content', function (BreadcrumbTrail $trail, $userId, $folderId) {
    $trail->parent('folder', $userId);
    $trail->push($folderId, route('contents', [$userId, $folderId]));
});

?>
