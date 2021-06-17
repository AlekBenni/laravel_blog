@extends('admin.layout.layout')

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Страница категорий</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Админка</a></li>
              <li class="breadcrumb-item active">Страница категорий</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Списки категорий</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>




        <div class="card-body">
            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Добавить категорию</a>
                @if (count($categories))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 30px">#</th>
                                    <th>Наименование</th>
                                    <th>Slug</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->slag}}</td>
                                    <td>
                                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-sm float-left mr-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{route('categories.destroy', $category->id)}}" method="post" class="float-left">
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
                                    <p>Категорий пока нет...</p>
                                @endif
                            </div>

        <!-- /.card-body -->

        <div class="card-footer clearfix">
            {{$categories->links()}}
        </div>




        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->




@endsection
