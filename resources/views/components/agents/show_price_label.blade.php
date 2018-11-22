@if($agent->prices->count() > 0)
<span class="badge badge-dark">
    {{ $agent->get_price() }}
    جنيه سوداني
</span>
@endif