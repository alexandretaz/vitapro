@if(\Illuminate\Support\Facades\Auth::check())
    <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            Professionals<span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li>Listar Profissionais</li>
            <li>Criar Profissional</li>
        </ul>
    </li>
@endif