@extends('layouts.app')

@section('content')

<div class="bg-white p-4 w-2/3 mx-auto">
    <h2 class="text-center text-2xl">Upload your dog!</h2>
    <p>
        <form method="post" action="store" enctype="multipart/form-data">
            @csrf
            <div class="form-section">
                <label for="name-input">Name: </label>
                <input type="text" id="name-input" name="name" placeholder="Please enter the name of the dog here..." required/>
            </div>
            <div class="form-section">
                <label for="image-input">Image: </label>
                <input type="file" id="image-input" name="image" accept="image/jpg, image/png" required/>
            </div>
            <div class="form-section" id="form-section-submit">
                <button type="submit" id="submit-btn">Submit</button>
            </div>
        </form>
    </p>
</div>

@endsection
