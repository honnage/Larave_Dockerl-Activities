
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <div class="card">
            <div class="card-header">หัวข้อประเภทงาน &nbsp;&nbsp;
            {{-- <a href="{{ route('transfers.create') }}"> โอนเงิน </a>&nbsp;&nbsp;

            <a href="{{ route('deposit.create') }}"> ฝากเงิน </a>&nbsp;&nbsp;
            <a href="{{ route('withdraw.create') }}"> ถอนเงิน </a>&nbsp;&nbsp;
            <a href="{{ route('calculaterate.create') }}"> คิดดอกเบี้ย </a>&nbsp;&nbsp; --}}

                <a  class="btn btn-success mr-2 "
                    style="position:absolute ; right:0 ; top:5px"
                    href="{{ route('TopicType.create') }}" >เพิ่มหัวข้อ
                </a>
            </div>
        @csrf

            <body {{--class="text-center"--}} style="">

                <table class="table" border="0">
                    <thead>
                        <th><center>#ID</center></th>
                        <th><center>ชื่อหัวข้อ</center></th>
                        <th><center>จำนวนรายการ</center></th>
                        <th><center>ดำเนินการ</center></th>
                    </thead>
                    @foreach($topictype as $type)
                    <tbody>
                    <tr>
                        <td>{{ $type->id}}</td>





                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </body>
        </div>
    </div>
</div>
</div>
@endsection