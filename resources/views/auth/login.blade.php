@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content has-text-right">
                    <h1 class="title"> الدخول</h1>
                        <form action="{{ route('login') }}" method="POST" role="form">
                            {{ csrf_field() }}
                            <div class="field">
                                <label for="email" class="label">الايميل </label>
                                <p class="control">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                                </p>
                                @if( $errors->has('email'))
                                    <p class="help is-danger"> {{ $errors->first('email')}}</p>
                                @endif
                            </div>

                            <div class="field">
                                <label for="password" class="label">كلمة المرور </label>
                                <p class="control">
                                    <input class=" input {{ $errors->has('password') ? 'is-danger' : '' }} " type="password" id="password" name="password">
                                </p>

                                @if( $errors->has('password'))
                                    <p class="help is-danger"> {{ $errors->first('password')}}</p>
                                @endif                            </div>
                            <div class="field">
                                <p class="control">
                                    <b-checkbox name="remmber" class="m-t-20"> تذكرني</b-checkbox>        
                                </p>
                                
                            </div>
                            
                            <button class="button is-primary is-outlined is-fullwidth m-t-30">الدخول</button>
                        </form> {{-- end of form --}}
                </div>
            </div> {{-- end of card content --}}
            <h5 class="has-text-centered m-t-20"><a href="{{ route('password.request') }}"  class="is-muted"> نسيت كلمة المرور</a></h5>
        </div>
    </div>

@endsection
