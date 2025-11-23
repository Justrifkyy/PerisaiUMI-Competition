<x-admin-layout>
    <x-slot name="header">
        Tambah Akun Juri Baru
    </x-slot>

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <form method="POST" action="{{ route('admin.juris.store') }}">
            @csrf

            <div class="mb-4">
                <x-input-label for="name" :value="__('Nama Lengkap Juri')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="institution" :value="__('Asal Instansi / Afiliasi')" />
                <x-text-input id="institution" class="block mt-1 w-full" type="text" name="institution" :value="old('institution')" />
                <x-input-error :messages="$errors->get('institution')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="email" :value="__('Email Login')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-6">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end gap-4">
                <a href="{{ route('admin.juris.index') }}" class="text-sm text-gray-600 hover:text-gray-900">Batal</a>
                <x-primary-button>Buat Akun Juri</x-primary-button>
            </div>
        </form>
    </div>
</x-admin-layout>