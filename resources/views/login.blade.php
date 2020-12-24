<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-body">

  {{-- shapes --}}
  <div class="tw-container tw-mx-auto lg:tw-px-16 sm:tw-px-16">
    <div class="tw-grid tw-grid-rows-1">
      <div class="tw-grid tw-grid-cols-2 lg:tw-content-center lg:tw-justify-center lg:tw-mt-20 md:tw-mt-20 sm:tw-mt-20 tw-mt-12 lg:tw-px-24 md:tw-px-0 tw-px-12 ">
        
        {{-- left shape --}}
        <div class="left-shape tw-flex tw-justify-center md:tw-px-12 sm:tw-px-12">
          <img class="tw-w-72" src="{{ asset('images/undraw_sign_in_e6hj.svg') }}" alt="">
        </div>

        {{-- right shape --}}
        <div class="right-shape tw-flex tw-justify-center">
          {{-- login card --}}
          <div class="login-card tw-h-64 tw-mt-28">
            <div class="card-header">
              <span class="tw-uppercase tw-text-yellow-400 tw-text-sm">Already Members</span>
            </div>
            {{-- form --}}
            <form action="">
              <div class="tw-flex tw-flex-col tw-pr-6 tw-pl-6 tw-mt-6">
                <input class="tw-border focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-yellow-400 tw-p-2 tw-rounded tw-text-grey-darkest" type="email" required placeholder="E-mail">
              </div>
              
              <div class="tw-flex tw-flex-col tw-pr-6 tw-pl-6 tw-mt-4">
                <input class="tw-border focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-yellow-400 tw-p-2 tw-rounded tw-text-grey-darkest tw-bg-gray-100" type="password" required placeholder="Enter your password">
              </div>

              <div class="tw-flex tw-flex-col tw-pr-6 tw-pl-6 tw-mt-8">
                <button class="tw-p-3 focus:tw-outline-none tw-text-white tw-rounded button tw-uppercase">Sign In</button>
              </div>
            </form>
            {{-- form end --}}

          </div>
          {{-- login card end --}}

          {{-- register span --}}
          <div class="tw-absolute tw-mt-96 tw-font-medium tw-text-center tw-text-sm">
            <span class="tw-text-white">Don't have account yet ?</span><br>
            <a href="#" class="tw-text-green-800"><u>Create an account</u></a>
          </div>
          {{-- register span end --}}
        </div>
        {{-- right shape end --}}
      </div>
    </div>
  </div>

</body>
</html>