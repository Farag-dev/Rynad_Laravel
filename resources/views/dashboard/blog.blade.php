@extends('dashboard.layout.app')
@section('title')
Blogs
@endsection
@section('content')
 <!-- /.card-header -->
 <div class="card-body p-0">
    @if (count($blogs)>0)


   <table class="table table-striped">
       @if (session('status'))
       <div class="alert alert-success" role="alert">
           {{ session('status') }}
       </div>
   @endif
     <thead>
       <tr>
         <th style="width: 10px">#</th>
         <th>Main Title</th>
         <th>Image</th>
         <th>alt_text for image</th>
         <th>Introduction</th>
         <th>blog tags</th>
         <th>meta description</th>
         <th>Sub Title One</th>
         <th>Description One</th>
         <th>Sub Title Two</th>
         <th>Description Two</th>
         <th>Sub Title Three</th>
         <th>Description Three</th>
         <th>edit</th>
         <th>delete</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($blogs as $key => $blog)
         <tr>
           <td>{{ $key+1 }}</td>
           <td>{{ $blog->main_title }}</td>
           <td><img src="{{ Storage::url($blog->image) }}" width="100px" alt="{{ $blog->main_title }}"></td>
           <td>{{ $blog->alt_text}} </td>
           <td>{{ $blog->Introduction}} </td>
           <td>{{ $blog->blog_tags}} </td>
           <td>{{ $blog->meta_description}} </td>
           <td>{{ $blog->sub_title_one }} </td>
           <td>{{ $blog->description_one }}</td>
           <td>{{ $blog->sub_title_two }} </td>
           <td>{{ $blog->description_two }}</td>
           <td>{{ $blog->sub_title_three }} </td>
           <td>{{ $blog->description_three }}</td>
           <td><a href="{{ route('show_editblog', ['id'=>$blog->id]) }} " class="btn btn-sm text-center"><i class="fa fa-edit text-warning"></i></a></td>
           <td class="text-center">
            <button class="text-center" style="background:none;border:none;" data-bs-toggle="modal" data-bs-target="#exampleModal{{$blog->id}}">
                <i class="fa fa-trash text-center text-danger"></i>
              </button>
                       <!-- Modal -->
                       <div class="modal fade" id="exampleModal{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <form action=" {{ route('delete_blog', ['id'=>$blog->id]) }} " method="post">

                 @csrf
                 @method('DELETE')
                 <div class="modal-dialog">
                 <div class="modal-content">
                 <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Delete Approved</h5>

                 </div>
                 <div class="modal-body">
                 Are you sure delete <H4>"{{ $blog->main_title }}"</H4> BLOG
                 </div>
                 <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-danger"> Delete</button>
                 </div>
                 </div>
                 </div>

             </form>
              </div>

             </td>
         </tr>
@endforeach
     </tbody>
   </table>
@else
   <h1 class="text-center">No Blogs</h1>
    @endif
    <div class="pt-3 mx-3 mb-5 ob-5">{{ $blogs->links() }}</div>
 </div>

 <!-- /.card-body -->
@endsection
