@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center" style="margin-bottom: 20px;">
                            <img src="{{ url('/images/logo.png') }}" style="width: 150px;">
                        </div>

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label class="col-md-12 control-label"><i class="fas fa-user"></i> รหัสผู้ใช้งาน</label>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="username"
                                           value="{{ old('username') }}">

                                    @if ($errors->has('username'))
                                        <span class="form-text text-muted">
                                            {{ $errors->first('username') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-12 control-label"><i class="fas fa-key"></i> รหัสผ่าน</label>

                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="form-text text-muted">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    {{-- <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                        เข้าสู่ระบบ
                                    </button> --}}

                                    <a href="{{ url('/') }}" class="btn btn-primary btn-lg" style="width: 100%;">
                                        เข้าสู่ระบบ
                                    </a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
