<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-grey-200 rounded">
                <div class="font-bold text-blue-500">
                    {{$job->employer->name}}
                </div>
                <div>
                    <p><strong>{{$job['title']}}:</strong> makes {{$job['salary']}} per year.</p>
                </div>
            </a>  
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>