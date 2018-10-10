{{-- Create a new company--}}
<div class="modal fade" id="create-company" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"> New Medicine </h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/companies') }}" method="post" id="create-company-form">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control form-control-sm" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control form-control-sm" name="phone">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Established Date</label>
                                    <input type="text" class="form-control form-control-sm" name="established_date">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>License Number</label>
                                    <input type="text" class="form-control form-control-sm" name="license_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="company_category_id" class="form-control form-control-sm">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Province</label>
                                    <select name="province_id" class="form-control form-control-sm">
                                        @foreach($provinces as $province)
                                            <option value="{{ $province->id }}"> {{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="address" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" form="create-company-form" class="btn btn-primary btn-sm">Create</button>
                </div>
            </div>
        </div>
    </div>


    {{-- Create a new company--}}
    <div class="modal fade" id="edit-company" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Edit New Company
                </div>
                <div class="modal-body edit-modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" form="edit-company-form" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>