@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Страница редактирования категории</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Админка</a></li>
              <li class="breadcrumb-item active">Страница редактирования категории</li>
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
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Изменить категорию: <b>{{$category->title}}</b></h3>
              </div>

              <form role="form" method="post" action="{{route('categories.update', $category->id)}}">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Название категории</label>
                    <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" name="title"
                    placeholder="Название категории">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Изменить</button>
                </div>
              </form>
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
