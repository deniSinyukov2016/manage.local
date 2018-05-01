@extends('layouts.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <ol class="breadcrumb pull-left text-uppercase" >
                    <li><a href="{{route('projects.index')}}">Проекты</a></li>
                    <li><a href="javascript:0;" class="btn disabled no-padding">{{str_limit($project->title, 30)}}</a></li>
                </ol>
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
                        <h2>{{$project->title}}</h2>
                        <ul class="nav navbar-right panel_toolbox ">
                            <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <div class="col-md-9 col-sm-9 col-xs-12">

                            <ul class="stats-overview">
                                <li>
                                    <span class="name"> Комментарии </span>
                                    <span class="value text-success"> {{count($project->comments)}} </span>
                                </li>
                                <li>
                                    <span class="name"> Команда </span>
                                    <span class="value text-success"> {{count($project->users)}} </span>
                                </li>
                                <li class="hidden-phone">
                                    <span class="name"> Задачи </span>
                                    <span class="value text-success"> 20 </span>
                                </li>
                            </ul>
                            <br />

                            <div>

                                <h4>Комментарии:</h4>

                                <!-- end of user messages -->
                                <ul class="messages">
                                    @foreach($project->comments as $comment)
                                    <li>
                                        <img src="{{$comment->user->avatar_url}}" class="avatar" alt="Avatar">
                                        <div class="message_date">
                                            <h3 class="date text-info">{{\Carbon\Carbon::parse($comment->created_at)->format('d')}}</h3>
                                            <p class="month">{{\Carbon\Carbon::parse($comment->created_at)->format('F')}}</p>
                                        </div>
                                        <div class="message_wrapper">
                                            <h4 class="heading">{{$comment->user->fullname}}</h4>
                                            <blockquote class="message">{{$comment->body}}</blockquote>
                                            <br />
                                            {{--<p class="url">--}}
                                                {{--<span class="fs1 text-info" aria-hidden="true" data-icon=""></span>--}}
                                                {{--<a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>--}}
                                            {{--</p>--}}
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <!-- end of user messages -->


                            </div>


                        </div>

                        <!-- start project-detail sidebar -->
                        <div class="col-md-3 col-sm-3 col-xs-12">

                            <section class="panel">

                                <div class="x_title">
                                    <h2>Описание проекта</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <h3 class="green"><i class="fa fa-paint-brush"></i> Описание</h3>

                                    <p>{{$project->description}}</p>
                                    <br />

                                    <div class="project_detail">

                                        <p class="title">Создатель проекта:</p>
                                        <p>{{$project->creator->fullname}}</p>
                                        <p class="title">Дата создания</p>
                                        <p>{{\Carbon\Carbon::parse($project->created_at)->format('d.m.Y')}}</p>
                                    </div>

                                    <br />
                                    <h5>Файлы проекта:</h5>
                                    <ul class="list-unstyled project_files">
                                        @foreach($project->files as $file)
                                        <li><a href=""><i class="far fa-file-pdf"></i></i> {{$file->original_name}}</a></li>
                                        @endforeach
                                    </ul>
                                    <br />

                                    <div class="text-center mtop20">
                                        <a href="#" class="btn btn-sm btn-primary">Добавить файл</a>
                                        <a href="#" class="btn btn-sm btn-warning">Отчет</a>
                                    </div>
                                </div>

                            </section>

                        </div>
                        <!-- end project-detail sidebar -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection