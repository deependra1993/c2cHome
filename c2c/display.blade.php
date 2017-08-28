<!DOCTYPE html>
<html>
<head>
    <title>Display Product</title>
</head>
<body>

</body>
</html>><table>
                    <tr>
                        <td> Product ID</td>
                        <td>Product Name</td>
                        <td>price</td>
                        <td>Details</td>
                    </tr>
                    @foreach($data as $value)
                    <tr>
                    <td>{{$value->pid}}</td>
                    <td>{{$value->pname}}</td>
                    <td>{{$value->price}}</td>
                    <td>{{$value->details}}</td>
                    @endforeach
                   
                </tr>
                </table>
                </body>
</html>
                