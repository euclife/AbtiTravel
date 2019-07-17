@extends('layouts.auth')
@section('title','Set Password')

@section('content')
 <section class="row no-gutter reverse-order">
      <div class="col-one-half middle padding">
        <div class="max-width-s">
          <h5>Masukkan Password Baru</h5>
          <form method="POST" action="{{ url('login/google/setPassword') }}">
            @csrf
            <div class="form-group">
              <label for="password">Password Baru:</label>
              <input id="password" type="password" name="password" required autocomplete="new-password">
               @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert" style="color: red">
                    {{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="password-confirm">Konfirmasi Password:</label>
              <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>
            <button type="submit" class="button button-primary full-width space-top" role="button">Simpan</a>
          </form>
        </div>
      </div>
      <div class="col-one-half bg-image-06 featured-image"></div>
    </section>

@endsection
