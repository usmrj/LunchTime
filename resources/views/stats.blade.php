welcome you are logged in 


<div class="flex">
    <h1>Witaj <strong>{{ Auth::user()->name }}</strong>!</h1>
    <form action="{{ route('auth.logout') }}" method="POST">
        @csrf
        <div class="flex items-center justify-between">
            <input type="submit" value="Wyloguj" />
        </div>
    </form>
</div>
