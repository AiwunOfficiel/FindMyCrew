<?php

namespace Laravel\Ui;

class AuthRouteMethods
{
    /**
     * Register the typical authentication routes for an application.
     *
     * @param  array  $options
     * @return callable
     */
    public function auth()
    {
        return function ($options = []) {
            // Login Routes...
            if ($options['login'] ?? true) {
                $this->get('auth/connexion', 'Auth\LoginController@showLoginForm')->name('login');
                $this->post('auth/connexion', 'Auth\LoginController@login');
            }

            // Registration Routes...
            if ($options['register'] ?? true) {
                $this->get('auth/inscription', 'Auth\RegisterController@showRegistrationForm')->name('register');
                $this->post('auth/inscription', 'Auth\RegisterController@register');
            }

            // Password Reset Routes...
            if ($options['reset'] ?? true) {
                $this->resetPassword();
            }

            // Password Confirmation Routes...
            if ($options['confirm'] ??
                class_exists($this->prependGroupNamespace('Auth\ConfirmPasswordController'))) {
                $this->confirmPassword();
            }

            // Email Verification Routes...
            if ($options['verify'] ?? false) {
                $this->emailVerification();
            }
        };
    }

    /**
     * Register the typical reset password routes for an application.
     *
     * @return void
     */
    public function resetPassword()
    {
        return function () {
            $this->get('auth/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
            $this->post('auth/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            $this->get('auth/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
            $this->post('   uth/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
        };
    }

    /**
     * Register the typical confirm password routes for an application.
     *
     * @return void
     */
    public function confirmPassword()
    {
        return function () {
            $this->get('auth/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
            $this->post('auth/password/confirm', 'Auth\ConfirmPasswordController@confirm');
        };
    }

    /**
     * Register the typical email verification routes for an application.
     *
     * @return void
     */
    public function emailVerification()
    {
        return function () {
            $this->get('auth/email/verify', 'Auth\VerificationController@show')->name('verification.notice');
            $this->get('auth/email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
            $this->post('auth/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
        };
    }
}
