<!DOCTYPE html>
<html lang="en">
@extends('layout.app')

<body>
    @section('content')
        <div class="profile-wrapper">
            <h2>Profile Akun</h2>
            <div class="profile-akun">
                <div class="profile-picture-box">
                    <div class="profile-picture">
                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture">
                    </div>
                    <button class="profile-button" onclick="showOverlay()">Edit Photo</button>
                </div>
                <div class="profile-info">
                    <div class="profile-item">
                        <strong>Nama</strong>
                        <div class="profile-data">{{ Auth::user()->name }}</div>
                    </div>
                    <div class="profile-item">
                        <strong>Email</strong>
                        <div class="profile-data">{{ Auth::user()->email }}</div>
                    </div>
                    <div class="profile-item">
                        <strong>Jenis Pendaftar</strong>
                        <div class="profile-data">{{ Auth::user()->jenis_pendaftar }}</div>
                    </div>
                    <div class="profile-item">
                        <strong>Asal Sekolah</strong>
                        <div class="profile-data">{{ Auth::user()->asal_sekolah }}</div>
                    </div>
                    <div class="profile-item">
                        <strong>Jenjang yang Ditujui</strong>
                        <div class="profile-data">{{ Auth::user()->jenjang }}</div>
                    </div>
                    <div class="profile-item">
                        <strong>NIK</strong>
                        <div class="profile-data">{{ Auth::user()->nik }}</div>
                    </div>
                    <div class="profile-item">
                        <strong>NISN</strong>
                        <div class="profile-data">{{ Auth::user()->nisn }}</div>
                    </div>
                    <div class="profile-item">
                        <strong>Tempat Lahir</strong>
                        <div class="profile-data">{{ Auth::user()->tempat_lahir }}</div>
                    </div>
                    <div class="profile-item">
                        <strong>Tanggal Lahir</strong>
                        <div class="profile-data">{{ Auth::user()->tanggal_lahir }}</div>
                    </div>
                    <div class="profile-item">
                        <strong>Jenis Kelamin</strong>
                        <div class="profile-data">{{ Auth::user()->jenis_kelamin }}</div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}" class="logout-form">
                        @csrf
                        <button type="submit" class="profile-button">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div id="overlay" class="overlay">
            <div class="overlay-content">
                <span class="close-btn" onclick="closeOverlay()">&times;</span>
                <div class="profile-picture">
                    <img id="preview-image" src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                        alt="Profile Preview" style="width: 150px; height: 150px; object-fit: cover;">
                </div>
                <form action="/update-profile" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="file" name="profile_picture" id="profile_picture" accept="image/*"
                            onchange="previewImage(event)">
                        <label for="profile_picture" class="profile-button">Pilih Photo</label>
                    </div>
                    <button type="submit" class="profile-button">Update Photo</button>
                </form>
            </div>
        </div>
    @endsection

    <script>
        function showOverlay() {
            document.getElementById("overlay").style.display = "block";
        }

        function closeOverlay() {
            document.getElementById("overlay").style.display = "none";
        }

        function previewImage(event) {
            const preview = document.getElementById('preview-image');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                preview.src = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>
