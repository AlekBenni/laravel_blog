@extends('admin.layout.layout')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Страница статей</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Админка</a></li>
              <li class="breadcrumb-item active">Страница статей</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Список статей</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>




        <div class="card-body">
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Добавить статью</a>
                @if(count($posts))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 30px">#</th>
                                    <th>Заголовок</th>
                                    <th>Категория</th>
                                    <th>Теги</th>
                                    <th>Дата</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->category->title}}</td>
                                    <td>{{$post->tags->pluck('title')->join(',')}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>
                                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info btn-sm float-left mr-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{route('posts.destroy', $post->id)}}" method="post" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                              onclick="return confirm('Подтвердите удаление')">
                                              <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p>Cтатей пока нет...</p>
                                @endif
                            </div>

        <div class="card-footer clearfix">
            {{$posts->links()}}
        </div>




        <div class="card-footer">
          Footer
        </div>
      </div>
    </section>

@endsection
