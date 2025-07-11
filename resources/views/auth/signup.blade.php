{{-- 
@extends('layouts.base', ['cssClass' => 'page-signup'])

@section('title','SignUp')

@section('childContent')
  <main>
    <div class="container-small page-login">
      <div class="flex" style="gap: 5rem">
        <div class="auth-page-form">
          <div class="text-center">
            <a href="/">
              <img src="/img/logoipsum-265.svg" alt="" />
            </a>
          </div>
          <h1 class="auth-page-title">Signup</h1>

          <form action="" method="post">
            <div class="form-group">
              <input type="email" placeholder="Your Email" />
            </div>
            <div class="form-group">
              <input type="password" placeholder="Your Password" />
            </div>
            <div class="form-group">
              <input type="password" placeholder="Repeat Password" />
            </div>
            <hr />
            <div class="form-group">
              <input type="text" placeholder="First Name" />
            </div>
            <div class="form-group">
              <input type="text" placeholder="Last Name" />
            </div>
            <div class="form-group">
              <input type="text" placeholder="Phone" />
            </div>
            <button class="btn btn-primary btn-login w-full">Register</button>

            <div class="grid grid-cols-2 gap-1 social-auth-buttons">
              <button
                class="btn btn-default flex justify-center items-center gap-1"
              >
                <img src="/img/google.png" alt="" style="width: 20px" />
                Google
              </button>
              <button
                class="btn btn-default flex justify-center items-center gap-1"
              >
                <img src="/img/facebook.png" alt="" style="width: 20px" />
                Facebook
              </button>
            </div>
            <div class="login-text-dont-have-account">
              Already have an account? -
              <a href="/login.html"> Click here to login </a>
            </div>
          </form>
        </div>
        <div class="auth-page-image">
          <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
        </div>
      </div>
    </div>
  </main>
@endsection
 --}}

 {{-- <x-base-layout title="SignUp" class="page-signup">
    <main>
    <div class="container-small page-login">
      <div class="flex" style="gap: 5rem">
        <div class="auth-page-form">
          <div class="text-center">
            <a href="/">
              <img src="/img/logoipsum-265.svg" alt="" />
            </a>
          </div>
          <h1 class="auth-page-title">Signup</h1>

          <form action="" method="post">
            <div class="form-group">
              <input type="email" placeholder="Your Email" />
            </div>
            <div class="form-group">
              <input type="password" placeholder="Your Password" />
            </div>
            <div class="form-group">
              <input type="password" placeholder="Repeat Password" />
            </div>
            <hr />
            <div class="form-group">
              <input type="text" placeholder="First Name" />
            </div>
            <div class="form-group">
              <input type="text" placeholder="Last Name" />
            </div>
            <div class="form-group">
              <input type="text" placeholder="Phone" />
            </div>
            <button class="btn btn-primary btn-login w-full">Register</button>

            <div class="grid grid-cols-2 gap-1 social-auth-buttons">
              <button
                class="btn btn-default flex justify-center items-center gap-1"
              >
                <img src="/img/google.png" alt="" style="width: 20px" />
                Google
              </button>
              <button
                class="btn btn-default flex justify-center items-center gap-1"
              >
                <img src="/img/facebook.png" alt="" style="width: 20px" />
                Facebook
              </button>
              
              <x-google-button></x-google-button>
              <x-facebook-button></x-facebook-button>
            </div>
            <div class="login-text-dont-have-account">
              Already have an account? -
              <a href="/login.html"> Click here to login </a>
            </div>
          </form>
        </div>
        <div class="auth-page-image">
          <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
        </div>
      </div>
    </div>
  </main>
 </x-base-layout> --}}


 <x-guest-layout title="SignUp" class="page-signup">
    <main>
      <h1 class="auth-page-title">Signup</h1>

      <form action="" method="post">
        <div class="form-group">
          <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
          <input type="password" placeholder="Your Password" />
        </div>
        <div class="form-group">
          <input type="password" placeholder="Repeat Password" />
        </div>
        <hr />
        <div class="form-group">
          <input type="text" placeholder="First Name" />
        </div>
        <div class="form-group">
          <input type="text" placeholder="Last Name" />
        </div>
        <div class="form-group">
          <input type="text" placeholder="Phone" />
        </div>
        <button class="btn btn-primary btn-login w-full">Register</button>
      </form>

    </main>

    <x-slot:footerLink>
      Already have an account? -
      <a href="/login"> Click here to login </a>
    </x-slot:footerLink>

 </x-guest-layout>

{{-- <x-link-button link="/login" text="Click here to login" class="login-text-dont-have-account" >
    Already have an account? -
</x-link-button> --}}

