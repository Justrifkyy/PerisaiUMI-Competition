<form method="POST" action="{{ route('submission.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <x-input-label for="title" :value="__('Judul Paper/Abstrak')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>
         <div>
            <x-input-label for="authors" :value="__('Penulis (Contoh: John Doe, Jane Smith)')" />
            <x-text-input id="authors" class="block mt-1 w-full" type="text" name="authors" :value="old('authors')" required />
            <x-input-error :messages="$errors->get('authors')" class="mt-2" />
        </div>
         <div>
            <x-input-label for="topic" :value="__('Topik Penelitian')" />
            <x-text-input id="topic" class="block mt-1 w-full" type="text" name="topic" :value="old('topic')" required />
            <x-input-error :messages="$errors->get('topic')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="paper" :value="__('File Paper (.doc, .docx, .pdf)')" />
            <input id="paper" name="paper" type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 mt-2" required>
            <x-input-error :messages="$errors->get('paper')" class="mt-2" />
        </div>
    </div>

    <div class="flex items-center justify-end mt-6">
        <x-primary-button>
            {{ __('Submit Paper') }}
        </x-primary-button>
    </div>
</form>