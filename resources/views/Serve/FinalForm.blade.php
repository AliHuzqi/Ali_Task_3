
@extends('parent')

@section('title', 'طلبات صرف مواد')

    @section('style')
    @endsection

    @section('content')

            @csrf

        <fieldset>
{{--            <legend style ="color: red;  margin-bottom: 30px ;text-align: center;padding-left: 50px ; padding-right: 150px" class = "row"> <h4> "طلب صرف مواد" </h4> </legend>--}}
            <br> <br>
            <form action="{{route('serve.store')}}" method="post">
                @csrf
                <div style = " margin-bottom: 30px ;text-align: center;padding-left: 50px ; padding-right: 150px" class = "row">
                    <div class="col-md-5" >
                        <label >الرقم</label>
                        <input type="text"  disabled>
                    </div>
                    <div class="col-md-5">
{{--                        <label >التاريخ</label>--}}
{{--                        <input type="date">--}}

                        <input  value="{{ now()->toDateTimeString() }}" disabled>
                    </div>
                </div>
                <br>
                <a class="btn btn-primary col-md-1 add" style="margin-right: 1200px; margin-top: -30px"    role="button">إضافة</a> <br> <br>
                <br>
                <table class="table table-striped">
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
                    {{--            @foreach($serves as $serve)--}}

                    {{--            @endforeach--}}
                    </tbody>
                </table>
                <br>
                <div style = " text-align: center;">
                    <button class="btn btn-primary col-md-2"  type="submit"> حفظ </button>
                </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script>
                var count = 0;
                var rowIdx = 0;
                $(document).on('click', '.add', function() {
                    count++;
                    var html = '';
                    html += `<tr id="R${++rowIdx}">`;
                        html += `<td class="row-index text-center"><p>${rowIdx}</p></td>`;
                        html +=
                        `<td>
                            <input type="text" class="col-md-4" name="item[]">
                        </td>`;
                        html +=

                        `<td>
                      <div>
                    <label ></label>
                    <select class="col-md-8" name="unit[]">
                        <option selected></option>
                        <option value="عدد">عدد</option>
                        <option value="كمية">كمية</option>
                        <option value="وحدة">وحدة</option>
                    </select>
                </div>
                        </td>`;

                        html += `<td> <input type="number" class="col-md-4" name="quantity[]"> </td>`;
                        html += `<td> <input type="number" class="col-md-4" name="the_value[]"> </td>`;
                        html +=` <td><input type="text" class="col-md-4" name="purpose_of_purchase[]"> </td>`;
                        html +=
                        `<td><button type="button" name="remove" class="btn btn-danger btn-xs remove">حذف</button></td>`;
                        $('.test').append(html);
                        });
                        $(document).on('click', '.remove', function() {
                            $(this).closest('tr').remove();
                        });
            </script>
        </fieldset>

        <br> <br><br>
        <div>
            <table class="table table-striped">
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
                <tbody>
                @foreach($serves as $key => $serve)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$serve->item}}</td>
                        <td>{{$serve->Unit}}</td>
                        <td>{{$serve->Quantity}}</td>
                        <td>{{$serve->the_value}}</td>
                        <td>{{$serve->purpose_of_purchase}}</td>
                        <td><button type="button" name="remove" class="btn btn-danger btn-xs remove">حذف</button></td>

                        {{--                        <td> <a class="btn btn-danger" role="button" href="{{route('serve.showfinalform',$serve->id)}}">عرض</a> <br> <br> </td>--}}

                        {{-- <td> <a class="btn btn-danger" role="button" href="#">عرض</a> <br> <br> </td>--}}
                    </tr>

                    {{--                        <td>--</td>--}}
                    {{--                        <td>--</td>--}}
                    {{--                        <td>--</td>--}}
                    {{--                        <td>--</td>--}}
                    {{--                        <td>--</td>--}}
                    {{--                        <td>--</td>--}}


                @endforeach
                </tbody>
            </table>
        </div>
        </div>



{{--        {!! $serves->links() !!}--}}

    @endsection
    @section('script')
@endsection
