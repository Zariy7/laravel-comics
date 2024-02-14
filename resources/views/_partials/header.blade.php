<header>
    <div>
        <img src="{{ Vite::asset('resources/img/dc-logo.png')}}">
        <?php $menu = config('menu'); ?>
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

