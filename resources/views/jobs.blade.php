<x-layout>

<x-slot:heading>
    Jobs listings
</x-slot:heading>

<ul>
    @foreach ($jobs as $job)
         <li>
            <a href="/jobs/1"></a>
            <strong>{{ $job['title'] }}:</strong> Pays {{$job['salary']}} per year
        </li>
    @endforeach
</ul>
</x-layout>

