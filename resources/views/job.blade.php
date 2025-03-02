<x-layout>
    <x-slot:heading>
        Job Details Page
    </x-slot:heading>
    <h1>Job post is a {{ $job['title'] }}</h1>
    <p>Job pays {{ $job['salary'] }} per year</p>
</x-layout>