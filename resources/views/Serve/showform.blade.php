<html>
<head> <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body style="direction: rtl">

<form action="#" method="post">
    @csrf
    <div style = " margin-bottom: 30px ;text-align: center;padding-left: 50px ; padding-right: 150px" class = "row">
        <div class="col-md-5" ><br><br><br>
            <label >الرقم</label>
            <input type="text" value={{$transfer->id}}  disabled>
        </div>
        <div class="col-md-5"> <br><br><br>
            {{--                <label >التاريخ</label>--}}
            {{--                <input type="date">--}}

            <input  value="{{ now()->toDateTimeString() }}" disabled>
        </div>
    </div>
    <br>
    <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 35px" class = "row">
        <div class="col-md-8" style ="padding-left: 130px ; padding-right: 200px">
            <label>صفة المحول:</label>
            <input type="text" name="transformer_adjective" value={{$transfer->transformer_adjective}} class="col-md-10">
        </div>
        <br><br>
    </div>
    <div style= " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 70px" class = "row">
        <div class="col-md-8" style ="padding-left: 130px ; padding-right: 200px">
            <label>الابن:</label>
            <input type="text" name="son" value={{$transfer->son}}  class="col-md-11">
            {{--                <a class="btn btn-primary col-md-3 " style="margin-right: 750px; margin-top: -35px" href="{{route('serve.form')}}"  role="button">بحث</a> <br> <br>--}}
        </div>
    </div>
    <br>
    <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 350px" class = "row">
        <div class="col-md-12">
            <label for="note" style="margin: 5px">وصف المشكلة:</label>
            <textarea id="description" name="problem_description"  class="form-control"  placeholder="">{{$transfer->problem_description}}</textarea>
        </div>
    </div>
    <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 350px" class = "row">
        <div class="col-md-12">
            <label for="note" style="margin: 5px">ملاحظات:</label>
            <textarea id="description" name="notes" class="form-control"  placeholder="">{{$transfer->notes}}</textarea>
        </div>
    </div>
    <div style = " margin-bottom: 30px ;text-align: center;padding-left: 120px ; padding-right: 350px" class = "row">
        <div class="col-md-12">
            <label for="note" style="margin: 5px">إجراءات:</label>
            <textarea id="description" name="procedures" class="form-control"  placeholder="">{{$transfer->procedures}}</textarea>
        </div>
    </div>
    <br>
    <div style = " text-align: center;">
        <a class="btn btn-primary col-md-2" type="submit" href="{{route('serve.form')}}"> رجوع</a>
    </div>
</form>
</body>

