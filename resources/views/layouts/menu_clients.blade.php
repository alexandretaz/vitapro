@if(\Illuminate\Support\Facades\Auth::check())
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Clientes <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>Listar Clientes</li>
                <li>Criar Cliente</li>
            </ul>
        </li>
@endif