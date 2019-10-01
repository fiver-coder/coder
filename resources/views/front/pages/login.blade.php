@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 information">
            معلومات درباره ای نحوه ورود به سایت
        </div>
        <div class="col-sm-12 col-md-6 login">
            <div class="login-by">
                <button type="submit" name="login-phone" data-toggle="modal" data-target=""
                    class="button login-phone">
                    ورود با شماره تماس <i class="fa-li fa fa-spinner fa-spin hide"></i>
                </button>
                <button type="submit" name="login-email" class="button login-email">
                    ورود با ایمیل <i class="fa-li fa fa-spinner fa-spin hide"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection