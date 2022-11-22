@extends('layouts.sidebar')

@section('content')
     
                    {{--                <div class="profile-cover">--}}
                    {{--                    <div class="profile-cover-wrap">--}}

                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                    <div class="text-center mb-5">--}}
                    {{--                        <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">--}}
                    {{--                            <img class="avatar-img" src="{{asset('assets/img/profiles/avatar-02.jpg')}}"--}}
                    {{--                                 alt="Profile Image">--}}
                    {{--                            <input type="file" id="avatar_upload">--}}
                    {{--                            <span class="avatar-edit">--}}
                    {{--<i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>--}}
                    {{--</span>--}}
                    {{--                        </label>--}}
                    {{--                        <h2>{{\Illuminate\Support\Facades\Auth::user()->firstname}} {{\Illuminate\Support\Facades\Auth::user()->lastname}}--}}
                    {{--                            <i class="fas fa-certificate text-primary small" data-toggle="tooltip" data-placement="top"--}}
                    {{--                               title="" data-original-title="Verified"></i></h2>--}}
                    {{--                        <ul class="list-inline">--}}
                    {{--                            <li class="list-inline-item">--}}
                    {{--                                <i class="far fa-building"></i>--}}
                    {{--                                <span>{{\Illuminate\Support\Facades\Auth::user()->business->name}}</span>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="list-inline-item">--}}
                    {{--                                <i class="fas fa-map-marker-alt"></i> {{\Illuminate\Support\Facades\Auth::user()->business->address}}--}}
                    {{--                            </li>--}}
                    {{--                            <li class="list-inline-item">--}}
                    {{--                                <i class="far fa-calendar-alt"></i>--}}
                    {{--                                <span>{{\Illuminate\Support\Facades\Auth::user()->dob}}</span>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body card-body-height">
                                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.two-factor-authentication-form')
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body card-body-height">
                                    @livewire('profile.logout-other-browser-sessions-form')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body card-body-height">
                                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.update-password-form')
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
@endsection

@section('scripts')
    @livewireScripts
 
@endsection

@section('styles')
    <!-- Styles -->
 
    @livewireStyles
@endsection
