<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Formulir Pendaftaran Lomba LONTARA 2025
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    
                    @if ($errors->any())
                        <div class="mb-6 bg-red-50 border-l-4 border-red-500 text-red-700 p-4" role="alert">
                            <p class="font-bold">Harap periksa kembali inputan Anda:</p>
                            <ul class="mt-2 list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('registration.store') }}" enctype="multipart/form-data" class="space-y-8">
                        @csrf

                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-lg font-bold text-indigo-700 mb-4 border-b pb-2">1. Identitas Tim & Ketua</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <x-input-label for="team_name" value="Nama Tim" />
                                    <x-text-input id="team_name" class="block mt-1 w-full" type="text" name="team_name" :value="old('team_name')" required autofocus />
                                </div>
                                <div>
                                    <x-input-label for="full_name" value="Nama Lengkap Ketua" />
                                    <x-text-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name', Auth::user()->name)" required />
                                </div>
                                <div>
                                    <x-input-label for="institution" value="Asal Perguruan Tinggi" />
                                    <x-text-input id="institution" class="block mt-1 w-full" type="text" name="institution" :value="old('institution')" required />
                                </div>
                                <div>
                                    <x-input-label for="phone_number" value="Nomor WhatsApp Ketua" />
                                    <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required />
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-lg font-bold text-indigo-700 mb-4 border-b pb-2">2. Kategori Lomba</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <x-input-label for="participant_type" value="Kategori Kompetisi" />
                                    <select name="participant_type" id="participant_type" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        <option value="Tahap Awal" @selected(old('participant_type') == 'Tahap Awal')>Tahap Awal (Early Stage)</option>
                                        <option value="Tahap Berjalan" @selected(old('participant_type') == 'Tahap Berjalan')>Tahap Berjalan (Running Stage)</option>
                                    </select>
                                    <p class="text-xs text-gray-500 mt-1">*Pilih sesuai perkembangan bisnis/ide Anda.</p>
                                </div>
                                <div>
                                    <x-input-label for="research_field" value="Subtema / Bidang Fokus (Opsional)" />
                                    <x-text-input id="research_field" class="block mt-1 w-full" type="text" name="research_field" :value="old('research_field')" placeholder="Contoh: Teknologi Pangan, IoT, dll" />
                                </div>
                            </div>
                        </div>

                        <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-bold text-blue-800 mb-4 border-b border-blue-300 pb-2">3. Berkas Kompetisi (PDF)</h3>
                            <div class="grid grid-cols-1 gap-6">
                                <div>
                                    <x-input-label for="proposal" value="Upload Proposal Business Plan (PDF Max 15MB)" />
                                    <input id="proposal" name="proposal" type="file" accept=".pdf" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700 mt-2" required>
                                </div>
                                <div>
                                    <x-input-label for="bmc" value="Upload Business Model Canvas (BMC) (PDF Max 10MB)" />
                                    <input id="bmc" name="bmc" type="file" accept=".pdf" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700 mt-2" required>
                                </div>
                                <div>
                                    <x-input-label for="ktm" value="Scan KTM Seluruh Anggota Tim (Digabung 1 PDF Max 5MB)" />
                                    <input id="ktm" name="ktm" type="file" accept=".pdf" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700 mt-2" required>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-lg font-bold text-indigo-700 mb-4 border-b pb-2">4. Bukti Persyaratan (Screenshot/Gambar)</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <x-input-label for="share_pamflet" value="Bukti Share Pamflet (Grup WA/Line)" />
                                    <input id="share_pamflet" name="share_pamflet" type="file" accept="image/*" class="mt-2 block w-full text-sm file:mr-2 file:py-1 file:px-2 file:rounded-md file:border-0 file:text-xs file:bg-gray-200 hover:file:bg-gray-300" required>
                                </div>
                                <div>
                                    <x-input-label for="twibbon" value="Bukti Upload Twibbon" />
                                    <input id="twibbon" name="twibbon" type="file" accept="image/*" class="mt-2 block w-full text-sm file:mr-2 file:py-1 file:px-2 file:rounded-md file:border-0 file:text-xs file:bg-gray-200 hover:file:bg-gray-300" required>
                                </div>
                                <div>
                                    <x-input-label for="follow_medsos" value="Bukti Follow IG & TikTok Perisai" />
                                    <input id="follow_medsos" name="follow_medsos" type="file" accept="image/*" class="mt-2 block w-full text-sm file:mr-2 file:py-1 file:px-2 file:rounded-md file:border-0 file:text-xs file:bg-gray-200 hover:file:bg-gray-300" required>
                                </div>
                            </div>
                        </div>

                        <div>
                            <x-input-label for="package_choice" value="Pilih Paket Kegiatan" />
                            <select name="package_choice" id="package_choice" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="Lomba & Expo">Lomba Kewirausahaan + Expo Bisnis</option>
                                <option value="Lomba Only">Hanya Lomba Kewirausahaan</option>
                            </select>
                        </div>

                        <div class="space-y-4 pt-4 border-t">
                            <label for="is_present" class="flex items-center">
                                <input type="checkbox" id="is_present" name="is_present" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" required>
                                <span class="ml-2 text-sm text-gray-600">Tim kami bersedia mengikuti seluruh rangkaian acara jika lolos seleksi.</span>
                            </label>
                            <label for="agree_terms" class="flex items-center">
                                <input type="checkbox" id="agree_terms" name="agree_terms" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" required>
                                <span class="ml-2 text-sm text-gray-600">Saya menyatakan bahwa data dan karya yang dikirimkan adalah orisinal dan belum pernah memenangkan lomba sejenis.</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-8">
                            <x-primary-button class="px-8 py-3 text-lg">
                                {{ __('Kirim Pendaftaran') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>