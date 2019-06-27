






<!-- 
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form> -->


<table border=1>
<tr>

<th>Id</th>
<th>contractor name</th>

<th>Image</th>

<th>contractor landmark</th>


<th>category</th>

<th>country</th>


<th>state</th>


<th>panchayth</th>


<th>Licence number</th>


<th>Expiration date</th>



</tr>
@foreach($demo as $value)
<tr>
<td>{{$value->id}}</td>
<td>{{$value->contractor_name}}</td>
<!-- <td>img src="" URL::asset(images/{{$value->contractor_image}}""</td> -->

<td><img src="images/{{$value->contractor_image}}" width="150px" height="100px"> </td>
<!-- <td>{{$value->contractor_image}}</td> -->
<td>{{$value->contractor_landmark}}</td>
<td>{{$value->category}}</td>
<td>{{$value->country}}</td>
<td>{{$value->state}}</td>
<td>{{$value->panchayath}}</td>
<td>{{$value->contractor_licenceno}}</td>
<td>{{$value->Expiration_date}}</td>


</tr>
@endforeach
</table>