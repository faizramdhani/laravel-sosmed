<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Post Detail
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card w-full bg-base-100 shadow-xl my-3">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->user->name}} - <span class="text-gray-300">{{
                        $post->created_at->diffForHumans()}}</span></h2>
                    <p>{{$post->body}}</p>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>