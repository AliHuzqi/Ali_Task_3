@extends('parent')
@section('title' , 'الصفحة الرئيسية')
@section('content')


{{--<div style="padding-right:30px">--}}
{{--    <a class="btn btn-primary" href="{{route('serve.create')}}" role="button">Create New Serve</a> <br>--}}
{{--</div>--}}
<br>
<div style ="color: red;  margin-bottom: 30px ;text-align: center;padding-right: 700px ;" class = "row">
    <h4  class="btn btn-primary col-md-2 "> طلباتي </h4>
</div>

<div class="row">
    <div style="padding-right:30px">
    </div>
{{--        <legend  style ="color: red;  margin-bottom: 30px ;text-align: center;padding-left: 800px ; padding-right: 180px" class = "row"> <h4 class="btn btn-info col-md-3"> محددات البحث </h4> </legend>--}}
        <form action="{{route('serve.search')}}"  method="get">
            <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 350px" class = "row">
                <div class="col-md-12">
                    <div class = "row">
                        <div class="col-md-4">
                            <label for="start_date">التاريخ</label>
                            <input type="date" class="form-control" name="start_date" id="start_date">
                        </div>
                        <div class="col-md-4">
                            <label for="expiry_date">إلى</label>
                            <input type="date" class="form-control" name="end_date" id="expiry_date">
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div style="text-align:center">
                <button class="btn btn-primary col-md-1" style="margin-left: -952px; margin-top: -245px" type="submit"> بحث </button>

            </div>
        </form>
</div>
<br>
{{--<br> <br><br>--}}
{{--<div>--}}
{{--<table class="table">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">#</th>--}}
{{--        <th scope="col">رقم الطلب</th>--}}
{{--        <th scope="col">الوصف</th>--}}
{{--        <th scope="col"> التاريخ</th>--}}
{{--        <th scope="col">نوع الطلب</th>--}}
{{--        <th scope="col">حالة الطلب</th>--}}
{{--        <th scope="col">عمليات</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($serves as $key=> $serve)--}}
{{--    <tr>--}}
{{--        <th scope="row">{{++$key}}</th>--}}
{{--        <td>--</td>--}}
{{--        <td>--</td>--}}
{{--        <td>--</td>--}}
{{--        <td>--</td>--}}
{{--        <td>--</td>--}}
{{--        <td>--</td>--}}

{{--        <td>--}}
{{--            <a class="btn btn-danger" role="button">عرض</a> <br> <br>--}}
{{--        </td>--}}
{{--    </tr>--}}
{{--                @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--</div>--}}
{{--{!! $serves->links() !!}--}}


@endsection
@section('script')
@endsection










{{--                <div class="col-md-8" style ="padding-left: 130px ; padding-right: 40px">--}}
{{--                    <label >نوع الطلب</label>--}}
{{--                    <select class="col-md-4" aria-label="Default select example">--}}
{{--                        <option selected></option>--}}
{{--                        <option value="1">طلبات الصيانة</option>--}}
{{--                        <option value="2">طلبات تحويل حالة</option>--}}
{{--                        <option value="3">طلبات صرف مواد</option>--}}
{{--                    </select>--}}
{{--                    <select  name="" id="" class="col-md-4"></select>--}}
{{--                </div>--}}











{{--                    <div style = " margin-bottom: 30px ;text-align: center;padding-left: 399px ; " class = "row">--}}
{{--                        <div class="col-md-5" >--}}
{{--                            <label >الرقم</label>--}}
{{--                            <input type="text"  disabled>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-5">--}}
{{--                            <label >التاريخ</label>--}}
{{--                            <input type="date">--}}

{{--                            --}}{{--                            <input  value="{{ now()->toDateTimeString() }}" disabled>--}}
{{--                        </div>--}}
{{--                    </div>--}}
