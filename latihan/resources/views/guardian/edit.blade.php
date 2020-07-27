@extends('layout.app')

@section('title', 'Guardians')

@section('content')

<h1>Edit Guardian data</h1>


<table>
	<form action="/guardians/update/{{ $guardian->id }}" method="post">
		@csrf
		@method('PUT')
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="{{ $guardian->name }}"></td>
		</tr>
		<tr>
			<td>NIK:</td>
			<td><input type="number" name="nik" value="{{ $guardian->nik }}"></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>
				<input type="radio" value="l" name="gender" {{ $guardian->gender == 'l' ? 'checked' : null }}> Laki-laki
				<input type="radio" value="p" name="gender" {{ $guardian->gender == 'p' ? 'checked' : null }}> Perempuan
			</td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><input type="number" name="phone" value="{{ $guardian->phone }}"></td>
		</tr>
		<tr>
			<td>Birth Date</td>
			<td><input type="date" name="birth_date" value="{{ $guardian->birth_date }}"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address" id="" cols="30" rows="10">
				{{ $guardian->address }}
				</textarea></td>
		</tr>
		<tr>
			<td>Biological Parent?</td>
			<td>
				<input type="radio" value="1" name="is_parent" {{ $guardian->is_parent ? 'checked' : null }}>Yes
				<input type="radio" value="0" name="is_parent" {{ $guardian->is_parent ? null : 'checked' }}>No
			</td>
		</tr>
		<tr>
			<td style="text-align: center;"><input type="submit" value="Update Data"></td>
		</tr>
	</form>
</table>
@endsection