@extends('layouts.master')

@section('title', 'Settings - Health Care Provider - Create')
@section('settings', 'active')

@section('content')
    <div class="col-md-4 offset-md-4">

        <div class="card">
            <div class="card-header">
                <h4 class="card-text text-center">New Health Care</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/settings/groups" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" class="form-control" name="health_care_name"  value="{{ old('health_care_name') }}" placeholder="Health Care Name" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="country"  value="{{ old('country') }}" placeholder="Country" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city"  value="{{ old('city') }}" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <textarea name="address" cols="5" rows="3" class="form-control" placeholder="Address">{{ old('address') }}</textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="number" class="form-control" name="min_day_appointment" value="{{ old('min_day_appointment') }}" placeholder="Min day appointment" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" class="form-control" name="max_day_appointment" value="{{ old('max_day_appointment') }}" placeholder="Max day appointment" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-danger" type="submit">ADD</button>
                        <a href="/settings/groups" class="btn btn-block btn-secondary">CANCEL</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection