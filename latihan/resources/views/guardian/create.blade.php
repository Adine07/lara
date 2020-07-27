@extends('layout.app')

@section('title', 'Guardians')

@section('content')

<h1>Input Guardian data</h1>


<table border="1">
	<form action="/guardians/store" method="post">
		@csrf
		<tr>
			<td>Name:</td>
			<td colspan="2"><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>NIK:</td>
			<td colspan="2"><input type="number" name="nik"></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="radio" value="l" name="gender"> Laki-laki <input type="radio" value="p" name="gender"> Perempuan</td>
			<td></td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><input type="number" name="phone"></td>
		</tr>
		<tr>
			<td>Birth Date</td>
			<td><input type="date" name="birth_date"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address" id="" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<td>Biological Parent?</td>
			<td><input type="radio" value="1" name="is_parent">Yes</td>
			<td><input type="radio" value="0" name="is_parent">No</td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" value="Input Data"></td>
		</tr>
	</form>
</table>
@endsection