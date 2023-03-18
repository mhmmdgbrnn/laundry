@if ($edit)
<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-right: 12px; display:block;">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Karyawan</h5>
          <button wire:click ="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input wire:model="nama" type="text" class="form-control" id="nama">
                    @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input wire:model="email" type="email" class="form-control" id="email">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input wire:model="password" type="password" class="form-control" id="password">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input wire:model="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label for="hp" class="form-label">Hp</label>
                    <input wire:model="hp" type="number" class="form-control" id="hp" min="1">
                    @error('hp') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea wire:model="alamat" class="form-control" id="alamat" rows="3"></textarea>
                    @error('alamat') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button wire:click ="format" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button wire:click ="update" type="button" class="btn btn-success">Update</button>
        </div>
      </div>
    </div>
  </div>
@endif