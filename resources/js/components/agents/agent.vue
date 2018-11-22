<template>
    <div class="card">
                        <img
                            class="card-img-top"
                            :src="image_source"
                            alt="Card image cap"
                        />
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ agent.name }}
                            </h5>
                            <p class="card-text"></p>
                            {{ agent.agent_type }}
                            <br/>
                            {{ agent.city }}
                            <br/>
                            {{ agent.address }}
                            <!-- @agent_show_type_label(["agent" => $agent])
                            @agent_show_city_label(["agent" => $agent])
                            @agent_show_price_label(["agent" => $agent]) -->

                            <br>
                            <br>

                            <span
                                class="badge badge-default float-left"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                            >
                                عرض العنوان
                            </span>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-primary btn-block">عرض</a>

                        </div>
                    </div>
</template>
{{ $agent->photos()->count() > 0 ? route('photo.get', $agent->photos[0]) : route('photo.default') }}
<script>
export default {
  props: ["agent"],
  computed: {
    image_source() {
      let photos = this.agent.photos;

      if (photos != undefined && photos.length > 0) {
        return "photo/" + photos[0].id;
      }
      return "default_photo";
    }
  }
};
</script>

