{{-- @extends('layouts.index')
@section('title','ระบบรับสมัครเรียนห้องเรียนพิเศษ')
@include("std.menunavtop")
@include("std.menunavleft")

@section('content')
    <div>
    <livewire:student-show>
    </div>
    {{ encode('test',"0123456789!#$%^&=ABCEDF") }}
    {{ decode('p494k4m4',"0123456789!#$%^&=ABCEDF") }}
@endsection
@section('js_livewire')
    <script>
        window.addEventListener('close-modal', event => {
        $('#studentModal').modal('hide');
        $('#updateStudentModal').modal('hide');
        $('#deleteStudentModal').modal('hide');
        })
    </script>
@endsection --}}

@extends('layouts.index')
@section('content')

@endsection
@section('js_before')

@endsection

