<div class="card">
                        <img
                            class="card-img-top"
                            src="{{ asset('/img/theme/img-1-1200x1000.jpg') }}"
                            alt="Card image cap"
                        />
                        <div class="card-body">
                            <h5 class="card-title">{{ $agent->name }}</h5>
                            <p class="card-text">{{ $agent->about }}</p>
                            @agent_show_type_label(["agent" => $agent])
                            @agent_show_city_label(["agent" => $agent])
                            @agent_show_price_label(["agent" => $agent])

                            

                            <span
                                class="badge badge-default float-left"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="{{ $agent->address != NULL ? $agent->address : 'لا بوجد عنوان' }}"
                            >
                                عرض العنوان
                            </span>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">حجز</a>

                            <div class="float-left">
                            @rating()
                            </div>
                        </div>
                    </div>