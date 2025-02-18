@extends('layouts.app')

@section('content')
<section class="pt-28 pb-24 lg:pt-36">
    <div class="container">
        <div class="flex flex-col lg:flex-row">
            <div class="w-full self-center px-4">
                <h1 class="text-base font-medium text-primary md:text-xl">
                    Welcome to
                    <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">
                        Next<span class="text-primary">Edu</span>.
                    </p>
                </h1>
                <h2 class="mb-3 mt-2 text-lg font-light text-primary lg:text-2xl">
                    Diagnose. <span class="font-bold capitalize">
                        @if (auth()->user())
                            {{ auth()->user()->name }}
                        @else
                            Guest
                        @endif
                    </span>
                </h2>
                @if (auth()->user() == null)
                    <p class="mb-3 max-w-md text-slate-500">
                        To get <span class="font-bold text-primary">Dashboard</span> feature you have to 
                        <a href="/login" class="font-bold text-secondary">Login.</a>
                    </p>
                @elseif (auth()->user() !== null && auth()->user()->is_admin == 1)
                    <p class="mb-3 max-w-md text-slate-500">
                        Go to <a href="/dashboard" class="font-bold capitalize text-secondary">dashboard</a>..
                    </p>
                @elseif (auth()->user() !== null)
                    <p class="mb-3 max-w-md text-slate-500">
                        Go to <a href="/dashboard" class="font-bold capitalize text-secondary">
                            {{ auth()->user()->name }}'s dashboard</a>.
                    </p>
                @endif
            </div>

            <div class="grid w-full grid-cols-2 gap-1 self-center px-4">
                <div class="rounded-[4px] border border-sky-500 bg-sky-200 px-3 py-5 text-center">
                    <h1 class="text-4xl font-bold text-primary lg:text-5xl">
                        {{ count($pertanyaanInfo ?? []) }}
                    </h1>
                    <p class="font-base text-base text-primary lg:text-xl">
                        Questions
                    </p>
                </div>
                <div class="rounded-[4px] border border-green-500 bg-green-200 p-3 py-5 text-center">
                    <h1 class="text-4xl font-bold text-primary lg:text-5xl">
                        {{ count($jurusanInfo ?? []) }}
                    </h1>
                    <p class="font-base text-base text-primary lg:text-xl">
                        Possible Results
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
