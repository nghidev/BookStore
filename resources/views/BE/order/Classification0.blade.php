@extends('layouts.be')
@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Đơn hàng chưa xác nhận</b></h2>
                        </div>
                        <div class="col-sm-8 ">

                            <a href="{{ route('Be.orderByAdmin.Classification1') }}" class="btn btn-primary"><i
                                class="material-icons">&#xE147;</i> <span>Đơn hàng đã xác nhận</span></a>
                       <a href="{{ route('Be.orderByAdmin.Classification0') }}" class="btn btn-danger"><i
                               class="material-icons">&#xE147;</i> <span>Đơn hàng chưa xác nhận</span></a>
                       <a href="{{ route('Be.orderByAdmin.Classification2') }}" class="btn btn-success"><i
                               class="material-icons">&#xE147;</i> <span>Đơn hàng đã giao</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" style="position: relative;">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Id</th>
                            <th>Tên khách hàng</th>
                            <th>Mã đơn</th>
                            <th>Chi tiết</th>
                            <th>Hủy đơn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                        {{-- @if ($item->id == 1) --}}
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->consignee_name }}</td>

                            <td>{{ $item->code }}</td>
                            {{-- <td>{{ $item->inventory_number }}</td> --}}
                            {{-- <td>{{ $item->real_price }}</td> --}}
                            <td>
                                {{-- <button type="button" class="btn btn-primary product-gallery" data-product-gallery=""
                                    data-bs-toggle="modal" data-bs-target="#fullscreenModal">
                                    BST <span class="badge bg-primary badge-number"></span>
                                </button> --}}
                                <a href="{{ url('be/product/edit/') }}/{{ $item->id }}" class="edit"
                                    data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i></a>

                            </td>
                            <td>
                                <a href="{{ url('be/product/destroy/') }}/{{ $item->id }}" class="delete"
                                    data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        {{-- @endif --}}
                        @endforeach
                        {{-- <div class="container bg-success" id="check_submit" style="width:300px;height:200px;position: absolute; top:200px; z-index:1; display:none;" >
                            <h3 class="text-light">bạn có muốn xóa</h3>
                            <div>
                                <button>cancel</button>
                                <button><a href="">accept</a></button>
                            </div>
                        </div> --}}




                    </tbody>
                </table>
                {{-- {{ $pagination->links('vendor.pagination.bootstrap-4') }} --}}
                {{-- <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bộ siêu tập ảnh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="show-product-gallery">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="d-flex container    ">
        {{-- {{ $products->links('pagination::bootstrap-4') }} --}}
    </div>
@endsection
