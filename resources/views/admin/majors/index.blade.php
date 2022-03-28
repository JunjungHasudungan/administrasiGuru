@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="card mt-2">
                        <div class="card-title mt-2 ml-2">  </div>
                        <div class="card-body">
                            {{--  @can('major_create')  --}}
                                <a href="#" class="btn btn-primary mb-2">{{ trans('global.create_new_report') }}</a>
                            {{--  @endcan  --}}
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>{{ trans('cruds.majors.fields.no') }}</th>
                                        <th>{{ trans('cruds.majors.fields.name') }}</th>
                                        <th>{{ trans('cruds.majors.fields.cost') }}</th>
                                        <th>{{ trans('cruds.majors.fields.option') }}</th>
                                    </tr>
                                    @foreach ($majors as $major)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$major->name}}</td>
                                        <td>{{ $major->cost }}</td>
                                        <td>
                                            <form action="#" method="POST" style="display:inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                            </form>

                                            <button class = "btn btn-sm btn-secondary" type="button"><a href="#" > {{ trans('global.edit') }} </a> </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                <div class="card card-footer float-center"> {{ $majors->links() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
