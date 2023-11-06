<x-guest-layout>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4 mx-4">
                        <div class="card-body p-4">



                            <div class="mt-4 flex items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}" class="text-center">

                                    <x-coreui-icon class="icon"
                                        style="width: 100px;height: 100px;margin: 0px auto;text-align: center;display: block;"
                                        icon="cil-envelope-closed" />

                                    <div class="my-4 text-sm text-gray-600 dark:text-gray-400">
                                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                    </div>

                                    @if (session('status') == 'verification-link-sent')
                                        @php
                                            $msg = __('A new verification link has been sent to the email address you provided during registration.');
                                        @endphp
                                        <x-auth-session-status class="mb-4 alert-info" :status="$msg" />
                                    @endif

                                    @csrf

                                    <div>
                                        <x-primary-button class="btn btn-success">
                                            {{ __('Resend Verification Email') }}
                                        </x-primary-button>
                                    </div>
                                </form>

                                <form method="POST" action="{{ route('logout') }}" class="text-center">
                                    @csrf

                                    <button type="submit" class="btn btn-link">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>
