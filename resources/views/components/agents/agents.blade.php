@if(!empty($agents) && $agents->count() > 0)
            <div class="row">
                @foreach($agents as $agent)
                <div class="col-md-6">
                    @agent(['agent' => $agent])
                </div>
                @endforeach
            </div>
            @else
            <div class="alert alert-warning">
                لا توجد نتائج رجاءا قم بعملية البحث
            </div>
            @endif