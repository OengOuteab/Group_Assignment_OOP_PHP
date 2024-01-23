@extends ('layouts.master')
@section('page')

<h1 class="aaa"><a href="index.html">Product</a></h1>
<div class="dv">
    
    <a href="{{url('/Products/add')}}" class="btn2"><span data-feather="plus"></span>
        Create</a>
    

    
</div><br>
 <table>
            <thead >
                <tr>
                <th>ID</th>
                <th >Product Name</th>
                <th >QTY</th>
                <th >Price In</th>
                <th >Price Out</th>
                <th >Description</th>
                <th>Edit</th>
                <th>Add</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="btn-action"><a href="{{url('/Products/editt')}}"><span class="text-primary" data-feather="edit">e</span></a>
                    <td class="btn-action"><a href="{{url('/Products/edit')}}"><span class="text-primary" data-feather="plus">e</span></a>
                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="btn-action"><a href="{{url('/Products/editt')}}"><span class="text-primary" data-feather="edit">e</span></a>
                    <td class="btn-action"><a href="{{url('/Products/edit')}}"><span class="text-primary" data-feather="plus">e</span></a>
                        
                    </td>
                </tr>
               
            </thead>
            {{-- <tbody>
                <tr>
                    <th >1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody> --}}
        </table>
</table>
@endsection