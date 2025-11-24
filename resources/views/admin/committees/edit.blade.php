<x-admin-layout>
    <x-slot name="header">
        Edit Data Panitia
    </x-slot>

    <div class="p-6 bg-white rounded-lg shadow-md">
        <form action="{{ route('admin.committees.update', $committee) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="hidden" name="crop_data" id="crop_data">

            <div class="space-y-6">
                {{-- Nama --}}
                <div>
                    <x-input-label for="name" value="Nama Lengkap" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $committee->name)" required />
                </div>

                {{-- Jabatan --}}
                <div>
                    <x-input-label for="role" value="Jabatan" />
                    <x-text-input id="role" name="role" type="text" class="mt-1 block w-full" :value="old('role', $committee->role)" required />
                </div>

                {{-- Upload Foto --}}
                <div>
                    <x-input-label value="Foto Panitia (Biarkan jika tidak ingin mengubah)" />
                    <div class="mt-2 flex items-center gap-x-4">
                        <div class="h-32 w-32 rounded-full overflow-hidden border-2 border-gray-300 bg-gray-100 flex-shrink-0">
                            <img id="image-preview" class="h-full w-full object-cover" src="{{ Storage::url($committee->image_path) }}" alt="Preview">
                        </div>
                        
                        <div>
                            <input type="file" id="image-input" class="hidden" accept="image/*">
                            <label for="image-input" class="cursor-pointer inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                📷 Ganti Foto
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-8 border-t pt-4">
                <a href="{{ route('admin.committees.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                <x-primary-button>Update Panitia</x-primary-button>
            </div>
        </form>
    </div>

    <div id="cropper-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center p-4 z-50" style="display: none;">
        <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-2xl flex flex-col max-h-[90vh]">
            <h3 class="text-xl font-bold mb-4 flex-shrink-0">Sesuaikan Potongan Foto</h3>
            
            <div class="flex-grow overflow-hidden bg-gray-100">
                <img id="image-to-crop" src="" class="max-w-full max-h-full block">
            </div>
            
            <div class="mt-4 flex justify-end space-x-2 flex-shrink-0">
                <button type="button" id="cancel-crop" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Batal</button>
                <button type="button" id="confirm-crop" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Potong & Gunakan</button>
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
        });
    </script>
</x-admin-layout>