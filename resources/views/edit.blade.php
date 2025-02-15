@extends("layout.app")

@section("title", "Edit Karyawan")

@section("content")
 <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="Name">Name</label><br>
        <input id="Name" type="text" name="name" value="{{ old('name', $karyawan->name) }}"><br>
        @error('name')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="Age">Age</label><br>
        <input id="Age" type="number" name="age" value="{{ old('age', $karyawan->age) }}"><br>
        @error('age')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="Address">Address</label><br>
        <input id="Address" type="text" name="address" value="{{ old('address', $karyawan->address) }}"><br>
        @error('address')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="Phone Number">Phone Number</label><br>
        <input id="PhoneNumber" type="text" name="phone" value="{{ old('phone', $karyawan->phone) }}"><br>
        @error('phone')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <button type="submit">Update</button>
    </form>
@endsection
