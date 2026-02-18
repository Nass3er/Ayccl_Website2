@extends('adminlte::page')

@section('title', __('adminlte::menu.settings') . ' - ' . __('adminlte::adminlte.edit'))

@section('content_header')
    <div class="row">
        <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="{{ route('admin.settings.mail', ['locale' => app()->getLocale()]) }}">{{ __('adminlte::menu.settings') }}</a></li>
            <li class="breadcrumb-item active">{{ __('adminlte::adminlte.edit') }}</li>
        </ol>
    </div>
@stop

@section('content')
    @include('admin-panel.modals')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-olive">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('adminlte::adminlte.edit') }} {{ __('adminlte::menu.mailSettings') }}</h3>
                    </div>
                    
                    <form action="{{ route('admin.settings.mail.update', ['id' => 1, 'locale' => app()->getLocale()]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-olive">{{ __('adminlte::adminlte.email') }} (Recipient & From Address)</label>
                                        <x-adminlte-input name="mail_from_address" value="{{ $settings['mail_from_address']->value ?? '' }}" placeholder="example@gmail.com" enable-old-support required>
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text text-olive"><i class="fas fa-envelope"></i></div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-olive">{{ __('adminlte::adminlte.name') }} (From Name)</label>
                                        <x-adminlte-input name="mail_from_name" value="{{ $settings['mail_from_name']->value ?? '' }}" placeholder="AYCCL Website" enable-old-support>
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text text-olive"><i class="fas fa-user"></i></div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-olive">Mailer</label>
                                        <x-adminlte-input name="mail_mailer" value="{{ $settings['mail_mailer']->value ?? 'smtp' }}" enable-old-support />
                                    </div>

                                    <div class="form-group">
                                        <label class="text-olive">Host</label>
                                        <x-adminlte-input name="mail_host" value="{{ $settings['mail_host']->value ?? 'smtp.gmail.com' }}" enable-old-support />
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h5 class="text-olive mb-3"><i class="fas fa-key mr-2"></i> SMTP Authentication</h5>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <x-adminlte-input name="mail_port" label="Port" value="{{ $settings['mail_port']->value ?? '587' }}" label-class="text-olive" enable-old-support />
                                </div>
                                <div class="col-md-4">
                                    <x-adminlte-input name="mail_encryption" label="Encryption" value="{{ $settings['mail_encryption']->value ?? 'tls' }}" label-class="text-olive" enable-old-support />
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <x-adminlte-input name="mail_username" label="Username" value="{{ $settings['mail_username']->value ?? '' }}" label-class="text-olive" enable-old-support />
                                </div>
                                <div class="col-md-6">
                                    <x-adminlte-input id="mail_password" name="mail_password" type="password" label="Password" value="{{ $settings['mail_password']->value ?? '' }}" label-class="text-olive" enable-old-support>
                                        <x-slot name="appendSlot">
                                            <div class="input-group-text text-olive">
                                                <i class="fas fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                                            </div>
                                        </x-slot>
                                    </x-adminlte-input>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <x-adminlte-button type="submit" label="{{ __('adminlte::adminlte.save') }}" theme="success" icon="fas fa-save" class="px-5"/>
                            <a href="{{ route('admin.settings.mail', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary px-5">
                                {{ __('adminlte::adminlte.cancel') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script>
        $(document).ready(function() {
            $('#togglePassword').click(function() {
                const passwordInput = $('#mail_password');
                const type = passwordInput.attr('type') === 'password' ? 'text' : 'password';
                passwordInput.attr('type', type);
                
                // Toggle the eye icon
                $(this).toggleClass('fa-eye fa-eye-slash');
            });
        });
    </script>
@stop
