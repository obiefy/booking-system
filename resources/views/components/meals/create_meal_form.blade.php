@extends('layouts.modal') @section($modal_id)

<div class="form-group">
    <label for="" class="label">الوجبة</label>
    <input
        type="text"
        class="form-control form-control-alternative"
        name="title"
        required
    />
</div>



<div class="form-group">
    <label for="" class="label">نوعها</label>
    <select name="type" id="type" class="form-control form-control-alternative">
        @foreach($meal_types as $meal_type)
            <option value="{{ $meal_type->code }}">{{ $meal_type->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="" class="label">المحتوى</label>
    <textarea name="content" id="content" rows="5" class="form-control"></textarea>
</div>

<div class="form-group">
    <label for="" class="label">السعر</label>
    <input
        type="number"
        class="form-control form-control-alternative"
        name="price"
        required
    />
</div>

<div class="form-group">
    <label for="" class="label">الخصم</label>
    <input
        type="number"
        class="form-control form-control-alternative"
        name="discount"
        required
    />
</div>
@endsection
