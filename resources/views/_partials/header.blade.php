<header>
    <div>
        <img src="{{ Vite::asset('resources/img/dc-logo.png')}}">

        <ul>
            @foreach ($menu as $menu_item)
                <li>
                    <div>
                        {{ $menu_item }}    
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</header>

