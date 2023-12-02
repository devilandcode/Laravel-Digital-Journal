<div class="mb-3">
    <select class="form-select" aria-label="Default select example">
        <option selected>Choose Country</option>
        @foreach($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Amazing travel">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
