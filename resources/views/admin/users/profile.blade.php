<x-admin-master>

    @section('content')
    <h1>User Profile for {{ $user->name }}</h1>
    <div class="row">
        <div class="col-sm-6">
            <form action="{{ route('user.profile.update',$user) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <img src="{{ $user->avatar }}" alt="" srcset="">
                <div class="form-group">
                    <input type="file" name="avatar" id="">
                </div>
                <div class="form-group">
                    <label for="username"></label>
                    <input type="text" name="username" id="" class="form-control" value="{{ $user->username }}"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" name="name" id="" class="form-control" value="{{ $user->name }}" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="text" name="email" id="" class="form-control" value="{{ $user->email }}"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" name="password" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="password_confirmation"></label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    @endsection
</x-admin-master>
