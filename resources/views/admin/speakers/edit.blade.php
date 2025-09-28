<x-admin-layout>
    <x-slot name="header">
        Edit Data Speaker: {{ $speaker->name }}
    </x-slot>

    <div class="p-6 bg-white rounded-lg shadow-md">
        <form action="{{ route('admin.speakers.update', $speaker) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <!-- Hidden input for crop data -->
            <input type="hidden" name="crop_data" id="crop_data">

            <div class="space-y-4">
                {{-- Nama & Jabatan --}}
                <div>
                    <x-input-label for="name" :value="__('Nama Speaker')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $speaker->name)" required autofocus />
                </div>
                <div>
                    <x-input-label for="title" :value="__('Jabatan/Institusi')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $speaker->title)" required />
                </div>

                {{-- Input Foto --}}
                <div>
                    <x-input-label value="Foto Speaker" />
                    <div class="mt-2 flex items-center gap-x-3">
                        <img id="image-preview" class="h-24 w-24 rounded-full object-cover bg-gray-200" src="{{ Storage::url($speaker->image_path) }}" alt="Image preview">
                        <input type="file" id="image-input" class="hidden" accept="image/*">
                        <label for="image-input" class="cursor-pointer rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            Ganti Gambar
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-6">
                <a href="{{ route('admin.speakers.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                <x-primary-button>Update Speaker</x-primary-button>
            </div>
        </form>
    </div>

    <!-- Modal dan Script sama persis dengan halaman create -->
    <div id="cropper-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center p-4 z-50" style="display: none;">
        <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-lg">
            <h3 class="text-xl font-bold mb-4">Potong Gambar</h3>
            <img id="image-to-crop" src="" class="block w-full">
            <div class="mt-4 flex justify-end space-x-2">
                <button type="button" id="cancel-crop" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Batal</button>
                <button type="button" id="confirm-crop" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Potong & Simpan</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('cropper-modal');
            const imageToCrop = document.getElementById('image-to-crop');
            const imageInput = document.getElementById('image-input');
            const cropDataInput = document.getElementById('crop_data');
            const confirmCropBtn = document.getElementById('confirm-crop');
            const cancelCropBtn = document.getElementById('cancel-crop');
            let cropper;

            imageInput.addEventListener('change', (e) => {
                if (e.target.files && e.target.files.length > 0) {
                    const reader = new FileReader();
                    reader.onload = (event) => {
                        imageToCrop.src = event.target.result;
                        modal.style.display = 'flex';
                        cropper = new Cropper(imageToCrop, { aspectRatio: 1, viewMode: 1, background: false });
                    };
                    reader.readAsDataURL(e.target.files[0]);
                }
            });

            confirmCropBtn.addEventListener('click', () => {
                if (cropper) {
                    const canvas = cropper.getCroppedCanvas({ width: 512, height: 512 });
                    document.getElementById('image-preview').src = canvas.toDataURL();
                    cropDataInput.value = canvas.toDataURL('image/jpeg');
                }
                closeModal();
            });

            cancelCropBtn.addEventListener('click', closeModal);

            function closeModal() {
                modal.style.display = 'none';
                if (cropper) cropper.destroy();
                imageInput.value = '';
            }
        });
    </script>
</x-admin-layout>