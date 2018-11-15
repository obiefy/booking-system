@extends('layouts.modal') @section($modal_id)

<div class="form-group">
    <label for="" class="label">تاريخ البداية</label>
    <input
        type="date"
        class="form-control form-control-alternative"
        name="start_date"
        placeholder="تاريخ البداية"
        required
    />
</div>

<div class="form-group">
    <label for="" class="label">تاريخ النهاية</label>
    <input
        type="date"
        class="form-control form-control-alternative"
        name="end_date"
        required
    />
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
@endsection
