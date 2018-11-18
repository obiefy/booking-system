@extends('layouts.modal') @section($modal_id)

<div class="form-group">
    <label for="" class="label">الخدمة</label>
    <input
        type="text"
        class="form-control form-control-alternative"
        name="title"
        required
        value="{{ $service->title }}"
    />
</div>



@endsection
