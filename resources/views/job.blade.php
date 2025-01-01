<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p>
        The salary for this job is: ${{$job['salary']}}
    </p>

</x-layout>