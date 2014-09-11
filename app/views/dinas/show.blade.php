@extends('layout')
@section('title')
	Show Detail Dinas
@stop

@section('content')

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Show {{{$c->name}}}</div>
  <div class="panel-body">
  	@include('action', array('p' => 'Dinas', 'l'=>'dinas', 'a'=>'active'))
<br><br>
  	<ul class="list-group">
      <li class="list-group-item list-group-item-info">Detail pengajuan dinas : </li>
      <li class="list-group-item">Penanggung Jawab : <b>{{{$c->name}}}</b></li>
      <li class="list-group-item">Kegiatan : <b>{{{$c->task}}}</b></li>
      <li class="list-group-item list-group-item-warning">Mengajukan dinas bagi : </li>
    	<li class="list-group-item">Nama : <b>{{{$c->name2}}}</b></li>
      <li class="list-group-item">Tugas : <b>{{{$c->address}}}</b></li>
    	<li class="list-group-item">Lokasi : <b>{{{$c->venue}}}</b></li>
      <li class="list-group-item">Mulai : <b>{{{$c->start_date}}}</b></li>
      <li class="list-group-item">Sampai : <b>{{{$c->finish_date}}}</b></li>
      <li class="list-group-item">Wewenang kepada : <b>{{{$c->name3}}}</b></li>
      <li class="list-group-item">Pekerjaan yang dialihkan : <b>{{{$c->auth_task}}}</b></li>
    	<li class="list-group-item">Created : <b>{{$c->created_at}}</b></li>
    	<li class="list-group-item">Updated : <b>{{$c->updated_at}}</b></li>
  	</ul>

  </div>
</div>
@stop