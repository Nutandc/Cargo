<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            't' => 'nullable|string|max:30', // search => track
        ]);
        $track = $request->t ?: null;

        $cargos = Cargo::orderBy('slug')
            ->when($track, function ($query, $track) {
                return $query->where(function ($query) use ($track) {
                    $query->orWhere('track', 'like', '%' . $track . '%');
                });
            })
            ->paginate(10)
            ->withQueryString();

        return view('Front.cargo.index', [
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
