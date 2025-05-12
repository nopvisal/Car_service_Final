@extends('dashboard.layouts.master')
@section('title', 'Profile')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="d-flex flex-column align-items-center mt-4">
                            <div class="rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="w-100 h-100" src="{{ asset('frontend/img/img-01.png') }}" alt="profile picture">
                            </div>
                            <div class="mt-3 text-center">
                                <h5>Admin</h5>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">Phnom Penh</p>
                               
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                <span class="text-secondary">https://bootdey.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.5 6.4-1.54 6.4-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.46 6.4 7a3.37 3.37 0 0 0-.94 2.61V22m18.02-2-3.07-3.07a1.94 1.94 0 0 1-2.73-2.73L22 15"></path></svg>Github</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                <span class="text-secondary">@bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line></svg>Instagram</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div id ="user_crud" class="border px-4 pt-2 pb-3">        
                            <br>
                            <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  Kenneth Valdez
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  fip@jukmuh.al
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  fip@jukmuh.al
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Role</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  (239) 816-9029
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  fip@jukmuh.al
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  (320) 380-4539
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Status</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  Bay Area, San Francisco, CA
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-12">
                                  <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                </div>
                              </div>
                    </div>
                </div>
               
                   
                   
                </div>
                <div class="modal fade" id="userModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="userModalLabel">[[status == 'add' ? 'Create User' : 'Edit User']]</h5>
                                <button type="button" class="btn-close" @click="closeModal()" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Name -->
                                            <div class="mb-3">
                                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                                <input
                                                    class="form-control"
                                                    :class="{ 'is-invalid': errors.name, 'is-valid': FormData.name && !errors.name }"
                                                    placeholder="Enter Name"
                                                    v-model="FormData.name"
                                                    @blur="validateField('name', FormData.name)"
                                                    required>
                                                <div class="invalid-feedback" v-if="errors.name">
                                                    [[ errors.name ]]
                                                </div>
                                            </div>
            
                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    :class="{ 'is-invalid': errors.email, 'is-valid': FormData.email && !errors.email }"
                                                    placeholder="Enter Email"
                                                    v-model="FormData.email"
                                                    @blur="validateField('email', FormData.email)"
                                                    :disabled="status === 'edit'"
                                                    required>
                                                <div class="invalid-feedback" v-if="errors.email">
                                                    [[ errors.email ]]
                                                </div>
                                            </div>
            
                                            <!-- Password (only shown when adding) -->
                                            <div v-if="status == 'add'" class="mb-3">
                                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    :class="{ 'is-invalid': errors.password, 'is-valid': FormData.password && !errors.password }"
                                                    placeholder="Enter password (min 8 characters)"
                                                    v-model="FormData.password"
                                                    @blur="validateField('password', FormData.password)"
                                                    required>
                                                <div class="invalid-feedback" v-if="errors.password">
                                                    [[ errors.password ]]
                                                </div>
                                            </div>
            
                                            <!-- Level -->
                                            <div class="mb-3">
                                                <label class="form-label">Level <span class="text-danger">*</span></label>
                                                <select
                                                    class="form-control"
                                                    :class="{ 'is-invalid': errors.level, 'is-valid': FormData.level && !errors.level }"
                                                    v-model="FormData.level"
                                                    @change="validateField('level', FormData.level)">
                                                    <option value="">Select Level</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Manager</option>
                                                    <option value="3">User</option>
                                                </select>
                                                <div class="invalid-feedback" v-if="errors.level">
                                                    [[ errors.level ]]
                                                </div>
                                            </div>
            
                                            <!-- Language -->
                                            <div class="mb-3">
                                                <label class="form-label">Language <span class="text-danger">*</span></label>
                                                <select
                                                    class="form-control"
                                                    :class="{ 'is-invalid': errors.language, 'is-valid': FormData.language && !errors.language }"
                                                    v-model="FormData.language"
                                                    @change="validateField('language', FormData.language)">
                                                    <option value="">Select Language</option>
                                                    <option value="kh">Khmer</option>
                                                    <option value="en">English</option>
                                                </select>
                                                <div class="invalid-feedback" v-if="errors.language">
                                                    [[ errors.language ]]
                                                </div>
                                            </div>
            
                                            <!-- Active -->
                                            <div class="mb-3">
                                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                                <select
                                                    class="form-control"
                                                    :class="{ 'is-invalid': errors.active, 'is-valid': FormData.active !== null && !errors.active }"
                                                    v-model="FormData.active"
                                                    @change="validateField('active', FormData.active)">
                                                    <option :value="null">Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                                <div class="invalid-feedback" v-if="errors.active">
                                                    [[ errors.active ]]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
            
                                <button type="button" class="btn btn-secondary" @click="resetForm()">Clear</button>
                                <button
                                    @click="status == 'add' ? createRecord() : updateRecord()"
                                    type="button"
                                    class="btn"
                                    :class="status == 'add' ? 'btn-primary' : 'btn-warning'"
                                    :disabled="isFormInvalid">
                                    [[status == 'add' ? 'Save' : 'Update']]
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
@section('js')
<script>
    var app = new Vue({
        el: '#user_crud',
        delimiters: ['[[', ']]'],
        data: {
            user_list: [],
            status: 'add',
            FormData: {
                id: null,
                name: null,
                email: null,
                password: null,
                level: null,
                active: null,
                language: null,
            },
            errors: {
                name: null,
                email: null,
                password: null,
                level: null,
                active: null,
                language: null,
            },
        },

        computed: {
            isFormInvalid() {
                return Object.values(this.errors).some(error => error !== null) ||
                       !this.FormData.name ||
                       !this.FormData.email ||
                       (this.status === 'add' && !this.FormData.password) ||
                       !this.FormData.level ||
                       this.FormData.active === null ||
                       !this.FormData.language;
            }
        },

        created() {
            // this.fetchData();
        },

        methods: {
            // fetchData() {

            //     let vm = this;
            //     $.LoadingOverlay("show");

            //     axios.get('/dashboard/user/fetchDataRecord')
            //         .then(function (response) {
            //             vm.user_list = response.data;

            //             vm.initDataTable();

            //             $.LoadingOverlay("hide");
            //         })
            //         .catch(function (error) {
            //             Swal.fire({
            //                 icon: 'error',
            //                 title: 'Error',
            //                 text: 'Failed to fetch users: ' + error.message,
            //             });
            //         })
            // },
            updateRecord() {
                if (!this.validateForm()) return;


                axios.post('/dashboard/user/updateUserRecord', this.FormData)
                    .then(() => {
                        Swal.fire({
                            position: "top-end",
                            icon: 'success',
                            title: 'Success',
                            text: 'User updated successfully!✅',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        this.closeModal();
                        this.fetchData();
                    })
                    .catch(error => {
                        let errorMessage = error.response?.data?.message || 'Error updating user';
                        if (error.response?.data?.errors) {
                            errorMessage = Object.values(error.response.data.errors).join('<br>');
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            html: errorMessage
                        });
                    })
                    .finally(() => {
                        window.location.reload();
                    });
            },

            validateField(fieldName, value) {
                this.errors[fieldName] = null;

                switch(fieldName) {
                    case 'name':
                        if (!value) this.errors.name = 'Name is required';
                        else if (value.length < 3) this.errors.name = 'Name must be at least 3 characters';
                        break;

                    case 'email':
                        if (!value) this.errors.email = 'Email is required';
                        else if (!/^\S+@\S+\.\S+$/.test(value)) this.errors.email = 'Invalid email format';
                        break;

                    case 'password':
                        if (this.status === 'add' && !value) {
                            this.errors.password = 'Password is required';
                        } else if (value && value.length < 8) {
                            this.errors.password = 'Password must be at least 8 characters';
                        }
                        break;

                    case 'level':
                        if (!value) this.errors.level = 'Level is required';
                        break;

                    case 'language':
                        if (!value) this.errors.language = 'Language is required';
                        break;

                    case 'active':
                        if (value === null) this.errors.active = 'Status is required';
                        break;
                }
            },

            validateForm() {
                this.validateField('name', this.FormData.name);
                this.validateField('email', this.FormData.email);
                if (this.status === 'add') {
                    this.validateField('password', this.FormData.password);
                }
                this.validateField('level', this.FormData.level);
                this.validateField('language', this.FormData.language);
                this.validateField('active', this.FormData.active);

                return !Object.values(this.errors).some(error => error !== null);
            },
            openModal(user = null) {
                this.resetForm();

                if (user) {
                    this.status = 'edit';
                    this.FormData = {
                        id: user.id,
                        name: user.name,
                        email: user.email,
                        password: null, // Don't load password for edit
                        level: user.level,
                        active: user.active,
                        language: user.language
                    };
                } else {
                    this.status = 'add';
                    this.FormData = {
                        id: null,
                        name: null,
                        email: null,
                        password: null,
                        level: '3', // Default to User level
                        active: '1', // Default to Active
                        language: 'kh' // Default to Khmer
                    };
                }

                $('#userModal').modal('show');
            },

        }
    });
</script>
@endsection