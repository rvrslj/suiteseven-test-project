<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
      {!! $siteName !!}
  </a>

    @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>

        @php
            $locations = get_nav_menu_locations();
            $menu_items = wp_get_nav_menu_items($locations['primary_navigation']);
        @endphp

        @foreach ($menu_items as $item)
            {{ get_field('cta_title', $item) }}
        @endforeach

    @endif
</header>
