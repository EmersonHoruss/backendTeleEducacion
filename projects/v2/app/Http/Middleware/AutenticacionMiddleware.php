<?php

namespace App\Http\Middleware;

use App\Models\Perfil;
use App\Models\Usuario;
use Closure;

class AutenticacionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // getting headers and depuring until get an array of correoUsuairo and TipoPerfil
        // basic base64 enconding. First value is CorreoUsuario, second is TipoPerfil
        // CUTP = CorreoUsuarioTipoPerfil

        $authorization = $request->header('Authorization');
        $explotedAuthorization = explode(' ', $authorization);
        $CodedCUTP = $explotedAuthorization[1];
        $DecodedCUTP = base64_decode($CodedCUTP);
        $SplitedCUTP = explode(':', $DecodedCUTP);

        // getting CorreoUsuario and TipoPerfil
        $CorreoUsuario = $SplitedCUTP[0];
        $TipoPerfil = $SplitedCUTP[1];

        $codeUser = Usuario::where('Correo', $CorreoUsuario)->first();
        if ($codeUser) {
            $perfil = Perfil::where('Tipo', $TipoPerfil)->where('CodigoUsuario', $codeUser->Codigo)->first();
            if ($perfil) {
                return $next($request);
            }
            return response()->json(['msg' => 'Sin Acceso.'], 401);
        }
        return response()->json(['msg' => 'Sin Acceso.'], 401);
    }
}
