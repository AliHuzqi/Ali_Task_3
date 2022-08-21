<html>
<head> <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="direction: rtl">

<form action="#" method="post">
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
                    <input type="text" value= {{$maintenanceReq->id}}   disabled>
                </div>
                <div class="col-md-5">

                    <input id="order_date" name="order_date" value="{{ now()->toDateTimeString() }}">
                </div>
            </div>
            <br>
            <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 40px" class = "row">
                <div class="col-md-8" style ="padding-left: 130px ; padding-right: 40px">
                    <label>نوع الصيانة:</label>
                    <input id="maintenance_type" type="text"    value= {{$maintenanceReq->maintenance_type}}    name="maintenance_type" class="col-md-4">
                    {{--                <label>نوع الصيانة</label>--}}
                    {{--                <label >نوع الصيانة</label>--}}
                    {{--                <select  name="" id="" class="col-md-4"></select>--}}
                </div>
            </div>
            <br>
            <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 350px" class = "row">
                <div class="col-md-12">
                    <label for="description_problem" style="margin: 5px">وصف المشكلة</label>
                    <textarea id="description_problem" class="form-control"  name="description_problem"  placeholder=""> {{$maintenanceReq->description_problem}}</textarea>
                </div>
            </div>
            <br>
        </fieldset>
    </div>
    <div style = " text-align: center;">
        <a class="btn btn-primary col-md-2"  type="submit" href="{{route('serve.create')}}"> رجوع</a>
    </div>
</form>


</body>
</html>



