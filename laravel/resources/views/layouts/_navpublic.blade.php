<ul>

    <!-- rotte pubbliche-->
    <li><a href="{{ route('showAuto') }}" title="Home">Catalogo</a></li>
    <li><a href="{{ route('where') }}" title="Dove trovarci">Dove ci puoi trovare</a></li>
    <li><a href="{{ route('who') }}" title="Il nostro profilo aziendale">Chi siamo</a></li>
    <li><a href="mailto:info@acme.it" title="Mandaci un messaggio">Contattaci</a></li> <!-- la messaggistica va su questa rotta-->

    <!-- rotte per user admin e staff-->

    @can('isAdmin')
        <li><a href="" class="highlight" title="Home Admin">Home Admin</a></li>
    @endcan
    @can('isUser')
        <li><a href="" class="highlight" title="Home User">Home User</a></li>
    @endcan
    @auth
        <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth
    @guest
        <li><a href="" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>
    @endguest
</ul>
