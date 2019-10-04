<template>
  <div>
    <v-client-table :columns="columns" :data="data" :options="options">
      <a
        slot="uri"
        slot-scope="props"
        target="_blank"
        :href="props.row.uri"
        class="glyphicon glyphicon-eye-open"
      ></a>

      <div slot="child_row" slot-scope="props">
        The link to {{props.row.name}} is
        <a :href="props.row.uri">{{props.row.uri}}</a>
      </div>
    </v-client-table>

    <p class="vue-pagination-ad">
      <a target="_blank" href="https://www.npmjs.com/package/vue-pagination-2">vue-pagination-2</a>
    </p>
  </div>
</template>

<script>

import {ServerTable, ClientTable, Event} from 'vue-tables-2';

export default {
  data () { 
    return{
      columns: ["name", "code", "uri"],
      data: this.getData(),
      options: {
        headings: {
          name: "Country Name",
          code: "Country Code",
          uri: "View Record"
        },
        sortable: ["name", "code"],
        filterable: ["name", "code"]
      },
    };
  },
  methods: {
    getData() {
      return 
      [
        {
          code: "ZW",
          name: "Zimbabwe",
          created_at: "2015-04-24T01:46:50.459583",
          updated_at: "2015-04-24T01:46:50.459593",
          uri: "http://api.lobbyfacts.eu/api/1/country/245",
          id: 245
        }, {
          code: "SC",
          name: "Seychelles",
          created_at: "2015-04-24T01:46:50.344980",
          updated_at: "2015-04-24T01:46:50.344984",
          uri: "http://api.lobbyfacts.eu/api/1/country/197",
          id: 197
        }, {
          code: "RS",
          name: "Serbia",
          created_at: "2015-04-24T01:46:50.342496",
          updated_at: "2015-04-24T01:46:50.342501",
          uri: "http://api.lobbyfacts.eu/api/1/country/196",
          id: 196
        }
      ];
    }
  }
};
</script>

<style lang="scss" scoped>
.VuePagination {
  text-align: center;
}

.vue-title {
  text-align: center;
  margin-bottom: 10px;
}

.vue-pagination-ad {
  text-align: center;
}

.glyphicon.glyphicon-eye-open {
  width: 16px;
  display: block;
  margin: 0 auto;
}

th:nth-child(3) {
  text-align: center;
}

.VueTables__child-row-toggler {
  width: 16px;
  height: 16px;
  line-height: 16px;
  display: block;
  margin: auto;
  text-align: center;
}

.VueTables__child-row-toggler--closed::before {
  content: "+";
}

.VueTables__child-row-toggler--open::before {
  content: "-";
}
</style>