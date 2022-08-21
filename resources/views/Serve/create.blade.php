
@extends('parent')
@section('title' , 'طلبات صيانة')
@section('content')


<form action="{{route('Maintenance.store')}}" method="post">
    @csrf
    <div class="row">
    <div style="padding-right:30px">
    </div>
    <br>
    <fieldset>
{{--        <legend style ="color: red;  margin-bottom: 30px ;text-align: center;padding-left: 50px ; padding-right: 150px" class = "row"> <h4> "طلب صيانة" </h4> </legend>--}}
        <br> <br>
            <div style = " margin-bottom: 30px ;text-align: center;padding-left: 50px ; padding-right: 150px" class = "row">
                <div class="col-md-5" >
                    <label >الرقم</label>
                    <input type="text" disabled>
                </div>
                <div class="col-md-5">
{{--                    <label >التاريخ</label>--}}
{{--                    <input type="date">--}}
                    <input id="order_date" name="order_date" value="{{ now()->toDateTimeString() }}" readonly>
                </div>
            </div>
            <br>
            <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 40px" class = "row">
            <div class="col-md-8" style ="padding-left: 130px ; padding-right: 40px">
                <label>نوع الصيانة:</label>
                <input id="maintenance_type"  type="text" name="maintenance_type" class="col-md-4">
            </div>
            </div>
            <br>
            <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 350px" class = "row">
            <div class="col-md-12">
                <label for="description_problem" style="margin: 5px">وصف المشكلة</label>
                <textarea id="description_problem" class="form-control" name="description_problem"  placeholder=""></textarea>
            </div>
            </div>
            <br>
    </fieldset>
    </div>
    <div style = " text-align: center;">
{{--    <a class="btn btn-primary col-md-2 "role="button">حفظ</a> <br> <br>--}}
        <button class="btn btn-primary col-md-2" type="submit"> حفظ </button>
    </div>
</form>
<br>
<br>

<br> <br><br>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">رقم الطلب</th>
            <th scope="col"> التاريخ</th>
            <th scope="col">نوع الصيانة</th>
            <th scope="col">وصف المشكلة</th>
{{--            <th scope="col">حالة الطلب</th>--}}
            <th scope="col">عمليات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($serves as $key=> $serve)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$serve->id}}</td>
                <td>{{$serve->order_date}}</td>
                <td>{{$serve->order_type}}</td>
                <td>{{$serve->description_problem}}</td>
{{--                <td>-</td>--}}

                <td>
                    <a class="btn btn-danger" role="button" href="{{route('serve.show',$serve->id)}}">عرض</a> <br> <br>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{!! $serves->links() !!}


@endsection
@section('script')
@endsection
