<template>
    <div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    البحث عن القاعات 
                    <span class="pull-left">
                        (  ) نتيجة
                    </span>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <select name="city" class="form-control">
                                <option value="">المدينة</option>
                                <option value="khartoum">الخرطوم</option>
                                <option value="omdurman">أمدرمان</option>
                                <option value="bahri">بحري</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="الخرطوم ، امدرمان .."
                            />
                        </div>
                        <div class="form-group">
                            <div
                                class="custom-control custom-radio custom-control-inline"
                            >
                                <input
                                    type="radio"
                                    id="hall-control"
                                    name="agent_type"
                                    class="custom-control-input"
                                    value="hall"
                                />
                                <label
                                    class="custom-control-label"
                                    for="hall-control"
                                >
                                    صالة أعراس</label
                                >
                            </div>
                            <div
                                class="custom-control custom-radio custom-control-inline"
                            >
                                <input
                                    type="radio"
                                    id="conference-control"
                                    name="agent_type"
                                    class="custom-control-input"
                                    value="venue"
                                />
                                <label
                                    class="custom-control-label"
                                    for="conference-control"
                                    >قاعة مؤتمرات</label
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="customRange3">السعر</label>
                            <p id="priceOutput">100</p>
                            <input
                                type="range"
                                name="price"
                                class="custom-range"
                                min="500"
                                max="50000"
                                step="1500"
                                id="customRange3"
                                onchange="updatePriceData(this.value);"
                            />
                        </div>

                        <div class="form-group">
                            <button
                                type="submit"
                                class="btn btn-primary btn-block"
                            >
                                بحث
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4" v-for="agent in agents" :key="agent.id">
                    <show-agent :agent="agent"></show-agent>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
import searchAgent from "./agents/agent";
export default {
  props: ["agents"],
  components: {
    "show-agent": searchAgent
  },
  created() {
    this.search();
  },
  methods: {
    search() {
      this.agents = this.agents.filter(function(agent) {
        return agent.city === "khartoum";
      });
    }
  }
};
</script>

