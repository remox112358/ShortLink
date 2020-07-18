@extends('layouts.master')

@section('document-title', config('app.name'))

@section('content')
    <section class="section section--about">
        <div class="container">
            <div class="section__heading">Информация</div>
            <div class="section__content">
                <p><strong>ShortLink</strong> это сервис, который поможет Вам сократить длинные и неудобные ссылки. Сокращения будут работать неограниченное время. С помощью этих сокращений Вы сможете делиться разной информацией из разных источников с вашими друзями.</p>
                <p>Для использования возможностей <strong>ShortLink</strong> Вы должны ввести желаемую ссылку в поле которое находится внизу. После ввода нажмите на кнопку "Сократить". Программа сама создаст уникальную и короткую ссылку, которой Вы можете делиться с другими.</p>
            </div>
        </div>
    </section>

    <section class="section section--shorten bg-dark">
        <div class="container">
            <form method="POST" action="{{ route('shorten') }}">
                @csrf
                <div class="row align-items-center">
                    <div class="col-12 col-md-9 my-2">
                        <input type="text" class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" 
                               name="url" placeholder="Сократите свою ссылку"
                               value="{{ session()->get('result')->url ?? old('url') }}" autofocus>
                    </div>
                    <div class="col-12 col-md-3 my-2">
                        <button type="submit" class="btn btn-outline-light w-100">Сократить</button>
                    </div>    
                </div>
                @error('url')
                    <div class="help-block text-danger text-left">{{ $message }}</div>
                @enderror
            </form>
        </div>
    </section>

    @if (session()->has('result'))
        <section class="section section--result">
            <div class="container">
                <div class="section__heading">Результат</div>
                <input type="text" id="result" class="w-100 p-3" value="{{ session()->get('result')->getShortenUrl() }}" disabled>
            </div>
        </section>
    @endif
@endsection