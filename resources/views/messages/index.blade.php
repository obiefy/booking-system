@extends('layouts.menu') @section('main')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col"><h3 class="mb-0">الرسائل</h3></div>
            
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush bg-light">
            <thead class="thead-light">
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">اسم المرسل</th>
                    <th scope="col">البريد الالكتروني</th>
                    <th scope="col">محتوى الرسالي</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>

                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
