<header style="background-color: #1D291D;" class="px-4 py-3 flex items-center">
    <div class="logo" style="position: relative;">
        <img src="{{ asset('assets/logo.jpeg') }}" alt="Logo">
    </div>
    <nav class="w-full">
        <ul class="flex justify-center space-x-8">
            <li>
                <a href="{{ route('home.index') }}" 
                   class="{{ request()->routeIs('home.index') ? 'active-link' : 'default-link' }}">
                   Accueil
                </a>
            </li>
            <li>
                <a href="{{ route('audit.index') }}" 
                   class="{{ request()->routeIs('audit.index') ? 'active-link' : 'default-link' }}">
                   Audits Énergétiques
                </a>
            </li>
            <li>
                <a href="{{ route('renov.index') }}" 
                   class="{{ request()->routeIs('renov.index') ? 'active-link' : 'default-link' }}">
                   Mon Accompagnateur Rénov
                </a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}" 
                   class="{{ request()->routeIs('contact.index') ? 'active-link' : 'default-link' }}">
                   Contact
                </a>
            </li>
        </ul>
    </nav>
</header>