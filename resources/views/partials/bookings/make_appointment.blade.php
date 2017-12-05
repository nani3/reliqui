    <div class="col-md-4 mt-3">
        <div class="card">
            <div class="card-header card-header-active text-center"><strong>Booking Details</strong></div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex w-100 justify-content-between">
                    <small>AN: <strong>{{ old('appoint_number', $appointment_number) }}</strong></small>
                    <small>{{ \Carbon\Carbon::parse($date_of_visit)->format('l, d F Y') }}</small>
                </li>
            </ul>
            <div class="card-body">
                <small class="text-uppercase"><strong>RS. RELIQUI</strong></small>
                <div class="d-flex w-100 justify-content-between">
                    <small class="text-muted">Queue Number</small>
                    <small class="text-muted">{{ $queue_number }}</small>
                </div>
                <small class="text-uppercase"><strong>{{ $doctor->name }}</strong></small>
                <div class="d-flex w-100 justify-content-between">
                    <small class="text-muted">{{ $doctor->polyclinic->name }}</small>
                    <small class="text-muted">{{ $doctor->schedule->first()->from_time }} to {{ $doctor->schedule->first()->to_time }}</small>
                </div>
            </div>

            <div class="card-footer">
                <div class="d-flex w-100 justify-content-between">
                    <small>Price of service</small>
                    <small>Rp{{ $doctor->price_of_service }}</small>
                </div>
                <div class="d-flex w-100 justify-content-between mt-1">
                    <small><h6><strong>Total Payment</strong></h6></small>
                    <small><h6><strong style="color: red;">Rp{{ $doctor->price_of_service }}</strong></h6></small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8 mt-3">

        <div class="alert alert-info text-center" role="alert">
            <strong>Info!</strong> You can only make payments at the counter.
        </div>

        <div class="card">
            <div class="card-body">
                <form action="/appointments" method="POST">
                    {{ csrf_field() }}

                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                    <input type="hidden" name="date_of_visit" value="{{ $date_of_visit }}">
                    <input type="hidden" name="queue_number" value="{{ $queue_number }}">

                    <div class="form-row">
                        <div class="form-group col-12">
                            <textarea name="patient_condition" class="form-control" placeholder="explain your condition..."></textarea>
                            <span class="help-block text-muted"><small>*max 160 character</small></span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger float-right">Make Appointment</button>
                </form>
            </div>
        </div>

    </div>