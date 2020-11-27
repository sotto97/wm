@if(\Route::is('register', 'login','top'))
@else
<footer class="bg-black h-16 w-full fixed bottom-0">
    <div class="flex justify-around">
        <a class="flex1 w-1/2 py-3 text-center" href="{{ route('wo.index') }}">
            @if(\Route::is('wo.*'))
            <i class="fas fa-dumbbell text-2xl"></i>
            @else
            <i class="fas fa-dumbbell  text-2xl text-white">こここ</i>
            @endif
        </a>
        <a class="flex1 w-1/2 py-3 text-center" href="{{ route('wo.index') }}">
            @if(\Route::is('condition.index'))
            <i class="fas fa-dumbbell"></i>
            @else
            <i class="fas fa-dumbbell"></i>
            @endif
        </a>
    </div>
</footer>
@endif