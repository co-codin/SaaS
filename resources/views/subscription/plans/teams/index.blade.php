@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <ul class="list-group">
        @foreach ($plans as $plan)
          <li class="list-group-item">
            <a href="{{route('subscription.index')}}">{{$plan->name}} ($ {{$plan->price}})</a>
          </li>
        @endforeach

        <li class="list-group-item">
          <a href="{{route('plans.index')}}">Users plans</a>
        </li>
      </ul>
    </div>
  </div>
@endsection
