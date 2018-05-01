@extends('layouts.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Проекты</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Список проектов</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <p>Таблица с перечнем проектов с параметрами выполнения и редактирования</p>

                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 25%">Название</th>
                                <th style="width: 25%">Команда</th>
                                <th>Приоритет</th>
                                <th>Статут</th>
                                <th style="width: 25%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{++$loop->index}}</td>
                                <td>
                                    <a href="{{route('projects.show', $project)}}">{{$project->title}}</a>
                                    <br />
                                    <small><i class="far fa-calendar-alt"></i> Создан: {{\Carbon\Carbon::parse($project->created_at)->format('d.m.Y')}}</small>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        @foreach($project->users as $user)
                                        <li>
                                            <img src="{{$user->avatar_url}}" class="avatar" alt="Avatar" title="{{$user->fullname}}">
                                        </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn {{$project->priorityClass()}} btn-xs">{{$project->priority}}</button>
                                </td>
                                <td>
                                    <button type="button" class="btn {{$project->statusClass()}} btn-xs">{{$project->status}}</button>
                                </td>

                                <td align="right">
                                    <a href="{{route('projects.show', $project)}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                    <a href="{{route('projects.update', $project)}}" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Edit </a>
                                    <a href="{{route('projects.destroy', $project)}}" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i>Delete </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection