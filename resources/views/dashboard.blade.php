<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @livewire('profile.two-factor-authentication-form')

    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">@sortablelink('id', 'ID')</th>
            <th class="px-4 py-2">@sortablelink('name', '名前')</th>
            <th class="px-4 py-2">@sortablelink('email', 'e-mail')</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($dates as $date)
            <tr>
                <td class="border px-4 py-2">{{ $date->id }}</td>
                <td class="border px-4 py-2">{{ $date->name }}</td>
                <td class="border px-4 py-2">{{ $date->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

{{--    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())--}}
{{--        <div class="mt-10 sm:mt-0">--}}
{{--            @livewire('profile.two-factor-authentication-form')--}}
{{--        </div>--}}

{{--        <x-jet-section-border />--}}
{{--    @endif--}}
{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <x-jet-welcome />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
