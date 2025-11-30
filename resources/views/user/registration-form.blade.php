<x-app-layout>
    <div class="min-h-screen bg-black pt-32 pb-12 relative">
        <!-- Background Effects -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        <div class="absolute top-20 right-20 w-96 h-96 bg-yellow-500/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-yellow-600/5 rounded-full blur-[120px]"></div>

        <div class="relative max-w-5xl mx-auto px-6">
            
            <!-- Page Header -->
            <div class="mb-12">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/30 flex items-center justify-center backdrop-blur-xl">
                        <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h3m0 0h3m-3 0v3m0-3V9m12 3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    
                    <div>
                        <h1 class="text-4xl lg:text-5xl font-black text-gray-100">
                            Formulir <span class="bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text text-transparent">Pendaftaran</span>
                        </h1>
                        <p class="text-gray-500 text-base mt-2">Lomba Kewirausahaan LONTARA 2025</p>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <!-- Error Alert -->
                <div class="mb-8 group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-red-500/20 to-red-400/20 rounded-2xl blur-xl"></div>
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border-2 border-red-500/50 rounded-2xl p-6 backdrop-blur-xl">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-red-500/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-red-400 text-lg mb-2">Harap periksa kembali inputan Anda:</h4>
                                <ul class="space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li class="text-gray-300 text-sm flex items-start gap-2">
                                            <span class="text-red-400 mt-1">•</span>
                                            <span>{{ $error }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('registration.store') }}" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- Section 1: Identitas Tim -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-8 backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-yellow-500/20 flex items-center justify-center">
                                <span class="text-yellow-400 font-black text-lg">1</span>
                            </div>
                            <h3 class="text-2xl font-black text-gray-100">Identitas Tim & Ketua</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="team_name" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">Nama Tim</label>
                                <input 
                                    id="team_name" 
                                    name="team_name" 
                                    type="text" 
                                    value="{{ old('team_name') }}"
                                    required
                                    autofocus
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-500/30 rounded-xl text-gray-100 placeholder-gray-600 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all"
                                />
                            </div>

                            <div class="space-y-2">
                                <label for="full_name" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">Nama Lengkap Ketua</label>
                                <input 
                                    id="full_name" 
                                    name="full_name" 
                                    type="text" 
                                    value="{{ old('full_name', Auth::user()->name) }}"
                                    required
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-500/30 rounded-xl text-gray-100 placeholder-gray-600 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all"
                                />
                            </div>

                            <div class="space-y-2">
                                <label for="institution" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">Asal Perguruan Tinggi</label>
                                <input 
                                    id="institution" 
                                    name="institution" 
                                    type="text" 
                                    value="{{ old('institution') }}"
                                    required
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-500/30 rounded-xl text-gray-100 placeholder-gray-600 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all"
                                />
                            </div>

                            <div class="space-y-2">
                                <label for="phone_number" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">Nomor WhatsApp Ketua</label>
                                <input 
                                    id="phone_number" 
                                    name="phone_number" 
                                    type="text" 
                                    value="{{ old('phone_number') }}"
                                    required
                                    placeholder="62xxxxxxxxxx"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-500/30 rounded-xl text-gray-100 placeholder-gray-600 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all"
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Kategori Lomba -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-8 backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-yellow-500/20 flex items-center justify-center">
                                <span class="text-yellow-400 font-black text-lg">2</span>
                            </div>
                            <h3 class="text-2xl font-black text-gray-100">Kategori Lomba</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="participant_type" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">Kategori Kompetisi</label>
                                <select 
                                    name="participant_type" 
                                    id="participant_type"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-500/30 rounded-xl text-gray-100 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all"
                                >
                                    <option value="Tahap Awal" @selected(old('participant_type') == 'Tahap Awal')>Tahap Awal (Early Stage)</option>
                                    <option value="Tahap Berjalan" @selected(old('participant_type') == 'Tahap Berjalan')>Tahap Berjalan (Running Stage)</option>
                                </select>
                                <p class="text-gray-500 text-xs mt-1">*Pilih sesuai perkembangan bisnis/ide Anda</p>
                            </div>

                            <div class="space-y-2">
                                <label for="research_field" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">Subtema / Bidang Fokus <span class="text-gray-500 text-xs">(Opsional)</span></label>
                                <input 
                                    id="research_field" 
                                    name="research_field" 
                                    type="text" 
                                    value="{{ old('research_field') }}"
                                    placeholder="Contoh: Teknologi Pangan, IoT, dll"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-500/30 rounded-xl text-gray-100 placeholder-gray-600 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all"
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Berkas Kompetisi -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-8 backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-yellow-500/20 flex items-center justify-center">
                                <span class="text-yellow-400 font-black text-lg">3</span>
                            </div>
                            <h3 class="text-2xl font-black text-gray-100">Berkas Kompetisi (PDF)</h3>
                        </div>

                        <div class="space-y-6">
                            <!-- Proposal -->
                            <div class="space-y-3">
                                <label for="proposal" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">
                                    Upload Proposal Business Plan
                                    <span class="text-gray-500 text-xs font-normal">(PDF Max 15MB)</span>
                                </label>
                                <div class="relative">
                                    <input 
                                        id="proposal" 
                                        name="proposal" 
                                        type="file" 
                                        accept=".pdf"
                                        required
                                        class="hidden"
                                        onchange="updateFileLabel(this, 'proposal-label')"
                                    />
                                    <label for="proposal" class="flex items-center gap-3 p-4 bg-black/50 border-2 border-dashed border-yellow-500/30 rounded-xl cursor-pointer hover:border-yellow-500/60 hover:bg-yellow-500/5 transition-all group">
                                        <div class="w-12 h-12 rounded-lg bg-yellow-500/10 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-gray-300 font-semibold" id="proposal-label">Klik untuk upload proposal</p>
                                            <p class="text-gray-500 text-xs">Format PDF, maksimal 15MB</p>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- BMC -->
                            <div class="space-y-3">
                                <label for="bmc" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">
                                    Upload Business Model Canvas (BMC)
                                    <span class="text-gray-500 text-xs font-normal">(PDF Max 10MB)</span>
                                </label>
                                <div class="relative">
                                    <input 
                                        id="bmc" 
                                        name="bmc" 
                                        type="file" 
                                        accept=".pdf"
                                        required
                                        class="hidden"
                                        onchange="updateFileLabel(this, 'bmc-label')"
                                    />
                                    <label for="bmc" class="flex items-center gap-3 p-4 bg-black/50 border-2 border-dashed border-yellow-500/30 rounded-xl cursor-pointer hover:border-yellow-500/60 hover:bg-yellow-500/5 transition-all group">
                                        <div class="w-12 h-12 rounded-lg bg-yellow-500/10 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-gray-300 font-semibold" id="bmc-label">Klik untuk upload BMC</p>
                                            <p class="text-gray-500 text-xs">Format PDF, maksimal 10MB</p>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- KTM -->
                            <div class="space-y-3">
                                <label for="ktm" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">
                                    Scan KTM Seluruh Anggota Tim
                                    <span class="text-gray-500 text-xs font-normal">(Digabung 1 PDF Max 5MB)</span>
                                </label>
                                <div class="relative">
                                    <input 
                                        id="ktm" 
                                        name="ktm" 
                                        type="file" 
                                        accept=".pdf"
                                        required
                                        class="hidden"
                                        onchange="updateFileLabel(this, 'ktm-label')"
                                    />
                                    <label for="ktm" class="flex items-center gap-3 p-4 bg-black/50 border-2 border-dashed border-yellow-500/30 rounded-xl cursor-pointer hover:border-yellow-500/60 hover:bg-yellow-500/5 transition-all group">
                                        <div class="w-12 h-12 rounded-lg bg-yellow-500/10 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-gray-300 font-semibold" id="ktm-label">Klik untuk upload KTM</p>
                                            <p class="text-gray-500 text-xs">Format PDF, maksimal 5MB</p>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Bukti Persyaratan -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-8 backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-yellow-500/20 flex items-center justify-center">
                                <span class="text-yellow-400 font-black text-lg">4</span>
                            </div>
                            <h3 class="text-2xl font-black text-gray-100">Bukti Persyaratan</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Share Pamflet -->
                            <div class="space-y-3">
                                <label for="share_pamflet" class="block text-sm font-bold text-gray-300 uppercase tracking-wider text-center">Bukti Share Pamflet</label>
                                <div class="relative">
                                    <input 
                                        id="share_pamflet" 
                                        name="share_pamflet" 
                                        type="file" 
                                        accept="image/*"
                                        required
                                        class="hidden"
                                        onchange="previewImage(this, 'preview-pamflet')"
                                    />
                                    <label for="share_pamflet" class="block relative aspect-square bg-black/50 border-2 border-dashed border-yellow-500/30 rounded-xl cursor-pointer hover:border-yellow-500/60 hover:bg-yellow-500/5 transition-all overflow-hidden group">
                                        <div id="preview-pamflet" class="absolute inset-0 flex flex-col items-center justify-center">
                                            <svg class="w-12 h-12 text-yellow-400 mb-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <p class="text-gray-400 text-xs text-center px-2">Upload Screenshot</p>
                                        </div>
                                    </label>
                                </div>
                                <p class="text-gray-500 text-xs text-center">Grup WA/Telegram</p>
                            </div>

                            <!-- Twibbon -->
                            <div class="space-y-3">
                                <label for="twibbon" class="block text-sm font-bold text-gray-300 uppercase tracking-wider text-center">Bukti Upload Twibbon</label>
                                <div class="relative">
                                    <input 
                                        id="twibbon" 
                                        name="twibbon" 
                                        type="file" 
                                        accept="image/*"
                                        required
                                        class="hidden"
                                        onchange="previewImage(this, 'preview-twibbon')"
                                    />
                                    <label for="twibbon" class="block relative aspect-square bg-black/50 border-2 border-dashed border-yellow-500/30 rounded-xl cursor-pointer hover:border-yellow-500/60 hover:bg-yellow-500/5 transition-all overflow-hidden group">
                                        <div id="preview-twibbon" class="absolute inset-0 flex flex-col items-center justify-center">
                                            <svg class="w-12 h-12 text-yellow-400 mb-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <p class="text-gray-400 text-xs text-center px-2">Upload Screenshot</p>
                                        </div>
                                    </label>
                                </div>
                                <p class="text-gray-500 text-xs text-center">Instagram/TikTok</p>
                            </div>

                            <!-- Follow Medsos -->
                            <div class="space-y-3">
                                <label for="follow_medsos" class="block text-sm font-bold text-gray-300 uppercase tracking-wider text-center">Follow IG & TikTok</label>
                                <div class="relative">
                                    <input 
                                        id="follow_medsos" 
                                        name="follow_medsos" 
                                        type="file" 
                                        accept="image/*"
                                        required
                                        class="hidden"
                                        onchange="previewImage(this, 'preview-medsos')"
                                    />
                                    <label for="follow_medsos" class="block relative aspect-square bg-black/50 border-2 border-dashed border-yellow-500/30 rounded-xl cursor-pointer hover:border-yellow-500/60 hover:bg-yellow-500/5 transition-all overflow-hidden group">
                                        <div id="preview-medsos" class="absolute inset-0 flex flex-col items-center justify-center">
                                            <svg class="w-12 h-12 text-yellow-400 mb-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <p class="text-gray-400 text-xs text-center px-2">Upload Screenshot</p>
                                        </div>
                                    </label>
                                </div>
                                <p class="text-gray-500 text-xs text-center">@perisaiumi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Paket Kegiatan -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-8 backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-yellow-500/20 flex items-center justify-center">
                                <span class="text-yellow-400 font-black text-lg">5</span>
                            </div>
                            <h3 class="text-2xl font-black text-gray-100">Paket Kegiatan</h3>
                        </div>

                        <div class="space-y-2">
                            <label for="package_choice" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">Pilih Paket</label>
                            <select 
                                name="package_choice" 
                                id="package_choice"
                                class="w-full px-4 py-3 bg-black/50 border border-yellow-500/30 rounded-xl text-gray-100 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all"
                            >
                                <option value="Lomba & Expo">Lomba Kewirausahaan</option>
                                <option value="Lomba Only">Talkshow: "Green Tech Revolution"</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Section 6: Pernyataan -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-8 backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                        <div class="space-y-4">
                            <label class="flex items-start gap-4 cursor-pointer group/check<div class="space-y-4">
                            <label class="flex items-start gap-4 cursor-pointer group/check">
                                <input 
                                    type="checkbox" 
                                    id="is_present" 
                                    name="is_present" 
                                    value="1" 
                                    required
                                    class="mt-1 w-5 h-5 rounded border-2 border-yellow-500/50 bg-black/50 text-yellow-500 focus:ring-2 focus:ring-yellow-500/20 focus:ring-offset-0 cursor-pointer"
                                />
                                <span class="text-gray-300 text-sm leading-relaxed group-hover/check:text-gray-100 transition-colors">
                                    Tim kami bersedia mengikuti seluruh rangkaian acara jika lolos seleksi.
                                </span>
                            </label>

                            <label class="flex items-start gap-4 cursor-pointer group/check">
                                <input 
                                    type="checkbox" 
                                    id="agree_terms" 
                                    name="agree_terms" 
                                    value="1" 
                                    required
                                    class="mt-1 w-5 h-5 rounded border-2 border-yellow-500/50 bg-black/50 text-yellow-500 focus:ring-2 focus:ring-yellow-500/20 focus:ring-offset-0 cursor-pointer"
                                />
                                <span class="text-gray-300 text-sm leading-relaxed group-hover/check:text-gray-100 transition-colors">
                                    Saya menyatakan bahwa data dan karya yang dikirimkan adalah orisinal dan belum pernah memenangkan lomba sejenis.
                                </span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end gap-4 pt-4">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-transparent border border-yellow-500/30 text-gray-300 font-bold rounded-xl hover:bg-yellow-500/10 hover:border-yellow-500/50 transition-all">
                        Batal
                    </a>
                    
                    <button type="submit" class="group relative inline-flex items-center justify-center gap-3 px-12 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-black text-lg rounded-xl hover:scale-105 transition-all overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <span class="relative z-10">Kirim Pendaftaran</span>
                        <svg class="relative z-10 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>

            </form>

        </div>
    </div>

    <script>
        // Update file label when file is selected
        function updateFileLabel(input, labelId) {
            const fileName = input.files[0]?.name;
            const label = document.getElementById(labelId);
            if (fileName) {
                label.textContent = fileName;
                label.classList.add('text-yellow-400');
            }
        }

        // Preview image when file is selected
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const file = input.files[0];
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover" alt="Preview">`;
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</x-app-layout>