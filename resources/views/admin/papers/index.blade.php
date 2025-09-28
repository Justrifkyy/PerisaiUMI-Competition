<x-admin-layout>
    <x-slot name="header">
        Manajemen Paper
    </x-slot>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <!-- ... (kode notifikasi sukses) ... -->

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <!-- ... (kode thead) ... -->
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($submissions as $submission)
                    <tr>
                        <td class="px-6 py-4">{{ Str::limit($submission->title, 40) }}</td>
                        <td class="px-6 py-4">{{ $submission->user->name }}</td>
                        <td class="px-6 py-4">{{ $submission->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-4">
                            <!-- Tombol untuk membuka modal -->
                            <button onclick="openReviewModal({{ $submission }})" class="px-4 py-2 bg-indigo-600 text-white text-xs font-semibold rounded-md hover:bg-indigo-700">
                                Ubah Status
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ Storage::url($submission->paper_path) }}" target="_blank" class="text-indigo-600 hover:text-indigo-900">Unduh Paper</a>
                        </td>
                    </tr>
                    @empty
                    <!-- ... (kode jika kosong) ... -->
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal untuk Review Paper -->
    <div id="reviewModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50" style="display: none;">
        <div class="bg-white p-8 rounded-lg shadow-xl w-full max-w-2xl">
            <h3 class="text-2xl font-bold mb-4">Update Status Paper</h3>
            <form id="reviewForm" method="POST" action="">
                @csrf
                @method('PATCH')
                
                <p class="mb-2"><strong>Judul:</strong> <span id="modalPaperTitle"></span></p>

                <!-- Status Dropdown -->
                <div>
                    <label for="modalStatus" class="block font-medium text-sm text-gray-700">Status</label>
                    <select name="status" id="modalStatus" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                        <option value="Submitted">Submitted</option>
                        <option value="Under Review">Under Review</option>
                        <option value="Accepted">Accepted</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Revision Needed">Revision Needed</option>
                    </select>
                </div>

                <!-- Textarea untuk Catatan -->
                <div class="mt-4">
                    <label for="modalAdminNotes" class="block font-medium text-sm text-gray-700">Catatan Reviewer (Wajib diisi jika Ditolak atau Perlu Revisi)</label>
                    <textarea name="admin_notes" id="modalAdminNotes" rows="6" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                </div>

                <!-- Tombol Aksi -->
                <div class="mt-6 flex justify-end space-x-4">
                    <button type="button" onclick="closeReviewModal()" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">Simpan & Kirim Notifikasi</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openReviewModal(submission) {
            // Set action URL form
            document.getElementById('reviewForm').action = `/admin/papers/${submission.id}`;
            // Isi data ke dalam modal
            document.getElementById('modalPaperTitle').innerText = submission.title;
            document.getElementById('modalStatus').value = submission.status;
            document.getElementById('modalAdminNotes').value = submission.admin_notes || '';
            // Tampilkan modal
            document.getElementById('reviewModal').style.display = 'flex';
        }

        function closeReviewModal() {
            document.getElementById('reviewModal').style.display = 'none';
        }
    </script>
</x-admin-layout>