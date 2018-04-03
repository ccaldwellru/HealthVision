<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Health Vision') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Workouts<span class="caret"></span>
                    </a>
                    <!-- How create the logout anchor and form to log the user out -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('routines') }}">
                        {{ __('Routines') }}</a>
                        <a class="dropdown-item" href="{{ route('absCore') }}">
                        {{ __('Abs & Core') }}</a>
                        <a class="dropdown-item" href="{{ route('arms') }}">
                        {{ __('Arms') }}</a>
                        <a class="dropdown-item" href="{{ route('legs') }}">
                        {{ __('Legs') }}</a>
                        <a class="dropdown-item" href="{{ route('shoulders') }}">
                        {{ __('Shoulders') }}</a>
                        <a class="dropdown-item" href="{{ route('back') }}">
                        {{ __('Back') }}</a>
                        <a class="dropdown-item" href="{{ route('yoga') }}">
                        {{ __('Yoga') }}</a>
                        <a class="dropdown-item" href="{{ route('cardio') }}">
                        {{ __('Cardio') }}</a>
                        <!--<a class="dropdown-item" href="{{ route('routines') }}">
                        {{ __('Routines') }}</a>-->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Nutrition<span class="caret"></span>
                    </a>
                    <!-- How create the logout anchor and form to log the user out -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('diets') }}">
                        {{ __('Diets') }}</a>
                        <a class="dropdown-item" href="{{ route('breakfast') }}">
                        {{ __('Breakfast') }}</a>
                        <a class="dropdown-item" href="{{ route('lunch') }}">
                        {{ __('Lunch') }}</a>
                        <a class="dropdown-item" href="{{ route('dinner') }}">
                        {{ __('Dinner') }}</a>
                        <a class="dropdown-item" href="{{ route('meals') }}">
                        {{ __('Meals') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        My Fitness Center<span class="caret"></span>
                    </a>
                    <!-- How create the logout anchor and form to log the user out -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('progress') }}">
                        {{ __('Progress') }}</a>
                        <a class="dropdown-item" href="{{ route('calories') }}">
                        {{ __('Calories') }}</a>
                    </div>
                </li>
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Workouts<span class="caret"></span>
                    </a>
                    <!-- How create the logout anchor and form to log the user out -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('routines') }}">
                        {{ __('Routines') }}</a>
                        <a class="dropdown-item" href="{{ route('absCore') }}">
                        {{ __('Abs & Core') }}</a>
                        <a class="dropdown-item" href="{{ route('arms') }}">
                        {{ __('Arms') }}</a>
                        <a class="dropdown-item" href="{{ route('legs') }}">
                        {{ __('Legs') }}</a>
                        <a class="dropdown-item" href="{{ route('shoulders') }}">
                        {{ __('Shoulders') }}</a>
                        <a class="dropdown-item" href="{{ route('back') }}">
                        {{ __('Back') }}</a>
                        <a class="dropdown-item" href="{{ route('yoga') }}">
                        {{ __('Yoga') }}</a>
                        <a class="dropdown-item" href="{{ route('cardio') }}">
                        {{ __('Cardio') }}</a>
                        <!--<a class="dropdown-item" href="{{ route('routines') }}">
                        {{ __('Routines') }}</a>-->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Nutrition<span class="caret"></span>
                    </a>
                    <!-- How create the logout anchor and form to log the user out -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('diets') }}">
                        {{ __('Diets') }}</a>
                        <a class="dropdown-item" href="{{ route('breakfast') }}">
                        {{ __('Breakfast') }}</a>
                        <a class="dropdown-item" href="{{ route('lunch') }}">
                        {{ __('Lunch') }}</a>
                        <a class="dropdown-item" href="{{ route('dinner') }}">
                        {{ __('Dinner') }}</a>
                        <a class="dropdown-item" href="{{ route('meals') }}">
                        {{ __('Meals') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        My Fitness Center<span class="caret"></span>
                    </a>
                    <!-- How create the logout anchor and form to log the user out -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('progress') }}">
                        {{ __('Progress') }}</a>
                        <a class="dropdown-item" href="{{ route('calories') }}">
                        {{ __('Calories') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <!-- How create the logout anchor and form to log the user out -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('edit_account') }}">
                        {{ __('Edit Account Details') }}</a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <!--  -->
                </div>
            </li>
            @endguest
        </ul>
    </div>
</div>
</nav>