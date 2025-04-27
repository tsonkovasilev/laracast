<x-layout>
    <x-slot:heading>Jobs!</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}:</strong> {{ $job['salary'] }} 
                </a>
            </li>
            
        @endforeach
    </ul>
</x-layout>