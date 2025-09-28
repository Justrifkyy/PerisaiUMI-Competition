

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Informasi Profil
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            Perbarui informasi profil dan data diri Anda.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <input type="hidden" name="crop_data" id="crop_data">

        <!-- Foto Profil Section -->
        <div>
            <x-input-label for="avatar-input" value="Foto Profil" />
            <div class="mt-2 flex items-center gap-x-3">
                <img id="avatar-preview" class="h-24 w-24 rounded-full object-cover" src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : 'https://placehold.co/96x96/E2E8F0/4A5568?text=AV' }}" alt="Current avatar">
                <input type="file" id="avatar-input" class="hidden" accept="image/*">
                <label for="avatar-input" class="cursor-pointer rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    Ganti Foto
                </label>
            </div>
        </div>

        <!-- Name and Email fields -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
        </div>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
        </div>

        <!-- ===== PENAMBAHAN INPUT DATA DIRI DI SINI ===== -->
        <div>
            <x-input-label for="institution" value="Institusi (Kampus, Organisasi, dll)" />
            <x-text-input id="institution" name="institution" type="text" class="mt-1 block w-full" :value="old('institution', $user->institution)" />
        </div>
        <div>
            <x-input-label for="position" value="Jabatan/Posisi" />
            <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" :value="old('position', $user->position)" />
        </div>
        <div>
            <x-input-label for="phone_number" value="Nomor Telepon/HP" />
            <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full" :value="old('phone_number', $user->phone_number)" />
        </div>
        <!-- ============================================= -->

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>
        </div>
    </form>

    <!-- ===== MODAL  ===== -->
    <div id="cropper-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center p-4 z-50" style="display: none;">
        <div class="bg-white p-1 rounded-lg shadow-xl w-full max-w-2xl flex flex-col max-h-[30vh]">
            <h3 class="text-xl font-bold mb-4 flex-shrink-0">Potong Gambar</h3>
            <!-- Wadah gambar yang fleksibel -->
            <div class="flex-grow overflow-hidden">
                <img id="image-to-crop" src="" class="max-w-full max-h-full">
            </div>
            <div class="mt-4 flex justify-end space-x-2 flex-shrink-0">
                <button type="button" id="cancel-crop" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Batal</button>
                <button type="button" id="confirm-crop" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Potong & Simpan</button>
            </div>
        </div>
    </div>
    <!-- ============================================= -->

    <!-- ===== JAVASCRIPT YANG SUDAH DIPERBAIKI TOTAL ===== -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('cropper-modal');
            const imageToCrop = document.getElementById('image-to-crop');
            const avatarInput = document.getElementById('avatar-input');
            const cropDataInput = document.getElementById('crop_data');
            const confirmCropBtn = document.getElementById('confirm-crop');
            const cancelCropBtn = document.getElementById('cancel-crop');
            let cropper;

            avatarInput.addEventListener('change', (e) => {
                const files = e.target.files;
                if (files && files.length > 0) {
                    const reader = new FileReader();
                    reader.onload = () => {
                        imageToCrop.src = reader.result;
                        modal.style.display = 'flex';
                        
                        // Hancurkan instance lama jika ada
                        if (cropper) {
                            cropper.destroy();
                        }
                        
                        // Inisialisasi cropper
                        cropper = new Cropper(imageToCrop, {
                            aspectRatio: 1,
                            viewMode: 1,
                            background: false,
                            responsive: true, // Membuat cropper menyesuaikan ukuran wadah
                            checkOrientation: false,
                        });
                    };
                    reader.readAsDataURL(files[0]);
                }
            });

            confirmCropBtn.addEventListener('click', () => {
                if (cropper) {
                    const canvas = cropper.getCroppedCanvas({ width: 512, height: 512 });
                    document.getElementById('avatar-preview').src = canvas.toDataURL();
                    cropDataInput.value = canvas.toDataURL('image/jpeg');
                }
                closeModal();
            });

            cancelCropBtn.addEventListener('click', closeModal);
            
            function closeModal() {
                modal.style.display = 'none';
                if (cropper) {
                    cropper.destroy();
                }
                avatarInput.value = '';
            }
        });
    </script>
</section>