<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$job->title}}</h2>
    <p>
        The salary for this job is: ${{$job->salary}}
    </p>

    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit</x-button>
    </p>

</x-layout>