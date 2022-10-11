<?php

namespace App\Http\Controllers;

use App\Models\FotoPerfil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function update_photo(Request $request) //store
    {
        $user = Auth::user();
        $fotos = $request->file;
        foreach ($fotos as $foto) {
            $img = $foto->store('public/');
            $url = Storage::url($img);
            FotoPerfil::create([
                'id_usuario' => $user->id,
                'direccion_img' => $url,
            ]);

            $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.luxand.cloud/subject/v2",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => ["name" => $user->id, "store" => "1", "photo" => curl_file_create($foto)],
            // or use URL
            // CURLOPT_POSTFIELDS => [ "photo" => "https://dashboard.luxand.cloud/img/brad.jpg" ], 
            CURLOPT_HTTPHEADER => array(
                "token: 00148b52c7b14e5199c4fbcbfabc456e"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
        }

        
        return redirect()->route('user.show', Auth::user()->id);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $foto_perfils = FotoPerfil::where('id_usuario', '=', $user->id)->get();
        return view('profile.show', compact('user', 'foto_perfils'));
    }

    public function destroy(FotoPerfil $foto_perfils)
    {
        $url = str_replace('storage', 'public', $foto_perfils->url);
        Storage::delete($url);
        $foto_perfils->delete();
        return redirect()->route('user.show');
    }
}
