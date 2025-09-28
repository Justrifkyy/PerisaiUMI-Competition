<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Formulir Registrasi Konferensi
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Oops!</strong>
                            <span class="block sm:inline">Ada beberapa kesalahan pada input Anda.</span>
                            <ul class="mt-2 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('registration.store') }}" enctype="multipart/form-data">
                        @csrf

                        <h3 class="text-lg font-semibold border-b pb-2 mb-4">1. Data Pribadi</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="full_name" :value="__('Nama Lengkap (sesuai KTP)')" />
                                <x-text-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')" required autofocus />
                            </div>
                            <div>
                                <x-input-label for="institution" :value="__('Institusi (Kampus, Organisasi, dll)')" />
                                <x-text-input id="institution" class="block mt-1 w-full" type="text" name="institution" :value="old('institution')" required />
                            </div>
                            <div>
                                <x-input-label for="position" :value="__('Jabatan/Posisi')" />
                                <x-text-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')" required />
                            </div>
                            <div>
                                <x-input-label for="phone_number" :value="__('Nomor Telepon/HP Aktif')" />
                                <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required />
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold border-b pb-2 mb-4 mt-8">2. Informasi Konferensi</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                             <div>
                                <x-input-label for="participant_type" :value="__('Jenis Peserta')" />
                                <select name="participant_type" id="participant_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="Participant" @selected(old('participant_type') == 'Participant')>Participant</option>
                                    <option value="Presenter" @selected(old('participant_type') == 'Presenter')>Presenter</option>
                                </select>
                            </div>
                            <div>
                                <x-input-label for="research_field" :value="__('Bidang/Topik Penelitian (khusus Presenter)')" />
                                <x-text-input id="research_field" class="block mt-1 w-full" type="text" name="research_field" :value="old('research_field')" />
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold border-b pb-2 mb-4 mt-8">3. Berkas Pendukung</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="identity_card" :value="__('Kartu Identitas (KTP/Paspor/KTM) (.jpg, .png, .pdf)')" />
                                <input id="identity_card" name="identity_card" type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 mt-2" required>
                            </div>
                            <div>
                                <x-input-label for="cv" :value="__('Curriculum Vitae (Opsional) (.pdf)')" />
                                <input id="cv" name="cv" type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 mt-2">
                            </div>
                        </div>
                        
                        <h3 class="text-lg font-semibold border-b pb-2 mb-4 mt-8">4. Administrasi</h3>
                        <div>
                            <x-input-label for="package_choice" :value="__('Pilihan Paket')" />
                             <select name="package_choice" id="package_choice" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="Hanya Seminar" @selected(old('package_choice') == 'Hanya Seminar')>Hanya Seminar</option>
                                <option value="Seminar + Workshop" @selected(old('package_choice') == 'Seminar + Workshop')>Seminar + Workshop</option>
                                <option value="Seminar + Gala Dinner" @selected(old('package_choice') == 'Seminar + Gala Dinner')>Seminar + Gala Dinner</option>
                            </select>
                        </div>

                        <h3 class="text-lg font-semibold border-b pb-2 mb-4 mt-8">5. Konfirmasi</h3>
                        <div class="space-y-4">
                            <label for="is_present" class="flex items-center">
                                <input type="checkbox" id="is_present" name="is_present" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ml-2 text-sm text-gray-600">Saya bersedia untuk hadir dalam acara konferensi.</span>
                            </label>
                            <label for="agree_terms" class="flex items-center">
                                <input type="checkbox" id="agree_terms" name="agree_terms" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ml-2 text-sm text-gray-600">Saya menyetujui syarat & ketentuan yang berlaku.</span>
                            </label>
                        </div>


                        <div class="flex items-center justify-end mt-8">
                            <x-primary-button>
                                {{ __('Simpan dan Lanjutkan ke Pembayaran') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>