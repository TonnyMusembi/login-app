<template>
    <div>
        <h2 class="text-center">Products List</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Detail</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="company in company_name" :key="company.id">
                <td>{{ company.id }}</td>
                <td>{{ company.company_name }}</td>
                <td>{{ company.detail }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: company.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteCompany(company.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                company_name: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/Company/')
                .then(response => {
                    this.company_name = response.data;
                });
        },
        methods: {
            deleteCompany(id) {
                this.axios
                    .delete(`http://localhost:8000/api/Company/${id}`)
                    .then(response => {
                        let i = this.company_name.map(data => data.id).indexOf(id);
                        this.company_name.splice(i, 1)
                    });
            }
        }
    }
</script>
