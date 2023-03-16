@include ('layouts.bootstrap')

<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="text-primary text-center mt-3">ADD USER</h1>
            <form role="form" method="post" action="/store_user">
            @csrf
                <div class="card mt-5">
                    <div class="card-header text-center text-secondary">PLEASE FILL IN YOUR DETAILS!!</div>
                    <div class="card-body">
                        <div class="text-center">
                            <label class="me-4">Name</label>
                            <input size="50" type="text" name="name" placeholder="Please fill in your name"/>
                        </div>
                        <div class="text-center mt-4">
                            <a class="btn btn-danger" href="/">Cancel</a>
                            <button class="btn btn-success" type="submit">Add</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</section>