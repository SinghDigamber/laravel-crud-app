@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Password</td>
          @if ($showActions)
            <td class="text-center">Action</td>
          @endif
        </tr>
    </thead>
    <tbody>
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->phone}}</td>
            <td>{{$students->password}}</td>
            @if ($showActions)
              <td class="text-center">
                  <a href="{{ route('students.edit', $students->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                  <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                    </form>
              </td>
            @endif
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection