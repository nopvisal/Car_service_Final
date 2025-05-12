    @extends('dashboard.layouts.master')
    @section('title', 'Management User')

    @section('content')
        <div class="container-fluid ps-4 pe-4" id="user_crud">
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard/booking') }}">Booking</a></li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="d-flex justify-content-between py-3 px-4">
                    <div>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa-solid fa-backward-step me-1"></i>
                            </span>
                            <span class="text">Back</span>
                        </a>
                    </div>
                    <div class="">
                        <button @click="openModal()" type="button" class="btn btn-primary btn-icon-split">
                            <span class="text">Create Booking</span>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Booking Management</h4>

                        </div>

                        <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark-blue">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Customer</th>
                                    <th>Service</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Service Date</th>
                                    <th>Special Request</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-light">
                                <!-- DataTables will populate this automatically -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- User Modal -->
            <div class="modal fade" id="bookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="bookingModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="bookingModalLabel">[[status == 'add' ? 'Create Booking' : 'Edit Booking']]</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                @click="closeModal()">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Customer<span class="text-danger">*</span></label>
                                            <select class="form-control"
                                                :class="{ 'is-invalid': errors.customer_id, 'is-valid': FormData.customer_id &&
                                                        !errors.customer_id }"
                                                v-model="FormData.customer_id"
                                                @change="validateField('customer_id', FormData.customer_id)">
                                                <option value="">Select Customer</option>
                                                @foreach ($customers as $customers)
                                                    <option value="{{ $customers->id }}">{{ $customers->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback" v-if="errors.customer_id">
                                                [[ errors.customer_id ]]
                                            </div>
                                        </div>

                                        <!-- Service -->
                                        <div class="mb-3">
                                            <label class="form-label">Service<span class="text-danger">*</span></label>
                                            <select class="form-control"
                                                :class="{ 'is-invalid': errors.service_id, 'is-valid': FormData.service_id && !
                                                        errors.service_id }"
                                                v-model="FormData.service_id"
                                                @change="validateField('service_id', FormData.service_id)">
                                                <option value="">Select Service</option>
                                                @foreach ($services as $services)
                                                    <option value="{{ $services->id }}">{{ $services->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback" v-if="errors.service_id">
                                                [[ errors.service_id ]]
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Phone<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control"
                                                :class="{ 'is-invalid': errors.phone, 'is-valid': FormData.phone && !errors
                                                        .phone }"
                                                placeholder="Enter phone" v-model="FormData.phone"
                                                @blur="validateField('phone', FormData.phone)" required>
                                            <div class="invalid-feedback" v-if="errors.phone">
                                                [[ errors.phone ]]
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control"
                                                :class="{ 'is-invalid': errors.email, 'is-valid': FormData.email && !errors
                                                        .email }"
                                                placeholder="Enter email" v-model="FormData.email"
                                                @blur="validateField('email', FormData.email)" required>
                                            <div class="invalid-feedback" v-if="errors.email">
                                                [[ errors.email ]]
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Service Date<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control"
                                                :class="{ 'is-invalid': errors.service_date, 'is-valid': FormData
                                                        .service_date && !errors.service_date }"
                                                placeholder="Enter service date" v-model="FormData.service_date"
                                                @blur="validateField('service_date', FormData.service_date)" required>
                                            <div class="invalid-feedback" v-if="errors.service_date">
                                                [[ errors.service_date ]]
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Special Request<span
                                                    class="text-danger">*</span></label>
                                            <textarea type="text" class="form-control"
                                                :class="{ 'is-invalid': errors.special_request, 'is-valid': FormData
                                                        .special_request && !errors.special_request }"
                                                placeholder="Enter special request" v-model="FormData.special_request"
                                                @blur="validateField('special_request', FormData.special_request)" required>
                                        </textarea>
                                            <div class="invalid-feedback" v-if="errors.special_request">
                                                [[ errors.special_request ]]
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="resetForm()">Clear</button>
                            <button @click="status == 'add' ? createRecord() : updateRecord()" type="button"
                                class="btn" :class="status == 'add' ? 'btn-primary' : 'btn-warning'"
                                :disabled="isFormInvalid">
                                [[status == 'add' ? 'Save' : 'Update']]
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End User Modal -->

        </div>
    @endsection

    @section('js')
        <script>
            var app = new Vue({
                el: '#user_crud',
                delimiters: ['[[', ']]'],
                data: {
                    booking_list: [],
                    status: 'add',
                    FormData: {
                        id: null,
                        customer_id: null,
                        service_id: null,
                        phone: null,
                        email: null,
                        service_date: null,
                        special_request: null,
                    },
                    errors: {
                        customer_id: null,
                        service_id: null,
                        phone: null,
                        email: null,
                        service_date: null,
                        special_request: null,
                    },

                    availableRoles: [],
                    availableStatuses: [],
                    availableLanguages: [],
                    dataTable: null,
                    pageLength: 10,
                    searchQuery: '',
                    isLoading: false
                },

                computed: {
                    isFormInvalid() {
                        return Object.values(this.errors).some(error => error !== null) ||
                            !this.FormData.customer_id ||
                            !this.FormData.service_id ||
                            !this.FormData.phone ||
                            !this.FormData.email ||
                            !this.FormData.service_date ||
                            !this.FormData.special_request;
                    }
                },

                created() {
                    this.fetchData();
                    this.fetchDropdownData();
                },
                methods: {
                    initDataTable() {
                        if (this.dataTable) {
                            this.dataTable.destroy();
                        }

                        this.dataTable = $('#dataTable').DataTable({
                            data: this.booking_list,
                            columns: [{
                                    data: null,
                                    render: (data, type, row, meta) => meta.row + 1,
                                    className: 'text-center'
                                },

                                {
                                    data: 'customer_name'
                                },

                                {
                                    data: 'service_name'
                                },

                                {
                                    data: 'phone',
                                    className: 'text-center'
                                },

                                {
                                    data: 'email'
                                },

                                {
                                    data: 'service_date'
                                },

                                {
                                    data: 'special_request'
                                },

                                {
                                    data: null,
                                    render: (data, type, row) => {
                                        const disableDelete = row.role_name === 'admin' ? 'disabled' :
                                            '';
                                        const deleteTooltip = row.role_name === 'admin' ?
                                            'title="Cannot delete admin users"' : 'title="Delete"';

                                        return `
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-sm btn-warning mx-1 edit-btn"
                                                data-id="${row.id}" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger mx-1 delete-btn"
                                                @click.stop.prevent="deleteRecord(row.id, $event)"
                                                data-id="${row.id}"
                                                ${disableDelete}
                                                ${deleteTooltip}>
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    `;
                                    },
                                    className: 'text-center',
                                    orderable: false
                                }
                            ],
                            responsive: true,
                            destroy: true,
                            pageLength: this.pageLength,
                            lengthMenu: [
                                [5, 10, 25, 50, 100],
                                [5, 10, 25, 50, 100]
                            ],
                            language: {
                                emptyTable: "No booking found",
                                info: "Showing _START_ to _END_ of _TOTAL_ booking",
                                infoEmpty: "Showing 0 to 0 of 0 booking",
                                search: "_INPUT_",
                                searchPlaceholder: "Search booking..."
                            },
                            createdRow: function(row, data) {
                                if (data.role_name === 'admin') {
                                    $(row).addClass('admin-row');
                                }
                            }
                        });

                        this.setupTableEvents();
                    },

                    setupTableEvents() {
                        const vm = this;

                        // Edit button
                        $('#dataTable').on('click', '.edit-btn', function() {
                            const bookingId = $(this).data('id');
                            const bookings = vm.booking_list.find(u => u.id == bookingId);
                            if (bookings) {
                                vm.openModal(bookings);
                            }
                        });

                        // Delete button
                        $('#dataTable').on('click', '.delete-btn', function() {
                            const bookingId = $(this).data('id');
                            vm.confirmDelete(bookingId);
                        });
                    },

                    fetchData() {
                        let vm = this;
                        $.LoadingOverlay("show");

                        axios.get('/dashboard/booking/fetchDataRecord')
                            .then(function(response) {
                                vm.booking_list = response.data;

                                vm.initDataTable();

                                $.LoadingOverlay("hide");
                            })
                            .catch(function(error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Failed to fetch booking: ' + error.message,
                                });
                            })
                    },

                    createRecord() {
                        // if (!this.validateForm()) return;
                        axios.post('/dashboard/booking/createBookingRecord', this.FormData)
                            .then(() => {
                                Swal.fire({
                                    position: "top-end",
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Booking created successfully!✅',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                this.closeModal();
                                this.fetchData();
                            })

                            .catch(error => {
                                let errorMessage = error.response?.data?.message || 'Error creating booking';
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

                    updateRecord() {
                        if (!this.validateForm()) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                text: 'Please fix all form errors before submitting'
                            });
                            return;
                        }

                        const swalInstance = Swal.fire({
                            title: 'Updating Booking...',
                            allowOutsideClick: false,
                            didOpen: () => Swal.showLoading()
                        });
                        axios.post('/dashboard/booking/updateBookingRecord', this.FormData)
                            .then(response => {
                                swalInstance.close();
                                if (response.data.success) {
                                    Swal.fire({
                                        position: "top-end",
                                        icon: 'success',
                                        title: 'Success',
                                        text: response.data.message,
                                        showConfirmButton: false,
                                        timer: 1500
                                    });

                                    // Update the specific user in user_list
                                    const updatedBooking = response.data.data;
                                    const index = this.booking_list.findIndex(u => u.id === updatedBooking.id);
                                    if (index !== -1) {
                                        this.$set(this.booking_list, index, updatedBooking);
                                    }

                                    this.closeModal();
                                    this.initDataTable(); // Refresh the table
                                } else {
                                    throw new Error(response.data.message || 'No changes were made');
                                }
                            })
                            .catch(error => {
                                swalInstance.close();
                                let errorMessage = error.response?.data?.message || error.message;

                                if (error.response?.data?.errors) {
                                    errorMessage = Object.values(error.response.data.errors)
                                        .flat()
                                        .join('<br>');
                                }
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    html: errorMessage
                                });
                            });
                    },

                    confirmDelete(userId) {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!⚠️",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Yes, delete it!',
                            cancelButtonText: 'Cancel',
                            timer: 1500
                        }).then((result) => {
                            if (result.isConfirmed) {
                                this.deleteRecord(userId);
                            }
                        });
                    },

                    deleteRecord(userId) {
                        // First show confirmation dialog
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Yes, delete it!',
                            cancelButtonText: 'Cancel',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            showLoaderOnConfirm: true,
                            preConfirm: () => {
                                $.LoadingOverlay("show");
                                this.isProcessing = true;
                                return axios.delete(`/dashboard/booking/deleteBookingRecord/${userId}`)
                                    .then(response => {
                                        if (!response.data.success) {
                                            throw new Error(response.data.message);
                                        }
                                        return response;
                                    })
                                    .catch(error => {
                                        Swal.showValidationMessage(
                                            error.response?.data?.message || error.message
                                        );
                                        return false;
                                    });
                            }
                        }).then((result) => {
                            $.LoadingOverlay("hide");
                            this.isProcessing = false;

                            if (result.isConfirmed) {
                                this.closeModal(); // Close modal if open

                                Swal.fire({
                                    position: "top-end",
                                    icon: 'success',
                                    title: 'Deleted!🛑',
                                    text: result.value.data.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    window.location.reload();
                                });
                            }
                        }).catch(error => {
                            $.LoadingOverlay("hide");
                            this.isProcessing = false;
                            this.closeModal(); // Close modal if open

                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: error.response?.data?.message || 'Failed to delete booking',
                                timer: 1500
                            });
                        });
                    },


                    changePageLength() {
                        if (this.dataTable) {
                            this.dataTable.page.len(this.pageLength).draw();
                        }
                    },

                    searchTable() {
                        if (this.dataTable) {
                            this.dataTable.search(this.searchQuery).draw();
                        }
                    },

                    openModal(booking = null) {
                        this.resetForm();
                        if (booking) {
                            this.status = 'edit';
                            this.FormData = {
                                id: booking.id,
                                customer_id: booking.customer_id,
                                service_id: booking.service_id,
                                phone: booking.phone,
                                email: booking.email,
                                service_date: booking.service_date,
                                special_request: booking.special_request,
                            };
                        } else {
                            this.status = 'add';
                            this.FormData = {
                                id: null,
                                customer_id: null,
                                service_id: null,
                                phone: null,
                                email: null,
                                service_date: null,
                                special_request: null,
                            };
                        }

                        $('#bookingModal').modal('show');
                    },

                    closeModal() {
                        $('#bookingModal').modal('hide');
                        this.resetForm();
                    },

                    resetForm() {
                        this.FormData = {
                            id: null,
                            customer_id: null,
                            service_id: null,
                            phone: null,
                            email: null,
                            service_date: null,
                            special_request: null,
                        };

                        this.clearErrors();
                    },

                    clearErrors() {
                        this.errors = {
                            customer_id: null,
                            service_id: null,
                            phone: null,
                            email: null,
                            service_date: null,
                            special_request: null,
                        };
                    },
                    validateField(fieldName, value) {
                        this.errors[fieldName] = null;

                        switch (fieldName) {
                            case 'customer_id':
                            case 'customer_Id': // Handling camelCase version too
                                if (!value || isNaN(value)) {
                                    this.errors.customer_id = 'Customer is required and must be a number';
                                }
                                break;

                            case 'service_id':
                            case 'service_Id': // Handling camelCase version too
                                if (!value || isNaN(value)) {
                                    this.errors.service_id = 'Service is required and must be a number';
                                }
                                break;

                            case 'email':
                                if (!value) {
                                    this.errors.email = 'Email is required';
                                } else if (!/^\S+@\S+\.\S+$/.test(value)) {
                                    this.errors.email = 'Invalid email format';
                                }
                                break;

                            case 'phone':
                                const cambodiaPhoneRegex = /^0[1-9][0-9]{7,8}$/;
                                if (!value) {
                                    this.errors.phone = 'Phone is required';
                                } else if (!cambodiaPhoneRegex.test(value)) {
                                    this.errors.phone = 'Phone number is invalid for Cambodia';
                                }
                                break;

                            case 'service_date':
                                if (!value) {
                                    this.errors.service_date = 'Service date is required';
                                }
                                break;

                            case 'special_request':
                                if (!value) {
                                    this.errors.special_request = 'Special request is required';
                                }
                                break;

                            default:
                                break;
                        }
                    },
                    validateForm() {
                        this.validateField('customer_id', this.FormData.customer_id);
                        this.validateField('service_id', this.FormData.service_id);
                        this.validateField('email', this.FormData.email);
                        this.validateField('phone', this.FormData.phone);
                        this.validateField('service_date', this.FormData.service_date);
                        this.validateField('special_request', this.FormData.special_request);

                        // Only validate password when adding new user

                        return !Object.values(this.errors).some(error => error !== null);
                    },

                }
            });
        </script>
    @endsection
