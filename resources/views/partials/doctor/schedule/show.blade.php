<h4 class="mt-3">Schedules</h4>
<hr>    

<div class="row">
    @forelse ($schedules as $schedule)
        <div class="col-md-3">
            <h5>{{ $schedule->day }}</h5>
            <h6 class="text-muted">{{ \Carbon\Carbon::parse($schedule->from_time)->format('h:ia') }} - {{ \Carbon\Carbon::parse($schedule->to_time)->format('h:ia') }}</h6>
        </div>
    @empty
        <div class="col-md-8 offset-2 mt-4">
            <h4 class="text-muted text-center"><strong>No schedules yet</strong></h4>
            <h6 class="text-muted text-center">when doctor create schedule, it'll show up here.</h6>
        </div>
    @endforelse
</div>