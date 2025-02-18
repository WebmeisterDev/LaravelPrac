<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>

    <h1>Welcome to the about page</h1>
    <h1> Laravel version: {{app()->version()}}</h1>
    <h1>PHP version: {{phpinfo()}}</h1>
</x-layout>
