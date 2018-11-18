<div class="card">
                        <img
                            class="card-img-top"
                            src="{{ $agent->photos()->count() > 0 ? route('photo.get', $agent->photos[0]) : route('photo.default') }}"
                            alt="Card image cap"
                        />
                        <div class="card-body">
                            <h5 class="card-title">{{ $agent->name }}</h5>
                            <p class="card-text">{{ $agent->about }}</p>
                            @agent_show_type_label(["agent" => $agent])
                            @agent_show_city_label(["agent" => $agent])
                            @agent_show_price_label(["agent" => $agent])

                            <br>
                            <br>
                            @rating()

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
                            <a href="{{ route('agent.show_profile', $agent) }}" class="btn btn-primary btn-block">عرض</a>

                        </div>
                    </div>