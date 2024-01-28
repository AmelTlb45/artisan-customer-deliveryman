
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <img src="artisan/vendors/images/v1.png" alt="" />
                </div>
                <div class="col-md-4">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome back
                        <div class="weight-600 font-30" style="color: rgb(250, 206, 84);">{{ Auth::user()->name }}!</div>
                    </h4>
                </div>
            </div>
            <form action="{{ url('change_dispo') }}" method="POST" id="dispo_form">
                @csrf
                <div class="form-check form-switch">
                    <input type="hidden" value={{$user->id}} name="user_id" />
                    <input class="form-check-input" type="checkbox" role="switch"
                     id="deliveryDispo" name="dispo_value"
                     {{$user->Dispo != null && $user->Dispo == 'Yes'?
                        'checked' : ''}}
                        onchange="document.getElementById('dispo_form').submit();">
                    <label class="form-check-label"
                    for="deliveryDispo">Disponibilité</label>
                  </div>
            </form>
            
        </div>
        






        <div class="card-box pb-10">
            <div class="h5 pd-20 mb-0">Recent Customers</div>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment status</th>
                        <th>Delivery status</th>

                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $data)
                        <tr>
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="{{ asset($data->image) }}" class="border-radius-100 shadow"
                                            width="40" height="40" alt="" />
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600">{{ $data->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->payment_status }}</td>
                            <td>

                                @if ($data->delivery_status == 'processing')
                                    <a class="btn btn-primary" href="{{ url('delivered', $data->id) }}"
                                        onclick="return confirm('Are you sure this order is delivered?')">Delivery</a>
                            </td>
                        @else
                            <a>Delivered</a>
                    @endif
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="16">Data Not Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0">Quick Start</h2>
        </div>

        <div class="row">
            <div class="col-md-4 mb-20">
                <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="deliveryman/vendors/images/medicine-bro.svg" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Services</h3>
                        <p class="max-width-200">
                            We provide superior health care in a compassionate maner
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-20">
                <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="deliveryman/vendors/images/remedy-amico.svg" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Medications</h3>
                        <p class="max-width-200">
                            Look for prescription and over-the-counter drug information.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-20">
                <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="deliveryman/vendors/images/paper-map-cuate.svg" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Locations</h3>
                        <p class="max-width-200">
                            Convenient locations when and where you need them.
                        </p>
                    </div>
                </a>
            </div>
        </div>


    </div>
</div>

<script src="deliveryman/vendors/scripts/core.js"></script>
<script src="deliveryman/vendors/scripts/script.min.js"></script>
<script src="deliveryman/vendors/scripts/process.js"></script>
<script src="deliveryman/vendors/scripts/layout-settings.js"></script>
<!-- switchery js -->
<script src="deliveryman/src/plugins/switchery/switchery.min.js"></script>
<!-- bootstrap-tagsinput js -->
<script src="deliveryman/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<!-- bootstrap-touchspin js -->
<script src="deliveryman/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="deliveryman/vendors/scripts/advanced-components.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</div>
</div>
