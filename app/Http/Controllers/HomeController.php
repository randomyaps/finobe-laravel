<?php
// random 2025
// Its a HomeController!

namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        // todo: put this in the .env if it's even possible
        $user = Auth::user();
        $ProjectName = config('app.name');
        $baseUrl = url('/');
        $DiscordJoin = 'https://discord.gg/placeholder';
        $Twitter = 'https://twitter.com/placeholder';

        return view('home', compact('user', 'ProjectName', 'baseUrl', 'DiscordJoin', 'Twitter'));
    }
}
