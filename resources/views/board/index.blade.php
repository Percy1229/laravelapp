@extends('layouts.helloapp')

@section('title', 'Index')
@section('menubar')
    @parent
    ボードページ
@endsection 

@section('content')
   <table>
   <tr><th>Data</th></tr>
   @foreach ($items as $item)
   <tr>
   <td>{{$item->getData()}}</td>
   <td>{{$item->person['name']}}</td>
   </tr>
   @endforeach
   </table>
   
@endsection

@section('footer')
copyright 2020 moon.
@endsection