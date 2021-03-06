<?php

namespace App\Http\Controllers;

use App\Models\Odontogram;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OdontogramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function canvas()
    {
        return view('odontogram.canvas');
    }

    public function display(Request $request)
    {
        return response()->file(storage_path("app/" . $request->path()));
    }

    public function data(Request $request)
    {
        $patient = Paciente::query()->where('dni', $request->dni)->first();
        $odontogram = $patient->odontograms->where('type', Odontogram::TYPE_INITIAL)->first();
        if (!$odontogram) {
            $odontogram = $patient->odontograms()->create([
                'type' => Odontogram::TYPE_INITIAL,
                'date' => now(),
                'payload' => Odontogram::generatePayload(),
            ]);
        }
        return response()->json($odontogram);
    }

    public function update(Request $request)
    {
        $time = time();
        $odontogram = Odontogram::query()->findOrFail($request->id);
        $payload = $odontogram->payload;
        $payload = collect($payload)->map(function ($item) use ($odontogram, $time, $request) {
            if (!isset($request->types[$item['number']])) return $item;
            $item['findingType'] = $request->types[$item['number']];
            $item['canvasPaths'] = json_decode($request->paths[$item['number']]);
            if (isset($request->images[$item['number']])) {
                if (($url = $odontogram->routeTooth($item)))
                    Storage::disk()->put($url, file_get_contents($request->images[$item['number']]));
            }
            else $url = null;
            $item['url'] = $url ? "$url?t=$time" : null;
            return $item;
        });
        $odontogram->update(compact('payload') + [
            'observations' => $request->observations ?? '',
            'specifications' => $request->specifications ?? '',
        ]);
        return response()->json($odontogram);
    }
}
