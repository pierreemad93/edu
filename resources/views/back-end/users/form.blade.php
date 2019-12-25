{{csrf_field()}}
<div class="row">
    <div class="col-md-5">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">username</label>
            <input type="text" class="form-control" name="username" value="{{isset($row) ? $row->name: ''}}">
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email address</label>
            <input type="email"  name="email" class="form-control" value="{{isset($row) ? $row->email: ''}}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">First Name</label>
            <input type="text" name="first-name"  class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Last Name</label>
            <input type="text" name="last-name" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Password</label>
            <input type="password" name="password" class="form-control">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group bmd-form-group">--}}
    {{--                                    <label class="bmd-label-floating">confirm password</label>--}}
    {{--                                    <input type="password" name="confirm-pass" class="form-control">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
</div>
