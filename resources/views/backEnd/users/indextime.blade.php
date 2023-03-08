@extends('backLayout.app')
@section('title')
Users
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">Users</div>
        <span class="badge bg-green">1</span>

        <div class="panel-body">

<table class="table table-bordered table-striped table-hover" id="tblUsers">
    <thead>
        <tr>

            <th>Select All <input name="select_all" value="1" id="example-select-all" type="checkbox" /></th>
            <th>ID</th>
            <th>user id</th>
            <th>Last name</th>
            <th>Date </th>
            <th>Heure d'arriver</th>
            <th>Heure de départ</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($timesave as $user)
            <tr>
                <td>{{ Form::checkbox('sel', $user->id, null, ['class' => ''])}}</td>
                <td>{{$user->id}}</td>
                <td><a href="{{route('user.show', $user->id)}}">{{$user->user_id}}</a></td>
                <td><a href="{{route('user.show', $user->id)}}">salut</a></td>
                <td>{{$user->date_today}}</td>
                <td> <a href="">{{$user->heure_arriver}}</a>  </td>
                <td>{{$user->heure_sortie}}</td>
                <td>
                   
                    @if (Sentinel::getUser()->hasAccess(['user.edit']))
                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-success btn-xs">edit</a>
                    @endif
                    @if (Sentinel::getUser()->hasAccess(['user.destroy']))
                    {!! Form::open(['method'=>'DELETE', 'route' => ['user.destroy', $user->id], 'style' => 'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs','id'=>'delete-confirm']) !!}
                    {!! Form::close() !!}
                    @endif

                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@if (Sentinel::getUser()->hasAccess(['user.destroy']))
<button id="delete_all" class='btn btn-danger btn-xs'>Delete Selected</button>
@endif

</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        table = $('#tblUsers').DataTable({
            'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
            }],
          'order': [1, 'asc']
            });
    });
      // Handle click on "Select all" control
   $('#example-select-all').on('click', function(){
      // Check/uncheck all checkboxes in the table
      var rows = table.rows({ 'search': 'applied' }).nodes();
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
   });
  $("input#delete-confirm").on("click", function(){
        return confirm("Are you sure to delete this user");
    });
  // start Delete All function
  $("#delete_all").click(function(event){
        event.preventDefault();
        if (confirm("Are you sure to Delete Selected?")) {
            var value=get_Selected_id();
            if (value!='') {

                 $.ajax({
                    type: "POST",
                    cache: false,
                    url : "{{action('UserController@ajax_all')}}",
                    data: {all_id:value,action:'delete'},
                        success: function(data) {
                          location.reload()
                        }
                    })

                }else{return confirm("You have to select any item before");}
        }
        return false;
   });
  //End Delete All Function
  //Start Deactivate all Function
    $("#deactivate_all").click(function(event){
        event.preventDefault();
        if (confirm("Are you sure to Deactivate Selected ?")) {
            var value=get_Selected_id();
            if (value!='') {

                 $.ajax({
                    type: "POST",
                    cache: false,
                    url : "{{action('UserController@ajax_all')}}",
                    data: {all_id:value,action:'deactivate'},
                        success: function(data) {
                          location.reload()
                        }
                    })

                }else{return confirm("You have to select any item before");}
        }
        return false;
    });
    //End Deactivate Function
      //Start Activate all Function
    $("#activate_all").click(function(event){
        event.preventDefault();
        if (confirm("Are you sure to Activate Selected ?")) {
            var value=get_Selected_id();
            if (value!='') {

                 $.ajax({
                    type: "POST",
                    cache: false,
                    url : "{{action('UserController@ajax_all')}}",
                    data: {all_id:value,action:'activate'},
                        success: function(data) {
                          location.reload()
                        }
                    })

                }else{return confirm("You have to select any checkbox before");}
        }
        return false;
    });
    //End Activate Function



   
   function get_Selected_id() {
    var searchIDs = $("input[name=sel]:checked").map(function(){
      return $(this).val();
    }).get();
    return searchIDs;
   }
</script>
@endsection
