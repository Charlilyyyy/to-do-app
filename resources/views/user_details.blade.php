@include ('layouts.bootstrap')

<section>
{{-- {{$current_user}} --}}
<a class="btn btn-secondary" href="/">Back to home</a>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form role="form" method="post" action="/store_user_todo">
                @csrf
                <input type="text" name="current_user_id" value="{{$current_user->id}}"/>   
            <h1 class="text-primary text-center mt-3">{{$current_user->name}} To Do List</h1>
            <div class="card">
                <div class="card-body">
                    @if(count($current_user->toDos) > 0)
                    <table class="table">
                        <tbody>
                            @foreach ($current_user->toDos as $todo)
                            <tr>
                                    <td>{{$todo->todos}}</td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h4 class="text-danger text-center">No record found, please add user</h4>
                    @endif
                </div>
            </div>
            <div class="mx-5 mt-2">
                
                    <label><h5>Activity Name</h5></label>
                    <input type="text" name="activity" size="60"/>
                    <button type="submit" class="btn btn-success">Add</button>
                    
                
            </div>
        </div>
        </form>
        <div class="col-3"></div>
    </div>
</section>