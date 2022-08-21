<html>

<head> <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="direction: rtl">
        <form action="">
            <div style = " margin-bottom: 30px ;text-align: center;padding-left: 50px ; padding-right: 150px" class = "row">
                <div class="col-md-5" > <br><br><br>
                    <label >الرقم</label>
                    <input type="text"  disabled>
                </div>
                <div class="col-md-5">  <br><br><br>
                    <input  value="{{ now()->toDateTimeString() }}" disabled>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الصنف</th>
                    <th scope="col">الوحدة</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">القيمة</th>
                    <th scope="col">الغرض من الشراء</th>
                    <th scope="col">عمليات</th>
                </tr>
                </thead>
                <tbody class="test">
                </tbody>
            </table>
            <br>
            <div style = " text-align: center;">
                <a class="btn btn-primary col-md-2" type="submit" href="{{route('serve.finalform')}}"> رجوع</a>
            </div>
        </form>
        </body>
        </html>



