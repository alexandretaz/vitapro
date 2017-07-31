@if(\Illuminate\Support\Facades\Auth::check())
    <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            Usuários <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li>Listar Usuários</li>
            <li>Criar Usuários</li>
        </ul>
    </li>
@endif