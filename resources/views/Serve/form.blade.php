
@extends('parent')
    @section('title' , 'طلبات تحويل حالة')
    @section('content')

<fieldset>
{{--    <legend style ="color: red;  margin-bottom: 30px ;text-align: center;padding-left: 50px ; padding-right: 150px" class = "row"> <h4> "طلب تحويل حالة" </h4> </legend>--}}
    <br> <br>
    <form action="{{route('transfer.store')}}" method="post">
        @csrf
        <div style = " margin-bottom: 30px ;text-align: center;padding-left: 50px ; padding-right: 150px" class = "row">
            <div class="col-md-5" >
                <label >الرقم</label>
                <input type="text"   disabled>
            </div>
            <div class="col-md-5">
{{--                <label >التاريخ</label>--}}
{{--                <input type="date">--}}

                                <input  value="{{ now()->toDateTimeString() }}" disabled>
            </div>
        </div>
        <br>
        <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 35px" class = "row">
            <div class="col-md-8" style ="padding-left: 130px ; padding-right: 200px">
                <label>صفة المحول:</label>
                <input type="text" name="transformer_adjective" class="col-md-10">
            </div>
            <br><br>
        </div>
        <div style= " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 70px" class = "row">
            <div class="col-md-8" style ="padding-left: 130px ; padding-right: 200px">
                <label>الابن:</label>
                <input type="text" name="son" class="col-md-11">
{{--                <a class="btn btn-primary col-md-3 " style="margin-right: 750px; margin-top: -35px" href="{{route('serve.form')}}"  role="button">بحث</a> <br> <br>--}}
            </div>
        </div>
        <br>
        <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 350px" class = "row">
            <div class="col-md-12">
                <label for="note" style="margin: 5px">وصف المشكلة:</label>
                <textarea id="description" name="problem_description" class="form-control"  placeholder=""></textarea>
            </div>
        </div>
        <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 350px" class = "row">
            <div class="col-md-12">
                <label for="note" style="margin: 5px">ملاحظات:</label>
                <textarea id="description" name="notes" class="form-control"  placeholder=""></textarea>
            </div>
        </div>
        <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 350px" class = "row">
            <div class="col-md-12">
                <label for="note" style="margin: 5px">إجراءات:</label>
                <textarea id="description" name="procedures" class="form-control"  placeholder=""></textarea>
            </div>
        </div>
        <br>
        <div style="padding-right: 790px">
        <button class="btn btn-primary col-md-2"  type="submit"> حفظ </button>
        </div>
    </form>
</fieldset>
</div>
{{--<div style = " text-align: center;">--}}
{{--    <a class="btn btn-primary col-md-2 " href="{{route('serve.form')}}" role="button">حفظ</a> <br> <br>--}}
{{--</div>--}}
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
            <th scope="col">صفة المحول</th>
            <th scope="col"> الابن</th>
            <th scope="col">وصف المشكلة</th>
            <th scope="col">ملاحظات</th>
            <th scope="col">إجراءات</th>
    {{--        <th scope="col">حالة الطلب</th>--}}
            <th scope="col">عمليات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($serves as $key=> $serve)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$serve->id}}</td>
            <td>{{$serve->transformer_adjective}}</td>
            <td>{{$serve->son}}</td>
            <td>{{$serve->problem_description}}</td>
            <td>{{$serve->notes}}</td>
            <td>{{$serve->procedures}}</td>
    {{--        <td>--</td>--}}
            <td>
                <a class="btn btn-danger" role="button" href="{{route('serve.showform',$serve->id)}}">عرض</a> <br> <br>
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
