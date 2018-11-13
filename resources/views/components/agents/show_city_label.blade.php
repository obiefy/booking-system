@if($agent->city == "khartoum")
<span class="badge badge-danger">الخرطوم</span>
@elseif($agent->city == "omdurman")
<span class="badge badge-info">أمدرمان</span>
@else
<span class="badge badge-success">بحري</span>
@endif