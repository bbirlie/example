<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Jobs</h1>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}">
                <li>
                    <p><strong>{{$job['title']}}:</strong> makes {{$job['salary']}} per year.</p>
                </li>
            </a>  
        @endforeach
    </ul>
</x-layout>