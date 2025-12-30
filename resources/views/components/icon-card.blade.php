<div class="bg-base-100 shadow-md rounded-2xl p-6 text-center flex flex-col items-center transition duration-200 ease-in-out hover:scale-105 hover:shadow-2xl hover:bg-primary/10 group border-2 border-gray-200 " >
    <div class="mb-4">
        <x-dynamic-component 
            :component="$icon" 
            class="w-10 h-10 
                   text-primary 
                   lg:text-gray-500 
                   group-hover:text-green-500 
                   transition duration-300 ease-in-out
                   drop-shadow-[0_0_6px_rgba(34,197,94,0.6)] 
                   group-hover:drop-shadow-[0_0_12px_rgba(34,197,94,0.9)]"
        />
    </div>
    <h3 class="text-lg font-bold mb-2">{{ $title }}</h3>
    <p class="text-sm text-gray-600">{{ $description }}</p>
</div>