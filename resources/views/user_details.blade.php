@include ('layouts.bootstrap')

<section>
{{-- {{$current_user}}
{{$all_todo}} --}}
<a class="btn btn-secondary" href="/">Back to home</a>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            
                 
            <h1 class="text-primary text-center mt-3">{{$current_user->name}} To Do List</h1>
            <div class="card">
                <div class="card-body">
                    @if(count($all_todo) > 0)
                    <table class="table">
                        <tbody>
                            @foreach ($all_todo as $todo)
                            <form role="form" method="post" action="{{URL('/delete_user_todo/'.$todo->id.'/delete')}}"  >
                                @csrf
                                @method('DELETE')
                            <tr>
                                    <td>{{$todo->todos}}</td>
                                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h4 class="text-danger text-center">No record found, please add user</h4>
                    @endif
                </div>
            </div>
            <div class="mx-5 mt-2">
                <form role="form" method="post" action="/store_user_todo">
                    @csrf
                    <input type="hidden" name="current_user_id" value="{{$current_user->id}}"/>  
                    <label><h5>Activity Name</h5></label>
                    <input type="text" name="activity" size="60"/>
                    <button type="submit" class="btn btn-success">Add</button>
                </form>
                
            </div>
        </div>
        
        <div class="col-3"></div>
    </div>
</section>