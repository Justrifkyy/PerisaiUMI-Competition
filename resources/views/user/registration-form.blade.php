<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-yellow-400 leading-tight uppercase tracking-wider">
            {{ __('Formulir Pendaftaran Tim') }}
        </h2>
    </x-slot>

    <!-- Main Container with Dark Theme -->
<div class="relative min-h-screen bg-black pt-10 pb-12 md:py-20 overflow-hidden"> 
        <!-- Animated Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900"></div>
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>
        
        <!-- Glowing Orbs -->
        <div class="absolute top-20 right-0 w-96 h-96 bg-yellow-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-20 left-0 w-96 h-96 bg-yellow-600/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 relative z-10">
            
            <!-- Error Alert -->
            @if ($errors->any())
                <div class="mb-8 p-4 bg-red-500/10 border-l-4 border-red-500 rounded-r-xl backdrop-blur-xl animate-fade-in-down" role="alert">
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        <div>
                            <p class="font-bold text-red-400">Mohon periksa kembali inputan Anda:</p>
                            <ul class="mt-1 list-disc list-inside text-sm text-red-300">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('registration.store') }}" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- SECTION 1: Identitas Ketua -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl opacity-20 group-hover:opacity-40 transition duration-500"></div>
                    <div class="relative bg-gray-900 border border-yellow-500/20 rounded-2xl p-6 md:p-8 backdrop-blur-xl">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-yellow-500/10">
                            <div class="w-10 h-10 rounded-full bg-yellow-500/10 flex items-center justify-center border border-yellow-500/30">
                                <span class="font-black text-yellow-400">01</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-100">Identitas Ketua & Tim</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Input Fields with Custom Styling -->
                            <div class="space-y-2">
                                <label for="team_name" class="block text-sm font-medium text-gray-400">Nama Tim</label>
                                <input id="team_name" type="text" name="team_name" value="{{ old('team_name') }}" required autofocus 
                                    class="w-full bg-black/50 border border-gray-700 rounded-xl px-4 py-3 text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all placeholder-gray-600"
                                    placeholder="Masukkan nama tim">
                            </div>

                            <div class="space-y-2">
                                <label for="full_name" class="block text-sm font-medium text-gray-400">Nama Lengkap Ketua</label>
                                <input id="full_name" type="text" name="full_name" value="{{ old('full_name', Auth::user()->name) }}" required 
                                    class="w-full bg-black/50 border border-gray-700 rounded-xl px-4 py-3 text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all">
                            </div>

                            <div class="space-y-2">
                                <label for="nim" class="block text-sm font-medium text-gray-400">NIM / NPM Ketua</label>
                                <input id="nim" type="text" name="nim" value="{{ old('nim') }}" required 
                                    class="w-full bg-black/50 border border-gray-700 rounded-xl px-4 py-3 text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all">
                            </div>

                            <div class="space-y-2">
                                <label for="major" class="block text-sm font-medium text-gray-400">Program Studi Ketua</label>
                                <input id="major" type="text" name="major" value="{{ old('major') }}" required 
                                    class="w-full bg-black/50 border border-gray-700 rounded-xl px-4 py-3 text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all">
                            </div>

                            <div class="space-y-2">
                                <label for="institution" class="block text-sm font-medium text-gray-400">Asal Perguruan Tinggi</label>
                                <input id="institution" type="text" name="institution" value="{{ old('institution', Auth::user()->institution) }}" required 
                                    class="w-full bg-black/50 border border-gray-700 rounded-xl px-4 py-3 text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all">
                            </div>

                            <div class="space-y-2">
                                <label for="phone_number" class="block text-sm font-medium text-gray-400">Nomor WhatsApp Ketua</label>
                                <input id="phone_number" type="text" name="phone_number" value="{{ old('phone_number', Auth::user()->phone_number) }}" required 
                                    class="w-full bg-black/50 border border-gray-700 rounded-xl px-4 py-3 text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 2: Data Anggota -->
                <div class="group relative" x-data="{ 
                    members: [
                        { name: '', nim: '', major: '' },
                        { name: '', nim: '', major: '' }
                    ],
                    addMember() {
                        if (this.members.length < 4) {
                            this.members.push({ name: '', nim: '', major: '' });
                        }
                    },
                    removeMember(index) {
                        if (this.members.length > 2) {
                            this.members.splice(index, 1);
                        }
                    }
                }">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl opacity-20 group-hover:opacity-40 transition duration-500"></div>
                    <div class="relative bg-gray-900 border border-yellow-500/20 rounded-2xl p-6 md:p-8 backdrop-blur-xl">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 pb-4 border-b border-yellow-500/10 gap-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-yellow-500/10 flex items-center justify-center border border-yellow-500/30">
                                    <span class="font-black text-yellow-400">02</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-100">Data Anggota Tim</h3>
                                    <p class="text-xs text-gray-500 mt-1">Min. 2 anggota, Maks. 4 anggota (selain ketua)</p>
                                </div>
                            </div>
                            <button type="button" @click="addMember()" x-show="members.length < 4" 
                                class="px-4 py-2 bg-yellow-500/10 hover:bg-yellow-500/20 text-yellow-400 border border-yellow-500/50 rounded-lg text-sm font-bold transition-all flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                                Tambah Anggota
                            </button>
                        </div>

                        <template x-for="(member, index) in members" :key="index">
                            <div class="relative bg-black/30 rounded-xl p-5 border border-gray-800 mb-4 transition-all hover:border-yellow-500/30">
                                <div class="absolute -top-3 left-4 bg-gray-800 border border-gray-700 text-yellow-400 text-xs font-bold px-3 py-1 rounded-full">
                                    Anggota <span x-text="index + 1"></span>
                                </div>
                                
                                <button type="button" @click="removeMember(index)" x-show="members.length > 2" 
                                    class="absolute top-4 right-4 text-gray-500 hover:text-red-400 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-2">
                                    <div class="space-y-2">
                                        <label :for="'members_'+index+'_name'" class="block text-xs font-medium text-gray-400 uppercase tracking-wide">Nama Lengkap</label>
                                        <input type="text" :id="'members_'+index+'_name'" :name="'members['+index+'][name]'" required
                                            class="w-full bg-gray-900 border border-gray-700 rounded-lg px-3 py-2.5 text-gray-200 text-sm focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all">
                                    </div>
                                    <div class="space-y-2">
                                        <label :for="'members_'+index+'_nim'" class="block text-xs font-medium text-gray-400 uppercase tracking-wide">NIM / NPM</label>
                                        <input type="text" :id="'members_'+index+'_nim'" :name="'members['+index+'][nim]'" required
                                            class="w-full bg-gray-900 border border-gray-700 rounded-lg px-3 py-2.5 text-gray-200 text-sm focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all">
                                    </div>
                                    <div class="space-y-2">
                                        <label :for="'members_'+index+'_major'" class="block text-xs font-medium text-gray-400 uppercase tracking-wide">Program Studi</label>
                                        <input type="text" :id="'members_'+index+'_major'" :name="'members['+index+'][major]'" required
                                            class="w-full bg-gray-900 border border-gray-700 rounded-lg px-3 py-2.5 text-gray-200 text-sm focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all">
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- SECTION 3: Kategori Lomba -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl opacity-20 group-hover:opacity-40 transition duration-500"></div>
                    <div class="relative bg-gray-900 border border-yellow-500/20 rounded-2xl p-6 md:p-8 backdrop-blur-xl">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-yellow-500/10">
                            <div class="w-10 h-10 rounded-full bg-yellow-500/10 flex items-center justify-center border border-yellow-500/30">
                                <span class="font-black text-yellow-400">03</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-100">Detail Kompetisi</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="participant_type" class="block text-sm font-medium text-gray-400">Kategori Kompetisi</label>
                                <div class="relative">
                                    <select name="participant_type" id="participant_type" class="w-full bg-black/50 border border-gray-700 rounded-xl px-4 py-3 text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 appearance-none transition-all cursor-pointer">
                                        <option value="Tahap Awal">Tahap Awal (Early Stage)</option>
                                        <option value="Tahap Berjalan">Tahap Berjalan (Running Stage)</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label for="research_field" class="block text-sm font-medium text-gray-400">Subtema / Bidang Fokus</label>
                                <input id="research_field" type="text" name="research_field" value="{{ old('research_field') }}" 
                                    class="w-full bg-black/50 border border-gray-700 rounded-xl px-4 py-3 text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all"
                                    placeholder="Contoh: Teknologi Pangan">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 4: Upload Berkas -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl opacity-20 group-hover:opacity-40 transition duration-500"></div>
                    <div class="relative bg-gray-900 border border-yellow-500/20 rounded-2xl p-6 md:p-8 backdrop-blur-xl">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-yellow-500/10">
                            <div class="w-10 h-10 rounded-full bg-yellow-500/10 flex items-center justify-center border border-yellow-500/30">
                                <span class="font-black text-yellow-400">04</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-100">Upload Berkas (PDF)</h3>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            @foreach([
                                'proposal' => 'Proposal Business Plan (Max 15MB)',
                                'bmc' => 'Business Model Canvas / BMC (Max 10MB)',
                                'ktm' => 'Scan KTM Gabungan Ketua & Anggota (Max 5MB)'
                            ] as $id => $label)
                                <div class="relative group/file">
                                    <label class="block text-sm font-medium text-gray-400 mb-2">{{ $label }}</label>
                                    <input type="file" id="{{ $id }}" name="{{ $id }}" accept=".pdf" required
                                        class="block w-full text-sm text-gray-400
                                        file:mr-4 file:py-2.5 file:px-4
                                        file:rounded-lg file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-yellow-500 file:text-black
                                        hover:file:bg-yellow-400
                                        bg-black/30 border border-gray-700 rounded-xl cursor-pointer
                                        focus:outline-none focus:border-yellow-500 transition-all
                                        group-hover/file:border-yellow-500/50"
                                    />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- SECTION 5: Bukti Persyaratan -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl opacity-20 group-hover:opacity-40 transition duration-500"></div>
                    <div class="relative bg-gray-900 border border-yellow-500/20 rounded-2xl p-6 md:p-8 backdrop-blur-xl">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-yellow-500/10">
                            <div class="w-10 h-10 rounded-full bg-yellow-500/10 flex items-center justify-center border border-yellow-500/30">
                                <span class="font-black text-yellow-400">05</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-100">Bukti Persyaratan</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            @foreach([
                                'share_pamflet' => ['label' => 'Bukti Share Pamflet', 'desc' => 'Grup WA/Line (JPG/PNG)'],
                                'twibbon' => ['label' => 'Bukti Upload Twibbon', 'desc' => 'Seluruh Anggota (JPG/PNG)'],
                                'follow_medsos' => ['label' => 'Bukti Follow Medsos', 'desc' => 'IG & TikTok (JPG/PNG)']
                            ] as $id => $data)
                                <div class="relative">
                                    <label class="block text-sm font-medium text-gray-400 mb-1">{{ $data['label'] }}</label>
                                    <p class="text-xs text-gray-500 mb-2">{{ $data['desc'] }}</p>
                                    <input type="file" id="{{ $id }}" name="{{ $id }}" accept=".jpg,.jpeg,.png,.pdf" required
                                        class="block w-full text-xs text-gray-400
                                        file:mr-2 file:py-2 file:px-3
                                        file:rounded-md file:border-0
                                        file:text-xs file:font-semibold
                                        file:bg-gray-700 file:text-white
                                        hover:file:bg-gray-600
                                        bg-black/30 border border-gray-700 rounded-lg cursor-pointer
                                        focus:outline-none focus:border-yellow-500"
                                    />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Terms & Submit -->
                <div class="space-y-6 pt-4">
                    <div class="space-y-3 p-4 rounded-xl bg-yellow-500/5 border border-yellow-500/10">
                        <label class="flex items-start gap-3 cursor-pointer group">
                            <input type="checkbox" name="is_present" value="1" required class="mt-1 rounded bg-gray-800 border-gray-600 text-yellow-500 focus:ring-yellow-500 focus:ring-offset-gray-900">
                            <span class="text-sm text-gray-300 group-hover:text-yellow-400 transition-colors">
                                Tim kami bersedia mengikuti seluruh rangkaian acara jika lolos seleksi.
                            </span>
                        </label>
                        <label class="flex items-start gap-3 cursor-pointer group">
                            <input type="checkbox" name="agree_terms" value="1" required class="mt-1 rounded bg-gray-800 border-gray-600 text-yellow-500 focus:ring-yellow-500 focus:ring-offset-gray-900">
                            <span class="text-sm text-gray-300 group-hover:text-yellow-400 transition-colors">
                                Saya menyatakan bahwa data dan karya yang dikirimkan adalah orisinal dan dapat dipertanggungjawabkan.
                            </span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end">
                        <button type="submit" class="group relative inline-flex items-center justify-center gap-3 px-8 md:px-12 py-4 bg-gradient-to-r from-yellow-400 to-yellow-600 text-black font-black text-lg rounded-xl overflow-hidden hover:scale-105 transition-all duration-300 shadow-lg shadow-yellow-500/20">
                            <span class="relative z-10">KIRIM PENDAFTARAN</span>
                            <svg class="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>