<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $dados = [
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin')
        ];

        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuário atualizado";
        } else {
            User::create($dados);
            echo "Usuário criado";
        }
    }
}
