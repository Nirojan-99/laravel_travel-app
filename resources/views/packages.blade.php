@extends("layouts.layout")

@section("title","products")

@section("content")
<div class="w-100">

    <div class="container py-2" style="font-weight: 700;">
        Package
    </div>

    <div class="row container m-auto justify-start align-items-start">
        <div class="col-md-3 col-xs-12"></div>
        <div class="col-md-6 col-xs-12 mb-3">
            <form action=" " method="get">
                <div class="d-flex flex-row gap-3">
                    <input name="searchQuery" class="flex-grow-1  rounded w-100 px-3 py-1" type="text" value=" " placeholder="Search here">
                    <input class="btn btn-outline-primary ml-2 search_btn border-2 fw-bold fs-5" style="border:2px solid #333;color: #333;" value="Search" type="submit"></input>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-xs-12  text-right text-xs-left">
            <button class="btn btn-danger float-end">
                <img src="{{ URL('images/plusW.png') }}" alt="" class="plus_icon">
                <a class="text-white text-decoration-none  fs-base" href="{{route('add_package')}} ">Add Package </a>
            </button>
        </div>
    </div>

    <section class="w-100 mt-4 mb-4">
        <div class="container  m-auto  row  gap-3 row-gap-3 align-items-stretch justify-content-between">
            @for ($i = 0;$i < 10 ; $i++)
                @include('layouts.package', ['product'=> $i])
                @endfor
        </div>
    </section>

    <nav aria-label="Page navigation example my-4">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

</div>
@endsection