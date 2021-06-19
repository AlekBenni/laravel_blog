@extends('admin.layout.layout')

@section('custom_css')
    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.css">
@endsection

@section('custom_js')
    <script src="/plugins/select2/js/select2.full.min.js"></script>
    <script>
        $('.select2').select2();
    </script>
@endsection

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Страница создания статей</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Админка</a></li>
              <li class="breadcrumb-item active">Страница создания статей</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">

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
                <h3 class="card-title">Добавить статью</h3>
              </div>

              <form role="form" method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="title">Название статьи</label>
                    <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" name="title"
                    placeholder="Название статьи">
                </div>

                <div class="form-group">
                    <label for="description">Цитата</label>
                    <textarea id="description" name="description" class="form-control @error ('title') is-invalid @enderror"
                    rows="3" placeholder="Цитата"></textarea>
                </div>

                <div class="form-group">
                    <label for="content">Контент</label>
                    <textarea id="content" name="content" class="form-control @error ('title') is-invalid @enderror"
                    rows="7" placeholder="Контент"></textarea>
                </div>

                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach($categories as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                         @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="tags">Теги</label>
                  <div class="select2-primary">
                  <select id="tags" name="tags[]" class="select2" data-dropdown-css-class="select2-primary" multiple="multiple" data-placeholder="Выбор тегов" style="width: 100%;">
                   @foreach($tags as $k => $v)
                        <option value="{{$k}}">{{$v}}</option>
                   @endforeach

                  </select>
                  </div>
                </div>

                <div class="form-group">
                    <label for="thumbnail">Изображение</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                        <label class="custom-file-label" for="thumbnail">Выбрать изображение</label>
                      </div>
                    </div>
                </div>

                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Создать</button>
                </div>
              </form>
            </div>

        <div class="card-footer">
          Footer
        </div>
      </div>

    </section>

@endsection
