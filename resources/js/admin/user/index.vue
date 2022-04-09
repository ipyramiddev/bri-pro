<template>
    <div>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
        </div>
        <b-container fluid>
            <!-- User Interface controls -->
            <b-row>
                <b-col lg="4" class="my-1">
                    <b-form-group
                    label="Filter"
                    label-for="filter-input"
                    label-cols-sm="2"
                    label-align-sm="right"
                    label-size="sm"
                    class="mb-0"
                    >
                        <b-input-group size="sm">
                            <b-form-input
                            id="filter-input"
                            v-model="filter"
                            type="search"
                            placeholder="Type to Search"
                            ></b-form-input>

                            <b-input-group-append>
                            <b-button :disabled="!filter" @click="filter = ''">Clear</b-button>
                            </b-input-group-append>
                        </b-input-group>
                    </b-form-group>
                </b-col>

                <b-col lg="8" class="my-1">
                    <b-form-group
                    label="Filter On"
                    label-cols-sm="2"
                    label-align-sm="right"
                    label-size="sm"
                    class="mb-0"
                    v-slot="{ ariaDescribedby }"
                    >
                    <b-form-checkbox-group
                        v-model="filterOn"
                        :aria-describedby="ariaDescribedby"
                        class="mt-1"
                    >
                        <b-form-checkbox value="name">Name</b-form-checkbox>
                        <b-form-checkbox value="email">Email Address</b-form-checkbox>
                        <b-form-checkbox value="phone">Phone</b-form-checkbox>
                        <b-form-checkbox value="role">Role</b-form-checkbox>
                        <b-form-checkbox value="permission">Permission</b-form-checkbox>
                    </b-form-checkbox-group>
                    </b-form-group>
                </b-col>

                <b-col md="3" class="my-1">
                    <b-form-group
                    label="Per page"
                    label-for="per-page-select"
                    label-cols-lg="4"
                    label-align-sm="center"
                    label-size="sm"
                    class="mb-0"
                    >
                        <b-form-select
                            id="per-page-select"
                            v-model="perPage"
                            :options="pageOptions"
                            size="sm"
                        ></b-form-select>
                    </b-form-group>
                </b-col>

                <b-col md="6"></b-col>

                <b-col md="3" class="my-1">
                    <b-pagination
                    v-model="currentPage"
                    :total-rows="totalRows"
                    :per-page="perPage"
                    align="fill"
                    size="sm"
                    class="my-0"
                    ></b-pagination>
                </b-col>
            </b-row>

            <!-- Main table element -->
            <b-table
            responsive
            striped hover
            :items="items"
            :fields="fields"
            :current-page="currentPage"
            :per-page="perPage"
            :filter="filter"
            :filter-included-fields="filterOn"
            stacked="md"
            show-empty
            small
            @filtered="onFiltered"
            >
                <template v-slot:cell(index)="data">
                    {{data.index + 1}}
                </template>
                <template #cell(email)="data">
                    <router-link :to="{name: 'user-profile', params: {id: data.item.id}}">{{data.value}}</router-link>
                </template>
            </b-table>

            <b-row> 
                <b-col md="3" class="my-1">
                    <b-form-group
                    label="Per page"
                    label-for="per-page-select"
                    label-cols-lg="4"
                    label-align-sm="center"
                    label-size="sm"
                    class="mb-0"
                    >
                        <b-form-select
                            id="per-page-select"
                            v-model="perPage"
                            :options="pageOptions"
                            size="sm"
                        ></b-form-select>
                    </b-form-group>
                </b-col>

                <b-col md="6"></b-col>

                <b-col md="3" class="my-1">
                    <b-pagination
                    v-model="currentPage"
                    :total-rows="totalRows"
                    :per-page="perPage"
                    align="fill"
                    size="sm"
                    class="my-0"
                    ></b-pagination>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                items: '',
                fields: [
                { key: 'index', label: ''},
                { key: 'name', label: 'Name'},
                { key: 'email', label: 'Email Address'},
                { key: 'role', label: 'Role'},
                { key: 'permission', label: 'Permission'},
                { key: 'phone', label: 'Phone'}
                ],
                totalRows: 1,
                currentPage: 1,
                perPage: 5,
                pageOptions: [5, 10, 15, { value: 100, text: "Show a lot" }],
                filter: null,
                filterOn: []
            }
        },
        mounted() {
            // Set the initial number of items
            this.totalRows = this.items.length
        },
        methods: {
            onFiltered(filteredItems) {
                // Trigger pagination to update the number of buttons/pages due to filtering
                this.totalRows = filteredItems.length
                this.currentPage = 1
            },
            async getUsers () {
                const { data } = await axios.get('/api/get/users')
                this.items = data
                this.totalRows = this.items.length
            },
            removeRow(index) {
                this.items.splice(index, 1)
            }
        },        
        created() {
            this.getUsers()
        }
    }
</script>
