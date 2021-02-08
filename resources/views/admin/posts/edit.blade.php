<x-admin-master>
    @section('content')

    <h1>Edit a Post</h1>

    <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title"></label>
            <input type="text" name="title" id="title" class="form-control" aria-describedby=""
                placeholder="Enter title"
                value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <div-><img src="{{ $post->post_image }}" alt=""></div->
            <label for="file"></label>
            <input type="file" name="post_image" id="post_image" class="form-control-file" aria-describedby=""
                placeholder="">
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" id="" cols="30" rows="10">{{ $post->title }}</textarea></div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
</x-admin-master>
