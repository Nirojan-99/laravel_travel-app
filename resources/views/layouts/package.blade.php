<div class="col-lg-5 col-md-10 col-sm-12 shadow g-col-6 row p-3 mb-4 justify-content-between" style="border-radius: 10px;">
    <div class="col-5 w-100  p-0">
        <div class="w-100 p-0 "  style="width: 100%;border-radius: 5px;"><img src="{{URL('images/loc.svg')}}" /></div>
    </div>
    <div class="col-5 d-flex flex-column">
        <div class="fw-bold" style="font-weight: 600;font-size: 15px;">package Name</div>
        <div class="flex-grow-1 mt-3">
            <div>Package Id: 001</div>
            <div>Jaffna | Trinco | Batti</div>
            <div>4 Nights 5 Days</div>
        </div>
        <div>
            <div class="row justify-content-between align-items-center">
                <button class="btn btn-danger py-1">View Package</button>
                <button type="button" class="btn btn-text p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="{{URL('images/deleteR.png')}}" />
                </button>
                <a href="">
                    <img src="{{URL('images/editR.png')}}" />
                </a>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Alert!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Do you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger-outlined" >Confirm</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>