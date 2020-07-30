@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md mb-4 h-screen">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Dashboard
                </div>

                <div class="w-full h-full p-6 mb-2">
                    <p class="text-gray-700 text-center mb-8 text-4xl"><a href="create-topic">新しい議題を追加する</a></p>
                    <p class="text-gray-700 text-center mb-8 text-4xl"><a href="">編集中の議題を確認する</a></p>
                    <p class="text-gray-700 text-center mb-8 text-4xl"><a href="">利用状況を確認する</a></p>
                    <p class="text-gray-700 text-center mb-8 text-4xl"><a href="">新しいトピックを追加する</a></p>
                    <p class="text-gray-700 text-center mb-8 text-4xl"><a href="">pull requestを確認する</a></p>
                    <p class="text-gray-700 text-center mb-8 text-4xl"><a href="">自分のpull requestを確認する。</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
