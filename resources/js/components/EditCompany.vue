<template>
    <div>
        <h3 class="text-center">Edit Company</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateCompany">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="company.company_name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="company.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                company: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/Company/${this.$route.params.id}`)
                .then((res) => {
                    this.company = res.data;
                });
        },
        methods: {
            updateCompany() {
                this.axios
                    .patch(`http://localhost:8000/api/Company/${this.$route.params.id}`, this.company)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>
