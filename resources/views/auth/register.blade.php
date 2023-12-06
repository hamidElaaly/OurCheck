<x-guest-layout>
    <x-authentication-card>

        <x-validation-errors class="mb-4" />


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Latform - Login and Register Form Templates</title>
            <!-- Bootstrap -->
            <link rel="stylesheet" href="../../dist/vendor/bootstrap-4.5.3/css/bootstrap.min.css" type="text/css">
            <!-- Material design icons -->
            <link rel="stylesheet" href="../../dist/icons/material-design-icons/css/mdi.min.css" type="text/css">
            <!-- Google font -->
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
            <!-- Latform styles -->
            <link rel="stylesheet" href="../../dist/css/latform-style-1.min.css" type="text/css">
        </head>
        <body>
        <div class="form-wrapper">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="logo">
                            <h1><span style="color: red; font-weight: 800;">Our</span>Check</h1>
                        </div>
                        <div class="text-center my-5">
                            <h3 class="font-weight-bold mb-3">Créer un compte</h3>
                            <p class="text-muted">Vous pouvez créer un compte gratuit maintenant</p>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="fullname" value="{{ __('Name') }}">Nom et prénom</label>
                                <div class="form-icon-wrapper">
                                    <input id="name" class="form-control" type="text" name="name" :value="old('name')" required placeholder="Enter fullname"    />
                                    <i class="form-icon-left mdi mdi-account"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" value="{{ __('Email') }}">E-mail</label>
                                <div class="form-icon-wrapper">
                                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Entrez l'e-mail" />
                                    <i class="form-icon-left mdi mdi-email"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" value="{{ __('Password') }}">Mot de passe</label>
                                <div class="form-icon-wrapper">
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Entrer le mot de passe" />
                                    <i class="form-icon-left mdi mdi-lock"></i>
                                    <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-repeat" value="{{ __('Confirm Password') }}">retaper le mot de passe</label>
                                <div class="form-icon-wrapper">
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Entrer le mot de passe" />   
                                    <i class="form-icon-left mdi mdi-lock"></i>
                                    <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label for="phone" value="{{ __('phone') }}">Téléphone</label>
                                <div class="form-icon-wrapper">
                                    <input id="phone" class="form-control" type="text" name="phone" :value="old('phone')" required placeholder="Entrez votre téléphone" autofocus   />
                                    <i class="form-icon-left mdi mdi-phone"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" value="{{ __('address') }}">Adresse</label>
                                <div class="form-icon-wrapper">
                                    <input id="address" class="form-control" type="text" name="address" :value="old('address')" required placeholder="Entrez votre adresse" autofocus   />
                                    <i class="form-icon-left mdi mdi-map-marker"></i>
                                </div>
                            </div>
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />
            
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'._('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'._('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">S'inscrire</button>
                            </div>
                            <p class="text-center" {{ __('Already registered?') }}>Avez-vous déjà un compte?<a href="{{ route('login') }}">S'identifier</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jquery -->
        <script src="../../dist/vendor/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../dist/vendor/bootstrap-4.5.3/js/bootstrap.min.js"></script>
        <!-- Latform scripts -->
        <script src="../../dist/js/latform.min.js"></script>
        </body>
        </html>

    </x-authentication-card>
</x-guest-layout>