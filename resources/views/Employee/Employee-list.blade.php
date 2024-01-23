@extends ('layouts.master')
@section('page')


<h1 class="aaa"><a href="index.html">Employee</a></h1>
<div class="dv">
    
    <a href="{{url('/Employee/add')}}" class="btn2"><span data-feather="user-plus"></span>
        Add</a>
    

    
</div><br>
 <table>
            <thead >
                <tr>
                <th>ID</th>
                <th >Full Name</th>
                <th >Gender</th>
                <th >Date of Birth</th>
                <th >Place of Birth</th>
                <th >Phone Number</th>
                <th >Employee Title</th>
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
                    <td></td>
                    <td class="btn-action"><a href="#"><span data-feather="user-x">d</span></a>
                       
                    </td>
                    <td class="btn-action"><a href="{{url('/Employee/edit')}}"><span class="text-primary" data-feather="edit-3">e</span></a>
                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td class="btn-action"><a href="#"><span data-feather="user-x">d</span></a>
                       
                    </td>
                    <td class="btn-action"><a href="{{url('/Employee/edit')}}"><span class="text-primary" data-feather="edit-3">e</span></a>
                        
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