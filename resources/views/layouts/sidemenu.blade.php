<link rel="stylesheet" href="{{ asset('./css/sidemenu.css') }}">

<aside id="asideMenu" class="col-md-2 p-0 m-0">
    <ul>
        <a href="{{ route('dashboard')}}">
            <li>
                <i class="bi bi-bar-chart-fill"></i> Dashboard
            </li>
        </a>
        <a href="{{ route('registerBill') }}">
            <li>
                <i class="bi bi-plus-circle-fill"></i> Cadastrar Despesas
            </li>
        </a>
    </ul>
</aside>
