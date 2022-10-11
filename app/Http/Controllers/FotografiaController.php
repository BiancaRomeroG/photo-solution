<?php

namespace App\Http\Controllers;

use App\Models\Fotografia;
use App\Models\User;
use App\Notifications\AparicionCatalogo;
use App\Notifications\CatalogNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FotografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fotos = $request->file;
        foreach ($fotos as $foto) {
            $img = $foto->store('public/' . $request->catalogo);
            $url = Storage::url($img);
            Fotografia::create([
                'direccion_img' => $url,
                'precio' => $request->precio,
                'tipo' => $request->tipo,
                'id_catalogo' => $request->catalogo,
            ]);

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.luxand.cloud/photo/search",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => ["photo" => curl_file_create($foto)],
                // or use URL
                // CURLOPT_POSTFIELDS => [ "photo" => "https://dashboard.luxand.cloud/img/brad.jpg" ], 
                CURLOPT_HTTPHEADER => array(
                    "token: 00148b52c7b14e5199c4fbcbfabc456e"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            foreach (json_decode($response, true) as $notificableUser) {
                // Notificar usuario dado su ID: $notificableUser->name
                $user = User::find($notificableUser['name']);
                try {
                    $user->notify(new AparicionCatalogo('/catalogo/'.$request->catalogo));
                } catch (\Throwable $th) {
                    //throw $th;
                }
                
    
                // Enviarle el catalogo: $request->catalogo;

            }

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                echo $response;
            }
        }
        return redirect()->route('catalogo.show', $request->catalogo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
