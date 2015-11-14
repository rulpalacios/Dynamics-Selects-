@extends('layouts.master')
	@section('content')
		{!! Form::select('state',$states,null,['id'=>'state']) !!}


		{!! Form::select('town',['placeholder'=>'Selecciona'],null,['id'=>'town']) !!}
	@endsection