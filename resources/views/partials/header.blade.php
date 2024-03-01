@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/chi-siamo',
            'label' => 'Chi siamo',
            'active' => true,
        ],
        [
            'url' => '/contatti',
            'label' => 'Contatti',
            'active' => false,
        ],
    ];
@endphp

<header class="bg-dark py-3">
    <div class="container">
        <nav>
            <ul class="d-flex list-unstyled justify-content-between">
                @foreach ($links as $link)
                    <li>
                        
                        <a class="text-decoration-none text-white" href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
    
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
