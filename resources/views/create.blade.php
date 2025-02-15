@extends("layout.app")
@section("title", "New Karyawan")
@section("content")
 <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf

        <label for="Name">Name</label><br>
        <input id="Name" type="text" name="name" value="{{ old("name") }}"><br>
        @error('name')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="Age">Age</label><br>
        <input id="Age" type="number" name="age" value=><br>
        @error('age')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="Address">Address</label><br>
        <input id="Address" type="text" name="address" value=><br>
        @error('address')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="Phone Number">Phone Number</label><br>
        <input id="PhoneNumber" type="text" name="phone" value=><br>
        @error('phone')
            <p style="color:red;">{{ $message }}</p>
        @enderror


        <button type="submit">Submit</button>
    </form>
@endsection
