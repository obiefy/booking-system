@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('css/steps.css') }}">
@endsection

@section('content')



<main class="content" role="content">
	
	<section id="section1">
		<div class="container-fluid col-md-6 col-md-offset-3">

<!-- MultiStep Form -->
<form id="regForm" action="/submit_page.php" class="bg-grey">
  <h1>حجز {{ $agent->name }}</h1>
  <!-- One "tab" for each step in the form: -->
  




  
  <div class="tab">Birthday:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" class="btn btn-info" id="prevBtn" onclick="nextPrev(-1)">السابق</button>
      <button type="button" id="nextBtn" class="btn btn-info" onclick="nextPrev(1)">التالي</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<!-- /.MultiStep Form -->
	
		</div>
	</section>

</main> <!-- /content -->
	


@endsection


@section('script')
<script src="{{ asset('js/steps.js') }}"></script>
@endsection
