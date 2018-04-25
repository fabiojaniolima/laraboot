<?php

namespace App\Http\Controllers\Painel;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlterarPerfilController extends Controller
{
    /**
     * Exibe o formulário para visualização e alteração dos dados do usu;ario.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function alterarPerfil()
    {
        $usuario = Auth::user();

        if (! empty($usuario->dt_nasc)) {
            $usuario->dt_nasc = \DateTime::createFromFormat('Y-m-d', $usuario->dt_nasc)->format('d/m/Y');
        }

        return view('painel.alterar-perfil', compact('usuario'));
    }

    /**
     * Valida e salva os dados submetidos.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function salvarPerfil(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|min:3',
            'profissao' => 'min:3|nullable',
            'biografia' => 'min:20|nullable',
            'genero'    => 'required|in:F,M,Não declarado',
            'dt_nasc'   => 'date_format:d/m/Y|nullable',
        ]);

        // Converte a data para o formato nativo do banco
        $request->merge(
            ['dt_nasc' => \DateTime::createFromFormat('d/m/Y', $request->dt_nasc)->format('Y-m-d')]
        );

        Auth::user()->update($request->all());

        return redirect()
                    ->route('alterar-perfil')
                    ->with(['status' => 'success', 'msg' => 'Registro alterado com sucesso!']);
    }
}
