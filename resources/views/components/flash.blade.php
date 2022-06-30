@if(session('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(()=>show=false, 4000)"
         x-show="show"
            {{ $attributes->class(['fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm']) }}>
        {{ session('success') }}
    </div>
@elseif(session('updated'))
    <div x-data="{ show: true }"
         x-init="setTimeout(()=>show=false, 4000)"
         x-show="show"
         class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        {{ session('updated') }}
    </div>
@elseif(session('deleted'))
    <div x-data="{ show: true }"
         x-init="setTimeout(()=>show=false, 4000)"
         x-show="show"
         class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        {{ session('deleted') }}
    </div>
@endif
