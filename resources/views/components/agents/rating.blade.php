@php
$rating = $agent->rating();
@endphp
@if($rating == 1)

<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

@elseif($rating == 2)

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>


@elseif($rating == 3)

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>


@elseif($rating == 4)

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

@elseif($rating == 5)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>

@else

<span class="fa fa-star"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
@endif