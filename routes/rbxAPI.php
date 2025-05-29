<?php
/*
random 2025
RBXAPI
This is awesome.
*/
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\AuthController;

// mobile api stuff
Route::get('/mobileapi/check-app-version', function () {
    return response()->json([
        'data' => [
            'UpgradeAction' => 'None'
        ]
    ]);
});

Route::post('/mobileapi/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username && $password) {
        $user = User::where('username', $username)->first();

        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);

            return response()->json([
                'Status' => 'OK',
                'UserInfo' => [
                    'UserName' => $user->username,
                    'RobuxBalance' => $user->robux ?? '100',
                    'TicketsBalance' => $user->tix ?? '200',
                    'IsAnyBuildersClubMember' => false,
                    'ThumbnailUrl' => '',
                    'UserID' => $user->id
                ]
            ]);
        }
    }

    return response()->json([
        'errors' => [
            [
                'code' => 1,
                'message' => "Somethings not right"
            ]
        ]
    ]);
});

// ios mobile
Route::get('/device/initialize', function () {
    return response()->json([
        'browserTrackerId' => 1234567890,
        'appDeviceIdentifier' => null
    ]);
});

Route::get('/sponsoredpage/list-json', function () {
    return response()->json([
        'success' => true
    ]);
});

// client routes
// 2015 stuff
Route::get('/rbx/test', function () {
    return 'placeholder';
});

Route::get('/game/players/{id?}', function (?int $id = null) {
    return response()->json([
        'message' => 'if you see this, it works. i love placeholders',
        'player_id' => $id
    ]);
})->where('id', '[0-9]+');

Route::get('/GetAllowedMD5Hashes/', fn() => response()->json([
    'data' => [
        "placeholder"
    ]
]));


Route::get('/GetAllowedSecurityVersions/', function () {
    return response()->json([
        'data' => [
            'INTERNALiosapp',
            '0.205.0pcplayer'
        ]
    ]);
});
Route::get('/studio/e.png', fn() => response('', 200));

Route::get('/game/GetCurrentUser.ashx', function () {
    echo "1";
    die();

    if (Auth::check()) {
        return response(Auth::id());
    } else {
        return response('Bad Request.', 400);
    }
});

Route::get('/Login/Negotiate.ashx', function (Request $request) {
    $suggest = $request->query('suggest');
    if ($suggest === 'random') {
        return response('True')->cookie('.ROBLOSECURITY', 'sorandom', 1440);
    } elseif ($suggest) {
        return response('True')
            ->cookie('.ROBLOSECURITY', $suggest, 1440)
            ->cookie('finobe_session', $suggest, 1440);
    }
    return response('False');
});

Route::post('/Error/Grid.ashx', fn() => response('True'));

Route::get('/Game/Join.ashx', fn() => response('', 200));

Route::post('/game/validate-machine', function () {
    // idgaf just say yes
    return response()->json(['success' => true]);
});

Route::get('/version', function () {
    return response('version-placeholder');
});

Route::get('/versionQTStudio', function () {
    return response('version-placeholder');
});

Route::get('/version-placeholder-RobloxVersion.txt', function () {
    return response('0, 0, 0, 00000');
});