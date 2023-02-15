<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Address</th>
    </tr>
@foreach ($customers as $customer)
<tr>
    <th>{{$customer->firstName}}</th>
    <th>{{$customer->lastName}}</th>
    <th>{{$customer->email}}</th>
    <th>{{$customer->contactNumber}}</th>
    <th>{{$customer->address}}</th>
  </tr>
@endforeach
  
</table>

