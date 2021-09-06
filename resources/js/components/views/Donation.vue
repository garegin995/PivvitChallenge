<template>
    <div>
        
        <b-table striped hover :items="donations"></b-table>
    </div>
</template>

<script>
    export default {
        name: 'Donation',
        data() {
            return {
                donations: []
            }
        },
        mounted() {
            this.axios.get('donations').then(({data}) => {
                this.donations = data.donations
            })
        },
    }
</script>
