<?php

/**
 * All routes must be defined here to reach a controller action
 * - controller key => Related controller
 * - action key => A method of the related controller
 */
return [
    "home" => [
          "controller" => App\Controllers\PageController::class,
          "action" => "home",
    ],
    "folder1" => [
        "controller" => App\Controllers\PageController::class,
        "action" => "folder1",
    ],
    "folder2" => [
        "controller" => App\Controllers\PageController::class,
        "action" => "folder2",
    ],
];