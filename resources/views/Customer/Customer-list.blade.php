@extends ('layouts.master')
@section('page')


<h1 class="aaa"><a href="index.html">Customer</a></h1>
<div class="dv">
    
    <a href="{{url('/Customer/add')}}" class="btn2"><span data-feather="user-plus"></span>
        Add</a>
    

    
</div><br>
 <table>
            <thead >
                <tr>
                <th>ID</th>
                <th >Full Name</th>
                <th >Gender</th>
                <th >Date of Birth</th>
                <th >Phone Number</th>
                <th >Description</th>
                <th>Delete</th>
                <th>Edit</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="btn-action"><a href="#"><span data-feather="user-x">d</span></a>
                       
                    </td>
                    <td class="btn-action"><a href="{{url('/Customer/edit')}}"><span class="text-primary" data-feather="edit">e</span></a>
                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td class="btn-action"><a href="#"><span data-feather="user-x">d</span></a>
                       
                    </td>
                    <td class="btn-action"><a href="{{url('/Customer/edit')}}"><span class="text-primary" data-feather="edit">e</span></a>
                        
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