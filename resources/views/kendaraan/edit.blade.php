<!DOCTYPE html>
<html>
<head>
    <title>Edit Kendaraan</title>
</head>
<body>
    <h1>Edit Kendaraan</h1>
    <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="no_mesin">No Mesin:</label>
        <input type="text" name="no_mesin" id="no_mesin" value="{{ old('no_mesin', $kendaraan->no_mesin) }}">
        @error('no_mesin')
            <p>{{ $message }}</p>
        @enderror

        <label for="jenis_mobil">Jenis Mobil:</label>
        <select name="jenis_mobil" id="jenis_mobil">
            <option value="mpv" {{ old('jenis_mobil', $kendaraan->jenis_mobil) == 'mpv' ? 'selected' : '' }}>MPV</option>
            <option value="city" {{ old('jenis_mobil', $kendaraan->jenis_mobil) == 'city' ? 'selected' : '' }}>City</option>
            <option value="suv" {{ old('jenis_mobil', $kendaraan->jenis_mobil) == 'suv' ? 'selected' : '' }}>SUV</option>
        </select>
        @error('jenis_mobil')
            <p>{{ $message }}</p>
        @enderror

        <label for="nama_mobil">Nama Mobil:</label>
        <input type="text" name="nama_mobil" id="nama_mobil" value="{{ old('nama_mobil', $kendaraan->nama_mobil) }}">
        @error('nama_mobil')
            <p>{{ $message }}</p>
        @enderror

        <label for="merk">Merk:</label>
        <select name="merk" id="merk">
            <option value="honda" {{ old('merk', $kendaraan->merk) == 'honda' ? 'selected' : '' }}>Honda</option>
            <option value="toyota" {{ old('merk', $kendaraan->merk) == 'toyota' ? 'selected' : '' }}>Toyota</option>
            <option value="daihatsu" {{ old('merk', $kendaraan->merk) == 'daihatsu' ? 'selected' : '' }}>Daihatsu</option>
        </select>
        @error('merk')
            <p>{{ $message }}</p>
        @enderror

        <label for="kapasitas">Kapasitas:</label>
        <input type="text" name="kapasitas" id="kapasitas" value="{{ old('kapasitas', $kendaraan->kapasitas) }}">
        @error('kapasitas')
            <p>{{ $message }}</p>
        @enderror

        <label for="tarif">Tarif:</label>
        <input type="number" name="tarif" id="tarif" value="{{ old('tarif', $kendaraan->tarif) }}">
        @error('tarif')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Update</button>
    </form>
</body>
</html>
