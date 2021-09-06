<template>
  <div>
    <b-form @submit="onSubmit" @reset="onReset" >
      <b-form-group id="input-group-2" label="Donor name:" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.donorName"
          placeholder="Enter Donor name"
          required
        ></b-form-input>
      </b-form-group>

      <b-form-group id="input-group-3" label="Campaign:" label-for="input-3">
        <b-form-select
          id="input-3"
          v-model="form.campaignID"
          :options="campaigns"
          value-field="id"
          text-field="title"
          required
        ></b-form-select>
      </b-form-group>

      <b-form-group id="input-group-2" label="Amount:" label-for="input-2">
        <b-form-input
          id="input-2"
          type="number"
          v-model="form.amount"
          placeholder="Enter amount"
          required
        ></b-form-input>
      </b-form-group>

      <b-button type="submit" variant="primary">Submit</b-button>
    </b-form>
    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
    </b-card>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        form: {
            donorName: '',
            campaignID: '',
            amount: ''
        },
        campaigns: []
      }
    },
    mounted() {
        this.axios.get('campaigns').then(({data}) => {
            this.campaigns = data.campaigns
            this.form.campaignID = this.campaigns.length ? this.campaigns[0].id : ''
        })
    },
    methods: {
      onSubmit(event) {
        event.preventDefault()
        this.axios.post('donations', this.form).then(res => {
            console.log(res.status);
        })
      },
      onReset(event) {
        event.preventDefault()
        // Reset our form values
        this.form.email = ''
        this.form.name = ''
        this.form.food = null
        this.form.checked = []
        // Trick to reset/clear native browser form validation state
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
    }
  }
</script>