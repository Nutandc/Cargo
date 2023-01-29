<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('front.home.index');
    }

    public function search(Request $request)
    {
        $request->validate([
            't' => 'nullable|string|max:30', // search => track
        ]);
        $track = $request->t ?: null;

        $cargos = Cargo::orderBy('id')
            ->when($track, function ($query, $track) {
                return $query->where(function ($query) use ($track) {
                    $query->orWhere('track', 'like', '%' . $track . '%');
                });
            })
            ->paginate(20, [
                'id', 'track', 'process_id', 'transport_id',
            ], 'page')
            ->withQueryString();

        return view('front.cargo.index', [
            'track' => $request->t,
            'cargos' => $cargos,
        ]);
    }

    public function language($key)
    {
        if ($key == 'en') {
            session()->put('locale', 'en');
        } else {
            session()->put('locale', 'tm');
        }
        return redirect()->back();
    }
}
