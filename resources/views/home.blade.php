
<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <h1>Home</h1>
    <p>{{$greeting}}</p>
        @foreach ($jobs as $job)
          <li>{{ $job['title'] }}</li>  
        @endforeach
</x-layout>