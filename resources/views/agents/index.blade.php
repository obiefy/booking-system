@extends('layouts.menu')
@section('main')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">الصالات</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('agent.create')}}" class="btn btn-sm btn-primary">اضافة صالة جديدة</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">اسم الصالة</th>
                    <th scope="col">نوعها</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">المحلية</th>
                    <th scope="col">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agents as $agent)
                <tr>
                    <th scope="row">
                        {{ $agent->name }}
                    </th>
                    <td>
                        @agent_show_type_label(["agent" => $agent])
                    </td>
                    <td>
                        {{ $agent->phone }}
                    </td>
                    <td>
                    @agent_show_city_label(["agent" => $agent])
                    </td>
                    <td>
                        <a  data-toggle="modal"
                            data-target="#delete-agent-{{ $agent->id }}"
                            class="btn btn-danger bg-danger btn-sm">حذف</a>
                    </td>
                    @include('layouts.modal', ["title" => "هل انت متأكد من جذف " . $agent->name , "modal_id" => "delete-agent-".$agent->id,
"url" => route('agent.destroy', $agent), "method" => "DELETE"]) 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
