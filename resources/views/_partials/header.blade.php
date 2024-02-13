@php
    $menu = [
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'NEWS',
        'SHOP'
    ]
@endphp

<header>
    <div>
        <img src=".././assets/img/dc-logo.png">
        <ul>
            <li v-for="item, index in menu" :key="index" :class="index == 1 ? 'active' : ''">
                <div>
                    {{ item }}
                </div>
            </li>
        </ul>
    </div>
</header>

