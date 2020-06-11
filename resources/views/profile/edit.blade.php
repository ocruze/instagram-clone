@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <div class="h2">Edit Profile</div>
                </div>

                <div class="form-group row">
                    <div class="col-2 text-right pr-5"><label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label></div>

                    <div class="col-10">
                        <input id="name"
                           name="name"
                           type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') ?? $user->name }}"
                           autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-2 text-right pr-5"><label for="bio" class="col-md-4 col-form-label">{{ __('Bio') }}</label></div>

                    <div class="col-10">
                        <input id="bio"
                           name="bio"
                           type="text"
                           class="form-control @error('bio') is-invalid @enderror"
                           value="{{ old('bio') ?? $user->profile->bio }}"
                           autocomplete="bio" autofocus>

                        @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-2 text-right pr-5"><label for="website" class="col-md-4 col-form-label">{{ __('Website') }}</label></div>

                    <div class="col-10">
                        <input id="website"
                           name="website"
                           type="text"
                           class="form-control @error('website') is-invalid @enderror"
                           value="{{ old('website') ?? $user->profile->website }}"
                           autocomplete="website" autofocus>

                        @error('website')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 text-right pr-5">
                        <label for="image" class="col-md-4 col-form-label">{{ __('Profile image') }}</label>
                    </div>

                    <div class="col-10">
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror

                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save profile</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
