@include ('layouts.bootstrap')



<section>
    @if (Session::has('msg'))
        <div class="alert alert-success text-center">
            <h4>{{Session::get('msg')}}</h4>
        </div>
    @endif
    <h1 class="text-center my-5">CHARLIE TO DO APP</h1>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="my-2">SELECT USERS</h3>
                    <a href="/add_user" class="btn btn-success">Add User</a>
                </div>
                <div class="card-body">
                    @if(count($users) > 0)
                    <table class="table">
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                    <td class="mx-5 px-5">{{$user->name}}</td>
                                    <td class="ps-5 ms-5"><a href="{{URL('/user/'.$user->id.'/details/')}}" class="btn btn-primary">View My List</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h4 class="text-danger text-center">No record found, please add user</h4>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    
</section>
{{-- <button class="btn btn-primary">fcvghbj</button>

{{$user}} --}}