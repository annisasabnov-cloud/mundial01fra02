<?php

use Illuminate\Support\Facades\Route;

// Language switching route
Route::get('/lang/{language}', [\App\Http\Controllers\LanguageController::class, 'switch'])->name('language.switch');

// Main pages
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/angebote-3', function () {
    return view('angebote-3');
})->name('angebote3');

Route::get('/aufgabe', function () {
    return view('aufgabe');
})->name('aufgabe');

Route::get('/back-to-unipark', function () {
    return view('back-to-unipark');
})->name('backToUnipark');

Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');

Route::get('/no-way', function () {
    return view('no-way');
})->name('noWay');

Route::get('/preise', function () {
    return view('preise');
})->name('preise');

Route::get('/start', function () {
    return view('start');
})->name('start');

Route::get('/401', function () {
    return view('401');
})->name('error401');

Route::get('/404', function () {
    return view('404');
})->name('error404');

// Task routes
Route::get('/task-01', function () {
    return view('task-01');
})->name('task1');

Route::get('/task-01-cancel', function () {
    return view('task-01-cancel');
})->name('task1Cancel');

Route::get('/task-01-end', function () {
    return view('task-01-end');
})->name('task1End');

Route::get('/task-02', function () {
    return view('task-02');
})->name('task2');

Route::get('/task-02-cancel', function () {
    return view('task-02-cancel');
})->name('task2Cancel');

Route::get('/task-02-end', function () {
    return view('task-02-end');
})->name('task2End');

Route::get('/task-03', function () {
    return view('task-03');
})->name('task3');

Route::get('/task-03-cancel', function () {
    return view('task-03-cancel');
})->name('task3Cancel');

Route::get('/task-03-end', function () {
    return view('task-03-end');
})->name('task3End');

// Support .html extensions for all pages
Route::get('/{page}.html', function ($page) {
    $viewMap = [
        'index' => 'index',
        'angebote-3' => 'angebote-3',
        'aufgabe' => 'aufgabe',
        'back-to-unipark' => 'back-to-unipark',
        'kontakt' => 'kontakt',
        'no-way' => 'no-way',
        'preise' => 'preise',
        'start' => 'start',
        '401' => '401',
        '404' => '404',
        'task-01' => 'task-01',
        'task-01-cancel' => 'task-01-cancel',
        'task-01-end' => 'task-01-end',
        'task-02' => 'task-02',
        'task-02-cancel' => 'task-02-cancel',
        'task-02-end' => 'task-02-end',
        'task-03' => 'task-03',
        'task-03-cancel' => 'task-03-cancel',
        'task-03-end' => 'task-03-end',
    ];
    
    if (isset($viewMap[$page])) {
        return view($viewMap[$page]);
    }
    abort(404);
});

// Angebote-2 routes
Route::prefix('angebote-2')->name('angebote2.')->group(function () {
    // Specific routes BEFORE the wildcard route
    Route::get('/02', function () {
        return view('angebote-2.02');
    })->name('o02');

    Route::get('/03-minigolf', function () {
        return view('angebote-2.03-minigolf');
    })->name('minigolf');

    Route::get('/04-bowling', function () {
        return view('angebote-2.04-bowling');
    })->name('bowling');

    Route::get('/06-geburtstagsfeier', function () {
        return view('angebote-2.06-geburtstagsfeier');
    })->name('geburtstagsfeier');

    Route::get('/06-restaurant', function () {
        return view('angebote-2.06-restaurant');
    })->name('restaurant');

    Route::get('/hallenbad', function () {
        return view('angebote-2.hallenbad');
    })->name('hallenbad');

    Route::get('/kauf-mundialcard', function () {
        return view('angebote-2.kauf-mundialcard');
    })->name('kaufMundialcard');

    Route::get('/kauf-mundialcard01', function () {
        return view('angebote-2.kauf-mundialcard01');
    })->name('kaufMundialcard01');

    Route::get('/kauf-mundialcard02', function () {
        return view('angebote-2.kauf-mundialcard02');
    })->name('kaufMundialcard02');

    Route::get('/kauf-mundialcard03', function () {
        return view('angebote-2.kauf-mundialcard03');
    })->name('kaufMundialcard03');

    Route::get('/kauf-mundialcard04', function () {
        return view('angebote-2.kauf-mundialcard04');
    })->name('kaufMundialcard04');

    Route::get('/reservation-geburtstag-complete', function () {
        return view('angebote-2.reservation-geburtstag-complete');
    })->name('reservationGebirtsdayComplete');

    Route::get('/reservation-geburtstagsfeier', function () {
        return view('angebote-2.reservation-geburtstagsfeier');
    })->name('reservationGeburtstagsfeier');

    // Wildcard route AFTER specific routes
    Route::get('/{page}.html', function ($page) {
        $viewMap = [
            '02' => 'angebote-2.02',
            '03-minigolf' => 'angebote-2.03-minigolf',
            '04-bowling' => 'angebote-2.04-bowling',
            '06-geburtstagsfeier' => 'angebote-2.06-geburtstagsfeier',
            '06-restaurant' => 'angebote-2.06-restaurant',
            'hallenbad' => 'angebote-2.hallenbad',
            'kauf-mundialcard' => 'angebote-2.kauf-mundialcard',
            'kauf-mundialcard01' => 'angebote-2.kauf-mundialcard01',
            'kauf-mundialcard02' => 'angebote-2.kauf-mundialcard02',
            'kauf-mundialcard03' => 'angebote-2.kauf-mundialcard03',
            'kauf-mundialcard04' => 'angebote-2.kauf-mundialcard04',
            'reservation-geburtstag-complete' => 'angebote-2.reservation-geburtstag-complete',
            'reservation-geburtstagsfeier' => 'angebote-2.reservation-geburtstagsfeier',
        ];
        
        if (isset($viewMap[$page])) {
            return view($viewMap[$page]);
        }
        abort(404);
    });
});
