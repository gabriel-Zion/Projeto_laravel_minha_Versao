<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservaController extends Controller
{
    public function enviar(Request $request)
    {
        // 1. Pega os dados que vieram do formulário
        $dados = $request->all();

        // 2. Envia o e-mail usando o SMTP do seu .env
        Mail::send([], [], function ($message) use ($dados) {
            $message->to('gabriel.gaginski@zionerp.com.br') // Seu e-mail de destino
                    ->subject('Nova Solicitação de Reserva - Hotel Schneider')
                    ->html("
                        <h2 style='color: #2C4A3E;'>Nova Reserva Recebida</h2>
                        <p><strong>Nome:</strong> {$dados['nome']}</p>
                        <p><strong>E-mail:</strong> {$dados['email']}</p>
                        <p><strong>Telefone:</strong> {$dados['telefone']}</p>
                        <p><strong>Check-in:</strong> {$dados['checkin']}</p>
                        <p><strong>Check-out:</strong> {$dados['checkout']}</p>
                        <p><strong>Mensagem:</strong> " . ($dados['mensagem'] ?? 'Nenhuma mensagem enviada') . "</p>
                        <hr>
                        <p>Este e-mail foi enviado automaticamente pelo site do Hotel Schneider.</p>
                    ");
        });

        // 3. Volta para a página anterior com uma mensagem de sucesso
        return response()->json([
            'sucesso' => 'Sua solicitação de reserva foi enviada com sucesso! Em breve entraremos em contato por e-mail.'
        ]);
    }
}