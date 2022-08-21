<html>
<head> <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="direction: rtl">

<br> <br><br>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">رقم الطلب</th>
            <th scope="col">الوصف</th>
            <th scope="col"> التاريخ</th>
            <th scope="col">نوع الطلب</th>
            <th scope="col">حالة الطلب</th>
            <th scope="col">عمليات</th>
        </tr>
        </thead>
        <tbody>
        @php
        $d= 0;
        @endphp
            @foreach($maintenances as $key=> $maintenance)
        <tr>
            <th scope="row">{{++$d}}</th>
                    <td>{{$maintenance->id}}</td>
                    <td>{{$maintenance->description_problem}}</td>
                    <td>{{$maintenance->created_at}}</td>
                    <td>{{$maintenance->order_type}}</td>
                    <td>جديد</td>
            <td>
                <a class="btn btn-danger" role="button" href="{{route('serve.show',$maintenance->id)}}">عرض</a> <br> <br>
            </td>
        </tr>
                        @endforeach

            @foreach($transfers as $key=> $transfer)

                <tr>
                    <th scope="row">{{++$d}}</th>
                    <td>{{$transfer->id}}</td>
                    <td>{{$transfer->problem_description}}</td>
                    <td>{{$transfer->created_at}}</td>
                    <td>{{$transfer->transfer_type}}</td>
                    <td>جديد</td>
                    <td>
                        <a class="btn btn-danger" role="button" href="{{route('serve.showform',$transfer->id)}}">عرض</a> <br> <br>
                    </td>
                </tr>
            @endforeach

            @foreach($index as $key=> $index)

                <tr>
                    <th scope="row">{{++$d}}</th>
                    <td>{{$index->id}}</td>
                    <td></td>
                    <td>{{$index->created_at}}</td>
                    <td>{{$index->order_type}}</td>
                    <td> جديد </td>
                    <td>
                        <a class="btn btn-danger" role="button">عرض</a> <br> <br>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
<br><br><br><br>
<div style = " text-align: center;  margin-top: -40px ;">
    <a class="btn btn-primary col-md-2 " href="{{route('serves')}}" role="button">رجوع</a> <br> <br>
</div>

</html>
