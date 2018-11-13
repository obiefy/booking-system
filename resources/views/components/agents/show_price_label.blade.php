@if($agent->prices->count() > 0)
<span class="badge badge-dark">
    {{ $agent->prices[0]->price}}
    جنيه سوداني
</span>
@endif