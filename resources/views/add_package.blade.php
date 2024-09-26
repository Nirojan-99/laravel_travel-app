@extends("layouts.layout")

@section("title","products")

@section("content")

<div class="w-100 ">
    <div class="container mt-3 fs-base fw-bold ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item text-decoration-none" style="color: #000;"><a href="/">Package</a></li>
                <li class="breadcrumb-item active" style="color: #333;" aria-current="page"> Add Package</li>
            </ol>
        </nav>
    </div>

    <div class="container my-5">
        <form class="m-auto w-50 p-4 shadow" method="POST" action="{{ route('store_package') }}" enctype="multipart/form-data">
            @csrf
            <!-- Package Name -->
            <div class="form-group">
                <label class="mb-2" for="productName">Package Name:</label>
                <input name="package_name" type="text" class="form-control" id="package_name" required>
                <div id="packageNameErrMsg" class="pt-1 err_mg text-left w-100 fw-bold fs-base text-error"></div>
            </div>
            <!-- Description -->
            <div class="form-group mt-2">
                <label class="mb-1" for="howToUse">Description:</label>
                <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                <div id="descriptionErrMsg" class="pt-1 err_mg text-left w-100 fw-bold fs-base text-error"></div>
            </div>
            <!-- days -->
            <div class="form-group mt-2">
                <label for="modelNumber" class="mb-1">Days:</label>
                <input name="days" type="text" class="form-control" id="days" required>
                <div id="daysErrMsg" class="pt-1 err_mg text-left w-100 fw-bold fs-base text-error"></div>
            </div>
            <!-- Price -->
            <div class="form-group mt-2">
                <label for="modelNumber" class="mb-1">Price:</label>
                <input name="price" type="text" class="form-control" id="price" required>
                <div id="priceErrMsg" class="pt-1 err_mg text-left w-100 fw-bold fs-base text-error"></div>
            </div>
            <!-- No of Person -->
            <div class="form-group mt-2">
                <label for="modelNumber" class="mb-1">No of Person:</label>
                <input name="no_of_person" type="text" class="form-control" id="no_of_person" required>
                <div id="no_of_personErrMsg" class="pt-1 err_mg text-left w-100 fw-bold fs-base text-error"></div>
            </div>
            <!-- days -->
            <div id="daysContainer">
                <div class="day-container mb-2" id="day1">
                    <div class="mb-2 px-4 row justify-content-between">
                        <div>Day 1</div>
                        <div><a href=""><img src="{{URL('images/deleteR.png')}}" alt=""></a></div>
                    </div>
                    <div class="p-3 rounded" style="border: 2px solid #333;">
                        <div>
                            <!-- district -->
                            <div class="mb-2" style="font-weight: 600;">District</div>
                            <div class="row justify-content-between align-items-center px-3">
                                <label class="" style="font-weight: 400;font-size: 16px;">
                                    <input type="checkbox" name="checkbox" value="jaffna"> jaffna
                                </label>
                                <label class="" style="font-weight: 400;font-size: 16px;">
                                    <input type="checkbox" name="checkbox" value="trinco"> trinco
                                </label>
                                <label class="" style="font-weight: 400;font-size: 16px;">
                                    <input type="checkbox" name="checkbox" value="batti"> batti
                                </label>
                                <label class="" style="font-weight: 400;font-size: 16px;">
                                    <input type="checkbox" name="checkbox" value="matara"> matara
                                </label>
                            </div>

                            <!-- places -->
                            <div class="w-100">
                                <div class="mb-2" style="font-weight: 600;">Place</div>
                                <select id="options" name="options">
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                    <option value="option4">Option 4</option>
                                    <option value="option4" style="background-color: red;">
                                        <a class="" href="{{route('add_package')}} ">add
                                            <img src="{{ URL('images/plusW.png') }}" alt="" class="plus_icon">
                                        </a>
                                    </option>
                                </select>
                            </div>

                            <!-- Meal -->
                            <div class="mb-2 mt-2" style="font-weight: 600;">Meal</div>
                            <div class="row justify-content-between align-items-center px-3">
                                <label class="" style="font-weight: 400;font-size: 16px;">
                                    <input type="checkbox" name="checkbox" value="Dinner"> Dinner
                                </label>
                                <label class="" style="font-weight: 400;font-size: 16px;">
                                    <input type="checkbox" name="checkbox" value="BreakFast"> BreakFast
                                </label>
                                <label class="" style="font-weight: 400;font-size: 16px;">
                                    <input type="checkbox" name="checkbox" value="Lunch"> Lunch
                                </label>
                            </div>

                            <!-- Accomodation -->
                            <div class="w-100 mb-2">
                                <div class="mb-2" style="font-weight: 600;">Accomodation</div>
                                <select id="options" name="options">
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                    <option value="option4">Option 4</option>
                                    <option value="option4" style="background-color: red;">
                                        <a class="" href="{{route('add_package')}} ">add
                                            <img src="{{ URL('images/plusW.png') }}" alt="" class="plus_icon">
                                        </a>
                                    </option>
                                </select>
                            </div>

                            <!-- Transport -->
                            <div class="mb-2" style="font-weight: 600;">Transport</div>
                            <div class="row justify-content-between align-items-center px-3">
                                <label><input type="radio" name="radioOption" value="Car"> Car</label>
                                <label><input type="radio" name="radioOption" value="Bus"> Bus</label>
                                <label><input type="radio" name="radioOption" value="Mini Van"> Mini Van</label>
                                <label><input type="radio" name="radioOption" value="Van"> Van</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-text p-0 mb-3" id="addRowButton" style="font-weight: 600;">+ Next Day</button>

            <div class="w-100  mb-3" style="font-weight: 600;">Add image</div>
            <div class="row gap-2 justify-content-between px-2">
                <label for="img" class="box col-3">
                    <input id="img" type="file" hidden>
                </label>
                <label for="img" class="box col-3">
                    <input id="img" type="file" hidden>
                </label>
                <label for="img" class="box col-3">
                    <input id="img" type="file" hidden>
                </label>
                <label for="img" class="box col-3">
                    <input id="img" type="file" hidden>
                </label>
                <label for="img" class="box col-3">
                    <input id="img" type="file" hidden>
                </label>
                <label for="img" class="box col-3">
                    <input id="img" type="file" hidden>
                </label>
            </div>

            <div class="d-flex flex-row justify-content-center">
                <input class="btn btn-danger text-center mt-5 mb-2 fs-5 fw-semibold px-4" type="submit" id="submit" class="btn btn-primary" value="Save" data-bs-toggle="modal" data-bs-target="#confirmationModal2"></input>
            </div>

            <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmationModalLabel">Alert!</h5>
                        </div>
                        <div class="modal-body">
                            {{is_null(session('error')) ? session('success'):session('error')}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

<style>
    .checkbox-row {
        display: flex;
        flex-direction: row;
    }

    .checkbox-row label {
        margin-right: 10px;
    }

    select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .dashed-border {
        border: 2px dashed #333;
    }

    .box {
        border: 2px dashed #333;
        aspect-ratio: 1 / 1;
        margin: 3px;
        margin-bottom: 10px;
    }
</style>

<script>
    let dayCounter = 1;

    document.getElementById("addRowButton").addEventListener("click", function(e) {
        e.preventDefault();
        console.log("scsc")

        dayCounter++;

        const firstDay = document.querySelector(".day-container");

        const newDay = firstDay.cloneNode(true);

        newDay.querySelector(".row div:first-child").textContent = `Day ${dayCounter}`;

        const inputs = newDay.querySelectorAll("input");
        inputs.forEach(input => {
            input.checked = false; // Clear all selected inputs
            input.name = input.type === 'radio' ? `radioOption${dayCounter}` : `checkbox${dayCounter}`; // Make sure radio buttons are unique to each day
        });

        document.getElementById("daysContainer").appendChild(newDay);
    });
</script>
@endsection