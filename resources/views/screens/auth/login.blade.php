<x-layouts.guest title="Login">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <span class="avatar avatar-1" style="background-image: url({{ asset('assets/static/BW_logo.jpg') }})">
                </span>
            </div>
            @if ($errors->any())
                <x-alert :messages="$errors->all()" type="danger" />
            @endif
            <div class="card card-md">
                <div class="card-body">
                    <div class="card-body login-card-body">
                        <h2 class="h2 text-center mb-4">Login to your account</h2>
                        <form method="post" action="{{ route('auth.handleLogin') }}" id="login-form">
                            @csrf
                            <div class="form-group mb-3">
                                <x-forms.label for="email" label="Email" :isRequired="true" />
                                <x-forms.text name="email" label="Email" idSelector="email" placeholder="Enter email"
                                    :value="old('email')" />
                            </div>
                            <div class="form-group mb-3">
                                <x-forms.label for="password" label="Password" :isRequired="true" />
                                <x-forms.text type="password" name="password" label="Password" idSelector="password"
                                    placeholder="Enter password" :value="old('password')" />
                            </div>
                            <div class="form-footer text-center">
                                <x-button.base class="btn-primary w-50" type="submit" label="Login" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        @vite(['resources/js/screens/auth/login.js'])
    @endpush
</x-layouts.guest>
