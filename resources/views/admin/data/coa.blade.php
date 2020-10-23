@extends('partials.admin.sidebar')
<title>Chart Of Account</title>

<div class="container">
<table class="table fixed-bottom">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Code</th>
      </tr>
    </thead>
    <tbody>
      @foreach($coa as $coas)
      <tr>
        <th scope="row"></th>
        <td>{{$coas->title}}</td>
        <td>{{$coas->code}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>