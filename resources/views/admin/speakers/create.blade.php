<x-admin-layout>
    <x-slot name="header">
        Tambah Tokoh (Juri / Narasumber)
    </x-slot>

    <div class="p-6 bg-white rounded-lg shadow-md">
        <form action="{{ route('admin.speakers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="crop_data" id="crop_data">

            <div class="space-y-6">
                {{-- Pilihan Tipe --}}
                <div>
                    <x-input-label for="type" value="Kategori Tokoh" />
                    <select id="type" name="type" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="juri">Dewan Juri</option>
                        <option value="speaker">Narasumber Talkshow</option>
                    </select>
                </div>

                {{-- Nama --}}
                <div>
                    <x-input-label for="name" value="Nama Lengkap (termasuk gelar)" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus />
                </div>

                {{-- Jabatan --}}
                <div>
                    <x-input-label for="title" value="Jabatan / Peran (Contoh: Dosen ITB / CEO Startup)" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required />
                </div>

                {{-- Upload Foto --}}
                <div>
                    <x-input-label value="Foto (Akan di-crop menjadi kotak)" />
                    <div class="mt-2 flex items-center gap-x-4">
                        <div class="h-32 w-32 rounded-full overflow-hidden border-2 border-gray-300 bg-gray-100 flex-shrink-0">
                            <img id="image-preview" class="h-full w-full object-cover" src="https://placehold.co/200x200/E2E8F0/4A5568?text=Foto" alt="Preview">
                        </div>
                        
                        <div>
                            <input type="file" id="image-input" class="hidden" accept="image/*">
                            <label for="image-input" class="cursor-pointer inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 transition">
                                📷 Pilih Foto
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-8 border-t pt-4">
                <a href="{{ route('admin.speakers.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                <x-primary-button>Simpan Data</x-primary-button>
            </div>
        </form>
    </div>

    <!-- MODAL CROPPER -->
    <div id="cropper-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 p-4" style="display: none;">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl overflow-hidden flex flex-col max-h-[90vh]">
            <div class="px-6 py-4 border-b flex justify-between items-center">
                <h3 class="text-lg font-bold text-gray-900">Sesuaikan Potongan Foto</h3>
                <button type="button" id="close-x" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="relative flex-grow bg-gray-900 h-96 sm:h-[500px] w-full overflow-hidden">
                <img id="image-to-crop" src="" class="block max-w-full" style="max-height: 100%;">
            </div>
            <div class="px-6 py-4 border-t bg-gray-50 flex justify-end space-x-3">
                <button type="button" id="cancel-crop" class="px-4 py-2 bg-white border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 font-medium shadow-sm">Batal</button>
                <button type="button" id="confirm-crop" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 font-medium shadow-sm">Potong & Gunakan</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('cropper-modal');
            const imageToCrop = document.getElementById('image-to-crop');
            const imageInput = document.getElementById('image-input');
            const cropDataInput = document.getElementById('crop_data');
            const confirmBtn = document.getElementById('confirm-crop');
            const cancelBtn = document.getElementById('cancel-crop');
            const closeXBtn = document.getElementById('close-x');
            let cropper;

            imageInput.addEventListener('change', (e) => {
                const files = e.target.files;
                if (files && files.length > 0) {
                    const reader = new FileReader();
                    reader.onload = (event) => {
                        imageToCrop.src = event.target.result;
                        modal.style.display = 'flex';
                        if (cropper) { cropper.destroy(); }
                        cropper = new Cropper(imageToCrop, {
                            aspectRatio: 1, 
                            viewMode: 1,
                            autoCropArea: 0.8,
                            responsive: true,
                        });
                    };
                    reader.readAsDataURL(files[0]);
                }
            });

            confirmBtn.addEventListener('click', () => {
                if (cropper) {
                    const canvas = cropper.getCroppedCanvas({ width: 600, height: 600 });
                    document.getElementById('image-preview').src = canvas.toDataURL();
                    cropDataInput.value = canvas.toDataURL('image/jpeg', 0.8);
                }
                closeModal();
            });

            const closeModal = () => {
                modal.style.display = 'none';
                if (cropper) { cropper.destroy(); cropper = null; }
                imageInput.value = '';
            };

            cancelBtn.addEventListener('click', closeModal);
            closeXBtn.addEventListener('click', closeModal);
        });
    </script>
</x-admin-layout>