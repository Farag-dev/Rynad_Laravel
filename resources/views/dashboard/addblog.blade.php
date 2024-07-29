@extends('dashboard.layout.app')
@section('title')
Add Blog
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12 mx-auto">

 <div class="card-body p-3  mx-auto">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
        <form class="mb-5" action="{{ route('store_blog') }}" method="post" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="form-group">
                <label for="Main_Title">Main Title</label>
                <input type="text" class="form-control " placeholder="Main Title" name="main_title" id="Main_Title">
            </div>
            <div class="form-group ">
                <label for="image">image</label>
                <input type="file" class="form-control "  name="image" id="image">
            </div>
            <div class="form-group">
                <label for="alt_text">Alt_Text for image</label>
                <input type="text" class="form-control py-1 "  name="alt_text" id="alt_text">
            </div>
            <div class="form-group">
                <label for="desc">Introduction</label>
                <textarea class="form-control " rows="3"  name="Introduction" id="desc" placeholder="Introduction"></textarea>
            </div>
            <div class="form-group">
                <label for="desc">Add blog Tags</label>
                <p class="py-1 text-black-50" >Write keywords and seprate them via comma " , "</p>
                <input type="text" class="form-control "  name="blog_tags" id="blog_tags">
            </div>
            <div class="form-group">
                <label for="desc">Add meta description</label>
                <input type="text" class="form-control "  name="meta_description" id="meta_description">
            </div>
            <div class="form-group">
                <label for="sub_title_one">Sub Title One</label>
                <input type="text" class="form-control " placeholder=" sub title one" name="sub_title_one" id="sub_title_one">
            </div>
            <div class="form-group">
                <label for="description_one">Description One</label>
                <textarea class="form-control " rows="3"  name="description_one" id="description_one" placeholder="Description One"></textarea>
            </div>
            <div class="form-group">
                <label for="sub_title_two">Sub Title Two</label>
                <input type="text" class="form-control " placeholder=" sub title two" name="sub_title_two" id="sub_title_two">
            </div>
            <div class="form-group">
                <label for="description_two">Description Two</label>
                <textarea class="form-control " rows="3"  name="description_two" id="description_two" placeholder="Description Two"></textarea>
            </div>

            <div class="form-group">
                <label for="sub_title_three">Sub Title Three</label>
                <input type="text" class="form-control " placeholder=" sub title three" name="sub_title_three" id="sub_title_three">
            </div>
            <div class="form-group">
                <label for="description_three">Description Three</label>
                <textarea class="form-control " rows="3"  name="description_three" id="description_three" placeholder="Description Three"></textarea>
            </div>


            <div class="form-group d-block text-center">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Add Blog</button>
            </div>


        </form>
    </div>
        </div>
    </div>

</div>

@endsection
