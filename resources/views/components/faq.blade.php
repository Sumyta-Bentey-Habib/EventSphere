<section class="py-24 bg-indigo-50">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-indigo-700 mb-12 text-center" data-aos="fade-up" data-aos-duration="800">Frequently Asked Questions</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ([
                ['question' => 'How do I create a new event?', 'answer' => 'After logging in, go to your dashboard and click "Create Event" to add your event details.'],
                ['question' => 'How do I browse events?', 'answer' => 'Use the "Browse Events" page to see all available events. You can filter by category, date, or popularity.'],
                ['question' => 'Can I bookmark or save events?', 'answer' => 'Absolutely! Click the bookmark icon on any event to save it for later in your dashboard.'],
                ['question' => 'Who can see my created events?', 'answer' => 'Your events are visible to all users browsing the platform unless you set them as private.'],
                ['question' => 'Is there a limit to how many events I can create?', 'answer' => 'No, you can create as many events as you like once you have an account.']
            ] as $faq)
            <div class="card bg-white shadow-xl rounded-xl p-6 transform hover:scale-[1.03] transition-transform duration-500" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="text-xl font-bold text-indigo-700 mb-2">{{ $faq['question'] }}</h3>
                <p class="text-gray-700">{{ $faq['answer'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
