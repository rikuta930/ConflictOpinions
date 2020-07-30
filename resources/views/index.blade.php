@extends('layouts/app')
@section('content')
    <div class="container min-h-full min-w-full">
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"> 
            <a href="#"><img class="w-3/4 rounded mx-auto" src="{{asset('/img/politics.png')}}" alt="politics"></a>
            <img class="w-3/4 rounded mx-auto" src="{{asset('/img/helthcare.png')}}" alt="helth">
            <img class="w-3/4 rounded mx-auto" src="{{asset('/img/economy.png')}}" alt="economy">
            <img class="w-3/4 rounded mx-auto" src="{{asset('/img/gender.png')}}" alt="gender">
            <img class="w-3/4 rounded mx-auto" src="{{asset('/img/global.png')}}" alt="global">
            <img class="w-3/4 rounded mx-auto" src="{{asset('/img/education.png')}}" alt="education">
            <img class="w-3/4 rounded mx-auto" src="{{asset('/img/technology.png')}}" alt="technology">
            <img class="w-3/4 rounded mx-auto" src="{{asset('/img/sports.png')}}" alt="sports">
        </div>
    </div>
@endsection