<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Tim
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
            <a href="{{ route('admin.participants.index') }}" class="inline-flex items-center mb-6 text-gray-500 hover:text-indigo-600 transition-colors group">
                <div class="w-8 h-8 rounded-full bg-white shadow-sm flex items-center justify-center mr-2 group-hover:bg-indigo-50 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </div>
                <span class="font-medium text-sm">Kembali ke Daftar Tim</span>
            </a>

            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                
                <div class="bg-gradient-to-r from-gray-900 to-gray-800 px-8 py-6 border-b border-gray-700">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white">Formulir Edit Data</h3>
                            <p class="text-gray-400 text-sm mt-1">Perbarui informasi tim dan ketua.</p>
                        </div>
                        <div class="h-10 w-10 bg-yellow-500/20 rounded-lg flex items-center justify-center border border-yellow-500/50">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="p-8">
                    <form method="POST" action="{{ route('admin.participants.update', ['registration' => $registration->id]) }}">
                        @csrf
                        @method('PATCH')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                            
                            <div class="md:col-span-2">
                                <label for="team_name" class="block text-sm font-bold text-gray-700 mb-2">Nama Tim</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    </div>
                                    <input type="text" name="team_name" id="team_name" value="{{ old('team_name', $registration->team_name) }}" required
                                        class="pl-10 block w-full rounded-lg border-gray-300 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm py-2.5">
                                </div>
                                @error('team_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="md:col-span-1">
                                <label for="participant_type" class="block text-sm font-bold text-gray-700 mb-2">Kategori Kompetisi</label>
                                <div class="relative">
                                    <select name="participant_type" id="participant_type" class="block w-full rounded-lg border-gray-300 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 shadow-sm sm:text-sm py-2.5">
                                        <option value="Tahap Awal" @selected($registration->participant_type == 'Tahap Awal')>Tahap Awal (Early Stage)</option>
                                        <option value="Tahap Berjalan" @selected($registration->participant_type == 'Tahap Berjalan')>Tahap Berjalan (Running Stage)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="md:col-span-1">
                                <label for="research_field" class="block text-sm font-bold text-gray-700 mb-2">Subtema / Bidang</label>
                                <input type="text" name="research_field" id="research_field" value="{{ old('research_field', $registration->research_field) }}"
                                    class="block w-full rounded-lg border-gray-300 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm py-2.5">
                            </div>

                            <div class="md:col-span-2 border-t border-gray-100 my-2"></div>

                            <div class="md:col-span-1">
                                <label for="full_name" class="block text-sm font-bold text-gray-700 mb-2">Nama Ketua</label>
                                <input type="text" name="full_name" id="full_name" value="{{ old('full_name', $registration->full_name) }}" required
                                    class="block w-full rounded-lg border-gray-300 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm py-2.5">
                            </div>

                            <div class="md:col-span-1">
                                <label for="institution" class="block text-sm font-bold text-gray-700 mb-2">Asal Institusi</label>
                                <input type="text" name="institution" id="institution" value="{{ old('institution', $registration->institution) }}" required
                                    class="block w-full rounded-lg border-gray-300 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm py-2.5">
                            </div>

                            <div class="md:col-span-1">
                                <label for="phone_number" class="block text-sm font-bold text-gray-700 mb-2">Nomor WhatsApp</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    </div>
                                    <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $registration->phone_number) }}" required
                                        class="pl-10 block w-full rounded-lg border-gray-300 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm py-2.5">
                                </div>
                            </div>

                        </div>

                        <div class="mt-10 pt-6 border-t border-gray-100 flex items-center justify-end gap-4">
                            <a href="{{ route('admin.participants.index') }}" class="px-5 py-2.5 rounded-lg border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 hover:text-gray-900 transition-colors text-sm">
                                Batal
                            </a>
                            <button type="submit" class="px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 text-white font-bold rounded-lg shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5 text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>