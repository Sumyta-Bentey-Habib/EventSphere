<section class="bg-[#14062A] py-16 px-6 sm:px-12 lg:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-center items-center gap-8 text-center">
        @php
            $stats = [
                ['number' => '500', 'unit' => '+', 'label' => 'Successful Events'],
                ['number' => '120', 'unit' => '+', 'label' => 'Trusted Organizers'],
                ['number' => '50k', 'unit' => '+', 'label' => 'Active Users'],
            ];
        @endphp

        @foreach ($stats as $stat)
            <div class="flex-1 min-w-[250px] p-8 rounded-xl bg-white/5 border border-white/10 shadow-lg hover:scale-105 transition-transform duration-300">
                <div class="text-6xl md:text-7xl font-bold text-white mb-2">
                    {{ $stat['number'] }}<span class="text-yellow-500 font-extrabold">{{ $stat['unit'] }}</span>
                </div>
                <p class="text-lg text-gray-300 font-medium">{{ $stat['label'] }}</p>
            </div>
        @endforeach
    </div>
</section>
